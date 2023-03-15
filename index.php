<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam</title>
    <link rel="stylesheet" href="./main.css" />
    <style>
        span{
            color:goldenrod;
        }
    </style>
</head>
<body>
    <h1>INFO SESSION WITH OBJECTIVITY</h1>
    <hr>
    <p>
        OJEVTIVITY IS PARTNERING WITH UNILAK TO HIRE THE GRADUATES FROM THE 
        CAMPUS OF KIGALI PLEASE FILL THIS FORM FOR YYOU TO BE CONSIDERED
    </p>
<form action="connect.php" method="POST" enctype="multipart/form-data">
    <fieldset>
    <legend>FORM</legend>
                    <fieldset>
                        <legend>PERSONAL INFORMATION</legend>
                        <label>FIRST NAME</label><br>
                        <input id="firstName" type="text" name="firstName" size="100" required><br> <br>
                        <p id="val_firstName">Please enter a valid first name (First Name must not include numbers)</p>


                        <label>LAST NAME</label><br>
                        <input id="lastName" type="text" name="lastName" size="100" required><br> <br>
                        <p id="val_lastName">Please enter a valid last name (Last Name must not include numbers)</p>

                        <label>EMAIL</label><br>
                        <input id="email" type="email" name="email" size="100" required><br> <br>
                        <p id="val_email">Your email must contain @ character</p>

                        <label>PASSWORD</label><br>
                        <input id="password" type="password" name="password" size="100" required><br> <br>
                        <p id="empty">Password must not be empty</p>
                        <p id="val_password">Please the password characters must be eight please</p>
                     <button name="submit">Submit</button>
                    </fieldset>

</form>
    <script src="./index.js"></script>
</body>
</html>