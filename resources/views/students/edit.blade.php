@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Student</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('students/' .$students->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <label class="control-label">Name</label><br>
                            <input type="text" name="name" id="name" class="form-control
                            @error('name')
                                is-invalid
                             @enderror" value="{{$students->name}}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            <label class="control-label">Class</label><br>

                            <input type="number" name="class" id="class" class="form-control @error('class')
                                is-invalid
                            @enderror" value="{{$students->class}}">
                            @error('class')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>

                            @enderror
                            <label class="control-label">Roll</label><br>
                            <input type="number" name="roll" id="roll" class="form-control @error('roll')
                                is-invalid
                            @enderror" value="{{$students->roll}}">
                            @error('roll')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <label class="control-label">Section</label><br>
                            <input type="text" name="section" id="section" class="form-control @error('section')
                                is-invalid
                            @enderror" value="{{$students->section}}">
                            @error('section')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>

                            @enderror
                            <br>
                            <input type="submit" value="save" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
