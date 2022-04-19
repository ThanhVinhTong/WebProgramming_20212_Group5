<html>
    <head><title> Coin Flip Results </title></head> 
    <body>
        <form action="morePrintFunction.php" method="POST">
        <font color="blue">
        <input type="radio" name="pick" value="0"> Heads
        <br/>
        <input type="radio" name="pick" value="1"> Tails
        <br/>
        <input type="SUBMIT" value="Cick to submit">
        <input type="RESET" value="Erase and Restart">
        <br/>
        </form>
        <?php
        srand((double) microtime() * 10000000);
        if(isset($_POST["pick"])){
            $pick = $_POST["pick"];
            $flip = rand( 0, 1 );
            if ( $flip == 0 && $pick == 0 ) {
                print "The flip=$flip, which is heads! <br> ";
                print '<font color="blue"> You got it right!</font>';
            } elseif ( $flip == 0 && $pick == 1 ) {
                print "The flip=$flip, which is heads! <br> ";
                print '<font color="red"> You got it wrong!</font>';
            } elseif ( $flip == 1 && $pick == 1 ) {
                print "The flip=$flip, which is tails! <br>";
                print '<font color="blue"> You got it right!</font>';
            } elseif ( $flip == 1 && $pick == 0 ) {
                print "The flip=$flip, which is tails! <br>";
                print '<font color="red"> You got it
                wrong!</font>';
            } else {
                print "<br>Illegal state error!";
            }
        }
        ?> 
    </body>
</html>