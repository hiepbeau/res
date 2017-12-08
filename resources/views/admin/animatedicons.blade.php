@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Animated Icons
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link href="{{ asset('assets/css/pages/icon.css') }}" rel="stylesheet" type="text/css" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Animated Icons</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI Features</a>
                    </li>
                    <li class="active">Animated Icons</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content paddingleft_right15">
                <!--main content-->

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="brightness-down" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Animated Icons
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="adjust" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <!--main content ends-->
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    })
    </script>
    
@stop
