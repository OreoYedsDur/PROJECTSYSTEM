<div class="form-group">
    {!! Form::label('sale_name','Name : ') !!}
    {!! Form::text('sale_name',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('sale_tel','Tel : ') !!}
    {!! Form::text('sale_tel',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('sale_email','Email : ') !!}
    {!! Form::text('sale_email',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('sale_line','Line : ') !!}
    {!! Form::text('sale_line',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('sale_address','Address : ') !!}
    {!! Form::text('sale_address',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('groupsale_id','Group Sale : ') !!}
    {!! Form::select('groupsale_id',$groupsalelist,null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
</div>