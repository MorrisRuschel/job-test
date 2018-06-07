<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Category::all();

        return view( 'categories.index', [ 'records' => $records ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'categories.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        $record              = new Category;
        $record->title       = $request->title;
        $record->save();

        return redirect()->route( 'categories.index' )->with( 'message', 'Registro criado com sucesso!' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show( Category $category )
    {
        $record = Category::findOrFail( $category->id );

        return view( 'categories.show', compact( 'record' ) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit( Category $category )
    {
        $record = Category::findOrFail( $category->id );

        return view( 'categories.edit', compact( 'record' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Category $category )
    {
        $record              = Category::findOrFail( $category->id );
        $record->title       = $request->title;
        $record->save();

        return redirect()->route( 'categories.index' )->with( 'message', 'Registro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy( Category $category )
    {
        $record = Category::findOrFail( $category->id );
        $record->delete();

        return redirect()->route( 'categories.index' )->with( 'message', 'Registro removido com sucesso!' );
    }
}
