<html>
    <head> <title> Receiving Input </title> </head>
    <body>
        <font size=5>Thank You: Got Your Input.</font>
        <?php
            function R2D ($radian){
                return ($radian*180/3.14);
            }
            
            function D2R ($degree) {
                return ($degree*3.14/180);
            }
            
            if(isset($_POST["num"]))
                $number = $_POST["num"];
            
            if(isset($_POST['mode1'])){
                $mode = $_POST['mode1']; 
                print ("<br> Convert mode is $mode<br/>");
                echo '<br/>Converted from '.$number.' in Degrees to: '. D2R($number).' in Radians !<br/>';
            }
            
            if(isset($_POST['mode2'])){
                $mode = $_POST['mode2']; 
                print ("<br> Convert mode is $mode<br/>");
                echo '<br/>Converted from '.$number.' in Radians to: '. R2D($number).' in Degrees !<br/>';
            }
        ?>
    </body>
</html>