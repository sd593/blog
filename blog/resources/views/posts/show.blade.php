@extends('main')

@section('title')
    View Post
@endsection

   <!-- <div class="alert alert-success" role="alert"><strong></strong></div> -->

@section('content')

        <div class="row">

                <div class="col-md-8">
                        <h1> {{$posts->title}} </h1>

                        </p> {{$posts->body}}</p>
                </div>

                <div class="col-md-4">
                        <div class="well">
                                <dl class="dl-horizontal">
                                        <dt> Created At: </dt>

                                        <dd>{{ date( 'M j, Y', strtotime($posts->created_at))}}<dd>
                                </dl>

                                <dl class="dl-horizontal">
                                        <dt> Modified At: </dt>

                                        <dd>{{ date( 'M j, Y', strtotime($posts->updated_at))}} </dd>
                                </dl>

                                <hr/>


                                <div class="row">
                                        <div class="col-sm-6">
                                                {!! Form::open(['route' => ['posts.destroy', $posts->id], 'method' => 'DELETE']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                                                {!! Form::close() !!}
                                        </div>

                                        <div class="col-sm-6">
                                                <a href="{{route('posts.edit',$posts->id)}}" class="btn btn-primary btn-block">Edit </a>

                                        </div>
                                </div>
                        </div>
                </div>


@endsection


