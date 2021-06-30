@extends('layouts.app')

@section('title-block')Конвертор@endsection

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card mx-auto" style="max-width: 385px;">
                <form action="{{route('convertor-form')}}" method="GET">

                    <div class="card-body">
                        <h5 class="card-title">Конвертор валют</h5>
                        <h6 class="card-subtitle mb-2 text-muted">by Safiullin Ilsat</h6>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col">
                                    <label class="form-label" for="from">Из валюты:</label>
                                    <select name="from" class="form-select" id="from">
                                        @php use App\classes\RealConvertor;
                                        $realConvertor = new RealConvertor();
                                        @endphp
                                        @foreach ($realConvertor->getCurrencies() as $key => $val)
                                        <option value="{{$key}}" {{($_GET['from'] ?? '') == $key ? 'selected="selected"' : ''}}>
                                            {{$key}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="form-label" for="to">В валюту:</label>
                                    <select name="to" class="form-select" id="to">
                                        @foreach ($realConvertor->getCurrencies() as $key => $val)
                                        <option value="{{$key}}" {{($_GET['to'] ?? '') == $key ? 'selected="selected"' : ''}}>
                                            {{$key}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" for="amount">Введите сумму:</label>
                            <input type="text" class="form-control" name="amount" value="{{$_GET['amount'] ?? ''}}" placeholder="Например: 120.23">
                        </div>


                        <div class="mt-3 text-center">
                            <button type='submit' class="btn btn-primary">Конвертировать</button>
                        </div>

                        @if ($result['amount'] ?? '')
                        <div class="alert alert-primary text-center mt-3 mb-1" role="alert">
                            <b> {{$result['amount']}} </b> {{$result['from']}} = <br>
                            <b> {{$result['result']}} </b> {{$result['to']}}
                        </div>
                        @endif


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection