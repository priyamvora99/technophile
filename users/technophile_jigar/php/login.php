<html>
	<head>
		<meta charset="utf-8"/>
		  		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		  		<link rel="stylesheet" href="../bootstrap-4/dist/css/bootstrap.css"/>
		  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		  		<link rel="stylesheet" type="text/css" href="../css/mycss.css"/>
		  		<link rel="stylesheet" type="text/css" href="../css/logincss.css"/>
		  		<script type="text/javascript" src="../Js/login.js"></script>
	</head>
	<body class="bodycss">
		<div class="containercss">
			<div class="top">
				<h1 id="title">
					<span>Attendance System</span>
				</h1>
			</div>
			<div class="login-box">
				<div class="box-header">
					<h2 style="padding:20px;color:white; ">Log In</h2>
				</div>
				<form action="validate.php" method="post">
					<table border="0" class="table">
								<tbody>
									<tr>
										<td class="no-border">Email: </td>
										<td class="no-border">
											<input type="text" name="useremail" class="form-control" placeholder="Enter email address">
										</td>
									</tr>
									<tr>
										<td class="no-border">Password:</td>
										<td class="no-border">
											<input type="Password" name="userpassword" class="form-control" placeholder="Enter Password">
										</td>
									</tr>
									<tr>
										<td class="no-border"></td>
										<td class="no-border">
											<input type="submit" value="Log in" class="login-button">
										</td>
									</tr>
									<tr>
										<td class="no-border"></td>
										<td class="no-border">
											<a href="#" data-target="#pwdModal" data-toggle="modal">Forgot my password</a>
										</td>
									</tr>
									<tr>
										<td class="no-border" colspan="2">
											<div class="alert alert-warning" style="display:none;" id="showerror">
												<span id="showSpanError"></span>
												<?php

													session_start();
													$flag;
													$flag1;
													if(isset($_SESSION["password"])){
														$flag=$_SESSION["password"];
														$flag1="true";
													}
													if (isset($_SESSION["register"])) {
													$flag1=$_SESSION["register"];
													$flag="true";
												}
													session_unset();
													session_destroy();
												?>
												<script>
													var flag="<?php echo $flag ?>";
													var flag1="<?php echo $flag1 ?>";
													var msg="";
													if (flag=="false"){
														msg="Incorrect password";
														$('#showerror').show()
														$('#showSpanError').text(msg)
													}else{
														$('#showerror').hide()
													}if(flag1=="false"){
														msg="Incorrect email or user not registered please register to continue";
														$('#showerror').show()
														$('#showSpanError').text(msg)
													}else{
														$('#showerror').hide()
													}


												</script>
											</div>
										</td>
									</tr>
								</tbody>
								
							</table>
				</form>
			</div>
		</div>
		 <div id="pwdModal" class="modal" tabindex="-1" role="dialog" data-container="body">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">What's My Password?</h1>
      </div>
      <div class="modal-body">
          <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          
                          <p>If you have forgotten your password you can reset it here.</p>
                            <div class="panel-body">
                        <form action="sendemail.php" method="POST">
                                <fieldset  id="formGroupId">

                                    <div class="form-group">
                                        <input class="form-control input-lg" placeholder="E-mail Address" name="useremail" type="email" style="margin:10px;" required />
                                        <input class="btn btn-lg btn-primary btn-block" value="Send OTP" type="submit" id="otpButton" style="margin:10px; " />
                                    </div>
                                    

                                </fieldset>
                        </form>
                        <!-- <form action="login1.asp" method="POST">
 	                           	<fieldset id="formGroupId1" style="display:none; ">
                            		<div class="form-group">
                            			<input name="email" type="hidden" id="uemail2"/>
	                            		<input class="form-control input-lg" placeholder="Enter OTP" name="OTP" type="text" style="margin:10px; " />
	                                    <input class="form-control input-lg" placeholder="Enter New Password" name="newpass" type="password" style="margin:10px; " />
	                                    <input class="form-control input-lg" placeholder="Confirm Password" name="confpass" type="password" style="margin:10px; " />
	                                 

	                                 <input class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit" id="resetButton" />
	                             </div>
                            	</fieldset>
                            	<div class="alert alert-success" style="display:none;" id="showerror1">
                            		<span id="successtext"></span>
                            	</div>
                         </form>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div> -->
	</body>
	<!-- <%
		dim uemail,uotp,femail,fotp,newpass,confpass,conn,rs,msg
		uemail=Request.Cookies("uemail")
		Response.Cookies("uemail").Expires = DateAdd("d",-1,now())
		if uotp = "" then
			uotp=Request.Cookies("OTP")
			Response.Cookies("OTP").Expires = DateAdd("s",300,now())
		end if
		fotp=Request("OTP")
		newpass=Request("newpass")
		confpass=Request("confpass")
		
		if newpass <> "" and confpass <> "" then
			uemail = Request("email")
			if fotp=uotp then
				if newpass=confpass then
					set conn=Server.CreateObject("ADODB.Connection")
					conn.Provider="Microsoft.Jet.OLEDB.4.0"
					conn.Open "C:\inetpub\wwwroot\Wt Project\db\profinfo.mdb"
					set rs=Server.CreateObject("ADODB.Recordset")
					sql="UPDATE proftbl SET Pass='" & newpass & "' WHERE Email='" & uemail & "'"
					set rs = conn.Execute(sql)
					msg="Password reset successful"
				else
					msg="Password mismatch"
				end if
			else
					msg="OTP mismatch"
			end if
		end if

	%> -->	
	<!-- <script>
		var email = "<%=uemail%>";
		var otp="<%=uotp%>"
		var msg="<%=msg%>";
		var newpass="<%=newpass%>"
		var confpass="<%=confpass%>"
		var fotp="<%=fotp%>"
		if(email != ""){
			$('#pwdModal').modal('show');
			$('#formGroupId').hide();
		 	$('#formGroupId1').show();
		 	$('#uemail2').val(email);
		}
		if(msg!=""){
			$('#pwdModal').modal('show');
			$('#formGroupId').hide();
		 	$('#formGroupId1').show();
			$('#showerror1').show();
			$('#successtext').text(msg);
		}
	</script> -->	
	
</html>