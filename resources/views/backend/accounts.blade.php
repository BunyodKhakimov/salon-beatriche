@extends('layouts.app')

@section('content')
    <div class="row tm-content-row tm-mt-big">
        <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
            <div class="bg-white tm-block h-100">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h2 class="tm-block-title d-inline-block">Masters</h2>
                    </div>
                    <div class="col-md-4 col-sm-12 text-right">
                        <a href="{{route('user.create')}}" class="btn btn-small btn-primary">Add New Account</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-striped tm-table-striped-even mt-3">
                        <thead>
                        <tr class="tm-bg-gray">
                            <th scope="col">&nbsp;</th>
                            <th scope="col">Name</th>
                            <th scope="col" class="text-center">Phone</th>
                            <th scope="col" class="text-center">Orders</th>
                            <th scope="col">&nbsp;</th>
                            <th scope="col">&nbsp;</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users[2] as $user)
                            <tr>
                                <th scope="row">
                                    <input type="checkbox" aria-label="Checkbox">
                                </th>
                                <td class="tm-product-name">{{$user->name}}</td>
                                <td class="text-center">{{$user->phone}}</td>
                                <td class="text-center">{{$user->orders->count()}}</td>
                                <td><a style="color: inherit;" href="{{route('user.show', $user->id)}}"><i class="far fa-eye tm-trash-icon"></i></a></td>
                                <td><a style="color: inherit;" href="{{route('user.edit', $user->id)}}"><i class="fas fa-edit tm-trash-icon"></i></a></td>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td><button style="border: none; background-color:transparent;" type="submit"><i class="fas fa-trash tm-trash-icon"></i></button></td>
                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tm-table-mt tm-table-actions-row">
                    <div class="tm-table-actions-col-left">
                        <button class="btn btn-danger">Delete Selected Items</button>
                    </div>
                    <div class="tm-table-actions-col-right">
                        <span class="tm-pagination-label">Page</span>
                        <nav aria-label="Page navigation" class="d-inline-block">
                            <ul class="pagination tm-pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
{{--                                <li class="page-item">--}}
{{--                                    <span class="tm-dots d-block">...</span>--}}
{{--                                </li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">13</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">14</a></li>--}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-12 tm-md-12 tm-sm-12 tm-col">
            <div class="bg-white tm-block h-100">
                <h2 class="tm-block-title d-inline-block">Admins</h2>
                <table class="table table-hover table-striped mt-3">
                    <tbody>
                    @foreach($users[1] as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td class="tm-trash-icon-cell"><a style="color: inherit;" href="{{route('user.show', $user->id)}}"><i class="far fa-eye tm-trash-icon"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <a href="#" class="btn btn-primary tm-table-mt">Add New Category</a>
            </div>
        </div>
    </div>
@endsection
