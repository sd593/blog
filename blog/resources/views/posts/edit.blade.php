@extends('main')

@section('title')
        Edit Post
@endsection


@section('content')



    <div class="row">

        <!-- bind the model to the form -->
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

        <div class="col-md-8">

            {!! Form::label('title', 'Title :') !!}
            {!! Form::text('title', null, ['class' => 'form-control input-lg'] ) !!}


            {!! Form::label('title', 'Body :' , ['class' => 'btn-h1-spacing']) !!}
            {!! Form::textarea('body', null, ['class' => 'form-control'] ) !!}
        </div>

       <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt> Created At: </dt>

                <dd>{{ date( 'M j, Y', strtotime($post->created_at))}}<dd>
            </dl>

            <dl class="dl-horizontal">
                <dt> Modified At: </dt>

                <dd>{{ date( 'M j, Y', strtotime($post->updated_at))}} </dd>
            </dl>

            <hr/>


            <div class="row">
                <div class="col-sm-6">
                   <a href="{{route('posts.show',$post->id)}}" class="btn btn-danger btn-block">Cancel</a>
                </div>

                <div class="col-sm-6">
                    {!! Form::submit('Save', ['class' => 'btn btn-success btn-block']) !!}


                </div>
            </div>
        </div>
    </div>

    {!!  Form::close() !!}


@endsection