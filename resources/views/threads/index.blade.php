@extends ('layouts.app2')

@section('content')

<head>
<style>
.card{ /*style for both cards*/
  -webkit-box-shadow: 0 8px 6px -6px #DBDBDB;
    -moz-box-shadow: 0 8px 6px -6px #DBDBDB;
    box-shadow: 0 8px 6px -6px #DBDBDB;
    
}

.card-body-inside{ /*style for best answer card body*/
  padding:.8rem;
  flex: 1 1 auto;
  
}
.card-body{ /*style for card body*/
  padding-bottom:7px;
}
.card-text-inside{ /*style for best answer title*/
  font-size:18px;
  font-weight:400;
  padding-left:4px;
  margin-bottom:10px;

}
.card-title{ /*style for card title*/
  font-size:20px;
  font-weight:600;
  padding-bottom:10px;
  color:#232b2b;
}
.content-wrapper{ /*style for overall page*/
  width:1080px;
  margin: 0 auto;
  padding-top:40px;
}
.card-col{ /*style for card column*/
  width:750px;
}
.subbed-crops{ /*style for left crops column*/
  width:100px;
  height:200px;
}
.buttons{ /*style for buttons*/
  padding-top:20px;
  padding-bottom:15px;
}
.answerer-row{ /*style for best answer profile info row*/
  
}
.best-answer{ /*style for 'best answer' text next to image*/
  margin:0;
  font-family:'montserrat';
  font-weight:700;
  font-size:12px;
}
.best-answer-name{ /*style for best answer name*/
  margin:0;
  font-size:14px;
  font-family:'noto serif';
  
}
.best-answer-occu{ /*style for best answer occupation*/
  margin:0;
  font-family:'arimo';
  font-size:12px;
  font-style:italic;
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
.sharer{ /*style for sharer info row dic*/
  float:right;
}
.image-answer-div{ /*style for div above image for answerer*/
  float:left;
  padding-left:5px;
}
.image-question-div{ /*style for div above image for questioner*/
  float:left;
}
.image-answerer{ /*style for best answerer image*/
  width:45px;
}
.image-questioner{ /*style for questioner image*/
  width:45px;
  padding-top: 5px;
}
.answerer-info{ /*style for all information for answerer div*/
  padding-left:55px;
}
.questioner-info{ /*style for all informartion for questioner div*/
  padding-left:55px;
}
.profile-name{ /*style for profile name*/
  margin:0;
  font-size:14px;
  font-family:'noto serif';
  padding-top:3px;
  padding-left:5px;
}
.image-profile{ /*style for questioner image*/
  width:30px;
}
ul,ol{
 list-style:none;
}
.subbed-crops{
  width:150px;
  margin-top:15px;
}
.image-crop{ /*style for questioner image*/
  width:20px;
}
.side-bar{
  padding:0px;
}
.side-bar-name{
  padding-top:3px;
  padding-left:2px;
  font-size:15px;
  font-family:'poppins';
  margin-bottom:4px;
}

@media only screen and  (max-width: 1300px){
  #content-wrapper{ width:10%} /*style for overall page*/
  #grid-page{ width:10%} /*style for overall page*/
      
}

.card-text-inside .more-text{
        display: none;
}
</style>

<script type="text/javascript">
$(document).ready(function(){
	var maxLength = 300;
	$(".card-text-inside").each(function(){
		var myStr = $(this).text();
		if($.trim(myStr).length > maxLength){
			var newStr = myStr.substring(0, maxLength);
			var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
			$(this).empty().html(newStr);
			$(this).append(' <a href="javascript:void(0);" class="read-more" style="font-size:15px;">(more)</a>');
			$(this).append('<span class="more-text">' + removedStr + '</span>');
		}
	});
	$(".read-more").click(function(){
		$(this).siblings(".more-text").contents().unwrap();
		$(this).remove();
	});
});
</script>

</head>
<body>


  <div class="content-wrapper">
    <div class="grid-page">
      <div class="row">

      <div class="subbed-crops">
        <div class="fixed-div" style="position:fixed;">
        <ul class="side-bar">
        <li class="subbed-crops-items">
          <a href="#" style="color: black; text-decoration: none;">
          <div class="row">
            <img src="{{URL::asset('/svg/home.svg')}}" class="image-crop" alt="">
            <a href="#" style="color: black; text-decoration: none;"><p class="side-bar-name">Feed</p></a>
          </div>
          </a>
          </li>
          <li class="subbed-crops-items">
          <a href="#" style="color: black; text-decoration: none;">
          <div class="row">
            <img src="{{URL::asset('/svg/crop.svg')}}" class="image-crop" alt="">
            <a href="#" style="color: black; text-decoration: none;"><p class="side-bar-name">Hibiscus</p></a>
          </div>
          </a>
          </li>
          <li class="subbed-crops-items">
          <a href="#" style="color: black; text-decoration: none;">
          <div class="row">
            <img src="{{URL::asset('/svg/crop.svg')}}" class="image-crop" alt="">
            <a href="#" style="color: black; text-decoration: none;"><p class="side-bar-name">Followed Crop</p></a>
          </div>
          </a>
          </li>
          <li class="subbed-crops-items">
          <a href="#" style="color: black; text-decoration: none;">
          <div class="row">
            <img src="{{URL::asset('/svg/crop.svg')}}" class="image-crop" alt="">
            <a href="#" style="color: black; text-decoration: none;"><p class="side-bar-name">Followed Crop</p></a>
          </div>
          </a>
          </li>
          <li class="subbed-crops-items">
          <a href="#" style="color: black; text-decoration: none;">
          <div class="row">
            <img src="{{URL::asset('/svg/crop.svg')}}" class="image-crop" alt="">
            <a href="#" style="color: black; text-decoration: none;"><p class="side-bar-name">Followed Crop</p></a>
          </div>
          </a>
          </li>
        </ul>
        </div>
      </div> <!-- end subbed-crops-->
    
    <div class="card-col">
    <div class="card" style="border-width:2px;border-radius:10px;border-color: #DBDBDB;margin-bottom:15px;"> <!--thread starts -->
        <div class="card-body" style="padding-top:15px;">
          <div class="profile-image">
            <div class="row" style="padding-left:15px;">
                  <a class="image-profile" href="#">
                    <img src="{{URL::asset('/svg/amr.svg')}}" class="image-profile" alt="">
                    </a>
                    <a href="#" style="color: black; text-decoration: none;"><p class="profile-name">Alif Danial</p></a>
            </div>            
        </div>
        
          <a href="#" style="color: black; text-decoration: none;"><h5 class="card-title" style="font-family:'poppins';padding-top:3px;margin-bottom:0;">What is your question?</h5></a>

        </div>
      </div> <!--thread ends -->

      <div class="card" style="border-width:2px;border-radius:10px;border-color: #DBDBDB;margin-bottom:15px;"> <!--thread starts -->
        <div class="card-body">
        <a href="#" style="color: black; text-decoration: none;"><h9>Hibiscus</h9></a>
          <a href="#" style="color: black;"><h5 class="card-title" style="font-family:'poppins';padding-top:3px;">What is the protein content of a Hibiscus in Semenyih, Malaysia?</h5> </a>

          <div class="card" style="border-width:2px;border-radius:10px;border-color: #3E920E;">
            <div class="card-body-inside">
            <p class="card-text-inside" style="font-family:'poppins';">Ut auctor velit sed consectetur rhoncus. Nunc dictum facilisis felis nec facilisis. Integer nec justo vitae orci cursus fermentum. Fusce semper, mi non tempus congue, velit leo efficitur quam, laoreet venenatis libero felis et lacus. Pellentesque mattis hendrerit nisi gravida hendrerit. Mauris sagittis tincidunt scelerisque. Vivamus lectus erat, dictum et magna quis, iaculis finibus nisl. Aliquam quis ante odio. Etiam tincidunt tellus tristique turpis tincidunt, eget condimentum urna rutrum. Donec maximus consequat dolor, sit amet condimentum ipsum gravida ac. Etiam posuere tellus mauris, et dignissim nisl rutrum quis. Mauris tincidunt ante sed velit maximus, vel tincidunt leo imperdiet. Morbi nec lacus et metus semper porttitor. Sed pellentesque ex at pellentesque scelerisque. </p>               <div class="answerer">
                  <div class="answerer-row">
                  <div class="image-answer-div">
                  <a class="image-answer" href="#">
                    <img src="{{URL::asset('/svg/ayman.svg')}}" class="image-answerer" alt="">
                    </a>
                  </div>
                  <div class="answerer-info">
                    <p class="best-answer">Best Answer by</p>
                    <a href="#" style="color: black;"><p class="best-answer-name">Ayman Salama</p></a>
                    
                  </div>
                  </div><!--end answerer row -->
              </div><!--end answerer -->
            </div><!--end card body inside -->
          </div> <!--end inner card -->

          <div class="buttons">
            <div class="buttons-row">

            <a href="#" class="btn btn-success " style="border-radius:10px;">
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

      <div class="card" style="border-width:2px;border-radius:10px;border-color: #DBDBDB;margin-bottom:15px;"> <!--thread starts -->
        <div class="card-body">
        <a href="#" style="color: black; text-decoration: none;"><h9>Hibiscus</h9></a>
          <a href="#" style="color: black;"><h5 class="card-title" style="font-family:'poppins';padding-top:3px;">What is the protein content of a Hibiscus in Semenyih, Malaysia?</h5></a>

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

      <div class="card" style="border-width:2px;border-radius:10px;border-color: #DBDBDB;margin-bottom:15px;"> <!--thread starts -->
        <div class="card-body">
        <a href="#" style="color: black; text-decoration: none;"><h9>Hibiscus</h9></a>
          <a href="#" style="color: black;"><h5 class="card-title" style="font-family:'poppins';padding-top:3px;">What is the protein content of a Hibiscus in Semenyih, Malaysia?</h5> </a>

          <div class="card" style="border-width:2px;border-radius:10px;border-color: #3E920E;">
            <div class="card-body-inside">
            <p class="card-text-inside" style="font-family:'poppins';">Ut auctor velit sed consectetur rhoncus. Nunc dictum facilisis felis nec facilisis. Integer nec justo vitae orci cursus fermentum. Fusce semper, mi non tempus congue, velit leo efficitur quam, laoreet venenatis libero felis et lacus. Pellentesque mattis hendrerit nisi gravida hendrerit. Mauris sagittis tincidunt scelerisque. Vivamus lectus erat, dictum et magna quis, iaculis finibus nisl. Aliquam quis ante odio. Etiam tincidunt tellus tristique turpis tincidunt, eget condimentum urna rutrum. Donec maximus consequat dolor, sit amet condimentum ipsum gravida ac. Etiam posuere tellus mauris, et dignissim nisl rutrum quis. Mauris tincidunt ante sed velit maximus, vel tincidunt leo imperdiet. Morbi nec lacus et metus semper porttitor. Sed pellentesque ex at pellentesque scelerisque. </p>               <div class="answerer">
                  <div class="answerer-row">
                  <div class="image-answer-div">
                  <a class="image-answer" href="#">
                    <img src="{{URL::asset('/svg/ayman.svg')}}" class="image-answerer" alt="">
                    </a>
                  </div>
                  <div class="answerer-info">
                    <p class="best-answer">Best Answer by</p>
                    <a href="#" style="color: black; text-decoration: none;"><p class="best-answer-name">Ayman Salama, Computer Scientist</p></a>
                    
                  </div>
                  </div><!--end answerer row -->
              </div><!--end answerer -->
            </div><!--end card body inside -->
          </div> <!--end inner card -->

          <div class="buttons">
            <div class="buttons-row">

            <a href="#" class="btn btn-success " style="border-radius:10px;">
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

      <div class="card" style="border-width:2px;border-radius:10px;border-color: #DBDBDB;margin-bottom:15px;"> <!--thread starts -->
        <div class="card-body">
        <a href="#" style="color: black; text-decoration: none;"><h9>Hibiscus</h9></a>
          <a href="#" style="color: black;"><h5 class="card-title" style="font-family:'poppins';padding-top:3px;">What is the protein content of a Hibiscus in Semenyih, Malaysia?</h5> </a>

          <div class="card" style="border-width:2px;border-radius:10px;border-color: #3E920E;">
            <div class="card-body-inside">
            <p class="card-text-inside" style="font-family:'poppins';">Ut auctor velit sed consectetur rhoncus. Nunc dictum facilisis felis nec facilisis. Integer nec justo vitae orci cursus fermentum. Fusce semper, mi non tempus congue, velit leo efficitur quam, laoreet venenatis libero felis et lacus. Pellentesque mattis hendrerit nisi gravida hendrerit. Mauris sagittis tincidunt scelerisque. Vivamus lectus erat, dictum et magna quis, iaculis finibus nisl. Aliquam quis ante odio. Etiam tincidunt tellus tristique turpis tincidunt, eget condimentum urna rutrum. Donec maximus consequat dolor, sit amet condimentum ipsum gravida ac. Etiam posuere tellus mauris, et dignissim nisl rutrum quis. Mauris tincidunt ante sed velit maximus, vel tincidunt leo imperdiet. Morbi nec lacus et metus semper porttitor. Sed pellentesque ex at pellentesque scelerisque. </p>               <div class="answerer">
                  <div class="answerer-row">
                  <div class="image-answer-div">
                  <a class="image-answer" href="#">
                    <img src="{{URL::asset('/svg/ayman.svg')}}" class="image-answerer" alt="">
                    </a>
                  </div>
                  <div class="answerer-info">
                    <p class="best-answer">Best Answer by</p>
                    <a href="#" style="color: black; text-decoration: none;"><p class="best-answer-name">Ayman Salama, Computer Scientist</p></a>
                    
                  </div>
                  </div><!--end answerer row -->
              </div><!--end answerer -->
            </div><!--end card body inside -->
          </div> <!--end inner card -->

          <div class="buttons">
            <div class="buttons-row">

            <a href="#" class="btn btn-success " style="border-radius:10px;">
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

    </div> <!--card column ends -->
    
        </div> <!--end row -->
      </div> <!--end grid page -->
    </div> <!--end row -->
  </body>
@endsection