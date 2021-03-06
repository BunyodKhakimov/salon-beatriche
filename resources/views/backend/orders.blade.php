@extends('layouts.app')

@section('content')
        <div class="row tm-content-row tm-mt-big">
            <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                <div class="bg-white tm-block h-100">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <h2 class="tm-block-title d-inline-block">Orders</h2>
                        </div>
{{--                        <div class="col-md-4 col-sm-12 text-right">--}}
{{--                            <a href="{{route('user.create')}}" class="btn btn-small btn-primary">Add New Product</a>--}}
{{--                        </div>--}}
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped tm-table-striped-even mt-3">
                            <thead>
                                <tr class="tm-bg-gray">
                                    <th scope="col">&nbsp;</th>
                                    <th scope="col">Service name</th>
                                    <th scope="col" class="text-center">Master</th>
                                    <th scope="col" class="text-center">User</th>
                                    <th scope="col" class="text-center">Phone</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">{{$order->service}}</td>
                                        <td class="text-center">{{$order->user->name}}</td>
                                        <td class="text-center">{{$order->name}}</td>
                                        <td class="text-center">{{$order->phone}}</td>
                                        <td>{{date('Y-m-d', strtotime($order->created_at))}}</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
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
                                    <li class="page-item">
                                        <span class="tm-dots d-block">...</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">13</a></li>
                                    <li class="page-item"><a class="page-link" href="#">14</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                <div class="bg-white tm-block h-100">
                    <h2 class="tm-block-title d-inline-block">Product Categories</h2>
                    <table class="table table-hover table-striped mt-3">
                        <tbody>
                            <tr>
                                <td>1. Cras efficitur lacus</td>
                                <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                            </tr>
                            <tr>
                                <td>2. Pellentesque molestie</td>
                                <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                            </tr>
                            <tr>
                                <td>3. Sed feugiat nulla</td>
                                <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                            </tr>
                            <tr>
                                <td>4. Vestibulum varius arcu</td>
                                <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                            </tr>
                            <tr>
                                <td>5. Aenean eget urna enim</td>
                                <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                            </tr>
                            <tr>
                                <td>6. Condimentum viverra</td>
                                <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                            </tr>
                            <tr>
                                <td>7. In malesuada</td>
                                <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                            </tr>
                            <tr>
                                <td>8. Placerat</td>
                                <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                            </tr>
                            <tr>
                                <td>9. Donec semper</td>
                                <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="#" class="btn btn-primary tm-table-mt">Add New Category</a>
                </div>
            </div>
        </div>
@endsection
