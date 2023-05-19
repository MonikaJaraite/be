<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();

        return view('countries.index', ['countries'=>$countries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $country = Country::create([
            'name' => $request->name,
            'season_start' => $request->season_start,
            'season_end' => $request->season_end
        ]);
       
        // if($request->file('photo')) {
        //     $country->update(['photo' => $request->file('photo')->store('photos')]);
        // }

        return redirect()
        ->route('countries.index')
        ->with('ok', 'New country has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
