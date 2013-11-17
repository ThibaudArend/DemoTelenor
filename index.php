<!DOCTYPE html>

<html lang ="en">

<head>

  <meta charset="utf-8">
  <title>Ma premiere page html</Title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="https://d396qusza40orc.cloudfront.net/startup%2fcode%2fbootstrap-2.3.2.css">
  <link rel="stylesheet" href="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fbootstrap-combined.no-icons.min.css">
  <link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <style type="text/css">
 /* Large desktop */
      @media (min-width: 980px) { 
        body {
         padding-top: 60px;
        }
       .linediv-l {
         border-right: 1px white solid;
        }
       .linediv-r {
         border-left: 1px white solid;
       }
      }

      /* Landscape phones and down */
      @media (max-width: 480px) { 
       .copy {
         padding: 2.5% 10%;
       }
       .linediv-l {
         border-bottom: 1px white solid;
       }
       .linediv-r {
         border-top: 1px white solid;
       }
      }


    body {
    font-family: 'Nosifer', cursive;
        padding-bottom: 40px;
      }
      .container {
        width: 960px;
      }
      p.lead {
        padding-top: 15px;
      }
      .navigation, .pitch, .section1, .section2, .faq, .footer {
        padding: 10px 0px 10px 0px;
      }
      .video, .thermometer, .order, .social {
        border: 1px dotted;
        text-align: center;
      }
      .video {
        /* Internal borders have 1px width, thus need to add 4 x 1px to 120px. */
        height: 124px;
        line-height: 124px;
      }
      .thermometer, .order, .social {
        /* line-height to vertically center: http://phrogz.net/css/vertical-align/index.html */
        height: 40px;
        line-height: 40px;
      }
      div.row {
        border: 1px solid;
      }


  </style>

</head>


<body>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="http://google.com">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>      </div>
    </div>




   
<i class="fa fa-camera-retro"></i> fa-camera-retro

<div class="input-group margin-bottom-sm">
  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
  <input class="form-control" type="text" placeholder="Email address">
</div>
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control" type="password" placeholder="Password">
</div>

<div>
<input class="form-control" type="text" placeholder="Email address">
</div>



<div class="control-group">
  <label class="control-label" for="inputIcon">Email address</label>
  <div class="controls">
    <div class="input-prepend">
      <span class="add-on"><i class="fa fa-envelope-o fa-fw"></i></span>
      <input class="span2" id="inputIcon" type="text">
    </div>
  </div>
</div>

      <div class="row heading">
        <div class="span12">
          <h1>Bitstarter Title</h1>
        </div>
      </div> 
     <div class="row subheading">
        <div class="span12">
          <p class="lead">This is my first bitstarter project.</p>
        </div>
      </div>
      <div class="row pitch">
        <div class="span6 video">
          Video
        </div>
        <div class="span6">
          <div class="thermometer">
            Thermometer
          </div>
          <div class="order">
            Order
          </div>
          <div class="social">
            Social
          </div>
        </div>
      </div>
      <div class="row section1">
        <div class="span12">
          Marketing Section 1
        </div>
      </div>
      <div class="row section2">
        <div class="span12">
          Marketing Section 2
        </div>
      </div>
      <div class="row faq">
        <div class="span12">
          FAQ
        </div>
      </div>
      <div class="row footer">
        <div class="span12">
          Footer
        </div>
      </div>
    </div>

<!-- START IADVIZE LIVECHAT -->
<script type='text/javascript'>
(function() {
var idz = document.createElement('script'); idz.type = 'text/javascript'; idz.async = true;
idz.src = document.location.protocol + "//lc.iadvize.com/iadvize.js?sid=12761";
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(idz, s);
})();
</script>
<!-- END IADVIZE LIVECHAT -->

</body> 
   
