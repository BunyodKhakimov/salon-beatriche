@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{asset('js/jquery-ui-datepicker/jquery-ui.min.css')}}" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
@endsection

@section('content')
        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 tm-sm-12 tm-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block font-weight-bold">Edit User</h2>
{{--                            <a href="#"><h2 class="tm-block-title d-inline-block">Edit User</h2></a>--}}
{{--                            <a href="#"><h2 class="tm-block-title d-inline-block">Edit User</h2></a>--}}
                        </div>
                    </div>
                    <div class="row  tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="{{route('user.update', $user->id)}}" method="POST" class="tm-edit-product-form">
                                @csrf
                                @method('PATCH')
                                <div class="input-group mb-3 form-group">
                                    <label for="role" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Role</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="role" name="role">
                                        <option @if($user->role == 1) selected @endif value="1">Admin</option>
                                        <option @if($user->role == 2) selected @endif value="2">Master</option>
                                        <option @if($user->role == 0) selected @endif value="0">User</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3 form-group">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Name</label>
                                    <input id="name" name="name" type="text" value="{{$user->name}}" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                <div class="input-group mb-3 form-group">
                                    <label for="phone" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Phone</label>
                                    <input id="phone" name="phone" type="text" value="{{$user->phone}}" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                <div class="input-group mb-3 form-group">
                                    <label for="info" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Info</label>
                                    <textarea id="info" name="info" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="7" required>{{$user->info}}</textarea>
                                </div>
                                <div class="input-group mb-3 form-group">
                                    <label for="email" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Email</label>
                                    <input id="email" name="email" type="text" value="{{$user->email}}" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"
                                           data-large-mode="true">
                                </div>
                                <div class="input-group mb-3 form-group">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 mx-auto mb-4">
                            <img src="{{asset('images/product-image.jpg')}}" alt="Profile Image" class="img-fluid mx-auto d-block">
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" style="display:none;" />
                                <input type="button" class="btn btn-primary d-block mx-auto" value="Upload Image" onclick="document.getElementById('fileInput').click();"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 tm-sm-12 tm-col">
                <div class="bg-white tm-block h-100">
                    <h2 class="tm-block-title d-inline-block">User Skills</h2>
                    <table class="table table-hover table-striped mt-3">
                        <tbody>
                            <tr class="tm-bg-gray">
                                <th scope="col">Skill Name</th>
                                <th scope="col" class="text-center">Value</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                            @foreach($user->skills as $skill)
                                <tr>
                                    <td>{{$skill->title}}</td>
                                    <td class="text-center">{{$skill->value}}</td>

                                    <td class="tm-trash-icon-cell text-center">
                                        <i class="fas fa-edit tm-trash-icon"></i>
                                        <form action="{{ route('skill.destroy', $skill->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button style="border: none; background-color:transparent;" type="submit"><i class="fas fa-trash-alt tm-trash-icon"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <form action="{{route('skill.store', $user->id)}}" method="POST" class="tm-edit-product-form">
                                @csrf
                                <tr>
                                    <td><input placeholder="New skill" id="title" name="title" type="text" class="form-control validate"></td>
                                    <td><input placeholder="Value" id="value" name="value" type="number" min="0" max="100" class="form-control validate"></td>
                                    <td><button class="btn btn-primary" type="submit">Create Skill</button></td>
                                </tr>
                            </form>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 tm-sm-12 tm-col">
                <div class="bg-white tm-block h-100">
                    <h2 class="tm-block-title d-inline-block">User Services</h2>
                    <table class="table table-hover table-striped mt-3">
                        <tbody>
                            <tr class="tm-bg-gray">
                                <th scope="col">Service Name</th>
                                <th scope="col" class="text-center">Price</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                            @foreach($user->services as $service)
                                <tr>
                                    <td>{{$service->title}}</td>
                                    <td class="text-center">{{$service->price}}</td>
                                    <td class="tm-trash-icon-cell text-center">
                                        <i class="fas fa-edit tm-trash-icon"></i>
                                        <form action="{{ route('service.destroy', $service->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button style="border: none; background-color:transparent;" type="submit"><i class="fas fa-trash-alt tm-trash-icon"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tfoot>
                                <form action="{{route('service.store', $user->id)}}" method="POST" class="tm-edit-product-form">
                                    @csrf
                                    <tr>
                                        <td><input placeholder="New service" id="title" name="title" type="text" class="form-control validate"></td>
                                        <td><input placeholder="Price" id="price" name="price" type="number" min="0" class="form-control validate"></td>
                                        <td><button class="btn btn-primary" type="submit">Create Service</button></td>
                                    </tr>
                                </form>
                            </tfoot>
                        </tbody>
                    </table>
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
