<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    //
    public function index(){
        return true;
    }

    public function store(Request $request){
        return true;
    }

    public function create(){
        return Inertia::render('Post/Create');
    }

    public function show(Request $request){
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
