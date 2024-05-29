@extends('layout.layout')

@section('content')

   @if ($events->count() > 0)
   <div class="indexCont rounded-3 px-4 pt-4">
    @include('facilitator.dashboard.addEvent')
    <table class="table table-dark table-sm rounded-3">
        <thead>
            <tr>
                <th>Event</th>
                <th>Date</th>
                <th>Location</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($events as $event)
           <tr>
            <td>{{$event->title}}</td>
            <td>{{$event->date}}</td>
            <td>{{$event->location}}</td>
            <td>{{$event->startTime}}</td>
            <td class="d-flex gap-2">

                
                    <a href="{{ route('eventShow.show', [
                        'event' => $event->id
                    ])}}" class="btn btn-success"><i class="fa fa-eye"></i></a>


                <form action="{{route('event.delete', [
                    'event' => $event->id
                ])}}" method="POST">
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
       
   @include('facilitator.dashboard.addEvent')
   
   @endif

    
@endsection


<style>
.indexCont{
    width: 75%;
}
    </style>