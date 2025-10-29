<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index() {
        $journals = Journal::orderBy('entry_date', 'desc')->get();

        $today = $journals->firstWhere('entry_date', date('Y-m-d'));

        return view('journals.index', compact('journals', 'today'));
    }

    public function create() {
        return view('journals.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'entry_date' => 'required'
        ]);

        Journal::create($request->all());
        return redirect()->route('journals.index');
    }
}
