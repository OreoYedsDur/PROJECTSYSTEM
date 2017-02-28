@extends('layouts.main')
@section('title','All Sale')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('sales/create') }}" class="btn btn-success">Create Sale</a>
            <br><br>
            <div class="panel panel-default collapsed">
                <div class="panel-heading">
                    Sale
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Tel</th>
                            <th>E-Mail</th>
                            <th>Line</th>
                            <th>Group</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($allsales as $allsale)
                            <tr>
                                <td>{{ $allsale->sale_id }}</td>
                                <td>{{ $allsale->sale_name }}</td>
                                <td>{{ $allsale->sale_tel }}</td>
                                <td>{{ $allsale->sale_email }}</td>
                                <td>{{ $allsale->sale_line }}</td>
                                <td>{{ $allsale->groupsale->groupsale_name }}</td>
                                <td><a href="{{ url("sales/{$allsale->sale_id}/edit") }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection