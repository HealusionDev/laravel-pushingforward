<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use Gate;

class ArticlesPublicController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function showpublic(Article $id)
    {
        $articles = Article::all();
        $article = $articles->find($id);
        
        /* $articles = App\Article::where('active', 1)->get();*/

        return view('showpublic')->with([
            'article'=> $article
        ]);
   }
}
