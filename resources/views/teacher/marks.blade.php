@extends('master')
@section('content')
    <form action="/teacher/marks/update" method="POST" class="d-flex justify-content-center">
        @method("PATCH")
        @csrf
        <div class="flex-column w-50">
            <h1 class="fw-bold fs-2 mt-4">Groups</h1>
            @foreach($groups as $group)
                <ul class="list-group mt-4">
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <p class="fs-5 fw-light">
                                <b>Group #{{$group->id}}</b>
                                <br>
                                <b>Group Name:</b> {{$group->group_name}}
                            </p>
                            <div class="ma-0 list-unstyled row">
                                @for($i = 1; $i<5;$i++)
                                    <div class="col-md-3 mb-3">
                                        <label>Student {{$i}}: {{$group->{"student_{$i}_name"} }}</label>
                                        <input name="group[{{$group->id}}][{{$i}}]"
                                               value="{{$group->{"student_{$i}_grade"} }}" type="text"
                                               class="form-control" placeholder="{{$group->{"student_{$i}_name"} }}">
                                    </div>

                                @endfor
                            </div>
                        </div>
                    </li>
                </ul>
            @endforeach
            <button class="btn btn-warning" type="submit">Update</button>
        </div>
    </form>
    <div class="d-flex justify-content-center">
        <form class="flex-column w-50" action="/teacher/marks/differentiate" method="POST">
            @csrf
            @method("POST")
            <button class="btn btn-primary" type="submit">Differentiate</button>

        </form>
    </div>




@endsection