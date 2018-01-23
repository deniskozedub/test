@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">You task</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form method="post" action="{{route('taskaddhandler')}}">
                            {!!  csrf_field()  !!}
                                <input class="form-control" type="text" name="task"/>
                                <input class="btn btn-success form-control" type="submit" value="Add"/>

                        </form>
                        <div class="panel-body">
                          @foreach ($task as $item)
                              <span class="task">
                                  <input class="check_task" type="checkbox">
                                  {{$item->name}}
                                  <a href="/task/edit/{{$item->id}}">edit</a>
                                  <a href="{{route("taskdelhandler",["id"=>$item->id])}}">delete</a><br>
                               </span>
                           @endforeach
                        </div>
            </div>
        </div>
    </div>
</div>

@endsection
