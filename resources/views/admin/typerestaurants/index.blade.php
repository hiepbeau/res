@extends('admin/layouts/default')


{{-- page level styles --}}
@section('header_styles')
<style type="text/css">
tr#data td{
	text-align: center;

}
tr#tableHead td{
	text-align: center;
}
a{
	cursor: pointer;

}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@stop
{{-- Page content --}}
@section('content')
<section class="content-header">
	<h1>Type Restaurants </h1>
	<ol class="breadcrumb">
		<li>
			<a href="{{ route('admin.dashboard') }}">
				<i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
				Dashboard
			</a>
		</li>
		<li><a href="#"> Type Restaurants</a></li>
		<li class="active">Type Restaurants List</li>
	</ol>
</section>

<!-- Main content -->
<div id="duongbao">
	<div class="col-lg-12">	
		<div class="panel panel-primary">
			<div class="panel-heading">Type Restaurants list</div>
			<div class="panel-body">
				<table id="danhsach" class="table table-bordered table-strip table-hover">
					<thead>
						<tr class="danger" id="tableHead">

							<td width="10">ID</td>
							<td >Tên</td>
							<td>Ghi chú</td>
							@if(Sentinel::inRole('admin'))
							<td width="250px">Option</td>
							@endif
						</tr>
					</thead>
					<tbody>
						@foreach($data as $key => $value)
						<tr id="data" class="{{$key}}">

							<td>{{ $value-> id }}</td>
							<td>{{ $value-> tenlnh }}</td>
							<td>{{ $value-> ghichu }}</td>
							@if(Sentinel::inRole('admin'))
							<td>
								<a href="{{url('admin/typerestaurants/edit/'.$value->id)}}" class="btn btn-info" style="width: 80px">

									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									Edit
								</a>

								<a href="{{route('admin.typerestaurants.delete_modal',$value->id)}}" data-toggle="modal" data-target="#delete_modal" 
									class="btn btn-danger" style="width: 80px">
									<i class="fa fa-trash-o" aria-hidden="true"></i> Delete
								</a>
							</td>
							@endif
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="delete_modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">      
			<!-- Modal content-->
		</div>
	</div>
</div>

<script>
	$(function(){
		$('body').on('hidden.bs.modal', '#delete_modal', function () {
			$(this).removeData('bs.modal');
		});
	});
</script>


@stop