<?php

namespace App\Http\Controllers;

use App\Komik;
use Illuminate\Http\Request;

class KomikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komik = Komik::all()->where('jenis','komik');
        $novel = Komik::all()->where('jenis','novel');
        return view('admin.buku.index',compact('komik','novel'));
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
     * @param  \App\Komik  $komik
     * @return \Illuminate\Http\Response
     */
    public function show(Komik $komik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Komik  $komik
     * @return \Illuminate\Http\Response
     */
    public function edit(Komik $komik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Komik  $komik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komik $komik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Komik  $komik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komik $komik)
    {
        //
    }

    public function validasi()
    {
        $komik = Komik::all()->where('jenis','komik')->where('status',0);
        $novel = Komik::all()->where('jenis','novel')->where('status',0);
        return view('admin.buku.validasi',compact('komik','novel'));
    }
}
