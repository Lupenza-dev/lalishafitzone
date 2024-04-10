@extends('frontend.layouts.main')
@section('content')
 <!--Page Header-->
 <div class="page-header text-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                <div class="page-title"><h1>Login</h1></div>
                <!--Breadcrumbs-->
                <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>My Account</span><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Login</span></div>
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
                    <form class="customer-form" id="user_auth">	
                        <h2 class="text-center fs-4 mb-3">Registered Customers</h2>
                        <p class="text-center mb-4">If you have an account with us, please log in.</p>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="CustomerEmail">Email <span class="required">*</span></label>
                                <input type="email" name="username" placeholder="Write Email" id="CustomerEmail" value="" required />
                            </div>
                            <div class="form-group col-12">
                                <label for="CustomerPassword">Password <span class="required">*</span></label>
                                <input type="password" name="password" placeholder="Write Password" id="CustomerPassword" value="" required />                        	
                            </div>
                            <div class="form-group col-12">
                                <div class="login-remember-forgot d-flex justify-content-between align-items-center">
                                    <div class="remember-check customCheckbox">
                                        <input id="remember" name="remember" type="checkbox" value="1" />
                                        <label for="remember"> Remember me</label>
                                    </div>
                                    <a href="#">Forgot your password?</a>
                                </div>
                            </div>
                            <div class="form-group col-12 mb-0">
                                {{-- <input type="submit" class="btn btn-primary btn-lg w-100" value="Sign In" /> --}}
                                <button class="btn btn-primary btn-lg w-100" type="submit"><i class="icon anm anm-sign-in-ar" style="margin-right: 2px"></i>  Sign In</button>
                            </div>
                            <div id="user_auth_alert" class="col-12" style="margin-top: 2px">
                            </div>
                        </div>

                        <div class="login-divide"><span class="login-divide-text">OR</span></div>

                        <p class="text-center fs-6 text-muted mb-3">Sign in with social account</p>
                        <div class="login-social d-flex-justify-center">
                            <a class="social-link facebook rounded-5 d-flex-justify-center" href="#"><i class="icon anm anm-facebook-f me-2"></i> Facebook</a>
                            <a class="social-link google rounded-5 d-flex-justify-center" href="#"><i class="icon anm anm-google-plus-g me-2"></i> Google</a>
                            <a class="social-link twitter rounded-5 d-flex-justify-center" href="#"><i class="icon anm anm-twitter me-2"></i> Twitter</a>
                        </div>

                        <div class="login-signup-text mt-4 mb-2 fs-6 text-center text-muted">Don,t have an account? <a href="{{ route('register')}}" class="btn-link">Sign up now</a></div>
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
        $('#user_auth').on('submit',function(e){
            e.preventDefault();
         var dataz =$(this).serialize();
            $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
            });
  
        $.ajax({
        type:'POST',
        url:"{{ route('authenticate.user')}}",
        data:dataz,
        success:function(response){
            console.log(response);
            $.notify(response.message, "success");
          setTimeout(function(){
            window.location.href=response.url;
          },500);
         
        },
        error:function(response){
            console.log(response.responseText);
            if (jQuery.type(response.responseJSON.errors) == "object") {
              $('#user_auth_alert').html('');
            $.each(response.responseJSON.errors,function(key,value){
                $('#user_auth_alert').append('<div class="alert alert-danger">'+value+'</div>');
            });
            } else {
               $('#user_auth_alert').html('<div class="alert alert-danger">'+response.responseJSON.errors+'</div>');
            }
        },
        beforeSend : function(){
            $('#user_btn').html('<span class="fas fa-spinner fas-pulse fas-spin"></span> Authenticating ---');
            $('#user_btn').attr('disabled', true);
        },
       complete : function(){
            $('#user_btn').html('<span class="fas fa-sign-in-alt"></span> Sign In');
            $('#user_btn').attr('disabled', false);
        }
        });
    });
    });
  </script>
    
@endpush