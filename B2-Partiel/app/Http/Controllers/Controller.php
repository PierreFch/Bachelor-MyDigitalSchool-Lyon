<?php

namespace App\Http\Controllers;

use App\Models\News;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(News $news)
    {
        return view('welcome', ['news' => News::all()]);
    }

    public function programme()
    {
        return view('programme');
    }

    public function actions()
    {
        return view('actions');
    }

    public function mentionsLegales()
    {
        return view('mentions.mentions_legales');
    }

    public function politiqueConfidentialite()
    {
        return view('mentions.politique_confidentialite');
    }

    public function donneesPersonnelles()
    {
        return view('mentions.donnees_personnelles');
    }
}
