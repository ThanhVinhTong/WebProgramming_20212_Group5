    <html><head><title>Insert Results</title></head><body>
<?php
    $host = 'localhost';
    $user = 'hieupt';
    $passwd = '412001';
    $database = 'web_programming_example';
    $connect = mysqli_connect($host, $user, $passwd);
    $table_name = 'Product';
    $Item = $_POST["Item"];
    $Cost = $_POST["Cost"];
    $Weight = $_POST["Weight"];
    $Quantity = $_POST["Quantity"];
    $query = "INSERT INTO $table_name VALUES
    ('0','$Item','$Cost','$Weight','$Quantity')";
    print "The Query is <i>$query</i><br>";
    mysqli_select_db($connect, $database);
    print '<br><font size="4" color="blue">';
    if (mysqli_query($connect, $query)){
        print "Insert into $database was successful!</font>";
    } else {
        print "Insert into $database failed!</font>";
    } mysqli_close ($connect);
?>
    </body></html>