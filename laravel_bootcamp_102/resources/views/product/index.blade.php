@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                        <tr>
                            <th>photo</th>
                            <th>name</th>
                            <th class="text-right">price</th>
                            <th class="text-right">created_by</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><img src="{{asset('/uploads/products/').'/'.$product->photo}}" alt="{{$product->name}}" width="200px" height="200px"/></td>
                                <td>{{$product->name}}</td>
                                <td class="text-right">{{$product->price}}</td>
                                <td class="text-right">{{$product->user[0]->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                    <div class="au-card-inner">
                        <div class="table-responsive">
                            <table class="table table-top-countries">
                                <tbody>
                                <tr>
                                    <td>United States</td>
                                    <td class="text-right">$119,366.96</td>
                                </tr>
                                <tr>
                                    <td>Australia</td>
                                    <td class="text-right">$70,261.65</td>
                                </tr>
                                <tr>
                                    <td>United Kingdom</td>
                                    <td class="text-right">$46,399.22</td>
                                </tr>
                                <tr>
                                    <td>Turkey</td>
                                    <td class="text-right">$35,364.90</td>
                                </tr>
                                <tr>
                                    <td>Germany</td>
                                    <td class="text-right">$20,366.96</td>
                                </tr>
                                <tr>
                                    <td>France</td>
                                    <td class="text-right">$10,366.96</td>
                                </tr>
                                <tr>
                                    <td>Australia</td>
                                    <td class="text-right">$5,366.96</td>
                                </tr>
                                <tr>
                                    <td>Italy</td>
                                    <td class="text-right">$1639.32</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
