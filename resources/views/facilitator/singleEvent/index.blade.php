@extends('layout.layout')

@section('content')
    <div class="container d-flex justify-content-between align-items-center">
    <h1>{{$event->title}}</h1>
    <label class="">put link here</label>
   
    </div>
    <div class="container mt-5">
        @include('facilitator.singleEvent.judges.index')
        @include('facilitator.singleEvent.contestants.index')
    </div>
@endsection