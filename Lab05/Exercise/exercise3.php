<html>
    <head>
        <style>
            .button {
              background-color: #4CAF50;
              border: none;
              color: white;
              padding: 15px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
              height:50px;
              width:600px;
            }
        </style>
        <title>Business Listings</title>
    </head>
    <body>
        <h1>Business Listings</h1>
        <h3>Click on a category to find business listings:</h3>
            <?php
            $host= 'localhost';
            $user = 'hieupt';
            $passwd = '412001';
            $database = 'web_programming_example';
            $connect = mysqli_connect($host, $user, $passwd);
            $table_name = 'Categories';
            $query = "SELECT * FROM $table_name";
            mysqli_select_db($connect, $database);
            $results_id = mysqli_query($connect, $query);
            if ($results_id) {
                print '<form action="exercise3.php" method="POST">';
                while ($row = mysqli_fetch_row($results_id)){
                    print "<button class='button' type='submit' name='id' value=$row[0]> $row[1] </button><br>";
                }
                print '</form>';
            } else { 
                die ("Query=$query failed!");
            }
            mysqli_close($connect);
            if(isset($_POST["id"])){
                print '<h3>Results:</h3>';
                $id = $_POST["id"];
                $connect = mysqli_connect($host, $user, $passwd);
                $table_name1 = 'Businesses';
                $table_name2 = 'Biz_Categories';
                $query = "SELECT tb1.*, tb2.Category_ID
                          FROM $table_name1 tb1, $table_name2 tb2
                          WHERE tb1.Business_ID=tb2.Business_ID and tb2.Category_ID='$id'";
                mysqli_select_db($connect, $database);
                $results_id = mysqli_query($connect, $query);
                if ($results_id) {
                    print '<table>';
                    print '<table border=1>';
                    print '<th>Business ID<th>Name<th>Address<th>City<th>Telephone<th>URL<th>Category ID<th>';
                    while ($row = mysqli_fetch_row($results_id)){
                        print '<tr>';
                        foreach ($row as $field) {
                            print "<td>$field</td> ";
                        }
                        print '</tr>';
                    }
                    print '</table>';
                } else { 
                    die ("Query=$query failed!");
                }
                mysqli_close($connect);
            }
            ?>
    </body>
</html>
