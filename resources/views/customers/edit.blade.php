@extends('layouts.main')
@section('title','Edit Customer')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    {!! Form::model($customer,['method' => 'PATCH','action' => ['CustomerController@update',$customer->customer_id]]) !!}
                    @include('customers._form',['submitButtonText' => 'Update Customer'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection