@extends ('layouts.app')
@section ('content')

<head>
<style>
.content-wrapper{ /*style for overall page*/
  width:950px;
  margin: 0 auto;
  padding-top:40px;
}
.page-title{
    font-size: 40px;
    padding-bottom:40px;
    font-size:30px;
    font-weight:700;
    color:#6F9E76;
}
.q-subject{
    font-size:21px;
    font-weight:500;
    font-family:'montserrat';
}
.q-desc{
    font-size:21px;
    font-weight:500;
    font-family:'montserrat';
}
p{
    margin:0;
}
.btn-primary{
    float:right;
    font-family:'montserrat';
    font-size:17px;
    margin-top:15px;
    font-weight:500;
}

</style>
</head>
<div class="content-wrapper">

<p class="page-title" style="font-family: 'Montserrat';">Add Question</p>

{!! Form::open(['action' => 'ThreadsController@store', 'method' => 'POST']) !!}

<div class="form-group">
        <p class="q-desc"> {{Form::label('crop', 'Crop(s) related to the question')}} </p>
        {{Form::text('crop', '', ['class' => 'form-control', 'placeholder' => '', 'maxlength' => 200 ,'autocomplete' => 'off' ])}}
    </div>
<br>  
    <div class="form-group">
       <p class="q-subject"> {{Form::label('question title', 'Question Title')}} </p>
        {{Form::text('question title', '', ['class' => 'form-control', 'placeholder' => '', 'maxlength' => 200 , 'autocomplete' => 'off'])}}
    </div>
<br>
    <div class="form-group">
        <p class="q-desc"> {{Form::label('question description', 'Question Description')}} </p>
        {{Form::textarea('question description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'autocomplete' => 'off' ])}}
    </div>
    

    {{Form::submit('Post Question', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
<br>
<br>

</div>
@endsection