<?php

namespace App\Http\Controllers;

use App\Komik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function karya()
    {
        $data = Komik::all()->where('id_user', Auth::id());
        $komik = Komik::all()->where('id_user', Auth::id())->where('jenis','komik');
        $novel = Komik::all()->where('id_user', Auth::id())->where('jenis','novel');
        return view('member.karya',compact('data','komik','novel'));
    }
}
