<div class="modal fade" id="modalBook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">To borrow the Book</h4>
      </div>
      <div class="modal-body">
          <strong>Book:</strong> @{{ name }}<br><br>
          <strong>Borrow to:</strong><br />
          {!! Form::open(['route' => 'books.borrow']) !!}
              <input name="id" type="hidden" v-model="id" />
              <div class="form-group">
                  <input type="text" v-model="user" name="user" class="form-control" placeholder="Enter the user.." />
              </div>
              <div class="form-group">
                  {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                  <a href="javascript:void(0);" @click="clearUser()" v-show="user">Clear</a>
              </div>
          {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
