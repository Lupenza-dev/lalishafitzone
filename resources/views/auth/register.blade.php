@extends('frontend.layouts.main')
@section('content')
  <!--Page Header-->
  <div class="page-header text-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                <div class="page-title"><h1>Create an Account</h1></div>
                <!--Breadcrumbs-->
                <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>My Account</span><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Create an Account</span></div>
                <!--End Breadcrumbs-->
            </div>
        </div>
    </div>
</div>
<!--End Page Header-->

<!--Main Content-->
<div class="container">   
    <div class="login-register pt-2">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <div class="inner h-100">
                    <form method="post" id="user_reg" action="#" class="customer-form">	
                        <h2 class="text-center fs-4 mb-4">Register here if you are a new customer</h2>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="CustomerUsername">Firstname <span class="required">*</span></label>
                                <input type="text" name="firstname" placeholder="Write Firstname ......." value="" required />
                            </div>
                            <div class="form-group col-12">
                                <label for="CustomerUsername">Lastname <span class="required">*</span></label>
                                <input type="text" name="lastname" placeholder="Write Lastname ..........."  value="" required />
                            </div>
                            <div class="form-group col-12">
                                <label for="CustomerEmail">Email <span class="required">*</span></label>
                                <input type="email" name="email" placeholder="Write Email ......."  value="" required />
                            </div>
                            <div class="form-group col-12">
                                <label for="CustomerPassword">Password <span class="required">*</span></label>
                                <input type="password" name="password" placeholder="Write Password ......."  value="" required />                        	
                            </div>
                            <div class="form-group col-12">
                                <label for="CustomerConfirmPassword">Confirm Password <span class="required">*</span></label>
                                <input type="Password" name="password_confirmation" placeholder="Confirm Password" required />                         	
                            </div>
                            <div class="form-group col-12">
                                <div class="login-remember-forgot d-flex justify-content-between align-items-center">
                                    <div class="agree-check customCheckbox">
                                        <input id="agree" name="agree" type="checkbox" value="agree" />
                                        <label for="agree"> I agree to terms & Policy.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12 mb-0">
                                <button class="btn btn-primary btn-lg w-100" id="reg_btn" type="submit"><i class="icon anm anm-sign-in-ar" style="margin-right: 2px"></i>  Register</button>
                            </div>
                            <div class="form-group col-12 mb-0" id="reg_alert">
                            </div>
                        </div>
                        <div class="login-divide"><span class="login-divide-text">OR</span></div>
                        <p class="text-center fs-6 text-muted mb-3">Or Sign up with</p>
                        <div class="login-social d-flex-justify-center">
                            <a class="social-link facebook rounded-5 d-flex-justify-center" href="#"><i class="icon anm anm-facebook-f me-2"></i> Facebook</a>
                            <a class="social-link google rounded-5 d-flex-justify-center" href="#"><i class="icon anm anm-google-plus-g me-2"></i> Google</a>
                            <a class="social-link twitter rounded-5 d-flex-justify-center" href="#"><i class="icon anm anm-twitter me-2"></i> Twitter</a>
                        </div>

                        <div class="login-signup-text mt-4 mb-2 fs-6 text-center text-muted">Already have an account? <a href="{{ route('register')}}" class="btn-link">Login now</a></div>
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
        $('#user_reg').on('submit',function(e){
            e.preventDefault();
         var dataz =$(this).serialize();
            $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
            });
  
        $.ajax({
        type:'POST',
        url:"{{ route('register.user')}}",
        data:dataz,
        success:function(response){
            console.log(response);
            $.notify(response.message, "success");
          setTimeout(function(){
            window.location.href="{{ route('login')}}";
          },500);
         
        },
        error:function(response){
            console.log(response.responseText);
            if (jQuery.type(response.responseJSON.errors) == "object") {
              $('#reg_alert').html('');
            $.each(response.responseJSON.errors,function(key,value){
                $('#reg_alert').append('<div class="alert alert-danger">'+value+'</div>');
            });
            } else {
               $('#reg_alert').html('<div class="alert alert-danger">'+response.responseJSON.errors+'</div>');
            }
        },
        beforeSend : function(){
            $('#reg_btn').html('<span class="fas fa-spinner fas-pulse fas-spin"></span> loading ---');
            $('#reg_btn').attr('disabled', true);
        },
       complete : function(){
            $('#reg_btn').html('<span class="fas fa-sign-in-alt"></span> Sign In');
            $('#reg_btn').attr('disabled', false);
        }
        });
    });
    });
  </script>
    
@endpush