<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Answer;
use App\Models\UserAnswer;
use App\Models\Question;

use Illuminate\Http\Request;
use App\Models\UserTopicResult;

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
                // Create database record for this question
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

        $user_score_to_hundred = intval($user_score * (100 / $max_score));

        //Create database record for this topic
        UserTopicResult::create([
            'user_id' => auth()->user()->id,
            'main_subject_id' => Topic::find($request->topic_id)->main_subject()->first()->id,
            'secondary_subject_id' => optional(Topic::find($request->topic_id)->secondary_subject()->first())->id,
            'topic_id' => $request->topic_id,
            'max_score' => $max_score,
            'user_score' => $user_score,
            'user_score_to_hundred' => $user_score_to_hundred,
        ]);

        $topic_id = $request->topic_id;
        $questions = Question::where('topic_id', $topic_id)->get();

        foreach ($questions as $question) {
            $answers[$question->id] = Answer::where('question_id', $question->id)->get();
        }

        return view(
            'quiz.answers',
            [
                'topic_id' => $topic_id,
                'questions' => $questions,
                'answers' => $answers
            ]
        );
    }

    public function result(Request $request)
    {
        $topic_completed = UserTopicResult::where('topic_id', $request->topic_id)
            ->where('user_id', auth()->user()->id)
            ->first();

        $user_score_to_hundred = $topic_completed->user_score_to_hundred;

        return view('quiz.result', ['user_score_to_hundred' => $user_score_to_hundred]);
    }
}
