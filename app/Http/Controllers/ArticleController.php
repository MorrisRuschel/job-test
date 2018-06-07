<?php

namespace App\Http\Controllers;

use App\Article;
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
        $records = Article::orderBy( 'created_at', 'desc' );

        return view( 'articles.index', [ 'records' => $records ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'articles.save' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $record              = new Article;
        $record->category_id = $request->category_id;
        $record->title       = $request->title;
        $record->description = $request->description;
        $record->save();

        return redirect()->route( 'articles.index' )->with( 'message', 'Registro criado com sucesso!' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $articles)
    {
        $record = Article::findOrFail( $id );

        return view( 'articles.edit', compact( 'article' ) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $articles)
    {
        $record = Article::findOrFail( $id );

        return view( 'articles.edit', compact( 'article' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $articles)
    {
        $record              = Article::findOrFail( $id );
        $record->category_id = $request->category_id;
        $record->title       = $request->title;
        $record->description = $request->description;
        $record->save();

        return redirect()->route( 'articles.index' )->with( 'message', 'Registro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $articles)
    {
        $record = Article::findOrFail( $id );
        $record->delete();

        return redirect()->route( 'articles.index' )->with( 'alert-success', 'Registro removido com sucesso!' );
    }
}
