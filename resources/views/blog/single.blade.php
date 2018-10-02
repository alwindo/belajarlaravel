@extends('layouts.master')

@section('title', 'alwindo.com')<!-- jika text nya singkat atau pendek kita bisa masukkan ke parameters ke dua -->

@section('content')
    Selamat Belajar laravel 5.3
    <p>
      {{ $blog }}
    </p>
    @foreach ( $nama as $nam )
      <li> {{ $nam->username }} </li>
    @endforeach
    <br>

    {{ $html }}<!--jika menggunakan "{{" untuk meng-echo => tag html akan diangap sebagai string-->
    {!! $html !!}<!--jika ingin memasukkan tag html gunakanlah "{!!"
                     istilah ini biasa disebut anescaped-->

@endsection
