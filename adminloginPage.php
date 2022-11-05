<?php include_once 'header.php'; ?>
<head>
    <!-- our css -->
    <link
      href="css/styles.css"
      rel="stylesheet"
    />
</head>
<div class="container">
        <div class="row">
            <div class="login-box">
                <div class="login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="login-title">
                    ADMIN PANEL
                </div>
                    <div class="login-form">
                        <form action="includes/login-inc.php" method="post">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input name= "username" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input name="password" type="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button name="login" type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>