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
    <h1>Order</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                <!-- Dashboard -->
                @lang('general.dashboard')
            </a>
        </li>
        <li>Order</li>
        <li class="active">Order List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
	<div id="duongbao">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4 class="panel-title"> <i class="livicon" data-name="users-add" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Order List
                    </h4>
				</div>
				<div class="panel-body">
					<table id="danhsach" class="table table-bordered table-strip table-hover">
						<thead>
							<tr class="danger" id="tableHead">
								
								<td width="10">ID</td>
								<td >Tên nhà hàng</td>
								<td >Họ khách hàng</td>
								<td >Tên khách hàng</td>
								<td >Ngày</td>
								<td >Số bàn</td>
								<td>Ghi chú</td>
								@if(Sentinel::inRole('admin'))
								<td>Option</td>
								@endif
							</tr>
						</thead>
						<tbody>
							@foreach($data as $key => $value)
								<tr id="data" class="{{$key}}">
									<td>{{ $value-> id }}</td>
									<td>{{ $value->nhahang->ten }}</td>
									<td>{{ $value->user->first_name }}</td>
									<td>{{ $value->user->last_name }}</td>
									<td>{{ $value-> ngay }}</td>
									<td>{{ $value-> soban }}</td>
									<td>{{ $value-> ghichu }}</td>
									 @if(Sentinel::inRole('admin'))
									<td>
										 <a href="{{url('admin/order/edit/'.$value->id)}}" class="btn btn-info">

											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
											Edit
										</a>
										
										<a href="{{route('admin.order.delete_modal',$value->id)}}" data-toggle="modal" data-target="#delete_modal" class="btn btn-danger">
											<i class="fa fa-trash-o" aria-hidden="true"></i>
											Delete
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

</section>
@stop