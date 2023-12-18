<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AppController extends Controller
{
    //

    public function index(){
        return Inertia::render('App', [
            'title' => 'Home',
            'description' => 'Blog Interia App',
            'articles' => [
                [
                    'id' => 1,
                    'title' => 'Article 1',
                    'content' => 'Content 1',
                    'link' => 'demo1'
                ],
                [
                    'id' => 2,
                    'title' => 'Article 2',
                    'content' => 'Content 2',
                    'link' => 'demo2'
                ],
                [
                    'id' => 3,
                    'title' => 'Article 2',
                    'content' => 'Content 2',
                    'link' => 'demo3'
                ]
            ]
        ]);
    }

    /*

    return inertia::render('App', [
        'title' => 'Home',
        'description' => 'Blog Interia App',
        'articles' => [
            [
                'id' => 1,
                'title' => 'Article 1',
                'content' => 'Content 1'
            ],
            [
                'id' => 2,
                'title' => 'Article 2',
                'content' => 'Content 2'
            ],
            [
                'id' => 3,
                'title' => 'Article 2',
                'content' => 'Content 2'
            ]
        ]
    ]);
    */
}
