@if ($contestants->count() > 0)
<div class="indexCont rounded-3 px-4 pt-4">
    @include('facilitator.singleEvent.contestants.addContestant')
    <table class="table table-dark table-sm rounded-3">
        <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Address</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($contestants as $contestant)
           <tr>
                <td>{{$contestant->contestantNum}}</td>
                <td>{{$contestant->name}}</td>
                <td>{{$contestant->address}}</td>
                <td onclick="editContestant">{{$contestant->photo}}</td>
                <td class="d-flex gap-2">
                    <form method="POST" action="{{ route('contestant.delete', [
                        'contestant' => $contestant->id,
                        'event' => $event->id,
                    ])}}">
                    @csrf
                    @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
           @endforeach
          
        </tbody>
    </table>
</div>
@else
    @include('facilitator.singleEvent.contestants.addContestant')
@endif

<script>
    function editContestant() {
       alert(hello)
    }

</script>