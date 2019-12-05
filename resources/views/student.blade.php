@extends('layout')


@section('title', 'Students')

@section('content')

            <div class="content">
                <div class="title m-b-md">
                    Students
                </div>

                <div>
                	
                	@foreach ($students as $student)

                		<li style="font-size: 16px; font-weight: bold; color: #fff;"> 
                			<a href="{{url('students')}}/{{ $student->id }}"> 

                		{{ $student->first_name }} {{ $student->last_name }} 
                	</a>
                		</li>

                	@endforeach

                </div>


            </div>
        
@endsection