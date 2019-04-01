<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,300,700,700i,800,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,500,500i,300,700,700i,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,500,500i,300,700,700i,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,300,700,700i,800,900" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.navbar {
    -webkit-box-shadow: 0 8px 6px -6px #DBDBDB;
    -moz-box-shadow: 0 8px 6px -6px #DBDBDB;
    box-shadow: 0 8px 6px -6px #DBDBDB;
}
::-webkit-input-placeholder {
  font-family:'montserrat';
  font-size: 14px;
}
::-moz-placeholder {
  font-family:'montserrat';
  font-size: 14px;
}
:-ms-input-placeholder {
  font-family:'montserrat';
  font-size: 14px;
}
::placeholder {
  font-family:'montserrat';
  font-size: 14px;
}
.container{
  padding-left:70px;
  padding-right:70px;
}
.navbar-brand{

  font-family:'poppins';
  font-size:23px;
  font-weight:700;
}
.image-navbar{
  width:80px;
  height:40px;
}
.navbar-item{
  padding-left:10px;
}
.btn{
  padding-left:7px;
  padding-right:7px;
  padding-top:4px;
  padding-bottom:4px;
}
.button-div{
  padding-top:4px;
}
@media(max-width:375px){

.nav-link a{
  padding-left:2px;
}

  ::-webkit-input-placeholder {
  font-size: 10px;
}
.container{
  padding-left:4px;
  padding-right:4px;
}
.navbar-brand{
  font-family:'montserrat';
  font-size:15px;
  font-weight:700;
  margin-left:10px;
  margin-right:0px;
  }

  .navbar-item{
  padding-left:4px;
}

.image-navbar{
  width:50px;
  height:30px;
}
.form-inline input {
   width: 100px;
   height: 25px;
   margin-left:10px;
   padding:4px;
   padding-bottom:9px;
 }
}/*end width 425 condition*/

@media only screen and  (max-width: 320px){

.nav-link a{
  padding-left:2px;
}

  ::-webkit-input-placeholder {
  font-size: 10px;
}
.container{
  padding-left:4px;
  padding-right:4px;
}
.navbar-brand{
  font-family:'montserrat';
  font-size:15px;
  font-weight:700;
  margin-left:10px;
  margin-right:0px;
  }

  .navbar-item{
  padding-left:4px;
}

.image-navbar{
  width:50px;
  height:30px;
}
.form-inline input {
   width: 50px;
   height: 25px;
   margin-left:10px;
   padding:4px;
   padding-bottom:9px;
 }
}/*end width 425 condition*/

@media only screen and  (max-width: 425px) and  (min-width: 376px){
.navbar nav{
  width:100%;
}

.nav-link a{
  padding-left:2px;
}

  ::-webkit-input-placeholder {
  font-size: 11px;
}
.container{
  padding-left:4px;
  padding-right:4px;
}
.navbar-brand{
  font-family:'montserrat';
  font-size:15px;
  font-weight:700;
  margin-left:10px;
  margin-right:0px;
  }

  .navbar-item{
  padding-left:5px;
}

.image-navbar{
  width:60px;
  height:30px;
}
.form-inline input {
   width: 100px;
   height: 25px;
   margin-left:10px;
   padding:4px;
   padding-bottom:9px;
 }
}/*end width 425 condition*/


@media only screen and  (max-width: 768px) and  (min-width: 426px){

  .navbar-item{
  padding-left:3px;
}


}  /*end width 767 condition*/

</style>
</head>
<body>
<nav class="navbar navbar-expand navbar-light" style="background-color: #ffffff;padding-left:0px;padding-right:0px;">
  <div class="container" >
    <a class="navbar-brand" id="navbar-brand" style="color:#6F9E76;" href="/index">CFFforum</a>

    <div class="navbar-collapse collapse" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <!--<a class="nav-link" style="font-family:7 - 1'montserrat';font-size:18px;" href="#">Home <span class="sr-only">(current)</span></a>-->
          <a class="navbar-item" href="/index">
            <img src="{{URL::asset('/svg/Symbol 7 – 1-edited.svg')}}" class="image-navbar" alt="">
          </a>
        </li>
        <li class="nav-item">
           <!--<a class="nav-link" style="font-family:6 - 1'montserrat';font-size:18px;" href="#">Link</a>-->
           <a class="navbar-item" href="/crop">
            <img src="{{URL::asset('/svg/Symbol 4 – 1-edited.svg')}}" class="image-navbar" alt="">
          </a>
        </li>

      </ul>
      <div class="col-0 col-sm-2 col-xl-4">

      </div>
      <form class="form-inline" action="/search" method="post" role="search">
        {{ csrf_field() }}
         <input class="form-control" type="text" placeholder="Search CFFforum" name="text" style="border-radius:10px;" autocomplete="off">
         <input type="submit"
         style="position: absolute; left: -9999px; width: 1px; height: 1px;"
         tabindex="-1" />
        </form>
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <!--<a class="nav-link dropdown-toggle" style="font-family:'montserrat';font-size:15px;" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>-->
          <a class="nav-link1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
            <img src="{{URL::asset('/svg/IMG-20180410-WA0015.svg')}}" class="image-navbar" alt="">
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown07" style="right:-45%;top:115%;">
            <a class="dropdown-item"href="/profile" >Profile Name</a>
            <a class="dropdown-item" href="#">Edit Profile Link</a>
            <a class="dropdown-item" href="/logout"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
            </a>
            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </li>
        <li class="nav-item">
          <div class="button-div">
          <a href="/index/create" class="btn" style="color:#ffffff;background-color:#6F9E76; border-radius:10px;margin:auto;">Ask a Question</a>
          </div>
        </li>
        </ul>
    </div> <!--end container class-->
  </div><!--end navbar class-->
</nav>
</body>

