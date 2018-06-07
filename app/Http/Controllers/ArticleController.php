<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Article::all();

        return view( 'articles.index', [ 'records' => $records ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $records = Category::pluck( 'title', 'id' )->all();

        return view( 'articles.create', [ 'records' => $records ] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        $record              = new Article;
        $record->category_id = $request->category_id;
        $record->title       = $request->title;
        $record->content     = $request->content;
        $record->save();

        $image_name = $record->id . '.' . $request->file( 'image' )->getClientOriginalExtension();
        $request->file( 'image' )->move( public_path( 'static/articles' ), $image_name );

        return redirect()->route( 'articles.index' )->with( 'message', 'Registro criado com sucesso!' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show( Article $article )
    {
        $record  = Article::findOrFail( $article->id );
        $records = Category::pluck( 'title', 'id' )->all();

        return view( 'articles.show', [ 'record' => $record, 'records' => $records ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit( Article $article )
    {
        $record  = Article::findOrFail( $article->id );
        $records = Category::pluck( 'title', 'id' )->all();

        return view( 'articles.edit', [ 'record' => $record, 'records' => $records ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Article $article )
    {
        $record              = Article::findOrFail( $article->id );
        $record->category_id = $request->category_id;
        $record->title       = $request->title;
        $record->content     = $request->content;
        $record->save();

        //$image_name = $record->id . '.' . $request->file( 'image' )->getClientOriginalExtension();
        $image_name = $record->id . '.jpg';
        $request->file( 'image' )->move( public_path( 'static/articles' ), $image_name );

        return redirect()->route( 'articles.index' )->with( 'message', 'Registro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy( Article $article )
    {
        $record = Article::findOrFail( $article->id );
        $record->delete();

        return redirect()->route( 'articles.index' )->with( 'message', 'Registro removido com sucesso!' );
    }
}
