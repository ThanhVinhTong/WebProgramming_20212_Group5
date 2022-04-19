<html>
    <head><title> Our Shop</title></head>
    <body>
        <font size="4" color="blue">
        <?php
            $today = date('l, F d, Y');
            print ("Welcom to $today to our huge blowout sale! </font>");
            $month = date('m');
            $year = date('Y');
            $dayofyear = date('z');
            if ($month == 12 && $year == 2001){
                $daysleft = (365-$dayofyear + 10);
                print ("<br/> There are $daysleft sales days left");
            } else {
                print ("<br/>Sorry, our sale is over.");
            }
            print ("<br/>Our Sale Ends January 10, 2002");
        ?>
        </font>
    </body>
</html>