@extends('layouts.main')
@section('title','Edit Sale')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    {!! Form::model($sale,['method' => 'PATCH','action' => ['SaleController@update',$sale->sale_id]]) !!}
                    @include('sales._form',['submitButtonText' => 'Update Sale'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection