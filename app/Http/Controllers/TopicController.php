<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Answer;
use App\Models\Question;
use App\Models\UserTopicResult;

use Illuminate\Http\Request;

use TCG\Voyager\Facades\Voyager;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $main_subject_id)
    {
        //orderByRaw is to sort despite if order for topic exists or not
        $topics = Topic::where('main_subject_id', $main_subject_id)->orderByRaw('-order_int DESC')->get();

        foreach ($topics as $topic) {
            if ($topic->required_topic_id) {
                $topic->canStartTopic = UserTopicResult::where('user_id', auth()->user()->id)
                    ->where('topic_id', $topic->required_topic_id)
                    ->exists();

                //If can't start topic
                if (!$topic->canStartTopic) {
                    //Get required topic title
                    $topic->requiredTopicTitle = Topic::where('id', $topic->required_topic_id)->first()->title;

                    //Get required topic->subject title
                    $topic->requiredSubjectTitle = $topic->subject()->first()->title;
                }
            }
        }

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

        //Check, if user can start this topic
        if ($topic->required_topic_id) {
            $canStartTopic = UserTopicResult::where('user_id', auth()->user()->id)
                ->where('topic_id', $topic->required_topic_id)
                ->exists();

            if (!$canStartTopic) {
                dd('Вы не можете начать эту тему');
            }
        }

        //Check if there are any questions in this topic
        $topic_has_questions = Question::where('topic_id', $id)->exists();

        //Check if topic is completed by this user
        if ($topic_has_questions) {
            $topic_completed = UserTopicResult::where('topic_id', $id)
                ->where('user_id', auth()->user()->id)
                ->exists();
        } else {
            $topic_completed = false;
        }

        //Show later score of this topic, if topic is completed
        if ($topic_completed) {
            $user_score_to_hundred = UserTopicResult::where('topic_id', $id)
                ->where('user_id', auth()->user()->id)
                ->first()
                ->user_score_to_hundred;
        } else {
            $user_score_to_hundred = false;
        }

        return view(
            'topic.show',
            [
                'topic' => $topic,
                'topic_has_questions' => $topic_has_questions,
                'topic_completed' => $topic_completed,
                'user_score_to_hundred' => $user_score_to_hundred,
            ]
        );
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

    public function quiz(string $topic_id)
    {
        $topic_completed = UserTopicResult::where('topic_id', $topic_id)
            ->where('user_id', auth()->user()->id)
            ->exists();
        if ($topic_completed) {
            dd('show error that topic is completed');
        }

        $questions = Question::where('topic_id', $topic_id)->get();

        foreach ($questions as $question) {
            $answers[$question->id] = Answer::where('question_id', $question->id)->get();
        }

        return view(
            'quiz.index',
            [
                'topic_id' => $topic_id,
                'questions' => $questions,
                'answers' => $answers
            ]
        );
    }

    public function questions(Request $request, string $topic_id)
    {
        //This function return questions (or any other slug) index voyager view
        $dataType = Voyager::model('DataType')->where('slug', '=', 'questions')->first();

        $actions = [];
        $orderColumn = [];
        $usesSoftDeletes = false;
        $isModelTranslatable = false;
        $isServerSide = false;
        $showCheckboxColumn = false;

        //To search database
        $getter = $dataType->server_side ? 'paginate' : 'get';
        $model = app($dataType->model_name);
        $query = $model::select($dataType->name . '.*');
        $dataTypeContent = call_user_func([$query->latest($model::CREATED_AT), $getter]);

        //Filter only results with this 
        $dataTypeContent = $dataTypeContent->filter(function ($value, $key) use ($topic_id) {
            if ($value['topic_id'] == $topic_id) {
                return $value;
            }
        });

        //Remove topics from questions table
        foreach ($dataTypeContent as $question) {
            unset($question->topic_id);
        }

        //Remove table head
        $browseRowsId = 0;
        foreach ($dataType->browseRows as $row) {
            if (
                $row->getTranslatedAttribute('display_name')
                == "Тема"
            ) {
                unset($dataType->browseRows[$browseRowsId]);
            }
            $browseRowsId++;
        }

        return view('topic.question.browse', compact(
            'actions',
            'dataType',
            'dataTypeContent',
            'isModelTranslatable',
            // 'search',
            // 'orderBy',
            'orderColumn',
            // 'sortableColumns',
            // 'sortOrder',
            // 'searchNames',
            'isServerSide',
            // 'defaultSearchKey',
            'usesSoftDeletes',
            // 'showSoftDeleted',
            'showCheckboxColumn'
        ));
    }
}
