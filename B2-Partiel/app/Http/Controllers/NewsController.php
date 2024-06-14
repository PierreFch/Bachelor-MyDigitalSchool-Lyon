<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsFormRequest;
use App\Models\News;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', ['news' => News::all()]);
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(NewsFormRequest $request)
    {
        $input = $request->safe()->only([
            'title',
            'short_description',
        ]);
        $news = News::create($input);

        return redirect(route('news.index'));
    }

    public function show(News $news, Section $section)
    {
        return view('news.show', ['news' => $news], ['section' => $section]);
    }

    public function edit(News $news)
    {
        return view('news.edit', ['news' => $news]);
    }

    public function update(NewsFormRequest $request, News $news)
    {
        $input = $request->only([
            'title',
            'short_description',
        ]);

        $news->update($input);

        return redirect(route('news.show', $news));
    }

    public function destroy(News $news)
    {
        if (Auth::user())
        {
            $news->delete();
            return redirect(route('news.index'))->with('success', 'L\'actualité à été supprimée !');
        }
        return redirect(route('news.index'))->with('error', "Vous ne pouvez pas supprimer cette actualité.");
    }
}
