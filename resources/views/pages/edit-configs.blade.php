@extends('welcome')
@section('home')
<div align="center">
<h3 class="p-2">Edit configs</h3>
<div class="row">
    <form action="{{route('configs')}}" method="post">
           
    @csrf
        <div class="row  ">
            <div class="col-lg-3 ">
              <label for="">school start time</label>

              <div class="form-group">
                  <input type="time" name="school_start_time" value="{{$configs->school_start_time??''}}" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                </div>
              </div>
              <div class="col-lg-3 ">
                <div class="form-group">
                  <label for="">break start time</label>
                  <input type="time" name="school_end_time" value="{{$configs->school_end_time??''}}" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                </div>
              </div>
              <div class="col-lg-3">
                  <div class="form-group">
                      <label for="">break end time</label>
                      <input type="time" name="break_start_time" value="{{$configs->break_start_time??''}}" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                    </div>
              </div>
              <div class="col-lg-3">
                  <div class="form-group">
                      <label for="">School end time</label>
                      <input type="time" name="break_end_time" value="{{$configs->break_end_time??''}}" id="" class="form-control" placeholder="" required aria-describedby="helpId">
                    </div>
              </div>
              <div class="col-lg-3">
                  <div class="form-group">
                      <label for="">Period time</label>
                      <select name="period_time" id="" class="form-control">
                          <option value="00:30:00" {{($configs->period_time??null)=='00:30:00'?'selected':''}}>30 Minitues</option>
                          <option value="00:45:00" {{($configs->period_time??null)=='00:45:00'?'selected':''}}>45 Minitues</option>

                      </select>
                    </div>
              </div>
            <div class="col-lg-3 py-4"><input type="submit" class="btn btn-primary" value="Save"></div>
            <div class="col-lg-4 py-4 text-danger">
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            @endif
            </div>
        </div>
        
        
        
    </form>  
    
</div>


</div>
@stop