@extends('welcome')
@section('home')
<div align="center">
<h3 class="p-2">Subjects</h3>
<div class="row">
    <div class="col-lg-5 offset-4">
        <table class="table">
            <tr>
                <th>S no</th>
                <th>Subject Name</th>
                <th>Subject Code</th>
            </tr>
            
                @foreach ($subjects as $sub)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$sub->name}}</td>
                    <td>{{$sub->code}}</td>
                </tr>
                @endforeach
            
        </table>
    </div>
</div>

</div>
@stop