<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupporterFormRequest;
use App\Models\Supporter;
use Illuminate\Http\Request;

class SupporterController extends Controller
{
    public function store(SupporterFormRequest $request)
    {
        $input = $request->safe()->only([
            'lastname',
            'firstname',
            'phone',
            'email',
        ]);

        $supporter = Supporter::create($input);

        return redirect(route('home'))->with('send', 'Merci pour votre inscription !');
    }
}
