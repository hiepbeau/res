@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Price
    @parent
    @stop

    {{-- page level styles --}}
    @section('header_styles')
            <!--start of page level css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/faq.css') }}">
    <!--end of page level css-->
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
                    <a href="#">FAQ</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="question" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> FAQ
            </div>
        </div>
    </div>
    @stop


    {{-- Page content --}}
    @section('content')
            <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="control-bar sandbox-control-bar mt10">
                    <span class="btn btn-primary mr10 mb10 filter active" data-filter="all">All</span>
                    <span class="btn btn-primary mr10 mb10 filter" data-filter=".category-1">HTML</span>
                    <span class="btn btn-primary mr10 mb10 filter" data-filter=".category-2">PHP</span>
                    <span class="btn btn-primary mr10 mb10 filter" data-filter=".category-3">JQUERY</span>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="panel-group panel-accordion faq-accordion">
                            <div id="faq">
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="1">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question1">
                                                <strong class="c-gray-light">1.</strong>
                                                How does syncing work?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                               
                                            </p>
                                            <ol>
                                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</li>
                                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="2">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question2">
                                                <strong class="c-gray-light">2.</strong>
                                                How do I upload files from my phone or tablet?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                               
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="3">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question3">
                                                <strong class="c-gray-light">3.</strong>
                                                How do I link to a file or folder?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                              
                                            </p>
                                            <ol>
                                                <li>
                                                    explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores officia! Beatae,
                                                </li>
                                                <li>
                                                    explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores officia! Beatae,
                                                </li>
                                                <li>
                                                    explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores officia! Beatae,
                                                </li>
                                                <li>
                                                    explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores officia! Beatae,
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-12 panel panel-default" data-value="4">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question4">
                                                <strong class="c-gray-light">4.</strong>
                                                How do I change my password?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                               
                                            </p>
                                            <ol>
                                                <li>
                                                    reprehenderit obcaecati voluptates corrupti, minus! Possimus,
                                                </li>
                                                <li>
                                                    reprehenderit obcaecati voluptates corrupti, minus! Possimus,
                                                </li>
                                                <li>
                                                    reprehenderit obcaecati voluptates corrupti, minus! Possimus,
                                                </li>
                                                <li>
                                                    reprehenderit obcaecati voluptates corrupti, minus! Possimus,
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="5">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question5">
                                                <strong class="c-gray-light">5.</strong>
                                                Remote screen alignment problem
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                               
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-12 panel panel-default" data-value="6">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question6">
                                                <strong class="c-gray-light">6.</strong>
                                                How do I delete my account?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                               
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-3 col-lg-12 panel panel-default" data-value="7">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question7">
                                                <strong class="c-gray-light">7.</strong>
                                                Can I have an invoice for my subscription?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                               
                                            </p>
                                            <ol>
                                                <li>Sint nemo iste nulla accusamus quam qui quos,</li>
                                                <li>Sint nemo iste nulla accusamus quam qui quos,</li>
                                                <li>Sint nemo iste nulla accusamus quam qui quos,</li>
                                                <li>Sint nemo iste nulla accusamus quam qui quos,</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-3 col-lg-12 panel panel-default" data-value="8">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question8">
                                                <strong class="c-gray-light">8.</strong>
                                                Why did my credit card or PayPal payment fail?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                </p>
                                            <ol>
                                                <li>
                                                    reprehenderit obcaecati voluptates corrupti, minus! Possimus, perspiciatis!
                                                </li>
                                                <li>
                                                    reprehenderit obcaecati voluptates corrupti, minus! Possimus, perspiciatis!
                                                </li>
                                                <li>
                                                    reprehenderit obcaecati voluptates corrupti, minus! Possimus, perspiciatis!
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-12 panel panel-default" data-value="9">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question9">
                                                <strong class="c-gray-light">9.</strong>
                                                How do I change my account settings?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question9" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis 
                                            </p>
                                            <ol>
                                                <li>voluptates corrupti, minus! Possimus, perspiciatis!</li>
                                                <li>voluptates corrupti, minus! Possimus, perspiciatis!</li>
                                                <li>voluptates corrupti, minus! Possimus, perspiciatis!</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/js/frontend/faq.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/mixitup/jquery.mixitup.js') }}"></script>
@stop
