<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Pivot;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\PeriodSlot;
use Illuminate\Http\Request;
use App\Http\Requests\updateScheduleRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $classes=Grade::all();
       $teachers=Teacher::all();
       $subjects=Subject::all();
       $slots=PeriodSlot::all();
       
        return view('pages.index',compact(['classes','teachers','subjects','slots']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_schedule(updateScheduleRequest $request)
    {
        $class=Grade::findorFail($request->class_id);
        $period= PeriodSlot::findorFail($request->slot_id);
        $allteachers=Teacher::all();
        $allsubjects=Subject::all();
        return view('pages.edit-schedule',compact('class','period','allteachers','allsubjects'));
        
    }

    function save_schedule(Request $request){
        // return $request->all();
        $teacherhaveother_schedule=Pivot::where('period_slot_id',$request->period_slot_id)->where('teacher_id',$request->teacher_id)->first();
        $period_with_class=Pivot::where('subject_id',$request->subject_id)->where('grade_id',$request->grade_id)->first();
      
        if($teacherhaveother_schedule){
            $teacherhaveother_schedule->delete();
        }
        if($period_with_class){
            $period_with_class->delete();
        }

         Pivot::updateorCreate($request->only((new Pivot)->getFillable()));
         return redirect('/');
    }
    function teacher_schedule(Request $request){
            // return $request->all();
           $teacher= Teacher::find($request->teacher_id);
        $endtime= PeriodSlot::whereHas('schedule',function($q)use($request){
                $q->whereHas('teacher',function($q)use($request){
                        $q->where('id',$request->teacher_id);
                });
         })->orderBy('end_time','desc')->pluck('end_time')->first();
         $timetable=  Pivot::where('teacher_id',$request->teacher_id)->with(['teacher','subject','class','slot'])->get();
           return view('pages.teacher-schedule',compact('teacher','endtime','timetable'));
    }
    function delete_schedule(Request $reqeust){
        Pivot::find($reqeust->slot_id)->delete();
        return back();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
