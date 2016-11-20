@extends('main')

@section('title')
    Index
@endsection


@section('content')

       <div class="row">
                <div class="col-md-10">
                    <h1> All Posts </h1>
                </div>

                <div class="col-md-2">
                    <a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>
       </div>


        <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>title</th>
                            <th>Body</th>
                            <th>Created At</th>
                            <th></th>
                        </thead>

                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th>{{$post->id}}</th>
                                <th>{{$post->title}}</th>
                                <th> {{ substr($post->body, 0, 15)}} {{strlen($post->body) > 15 ? "..." : ""}}</th>
                                <th>{{ date( 'M j, Y', strtotime($post->created_at))}}</th>
                                <th><a href="{{route('posts.destroy',$post->id)}}" class="btn btn-default btn-sm">Delete</a> <a href="{{route('posts.edit',$post->id)}}" class="btn btn-default btn-sm">Edit</a></th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="text-center">
                        {!! $posts->links() !!}
                    </div>
                </div>
        </div>

@endsection