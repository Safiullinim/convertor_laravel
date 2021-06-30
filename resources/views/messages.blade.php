@extends('layouts.app')

@section('title-block')Все сообщения@endsection

@section('content')
<h1>Все сообщения</h1>
@foreach ($data as $el)
<div class="alert alert-info">
<h3> {{$el->subject}}</h3>
<p>{{$el->email}}</p>
<small>{{$el->created_at}}</small><br>
<a href="{{route('contact-data-one', $el->id)}}"><button class="btn btn-warning">Детальнее</button></a>
</div>
@endforeach
@endsection
