@extends('admin/layouts/default')

{{-- Web site Title --}}
<!-- @section('title')
    @lang('admin/groups/title.create')
    @parent
    @stop -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">

    {{-- Content --}}
    @section('content')
    <section class="content-header">
        <h1>
            <!-- @lang('groups/title.create') -->
            Restaurants
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    @lang('general.dashboard')
                </a>
            </li>
            <li>Restaurants</li>
            <li class="active">
                Create new restaurant
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary ">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <i class="livicon" data-name="users-add" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Create new restaurant
                        </h4>
                    </div>
                    <div class="panel-body">
                        {!! $errors->first('slug', '<span class="help-block">Another role with same slug exists, please choose another name</span> ') !!}
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="form-horizontal" role="form" method="post" 
                        action="{{ route('admin.restaurants.create1') }}" enctype="multipart/form-data" >
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <!--Name-->
                        <div class="form-group {{ $errors->
                            first('name', 'has-error') }}">
                            <label for="title" class="col-sm-2 control-label">
                                Loại nhà hàng:
                            </label>
                            <div class="col-sm-5">
                                <select class="form-control" name="loainhahang">
                                    @foreach($lnh as $i)
                                    <option value="{{$i->id}}">{{$i->tenlnh}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4">
                                {!! $errors->first('name', '<span class="help-block">:message</span> ') !!}
                            </div>
                        </div>
                        
                        <!--Name-->
                        <div class="form-group {{ $errors->
                            first('name', 'has-error') }}">
                            <label for="title" class="col-sm-2 control-label">
                                Tên nhà hàng:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="ten" name="ten" class="form-control" required>
                            </div>
                            <div class="col-sm-4">
                                {!! $errors->first('name', '<span class="help-block">:message</span> ') !!}
                            </div>
                        </div>
                        
                        <!--Image-->
                        <div class="form-group {{ $errors->first('pic_file', 'has-error') }}">
                            <label for="pic" class="col-sm-2 control-label">Profile picture</label>
                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 500px; height: 500px;">
                                        <img src="http://placehold.it/500x500" alt="profile pic">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 500px; max-height: 500px;"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <!--Take data here-->
                                            <input id="pic" name="pic_file" type="file" class="form-control"/>
                                        </span>
                                        <a href="#" class="btn btn-danger fileinput-exists"
                                        data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                                <span class="help-block">{{ $errors->first('pic_file', ':message') }}</span>
                            </div>
                        </div>

                        <!--Name-->
                        <div class="form-group {{ $errors->
                            first('name', 'has-error') }}">
                            <label for="title" class="col-sm-2 control-label">
                                Địa chỉ:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="diachi" name="diachi" class="form-control" required>
                            </div>
                            <div class="col-sm-4">
                                {!! $errors->first('name', '<span class="help-block">:message</span> ') !!}
                            </div>
                        </div>

                        <!--Name-->
                        <div class="form-group {{ $errors->
                            first('name', 'has-error') }}">
                            <label for="title" class="col-sm-2 control-label">
                                SĐT:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="sdt" name="sdt" class="form-control" required>
                            </div>
                            <div class="col-sm-4">
                                {!! $errors->first('name', '<span class="help-block">:message</span> ') !!}
                            </div>
                        </div>

                        <!--Name-->
                        <div class="form-group {{ $errors->
                            first('name', 'has-error') }}">
                            <label for="title" class="col-sm-2 control-label">
                                Email:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="col-sm-4">
                                {!! $errors->first('name', '<span class="help-block">:message</span> ') !!}
                            </div>
                        </div>

                        <!--Name-->
                        <div class="form-group {{ $errors->
                            first('name', 'has-error') }}">
                            <label for="title" class="col-sm-2 control-label">
                                Số bàn:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="soban" name="soban" class="form-control" required>
                            </div>
                            <div class="col-sm-4">
                                {!! $errors->first('name', '<span class="help-block">:message</span> ') !!}
                            </div>
                        </div>

                        <!--Name-->
                        <div class="form-group {{ $errors->
                            first('name', 'has-error') }}">
                            <label for="title" class="col-sm-2 control-label">
                                Ghi chú:
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="ghichu" name="ghichu" class="form-control" required>
                            </div>
                            <div class="col-sm-4">
                                {!! $errors->first('name', '<span class="help-block">:message</span> ') !!}
                            </div>
                        </div>
                        
                        <!--button-->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <a class="btn btn-danger" href="{{ route('admin.groups') }}">
                                    @lang('button.cancel')
                                </a>
                                <button type="submit" class="btn btn-success" id="submit">
                                    @lang('button.save')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row-->
</section>
@stop

<script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
<script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
<script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
<script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/pages/adduser.js') }}"></script>

