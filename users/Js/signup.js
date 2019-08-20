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
            }else if(data === "success"){
                window.location.href="homepag1.php";
            }else {
                $('#validationMsg').hide();
                $('#validationMsg').show();
                $('#displayMessage').text(data);
            }
        });
    });


    $('#registerBtn').click(function() {

        var fName = $('#name-login').val();
        var lName  = $('#lname-login').val();
        var email = $('#email-login').val();
        var password  = $('#password-login').val();
        var phone = $('#phone-login').val();
        var address  = $('#addres-login').val();        

       
        $.post("reg.php", {

                     useremail: email,
                     userpassword: password,
                     fname: fName,
                     lname: lName,
                     userphone: phone,
                     useraddress: address                     

                }, function(data) {

                    if(data != "success"){
                        
                        $('#validationMsg').hide();
                        $('#validationMsg').show();
                        $('#displayMessage').text(data);

                    } else {
                        window.location.href="homepag1.php";
                    }
        });

    });


  });

       
