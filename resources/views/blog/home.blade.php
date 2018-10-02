@extends('layouts.master')

@section('title', 'alwindo.com')<!--jika text nya singkat atau pendek kita bisa masukkan ke parameters ke dua-->

@section('content')
    Selamat Belajar laravel
aa
    @foreach($blog as $blg)<!--noma $blog didapat dari sini
      return view('blog/home', ['blog<<<<ini maksudnya>>>>' => $blogs]);-->
      {{ $blg->judul }}
    @endforeach

    @foreach ( $blog as $blg )
      {{ $blg->blg }}
    @endforeach
@endsection
