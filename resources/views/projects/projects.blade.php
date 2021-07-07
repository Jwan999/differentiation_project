@extends('master')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="flex-column w-50">
            <h1 class="fw-bold fs-2 mt-4">Projects</h1>
            @foreach($groups as $group)
                <ul class="list-group mt-4">
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <p class="fs-3">
                                {{optional($group->project)->name}}
                            </p>

{{--                            <p class="fs-5 fw-light">--}}
{{--                                {{$group->project->description}}--}}
{{--                            </p>--}}
                        </div>
                        <div>
                            <p class="fs-6 text-primary">{{$group->group_name}}</p>
                        </div>

                    </li>
                </ul>
            @endforeach
        </div>
    </div>

@endsection