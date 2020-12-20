@extends('layouts.application')
@section('title', '投稿一覧')

@section('content')
  <table>
    <tr>
      <th>タイトル</th>
      <th>本文</th>
      <th></th>
      <th></th>
    </tr>
  @foreach ($posts as $post)
    <tr>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td><a href="/posts/create">新規作成</a></td>
      <td><a href="/posts/{{$post->id}}">投稿の詳細</a></td>
    </tr>
  @endforeach
  </table>
@endsection
