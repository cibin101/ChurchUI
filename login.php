<?php include_once("includes/loginheader.php");
   global $errormsg;
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 


      $myusername = pg_escape_string($_POST['username']);
      $mypassword = pg_escape_string($_POST['password']); 
      
      $sql = "SELECT * FROM admin WHERE username = '$myusername'";
      $result = pg_query($db,$sql);
      $row = pg_fetch_assoc($result);
      if($row['passcode'] == $mypassword) {
         session_start(); 
         $_SESSION['login_user'] = $myusername;

         if($myusername == "A")
            {
               $_SESSION['login_admin'] = 'true';
               header("Location: admin.php");
            }
         else
            {header("Location: index.php");
            }  
         $errormsg="";
         //echo '<script type="text/javascript">window.location = "http://localhost/smosc/index.php"</script>';
      }else {
         $errormsg = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
         <style type = "text/css">

         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         image{
            background-image: url('images/mothermary.jpg');
            background-repeat:no-repeat;
            background-size: 100%;
            opacity: 0.9;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
            color:#000000;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   <body bgcolor = "#FFFFFF" id="image">
      <div align = "center">
         <div style = "width:300px;" align = "left">			
            <div style = "margin:30px">
               
               <form action = "" method = "post" id="form">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Login "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $errormsg  ; ?></div>
					
            </div>
				
         </div>
			
      </div>
   <?php include_once("includes/footer.php"); ?>
   </body>
   
</html>