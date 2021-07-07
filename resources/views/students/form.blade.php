@extends('master')
@section('content')
    <form action="/students/register" method="POST">
        @csrf
        <div class="d-flex justify-content-center mt-4">
            <div class="container m-0 flex-column">
                <div class="row">
                    <div class="mb-3">
                        <h2 for="exampleFormControlTextarea1" class="form-label">Group name</h2>
                        <input type="text" name="group_name" class="form-control"
                               id="exampleFormControlInput1">
                    </div>
                    <div class="col-12 col-md-3">
                        <h2>Student 1</h2>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                            <input type="text" name="student_1_name" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Student Email</label>
                            <input type="text" name="student_1_email" class="form-control"
                                   id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Student Phone</label>
                            <input type="text" name="student_1_number" class="form-control"
                                   id="exampleFormControlInput1">
                        </div>

                    </div>

                    <div class="col-12 col-md-3">
                        <h2>Student 2</h2>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                            <input type="text" name="student_2_name" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Student Email</label>
                            <input type="text" name="student_2_email" class="form-control"
                                   id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Student Phone</label>
                            <input type="text" name="student_2_number" class="form-control"
                                   id="exampleFormControlInput1">
                        </div>

                    </div>

                    <div class="col-12 col-md-3">
                        <h2>Student 3</h2>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                            <input type="text" name="student_3_name" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Student Email</label>
                            <input type="text" name="student_3_email" class="form-control"
                                   id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Student Phone</label>
                            <input type="text" name="student_3_number" class="form-control"
                                   id="exampleFormControlInput1">
                        </div>

                    </div>

                    <div class="col-12 col-md-3">
                        <h2>Student 4</h2>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                            <input type="text" name="student_4_name" class="form-control"
                                   id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Student Email</label>
                            <input type="text" name="student_4_email" class="form-control"
                                   id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Student Phone</label>
                            <input type="text" name="student_4_number" class="form-control"
                                   id="exampleFormControlInput1">
                        </div>

                    </div>
                    <h2>Projects</h2>
                    <div class="d-flex flex-column justify-content-start mt-2">
                        <div id="projects" class="col-md-3 col-12">
                            <div id="projects-select-container">
                                @foreach(\App\Models\Project::all() as $project)
                                    <select class="form-select mt-2" name="projects[]">
                                        @foreach(\App\Models\Project::all() as $project)
                                            <option value="{{$project->id}}">{{$project->name}}</option>
                                        @endforeach
                                    </select>
                                @endforeach
                            </div>

                        </div>

                        {{--                        <div class="col-auto">--}}
                        {{--                            <button type="button" class="btn btn btn-secondary mt-4" onclick="addNewProject()">Add--}}
                        {{--                                Project--}}
                        {{--                            </button>--}}

                        {{--                        </div>--}}

                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
    <script>
        function addNewProject() {
            let clone = document.querySelector("#projects-select-container").cloneNode(true);
            let projectsContainer = document.querySelector("#projects");
            projectsContainer.appendChild(clone);
        }
    </script>
@endsection