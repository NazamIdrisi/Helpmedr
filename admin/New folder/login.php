<?php 
@require_once 'config/config.php';
?>
<html>
    <head>
        <?php @require_once 'config/commonJS.php'; ?>		
    </head>
    <body style="background-color:white;">
        <!-- wrap starts here -->
        <div id="wrap">
            <!--header -->
            
        
            <div id="content-wrap">
                <div id="main" style="margin-left:100px;border-radius:10px 10px 10px 10px;">
                	<center><?php echo $_SESSION['Msg']; ?></center>
                    <form id="formSubmit"  method="post" action="process/processLogin.php" >
                    <input type="hidden" name="type" value="login" />
                    <table width="500px" height="150px" style="background-color:white;margin-left:200px;margin-top:50px;border-radius:10px;border:1px groove red;padding-left:20px;">
                        <tr>
                            <td>User Name</td>
                            <td><input type="text" id="UserName" class="validate[required]" name="UserName" /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="Password" class="validate[required]" name="Password" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Login" name="submit" /></td>
                        </tr>
                    </table>
                    </form>    
                    <div class="clear"></div>
                </div>
            <!-- content-wrap ends here -->
            </div>
            <!--footer starts here-->
           
            <!-- wrap ends here -->
        </div>
    </body>
</html>