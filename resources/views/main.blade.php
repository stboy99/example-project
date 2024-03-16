@extends('welcome')
@section('content')
<div>
    <div style="text-align: end; margin-bottom:20px;">
        <a href="{{route('record_create')}}" class="btn btn-success">Create New Product</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price (RM)</th>
                <th>Details</th>
                <th>Publish</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
    </table>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
        $(function() {
            var table = $('.table').DataTable({
                ajax: {
                    url: '{!! route('welcome') !!}',
                },
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'detail',
                    name: 'detail'
                },
                {
                    data: 'publish',
                    name: 'publish'
                },
                {
                    data: 'action',
                    name: 'action',
                    searchable: false,
                    sortable: false,
                }
            ],
        });
        // delete record
        $('table tbody').on('click', '.btn-delete', function(e) {
            e.preventDefault();
            var url = $(this).data('url');
            swal.queue([{
                title: 'Confirm?',
                text: 'Delete Record?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                showLoaderOnConfirm: true,
                preConfirm: (response) => {
                    if (response) {
                        return axios.delete(url, {})
                            .then(() => {
                                table.ajax.reload();
                            })
                            .catch((e) => {
                                console.error("error ", e)
                                swal.showValidationMessage(
                                    `Request failed: ${e}`
                                );
                            })
                    }
                },
                allowOutsideClick: () => !swal.isLoading()
            }]).then((result) => {
                if (result.value) {
                    swal.fire({
                        title: 'Deleted',
                        text: 'Item Deleted',
                        type: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'Ok',
                    });
                    // reload datatables
                    table.ajax.reload();
                }
            });
        });
    });
</script>
@endpush