@extends('main')

@section('stylesheet')
<!-- CSS For The Validation-->
{!! Html::style('assets/css/parsley.css') !!}
@endsection

@section('title', 'Create New Post')

@section('content')

    <!-- there are 12 columns and we need 8 to be centered and 2 side by side  -->
        <div  class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 style="text-align: center"> Create New Post</h1>
                <hr/>


                <!--  'data-parsley-validate' => '' to load parsly validation-->
                {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '') )!!}
                        {{Form::label('title', 'Title :')}}
                        {{Form::text('title', null, array('class' => 'form-control' , 'required' => '', 'maxlength' => '25') )}}

                        {{Form::label('body', 'Post Body :')}}
                        {{Form::textarea('body', null, array('class' => 'form-control' , 'required' => '' , 'maxlength' => '255') )}}

                        {{Form::submit('Create New Post', array('class' => 'form-control , btn,  btn-success' , 'style' => 'margin-top:20px'))}}
                {!! Form::close() !!}

            </div>
        </div>
@endsection

@section('scripts')
    <!-- JS For The Validation-->
    {!! Html::script('assets/js/parsley.min.js') !!}
@endsection