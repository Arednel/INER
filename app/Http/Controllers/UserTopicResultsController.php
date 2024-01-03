<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use App\Models\UserTopicResult;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserTopicResultsExport;

class UserTopicResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $main_subject_id)
    {
        dd('index');
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
        dd('show');
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

    public function ExcelExportFromUser(string $user_id)
    {
        //Get user score
        $user_topic_results = UserTopicResult::where('user_id', $user_id)->get();

        //get average score
        $average = $user_topic_results->avg('user_score_to_hundred');

        $results = [];

        foreach ($user_topic_results as $user_topic_result) {
            $username = $user_topic_result->user->name;

            $topic_title = $user_topic_result->topic->title;

            array_push(
                $results,
                [
                    $username,
                    $topic_title,
                    $user_topic_result->user_score_to_hundred
                ]
            );
        }

        $export = new UserTopicResultsExport(
            [
                $results
            ]
        );

        return Excel::download($export, 'results.xlsx');
    }
}
