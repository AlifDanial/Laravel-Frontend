@extends ('layouts.app')

@section ('content')
<div class="main-body">
{{-- 
    <h1 class="text1-left" style="font-size:40px;font-family: 'Montserrat', sans-serif;font-size: 40px;padding-bottom:40px;">{{$thread->ThreadSubject}}</h1> --}}
  
    <div class="navbar">
        <div class="search-container">
          <form action="/search" method="post" role="search">
            {{ csrf_field() }}
             <input type="text" placeholder="Crop Name" name="cropName">
             <button type="submit" class="btn btn-default">Search</button> 
          </form>
        </div>
    </div>
    
    <?php if (count ( $result ) > 0) { ?>

        @foreach ($result as $crop) 
                <li class="list-group-item">
                <a href="{{ url('crops/'.$crop['cropID']) }}">{{$crop['name_var_lndrce']}}</a>
                </li>        
        @endforeach

    <?php } else {
        echo "No Crop found. Try to search again!" ;
    }
    ?>

    
    

</div>

@endsection


{{-- @extends ('layouts.app')

@section('content')

<p> This is a paragraph </p>


@endsection --}}