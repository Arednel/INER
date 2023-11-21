<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\News;
use App\Models\NewsData;
use App\Models\TrixRichTexts;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news_all = News::all();
        foreach ($news_all as $news) {
            $news->content = TrixRichTexts::where('model_id', $news->id)
                ->first()
                ->content;

            $news->title = NewsData::find($news->id)
                ->title;
        }
        return view('news.index', ['news_all' => $news_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $content = request()->all()['news-trixFields']['content'];

        //For youtube iframe / youtube embed
        $has_youtube_link = Str::contains(
            $content,
            'iframe'
        );
        if ($has_youtube_link) {
            $content = Str::replace(
                '&lt;',
                '<',
                $content
            );

            $content = Str::replace(
                '&gt;',
                '>',
                $content
            );
            //To overwrite reequest data
            $data['news-trixFields']['content'] = $content;
            $request->merge($data);
        }

        $news = News::create([
            'news-trixFields' => $request['news-trixFields'],
            'attachment-news-trixFields' => $request['attachment-news-trixFields'],
        ]);

        //To save other data (like title)
        NewsData::create([
            'id' => $news->id,
            'title' => $request['title'],
        ]);

        return redirect('/');
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
        $news_one = News::all()->where('id', $id);

        //To show later
        foreach ($news_one as $news) {
            $news->content = TrixRichTexts::where('model_id', $news->id)
                ->first()
                ->content;

            $news->title = NewsData::find($news->id)
                ->title;
        }
        return view('news.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $news_id)
    {
        // $content = request()->all()['news-trixFields']['content'];

        // //For youtube iframe / youtube embed
        // $has_youtube_link = Str::contains(
        //     $content,
        //     'iframe'
        // );
        // if ($has_youtube_link) {
        //     $content = Str::replace(
        //         '&lt;',
        //         '<',
        //         $content
        //     );

        //     $content = Str::replace(
        //         '&gt;',
        //         '>',
        //         $content
        //     );
        //     //To overwrite reequest data
        //     $data['news-trixFields']['content'] = $content;
        //     $request->merge($data);
        // }

        // News::where('id', $news_id)
        //     ->update([]);

        // TrixRichTexts::where('id', $news_id)
        //     ->update([
        //         'content' => $request['news-trixFields'],
        //     ]);

        // //Add update for each image

        // //To save other data (like title)
        // NewsData::where('id', $news_id)
        //     ->update([
        //         'title' => $request['title'],
        //     ]);

        // return redirect('/news');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        News::destroy($id);

        return redirect('/news');
    }

    public function image($image)
    {
        dd('image');
    }

    public function Test()
    {
        return view('Test', ['is_logged' => true]);
    }
}
