@extends('layout')


@section('title', 'Students')

@section('content')

            <div class="content">
                <div class="title m-b-md">
                    {{ $student->first_name }}
                    {{ $student->last_name }}
                </div>                
            </div>
            <div style="color: #fff; clear: both; font-size: 15px;font-weight: bold;">
                <a href="{{url('students')}}/{{ $student->id }}/edit">
                Edit Record
            </a>
            </div>
        
@endsection