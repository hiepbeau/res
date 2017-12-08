<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>

          <div class="modal-body">
            <p>Delete this dish ?</p>
            <p>ID: <?php echo e($data -> id); ?></p>
            <p>Name <?php echo e($data -> name); ?></p>

          </div>

          <div class="modal-footer">
            <a class="btn btn-danger" data-dismiss="modal">No</a>
            <a class="btn btn-warning" id="submit" href="<?php echo e(route('admin.dishes.delete', $data->id)); ?>">Yes</a>
          </div>