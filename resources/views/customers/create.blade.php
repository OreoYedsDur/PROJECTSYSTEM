@extends('layouts.main')
@section('title','Create Customer')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    {!! Form::open(['url' => 'customers']) !!}
                    @include('customers._form',['submitButtonText' => 'Add Customer'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection