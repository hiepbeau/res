@extends('layouts/default')

{{-- Page title --}}
@section('title')
Typography
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/features.css') }}">
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Typography</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="pen" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Typography
            </div>
        </div>
    </div>
@stop


{{-- Page content --}}
@section('content')
    <!-- container Section Start -->
    <div class="container">
        <!-- Heading Section Start -->
        <div class="row">
            <h2 id="typo_title">Typography</h2>
            <!-- Bootstrap Headings Start -->
            <div class="col-md-4">
                <h3 id="heading_title">Heading</h3>
                <div class="box-body text-center">
                   
                </div>
            </div>
            <!-- //Bootstrap Headings End -->
            <!-- Horizontal Descripstion Start -->
            <div class="col-md-4">
                <h3 id="horizontal_description_title"></h3>
                <dl class="dl-horizontal">
                    <dt></dt>
                    <dd></dd>
                    <dt></dt>
                    <dd>
                        
                    </dd>
                    <dd></dd>
                    <dt></dt>
                    <dd></dd>
                    <dt></dt>
                    <dd>
                       
                    </dd>
                </dl>
            </div>
            <!-- //Horizontal Descripstion End -->
            <!-- TextS Section Start -->
            <div class="col-md-4">
                <h3>Texts</h3>
                <div class="pull-right">
                    <ul class="list-unstyled">
                        <li class="warning"></li>
                        <li class="success"></li>
                        <li class="primary"></li>
                        <li class="danger"></li>
                        <li></li>
                    </ul>
                </div>
            </div>
            <!-- //TextS Section Start End -->
        </div>
        <!-- //Heading Section End -->

        <!-- Text align Section Start -->
        <div class="row">
            <!-- Text align start -->
            <div class="col-md-8">
                <h3><label style="padding: 0">Text Align</label></h3>
                <h4 class="text-left"><b></b></h4>
                <p class="text-left"></p>
                <h4 class="text-center"><b></b></h4>
                <p class="text-center"></p>
                <h4 class="text-right"><b>
                </b></h4>
                <p class="text-right"></p>
                <h4 class="text-justify"><b></h4>
                <p class="text-justify"></p>
                <h4 class="text-nowrap"><b></b></h4>
                <p class="text-nowrap">y</p>
            </div>
            <!-- //Text align End -->
            <!-- Text Transformation Start -->
            <div class="col-md-4">
                <h3><label id="text_transformation_title"></label></h3>
                <p class="text-lowercase"></p>
                <p class="text-uppercase"></p>
                <p class="text-capitalize"></p>
            </div>
            <!-- Text Transformation End -->
        </div>
        <!-- //Text align Section End -->
        <!-- Blockquote Section Start -->
        <div class="row">
            <div class="col-md-12">
                <blockquote>
                    <h3 class="warning"></h3>
                    
                    <div>
                        <cite title="Source Title"></cite>
                    </div>
                </blockquote>
            </div>
        </div>
        <!-- //Blockquote Section End -->
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
