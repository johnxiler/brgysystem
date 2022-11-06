<?php include_once 'header.php'; 
 
?>
<head>
    <!-- our css -->
    <link
      href="css/styles.css"
      rel="stylesheet"
    />
</head>
<div class="content">
        <div class="row">
            <div class="login-box">
            <div class="login-key">
              <img id="loginlogo" src="/static/images/logo.png" alt="brgyviilogo"/>
                </div>
                 <div class="login-title">     
                       <p>LOGIN ACCOUNT</p>
                </div>
                    <div class="login-form">
                        <form action="includes/login-inc.php" method="post">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME: </label>
                                <input name= "username" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD: </label>
                                <input name="password" type="password" class="form-control" i>
                            </div>
                                <div class="login-button">
                                    <button name="login" type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                            <?php 
                          if(isset($_GET["error"])){
                            if($_GET["error"] == "emptyinput"){
                                echo "<p>Fill in all Fields!</p>";
                            }else if($_GET["error"]== "invalidusername"){
                                echo "<p>invalid username!</p>";
                            }else if ($_GET["error"]=="invalidPassword"){
                                echo "<p>invalid Password!</p>";
                            }
                          }
                        ?>
                        </form>
                        
                    </div>
            </div>
        </div>