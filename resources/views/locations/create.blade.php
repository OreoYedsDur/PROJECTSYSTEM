@extends('layouts.main')
@section('title','Create Location')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    {!! Form::open(['url' => 'locations']) !!}
                        @include('locations._form',['submitButtonText' => 'Add Location'])
                        {{ Form::hidden('customer_id', $customer->customer_id) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection