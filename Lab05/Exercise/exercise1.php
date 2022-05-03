<html>
    <head>
        <title>Category Administration</title>
    </head>
    <body>
        <h1>Category Administration</h1>
        <?php
        if(isset($_POST["category_id"]) && isset($_POST["title"]) && isset($_POST["description"])){
            $category_id = $_POST["category_id"];
            $title = $_POST["title"];
            $description = $_POST["description"];
            $host = 'localhost';
            $user = 'hieupt';
            $passwd = '412001';
            $database = 'web_programming_example';
            $connect = mysqli_connect($host, $user, $passwd);
            $table_name = 'Categories';
            $query = "INSERT INTO $table_name VALUES
            ('$category_id','$title','$description')";
            mysqli_select_db($connect, $database);
            print '<br><font size="4" color="blue">';
            if (mysqli_query($connect, $query)){
                print "Insert into $table_name was successful!</font>";
            } else {
                print "Insert into $table_name failed!</font>";
            } mysqli_close ($connect);
        }
        ?>
        <table>
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
                print '<table border=1>';
                print '<th style="width:200px">Category ID</th><th style="width:500px">Title</th><th style="width:600px">Description</th>';
                while ($row = mysqli_fetch_row($results_id)){
                    print '<tr>';
                    foreach ($row as $field) {
                        print "<td>$field</td> ";
                    }
                    print '</tr>';
                }
            } else { 
                die ("Query=$query failed!");
            }
            mysqli_close($connect);
            ?>
        </table>
        <form action="exercise1.php" method="POST">
            <input type="text" size="19" maxlength="10" name="category_id">
            <input type="text" size="56" maxlength="50" name="title">
            <input type="text" size="70" maxlength="50" name="description">
            <br>
            <input type="SUBMIT" value="Add Category">
        </form>
    </body>
</html>
