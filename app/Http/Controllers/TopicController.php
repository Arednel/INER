<?php

namespace App\Http\Controllers;

use App\Models\Topic;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $main_subject_id)
    {
        $topics = Topic::where('main_subject_id', $main_subject_id)->orderByRaw('-order_int DESC')->get();

        return view('topic.index', ['topics' => $topics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $topic = Topic::where('id', $id)->first();

        return view('topic.show', ['topic' => $topic]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        dd('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $news_id)
    {
        dd('update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd('destroy');
    }
}
