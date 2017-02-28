<div class="form-group">
    {!! Form::label('location_type','Location Type : ') !!}
    {!! Form::select('location_type',['Headquarters' => 'Headquarters', 'Branch' => 'Branch'],null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('location_des','Location Description : ') !!}
    {!! Form::text('location_des',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('location_address','Location Address : ') !!}
    {!! Form::textarea('location_address',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('province_id','Province : ') !!}
    {!! Form::select('province_id',$provincelist,null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
</div>