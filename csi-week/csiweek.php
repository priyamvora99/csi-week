<?php
  if(isset($_GET["uid"])){
    $uid=$_GET["uid"];
    $string='participants/csi_week_19/'.$uid;

  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSI Week 2019</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.8.0/firebase.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.11.0/barcodes/JsBarcode.codabar.min.js"></script>
    <script type="text/javascript" src="js/csiweek.js"></script>
    <script type="text/javascript" src="js/qrcode.js"></script>


    <script>
          var userId='<?php echo $uid; ?>';
          var string='<?php echo $string; ?>';
          // var config = {
          //   apiKey: "AIzaSyAK4u-fDv6geisMAyAkWhELnKcPRbx6XXc",
          //   authDomain: "djcsi-3e43d.firebaseapp.com",
          //   databaseURL: "https://djcsi-3e43d.firebaseio.com",
          //   projectId: "djcsi-3e43d",
          //   storageBucket: "djcsi-3e43d.appspot.com",
          //   messagingSenderId: "464789121303"
          // };
          var config = {
    apiKey: "AIzaSyAtcRNZGiE-Uk0wyyUwfY8I85QWu8XmUGQ",
    authDomain: "djcsi-b13a9.firebaseapp.com",
    databaseURL: "https://djcsi-b13a9.firebaseio.com",
    projectId: "djcsi-b13a9",
    storageBucket: "djcsi-b13a9.appspot.com",
    messagingSenderId: "894161111425"
  };
          firebase.initializeApp(config);
          function showInfoModal(){

          }


    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

      <link rel="stylesheet" href="css/csiweek.css"></link>
  </head>
  <body>
    <div class="container" id="eventsRegistrationContainer" style="display:none;">
      <div class="row">
        <div class="col-12">
          <p >Your Details</p>
        </div>
      </div>
    <div class="row no-margin">
      <div class="col-12" id="memberDetails">
        <div class="row">
          <div class="col-12">
              <label id="nameLabel"></label>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <label id="emailLabel"></label>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input type="tel" name="userPhone" placeholder="Phone" id="telephone" class="form form-control" required>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-12">
                <select id="yearSelect">
                  <option value="default">Please Select a Year</option>
                  <option value="FE">FE</option>
                  <option value="SE">SE</option>
                  <option value="TE">TE</option>
                  <option value="BE">BE</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <select id="deptSelect">
                  <option value="default">Please Select a Department</option>
                  <option value="IT">IT</option>
                  <option value="COMPS">Comps</option>
                  <option value="MECH">MECH</option>
                  <option value="PROD">Prod</option>
                  <option value="ELECTRONICS">Electronics</option>
                  <option value="EXTC">EXTC</option>
                  <option value="BIOMED">BioMed</option>
                  <option value="CHEMICAL">CHEMICAL</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <select id="divisionSelect">
                  <option value="default">Please Select a Division</option>
                  <option value="NA">N/A</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                  <option value="F">F</option>
                  <option value="G">G</option>
                  <option value="H">H</option>
                  <option value="I">I</option>
                  <option value="J">J</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top:5%;">
          <div class="col-10">
            <p>Are you a djcsi member?</p>
          </div>
          <div class="col-2">
              <input type="checkbox" id="csiMember" value="">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p style="margin-top:5%;">Select workshop</p>
      </div>
    </div>
    <div class="row no-margin">
      <div class="col-12 workshop">
        <div class="row" style="margin-top:2%;">
          <div class="col-10">
            <div class="workshopName">
              <p>A 2 day Android Development Workshop</p>
            </div>
          </div>
          <div class="col-2" style="display:block;">
              <i class="fas fa-info" onclick="showInfoModal()"></i>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <i class="fas fa-rupee-sign normalRate"><span>600</span></i>
          </div>
          <div class="col-4" >
            <i class="fas fa-rupee-sign discountedRate" style="display:none;"><span> 500</span></i>
          </div>
          <div class="col-2"></div>
          <div class="col-2">
            <div class="checkbox" >
              <label><input type="checkbox" id="androidWorkshop" value=""></label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br/>
    <div class="row no-margin">
      <div class="col-12 workshop">
        <div class="row" style="margin-top:2%;">
          <div class="col-10">
            <div class="workshopName">
              <p>A 2 day AR VR Workshop</p>
            </div>
          </div>
          <div class="col-2" style="display:block;">
              <i class="fas fa-info" onclick="showInfoModal()"></i>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <i class="fas fa-rupee-sign normalRate"><span>600</span></i>
          </div>
          <div class="col-4" >
            <i class="fas fa-rupee-sign discountedRate" style="display:none;"><span> 500</span></i>
          </div>
          <div class="col-2"></div>
          <div class="col-2">
            <div class="checkbox" >
              <label><input type="checkbox" id="arvrWorkshop" value=""></label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top:5%">
        <div class="col-6">
          <span>Total Payable </span>
        </div>
        <div class="col-4">
        </div>
        <div class="col-2">
          <i class="fas fa-rupee-sign"><span id="totalAmount">0</span></i>
        </div>
    </div>
    <div class="row">
      <div class="col-3">
      </div>
      <div class="col-6">
        <button type="button" class="btn btn-primary" id="qrButton">Submit</button>
      </div>
      <div class="col-3">
      </div>
    </div>
</div>
<div class="container" style="margin-top:50%;display:none;" id="qrCodeContainer">
  <div class="row">
    <div class="col-12">
      <div class="containerDiv" id="showQr">
        <div id="output">
        </div>
        <div class="row">
          <div class="col-12">
            <span id="showMoney"></span>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="container"  style="margin-top:50%;display:none;" id="tickContainer" >
  <div class="row">
    <div class="col-12">
      <div class="containerDiv">
        <div class="row">
          <div class="col-12">
            <img src="image1.png" class="" alt="You are registered successfully" width="250" height="250">
          </div>
        </div>
        <br/>
        <div class="row">
          <div class="col-12">
            <span class="" style="">Congratualtions!You are registered for the workshop(s)!</span>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-12">
            <a href="djcsi://close_window" class="buttonClass">Go Back</a>
            <button type="button" class="buttonClass1" name="button" id="changeMe">Refresh</button>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>

  </div>
      <script>
      var qrcode = new QRCode(document.getElementById("output"), {
        text: string,
        width: 300,
        height: 300,
        colorDark : "#000000",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
        });

      </script>
</body>
  </html>
