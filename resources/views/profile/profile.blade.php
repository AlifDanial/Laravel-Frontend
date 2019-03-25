@extends ('layouts.app')


@section ('content')
<head>
<style>
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
    font-size:20px;
    font-weight:600;
    padding-bottom:10px;
    }
    .content-wrapper{ /*style for overall page*/
    width:1080px;
    margin: 0 auto;
    padding-top:60px;
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
    font-size:11px;
    }
    .question-shared-name{ /*style for question shared name*/
    margin:0;
    font-size:12px;
    font-family:'noto serif';
    }
    .question-shared-occu{ /*style for question shared occupation*/
    margin:0;
    font-size:11.5px;
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
    margin-top:5px;

    }
    .image-answerer{ /*style for best answerer image*/
    width:45px;
    }
    .image-questioner{ /*style for questioner image*/
    width:40px;
    }
    .answerer-info{ /*style for all information for answerer div*/
    padding-left:55px;
    }
    .questioner-info{ /*style for all informartion for questioner div*/
    padding-left:47px;
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
    p{
      margin:0;
    }
    .profile-image-size{ /*style for questioner image*/
    width:150px;
    }
    .profile-image-div{
      padding-left:120px;
      padding-right:35px;
      padding-top:10px;
    }
    .profile-info-div{
      width:390px;
      margin-top:10px;
    }
    .name{
      font-family:'poppins';
      font-size:28px;
      font-weight:700;
      width:300px;
      line-height:0.9;
    }
    .occu{
      font-family:'poppins';
      font-size:18px;
      font-weight:500;
      line-height:1.0;
      padding-top:9px;
      width:320px;
    }
    .desc{
      font-family:'montserrat';
      font-size:16px;
      font-weight:400;
      font-style:italic;
      line-height:1.2;
    }
    .edit-link{
      font-family:'montserrat';
      font-size:14px;
      font-weight:400;
      font-style:italic;
      margin-top:10px;
    }
    .profile-info-desc-div{
      padding-top:5px;
      width:300px;
    }
    .profile-info-right-div{
      width:300px;
      padding-top:30px;
    }
    .right-images{
      width:20px;
      height:25px;
      margin-top:10px;
      margin-right:5px;
    }
    .right{
      font-family:'montserrat';
      font-size:17px;
      font-weight:500;
      line-height:1.0;
      padding-top:10px;
      width:320px;
    }
    .profile-body{
      margin-left:120px;
      margin-top:50px;
    }
    .col-left-feed-div{
      width:150px;
    }
    .feeds-title{
      font-family:'poppins';
      font-size:17px;
      font-weight:500;
      padding-left:5px;
    }
    .btn-group-vertical{
      width:150px;
    }
    .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:active,
    .btn-secondary:visited,
    .btn-secondary:focus {
      background-color: #fafafa;
      border-color: #fafafa;
  }
    .btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show>.btn-secondary.dropdown-toggle {
      background-color: #DBDBDB;
      border-color: #DBDBDB;
      box-shadow:none !important;
  }
  .col-right-card-div{
      width:700px;
      margin-left:35px;
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

  function toggle(n) {
    if (n == 1) {
    document.getElementById("change").innerHTML = "Questions";
  }
  if (n == 2) {
    document.getElementById("change").innerHTML = "Answers";
  }
  if (n == 3) {
    document.getElementById("change").innerHTML = "Upvotes";
  }
  if (n == 4) {
    document.getElementById("change").innerHTML = "Comments";
  }
}

$(window).scroll(function() {
    if ($(this).scrollTop()>500)
     {
        $('.cards-displaed').hide(1000);
     }
    else
     {
      $('.cards-displayd').show(1000);
     }
 });

</script>
<?php
function showTotalVote($id){
  $result = DB::table('thread')
                          ->selectRaw("ThreadVoteCount")
                          ->whereRaw("ThreadID = $id")
                          ->get();

  $result = json_decode($result)[0];
  return $result -> ThreadVoteCount;
}

?>
</head>

<div class="content-wrapper">
  <div class="page-grid">
      <div class="profile-header">
        <div class="row">
          <div class="profile-image-div">
              <img src="{{URL::asset('/svg/amr.svg')}}" class="profile-image-size" alt="">
          </div> <!--div1 -->
          <div class="profile-info-div">            
              <p class="name">Amr Ahmed</p>
              <p class="occu" >Head, School of Computer Science</p>
              <div class="profile-info-desc-div">
                  <p class="desc" >Interested in the research of Crops and into learning new things on forums.</p>
              </div>
              <a href="#" style="text-decoration:none;color:blue;"><p class="edit-link">Click here to edit</p></a>
          </div> <!--div2 -->
          <div class="profile-info-right-div">
            <div class="row">
                <div class="occu-div">
                  <div class="row">
                      <img src="{{URL::asset('/svg/location.svg')}}" class="right-images" alt="">
                      <p class="right" style="margin-top:3px;">Semenyih, Malaysia</p> 
                  </div>
                </div> <!--first right div -->
                <div class="occu-div">
                    <div class="row">
                        <img src="{{URL::asset('/svg/clock.svg')}}" class="right-images" alt="">
                        <p class="right" style="margin-top:3px;">Member for 2 months</p> 
                    </div>
                  </div> <!--2nd right div -->
                  <div class="occu-div">
                      <div class="row">
                          <img src="{{URL::asset('/svg/eye.svg')}}" class="right-images" alt="">
                          <p class="right" style="margin-top:3px;">90 profile views</p> 
                      </div>
                    </div> <!--3rd right div -->
            </div><!--end inner row -->                   
          </div> <!--div3 -->
        </div> <!--end row -->
      </div><!--end profile header -->

      <div class="profile-body">
        <div class="row">
            <div class="col-left-feed-div">
                <p class="feeds-title">Feeds</p>
                <hr style="border: 1px solid #DBDBDB;margin-top:5px;">                
                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary text-dark active" onclick="toggle(1)" style="font-family:'montserrat'; font-size:15px;padding-top:5px;font-weight:500;text-align:left;border-radius:10px;margin-bottom:5px;">
                          <input type="radio" name="options" id="option1" autocomplete="off" checked> Questions
                        </label>
                        <label class="btn btn-secondary text-dark"  onclick="toggle(2)" style="font-family:'montserrat'; font-size:15px;padding-top:5px;font-weight:500;text-align:left;border-radius:10px;margin-bottom:5px;">
                          <input type="radio" name="options" id="option2" autocomplete="off"> Answers
                        </label>
                        <label class="btn btn-secondary text-dark" onclick="toggle(3)"  style="font-family:'montserrat'; font-size:15px;padding-top:5px;font-weight:500;text-align:left;border-radius:10px;margin-bottom:5px;">
                          <input type="radio" name="options" id="option3" autocomplete="off"> Upvotes
                        </label>
                        <label class="btn btn-secondary text-dark" onclick="toggle(4)" style="font-family:'montserrat'; font-size:15px;padding-top:5px;font-weight:500;text-align:left;border-radius:10px;margin-bottom:5px;">
                            <input type="radio"  name="options" id="option3" autocomplete="off"> Comments
                          </label>
                      </div> <!--end button group -->                          
            </div><!--end col left feed div -->
            <div class="col-right-card-div">
                <p id="change" class="feeds-title">Questions</p>
                <hr style="border: 1px solid #DBDBDB;margin-top:5px;margin-bottom:20px;">
              <div class="cards-displayed">

                @foreach($threads as $thread)

      <div class="card" style="border-width:2px;border-radius:10px;border-color: #DBDBDB;margin-bottom:15px;"> <!--thread starts -->
        <div class="card-body">
        <a href="#" style="color: black; text-decoration: none;"><h9>Hibiscus</h9></a>
          <a href="{{ url('threads/'.$thread -> ThreadID) }}" style="color: black;"><h5 class="card-title" style="font-family:'poppins';padding-top:3px;">{{$thread->ThreadSubject}}</h5></a>

          <div class="buttons">
            <div class="buttons-row">
            <a href="#" class="btn btn-success" style="border-radius:10px;background-color:#6F9E76;"> <!-- upvote -->
              <i class="fas fa-arrow-alt-circle-up fa-lg">
                <span style="font-family:'poppins';font-size:18px; font-weight:500;">
                    <?php
                      echo ". ", (showTotalVote($thread -> ThreadID));
                    ?>
                </span>
              </i>
            </a>
            <a href="#" class="btn btn-danger" style="border-radius:10px;background-color:#c93030;"> <!-- downvote -->
            <i class="fas fa-arrow-alt-circle-down fa-lg"></i>
            </a>
            <a href="{{ url('threads/'.$thread -> ThreadID) }}" class="btn btn-light" style="border-radius:10px;border-color: #DBDBDB;border-width:2px;">Answer</a>
            <div class="sharer">
                  <div class="sharer-row">
                  <div class="image-question-div">
                  <a class="image-question" href="#">
                    <img src="{{URL::asset('/svg/amr.svg')}}" class="image-questioner" alt="">
                    </a>
                  </div>
                  <div class="questioner-info">
                  <p class="question-shared">Question Asked by</p>
                  <a href="#" style="color: black; text-decoration: none;"><p class="question-shared-name">Username</p></a>
                  <a href="#" style="color: black; text-decoration: none;"><p class="question-shared-occu">Computer Scientist</p></a>

                  </div>
                </div><!--end answerer row -->
              </div><!--end answerer -->
            </div>
          </div><!--end buttons -->
        </div>
      </div> <!--thread ends -->

                @endforeach
                </div><!--end class displayed -->                    
            </div><!--end col left feed div -->
        </div>

      </div>
  </div><!--end page-grid -->
</div> <!--end content wrapper -->



@endsection
