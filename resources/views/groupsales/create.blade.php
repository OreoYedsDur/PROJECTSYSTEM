@extends('layouts.main')
@section('title','Create Group Sale')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    {!! Form::open(['url' => 'groupsales']) !!}
                        @include('groupsales._form',['submitButtonText' => 'Add Group Sale'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection