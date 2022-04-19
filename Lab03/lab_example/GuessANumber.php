<?php
                session_start();
                srand ((double) microtime() * 1000000000);
                    if(!isset($_SESSION['num'])){ 
                        $_SESSION['num'] = rand(0, 100); 
                    } 
                    $num = $_SESSION['num']; 
?>

<html>
    <head><title>Guess a number</title></head>
    <body>
        <font size="5" color="blue">
        Guess a number</font>
        <br/>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            
            <table>
                <tr>
                    <td>Enter your guess: </td>
                    <td>
                        <input type="text" name="guess" size="4" maxlength="4">
                    </td>
                </tr>
                <tr>
                    <td align="right"> <input type="submit" name="button" value="Submit"> </td>
                    <td align="left"> <input type="reset" value="Reset"> </td>
                </tr>
            </table>
                <?php
                    if(isset($_GET["button"])){
                        if(!isset($_SESSION["button"])){
                            $_SESSION['button'] = 1;
                        } else{
                            $button = $_SESSION['button'] + 1;
                            $_SESSION['button'] = $button;
                        }
                    }
                    
                    if (array_key_exists("guess", $_GET)) {
                        $guess = $_GET["guess"];                   
                        if ($guess < $num){
                            print ("<br/><font color='red'> Wrong! Please try a higher number. You have guess ");
                            echo $_SESSION["button"];
                            print (" times </font>");
                        } elseif  ($guess > $num){
                            print ("<br/><font color='red'> Wrong! Please try a lower number. You have guess ");
                            echo $_SESSION["button"] ;
                            print (" times</font>");
                        } else {
                            print ("<br/><font color='blue'> Congratulation! You have guessed correctly!</font>");
                            session_destroy();
                        }
                    }
                    
                ?>
            
        </form>
    </body>
</html>