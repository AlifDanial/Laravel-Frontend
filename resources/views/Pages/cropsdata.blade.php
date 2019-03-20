@extends ('layouts.app')

@section ('content')
<head>
<style>
.content-wrapper{ /*style for overall page*/
  width:1080px;
  margin: 0 auto;
  padding-top:40px;
}
.page-grid{ /*style for card column*/
  margin-left:100px;
  margin-top: 20px;
  width:750px;
}
.card{ /*style for both cards*/
  -webkit-box-shadow: 0 8px 6px -6px #DBDBDB;
    -moz-box-shadow: 0 8px 6px -6px #DBDBDB;
    box-shadow: 0 8px 6px -6px #DBDBDB;
    border-radius:10px;
    margin-top:30px;
    margin-bottom:15px;
    border-width:2px;
    padding:5px;

}
.header{
    padding-top:15px;
    padding-left:10px;
}
.crop-name{
  font-family:'montserrat';
  font-weight:700;
  color:#6F9E76;
  font-size:23px;
  padding-left:10px;
  padding-top:5px;
}
.image-crop{
    width:45px;
    height:45px;
}
p{
   margin:0;
}
.table-body{
    padding:10px;
    padding-left:65px;
    padding-bottom:0px;
}
.attribute-value .more-text{
        display: none;
}
.row{
    margin-left:1px;
}
.attribute-name{
  font-family:'montserrat';
  font-size:14px;
}
.attribute-value{
  font-family:'montserrat';
  font-style:italic;
  font-weight:500;
  color:#6F9E76;
  font-size:14px;
}
.col-left{
    padding-right:50px;
}
.stay{
    width:200px;
}
.constant{
    width:113px;
}
.expandable{
    padding-left:65px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
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
.image-questioner{ /*style for questioner image*/
  width:45px;
  padding-top: 5px;
}
.page-body-header{
    margin-top:40px;
}
.page-body-header-title{
  font-family:'montserrat';
  font-weight:700;
  font-size:23px;
}
hr.line1{
    border:1px solid #DBDBDB;
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



</style>

<script type="text/javascript">
$(document).ready(function(){
	var maxLength = 30;
	$(".attribute-value").each(function(){
		var myStr = $(this).text();
		if($.trim(myStr).length > maxLength){
			var newStr = myStr.substring(0, maxLength);
			var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
			$(this).empty().html(newStr);
			$(this).append(' <a href="javascript:void(0);" class="read-more" style="font-size:13px;color:green;">..(expand)</a>');
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
    <div class="page-grid">

        <div class="card">

            <div class="header">
                <div class="row" style="margin-left:1px;">
                    <img src="{{URL::asset('/svg/crop.svg')}}" class="image-crop" alt="">
                    <p class="crop-name">Hibiscus</p>
                </div>
            </div>

            <div class="table-body">
                <div class="row">
                    <div class="col-left">
                        <div class="row" style="margin-bottom:5px;">
                            <div class="constant">
                            <p class="attribute-name">Scientific Name</p>
                            </div>
                            &nbsp;&nbsp;
                            <div class="stay">
                            <p class="attribute-value">Name of it</p>
                            </div>
                        </div><!--ends contem row -->
                        <div class="row" style="margin-bottom:5px;">
                            <div class="constant">
                            <p class="attribute-name">Scientific Name</p>
                            </div>
                            &nbsp;&nbsp;
                            <div class="stay">
                            <p class="attribute-value">Name of it</p>
                            </div>
                        </div><!--ends contem row -->
                        <div class="row" style="margin-bottom:5px;">
                            <div class="constant">
                            <p class="attribute-name">Scientific Name</p>
                            </div>
                            &nbsp;&nbsp;
                            <div class="stay">
                            <p class="attribute-value">Name of it</p>
                            </div>
                        </div><!--ends contem row -->
                        <div class="row" style="margin-bottom:5px;">
                            <div class="constant">
                            <p class="attribute-name">Scientific Name</p>
                            </div>
                            &nbsp;&nbsp;
                            <div class="stay">
                            <p class="attribute-value">Name of it</p>
                            </div>
                        </div><!--ends contem row -->
                        <div class="row" style="margin-bottom:5px;">
                            <div class="constant">
                            <p class="attribute-name">Scientific Name</p>
                            </div>
                            &nbsp;&nbsp;
                            <div class="stay">
                            <p class="attribute-value">Name of it</p>
                            </div>
                        </div><!--ends contem row -->
                    </div><!--ends col-left -->

                    <div class="col-right">
                        <div class="row" style="margin-bottom:5px;">
                            <div class="constant">
                            <p class="attribute-name">Scientific Name</p>
                            </div>
                            &nbsp;&nbsp;
                            <div class="stay">
                            <p class="attribute-value">Name of it</p>
                            </div>
                        </div><!--ends contem row -->
                        <div class="row" style="margin-bottom:5px;">
                            <div class="constant">
                            <p class="attribute-name">Scientific Name</p>
                            </div>
                            &nbsp;&nbsp;
                            <div class="stay">
                            <p class="attribute-value">Name of it</p>
                            </div>
                        </div><!--ends contem row -->
                        <div class="row" style="margin-bottom:5px;">
                            <div class="constant">
                            <p class="attribute-name">Scientific Name</p>
                            </div>
                            &nbsp;&nbsp;
                            <div class="stay">
                            <p class="attribute-value">Name of it</p>
                            </div>
                        </div><!--ends contem row -->
                        <div class="row" style="margin-bottom:5px;">
                            <div class="constant">
                            <p class="attribute-name">Scientific Name</p>
                            </div>
                            &nbsp;&nbsp;
                            <div class="stay">
                            <p class="attribute-value">Name of it</p>
                            </div>
                        </div><!--ends contem row -->
                        <div class="row" style="margin-bottom:5px;">
                            <div class="constant">
                            <p class="attribute-name">Scientific Name</p>
                            </div>
                            &nbsp;&nbsp;
                            <div class="stay">
                            <p class="attribute-value">Name of it</p>
                            </div>
                        </div><!--ends contem row -->
                    </div><!--ends col-right -->
                </div> <!--end outer row -->
            </div> <!--end table-body -->

            <input type="checkbox" class="checkbox" id="1"/>
                <div class="expandable">
                        <div class="row">
                            <div class="col-left">
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="constant">
                                    <p class="attribute-name">Scientific Name</p>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="stay">
                                    <p class="attribute-value">Name of it</p>
                                    </div>
                                </div><!--ends contem row -->
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="constant">
                                    <p class="attribute-name">Scientific Name</p>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="stay">
                                    <p class="attribute-value">Name of it</p>
                                    </div>
                                </div><!--ends contem row -->
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="constant">
                                    <p class="attribute-name">Scientific Name</p>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="stay">
                                    <p class="attribute-value">Name of it</p>
                                    </div>
                                </div><!--ends contem row -->
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="constant">
                                    <p class="attribute-name">Scientific Name</p>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="stay">
                                    <p class="attribute-value">Name of it</p>
                                    </div>
                                </div><!--ends contem row -->
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="constant">
                                    <p class="attribute-name">Scientific Name</p>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="stay">
                                    <p class="attribute-value">Name of it</p>
                                    </div>
                                </div><!--ends contem row -->
                            </div><!--ends col-left -->

                            <div class="col-right">
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="constant">
                                    <p class="attribute-name">Scientific Name</p>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="stay">
                                    <p class="attribute-value">Name of it</p>
                                    </div>
                                </div><!--ends contem row -->
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="constant">
                                    <p class="attribute-name">Scientific Name</p>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="stay">
                                    <p class="attribute-value">Name of it</p>
                                    </div>
                                </div><!--ends contem row -->
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="constant">
                                    <p class="attribute-name">Scientific Name</p>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="stay">
                                    <p class="attribute-value">Name of it</p>
                                    </div>
                                </div><!--ends contem row -->
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="constant">
                                    <p class="attribute-name">Scientific Name</p>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="stay">
                                    <p class="attribute-value">Name of it</p>
                                    </div>
                                </div><!--ends contem row -->
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="constant">
                                    <p class="attribute-name">Scientific Name</p>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="stay">
                                    <p class="attribute-value">Name of it</p>
                                    </div>
                                </div><!--ends contem row -->
                            </div><!--ends col-right -->
                        </div> <!--end outer row -->
                </div><!--end expandable -->
                <label for="1" class="expand-link" style="width:90px;font-family:'noto serif';font-size:14px;margin-left:auto;color:blue;"></label>

        </div>  <!--ends class name = card crop table  -->

        <div class="page-body">
            <div class="page-body-header">
                <div class="row">
                    <div>
                        <p class="page-body-header-title">Posts Related to Crop</p>
                    </div>

                    <div class="toggler" style="margin-left:300px;">
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
                            <hr class="line1"> <!--horizontal line -->
            </div><!-- end page body header -->

                <div class="cards-column">
                    <div class="card" style="border-width:2px;border-radius:10px;border-color: #DBDBDB;margin-bottom:15px;"> <!--thread starts -->
                        <div class="card-body">
                        <a href="#" style="color: black; text-decoration: none;"><h9>Hibiscus</h9></a>
                        <a href="#" style="color: black;"><h5 class="card-title" style="font-family:'poppins';padding-top:3px;">smthg</h5></a>

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

                </div> <!--ends cards column -->
        </div> <!--ends page body -->

    </div> <!--ends page-grid -->
</div> <!--ends content wrapper -->

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

        <?php /*while (key($cropsdata) != NULL){ ?>
        <tr style="border: 2px solid black">
            <td style="border: 2px solid black">
                <a href="">{{trim(key($cropsdata))}}</a>
            </td>

            <td style="border: 2px solid black">
                <a href="">

                    <?php
                    if (is_NULL($cropsdata[key($cropsdata)]))
                        echo "NULL";
                    else
                        echo trim($cropsdata[key($cropsdata)]);
                    ?>

                </a>
            </td>

            <?php next($cropsdata); } */?>
@endsection


