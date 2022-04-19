<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $rated = $_GET("Rating");
        print ("<br></br>");
        switch ($rating) {
            case 1:
                $rated = "Poor";
                print ("The rating was $rated");
                break;
            case 2:
                $rated = "Fair";
                print ("The rating was $rated");
                break;
            case 3:
                $rated = "Good";
                print ("The rating was $rated");
                break;
            default:
                print ("Error: that rating does not exist");
        }
        ?>
    </body>
</html>
