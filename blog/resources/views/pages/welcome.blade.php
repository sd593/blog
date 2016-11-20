
@extends('main')


@section('title')

Home

@endsection

@section('content')


      <div class="row">
          <div class="col-md-12">
              <div class="jumbotron">
                  <h1> Hello World!!</h1>
                  <p class="leading">Thank you for visiting</p> 
                  <a href="/posts" class="btn btn-primary">Popular Post</a>
          </div>
      </div>



        @foreach($posts as $post)

        <div class="post">
           <h3> {{$post->title}}</h3>
           <p style="test-align:center">
               {{ substr($post->body, 0, 25)}} {{strlen($post->body) > 15 ? "..." : ""}}
           </p>

           <a href="" class="btn btn-primary">Read More</a>
       </div>

         <hr/>
        @endforeach





  @endsection



 @section('sidebar')
     <div class="col-md-3 col-md-offset2">
            <h1> SIDEBAR </h1>
     </div>

    </div>
 @endsection


