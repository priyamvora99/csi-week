<?php
   if(isset($_GET["string"])){
     $string=$_GET["string"];

   }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="js/qrcode.js"></script>
    <link rel="stylesheet" href="css/csiweek.css"></link>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.8.0/firebase.js"></script>
    <script>
          var string='<?php echo $string; ?>';
          var temp=string.split("/");
          var userId=temp[temp.length-1];
          console.log(userId);
          var config = {
            apiKey: "AIzaSyAK4u-fDv6geisMAyAkWhELnKcPRbx6XXc",
            authDomain: "djcsi-3e43d.firebaseapp.com",
            databaseURL: "https://djcsi-3e43d.firebaseio.com",
            projectId: "djcsi-3e43d",
            storageBucket: "djcsi-3e43d.appspot.com",
            messagingSenderId: "464789121303"
          };
          firebase.initializeApp(config);
          function showInfoModal(){

          }
    </script>

<script type="text/javascript" src="js/csiweek.js"></script>

  </head>
  <body>
    <div class="container" style="margin-top:50%;">
      <div class="row">
        <div class="col-12">
          <div class="containerDiv" id="showQr">
            <div id="output">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="containerDiv">
            <div class="row">
              <div class="col-12">
                <img src="image1.png" class="hide" alt="You are registered successfully" width="500" height="500">
              </div>
            </div>
            <br/>
            <div class="row">
              <div class="col-12">
                <span class="hide" style="">Congratualtions!You are registered for the workshop(s)!</span>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <a href="djcsi://close_window" class="buttonClass hide">Go Back</a>
                <button type="button" class="buttonClass1" name="button" id="changeMe">Refresh status</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
    var string = '<?php echo $string; ?>';
    var qrcode = new QRCode(document.getElementById("output"), {
      text: string,
      width: 500,
      height: 500,
      colorDark : "#000000",
      colorLight : "#ffffff",
      correctLevel : QRCode.CorrectLevel.H
      });
    </script>

  </body>

</html>
