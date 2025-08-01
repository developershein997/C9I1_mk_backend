@extends('layouts.master')
@section('content')
    {{-- <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Change Password</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Change Password</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section> --}}

    <!-- Main content -->
    <section class="content pt-lg-5 pt-md-5 pt-sm-3 pt-3">
        <div class="container-fluid">
            <div class="card col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-10 offset-1">
                <div class="card-header">
                    <h3 class="fw-bold">
                        Profile
                    </h3>
                </div>
                <form method="POST" action="{{ route('admin.updatePassword', $user->id) }}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                              <div class="row col-12">
                                <div class="form-group  col-md-6">
                                    <label>UserName<span class="text-danger">*</span></label>
                                    <div>{{$user->user_name}}</div>
                                </div>
                                   <div class="form-group col-md-6">
                                    <label>Referral Code<span class="text-danger">*</span></label>
                                    <div>{{$user->referral_code}} </div>
                                </div>
                            </div>
                            <div class="row col-12">

                                 <div class="form-group col-md-6">
                                    <label>New Password<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Confirm Password<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="password_confirmation">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                             <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </section>
@endsection
