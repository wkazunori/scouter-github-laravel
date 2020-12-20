@extends('layouts.application')
@section('title', '投稿一覧')

@section('content')
  <h1>{{$post->title}}</h1>
  <p>{{$post->body}}</p>
  <div><a href="/posts">投稿一覧へ戻る</a></div>
@endsection
