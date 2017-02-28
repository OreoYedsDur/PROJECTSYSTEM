@extends('layouts.main')
@section('title','Edit Sale')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    {!! Form::model($location,['method' => 'PATCH','action' => ['LocationController@update',$location->location_id]]) !!}
                    @include('locations._form',['submitButtonText' => 'Update Location'])
                    {{ Form::hidden('customer_id', $location->customer->customer_id) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection