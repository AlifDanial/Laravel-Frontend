@extends ('layouts.app3')

@section ('content')
<head>
  <style>
  .content-wrapper{ /*style for overall page*/
    width:1080px;
    margin: 0 auto;
    padding-top:40px;
  }
  .page-col{
    margin-left:50px;
    margin-top:20px;
  }
  .page-title{
    font-family:'montserrat';
    font-weight:700;
    color:#6F9E76;
    font-size:30px;
  }
  .page-description{
    font-family:'montserrat';
    font-weight:500;
    font-size:18px;
  }
  .toggler{
    float:left;
  }
  .btn-secondary,
  .btn-secondary:hover,
  .btn-secondary:active,
  .btn-secondary:visited,
  .btn-secondary:focus {
      background-color: #ffffff;
      border-color: #DBDBDB;
  }

  .btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show>.btn-secondary.dropdown-toggle {
      background-color: #b3db95;
      border-color: #b3db95;
      box-shadow:none !important;
  }
  p{
    margin:0px;
  }
  .card-body{
    font-size:15px;
    font-weight:400;
  }
  .card-header{
    font-size:16px;
    font-weight:700;
  }
  .followbutton:hover{
      color:#808080;

  }
  </style>
</head>
<script>
jQuery(function($) {
  $('#swapFire').on('click', function() {
    var $el = $(this),
      textNode = this.lastChild;
    $el.find('span').toggleClass('fas fa-plus-square fa-sm fas fa-minus-square fa-sm');
    textNode.nodeValue =($el.hasClass('showFire') ? ' Unfollow' : ' Follow')
    $el.toggleClass('showFire');
  });
});
</script>

