@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">FAQs</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">List</a></li>
                        <li class="breadcrumb-item active">FAQ List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body ">
                    <h4 class="card-title text-center">Frequently Asked Questions</h4>
                    <div style="display: flex; flex-direction: row; justify-content:flex-end; padding: 5px 0px 5px 0px">
                        <a href="{{ route('faqs.create') }}" class="btn btn-primary btn-sm waves-effect waves-light">
                            <span class="fa fa-plus font-size-15"></span> Add FAQ
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $faq->category->name ?? 'N/A' }}</td>
                                        <td>{{ Str::limit($faq->question, 100) }}</td>
                                        <td>{!! Str::limit(strip_tags($faq->answer), 100) !!}</td>
                                        <td>{!! $faq->status_formatted !!}</td>
                                        <td>
                                            <a href="{{ route('faqs.edit', $faq->uuid) }}" class="btn btn-primary btn-sm" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button class="btn btn-danger btn-sm" onclick="deleteFaq('{{ $faq->uuid }}')" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->
@endsection

@push('scripts')
<script>
    function deleteFaq(uuid) {
        Swal.fire({
            title: "Delete FAQ?",
            text: "Are you sure you want to delete this FAQ?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            confirmButtonClass: "btn btn-success mt-2",
            cancelButtonClass: "btn btn-danger ms-2 mt-2",
            buttonsStyling: false,
        }).then(function (result) {
            if (result.value) {
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ route('faqs.destroy') }}",
                    method: "POST",
                    data: {
                        uuid: uuid,
                        _token: csrf_token
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({ 
                                title: "Deleted!", 
                                text: response.message, 
                                icon: "success" 
                            });
                            setTimeout(function(){
                                location.reload();
                            }, 500);
                        } else {
                            Swal.fire({ 
                                title: "Error!", 
                                text: response.message || "An error occurred", 
                                icon: "error" 
                            });
                        }
                    },
                    error: function(response) {
                        console.error(response);
                        Swal.fire({ 
                            title: "Error!", 
                            text: response.responseJSON?.message || "An error occurred", 
                            icon: "error" 
                        });
                    }
                });
            }
        });
    }
</script>
@endpush
