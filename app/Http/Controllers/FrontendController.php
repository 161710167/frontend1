<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lowongan;

class FrontendController extends Controller
{
     public function index()
    {
        $lowongan=Lowongan::all();
        return view('frontend.index',compact('lowongan'));
    }
     public function bacalengkap($id)
    {
        $lowongan=Lowongan::find($id);
        return view('frontend.bacalengkap',compact('lowongan'));
    }
     public function daftarlowongan()
    {
        $lowongan=Lowongan::all();
        return view('frontend.daftarlowongan',compact('lowongan'));
    }
}
