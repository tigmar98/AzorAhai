@extends('layouts.app')

@section('content')
    <a href="theories/new">Add New Theory</a>
    @foreach($theories as $theory)
        <p class="title">{{$theory['title']}}</p>
        <span class="theory">{{$theory['theory']}}</span>
    @endforeach

@endsection

