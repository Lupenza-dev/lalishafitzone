@extends('frontend.layouts.main')
@section('content')
 <!--Page Header-->
 <div class="page-header text-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                <div class="page-title"><h1>Book Trainer</h1></div>
                <!--Breadcrumbs-->
                <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>My Account</span><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Book Trainer</span></div>
                <!--End Breadcrumbs-->
            </div>
        </div>
    </div>
</div>
<!--End Page Header-->

<!--Main Content-->
<div class="container">   
    <div class="login-register pt-2">
        <div class="row mb-3">
            <div class="col-12 col-sm-10 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                <div class="inner h-100">
                    <form class="customer-form" id="book_trainer">	
                        <h2 class="text-center fs-4 mb-3">Book Trainer</h2>
                        {{-- <p class="text-center mb-4">Please .</p> --}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="CustomerEmail">Firstname <span class="required">*</span></label>
                                <input type="text" name="firstname" placeholder="Write Firstname ....."  value="" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="CustomerEmail">Lastname <span class="required">*</span></label>
                                <input type="text" name="lastname" placeholder="Write Lastname....." value="" required />
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="CustomerEmail">Email <span class="required">*</span></label>
                                <input type="email" name="email" placeholder="Write Email" id="CustomerEmail" value="" required />
                            </div>
                            <div class="form-group col-6">
                                <label for="CustomerEmail">Phone Number <span class="required">*</span></label>
                                <input type="number" name="phone_number" id="CustomerEmail" value="" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="CustomerEmail">Book From (Date) <span class="required">*</span></label>
                                <input type="date" name="start_date" placeholder="Write Email" id="CustomerEmail" value="" required />
                            </div>
                            <div class="form-group col-6">
                                <label for="CustomerEmail">Book To (Date) <span class="required">*</span></label>
                                <input type="date" name="end_date" id="CustomerEmail" value="" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="CustomerEmail">Message <span class="required">*</span></label>
                                <textarea name="description" class="form-control" placeholder="Write description ...." required></textarea>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 mb-0">
                                <button class="btn btn-primary btn-lg w-100" type="submit"><i class="icon anm anm-sign-in-ar" style="margin-right: 2px"></i>  Book</button>
                            </div>
                            <div id="book_trainer_alert" class="col-12" style="margin-top: 2px">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Main Content-->
    
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#book_trainer').on('submit',function(e){
            e.preventDefault();
         var dataz =$(this).serialize();
            $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
            });
  
        $.ajax({
        type:'POST',
        url:"{{ route('book.training')}}",
        data:dataz,
        success:function(response){
            console.log(response);
            $.notify(response.message, "success");
          setTimeout(function(){
            location.reload();
          },500);
         
        },
        error:function(response){
            console.log(response.responseText);
            if (jQuery.type(response.responseJSON.errors) == "object") {
              $('#book_trainer_alert').html('');
            $.each(response.responseJSON.errors,function(key,value){
                $('#book_trainer_alert').append('<div class="alert alert-danger">'+value+'</div>');
            });
            } else {
               $('#book_trainer_alert').html('<div class="alert alert-danger">'+response.responseJSON.errors+'</div>');
            }
        },
        beforeSend : function(){
            $('#user_btn').html('<span class="fas fa-spinner fas-pulse fas-spin"></span> loading......');
            $('#user_btn').attr('disabled', true);
        },
       complete : function(){
            $('#user_btn').html('<span class="fas fa-sign-in-alt"></span> Book');
            $('#user_btn').attr('disabled', false);
        }
        });
    });
    });
  </script>
    
@endpush