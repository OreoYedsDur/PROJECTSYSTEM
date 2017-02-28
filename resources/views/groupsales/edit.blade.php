@extends('layouts.main')
@section('title','Edit Groupsale')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    {!! Form::model($groupsale,['method' => 'PATCH','action' => ['GroupsaleController@update',$groupsale->groupsale_id]]) !!}
                        @include('groupsales._form',['submitButtonText' => 'Update Group Sale'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection