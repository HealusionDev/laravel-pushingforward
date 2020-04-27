<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\User;
use App\Role;
use Gate;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $articles = Article::all()->sortBy('id');
        return view('admin.articles.index')->with('articles', $articles);
    }


    public function edit(Article $article, User $user, Request $request)
    {
        if(Gate::denies('edit-users', $user)){
            return redirect(route('admin.articles.index'));
        }

        $articles = Article::all();

        return view('admin.articles.edit')->with([
            'article'=> $article
        ]);
    }

    
    public function create(Request $request, Article $article)
    {
        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required',
        ]);
        
        $title=$request->input('title');
        $detail=$request->input('detail');

        libxml_use_internal_errors(true);

        $dom = new \DomDocument();

        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    

        $images = $dom->getElementsByTagName('img');

        foreach($images as $count => $image){
            $src = $img->getAttribute('src');

            list($type, $src) = explode(';', $src);
            list(, $src) = explode(',', $src);

            $src = base64_decode($src);
            $image_name= "#" . time().$k.'.png';
            $path = public_path() . $image_name;

            file_put_contents($path, $src);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
    
        $detail = $dom->saveHTML();
        $article = new Article;
        $article->title = $title;
        $article->detail = $detail;
        
        $article->save();

        return redirect()->route('admin.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert()
    {
        //    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article, User $user)
    {
        if(Gate::denies('edit-users', $user)){
            return redirect(route('admin.articles.index'));
        }

        $articles = Article::all();

        return view('admin.articles.show')->with([
            'article'=> $article
        ]);
   }

    
    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->detail = $request->detail;
        $article->save();

        if ($article->save()){
            $request->session()->flash('success', $article->title . ' a été mis à jour');
        }else{
            $request->session()->flash('error', 'Erreur pendant la mise à jour');
        }
        

        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article, User $user)
    {
        if(Gate::denies('delete-users', $user)){
            return redirect(route('admin.users.index'));
        }
        
        $article->destroy($article->id);

        return redirect()->route('admin.articles.index');
    }
}
