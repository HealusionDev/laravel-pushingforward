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

        return view('admin.articles.index')->with([
            'title' => $request['title'],
            'detail' => $request['article'],
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

        $dom = new \DomDocument();

        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    

        /*

       $images = $dom->getElementsByTagName('img');
       foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= "#" . time().$k.'.png';
            $path = public_path() . $image_name;

            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        */
        $detail = $dom->saveHTML();
        $article = new Article;
        $article->title = $title;
        $article->detail = $detail;
        
        $article->save();

        return view('admin.articles.index')->with([
            'title' => $request['title'],
            'detail' => $request['article'],
        ]);
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
     * @param  \Illuminate\Http\Request  $request
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
    public function show(Articles $article)
    {
        //
    }

    
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if(Gate::denies('delete-users', $user)){
            return redirect(route('admin.users.index'));
        }

        /*$('#article').summernote('destroy');*/
    }
}
