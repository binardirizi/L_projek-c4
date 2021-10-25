<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news', [
            "title" => "News",
            "berita" => Berita::all()
        ]);
    }

    public function show(Berita $news_detil)
    {
        return view('news_detil',[
            "title" => "News Detil",
            "news_detil" => $news_detil
        ]);
    }
}
