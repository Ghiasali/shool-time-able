@extends('welcome')
@section('home')
<div class="container">
    <h3 class="p-2">Schedule</h3>
            <div class="row">
                <div class="col-lg-7 ">
                    <table class="table table-bordered" >
                        <tr>
                            <th>Class</th>
                           @foreach ($slots as $slot)
                               <td>
                                   {{$slot->start_time}}-{{$slot->end_time}}
                               </td>
                           @endforeach
                        </tr>
                        @foreach ($classes as $key=>$class)
                        <tr>
                            <td>
                                {{$class->name}}
                            </td>
                            @foreach ($slots as $slott)
                            <td>
                                    @php
                                        $slot=get_subject_teacher($slott->id,$class->id)??null;
                                    @endphp
                
                                    @if($slot)
                
                                Teacher:{{$slot->teacher->name??null}} 
                                <br>
                                
                                Subject:{{$slot->subject->name??null}} ({{$slot->subject->code??null}})
                                <a href="{{url('delete-schedule?slot_id='.$slot->id.'')}}"><i class="fa fa-trash text-danger" aria-hidden="true"></i>
                
                                <a href="{{url('edit-schedule?slot_id='.$slot->period_slot_id.'&class_id='.$class->id.'')}}"><i class="fa fa-pencil text-success" aria-hidden="true"></i>
                                @else
                                    <a href="{{url('edit-schedule?slot_id='.$slott->id.'&class_id='.$class->id.'')}}"><i class="fa fa-plus text-primary" aria-hidden="true"></i>
                
                                @endif
                            </td>
                        @endforeach
                        </tr>
                    @endforeach
                    </table>
                    </div>
            </div>
</div>
@stop