<div class="form-group">
    {!! Form::label('contact_name','Contact Name') !!}
    {!! Form::text('contact_name',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contact_position','Contact Position') !!}
    {!! Form::text('contact_position',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contact_tel','Contact Tel') !!}
    {!! Form::text('contact_tel',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contact_offtel','Contact Office Tel') !!}
    {!! Form::text('contact_offtel',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contact_email','Contact Email') !!}
    {!! Form::text('contact_email',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contact_operator','Contact Operator') !!}
    {!! Form::select('contact_operator',['Ais' => 'Ais', 'True' => 'True','Dtac' => 'Dtac'],null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
</div>