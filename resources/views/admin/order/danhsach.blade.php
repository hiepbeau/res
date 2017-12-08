@extends('admin/layouts/default')
@section('content')
<section class="content-header">
    <h1>Admin</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li><a href="#"> Restaurants</a></li>
        <li class="active">Restaurants List</li>
    </ol>
</section>

<!-- Main content -->
	<div id="duongbao">
			<div class="alert alert-info"><h1>Restaurants Manager</h1></div>
			<div class="panel panel-primary">
				<div class="panel-heading">Type Restaurants list</div>
				<div class="panel-body">
					<table id="danhsach" class="table table-bordered table-strip table-hover">
						<thead>
							<tr class="danger" id="tableHead">
								
								<td width="10px">ID</td>
								<td width="500px">Loại nhà hàng</td>
								@if(Sentinel::inRole('admin'))
								<td width="20px">Option</td>
								@endif
							</tr>
						</thead>
						<tbody>
							@foreach($loainhahang as $key => $value)
								<tr id="data" class="{{$key}}">
									
									<td>{{ $value-> idlnh }}</td>
									<td>{{ $value-> tenlnh }}</td>
									 @if(Sentinel::inRole('admin'))
									<td>
										 <a href="{{url('admin/loainhahang/sua/'.$value->id)}}" class="btn btn-info">

											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
											Edit
										</a>
										&nbsp;&nbsp;&nbsp;
										<a href="admin.loainhahang.xoa/{{$value->id}}" data-toggle="modal" data-target="#delete_modal" 
										class="btn btn-danger">
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