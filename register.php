<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<!-- REGISTER -->
<div style="padding-top:5%">
    <div class="register-container">
        <!-- REGISTER HEADER -->
        <div class="register-header">
            <span class="register-header-subtitle"><h1>Student Registration</h1></span>
        </div>
        <!-- REGISTER CONTENT -->
        <div class="register-content">
            <span class="error" id="error"></span>
            <form method="post" id="register-student" class="register-form">
                <div class="register-form-group">
                    <label>User ID</label>
                    <input type="text" name="userid" class="form-input" id="userid"  required>
                </div>
                <div class="register-form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-input" id="fname"  required>
                </div>
                <div class="register-form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-input" id="lname"  required>
                </div>

                <div class="register-form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-input" id="email"  required>
                </div>

                <div class="register-form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-input" id="password"  required>
                </div>
                <div class="register-form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm-password" class="form-input" id="confirm-password"  required>
                </div>
                <div class="register-button">
                    <button type="submit" name="register-student" class="button button5">Register</button>
                </div>
            </form>
        </div>
        <script src="student.scripts.js?<?php echo time(); ?>"></script>
        <script type="text/javascript">document.getElementById('register-student').addEventListener('submit', setRegisterStudent);</script>
</body>
</html>