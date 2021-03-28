
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
    <title>Gestion d'une file d'attente</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  
    <!--style-->
  <style>
      body{
    margin: 0;
    padding: 0;
    font-family: "Roboto", sans-serif;
  }
  
  header{
    z-index: 1;
    position: fixed;
    background: #4682B4;
    padding: 20px;
    width: calc(100% - 0%);
    top: 0;
    height: 30px;
  }
  
  .left_area h3{
    color: #000000;
    margin: 0;
    text-transform: uppercase;
    font-size: 22px;
    font-weight: 900;
    margin-left:50px;
    margin-top:-10px
  }
  
  .left_area span{
    color: #19B3D3;
  }
  
  .logout_btn{
    padding: 5px;
    background: #19B3D3;
    text-decoration: none;
    float: right;
    margin-top: -30px;
    margin-right: 5px;
    border-radius: 2px;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    transition: 0.5s;
    transition-property: background;
  }
  
  .logout_btn:hover{
    background: #0B87A6;
  }
  .Agenda_btn{
    padding: 25px;
    background: #19B3D3;
    text-decoration: none;
    float: right;
    margin-top: 0px;
    margin-right: -80px;
    border-radius: 4px;
    font-size: 20px;
    font-weight: 900;
    color: #fff;
    transition: 0.5s;
    transition-property: background;
  }

  .Patients_btn{
    padding: 25px;
    background: #2E8B57;
    text-decoration: none;
    float: right;
    margin-top: 0px;
    margin-right: -20px;
    border-radius: 4px;
    font-size: 20px;
    font-weight: 900;
    color: #fff;
    transition: 0.5s;
    transition-property: background;
  }
  .Consultation_btn{
    padding: 25px;
    background: #C71585;
    text-decoration: none;
    float: right;
    margin-top: 0px;
    margin-right: -20px;
    border-radius: 4px;
    font-size: 20px;
    font-weight: 900;
    color: #fff;
    transition: 0.5s;
    transition-property: background;
  }
  
  .sidebar{
    z-index: 1;
    top: 0;
    background: #2f323a;
    margin-top: 70px;
    padding-top: 30px;
    position: fixed;
    left: 0;
    width: 250px;
    height: calc(100% - 9%);
    transition: 0.5s;
    transition-property: left;
    overflow-y: auto;
  }
  
  .profile_info{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  
  .sidebar .profile_info .profile_image{
    width: 100px;
    height: 100px;
    border-radius: 100px;
    margin-bottom: 10px;
  }
  
  .sidebar .profile_info h4{
    color: #ccc;
    margin-top: 0;
    margin-bottom: 20px;
  }
  
  .sidebar a{
    color: #fff;
    display: block;
    width: 100%;
    line-height: 60px;
    text-decoration: none;
    padding-left: 40px;
    box-sizing: border-box;
    transition: 0.5s;
    transition-property: background;
  }
  
  .sidebar a:hover{
    background: #19B3D3;
  }
  
  .sidebar i{
    padding-right: 10px;
  }
  
  label #sidebar_btn{
    z-index: 1;
    color: #000000;
    position: fixed;
    cursor: pointer;
    left: 300px;
    font-size: 20px;
    margin: 5px 0;
    margin-left:-270px;
    transition: 0.5s;
    transition-property: color;
  }
  
  label #sidebar_btn:hover{
    color: #19B3D3;
  }
  
  #check:checked ~ .sidebar{
    left: -185px;
  }
  
  #check:checked ~ .sidebar a span{
    display: none;
  }
  
  #check:checked ~ .sidebar a{
    font-size: 20px;
    margin-left: 165px;
    width: 100%;
  }
  
  .content{
    width: (100% - 250px);
    margin-top: 60px;
    padding: 20px;
    margin-left: 250px;
    background: url(background.png) no-repeat;
    background-position: center;
    background-size: cover;
    height: auto;
    transition: 0.5s;
  }
  
  #check:checked ~ .content{
    margin-left: 60px;
  }
  
  #check:checked ~ .sidebar .profile_info{
    display: none;
  }
  
  #check{
    display: none;
  }
  
  .mobile_nav{
    display: none;
  }
  
  .content .card {
    background: #fff;
    padding: 15px;
    margin-top: 30px;
    font-size: 14px;
    opacity: 0.8;
  }

  .content .img {
    width:(100%-350px);
    height:auto;
    float:center;
  }
  
  /* Responsive CSS */
  
  @media screen and (max-width: 780px){
    .sidebar{
      display: none;
    }
  
    #sidebar_btn{
      display: none;
    }
  
    .content{
      margin-left: 0;
      margin-top: 0;
      padding: 10px 20px;
      transition: 0s;
    /*color: #fff;
    background-color: #0b3094ea;
    border-left: 2px solid #fff;
    border-radius: 4px;*/
    }

    /*boostrap*/

    .container {
      padding: 80px 120px;
      margin:center;
      width:(100%-250px);
    }
    .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */
      width: 100%; /* Set width to 100% */
      margin: center;
    }

    .carousel-caption h3 {
      color: #fff !important;
    }

    @media (max-width: 600px) {
      .carousel-caption {
        
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
      }
    }
      
      
    #check:checked ~ .content{
      margin-left: 0;
    }
  
    .mobile_nav{
      display: block;
      width: calc(100% - 0%);
    }
  
    .nav_bar{
      background: #222;
      width: (100% - 0px);
      margin-top: 70px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
    }
  
    .nav_bar .mobile_profile_image{
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }
  
    .nav_bar .nav_btn{
      color: #fff;
      font-size: 22px;
      cursor: pointer;
      transition: 0.5s;
      transition-property: color;
    }
  
    .nav_bar .nav_btn:hover{
      color: #19B3D3;
    }
  
    .mobile_nav_items{
      background: #2F323A;
      display: none;
    }
  
    .mobile_nav_items a{
      color: #fff;
      display: block;
      text-align: center;
      letter-spacing: 1px;
      line-height: 60px;
      text-decoration: none;
      box-sizing: border-box;
      transition: 0.5s;
      transition-property: background;
    }
  
    .mobile_nav_items a:hover{
      background: #19B3D3;
    }
  
    .mobile_nav_items i{
      padding-right: 10px;
    }
  
    .active{
      display: block;
    }
  }
        
  </style>    
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Hopitale <span>Moderne</span></h3>
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
      <img src="images/logodesign.png" class="profile_image" alt="logodesign">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-home"></i><span>Accueil</span></a>
        <a href="#"><i class="fas fa-calendar-alt"></i><span>Agenda</span></a>
        <a href="#"><i class="fas fa-user"></i><span>Patients</span></a>
        <a href="#"><i class="fas fa-paste"></i><span>ConsuRE/ltation</span></a>
        <a href="#"><i class="fas fa-ban"></i><span>A propos</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="images/logodesign.png" class="profile_image" alt="">
        <h4>PRO-DISTRICT</h4>
      </div>
      <a href="#"><i class="fas fa-home"></i><span>Accueil</span></a>
      <a href="#"><i class="fas fa-calendar-alt"></i><span>Agenda</span></a>
      <a href="#"><i class="fas fa-user"></i><span>Patients</span></a>
      <a href="#"><i class="fas fa-paste"></i><span>Consultation</span></a>
      <a href="#"><i class="fas fa-ban"></i><span>A propos</span></a>
    </div>
    <!--sidebar end-->
