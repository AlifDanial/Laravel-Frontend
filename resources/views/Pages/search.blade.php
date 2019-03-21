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
  margin-left:100px;
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
.question-shared{ /*style for 'question shared by' text*/
  margin:0;
  font-family:'montserrat';
  font-weight:700;
  font-size:12px;
}
.question-shared-name{ /*style for question shared name*/
  margin:0;
  font-size:14px;
  font-family:'noto serif';
}
</style>
</head>

    <div class="content-wrapper">
            <div class="card-col">

                <?php if (count ( $search_crop ) > 0) { ?>

                    @foreach ($search_crop as $crop)
                            <li class="list-group-item">
                            <a href="{{ url('crops/'.$crop['cropID']) }}">{{$crop['name_var_lndrce']}}</a>
                            </li>
                    @endforeach

                <?php } else {
                    echo "No Crop found. Try to search again!" ;
                    echo "";
                }
                ?>


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
                                <a href="#" style="color: black; text-decoration: none;"><p class="question-shared-name">Amr Ahmed, Computer Scientist</p></a>

                                </div>
                                </div><!--end answerer row -->
                            </div><!--end answerer -->
                            </div>
                        </div><!--end buttons -->
                        </div>
                    </div> <!--thread ends -->


            @endforeach

        <?php } else {
            echo "<p>Your search '$data' did not match any threads.</p>
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

@endsection


{{-- @extends ('layouts.app')

@section('content')

<p> This is a paragraph </p>


@endsection --}}
