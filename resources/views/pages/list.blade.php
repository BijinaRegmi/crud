@extends('layouts.app')
@section('content')
        <h1> {{$title}}</h1>
        @if(count($list)>0)
        <ul>
            @foreach($list as $lists)
            <li>{{$lists}}</li>
            @endforeach
        </ul>
        @endif
      
       
@endsection