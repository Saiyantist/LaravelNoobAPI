<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index ()
    {
        return compact(Post::all()); 
    }

    public function create()
    {

        return response()->json([
            'message' => 'Create a post.'
        ]);  
    }

    public function store(StorePostRequest $request)
    {
        // $validated = $request->validate([
        //     'title' => ['required | max:10'],
        //     'body' => ['required'],
        // ]);

        // BLOCKER: Hindi ko mapagana sa postman ito tulad ng kay sir.
        // Solution: Sa postman, Headers -> untick 'Accept' then add another 'Accept' => 'application/json'

        $validated = $request->validated();

        /**
         * Working with validated input (Alternative)
         */
        // $validated = $request->safe()->only(['title']);
        // $validated = $request->safe()->except(['title']);
        // $validated = $request->safe()->all();

        return response()->json($validated); 
    }
};
