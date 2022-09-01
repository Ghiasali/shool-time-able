@extends('welcome')
@section('home')
<div align="center">
<h3 class="p-2">Classes</h3>
<div class="row">
    <div class="col-lg-5 offset-4">
        <table class="table">
            <tr>
                <th>S no</th>
                <th>Class Name</th>
            </tr>
          
                @foreach ($classes as $class)
                <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$class->name}}</td>
                </tr>
                @endforeach
           
        </table>
    </div>
</div>

</div>
@stop