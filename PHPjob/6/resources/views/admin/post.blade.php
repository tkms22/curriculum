@extends('layouts.admin')
@section('title', 'つぶやき一覧')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-8 mx-auto">
               <h2>ホーム</h2>
               <form action="{{ url('admin/post') }}" method="post" enctype="multipart/form-data">

                   @if (count($errors) > 0)
                       <ul>
                           @foreach($errors->all() as $e)
                               <li>{{ $e }}</li>
                           @endforeach
                       </ul>
                   @endif
                   <div class="mb-3">
                       <label for="body" class="form-label">本文</label>
                       <textarea class="form-control" name="body" rows="" id="body">{{ old('body') }}</textarea>
                   </div>
                   {{ csrf_field() }}
                   <div class="text-center">
                   <button type="submit" class="btn btn-primary mt-2 text-center px-5 py-2">つぶやく</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
@endsection