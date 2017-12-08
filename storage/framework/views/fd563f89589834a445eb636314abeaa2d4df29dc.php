<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>

          <div class="modal-body">
            <p>Delete this dish ?</p>
            <p>ID: <?php echo e($data -> id); ?></p>
            <p>Name <?php echo e($data -> name); ?></p>
          </div>

          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal"><a href="#">No</a></button>
            <button class="btn btn-default" ><a href="<?php echo e(route('admin.dishes.delete', $data->id)); ?>">Yes</a></button>
          </div>

