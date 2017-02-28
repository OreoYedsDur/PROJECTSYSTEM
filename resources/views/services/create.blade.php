@extends('layouts.main')
@section('title','Create Service')
@section('page_header')
    {{ $customer->customer_name }}
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Create Service</b>
                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'services']) !!}
                    @include('services._form',['submitButtonText' => 'Add Service'])
                    {{ Form::hidden('customer_id', $customer->customer_id) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection