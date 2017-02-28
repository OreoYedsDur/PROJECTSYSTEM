<div class="row">
    <div class="col-md-6">
        {!! Form::label('service','Service Information') !!}

        <div class="form-group">
            {!! Form::label('project_id','Project') !!}
            {!! Form::select('project_id',$projectlist,null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('location_id','Location') !!}
            {!! Form::select('location_id',$locationlist,null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('servicetype_id','Service Type') !!}
            {!! Form::select('servicetype_id',$servicetypelist,null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('package_id','Package : ') !!}
            {!! Form::select('package_id',$packagelist,null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('service_status','Service Status') !!}
            {!! Form::select('service_status',['Presale' => 'Presale', 'Install' => 'Install','Operate' => 'Operate','Nostatus' => 'No Status'],null,['class' => 'form-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::label('service_order','Service Order') !!}
            {!! Form::text('service_order',null,['class' => 'form-control']) !!}
        </div>



    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('speed','Domestic Bandwidth') !!}
            <fieldset>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('domedown','Download') !!}
                        {!! Form::select('domedown',$speedlist,null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('domeup','Upload') !!}
                        {!! Form::select('domeup',$speedlist,null,['class' => 'form-control']) !!}
                    </div>
                </div>

            </fieldset>

        </div>

        <div class="form-group">
            {!! Form::label('speed','Inter Bandwidth') !!}
            <fieldset>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('interdown','Download') !!}
                        {!! Form::select('interdown',$speedlist,null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('interup','Upload') !!}
                        {!! Form::select('interup',$speedlist,null,['class' => 'form-control']) !!}
                    </div>
                </div>

            </fieldset>

        </div>

        <div class="form-group">
            <fieldset>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('gen_date','Gen Date') !!}
                        {!! Form::date('gen_date',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('open_commit','Open Commit Date') !!}
                        {!! Form::date('open_commit',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('start_contract','Start Contract') !!}
                        {!! Form::date('start_contract',null,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('end_contract','End Contract') !!}
                        {!! Form::date('end_contract',null,['class' => 'form-control']) !!}
                    </div>
                </div>

            </fieldset>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="form-group">
            {!! Form::label('cacti_url','Cacti Url') !!}
            {!! Form::text('cacti_url',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ipptp','IP Point To Point') !!}
            {!! Form::text('ipptp',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('remark','Remark') !!}
            {!! Form::textarea('remark',null,['class' => 'form-control']) !!}
        </div>

    </div>
</div>


<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}
</div>