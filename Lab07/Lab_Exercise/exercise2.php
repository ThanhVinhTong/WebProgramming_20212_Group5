<html>
    <head><title>Information Results </title></head>
    <body>
        <?php
        $mail = $_POST["mail"];
        $url = $_POST["url"];
        $phone = $_POST["phone"];
        function validateEmail($email) {
            $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
            echo preg_match($regex, $email) ? "<div style='color:green'>The email is valid<br></div>":"<div style='color:red'>The email is not valid<br></div>";
        }
        function validateUrl($url){
            $regex = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
            echo preg_match($regex, $url) ? "<div style='color:green'>The url is valid<br></div>":"<div style='color:red'>The url is not valid<br></div>";
        }
        function validatePhone($phone){
            $regex = "/^0[0-9]{9}$/";
            echo preg_match($regex, $phone) ? "<div style='color:green'>The phone number is valid<br></div>":"<div style='color:red'>The phone number is not valid<br></div>";
        }
        validateEmail($mail);
        validateUrl($url);
        validatePhone($phone);
        ?>
    </body>
</html>