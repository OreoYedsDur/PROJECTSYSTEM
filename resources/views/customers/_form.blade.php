<div class="form-group">
    {!! Form::label('customer_name','Customer Name : ') !!}
    {!! Form::text('customer_name',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('customer_tel','Customer Tel : ') !!}
    {!! Form::text('customer_tel',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('customer_des','Customer Description : ') !!}
    {!! Form::text('customer_des',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('sale_id','Sale : ') !!}
    {!! Form::select('sale_id',$salelist,null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
</div>