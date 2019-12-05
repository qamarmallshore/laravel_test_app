@extends('layout')


@section('title', 'Students')

@section('content')

            <div class="content">
                <div class="title m-b-md">
                    Students
                </div>

                <div>
                	
                	@foreach ($students as $student)

                		<li> {{ $student->first_name }} </li>

                	@endforeach

                </div>


            </div>
        
@endsection