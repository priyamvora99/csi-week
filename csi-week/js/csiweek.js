$(document).ready(function(){

  $.fn.checkStatus=function(){
    var ref=firebase.database().ref('participants/csi_week_19/');
    var detailsObj={};
    var status=0;
    var totalAmount=0;

    ref.child(userId).on('value',function(snapshot){
      var exists=(snapshot.val() !== null);
      if(exists){

        detailsObj=snapshot.val();
        console.log(detailsObj);
        status=detailsObj.status;
        totalAmount=detailsObj.price;
        if(status==0){
          console.log("status is 0");
            $('#eventsRegistrationContainer').hide();
            $('#qrCodeContainer').show();
            $('#showMoneyMessage').show();
            $('#showMoney').text("Please pay Rs "+totalAmount+" at the desk ");
        }else{
            console.log("Status is 1");
            $('#eventsRegistrationContainer').hide();
              $('#qrCodeContainer').hide();
             $('#tickContainer').show();
        }

      }else{
        console.log(" does not exist");
          $('#eventsRegistrationContainer').show();
      }
    });
  }
  $.fn.checkStatus();

  var isCsiMember,androidWorkshop,arvrWorkshop;
  var yearSelected,deptSelected,divisionSelected;
    var userDetails={};
    var database = firebase.database();
    var userPoints=database.ref('userPoints/'+userId);
    var totalPrice=0;
    userPoints.on('value', function(snapshot) {
      userDetails=snapshot.val();
      console.log(userDetails);
        $('#nameLabel').text(userDetails.name);
        $('#emailLabel').text(userDetails.email);

    });
    $('#yearSelect').change(function(){
      yearSelected=$('#yearSelect option:selected').text();

    });
    $('#deptSelect').change(function(){
     deptSelected=$('#deptSelect option:selected').text();

    });
    $('#divisionSelect').change(function(){
       divisionSelected=$('#divisionSelect option:selected').text();

    });

    $('#csiMember').click(function(){
       isCsiMember=false;
      var isChecked=$('#csiMember:checked').prop('checked');
      if(isChecked){

        isCsiMember=true;
        $('.discountedRate').show();
        $('.normalRate').toggleClass('strikeText');
      }else{
        $('.discountedRate').hide();
        $('.normalRate').toggleClass('strikeText');
      }
      if(isCsiMember){
        if(androidWorkshop && arvrWorkshop){
          $('#totalAmount').text(950);
          totalAmount=950;
        }else if(androidWorkshop){
          $('#totalAmount').text(500);
          totalAmount=500;
        }else if(arvrWorkshop){
          $('#totalAmount').text(500);
          totalAmount=500;
        }else{
          $('#totalAmount').text(0);
        }
      }else{
        if(androidWorkshop && arvrWorkshop){
          $('#totalAmount').text(1100);
          totalAmount=1100;
        }else if(androidWorkshop){
          $('#totalAmount').text(600);
          totalAmount=600;
        }else if(arvrWorkshop){
          $('#totalAmount').text(600);
          totalAmount=600;
        }else{
          $('#totalAmount').text(0);
        }
      }
    });
    $('#androidWorkshop').click(function(){

      androidWorkshop=false;
      var isChecked=$('#androidWorkshop:checked').prop('checked');
      if(isChecked){
        androidWorkshop=true;
      }else{
        androidWorkshop=false;
      }
      if(isCsiMember){

        console.log(androidWorkshop);
        console.log(arvrWorkshop);
        if(androidWorkshop && arvrWorkshop){
          $('#totalAmount').text(950);
          totalAmount=950;
        }else if(androidWorkshop){
          $('#totalAmount').text(500);
          totalAmount=500;
        }else if(arvrWorkshop){
          $('#totalAmount').text(500);
          totalAmount=500;
        }else{
          $('#totalAmount').text(0);
        }
      }else{
        if(androidWorkshop && arvrWorkshop){
          $('#totalAmount').text(1100);
          totalAmount=1100;
        }else if(androidWorkshop){
          $('#totalAmount').text(600);
          totalAmount=600;
        }else if(arvrWorkshop){
          $('#totalAmount').text(600);
          totalAmount=600;
        }else{
          $('#totalAmount').text(0);
        }
      }
    });
    $('#arvrWorkshop').click(function(){
      arvrWorkshop=false;
      var isChecked=$('#arvrWorkshop:checked').prop('checked');
      if(isChecked){
        arvrWorkshop=true;
      }else{
        arvrWorkshop=false;
      }
      if(isCsiMember){
        console.log(androidWorkshop);
        console.log(arvrWorkshop);
        if(androidWorkshop && arvrWorkshop){
          $('#totalAmount').text(950);
          totalAmount=950;
        }else if(androidWorkshop){
          $('#totalAmount').text(500);
          totalAmount=500;
        }else if(arvrWorkshop){
          $('#totalAmount').text(500);
          totalAmount=500;
        }else{
          $('#totalAmount').text(0);
        }
      }else{
        if(androidWorkshop && arvrWorkshop){
          $('#totalAmount').text(1100);
          totalAmount=1100;
        }else if(androidWorkshop){
          $('#totalAmount').text(600);
          totalAmount=600;
        }else if(arvrWorkshop){
          $('#totalAmount').text(600);
          totalAmount=600;
        }else{
          $('#totalAmount').text(0);
        }
      }
    });


    $('#qrButton').click(function(){
      var course_details=deptSelected+", "+yearSelected+", "+divisionSelected;
      console.log(course_details);
    var events="events";

      var status=0;
      var phone=$('#telephone').val();
      console.log(phone);

      var isCsiMember = $('#csiMember').prop("checked");
      var database=firebase.database().ref('participants/csi_week_19');
      database.child(userId).set({
        course_details:course_details,
        csi_member:typeof isCsiMember == undefined ? false : isCsiMember ,
        email:userDetails.email,
        name:userDetails.name,
        phone:phone,
        price:totalAmount,
        status:status
      }).then(function(){
          var database=firebase.database().ref('participants/csi_week_19/'+userId);
          if(androidWorkshop && arvrWorkshop){
            database.child(events).set({
              0:'Android',
              1:'AR VR'
            }).then(function(){
              $.fn.checkStatus();
            });
          }else if(androidWorkshop){
            database.child(events).set({
              0:'Android'
            }).then(function(){
              $.fn.checkStatus();
            });
        }else{
          database.child(events).set({
            0:'AR VR'
          }).then(function(){
            $.fn.checkStatus();
          });
        }
    });



    });
    $('#changeMe').click(function(){
    var anObj={};
        var ref=firebase.database().ref('participants/csi_week_19/'+userId);
        ref.on('value',function(snapshot){

          var updatedData=snapshot.val();
          anObj=updatedData;
          if(anObj.status==1){
            status=true;
          }else{
            status=false;
          }
          if(status){
            $('#showQr').hide();
            $('.hide').removeClass('hide');
          }

        });
      });




});
