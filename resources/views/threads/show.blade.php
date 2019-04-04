@extends ('layouts.app')

@section ('content')
<head>
<style>
.content-wrapper{ /*style for overall page*/
  width:1080px;
  margin: 0 auto;
}
.page-grid{ /*style for card column*/
  margin-left:50px;
  margin-top: 20px;
  width:750px;
}
.title{
  font-family:'poppins';
  font-size:25px;
  font-weight:700;
  margin-bottom:30px;
}
.crop{
  font-family:'montserrat';
  font-weight:500;
  font-size:16px;
}
.desc{
  font-family:'poppins';
  font-weight:500;
  font-size:18px;
}
.image-answer-div{ /*style for div above image for answerer*/
  float:left;
  padding-left:5px;
}
.image-question-div{ /*style for div above image for questioner*/
  float:left;
}
.image-questioner{ /*style for questioner image*/
  width:45px;
  padding-top: 5px;
}
.questioner-info{ /*style for all informartion for questioner div*/
  padding-left:55px;
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
.question-shared-name{ /*style for question shared name*/
  margin:0;
  font-size:12px;
  font-family:'noto serif';
}
.sharer{ /*style for sharer info row dic*/
  float:right;
}
hr.line1{
    border:.7px solid #DBDBDB;
    margin-top:10px;
}
.answer-body{
  margin-left:20px;
  margin-right:20px;
}
p{margin:0;}
.answer-text{
  font-family:'poppins';
  font-size:18px;
  font-weight:500;
}
.answer-text .more-text{
        display: none;
}
.image-comment{ /*style for questioner image*/
  width:40px;
  padding-top: 5px;
}
.form-comment input {
   width: 500px;
   height: 40px;
   margin-left:10px;
   padding-left:10px;
   margin-top:9px;
 }
 .checkbox ~ .expand-link:before {
  content: '(Show more)';
}

.checkbox:checked ~ .expand-link:before {
  content: '(Show less)';
}
.checkbox {
  display: none;
}
</style>
</head>
<script type="text/javascript">
  $(document).ready(function(){
    var maxLength = 300;
    $(".answer-text").each(function(){
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
<div class="content-wrapper">
      <div class="page-grid">
            <div class='card-body'>
              <h5 class="crop">Hibiscus</h5>
              <h2 class="title">{{$thread->ThreadSubject}}</h2>
                  <p class='desc'>{!!$thread->ThreadDescription!!}</p>


                      <div class="buttons">
                          <div class="buttons-row" style="padding-top:20px;">
                            <a class="btn btn-light" style="border-radius:10px;border-color: #DBDBDB;border-width:2px;margin-top:15px;">Answer</a>
                          <a href="/threads/{{$thread->ThreadID}}/edit" class="btn btn-success" style="border-radius:10px;background-color:#6F9E76;margin-top:15px;"> Edit </a>
                          <a href="#" class="btn btn-success" style="border-radius:10px;background-color:#6F9E76;margin-top:15px;"> <!-- upvote -->
                            <i class="fas fa-arrow-alt-circle-up fa-lg">
                              <span style="font-family:'poppins';font-size:18px; font-weight:500;">
                                  {{$thread->ThreadVoteCount}}
                              </span>
                            </i>
                          </a>
                          <a href="#" class="btn btn-danger" style="border-radius:10px;background-color:#c93030;margin-top:15px;"> <!-- downvote -->
                          <i class="fas fa-arrow-alt-circle-down fa-lg"></i>
                          </a>

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
                          </div>
                      </div>
                  </div>
              </div>
          <hr class="line1"> <!--horizontal line -->


          {!!Form::open(['action' => ['ThreadsController@destroy',$thread->ThreadID], 'method' => 'POST', 'class' => 'float-right' ]) !!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

        {!!Form::close()!!}
      </div> <!--end top part -->

      <div class="answer-body">

          <div class="card" style="border-width:2px;border-radius:10px;border-color: #DBDBDB;margin-top:30px;">
              <div class="card-body" style="padding:12px;">
                  <p class="answer-text">Aepe qui cupiditate dolor ratione sequi.Aepe qui cupiditate dolor ratione sequi.Aepe qui cupiditate dolor ratione sequi.Aepe qui cupiditate dolor ratione sequi.Aepe qui cupiditate dolor ratione sequi.Aepe qui cupiditate dolor ratione sequi.Aepe qui cupiditate dolor ratione sequi.Aepe qui cupiditate dolor ratione sequi.</p>

                  <div class="buttons">
                      <div class="buttons-row" style="padding-top:20px;">
                      <a href="#" class="btn btn-success" style="border-radius:10px;background-color:#6F9E76;margin-top:15px;"> <!-- upvote -->
                        <i class="fas fa-arrow-alt-circle-up fa-lg">
                          <span style="font-family:'poppins';font-size:18px; font-weight:500;">
                              {{$thread->ThreadVoteCount}}
                          </span>
                        </i>
                      </a>
                      <a href="#" class="btn btn-danger" style="border-radius:10px;background-color:#c93030;margin-top:15px;"> <!-- downvote -->
                      <i class="fas fa-arrow-alt-circle-down fa-lg"></i>
                      </a>

                        <div class="sharer">
                            <div class="sharer-row">
                              <div class="image-question-div">
                                <a class="image-question" href="#">
                                  <img src="{{URL::asset('/svg/amr.svg')}}" class="image-questioner" alt="">
                                  </a>
                              </div>
                              <div class="questioner-info">
                                <p class="question-shared">Question Answered by</p>
                                <a href="#" style="color: black; text-decoration: none;"><p class="question-shared-name">Username</p></a>
                                <a href="#" style="color: black; text-decoration: none;"><p class="question-shared-occu">Computer Scientist</p></a>
                              </div>
                            </div>
                        </div>

                  </div>
                </div>

              <div class="card" style="border-width:2px;border-radius:0px;border-color: #DBDBDB;margin-top:20px;">
                <div class="card-body" style="padding:12px;">
                   <div class="row" style="margin:0px;">
                      <a class="image-comment" href="#" >
                          <img src="{{URL::asset('/svg/amr.svg')}}" class="image-comment" alt="">
                          </a>

                          <form class="form-comment" action="" method="post" role="search">
                            {{ csrf_field() }}
                             <input class="form-control" type="text" placeholder="Add a comment" name="text" style="border-radius:10px;" autocomplete="off">
                             <input type="submit"
                             style="position: absolute; left: -9999px; width: 1px; height: 1px;"
                             tabindex="-1" />
                            </form>
                   </div>


                </div>
              </div>

          </div> <!-- end card body-->
        </div> <!-- end card -->


        <div class="expandable">
            <p class="q-desc" style="margin-top:50px;"> {{Form::label('question description', 'Answer Question')}} </p>
            {{Form::textarea('question description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'autocomplete' => 'off' ])}}
         </div>
         <label for="1" class="expand-link" style="width:90px;font-family:'noto serif';font-size:14px;margin-left:auto;color:#6F9E76;"></label>







    </div>
</div>

<script>
    var coll = document.getElementsByClassName("expand-link");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var expandable = this.previousElementSibling;
        if (expandable.style.maxHeight){
            expandable.style.maxHeight = null;
        } else {
            expandable.style.maxHeight = expandable.scrollHeight + "px";
        }
    });
    }
</script>
@endsection
