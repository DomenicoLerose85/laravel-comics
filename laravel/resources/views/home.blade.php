

@extends('layouts.basic')

@section('pageTitle')
DC Comics - Home
@endsection

@section('mainContent')
   <h1>Home</h1> 
   {{-- @dump($fumetti) --}}
   <div class="container">
       <div class="row">
           @foreach ($fumetti  as $fumetti)
            <div class="col">
                <img src="{{$fumetti['thumb']}}" alt="{{$fumetti['thumb']}}">
                <h2>{{$fumetti['title']}}</h2>
            </div>
               
           @endforeach
       </div>
   </div>
@endsection