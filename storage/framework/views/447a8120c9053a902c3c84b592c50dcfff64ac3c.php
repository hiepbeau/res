<?php $__env->startSection('header_styles'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>Order</h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(route('admin.dashboard')); ?>">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                <!-- Dashboard -->
                <?php echo app('translator')->get('general.dashboard'); ?>
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
								<?php if(Sentinel::inRole('admin')): ?>
								<td>Option</td>
								<?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<tr id="data" class="<?php echo e($key); ?>">
									<td><?php echo e($value-> id); ?></td>
									<td><?php echo e($value->nhahang->ten); ?></td>
									<td><?php echo e($value->user->first_name); ?></td>
									<td><?php echo e($value->user->last_name); ?></td>
									<td><?php echo e($value-> ngay); ?></td>
									<td><?php echo e($value-> soban); ?></td>
									<td><?php echo e($value-> ghichu); ?></td>
									 <?php if(Sentinel::inRole('admin')): ?>
									<td>
										 <a href="<?php echo e(url('admin/order/edit/'.$value->id)); ?>" class="btn btn-info">

											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
											Edit
										</a>
										
										<a href="<?php echo e(route('admin.order.delete_modal',$value->id)); ?>" data-toggle="modal" data-target="#delete_modal" class="btn btn-danger">
											<i class="fa fa-trash-o" aria-hidden="true"></i>
											Delete
										</a>
									</td>
									<?php endif; ?>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>