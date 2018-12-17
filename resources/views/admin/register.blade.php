@extends('admin.master')
@section('main-content')
            <!-- Register Start-->
               
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form id="adminpro-register-form" class="adminpro-form" method="post" action="{{ route('postAdminRegister') }}">
                             @csrf
                            <div class="col-lg-6">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                                <a href="#"><img src="img/logo/logo.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Registration Form</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Full Name</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="login-input-area register-mg-rt">
                                                        <input type="text" name="admin_name" />
                                                        <i class="fa fa-user login-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         @if ($errors->has('admin_name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('admin_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Email Address</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="email" name="admin_email" />
                                                <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        @if ($errors->has('admin_email'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('admin_email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Password</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="password" name="admin_password" />
                                                <i class="fa fa-lock login-user"></i>
                                            </div>
                                        </div>
                                        @if ($errors->has('admin_password'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('admin_password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Confirm Password</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="password" name="admin_confirmpassword" />
                                                <i class="fa fa-lock login-user"></i>
                                            </div>
                                        </div>
                                        @if ($errors->has('admin_confirmpassword'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('admin_confirmpassword') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <button type="submit" class="login-button login-button-lg">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            <!-- Register End-->
@endsection
