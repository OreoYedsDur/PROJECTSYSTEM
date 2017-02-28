<div class="form-group">
    {!! Form::label('groupsale_name','Group Sale Name : ') !!}
    {!! Form::text('groupsale_name',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('groupsale_des','Group Sale Description : ') !!}
    {!! Form::text('groupsale_des',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
</div>