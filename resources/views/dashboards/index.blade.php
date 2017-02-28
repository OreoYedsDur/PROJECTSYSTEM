@extends('layouts.main')
@section('title','Dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget bg-danger padding-0">
                <div class="row row-table">
                    <div class="col-xs-4 text-center pv-15 bg-light-dark">
                        <em class="fa fa-comments fa-3x"></em>
                    </div>
                    <div class="col-xs-8 pv-15 text-center">
                        <h2 class="mv-0">{{ DB::table('services')->where('service_status','=','PRESALE')->count() }}</h2>
                        <div class="text-uppercase">Presale</div>
                    </div>
                </div>
            </div><!--end widget-->
        </div><!--end col-->
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget bg-teal padding-0">
                <div class="row row-table">
                    <div class="col-xs-4 text-center pv-15 bg-light-dark">
                        <em class="fa fa-cogs fa-3x"></em>
                    </div>
                    <div class="col-xs-8 pv-15 text-center">
                        <h2 class="mv-0">{{ DB::table('services')->where('service_status','=','INSTALL')->count() }}</h2>
                        <div class="text-uppercase">Install</div>
                    </div>
                </div>
            </div><!--end widget-->
        </div><!--end col-->
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget bg-success padding-0">
                <div class="row row-table">
                    <div class="col-xs-4 text-center pv-15 bg-light-dark">
                        <em class="fa fa-globe fa-3x"></em>
                    </div>
                    <div class="col-xs-8 pv-15 text-center">
                        <h2 class="mv-0">{{ DB::table('services')->where('service_status','=','OPERATE')->count() }}</h2>
                        <div class="text-uppercase">Operate</div>
                    </div>
                </div>
            </div><!--end widget-->
        </div><!--end col-->
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget bg-indigo padding-0">
                <div class="row row-table">
                    <div class="col-xs-4 text-center pv-15 bg-light-dark">
                        <em class="fa fa-cloud fa-3x"></em>
                    </div>
                    <div class="col-xs-8 pv-15 text-center">
                        <h2 class="mv-0">{{ DB::table('services')->count() }}</h2>
                        <div class="text-uppercase">All</div>
                    </div>
                </div>
            </div><!--end widget-->
        </div><!--end col-->
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{--<div id='calendar'></div>--}}
                </div>
            </div>
        </div>
    </div>

@endsection