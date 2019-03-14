<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,300,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.navbar {
    -webkit-box-shadow: 0 8px 6px -6px #DBDBDB;
    -moz-box-shadow: 0 8px 6px -6px #DBDBDB;
    box-shadow: 0 8px 6px -6px #DBDBDB;
}

.container{
  padding-left:70px;
  padding-right:70px;
}
.navbar-brand{
  
  font-family:'montserrat';
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

@media only screen and (max-width: 320px){

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

@media only screen and (max-width: 425px) and (min-width: 376px){
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


@media only screen and (max-width: 768px) and (min-width: 426px){

  .navbar-item{
  padding-left:3px;
}
 
}  /*end width 767 condition*/

</style>
</head>
<body>
<nav class="navbar navbar-expand navbar-light" style="background-color: #ffffff;padding-left:0px;padding-right:0px;">
  <div class="container" >
    <a class="navbar-brand" id="navbar-brand" style="color:#6F9E76;" href="#">CFFforum</a>

    <div class="navbar-collapse collapse" >
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <!--<a class="nav-link" style="font-family:'montserrat';font-size:18px;" href="#">Home <span class="sr-only">(current)</span></a>-->
          <a class="navbar-item" href="#">
            <img src="{{URL::asset('/img/Symbol 3 – 1.svg')}}" class="image-navbar" alt="">
          </a>
        </li>
        <li class="nav-item">
           <!--<a class="nav-link" style="font-family:'montserrat';font-size:18px;" href="#">Link</a>-->
           <a class="navbar-item" href="#">
            <img src="{{URL::asset('/img/Symbol 4 – 1.svg')}}" class="image-navbar" alt="">
          </a>
        </li>
        
      </ul>
      <form class="form-inline">
        <input class="form-control" type="text" placeholder="Search CFFforum" aria-label="Search" >
      </form>
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <!--<a class="nav-link dropdown-toggle" style="font-family:'montserrat';font-size:15px;" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>-->
          <a class="nav-link1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
            <img src="{{URL::asset('/svg/IMG-20180410-WA0015.svg')}}" class="image-navbar" alt="">
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown07" style="right:25%;top:115%;">
            <h5 class="dropdown-header">Profile Name</h5>
            <a class="dropdown-item" href="#">Edit Profile Link</a>
            <a class="dropdown-item" href="#">Logout Link</a>
          </div>
        </li>
        </ul>
    </div> <!--end container class-->
  </div><!--end navbar class-->
</nav>
</body>

