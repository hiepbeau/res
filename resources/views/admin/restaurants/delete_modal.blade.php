<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>

<div class="modal-body">
  <p>Delete this restaurant ?</p>
  <p>ID: {{$data -> id}}</p>
  <p>Tên {{$data -> ten}}</p>

</div>

<div class="modal-footer">
  <a class="btn btn-danger" data-dismiss="modal">No</a>
  <a class="btn btn-warning" id="submit" href="{{ route('admin.restaurants.delete', $data->id) }}">Yes</a>
</div>