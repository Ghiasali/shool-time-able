@extends('welcome')
@section('home')
<div align="center">
<h3 class="p-2">Configs</h3>
<div class="row">
    <div class="col-lg-5 offset-4">
            <table class="table table-bordered">
                <tr>
                    <th>Schools start time</th>
                    <th>Break start time</th>
                    <th>Break End time</th>
                    <th>Schools End time </th>
                        <th>Action</th>
                </tr>
                <tr>
                    <td>{{$configs->school_start_time??null}}</td>
                    <td>{{$configs->break_start_time??null}}</td>
                    <td>{{$configs->break_end_time??null}}</td>
                    <td>{{$configs->school_end_time??null}}</td>
                    <td><a href="{{ route('edit-configs') }}"><i class="fa fa-pencil text-info" aria-hidden="true" ></i></td>
                    </tr>
            </table>
    </div>
</div>
<!-- Button trigger modal -->

  
  <!-- Modal -->
  
  

</div>
@stop