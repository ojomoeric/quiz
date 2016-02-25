@extends('layouts.admin')


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $question->question_name }}</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Show the single quiz questions here and let admin to add new questions into it -->
                    <div class="row">
                        <div class="col-md-12">
                            <form class="" action="{{ url('admin/question/answer/new') }}" method="post">
                                @foreach($question->options as $option)
                                    <div class="form-group">
                                        <input type="checkbox" class="" name="option[]" value="{{ $option->id }}"> {{ $option->option }}
                                    </div>
                                @endforeach
                                <div class="form-group">
                                    <button type="submit" name="button" class="btn btn-default">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
