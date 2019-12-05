@extends('layout')


@section('title', ' Edit Students')

@section('content')

<div class="content">
    <div class="title m-b-md">
        Edit Student Record
    </div>

    <div class="row">
       <div class="col-md-12">
          <br />
          <h3 aling="center">Edit Student Data</h3>
          <br />
          @if(count($errors) > 0)
          <div class="alert alert-danger">
             <ul>
                 @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
                 @endforeach
             </ul>
         </div>
         @endif
         @if(\Session::has('success'))
         <div class="alert alert-success">
             <p>{{ \Session::get('success') }}</p>
         </div>
         @endif

         <form method="post" action="{{url('students')}}/{{ $student->id }}" style="margin-bottom: 15px;">
             {{csrf_field()}}

             {{ method_field('PATCH') }}
             <div class="form-group">
                <input type="text" name="first_name" class="form-control" value="{{ $student->first_name}}" />
            </div>
            <div class="form-group">
                <input type="text" name="last_name" class="form-control"value="{{ $student->last_name}}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update" />
            </div>
        </form>

        <form method="post" action="{{url('students')}}/{{ $student->id }}">

            {{csrf_field()}}

             {{ method_field('DELETE') }}

                         <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Delete" />
            </div>
            
        </form>



    </div>
</div>


</div>

@endsection