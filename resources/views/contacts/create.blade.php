@extends('layouts.main')
@section('title','Create Contact')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    {!! Form::open(['url' => 'contacts']) !!}
                    @include('contacts._form',['submitButtonText' => 'Add Contact'])
                    {{ Form::hidden('customer_id', $customer->customer_id) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection