<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\UserAnswer;
use App\Models\UserTopicResult;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function complete(Request $request)
    {
        $topic_completed = UserTopicResult::where('topic_id', $request->topic_id)
            ->where('user_id', auth()->user()->id)
            ->exists();
        if ($topic_completed) {
            dd('show error that topic is completed');
        }

        $max_score = 0;
        $user_score = 0;

        if ($request->question) {
            foreach ($request->question as $question_id => $answer_id) {
                //Create database record for this question
                UserAnswer::create([
                    'user_id' => auth()->user()->id,
                    'question_id' => $question_id,
                    'answer_id' => $answer_id,
                ]);

                $answer = Answer::find($answer_id);

                $question_score = $answer->question()->first()->score;
                $max_score += $question_score;

                if ($answer->is_true) {
                    $user_score += $answer->question()->first()->score;
                }
            }
        } else {
            dd('there is no answers');
        }


        //Create database record for this topic
        UserTopicResult::create([
            'user_id' => auth()->user()->id,
            'topic_id' => $request->topic_id,
            'max_score' => $max_score,
            'user_score' => $user_score,
        ]);

        return view('Result', ['user_score' => $user_score, 'max_score' => $max_score]);
    }
}
