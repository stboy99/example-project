@extends('welcome')
@section('content')
<div>
    <div class="title">
        <div class="bigtitle">Create product</div>
        <div><a href="{{route('welcome')}}" class="btn btn-primary">Back</a></div>
    </div>
    <form action="{{route('post_record_create')}}" method="POST">
        @csrf
        @include('form')
    </form>
</div>
@endsection