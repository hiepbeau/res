<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>

          <div class="modal-body">
            <p>Delete this order ?</p>
            <p>ID: {{$data -> id}}</p>
            <p>Tên nhà hàng: {{$data ->nhahang->ten}}</p>
            <p>Tên khách hàng: {{$data ->user->last_name}}</p>

          </div>

          <div class="modal-footer">
            <a class="btn btn-danger" data-dismiss="modal">No</a>
            <a class="btn btn-warning" id="submit" href="{{ route('admin.typerestaurants.delete', $data->idlnh) }}">Yes</a>
          </div>