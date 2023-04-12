<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;

class ArticlesController extends Controller
{
    protected array $articles = [
        1 =>[
            'title' => 'Article 1',
            'content' => 'Article 1 content'
            ],
        2 =>[
            'title' => 'Article 2',
            'content' => 'Article 2 content'
            ]
        ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = new Article(); 
        return view('articles.index', ['articles' => $article->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        $validated = $request->validated();

        $article = new Article();
        //$article->title = $request->input('title');
        //$article->content = $request->input('content');
       // $article->save();

        $articleItem = $article->create($validated);

        $request->session()->flash('status','Article created!');

        return redirect()->route('articles.show', ['article' => $articleItem->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::where('id','=',$id)->get()->first();
            abort_if(!isset($article), 404);
            
            return view('articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
