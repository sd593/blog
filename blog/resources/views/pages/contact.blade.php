
@extends('main')


@section('title')

Contact

@endsection

@section('content')
     <div class="row col-md-12">
        <h1> Contact Me </h1>

        <hr/>

        <div class="form-group">
            <label name="email">Email :</label>
            <input  id="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label name="subject">Subject :</label>
            <input  id="subject" name="subject" class="form-control">
        </div>

        <div class="form-group">
            <label name="message">Message :</label>
            <textarea  id="message" name="message" class="form-control">Type Your Message Here!</textarea>
        </div>

        <input class="btn btn-success" type="submit" value="Send Message">

     </div>

  @endsection


