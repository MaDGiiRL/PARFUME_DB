<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('review.index', compact('reviews'));
    }


    public function store(ReviewRequest $request)
    {
        Review::create([
            'name' => $request->name,
            'where' => $request->where,
            'comment' => $request->comment,
            'rate' => $request->rate,
        ]);

        return redirect(route('review.index'))->with('message', 'Reviewed sent.');
    }
}
