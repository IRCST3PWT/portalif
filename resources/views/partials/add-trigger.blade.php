<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Stuff</button>		

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Awesome Stuff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('store')}}" method="POST">
      	{{ csrf_field() }}
      	<div class="modal-body">
        	<div class="form-group">
        		<label>Title</label>
        		<input type="text" name="title" class="form-control" placeholder="title" required>
        	</div>
        	<div class="form-group">
        		<label>Description</label>
        		<textarea class="form-control" name="description" rows="3" placeholder="Description" required></textarea>
        	</div>
        	<div class="form-group">
        		<label>Type</label>
        		<select name="type" class="form-control custom-select">
        			<option value="project" >Project</option>
        			<option value="event">Event</option>
        			<option value="responsi">Responsi</option>
        		</select>
        	</div>
      	</div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-primary">add</button>
	      </div>
      </form>
    </div>
  </div>
</div>