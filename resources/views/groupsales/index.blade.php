@extends('layouts.main')
@section('title','All Group Sale')
@section('content')

    <div class="row">

        <div class="col-md-12">
            <a href="{{ url('groupsales/create') }}" class="btn btn-success">Create Group Sale</a>
            <br><br>
            <div class="panel panel-default collapsed">
                <div class="panel-heading">
                    Group Sale
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Group Name</th>
                            <th>Group Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($allgroupsales as $allgroupsale)
                            <tr>
                                <td>{{ $allgroupsale->groupsale_id }}</td>
                                <td>{{ $allgroupsale->groupsale_name }}</td>
                                <td>{{ $allgroupsale->groupsale_des }}</td>
                                <td><a href="{{ url("groupsales/{$allgroupsale->groupsale_id}/edit") }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection