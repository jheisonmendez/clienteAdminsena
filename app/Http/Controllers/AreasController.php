<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AreasController extends Controller
{
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);

        return $response->json();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');
        $areas = $this->fetchDataFromApi($url . '/areas');

        return view('areas.index', compact('areas'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');
        $area = $this->fetchDataFromApi($url . '/areas/' . $id);

        return view('areas.show', compact('area'));
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $url = env('URL_SERVER_API');

        Http::post($url . '/areas', $request->only('name'));

        return redirect()->route('areas.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $area = $this->fetchDataFromApi($url . '/areas/' . $id);

        return view('areas.edit', compact('area'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $url = env('URL_SERVER_API');

        Http::put($url . '/areas/' . $id, $request->only('name'));

        return redirect()->route('areas.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');

        Http::delete($url . '/areas/' . $id);

        return redirect()->route('areas.index');
    }
}
