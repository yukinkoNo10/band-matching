@extends('layouts.default')
@section('title', 'マイページ')
@section('content')
<h1>mypageです。</h1>
<img class="ml-10 mt-2 rounded-full shadow-md w-16 mb-2" src="{{ asset('storage/'.$info->image) }}" alt="">
<h1>{{ $info->name}}</h1>
@endsection