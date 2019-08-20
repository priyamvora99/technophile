$(document).ready(function(){
 
    $('#loginBtn').click(function(){
       
        var useremail = $('#email').val();
        var userpassword  = $('#password').val();
       
        $.post("log.php",{useremail:useremail,userpassword:userpassword},function(data){
            if(data==="Invalid Password"){
                $('#validationMsg').hide();
                $('#validationMsg').show();
                $('#displayMessage').text(data);
            }else if(data==="User not found!"){
                $('#validationMsg').hide();
                $('#validationMsg').show();
                $('#displayMessage').text(data);
            }else{
                window.location.href="homepag1.php";
            }
        });
    })
  });

       
