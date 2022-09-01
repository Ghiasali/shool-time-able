@extends('welcome')
@section('home')
<div class="container">
    <h3 align="center" class="p-2">Schedule</h3>
    <div class="row">
        <div class="col-lg-7 offset-3">
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
            @foreach ($slots as $slot)
            <td>
                    @php
                        $slot=get_subject_teacher($slot->id,$class->id);
                    @endphp

                    @if($slot)

                Teacher:{{$slot->teacher->name??null}} 
                <br>
                Subject:{{$slot->subject->name??null}}
                <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                <i class="fa fa-pencil text-success" aria-hidden="true"></i>
                @else
                    <i class="fa fa-plus text-primary text-align-center"  aria-hidden="true"></i>

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