@extends('backend.layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add New FAQ</h4>
                </div>
                <div class="card-body">
                    <form id="faqForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="faq_category_id" class="form-label">Category <span class="text-danger">*</span></label>
                                <select class="form-select" id="faq_category_id" name="faq_category_id" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <label for="question" class="form-label">Question <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="question" name="question" required>
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <label for="answer" class="form-label">Answer <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="answer" name="answer" rows="5" required></textarea>
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="status" name="status" value="1" checked>
                                    <label class="form-check-label" for="status">Active</label>
                                </div>
                            </div>
                            
                            <div class="col-md-12" id="alert"></div>
                            
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" id="submitBtn">
                                    <i class="fas fa-save"></i> Save
                                </button>
                                <a href="{{ route('faqs.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Back to List
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        // Form submission
        $('#faqForm').on('submit', function(e){
            e.preventDefault();
            
            // Get the form data
            var formData = new FormData(this);
            
            // Manually add the status value
            formData.append('status', $('#status').is(':checked') ? 1 : 0);
            
            // Log form data for debugging
            console.log('Form Data:', Object.fromEntries(formData));
            
            $.ajax({
                url: "{{ route('faqs.store') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function(){
                    $('#submitBtn').html('<i class="fas fa-spinner fa-spin"></i> Saving...');
                    $('#submitBtn').attr('disabled', true);
                    $('#alert').html('');
                },
                success: function(response) {
                    console.log('Success Response:', response);
                    if(response.success) {
                        $('#alert').html('<div class="alert alert-success">' + response.message + '</div>');
                        setTimeout(function(){
                            window.location.href = "{{ route('faqs.index') }}";
                        }, 1000);
                    } else {
                        var errorMessage = response.message || 'An error occurred while saving the FAQ.';
                        $('#alert').html('<div class="alert alert-danger">' + errorMessage + '</div>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', xhr.responseText);
                    var errorMessage = 'An error occurred while saving the FAQ.';
                    
                    if (xhr.status === 422) {
                        // Handle validation errors
                        var errors = xhr.responseJSON.errors;
                        var errorHtml = '<div class="alert alert-danger"><ul class="mb-0">';
                        
                        $.each(errors, function(key, value) {
                            errorHtml += '<li>' + value[0] + '</li>';
                        });
                        
                        errorHtml += '</ul></div>';
                        $('#alert').html(errorHtml);
                    } else {
                        // Handle other errors
                        var response = xhr.responseJSON;
                        if (response && response.message) {
                            errorMessage = response.message;
                        }
                        $('#alert').html('<div class="alert alert-danger">' + errorMessage + '</div>');
                    }
                },
                complete: function() {
                    $('#submitBtn').html('<i class="fas fa-save"></i> Save');
                    $('#submitBtn').attr('disabled', false);
                }
            });
        });
    });
</script>
@endpush
