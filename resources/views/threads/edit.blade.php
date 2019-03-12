@extends ('layouts.app')
@section ('content')

<div class="main-body">
<h1 class="text1-left" style="font-size:40px;font-family: 'Montserrat', sans-serif;font-size: 40px;padding-bottom:40px;">Edit Question</h1>

{!! Form::open(['action' => ['ThreadsController@update', $thread->ThreadID], 'method' => 'POST']) !!}
    <div class="form-group">
       <strong> {{Form::label('subject', 'Subject')}} </strong>
        {{Form::text('subject', $thread->ThreadSubject, ['class' => 'form-control', 'placeholder' => 'Type the subject here' ])}}
    </div>
<br>
    <div class="form-group">
        <strong> {{Form::label('question', 'Question')}} </strong>
        {{Form::textarea('question', $thread->ThreadDescription, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Type your question here' ])}}
    </div>

    {{Form::hidden('_method', 'PUT')}}

    {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
{!! Form::close() !!}
<br>

</div>
@endsection