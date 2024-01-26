<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostNewsController extends Controller
{
    public function ShowNews(): View
    {
        $posts = DB::table("post_news")->get();

        return view('HomePage', ['posts' => $posts]);



    }

    public function DashboardPage(){
        $posts = DB::table('post_news')->get();

        return view('DashboardPage', ['posts' => $posts]);
    }



    public function PostNewsSubmit(Request $request)
{
    $request->validate([
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
        'description' => 'required',
        'slug' => 'required',
    ]);

    // Get the file from the request
    $image = $request->file('image');

    // Generate a unique name for the file
    $imageName = time() . '.' . $image->getClientOriginalExtension();

    // Move the file to the public/images directory
    $image->move(public_path('images'), $imageName);

    // Save the record in the database with the image path
    $posts = DB::table('post_news')->insert([
        "title" => $request->input('title'),
        "image" => 'images/' . $imageName, // Save the path to the image
        "description" => $request->input('description'),
        "slug" => $request->input('slug'),
    ]);

    if ($posts) {
        return redirect()->back()->with('success', 'News added successfully');
    } else {
        return redirect()->back()->with('error', 'Failed to add news');
    }
}




public function viewNews($id) {
    // Fetch the specific news post based on its ID
    $post = DB::table('post_news')->where('id', $id)->first();

    // Check if the post is found
    if (!$post) {
        return redirect()->back()->with('error', 'News not found');
    }

    // Pass the post data to the view
    return view('ViewNewsPage', ['post' => $post]);
}




}
