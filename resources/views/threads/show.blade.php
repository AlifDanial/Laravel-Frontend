@extends ('layouts.app')

@section ('content')
<head>
<style>
.content-wrapper{ /*style for overall page*/
  width:1080px;
  margin: 0 auto;
  padding-top:40px;
}
.page-grid{ /*style for card column*/
  margin-left:50px;
  margin-top: 20px;
  width:750px;
}
</style>
</head>
<div class="content-wrapper">  
        <div class="page-grid">

    {{--<h1 class="text1-left" style="font-size:40px;font-family: 'Montserrat', sans-serif;font-size: 40px;padding-bottom:40px;">{{$thread->ThreadSubject}}</h1> --}}

    
    <div class='card-body'>  
    <h2><font size='6'>{{$thread->ThreadSubject}}</font></h2>                                          
                        <hr/>
    <p>{{$thread->ThreadVoteCount}}</p>                                
    <p class='card-text'>{!!$thread->ThreadDescription!!}</p>
          <br>
    
          <hr>
          <a href="/threads/{{$thread->ThreadID}}/edit" class="btn btn-success"> Edit </a>

          
    
    {!!Form::open(['action' => ['ThreadsController@destroy',$thread->ThreadID], 'method' => 'POST', 'class' => 'float-right' ]) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

          {!!Form::close()!!}

    </div>

      </div>
</div>
@endsection
