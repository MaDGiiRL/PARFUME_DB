<?php

namespace App\Http\Controllers;

use App\Models\Parfum;
use Illuminate\Http\Request;

class ParfumController extends Controller
{
    public function create()
    {
        $parfums = Parfum::all();
        return view('parfum.create', compact('parfums'));
    }

    public function store(Request $request)
    {
        Parfum::create([
            'name' => $request->input('name'),
            'scent' => $request->input('scent'),
            'price' => $request->input('price'),
            'body' => $request->input('body'),
            'img' => $request->has('img') ?  $request->file('img')->store('cover', 'public') : 'images/default.png'
        ]);


        return redirect(route('parfum.create'))->with('message', 'Feedback sent.');
    }
}
