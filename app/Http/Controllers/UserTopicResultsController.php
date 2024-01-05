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

    private function ExcelExport($user_topic_results)
    {
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

        //get average score
        $average = $user_topic_results->avg('user_score_to_hundred');

        if ($average) {
            array_push($results[0], null, $average);
        }
        //If average is 0 (without that, average will not be listed, if it is 0)
        else if ($average === 0) {
            array_push($results[0], null, $average);
        }

        $export = new UserTopicResultsExport([$results]);

        return Excel::download($export, 'results.xlsx');
    }

    public function ExcelExportFromUser(string $user_id)
    {
        //Get user results
        $user_topic_results = UserTopicResult::where('user_id', $user_id)
            ->get();

        return $this->ExcelExport($user_topic_results);
    }

    public function ExcelExportFromSubject(string $subject_id)
    {
        //Get subject results
        $user_topic_results = UserTopicResult::where('main_subject_id', $subject_id)
            ->orWhere('secondary_subject_id', $subject_id)
            ->get();

        return $this->ExcelExport($user_topic_results);
    }

    public function ExcelExportFromTopic(string $topic_id)
    {
        //Get subject results
        $user_topic_results = UserTopicResult::where('topic_id', $topic_id)
            ->get();

        return $this->ExcelExport($user_topic_results);
    }
}
