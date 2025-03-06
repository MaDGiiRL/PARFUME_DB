<?php

namespace App\Http\Controllers;

use App\Models\Parfum;
use Illuminate\Http\Request;
use App\Http\Requests\ParfumRequest;

class ParfumController extends Controller
{
    public function create()
    {
        $parfums = Parfum::all();
        return view('parfum.create', compact('parfums'));
    }

    public function store(ParfumRequest $request)
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

    public function show(Parfum $parfum)
    {

        return view('parfum.show', compact('parfum'));
    }

    public function index()
    {
        $parfums = Parfum::latest()->get();
        return view('parfum.index', compact('parfums'));
    }
}
