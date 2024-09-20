<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'fullname' => 'required|max:100',
                'email' => 'required|email|max:50',
                'stars' => 'required|max:5',
                'review' => 'required',
            ], [
                'fullname.required' => 'Proporciona nombre completo.',
                'email.max' => 'Email con máximo 50 caracteres.',
                'stars.required' => 'Proporciona las estrellas.',
                'review.required' => 'Favor de escribir el review.',
            ]);
            $review = new Review();
            $review->fullname = $request->input('fullname');
            $review->email = $request->input('email');
            $review->stars = $request->input('stars');
            $review->Review = $request->input('review');
            $review->product_id=$request->input('product_id');
            $review->save();
            $product_id = $review->product_id;

            return redirect()->route('product_details', ['id' => $product_id])->with('success', 'Your review has been submitted.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
