@extends('layouts.main')
@section('title','Customers')
@section('page_header')
{{ $customer->customer_name }}
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="pull-right">

                    </div>
                    <i class="fa fa-cloud" aria-hidden="true"></i> Services
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Project</th>
                            <th>Service Type</th>
                            <th>Package</th>
                            <th>Service Order</th>
                            <th>Service Status</th>
                            <th>Open Commit</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($customer->services as $service)
                            <tr>
                                <td>{{ $service->service_id }}</td>
                                <td>{{ $service->project->project_name }}</td>
                                <td>{{ $service->servicetype->servicetype_name }}</td>
                                <td>{{ $service->package->package_name }}</td>
                                <td>{{ $service->service_order }}</td>
                                <td>{{ $service->service_status }}</td>
                                <td>{{ $service->open_commit }}</td>
                                <td>
                                    <a href="{{ url("services/{$service->service_id}/edit") }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <fieldset></fieldset>
                    <div class="form-group">
                        <a href="{{ url("/services/create/{$customer->customer_id}") }}" class="btn btn-primary">Create Service</a>
                    </div>
                </div>
            </div>
        </div><!--col-md-6-->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="pull-right">

                    </div>
                    <i class="fa fa-location-arrow" aria-hidden="true"></i> Locations
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Location Type</th>
                            <th>Location Description</th>
                            <th>Location Address</th>
                            <th>Province</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($customer->locations as $location)
                            <tr>
                                <td>{{ $location->location_id }}</td>
                                <td>{{ $location->location_type }}</td>
                                <td>{{ $location->location_des }}</td>
                                <td>{{ $location->location_address }}</td>
                                <td>{{ $location->province->province_nameeng }}</td>
                                <td>
                                    <a href="{{ url("locations/{$location->location_id}/edit") }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <fieldset></fieldset>
                    <div class="form-group">
                        <a href="{{ url("/locations/create/{$customer->customer_id}") }}" class="btn btn-primary">Create Location</a>
                    </div>
                </div>
            </div>
        </div><!--col-md-6-->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="pull-right">

                    </div>
                    <i class="fa fa-address-book-o" aria-hidden="true"></i> Contacts
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Contact Name</th>
                            <th>Contact Position</th>
                            <th>Contact Tel</th>
                            <th>Contact Email</th>
                            <th>Operator</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($customer->contacts as $contact)
                            <tr>
                                <td>{{ $contact->contact_id }}</td>
                                <td>{{ $contact->contact_name }}</td>
                                <td>{{ $contact->contact_position }}</td>
                                <td>{{ $contact->contact_tel }}</td>
                                <td>{{ $contact->contact_email }}</td>
                                <td>{{ $contact->contact_operator }}</td>
                                <td>
                                    <a href="{{ url("contacts/{$contact->contact_id}/edit") }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <fieldset></fieldset>
                    <div class="form-group">
                        <a href="{{ url("/contacts/create/{$customer->customer_id}") }}" class="btn btn-primary">Create Contact</a>
                    </div>
                </div>
            </div>
        </div><!--col-md-6-->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="pull-right">

                    </div>
                    <i class="fa fa-sticky-note" aria-hidden="true"></i> Logbooks
                </div>

                <div class="panel-body">
                    @foreach ($customer->logbooks as $logbook)
                        <tr>
                            <fieldset>
                                <div class="panel panel-default blog-box">
                                    <div class="panel-heading">
                                        <div class="media clearfix">
                                            <a class="pull-left">
                                                <img src="http://www.makstudios.co.uk/images/avatar4.png" alt="profile-picture" width="40" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <h6 class=" margin-b-0">Created by: <span class="font-600">elvin Smith</span> </h6>

                                                <small class="text-muted">{!! $logbook->created_at; !!}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>{{ $logbook->logbook_title }}</h4>
                                        {!! $logbook->logbook_body; !!}
                                    </div>
                                    <div class="panel-footer">
                                <span class="pull-right">
                                    <i class="fa fa-comments-o"> </i> 58 comments
                                </span>
                                        <i class="fa fa-eye"> </i> 356 views
                                    </div>
                                </div><!--end panel blog-->
                            </fieldset>
                    @endforeach


                    {!! Form::open(['url' => 'logbooks','files'=>true]) !!}
                        @include('logbooks._form',['submitButtonText' => 'Add Logbook'])
                        {{ Form::hidden('customer_id', $customer->customer_id) }}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection