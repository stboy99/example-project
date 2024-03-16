@extends('welcome')
@section('content')
<div>
    <div class="title">
        <div class="bigtitle">Update product</div>
        <div><a href="{{route('welcome')}}" class="btn btn-primary">Back</a></div>
    </div>
    <form action="{{route('post_record_update', ['id' => $model->id])}}" method="POST">
        @csrf
        @method('PATCH')
        @include('form', ['model' => $model])
    </form>
</div>
@endsection