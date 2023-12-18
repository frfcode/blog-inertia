<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    //
    public function index($id){
        return inertia::render('Post/Post', ['id' => $id]);
    }

    public function store(Request $request){
        return true;
    }

    public function create(){
        return Inertia::render('Post/Create');
    }

    public function show($id){
        dd($id);
        return true;
    }

    public function update(Request $request, $id){
        return true;
    }

    public function destroy($id){
        return true;
    }

    public function edit($id){
        return true;
    }



}
