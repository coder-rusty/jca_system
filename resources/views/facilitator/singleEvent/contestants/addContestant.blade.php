<!-- Button trigger modal -->

<button type="button" class="btn btn-primary float-end mb-3" data-bs-toggle="modal" data-bs-target="#addContestant">
    Create new contestant
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="addContestant" tabindex="-1" aria-labelledby="addContestantLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addContestantLabel">Add a new contestant</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="post" action="{{ route('contestant.create')}}">
            @csrf
            @method('post')
        <div class="modal-body">
           
                <div class="mb-3">
                    <label for="name" class="form-label">Contestant name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name here" name="name">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address here" name="address">
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter photo here" name="photo">
                </div>
                
                <div class="mb-3">
                    <label for="contestantNum" class="form-label">Number</label>
                    <input type="number" class="form-control" id="contestantNum" placeholder="Enter contestantNum here" name="contestantNum">
                </div>

                  <input type="hidden" class="form-control"  name="eventID" value="{{$event->id}}">
          
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Submit" >
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </form>


      </div>
    </div>

</div>