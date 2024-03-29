@extends('layouts.app')

@section('title-block'){{$data->subject}}@endsection

@section('content')
<h1>{{$data->subject}}</h1>
<div class="alert alert-info">
<p> {{$data->message}}</p>
<p>{{$data->email}} - {{$data->name}}</p>
<small>{{$data->created_at}}</small><br>
<a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
<a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>

</div>
@endsection
