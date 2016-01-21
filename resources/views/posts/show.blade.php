@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>{{$item->title}}</h1>
                    <p>by : {{$item->user->name}}</p>

                </div>

                <div class="panel-body">
                    <p>{{$item->content}}</p>
                </div>


                <div class="panel-footer">
                @can('edit_post')
                    <a href="/posts/{{$item->id}}/edit" class="btn btn-info">Edit Post</a>
                @endcan
                @can('delete_post')
                    <a href="/posts/{{$item->id}}/delete" class="btn btn-info">delete Post</a>
                @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
