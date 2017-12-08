@extends('layouts/default')

{{-- Page title --}}
@section('title')
Portfolio_Item
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/portfolio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.theme.css') }}">
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
                    <a href="#">Portfolio Item</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="clip" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Portfolio Item
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <div class="row details">
            <h2 id="single_portfolio_title"><label> Single Portfolio</label></h2>
           
            <div class="col-md-6 wow bounceInRight" data-wow-duration="1.5s">
                <h3 class="project">Project Description</h3>
                <p class="text-justify">
                   
                </p>
                <h3>Client Details</h3>
                <ul style="padding: 0 0 0 10px;">
                    <li><b>Category:</b>&nbsp;Web Template</li>
                    <br />
                    <li><b>Client:</b>&nbsp;Leda B. Powers</li>
                    <br />
                    <li><b>Tags:</b>&nbsp;Web, PHP</li>
                    <br />
                    <li><b> Link:</b><a href="#">&nbsp;www.domain.com</a></li>
                    <br />
                    <li><a class=" btn btn-primary" href="#"><span class="text-white"><i class="livicon" data-name="hand-right" data-size="24" data-loop="true" data-c="#fff" data-hc="white"></i></span></a></li>
                </ul>
            </div>
            <!-- //Project Description Section End -->
        </div>
        <!-- Related Section Start -->
        <div class="row">
            <div class="col-md-12 project_images">
                <div class="text-center">
                    <h3 class="border-success"><span class="heading_border bg-success">Related Projects</span></h3>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="{{ asset('assets/images/gallery/3.jpg') }}" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="{{ asset('assets/images/gallery/5.jpg') }}" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="{{ asset('assets/images/gallery/7.jpg') }}" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="{{ asset('assets/images/gallery/10.jpg') }}" class="img-responsive"></a>
                </div>
            </div>
        </div>
        <!-- Related Setion End -->
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <!--page level js ends-->
@stop
