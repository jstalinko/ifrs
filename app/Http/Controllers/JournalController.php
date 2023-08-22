<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\View\View;


class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function journal(): View
    {
        return view('journals.journal', [
            'journals' => Journal::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('journals.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        Journal::create([
            'journal_number' => $request->journal_number,
            'journal_type' => $request->journal_type,
            'journal_date' => $request->journal_date,
            'journal_reference' => $request->journal_reference,
            'journal_description' => $request->journal_description,
            'debit' => $request->debit,
            'kredit' => $request->kredit
            
        ]);

        return redirect('/journal/general');
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
