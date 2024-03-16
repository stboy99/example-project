@extends('welcome')
@section('content')
<div>
    <div class="title">
        <div class="bigtitle">Show product</div>
        <div><a href="{{route('welcome')}}" class="btn btn-primary">Back</a></div>
    </div>
    <div>name: {{$model->name}}</div>
    <div>price: {{$model->price}}</div>
    <div>detail: {{$model->detail}}</div>
    <div>publish: {{$model->publish == 1 ? 'yes' : 'no'}}</div>
</div>
@endsection