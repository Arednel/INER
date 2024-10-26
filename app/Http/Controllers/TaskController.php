<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\UserTaskAnswer;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function complete(Request $request)
    {
        $task_completed = UserTaskAnswer::where('topic_id', $request->topic_id)
            ->where('user_id', auth()->user()->id)
            ->exists();
        if ($task_completed) {
            dd('show error that topic is completed');
        }

        //Create database record for this topic
        UserTaskAnswer::create([
            'user_id' => auth()->user()->id,
            'main_subject_id' => Topic::find($request->topic_id)->main_subject()->first()->id,
            'secondary_subject_id' => optional(Topic::find($request->topic_id)->secondary_subject()->first())->id,
            'topic_id' => $request->topic_id,
            'task_id' => $request->task_id,
            'body' => $request->body,
        ]);

        return redirect("/Topic/$request->topic_id");
    }
}
