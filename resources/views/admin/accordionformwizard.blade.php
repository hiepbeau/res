@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Accordian Form Wizard
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <link href="{{ asset('assets/vendors/acc-wizard/acc-wizard.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/pages/accordionformwizard.css') }}" rel="stylesheet" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Accordion Wizards</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Forms</a>
                    </li>
                    <li class="active">Accordion Wizards</li>
                </ol>
            </section>
            <!--section ends-->
<section class="content paddingleft_right15">
    <!--main content-->
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="livicon" data-name="gear" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Specials
                </h3>
                            <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
            </div>
            <div class="panel-body">
                <div class="row acc-wizard">
                    <div class="col-md-3 pd-2">
                        <p class="mar-2">
                            Follow the steps below to add an accordion wizard to your web page.
                        </p>
                        <ol class="acc-wizard-sidebar">
                            <li class="acc-wizard-todo acc-wizard-active">
                                <a href="#prerequisites">Prerequisites</a>
                            </li>
                            <li class="acc-wizard-todo">
                                <a href="#addwizard">Add Wizard</a>
                            </li>
                            <li class="acc-wizard-todo">
                                <a href="#adjusthtml">Adjust HTML</a>
                            </li>
                            <li class="acc-wizard-todo">
                                <a href="#viewpage">Release</a>
                            </li>
                        </ol>
                    </div>
                    <div class="col-md-9 pd-r">
                        <div id="accordion-demo" class="panel-group">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#prerequisites" data-parent="#accordion-demo" data-toggle="collapse">Install Bootstrap</a>
                                    </h4>
                                </div>
                                <div id="prerequisites" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <form id="form-prerequisites">
                                            <p>
                                                The accordion wizard depends on two other open source packages:
                                            </p>
                                            <ul>
                                                <li>
                                                    The Bootstrap framework, available
                                                    <a href="http://getbootstrap.com">here</a>
                                                    .
                                                </li>
                                                <li>
                                                    The jQuery javascript library, available
                                                    <a href="http://jquery.com">here</a>
                                                    .
                                                </li>
                                            </ul>
                                       
                                            <p></p>
                                            <p>
                                                You'll include the CSS styles for Bootstrap in the
                                                <code>&lt;head&gt;</code>
                                                of your HTML file, for example:
                                            </p>
                                            <pre>&lt;link href="css/bootstrap.min.css" rel="stylesheet"&gt;</pre>
                                            <p>
                                                and you'll include jQuery and Bootstrap javascript files at the end of your
                                                <code>&lt;body&gt;</code>
                                                section, for example:
                                            </p>
                                                        <pre>&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"&gt;&lt;/script&gt;
                                                        &lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt;</pre>
                                            <div class="acc-wizard-step"></div>
                                        </form>
                                    </div>
                                    <!--/.panel-body --> </div>
                                <!-- /#prerequisites --> </div>
                            <!-- /.panel.panel-default -->

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#addwizard" data-parent="#accordion-demo" data-toggle="collapse">Accordion Wizard</a>
                                    </h4>
                                </div>
                                <div id="addwizard" class="panel-collapse collapse awd-h" style="height: 36.400001525878906px;">
                                    <div class="panel-body">
                                        <form id="form-addwizard">
                                            <p>
                                               
                                                <a href="https://github.com/sathomas/acc-wizard">here</a>
                                                . There are two main folders,
                                                <code>/src</code>
                                                and
                                                <code>/release</code>
                                                .
                                            </p>
                                            <p>
                                                
                                                <code>/release</code>
                                                folder directly in your HTML without modifying them:
                                            </p>
                                                        <pre>&lt;link href="css/bootstrap.min.css" rel="stylesheet"&gt;
                                                            &lt;link href="css/acc-wizard.min.css" rel="stylesheet"&gt;
                                                        </pre>
                                            <p>and</p>
                                                        <pre>&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"&gt;&lt;/script&gt;
                                                            &lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt;
                                                            &lt;script src="js/acc-wizard.min.js"&gt;&lt;/script&gt;
                                                        </pre>
                                            <p>
                                             
                                                <code>acc-wizard.min.css</code>
                                                .
                                            </p>
                                            <p>
                                                
                                                <code>/src</code>
                                                folder and adapt them to your source code. The
                                                <code>/src</code>
                                                folder contains a LESS file and uncompressed (and commented) javascript. Note that the
                                                <code>acc-wizard.less</code>
                                                file depends on variables defined in Bootstrap's
                                                <code>variables.less</code>
                                                file.
                                            </p>
                                            <div class="acc-wizard-step"></div>
                                        </form>
                                    </div>
                                    <!--/.panel-body --> </div>
                                <!-- /#addwizard --> </div>
                            <!-- /.panel.panel-default -->
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#adjusthtml" data-parent="#accordion-demo" data-toggle="collapse">Adjust HTML Markup</a>
                                    </h4>
                                </div>
                                <div id="adjusthtml" class="panel-collapse collapse" style="height: 36.400001525878906px;">
                                    <div class="panel-body">
                                        <form id="form-adjusthtml">
                                            <p>
                                             
                                                <code>.row</code>
                                                with the task list taking up a
                                                <code>.col-md-3</code>
                                                and the accordion panels in a
                                                <code>.col-md-9</code>
                                                , but that's not a requirement.
                                            </p>
                                            <p>
                                                
                                                <a href="http://getbootstrap.com/javascript/#collapse-examples">Bootstrap example</a>
                                                , 
                                                <code>.in</code>
                                             
                                                <strong>never</strong>
                                               
                                                <code>.in</code>
                                               
                                                <code>.collapse</code>
                                                
                                            </p>
                                            <p>
                                                
                                                <code>.acc-wizard-sidebar</code>
                                                class to the
                                                <code>&lt;ol&gt;</code>
                                                element and
                                                <code>.acc-wizard-todo</code>
                                              
                                                <code>.acc-wizard-completed</code>
                                                class to the corresponding
                                                <code>&lt;li&gt;</code>
                                                elements.
                                            </p>
                                                        <pre>&lt;ol class="acc-wizard-sidebar"&gt;
                                                              &lt;li class="acc-wizard-todo"&gt;&lt;a href="#prerequisites"&gt;Install Bootstrap and jQuery&lt;/a&gt;&lt;/li&gt;
                                                              &lt;li class="acc-wizard-todo"&gt;&lt;a href="#addwizard"&gt;Add Accordion Wizard&lt;/a&gt;&lt;/li&gt;
                                                              &lt;li class="acc-wizard-todo"&gt;&lt;a href="#adjusthtml"&gt;Adjust Your HTML Markup&lt;/a&gt;&lt;/li&gt;
                                                              &lt;li class="acc-wizard-todo"&gt;&lt;a href="#viewpage"&gt;Test Your Page&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ol&gt;
                                                        </pre>
                                            <p>
                                                Finally, you'll want to active the wizard in your javascript. That's nothing more than simply calling the plugin on an appropriate selection.
                                            </p>
                                                        <pre>&lt;script&gt;
                                                            $(window).load(function() {
                                                                $(".acc-wizard").accwizard();
                                                            });
                                                            &lt;/script&gt;
                                                        </pre>
                                            <p>
                                              
                                                <a href="https://github.com/sathomas/acc-wizard">github</a>
                                                for the details.
                                            </p>
                                            <div class="acc-wizard-step"></div>
                                        </form>
                                    </div>
                                    <!--/.panel-body --> </div>
                                <!-- /#adjusthtml --> </div>
                            <!-- /.panel.panel-default -->
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#viewpage" data-parent="#accordion-demo" data-toggle="collapse">Test Your Page</a>
                                    </h4>
                                </div>
                                <div id="viewpage" class="panel-collapse collapse" style="height: 36.400001525878906px;">
                                    <div class="panel-body">
                                        <form id="form-viewpage">
                                            <p>
                                                
                                            </p>
                                            <div class="acc-wizard-step"></div>
                                        </form>
                                    </div>
                                    <!--/.panel-body --> </div>
                                <!-- /#adjusthtml --> </div>
                            <!-- /.panel.panel-default --> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--main content ends--> </section>
            <!-- content --> 
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script src="{{ asset('assets/vendors/acc-wizard/acc-wizard.min.js') }}" ></script>
    <script src="{{ asset('assets/js/pages/accordionformwizard.js') }}"  type="text/javascript"></script>
    
@stop
