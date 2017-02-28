@extends('layouts.main')
@section('title','All Customer')
@section('content')
    <div class="row">

        <div class="col-md-12">
            <a href="{{ url('customers/create') }}" class="btn btn-success">Create Customer</a>
            <br><br>
            <div class="panel panel-default collapsed">
                <div class="panel-heading">
                    Customer
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Customer Tel</th>
                            <th>Customer Description</th>
                            <th>Sale</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($allcustomers as $allcustomer)
                            <tr>
                                <td>{{ $allcustomer->customer_id }}</td>
                                <td>{{ $allcustomer->customer_name }}</td>
                                <td>{{ $allcustomer->customer_tel }}</td>
                                <td>{{ $allcustomer->customer_des }}</td>
                                <td>{{ $allcustomer->sale->sale_name }}</td>
                                <td>
                                    <a href="{{ url("customers/{$allcustomer->customer_id}") }}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{ url("customers/{$allcustomer->customer_id}/edit") }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection