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
.card-body{ /*style for card body*/
  padding-bottom:7px;
}
.card-title{ /*style for card title*/
  font-size:20px;
  font-weight:600;
  padding-bottom:10px;
  color:#232b2b;
}
.buttons{ /*style for buttons*/
  padding-top:20px;
  padding-bottom:15px;
}
.sharer{ /*style for sharer info row dic*/
  float:right;
}
.image-question-div{ /*style for div above image for questioner*/
  float:left;
}
.image-questioner{ /*style for questioner image*/
  width:45px;
}
.questioner-info{ /*style for all informartion for questioner div*/
  padding-left:55px;
}
.question-shared-name{ /*style for question shared name*/
  margin:0;
  font-size:12px;
  font-family:'noto serif';
}
.question-shared{
  margin-bottom:0px !important;
  font-family:'montserrat';
  font-weight:700;
  font-size:12px;
}
.question-shared-occu{ /*style for question shared occupation*/
  margin:0;
  font-size:12px;
  font-family:'noto serif';
}
.crop-title{
  margin:0px;
  font-family:'montserrat';
  font-size:23px;
  font-qeight:500;
  margin-bottom:20px;
}
.crop-name{
  font-family:'montserrat';
  font-size: 23px;
  font-weight:700;
  color:#6F9E76;
}
.crops-search{
  margin-bottom:30px;
  height:400px;
}
.threads-search{
  margin-bottom:30px;
  height:400px;
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
.posts-related{
  color:#DBDBDB;
  font-family:'montserrat';
  font-size: 20px;
  padding-top:3px;
  margin-left: auto;
}
p{
  margin:0px;
}
</style>
</head>

    <div class="content-wrapper">
            <div class="card-col">

              <div class="crops-search">
                  <?php echo"<p class='crop-title'>Crops related to '$text'</p>"; ?>
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
                

              <div class="threads-search">
                  <?php echo"<p class='crop-title'>Questions related to '$text'</p>"; ?>
                  <?php if (count ( $search_thread ) > 0) { ?>

                    

                    @foreach ($search_thread as $data)
    
    
                        {{--<h1><a href="{{ url('threads/'.$data -> ThreadID) }}">{{$data -> ThreadSubject}}</a></h1>--}}
    
                        <div class="card" style="border-width:2px;border-radius:10px;border-color: #DBDBDB;margin-bottom:15px;"> <!--thread starts -->
                            <div class="card-body">
                            <a href="#" style="color: black; text-decoration: none;"><h9>Hibiscus</h9></a>
                            <a href="{{ url('threads/'.$data -> ThreadID) }}" style="color: black;"><h5 class="card-title" style="font-family:'poppins';padding-top:3px;">{{$data -> ThreadSubject}}</h5></a>
    
                            <div class="buttons">
                                <div class="buttons-row">
                                <!--<h4 style="float:left;padding-top:6px;padding-bottom:10px;padding-right:5px;font-family:'poppins'">12</h4>-->
                                <a href="#" class="btn btn-success" style="border-radius:10px;">
                                <i class="fas fa-arrow-alt-circle-up fa-lg"><span style="font-family:'montserrat' font-weight:100;">&nbsp·&nbsp0</span></i>
                                </a>
                                <a href="#" class="btn btn-danger" style="border-radius:10px;">
                                <i class="fas fa-arrow-alt-circle-down fa-lg"></i>
                                </a>
                                <a href="#" class="btn btn-light" style="border-radius:10px;border-color: #DBDBDB;border-width:2px;">Answer</a>
                                <div class="sharer">
                                    <div class="sharer-row">
                                    <div class="image-question-div">
                                    <a class="image-question" href="#">
                                        <img src="{{URL::asset('/svg/amr.svg')}}" class="image-questioner" alt="">
                                        </a>
                                    </div>
                                    <div class="questioner-info">
                                        <p class="question-shared">Question Asked by</p>
                                        <a href="#" style="color: black; text-decoration: none;"><p class="question-shared-name">Amr Ahmed</p></a>
                                        <a href="#" style="color: black; text-decoration: none;"><p class="question-shared-occu">Computer Scientist</p></a>
    
                                    </div>
                                    </div><!--end answerer row -->
                                </div><!--end answerer -->
                                </div>
                            </div><!--end buttons -->
                            </div>
                        </div> <!--thread ends -->
    
    
                @endforeach
    
            <?php } else {
                echo "<p>Your search '$text' did not match any threads.</p>
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




</div>

@endsection


{{-- @extends ('layouts.app')

@section('content')

<p> This is a paragraph </p>


@endsection --}}
