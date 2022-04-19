<html>
    <head><title>Number Guess Results </title><head>
    <style>
            p{text-align: left; color:blue; font-size: 30px}
    </style> 
    <body>
        <p>Guess my two-digit secret combination</p>
        
        <form action="logicalOperator.php" method="POST">
            <font size=4 > Pick a number from 1 to 9 <br>
            <input type="radio" name="pick1" value="1">1
            <input type="radio" name="pick1" value="2">2
            <input type="radio" name="pick1" value="3">3
            <input type="radio" name="pick1" value="4">4
            <input type="radio" name="pick1" value="5">5
            <input type="radio" name="pick1" value="6">6
            <input type="radio" name="pick1" value="7">7
            <input type="radio" name="pick1" value="8">8
            <input type="radio" name="pick1" value="9">9
            <br/>
            <font size=4 > Pick a number from 1 to 9 <br>
            <input type="radio" name="pick2" value="1">1
            <input type="radio" name="pick2" value="2">2
            <input type="radio" name="pick2" value="3">3
            <input type="radio" name="pick2" value="4">4
            <input type="radio" name="pick2" value="5">5
            <input type="radio" name="pick2" value="6">6
            <input type="radio" name="pick2" value="7">7
            <input type="radio" name="pick2" value="8">8
            <input type="radio" name="pick2" value="9">9
            <br/>
            <input type="SUBMIT" value="Cick to submit">
            <input type="RESET" value="Erase and Restart">
            <br/>
        </form>
        
        <?php
        if(isset($_POST["pick1"]) && isset($_POST["pick2"])){
            $pick1 = $_POST["pick1"]; 
            $pick2 =$_POST["pick2"];
            $combo1=5;
            $combo2=6;
            if (($pick1 == $combo1) && ($pick2 == $combo2)) {
                print ("Congratulations you got both secret numbers
                $combo1 $combo2!");
            } elseif (($pick1 == $combo1) || ($pick2 == $combo2)){
                print ("You got one number right.");
            } else {
                print ("Sorry, you are totally wrong!");
            }
            print ("You guessed $pick1 and $pick2.");
        }
        ?>
    </body>
</html>