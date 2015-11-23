<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Request;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    /*
     *
     * */
    public function index(){
        $articles = \App\Article::latest("published")->published()->get();
        return view("articles.index", compact("articles"));
    }

    /*
     *
     * */
    public function show($id){
        $article = \App\Article::findOrFail($id);
        return view("articles.single", compact("article"));
    }

    /*
     *
     * */
    public function create(){
        return view("articles.create");
    }

    /*
     *
     * */
    public function store(){
        Article::create(Request::all());

        return redirect("articles");
    }
}
