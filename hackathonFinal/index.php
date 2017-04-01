<!DOCTYPE HTML>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x18">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="css/index.css" rel="stylesheet" type="text/css"/>
  <link href="css/home.css" rel="stylesheet" type="text/css"/>
  <!-- <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- Material design -->
  <link href="css/material/bootstrap-material-design.css" rel="stylesheet">
  <link href="css/material/ripples.min.css" rel="stylesheet">
  <script src="js/material/material.min.js"></script>
  <script src="js/material/ripples.min.js"></script>


  <script>
  $(document).ready(function(){
    $.material.init();
    $("select").dropdown();
  });

  function showDetails(a)
  {
    b=a.id+"Details";
    if(document.getElementById(b).style.display=="none")
    {
      document.getElementById(b).style.display="block";
     }
    else
    document.getElementById(b).style.display="none";
  }
  </script>
</head>
<body>
  <div class="navbar navbar-default" style="margin-bottom:0px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-default-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="javascript:void(0)">SECURE BHARAT</a>
      </div>
      <div class="navbar-collapse collapse navbar-default-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="javascript:void(0)">HOME</a></li>
          <li><a href="javascript:void(0)">TREASURE HUNT</a></li>
          <li><a href="<?php echo 'ScavengerHunt/scavenger_hunt.html'; ?>">SCAVENGER HUNT</a></li>
          <li><a href="javascript:void(0)">AWARENESS QUIZ</a></li>
          <li><a href="javascript:void(0)">Q&A FORUM</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.html">LOGIN</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container-fluid parallax">
    <div class="row" id="upperDiv" >

      <div class="col-md-6 col-md-offset-3">
      <h2>Secure Bharat</h2>

        <p >Web application which will provide a virtual environment to learn areas of Cyber Security,
          such as web vulnerability assessment, social engineering, digital forensics, cryptographic
          analysis, and penetration testing.</p>
          <div style="text-align:center;">
          <a href="getstarted.html" class="btn btn-raised btn-default"  role="button" >Explore</a>
        </div>
      </div>
      </div>
    </div>

    <div class="container">
      <div class="row" style="margin-bottom:100px;">
        <h2 align="center" style="padding:30px;font-family:'Josefin Slab',sans-serif;color:black">Our Playgrounds</h2>
        <div class="col-md-4 col-sm-6 col-xs-12 ">
          <div class="well well-lg" style="color:black;font-family:'Josefin Slab',sans-serif;" >
            <h3 style="color:black;font-family:'Josefin Slab',sans-serif;">TREASURE HUNT</h3>
            <img src="images/image1.jpg" style="width:100%;min-height:150px;"/>
            <a  class="btn btn-raised btn-danger">Play</a>
            <a onclick="showDetails(this)" class="btn btn-raised btn-danger" id="treasureHunt">About</a>
            <div  style="display:none;font-size:18px;" id="treasureHuntDetails">
              <p>Treasure hunt will consists of 100 plus challenges . Each challenge will provide an infosec scenario,
                a set of objectives and links to various digital assets that users use to solve each challenges.
                Each challenge of treasure hunt is a combined package which comes with a detailed solution that
                outlines which tools to use and how to apply the tools to solve the challenges.
                The challenges will keep them engaged, entertained and enlightened.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 ">
            <div class="well well-lg" style="color:black;">
              <h3 style="color:black;font-family:'Josefin Slab',sans-serif;">SCAVENGER HUNT</h3>
              <img src="images/image2.jpg" style="width:100%;min-height:150px;"/>
              <a  class="btn btn-raised btn-danger">Play</a>
              <a onclick="showDetails(this)" class="btn btn-raised btn-danger" id="scavengerHunt">About</a>
              <div  style="display:none;font-size:18px;" id="scavengerHuntDetails">
                <p>The Scavenger Hunt allows user to learn about different websites, resources and tools like metasploit,
                  nmap, nessus and wireshark, etc. We will provide tutorials in the form of videos and website links.
                  Each tutorial will have a  set  of questions related to these resources  which will test their knowledge.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 ">
              <div class="well well-lg" style="color:black;">
                <h3 style="color:black;font-family:'Josefin Slab',sans-serif;">AWARENESS QUIZ</h3>
                <img src="images/image3.jpg" style="width:100%;min-height:150px;"/>
                <a  class="btn btn-raised btn-danger">Play</a>
                <a onclick="showDetails(this)" class="btn btn-raised btn-danger" id="awarenessQuiz">About</a>
                <div  style="display:none;font-size:18px;" id="awarenessQuizDetails">
                  <p>The Awareness Quiz asks fifteen randomized questions for a user to solve in 5 minute.
                    They help user to learn how secure they really are.
                    Afterwards, they get a score, the correct answers, and a chance to retry with different questions.</p>
                  </div>
                </div>
              </div>

              </div>
            </div>

             <div class="container-fluid" >
              <div class="row" style="background-color:#453f74;padding:20px;">
            <div class="col-md-6" style="color:white;font-family:'Josefin Slab',sans-serif;">

                <h3 style="color:white;font-family:'Josefin Slab',sans-serif;text-align:center;">Q&A FORUM</h3>

                <p style="font-size:20px;">The Question and Answer forum where users can put questions anonymously.
                  Questions are answered by our security team and subject matter experts.</p>
                <a  class="btn btn-raised btn-danger">Write Us</a>
              </div>
              <div class="col-md-6">


              </div>
            </div>
          </div>


            <!-- Footer -->
            <div class="container-fluid " style="background-color:black;">
            <div id="footer" data-role:"footer" >
           <div class="col-md-12">
             <h4 style="color:white;text-align:center;">All copyright reserved by Hindustan Squad</h4>
           </div>

            </div>
          </div>
          </body>