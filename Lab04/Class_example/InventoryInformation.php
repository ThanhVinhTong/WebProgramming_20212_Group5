<html>
    <head>
        <title>Inventory Information</title>
    </head>
    <body>
        <?php
            if(isset($_POST["id"]))
                $id = $_POST["id"];

            $inventory = array (
                'AC1000'=>array('Part'=>'Hammer','Count'=>122, 'Price'=> 12.50 ),
                'AC1001'=>array('Part'=>'Wrench','Count'=>5, 'Price'=>5.00 ),
                'AC1002'=>array('Part'=>'Handsaw','Count'=>10, 'Price'=>10.00 ),
                'AC1003'=>array('Part'=>'Screwdrivers','Count=>222', 'Price'=>3.00)
            );
            foreach ($id as $key) {
                if (isset($inventory[$key])){
                    print '<font size=4 color="blue"> ';
                    print "Inventory Information for Part $key </font>";
                    print '<table border=1> <th> ID <th> Part <th> Count <th> Price ';
                    print "<tr> <td> $key </td>";
                    print "<td> {$inventory[$key]['Part']} </td>";
                    print "<td> {$inventory[$key]['Count']} </td>";
                    print "<td> \${$inventory[$key]['Price']} </td></tr>";
                } else {
                    //print "Illegal part ID = $key ";
                }
            }
        ?> 
    </body>
</html>