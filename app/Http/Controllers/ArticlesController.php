<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    //
    public function index(){
        $articles = Article::latest()->get();
        return view('article.index',compact("articles"));
    }


    public function detail($id){
        $article = Article::findorFail($id);

        return view('article.show',compact('article'));
    }
    public function create(){
        return view('article.create');
    }

    public function store(Request $request){
        $result = $request->all();
        Article::create($result);
        return redirect('articles');
    }

}
