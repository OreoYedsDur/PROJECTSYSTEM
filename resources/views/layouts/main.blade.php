<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <!-- Common Plugins -->
    {!! Html::style('plugins/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('plugins/simple-line-icons/simple-line-icons.css') !!}
    {!! Html::style('plugins/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('plugins/pace/pace.css') !!}
    {!! Html::style('plugins/jasny-bootstrap/css/jasny-bootstrap.min.css') !!}
    {!! Html::style('plugins/nano-scroll/nanoscroller.css') !!}
    {!! Html::style('plugins/metisMenu/metisMenu.min.css') !!}
    {!! Html::style('plugins/fullcalendar/fullcalendar.css') !!}
    {!! Html::style('plugins/summernote/summernote.css') !!}
    {!! Html::style('plugins/summernote/summernote-bs3.css') !!}
    {!! Html::style('plugins/toast/jquery.toast.min.css') !!}
    <!-- Template Css-->
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/custom.css') !!}

    <!-- Common Plugins -->
    {!! Html::script('plugins/jquery/dist/jquery.min.js') !!}
    {!! Html::script('plugins/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('plugins/pace/pace.min.js') !!}
    {!! Html::script('plugins/jasny-bootstrap/js/jasny-bootstrap.min.js') !!}
    {!! Html::script('plugins/slimscroll/jquery.slimscroll.min.js') !!}
    {!! Html::script('plugins/nano-scroll/jquery.nanoscroller.min.js') !!}
    {!! Html::script('plugins/metisMenu/metisMenu.min.js') !!}
    {!! Html::script('js/float-custom.js') !!}
    {!! Html::script('plugins/summernote/summernote.min.js') !!}
    {!! Html::script('plugins/momentJs/moment-with-locales.js') !!}
    {!! Html::script('plugins/fullcalendar/fullcalendar.min.js') !!}
    {!! Html::script('plugins/toast/jquery.toast.min.js') !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--top bar start-->
@include('includes.header')
<!-- top bar end-->

<!--left navigation start-->
@include('includes.sidebar')
<!--left navigation end-->


<!--main content start-->
<section class="main-content container">

    <!--page header start-->
    @include('includes.pageheader')
    <!--page header end-->

    <!--start page content-->
    @yield('content')
    <!--end page content-->


    <!--Start footer-->
    @include('includes.footer')
    <!--end footer-->

</section>
<!--end main content-->
<script>
    $(function () {
        $('#logbook_body').summernote({
            height: 300,
        });
    });

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        }
    });

</script>

<script>
    @if(Session::has('flash_message'))
         $.toast({
        heading: 'Success',
        text: '{{ Session::get('flash_message') }}',
        position: 'top-right',
        loaderBg: '#fff',
        icon: '{{ Session::get('flash_type') }}',
        hideAfter: 3000,
    });
    @endif
</script>

</body>
</html>