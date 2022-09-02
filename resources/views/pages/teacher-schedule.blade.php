@extends('welcome')
@section('home')
<div align="center">
<h3 class="p-2"> Teacher Schedule</h3>
<div class="row">
   <div class="col-lg-3">  Name :{{$teacher->name}}</div>
   <div class="col-lg-3">  Qualification :{{$teacher->qualification}}</div>
   <div class="col-lg-3">  Timing :{{$endtime}}</div>
<table class="table table-bordered my-4">
    <tr>
        <th>Class</th>
        <th>Subject</th>
        <th>Timing</th>
        <th>Duration</th>
    </tr>
   
        @foreach ($timetable as $item)
        <tr>
        <td>{{$item->class->name}}</td>
        <td>{{$item->subject->name}}</td>
        <td>{{$item->slot->start_time}}-{{$item->slot->end_time}}</td>
        <td>
        
            {{Carbon\Carbon::parse($item->slot->start_time)->diff(Carbon\Carbon::parse($item->slot->end_time))->format('%H:%I:%S');}}

        </td>
        </tr>
        @endforeach
      
    
</table>
       
</div>


</div>
@stop