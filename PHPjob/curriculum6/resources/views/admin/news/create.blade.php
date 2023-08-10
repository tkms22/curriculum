{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ニュース新規作成</h2>
                <form action="{{ url('admin/news/create') }}" method="post" enctype="multipart/form-data">


                   @if (count($errors) > 0)
                       <ul>
                           @foreach($errors->all() as $e)
                               <li>{{ $e }}</li>
                           @endforeach
                       </ul>
                   @endif
                   <div class="mb-3">
                       <label for="title" class="form-label">タイトル</label>
                       <input type="text" name="title" class="form-control" id="title">
                   </div>
                   <div class="mb-3">
                       <label for="body" class="form-label">本文</label>
                       <textarea class="form-control" name="body" rows="20" id="body">{{ old('body') }}</textarea>
                   </div>
                   <div class="mb-3">
                       <label class="col-md-2" for="file">画像</label>
                       <input type="file" class="form-control" name="image" id="file">
                   </div>
                   {{ csrf_field() }}
                   <div class="text-center">
                   <button type="submit" class="btn btn-primary mt-2 text-center px-5 py-2">作成</button>
                   </div>
               </form>
            </div>
        </div>
    </div>
@endsection