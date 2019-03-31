@extends ('layouts.app')

@section ('content')
<head>
    <style>
.content-wrapper{ /*style for overall page*/
  width:1080px;
  margin: 0 auto;
  padding-top:40px;
}
.card-col{ /*style for card column*/
  margin-left:130px;
  margin-top: 20px;
  width:750px;
}

.crops-search{
  margin-bottom:30px;
  min-height:200px;
  max-height:400px;
}
.posts-related{
  color:#DBDBDB;
  font-family:'montserrat';
  font-size: 20px;
  padding-top:3px;
  margin-left: auto;
}
.crop-name{
  font-family:'montserrat';
  font-size: 23px;
  font-weight:700;
  color:#6F9E76;
}
.image-crop{ /*style for questioner image*/
  width:40px;
  height:35px;
}
.card{
  -webkit-box-shadow: 0 8px 6px -6px #DBDBDB;
    -moz-box-shadow: 0 8px 6px -6px #DBDBDB;
    box-shadow: 0 8px 6px -6px #DBDBDB;
    margin-bottom:10px;
    
    
}
    </style>
</head>
<body>
    

<div class="content-wrapper">
    <div class="card-col">

      <div class="crops-search">

          <?php if (count ( $search_crop ) > 0) { ?>
            
            

            @foreach ($search_crop as $crop)
                        <div class="card" style="width:650px;padding:10px;border-radius:10px;">
                            <div class="row" style="margin-left:1px;margin-right:1px;">
                                <img src="{{URL::asset('/svg/crop.svg')}}" class="image-crop" alt="">
                                <a href="{{ url('crops/'.$crop['cropID']) }}" style="text-decoration:none;color:#6F9E76;:30px;" class="crop-name">{{$crop['name_var_lndrce']}}</a>
                                <p class="posts-related">1549 related posts</p>
                            </div>                    
                        </div>                                                     
            @endforeach

        <?php } else {
          echo "<p>Your search '$text' did not match any crops.</p>
                <p>Suggestions:</p>
                <ul>
                <li> Make sure that all words are spelled correctly</li>
                <li> Try different keywords</li>
                <li> Try more general words</li>
                </ul>";
              }
        ?>

      </div>
    </div>
  </div>

</body>
@endsection
