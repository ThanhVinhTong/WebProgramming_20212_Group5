<html>
    <head>
        <title> Tuna Cafe </title>
    </head>
    
    <body> <font size=4 color="blue">
        Tuna Cafe Survey! </font>
        <?php
            print("<br/>Your selection are: <br/>");
            
            $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
            
            $coldDrinks = $_POST['prefer']; 
            foreach ($coldDrinks as $coldDrink){
                echo $menu[$coldDrink]."<br/>";
            }
        ?>
    </body>
</html>