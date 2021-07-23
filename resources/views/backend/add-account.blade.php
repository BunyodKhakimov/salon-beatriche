@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{asset('js/jquery-ui-datepicker/jquery-ui.min.css')}}" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
@endsection

@section('content')
        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add User</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="{{route('user.store')}}" method="POST" class="tm-edit-product-form">
                                @csrf
                                <div class="input-group mb-3 form-group">
                                    <label for="role" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Role</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="role" name="role">
                                        <option selected>Select one</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Master</option>
                                        <option value="0">User</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3 form-group">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Name</label>
                                    <input id="name" name="name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                <div class="input-group mb-3 form-group">
                                    <label for="phone" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Phone</label>
                                    <input id="phone" name="phone" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                <div class="input-group mb-3 form-group">
                                    <label for="info" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Info</label>
                                    <textarea id="info" name="info" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3" required></textarea>
                                </div>
                                <div class="input-group mb-3 form-group">
                                    <label for="email" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Email</label>
                                    <input id="email" name="email" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"
                                        data-large-mode="true">
                                </div>
                                <div class="input-group mb-3 form-group">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Password</label>
                                    <input id="password" name="password" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3 form-group">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 mx-auto mb-4 form-group">
                            <div class="tm-product-img-dummy mx-auto">
                                <i class="fas fa-5x fa-cloud-upload-alt" onclick="document.getElementById('fileInput').click();"></i>
                            </div>
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" style="display:none;" />
                                <input type="button" class="btn btn-primary d-block mx-auto" value="Upload ..." onclick="document.getElementById('fileInput').click();"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('scripts')
    <script src="{{asset('js/jquery-ui-datepicker/jquery-ui.min.js')}}"></script>
    <!-- https://jqueryui.com/download/ -->
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
@endsection
