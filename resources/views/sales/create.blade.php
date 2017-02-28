@extends('layouts.main')
@section('title','Create Sale')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    {!! Form::open(['url' => 'sales']) !!}
                        @include('sales._form',['submitButtonText' => 'Add Sale'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection