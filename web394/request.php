<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="de">

<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
    <script>$(window).on("scroll", function() {
        var s = 400 - Math.min(200, $(document).scrollTop());
        $(".scrollresize").width(s/10+"vw").height("auto"); });
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio394</title>
    <link rel="stylesheet" href="./style/grid.css">
    <link rel="short icon" type="image/jpg" href="img/logo_web.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>

<body>
      <!--alert messages start-->
      <?php echo $alert; ?>
      <!--alert messages end-->

    <header>
        <nav class="language"> <a href="index_en.html">EN</a>
        </nav>
        <img class="scrollresize" style="width:30vw; height:auto; max-width: 500px;"  "src="./img/394logo.png alt="394 - Logo" srcset="./img/394logoklein.png 438w, ./img/394logomittel.png 875w, ./img/394logogross.png 1749w">
    </header>

    <aside>
        <p class="text_aside">394 Tattoostudio &#0149; Eisenbahnstraße 109 &#0149; 04315 Leipzig</p>
    </aside>

<main>
    <!--
   <div class="frame" id="request_style">
        <img id="tribal" class="tribal_r_ext" src="img/394tribal_1.png">
        <img id="tribal" class="tribal_l_ext" src="img/394tribal_1_d.png">

       <h3>and this is how it works:</h3>
       <h1>• just answer our 4-page questionnaire,</h1>
        <h1>in which we can get an idea of what you like.</h1>
       <h1> &nbsp;</h1>

       <h1>• Your request will then be passed on to a</h1>
        <h1>tattoo artist who will contact you</h1>
       <h1>within a few days.</h1>

       <h1> &nbsp;</h1>

       <h1>Many thanks in advance!</h1>

        <div class="row">

        </div>

        <div class="button_next">
            <p >
            <a href="#request_style">NEXT</a>
            </p>
        </div>

    </div>

-->

    <div class="frame" id="request_style">
        <img id="tribal" class="tribal_r_ext" src="img/394tribal_1.png">
        <img id="tribal" class="tribal_l_ext" src="img/394tribal_1_d.png">
        <form class="contact" action="" method="post">
            <se class="row">
                  <div class="column"><input type="image" src='img/style_fineline.jpg' name="Fine_line" alt="Fine_line_Style" width="100%"></div>
                  <div class="column"><input type="image" src='img/style_duno.png' name="Not_sure_about" alt="Not_sure_about" width="100%"></div>
                  <div class="column"><input type="image" src='img/style_duno.png' name="Not_sure_about" alt="Not_sure_about" width="100%"></div>
                  <div class="column"><input type="image" src='img/style_duno.png' name="Not_sure_about" alt="Not_sure_about" width="100%"></div>
                  <div class="column"><input type="image" src='img/style_color.jpg' name="Color_Style" alt="Color_Style" width="100%"></div>
                  <div class="column"><input type="image" src='img/style_lackwork.jpg' name="Lackwork_Style" alt="Lackwork_Style" width="100%"></div>
                  <div class="column_ghost"><img src='img/style_empty.png' width="100%"></div>
                  <div class="column"><input type="image" src='img/style_duno.png' name="Not_sure_about" alt="dunno" width="100%"></div>
            </div>
        </from>

<!-- VERSION COPIADA QUE NO ANDA

        <form class="contact" action="" method="post">
            <sellet multiple="multiple" name="Tatoo_Style" id="Tatoo_Style" class="row">
                  <div class="column"><option value="Fine_line" type="image" src='img/style_fineline.jpg' name="Fine_line" alt="Fine_line_Style" width="100%"></option></div>
                  <div class="column"><option value="Not_sure_about" type="image" src='img/style_duno.png' name="Not_sure_about" alt="Not_sure_about" width="100%"></option></div>
                  <div class="column"><option value="Not_sure_about" type="image" src='img/style_duno.png' name="Not_sure_about" alt="Not_sure_about" width="100%"></option></div>
                  <div class="column"><option value="Not_sure_about" type="image" src='img/style_duno.png' name="Not_sure_about" alt="Not_sure_about" width="100%"></option></div>
                  <div class="column"><option value="Lackwork_Style" type="image" src='img/style_color.jpg' name="Color_Style" alt="Color_Style" width="100%"></option></div>
                  <div class="column"><option value="Color_Style" type="image" src='img/style_lackwork.jpg' name="Lackwork_Style" alt="Lackwork_Style" width="100%"></option></div>
                  <div class="column_ghost"><img src='img/style_empty.png' width="100%"></div>
                  <div class="column"><option value="Fine_line" type="image" src='img/style_duno.png' name="Not_sure_about" alt="dunno" width="100%"></option></div>
            </div>
        </from>

-->
        <h1> &nbsp;</h1>

        <div class="button_next">
                <p >
                  <a href="#request_style">BACK</a>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="#request_body_part">NEXT</a>
                </p>
        </div>


    </div>

    <br></br>
    <br></br>
    <br></br>

<!--
    <div class="frame" id="request_date">
        <img id="tribal" class="tribal_r_ext" src="img/394tribal_1.png">
        <img id="tribal" class="tribal_l_ext" src="img/394tribal_1_d.png">


            <form method="post" enctype="text/plain" name="form" action="">

            <h2>Month &nbsp;<input class="month" for="month" type="month" name="month" min="2021-01" required></h2>

            <h2>Week &nbsp;&nbsp;<input class="week" for="week" type="week" name="week" id="camp-week" min="2021-W01" required></h2>

            <h2>Daytime (4 to 10 characters): <input type="text" id="name" name="name" required minlength="4" maxlength="8" size="10"></h2>

            </form>


              <div class="button_next">
                <p >
                <a href="#request_style">BACK</a>

                <a href="#request_body_part">NEXT</a>
                </p>
            </div>

    </div>

    <br></br>
    <br></br>
    <br></br>
  -->

    <!--contact section start-->
    <div class="frame" id="request_personal_data">
        <img id="tribal" class="tribal_r_ext" src="img/394tribal_1.png">
        <img id="tribal" class="tribal_l_ext" src="img/394tribal_1_d.png">

        <h1 class="form-title">Your Contact</h1>

        <div class="contact-form">
          <form class="contact" action="" method="post">
            <input type="text" name="name" class="text-box" placeholder="Your Name" required>
            <input type="email" name="email" class="text-box" placeholder="Your Email" required>
            <textarea name="message" class="text-box" rows="5" placeholder="Your Message" required></textarea>
            <input type="submit" name="submit" class="send-btn" value="Send">
          </form>
      </div>

    </div>

</main>


  <!--contact section end-->

  <script type="text/javascript">
  if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
  }
  </script>

<!-- BOTTOM INFORMATION -->

 <footer>
    <p><a href="https://goo.gl/maps/VBhC5tKYx6xMFTJS6" target="_blank">Karte</a></p>
    <p>Eisenbahnstraße 109 04315 Leipzig<br>T: 0341 / 24 88 38 76</p>

    <p style="vertical-align:middle;margin-top:2em;">
            <a class="SoMeIc" href="https://www.facebook.com/dreineunvier"  target="_blank">
                <img style="height:2.5em;"src="./img/f_logo_RGB-White_58.png" alt="facebook"></a>

            <a class="SoMeIc" href="https://www.instagram.com/studio_394" target="_blank">
                <img style="height:2.5em;"src="./img/glyph-logo_May2016white.png" alt="Instagram">
            </a>

    </p>

    <img class="scrollresize" style="width:40vw;height:auto;" src="./img/394logo.png" alt="394 - Logo" srcset="./img/394logoklein.png 438w, ./img/394logomittel.png 875w, ./img/394logogross.png 1749w">

  </footer>


</body>
</html>
