@extends('layouts.main')
@section('title','Edit Sale')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    {!! Form::model($service,['method' => 'PATCH','action' => ['ServiceController@update',$service->service_id]]) !!}
                    @include('services._form',['submitButtonText' => 'Update Services'])
                    {{ Form::hidden('customer_id', $service->customer->customer_id) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection