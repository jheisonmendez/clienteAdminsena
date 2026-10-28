<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrainingCentersController extends Controller
{
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);

        return $response->json();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');
        $trainingcenters = $this->fetchDataFromApi($url . '/training-centers');

        return view('trainingcenters.index', compact('trainingcenters'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');
        $trainingcenter = $this->fetchDataFromApi($url . '/training-centers/' . $id);

        return view('trainingcenters.show', compact('trainingcenter'));
    }

    public function create()
    {
        return view('trainingcenters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $url = env('URL_SERVER_API');

        Http::post($url . '/training-centers', $request->only('name', 'location'));

        return redirect()->route('trainingcenters.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $trainingcenter = $this->fetchDataFromApi($url . '/training-centers/' . $id);

        return view('trainingcenters.edit', compact('trainingcenter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $url = env('URL_SERVER_API');

        Http::put($url . '/training-centers/' . $id, $request->only('name', 'location'));

        return redirect()->route('trainingcenters.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');

        Http::delete($url . '/training-centers/' . $id);

        return redirect()->route('trainingcenters.index');
    }
}
