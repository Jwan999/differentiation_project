@extends('master')
@section('content')

    <form class="d-flex justify-content-center mt-4" action="/add/projects" method="POST">
      @csrf
        <div class="w-50">
            <h2>
                Project
            </h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Project Title</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Project Description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>



@endsection