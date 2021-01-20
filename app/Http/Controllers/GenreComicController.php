<?php

namespace App\Http\Controllers;

use App\Genre;
use App\GenreComic;
use Illuminate\Http\Request;

class GenreComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('ok');
        $data = Genre::all();
        return view('admin.genre.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * @param  \App\GenreComic  $genreComic
     * @return \Illuminate\Http\Response
     */
    public function show(GenreComic $genreComic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GenreComic  $genreComic
     * @return \Illuminate\Http\Response
     */
    public function edit(GenreComic $genreComic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GenreComic  $genreComic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GenreComic $genreComic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GenreComic  $genreComic
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenreComic $genreComic)
    {
        //
    }
}
