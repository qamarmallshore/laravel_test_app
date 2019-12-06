@extends('layout')


@section('title', 'Students')

@section('content')
<div class="content">
  <div class="row">
   <div class="col-md-12">
    <br />
    <h3 aling="center">Add Data</h3>
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

   <form method="post" action="{{url('students')}}">
     {{csrf_field()}}

          <div class="form-group">
      <div class="field">
        <label class="label" for="roll_no">Roll No</label>

        <div class="control">
          <input type="text" name="roll_no" class="form-control {{ $errors->has('roll_no') ? 'is-invalid' : '' }}" placeholder="Enter First Name" value="{{ old('roll_no')}}"  />

        </div>

      </div>

    </div>

     <div class="form-group">
      <div class="field">
        <label class="label" for="first_name">First Name</label>

        <div class="control">
          <input type="text" name="first_name" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" placeholder="Enter First Name" value="{{ old('first_name')}}"  />

        </div>

      </div>

    </div>
    <div class="form-group">

      <div class="field">
        <label class="label" for="last_name">Last Name</label>
        <div class="control">
          <input type="text" name="last_name" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" placeholder="Enter Last Name" value="{{ old('last_name')}}" />
        </div>

      </div>
    </div>
        <div class="form-group">

      <div class="field">
        <label class="label" for="degree_title">Degree Title</label>
        <div class="control">
          <input type="text" name="degree_title" class="form-control {{ $errors->has('degree_title') ? 'is-invalid' : '' }}" placeholder="Enter Last Name" value="{{ old('degree_title')}}" />
        </div>

      </div>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary" />
    </div>
  </form>
</div>
</div>
</div>
@endsection