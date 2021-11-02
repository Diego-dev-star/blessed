@extends('voyager::master')
@section('content')
    @if ($message = Session::get('success'))
        <div class=«alert alert-success alert-block»>
            <button type=«button» class=«close» data-dismiss=«alert»>×</button>
            <strong>{{ $message }}</strong>
        </div>
        <img src=«images/{{ Session::get('image') }}»>
    @endif

    @if (count($errors) > 0)
        <div class=«alert alert-danger»>
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="panel panel-bordered panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="icon wb-image"></i>Слайд</h3>
            <div class="panel-actions">
                <a class="panel-action voyager-angle-up" data-toggle="panel-collapse" aria-hidden="true"></a>
            </div>
        </div>
        <div class="panel-body" style="">
            <input type="file" name="image">
        </div>
    </div>

@stop