<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        if (auth()->check()) {
            return view('conference.index-admin', compact('conferences'));
        } else {
            return view('conference.index', compact('conferences'));
        }
    }

    public function create()
    {
        return view('conference.create');
    }

    public function store(Request $request)
    {
        $conference = new Conference;
        $conference->title = $request->title;
        $conference->description = $request->description;
        $conference->start_time = $request->start_time;
        $conference->end_time = $request->end_time;
        $conference->location = $request->location;
        $conference->city = $request->city;
        $conference->save();
        return redirect()->route('conference.index');
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        return view('conference.edit', compact('conference'));
    }

    public function update(Request $request, Conference $conference)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'start_time' => 'required|date|after_or_equal:today',
        'end_time' => 'required|date|after_or_equal:start_time',
        'location' => 'nullable',
    ]);

    $conference->update($request->all());

    return redirect()->route('conference.show', $conference);
}

    public function destroy($id)
    {
        $conference = Conference::findOrFail($id);
        $conference->delete();
        
        return redirect()->route('conference.index');
    }

    public function show($id)
    {
        $conference = Conference::findOrFail($id);
        return view('conference.show', compact('conference'));
    }

}
