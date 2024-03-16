<div class='text-center'>
    <a href='{{route('record_detail', ['id' => $model->id])}}' class='btn btn-primary'>Show</a>
    <a href='{{route('record_update', ['id' => $model->id])}}' class='btn btn-success'>Update</a>
    <a href="#" data-url='{{route('record_delete', ['id' => $model->id])}}'
        class='btn btn-delete btn-danger'>Delete</i>
    </a>
</div>