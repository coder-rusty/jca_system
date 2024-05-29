@if ($judges->count() > 0)
<div class="indexCont rounded-3 px-4 pt-4">
    @include('facilitator.singleEvent.judges.addJudges')
    <table class="table table-dark table-sm rounded-3">
        <thead>
            <tr>
                <th>Judge number</th>
                <th>Name</th>
                <th>Access code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($judges as $judge)
<tr id="judgeRow{{$judge->id}}">
 <td>{{$judge->judgeNum}}</td>
 <td>{{$judge->name}}</td>
 <td>{{$judge->accessCode}}</td>
            @include('facilitator.singleEvent.judges.edit')
</tr>
@endforeach
        </tbody>
      </table>
</div>
@else
    @include('facilitator.singleEvent.judges.addJudges')
@endif

