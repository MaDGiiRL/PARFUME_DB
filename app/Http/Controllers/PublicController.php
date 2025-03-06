<?php

namespace App\Http\Controllers;

use App\Models\Parfum;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {

        return view('homepage');
    }

    public function shop()
    {
        return view('shop');
    }

    public function about()
    {
        return view('about');
    }

    public function feedback()
    {
        $parfums = Parfum::latest()->take(3)->get();
        return view('parfum.create', compact('parfums'));
    }

    public function contact()
    {
        return view('contact');
    }
}
