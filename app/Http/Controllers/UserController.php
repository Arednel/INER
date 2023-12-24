<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use TCG\Voyager\Facades\Voyager;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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

    public function results(Request $request, string $user_id)
    {
        //This function return questions (or any other slug) index voyager view
        $dataType = Voyager::model('DataType')->where('slug', '=', 'user-topic-results')->first();

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
        $dataTypeContent = $dataTypeContent->filter(function ($value, $key) use ($user_id) {
            if ($value['user_id'] == $user_id) {
                return $value;
            }
        });

        return view('bread.browse', compact(
            'actions',
            'dataType',
            'dataTypeContent',
            'isModelTranslatable',
            'orderColumn',
            'isServerSide',
            'usesSoftDeletes',
            'showCheckboxColumn'
        ));
    }
}
