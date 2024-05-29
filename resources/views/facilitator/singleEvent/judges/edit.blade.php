
 <td class="d-flex gap-2">
     <button class="btn btn-success" onclick="editJudge({{$judge->id}})"><i class="fa fa-edit"></i></button>

     <form action="{{route('judge.delete', [
          'event' => $event->id,
          'judge' => $judge->id
     ])}}" method="POST">
         @csrf
         @method('delete')
         <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
        
     </form>
     <button class="btn btn-secondary"><i class="fa fa-clipboard"></i></button>
 </td>
</tr>

<tr id="editForm{{$judge->id}}" style="display: none;">
    
                <form action="{{route('judge.edit', [
                    'judge' => $judge->id,
                    'event' => $event->id
                ])}}" method="POST">

                    @csrf
                    @method('put')

                <td>
                    <input type="number" name="judgeNum" class="input" value="{{$judge->judgeNum}}">
                </td>
                <td>
                    <input type="text" name="name" class="input" value="{{$judge->name}}" autofocus>
                </td>
                <td>{{$judge->accessCode}}
                    <input type="hidden" name="accessCode" value="{{$judge->accessCode}}">
                </td>
                <td>

                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>

                    <button onclick="cancelEdit({{$judge->id}})" class="btn btn-secondary"><i class="fa fa-arrow-right"></i></button>
                </td>
                </form>


<script>
    function editJudge(judgeId) {
        document.getElementById('judgeRow' + judgeId).style.display = 'none';
        document.getElementById('editForm' + judgeId).style.display = 'table-row';
    }

    function cancelEdit(judgeId) {
        document.getElementById('judgeRow' + judgeId).style.display = 'table-row';
        document.getElementById('editForm' + judgeId).style.display = 'none';
    }
</script>

{{-- <style>
    .input{
        height: 20px;
        width: 10px;
    }
</style> --}}