<?php

namespace App\Http\Controllers\Phrase;

use App\Http\Controllers\Controller;
use App\Models\Phrase;
use Illuminate\Http\Request;

class PhraseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $randomPhrase = Phrase::inRandomOrder()->first();

        return view('phrase.index', compact('randomPhrase'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phrase.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Phrase $phrase)
    {
        return view('phrase.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phrase $phrase)
    {
        return view('phrase.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phrase $phrase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phrase $phrase)
    {
        //
    }
}