<div class="content">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/system.jpg" alt="system">
      <div class="carousel-caption">
        <h3>proverbe</h3>
        <p> « En Afrique quand un vieillard meurt, c’est une bibliothèque qui brûle » Amadou Hampaté Bâ</p>
      </div>
    </div>

    <div class="item">
      <img src="images/gestion.jpg" alt="gestion">
      <div class="carousel-caption">
        <h3>proverbe</h3>
        <p> « Qui vaincra par l’épée, périra par l’épée » Jésus de Nazareth</p>
      </div>
    </div>

    <div class="item">
      <img src="images/tech.jpg" alt="tech">
      <div class="carousel-caption">
        <h3>proverbe</h3>
        <p>« L’homme absurde est celui qui ne change jamais » Georges </p>
      </div>
    </div>

    <div class="item">
      <img src="images/call.jpg" alt="call">
      <div class="carousel-caption">
        <h3>proverbe</h3>
        <p>« La haine, c’est la colère des faibles » Alphonse Daudet</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

   
    <div class="row">
    <div class="col-sm-4">
        <div class="card">
        <a href="#" class="Agenda_btn">Agenda</a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
        <a href="#" class="Patients_btn">Patients</a>
        </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
      <a href="#" class="Consultation_btn">Consultation</a>
      </div>
    </div>
  </div>
</div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
      