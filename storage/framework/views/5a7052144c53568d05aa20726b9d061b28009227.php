<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>

          <div class="modal-body">
            <p>Delete this order ?</p>
            <p>ID: <?php echo e($data -> id); ?></p>
            <p>Tên nhà hàng: <?php echo e($data ->nhahang->ten); ?></p>
            <p>Tên khách hàng: <?php echo e($data ->user->last_name); ?></p>

          </div>

          <div class="modal-footer">
            <a class="btn btn-danger" data-dismiss="modal">No</a>
            <a class="btn btn-warning" id="submit" href="<?php echo e(route('admin.typerestaurants.delete', $data->idlnh)); ?>">Yes</a>
          </div>