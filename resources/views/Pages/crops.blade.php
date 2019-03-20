@extends ('layouts.app')

@section ('content')
<div class="main-body">

    <div class="navbar">
        <div class="search-container">
          <form action="/search/crops" method="post" role="search">
            {{ csrf_field() }}
             <input type="text" placeholder="Crop Name" name="cropName">
             <button type="submit" class="btn btn-default">Search</button>
          </form>
        </div>
      </div>

    @foreach ($crops as $crop)
            <li class="list-group-item">
            <a href="#" style="text-decoration:none;color:black;padding-right:15px;"> <!--start cards -->
              <div class="card text-center" style="width:190px;border-radius:12px;">
                  <div class="card-header" style="font-family:'montserrat';color:#6F9E76;padding-bottom:5px;padding-top:8px;">
                  <a href="{{ url('crops/'.$crop['cropID']) }}">{{$crop['name_var_lndrce']}}</a>
                  </div>
                  <div class="card-body" style="padding-top:10px;font-family:'montserrat';">
                    <p>12356 threads</p>
                    <p style="font-size:13px;font-weight:500;">20 asked today</p>
                    <p style="font-size:13px;font-weight:500;">1000 asked this week</p>
                  </div>
              </div>
            </a><!--end one card -->
            </li>
    @endforeach






</div>

@endsection
