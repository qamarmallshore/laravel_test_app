<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\student;

class PagesController extends Controller
{
    //
    public function home() {

	    	return view('welcome', [

	    		'foo' => 'bar',

	    	]);
	    }

	public function contact() {

		return view('contact');
	}

	public function students() {

		$students = student::all();

		// return $students;

		return view('student', ['students'=>$students]);
	}

	public function create() {

		return view('student.create');
	}

	public function store() {

		$student = new student();

		$student->first_name = request('first_name');

		$student->last_name = request('last_name');

		$student->save();

		return redirect('/students');
	}

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

        $student = Student::find($id);

        return view('student.edit', compact('student'));
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
        
        // dd(request()->all());

        $student = Student::find($id);

		$student->first_name = request('first_name');

		$student->last_name = request('last_name');

		$student->save();

		return redirect('/students');

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

        Student::find($id)->delete();
        
        return redirect('/students');
    }

}