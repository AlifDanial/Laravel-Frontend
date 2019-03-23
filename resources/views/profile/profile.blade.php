
@extends ('layouts.app')


@section ('content')
<head>
<style>
    .main-body{
    padding-left:180px;
    padding-top:100px;
    padding-bottom:100px;
    }
    td{
    text-align: left;
    font-size: 15px;
    font-family: 'Montserrat';
    padding: 5px;
    padding-right: 20px;
    }

    .profile{
    width: 100%;
    font-size: 15px;
    }
    .profile-feed{
    width: 20%;
    }
    .profile-feed-tabs{
    width: 100%;
    display: block;
    }
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
    font-size:23px;
    font-weight:600;
    padding-bottom:10px;
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
    .question-shared-occu{ /*style for question shared occupation*/
    margin:0;
    font-size:12px;
    font-family:'arimo';
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

<div class="content-wrapper">
        <div class="main-body">
                <div class="profile">
              <table>
                <tr><td><img src="../../resources/img/amrahmed.jpg" width="100%"></td></td><td>
              <table>
               <tr></tr>
                <tr>
                  <!-- <td></td> -->
                  <td><h1 style=" font-family:'Montserrat';">
                    Dr Amr Ahmed <a href="edit_profile.php" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-pencil"></span> Edit
                  </a>
                  </h1>
                  </td>
                </tr>
                <tr>
                  <!-- <td></td> -->
                  <td><h2>
                    Research Assistant at Crops For the Future (CFF)
                  </h2>
                  </td>
                  <td><span class="glyphicon glyphicon-map-marker"> Cairo, Egypt</td>
                </tr>
                <tr>
                    <!-- <td></td> -->
                  <td>
                    Always curious on the different flora and fauna in our diverse environment
                  </td>
                  <td><span class="glyphicon glyphicon-time"> Member since 4 months ago</td>
                </tr>
                <tr>
                  <!-- <td></td> -->
                </tr>
                <tr>
                  <!-- <td></td> -->

                </tr>
              </table>
          </td>
          </tr>
          </table>

              </div>

              <br />
              <br />
              <br />

            <div class="col-md-3">
            <div class="profile-feed">
                <h3>Feeds</h3>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#">Answers</a></li>
                  <li class="active"><a href="#">Questions</a></li>
                  <li><a href="#">Upvotes</a></li>
                  <li><a href="#">Comments</a></li>
                </ul>
            </div>
            </div>
            <div class="col-md-8">
            <div class="profile-feed-tabs">
                <h3>Questions</h3>
                    <div class="card" style="border-width:2px;border-radius:10px;border-color: #DBDBDB;margin-top:15px;"> <!--thread starts -->
                        <div class="card-body">
                        <a href="#" style="color: black; text-decoration: none;"><h9>Hibiscus- Plants</h9></a>
                          <a href="#" style="color: black; text-decoration: none;"><h5 class="card-title" style="font-family:'poppins';padding-top:3px;">What is the protein content of a Hibiscus in Semenyih, Malaysia?</h5> </a>
                        </div>
                        <div class="buttons">
                                {{-- <div class="buttons-row">
                                <a href="#" class="btn btn-light" style="border-radius:10px;border-color: #DBDBDB;border-width:2px;margin:5px;">Answer</a> --}}
                                <button style='font-size:16px;border-radius:10px;border-color:grey;border-width:1px;margin:5px;'><i class='fas fa-edit' style="font-size: 10px;">Answer</i></button>
                                <div class="sharer">
                                      <div class="sharer-row">
                                      <div class="image-question-div">
                                      <a class="image-question" href="#">
                                        <img src="{{URL::asset('/svg/amr.svg')}}" class="image-questioner" alt="">
                                        </a>
                                      </div>
                                      <div class="questioner-info">
                                      <p class="question-shared" style="font-size: 10px;">Question Asked by</p>
                                      <a href="#" style="color: black; text-decoration: none;"><p class="question-shared-name">Alif Danial</p><p>Computer Scientist</p></a>

                                      </div>
                                      </div>
                                </div>
                        </div>
                    </div>
            </div>
            </div>

        </div>

</div>



@endsection
