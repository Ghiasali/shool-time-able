@extends('welcome')
@section('home')
<div align="center">
<h3 class="p-2">Edit Schedule</h3>
<div class="row">
    <form action="{{route('save-schedule')}}" method="post">
           
    @csrf
      <div class="row">
          <div class="col-lg-2">
                Period start time:{{$period->start_time}}
          </div>
          <div class="col-lg-2">
            Period End time:{{$period->end_time}}
      </div>
      <div class="col-lg-2">
        Class:{{$class->name}}
  </div>
  <input type="hidden" name="period_slot_id" value="{{$period->id}}">
  <input type="hidden" name="grade_id" value="{{$class->id}}">

  @php
      $slot=  get_subject_teacher($period->id,$class->id)??null
      
  @endphp
    
      <div class="col-lg-2">
          <select name="teacher_id" id="" class="form-control">
            @foreach ($allteachers as $teacher)
                       @if($slot)
                <option value="{{$teacher->id}}"  {{$slot->teacher_id==$teacher->id?'selected':''}}>{{$teacher->name}}</option>
                @else
                <option value="{{$teacher->id}}"  >{{$teacher->name}}</option>
                  @endif
            @endforeach
             
          </select>
      </div>
      
      <div class="col-lg-2">
        <select name="subject_id" id="" class="form-control">
          @foreach ($allsubjects as $subject)

          @if($slot)
              <option value="{{$subject->id}}" {{$slot->subject_id==$subject->id?'selected':''}}>{{$subject->name}}</option>
          @else
          <option value="{{$subject->id}}" >{{$subject->name}}</option>
          @endif
          @endforeach
           
        </select>
    </div>
    <div class="col-lg-2">
          <input type="submit" class="btn btn-primary" value="Save">
    </div>
      </div>  
        
        
        
    </form>  
    
</div>


</div>
@stop