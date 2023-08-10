@extends('layouts.admin')
@section('title', '登録済みニュースの一覧')


@section('content')
   <div class="container">
       <div class="row">
           <h2>ニュース一覧</h2>
       </div>
       <div class="row">
           <div class="col-md-4">
               <a href="{{ url('admin/news/create') }}" role="button" class="btn btn-primary">新規作成</a>
           </div>
           <div class="col-md-8">
               <form action="{{ url('admin/news') }}" method="get">
                   <div class="form-group row">
                       <label class="col-md-2">タイトル</label>
                       <div class="col-md-8">
                           <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                       </div>
                       <div class="col-md-2">
                           {{ csrf_field() }}
                           <input type="submit" class="btn btn-primary" value="検索">
                       </div>
                   </div>
               </form>
           </div>
       </div>
       <div class="row">
           <div class="list-news col-md-12 mx-auto mt-5">
               <div class="row">
                   <table class="table table-light">
                       <thead>
                           <tr>
                               <th width="10%">ID</th>
                               <th width="20%">タイトル</th>
                               <th width="50%">本文</th>
                               <!-- 投稿したニュースを更新/削除しようの章で追記 -->
                               <th width="10%">操作</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($posts as $news)
                               <tr>
                                   <th>{{ $news->id }}</th>
                                   <td>{{ Str::limit($news->title, 100) }}</td>
                                   <td>{{ Str::limit($news->body, 250) }}</td>
                                   <td>
                                       <div>
                                           <!-- 投稿したニュースを更新/削除しようの章で追記 -->
                                           <a href="{{ url('admin/news/edit?id='.$news->id)}}">編集</a>
                                           <a href="{{ url('admin/news/delete?id='.$news->id)}}">削除</a>
                                       </div>
                                   </td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>
@endsection