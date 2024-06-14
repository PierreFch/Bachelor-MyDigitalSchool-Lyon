<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionFormRequest;
use App\Models\News;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsSectionController extends Controller
{
    public function create(News $news)
    {
        return view('newsSection.create', ['news' => $news]);
    }

    public function store(SectionFormRequest $request, News $news)
    {
        $input = $request->safe()->only([
            'title',
            'description',
            'link',
            'image_url',
            'image_alt',
            'image_title'
        ]);

        $section = $news->section()->create($input);

        return redirect(route('news.show', ['news' => $news]))->with('success', "Nouvelle section créée !");
    }

    public function edit(Section $section)
    {
        return view('newsSection.edit', ['section' => $section]);
    }

    public function update(SectionFormRequest $request, Section $section)
    {
        $input = $request->safe()->only([
            'title',
            'description',
            'link',
            'image_url',
            'image_alt',
            'image_title'
        ]);

        $section->update($input);

        return redirect(route('news.show', $section->news))->with('success', "Section mise à jour !");
    }

    public function destroy(Section $section, News $news)
    {
        if (Auth::user())
        {
            $section->delete();
            return redirect(route('news.show', $section->news))->with('success', 'Section supprimée !');
        }
        return redirect(route('news.show', $section->news))->with('error', "Vous ne pouvez pas supprimer cette section.");
    }
}
