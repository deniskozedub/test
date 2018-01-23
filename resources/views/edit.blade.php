@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit task</div>

                    <div class="panel-body">
                        <form method="get" action="{{route('taskedithandler')}}">
                            <input type="hidden" name="id" value="{{$task->id}}">
                            <input class="form-control" type="text" name="task" value="{{$task->name}}"/>
                            <input class="btn btn-success form-control" type="submit" value="Edit"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection