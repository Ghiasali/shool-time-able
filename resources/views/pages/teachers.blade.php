@extends('welcome')
@section('home')
<div align="center">
<h3 class="p-2">Teachers</h3>
<div class="row">
    <div class="col-lg-5 offset-4">
        <table class="table">
            <tr>
                <th>S no</th>
                <th>Teacher Name</th>
                <th>Quaitification</th>
                <th>Action</th>
            </tr>
            
                @foreach ($teachers as $teacher)
                <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->qualification}}</td>
                        <td><a href="{{url('teacher-schedule?teacher_id='.$teacher->id.'')}}">view schedule</a></td>
                </tr>      
                @endforeach
            </tr>
        </table>
    </div>
</div>

</div>
@stop