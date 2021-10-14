@extends('layouts.main')
@section('container')
  <h1>Halaman News</h1>
  @foreach ($news as $news_posts)
  <article class="mb-5">
    <h4>{{ $news_posts["judul_berita"] }}</h4>
    <h6>By:{{ $news_posts["penulis"] }}</h6>
    <p>{{ $news_posts["isi_berita"] }}</p> 
  </article>
  @endforeach
@endsection

