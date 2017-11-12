@extends('layouts.app')

@section('content')
<div class="jumbotron">
        <h1>What's your age!</h1>
        
        <p class="lead">Enter your date of birth including hours to work our your date of birth accurate to number of hours</p>
        <form action="/" method="post">
            {{ csrf_field() }}
     
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    
         
    <input type="text"  class="form-control" name="name" placeholder="Enter your name" value="{{ old('name')}}" required>
     </div>
  
     <div class="form-group {{ $errors->has('start_date') ? ' has-error' : '' }}">
    
         
    <input type="text"  class="form-control datepicker" id="datepicker" name="date_of_birth" placeholder="Enter Date of Birth" value="{{ old('start_date')}}" required>
     </div>
  
        <p><button class="btn btn-lg btn-success" type='submit'>Enter</button></p
        </form>
        </div>

      
@endsection

@section('additional_scripts')
<script>
  $( function() {
    $( "#datepicker" ).datepicker({changeYear: true, yearRange: "-100:+100", dateFormat: "dd/mm/yy"});
  } );
  </script>
  @endsection
