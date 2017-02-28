<div class="form-group">
    {!! Form::label('logbook_title','Logbook Topic') !!}
    {!! Form::text('logbook_title',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('logbook_body','Logbook Body') !!}
    {!! Form::textarea('logbook_body',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
</div>