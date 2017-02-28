@extends('layouts.main')
@section('title','All Service')
@section('content')
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">{{ $services->links() }}</div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('services/create') }}" class="btn btn-success">Create Service</a>
            <br><br>
            @foreach($services as $service)
                @if ($service->service_status == "PRESALE")
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                {{ $service->customer->customer_name }} [{{$service->servicetype->servicetype_name}}]
                                <div class="pull-right">

                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <h4><span class="label label-danger"><b>{{ $service->service_status }}</b></span></h4>
                                    <b>Customer : </b> {{ $service->customer->customer_name }}<br>
                                    <b>Service Order : </b> {{ $service->cus_service_order }}<br>
                                    <b>Project : </b> {{$service->project->project_name}}<br>
                                    <b>Service Type : </b> {{$service->servicetype->servicetype_name}}<br>
                                    <b>Package : </b> {{$service->package->package_name}}<br>
                                    <b>Speed : </b> {{ $service->speed }}<br>
                                </div>

                                <div class="col-md-6">
                                    <br>
                                    <b>Inter Bandwidth : </b> {{ $service->interbw }}<br>
                                    <b>Inter Download : </b> {{$service->interdown }}<br>
                                    <b>Inter Upload : </b> {{$service->interup }}<br>
                                    <b>Domes Bandwidth : </b> {{ $service->domebw }}<br>
                                    <b>Domes Download : </b> {{$service->domedown }}<br>
                                    <b>Domes Upload : </b> {{$service->domeup }}<br>
                                </div>
                            </div>
                        </div>
                    </div><!--col-md-6-->
                </div>
                @elseif ($service->service_status == "INSTALL")
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-teal">
                                <div class="panel-heading">
                                    {{ $service->customer->customer_name }} [{{$service->servicetype->servicetype_name}}]
                                    <div class="pull-right">

                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-6">
                                        <h4><span class="label label-teal"><b>{{ $service->service_status }}</b></span></h4>
                                        <b>Customer : </b> {{ $service->customer->customer_name }}<br>
                                        <b>Service Order : </b> {{ $service->cus_service_order }}<br>
                                        <b>Project : </b> {{$service->project->project_name}}<br>
                                        <b>Service Type : </b> {{$service->servicetype->servicetype_name}}<br>
                                        <b>Package : </b> {{$service->package->package_name}}<br>
                                        <b>Speed : </b> {{ $service->speed }}<br>
                                    </div>

                                    <div class="col-md-6">
                                        <br>
                                        <b>Inter Bandwidth : </b> {{ $service->interbw }}<br>
                                        <b>Inter Download : </b> {{$service->interdown }}<br>
                                        <b>Inter Upload : </b> {{$service->interup }}<br>
                                        <b>Domes Bandwidth : </b> {{ $service->domebw }}<br>
                                        <b>Domes Download : </b> {{$service->domedown }}<br>
                                        <b>Domes Upload : </b> {{$service->domeup }}<br>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-md-6-->
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    {{ $service->customer->customer_name }} [{{$service->servicetype->servicetype_name}}]
                                    <div class="pull-right">

                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-6">
                                        <h4><span class="label label-success"><b>{{ $service->service_status }}</b></span></h4>
                                        <b>Customer : </b> {{ $service->customer->customer_name }}<br>
                                        <b>Service Order : </b> {{ $service->cus_service_order }}<br>
                                        <b>Project : </b> {{$service->project->project_name}}<br>
                                        <b>Service Type : </b> {{$service->servicetype->servicetype_name}}<br>
                                        <b>Package : </b> {{$service->package->package_name}}<br>
                                        <b>Speed : </b> {{ $service->speed }}<br>
                                    </div>

                                    <div class="col-md-6">
                                        <br>
                                        <b>Inter Bandwidth : </b> {{ $service->interbw }}<br>
                                        <b>Inter Download : </b> {{$service->interdown }}<br>
                                        <b>Inter Upload : </b> {{$service->interup }}<br>
                                        <b>Domes Bandwidth : </b> {{ $service->domebw }}<br>
                                        <b>Domes Download : </b> {{$service->domedown }}<br>
                                        <b>Domes Upload : </b> {{$service->domeup }}<br>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-md-6-->
                    </div>
                @endif
            @endforeach
            <div class="col-md-6"></div>
            <div class="col-md-6">{{ $services->links() }}</div>
        </div>
    </div>
@endsection