<div class="content-wrapper">
  <div class="page-col">
    <div class="crop-head">
        <h3 class="page-title">Crops</h3>
        <h4 class="page-description">Explore questions related to a specific crop.</h4>

      <div class="row" style="margin-left:1px;">

          <div class="search-crop-form">
              <form class="form-inline" action="/search/crops" method="post" role="search" >
                {{ csrf_field() }}
                  <input class="form-control" type="text" name="cropName" placeholder="Search Crops" style="border-radius:10px; margin-top:30px;border-width:2px; box-shadow: 0 8px 6px -6px #DBDBDB; -moz-box-shadow: 0 8px 6px -6px #DBDBDB;-webkit-box-shadow: 0 8px 6px -6px #DBDBDB;">
                  <input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;" tabindex="-1" />
                </form>
            </div><!--search form group -->

          <div class="toggler" style="margin-top:32px;margin-left:570px;margin-right:1px;">
            <div class="btn-group btn-group-toggle" data-toggle="buttons" style="box-shadow: 0 8px 6px -6px #DBDBDB; -moz-box-shadow: 0 8px 6px -6px #DBDBDB;-webkit-box-shadow: 0 8px 6px -6px #DBDBDB;">
              <label class="btn btn-secondary text-dark active" style="font-family:'montserrat'; font-size:15px;padding-top:5px;font-weight:500;">
                <input type="radio" name="options" id="option1" autocomplete="off" checked> A-Z
              </label>
              <label class="btn btn-secondary text-dark"  style="font-family:'montserrat'; font-size:15px;padding-top:5px;font-weight:500;">
                <input type="radio" name="options" id="option2" autocomplete="off"> Recent
              </label>
              <label class="btn btn-secondary text-dark"  style="font-family:'montserrat'; font-size:15px;padding-top:5px;font-weight:500;">
                <input type="radio" name="options" id="option3" autocomplete="off"> Popular
              </label>
            </div>
          </div><!--button group -->

      </div><!-- end row -->
    </div><!--end crop head -->

    <div class="crop-body" style="margin-top:50px;">

    @for($i=0;$i<$length;$i+=5)

    <div class="row" style="margin-bottom:20px;"> <!--start row of cards -->

            @if($i < $length)

            <div style="text-decoration:none;color:black;padding-right:15px;"> <!--start cards -->
              <div class="card text-center" style="width:190px;border-radius:12px;">
                  <div class="card-header" style="font-family:'montserrat';color:#6F9E76;padding-bottom:5px;padding-top:8px;padding-right:5px;padding-left:5px;">
                    <a href="{{ url('crops/'.$crops[$i]['cropID']) }}" style="text-decoration:none;color:#6F9E76;">{{$crops[$i]['name_var_lndrce']}}</a>
                    {{-- <a href="#" class="something"><span class="fas fa-plus-square fa-sm toggle-follow" style="text-decoration: none;color:#6F9E76;"></span></a> --}}
                  </div>
                  <div class="card-body" style="padding-top:10px;font-family:'montserrat';">
                    <p>12356 threads</p>
                    <p style="font-size:13px;font-weight:500;">20 asked today</p>
                    {{-- <p style="font-size:13px;font-weight:500;">1000 asked this week</p> --}}

                    <button id="swapFire" class="btn btn-primary showFire" style="font-family:''">
                            <span class="fas fa-plus-square fa-sm"></span> Follow
                        </button>

                  </div>
              </div>
            </div><!--end one card -->
            @else
          </div><!--end row of cards -->
             @break
              @endif

            @if($i+1 < $length)
            <a href="{{ url('crops/'.$crops[$i+1]['cropID']) }}" style="text-decoration:none;color:black;padding-right:15px;"> <!--start cards -->
              <div class="card text-center" style="width:190px;border-radius:12px;">
                  <div class="card-header" style="font-family:'montserrat';color:#6F9E76;padding-bottom:5px;padding-top:8px;padding-right:5px;padding-left:5px;">
                    <p>{{$crops[$i+1]['name_var_lndrce']}}</p>
                  </div>
                  <div class="card-body" style="padding-top:10px;font-family:'montserrat';">
                    <p>12356 threads</p>
                    <p style="font-size:13px;font-weight:500;">20 asked today</p>
                    <p style="font-size:13px;font-weight:500;">1000 asked this week</p>
                  </div>
              </div>
            </a><!--end one card -->
            @else
          </div><!--end row of cards -->
             @break
              @endif

            @if($i+2 < $length)
            <a href="{{ url('crops/'.$crops[$i+2]['cropID']) }}" style="text-decoration:none;color:black;padding-right:15px;"> <!--start cards -->
              <div class="card text-center" style="width:190px;border-radius:12px;">
                  <div class="card-header" style="font-family:'montserrat';color:#6F9E76;padding-bottom:5px;padding-top:8px;padding-right:5px;padding-left:5px;">
                    <p>{{$crops[$i+2]['name_var_lndrce']}}</p>
                  </div>
                  <div class="card-body" style="padding-top:10px;font-family:'montserrat';">
                    <p>12356 threads</p>
                    <p style="font-size:13px;font-weight:500;">20 asked today</p>
                    <p style="font-size:13px;font-weight:500;">1000 asked this week</p>
                  </div>
              </div>
            </a><!--end one card -->
            @else
          </div><!--end row of cards -->
             @break
              @endif

            @if($i+3 < $length)
            <a href="{{ url('crops/'.$crops[$i+3]['cropID']) }}" style="text-decoration:none;color:black;padding-right:15px;"> <!--start cards -->
              <div class="card text-center" style="width:190px;border-radius:12px;">
                  <div class="card-header" style="font-family:'montserrat';color:#6F9E76;padding-bottom:5px;padding-top:8px;padding-right:5px;padding-left:5px;">
                    <p>{{$crops[$i+3]['name_var_lndrce']}}</p>
                  </div>
                  <div class="card-body" style="padding-top:10px;font-family:'montserrat';">
                    <p>12356 threads</p>
                    <p style="font-size:13px;font-weight:500;">20 asked today</p>
                    <p style="font-size:13px;font-weight:500;">1000 asked this week</p>
                  </div>
              </div>
            </a><!--end one card -->
            @else
          </div><!--end row of cards -->
             @break
              @endif

            @if($i+4 < $length)
            <a href="{{ url('crops/'.$crops[$i+4]['cropID']) }}" style="text-decoration:none;color:black;padding-right:15px;"> <!--start cards -->
              <div class="card text-center" style="width:190px;border-radius:12px;">
                  <div class="card-header" style="font-family:'montserrat';color:#6F9E76;padding-bottom:5px;padding-top:8px;padding-right:5px;padding-left:5px;">
                    <p>{{$crops[$i+4]['name_var_lndrce']}}</p>
                  </div>
                  <div class="card-body" style="padding-top:10px;font-family:'montserrat';">
                    <p>12356 threads</p>
                    <p style="font-size:13px;font-weight:500;">20 asked today</p>
                    <p style="font-size:13px;font-weight:500;">1000 asked this week</p>
                  </div>
              </div>
            </a><!--end one card -->
            @else
            </div><!--end row of cards -->
             @break
              @endif
        </div><!--end row of cards -->
    @endfor

    </div><!--end crop body -->
  </div><!--end page-col-->
</div><!--end content wrapper -->



@endsection
