<html>
    <head> <title> Receiving Input </title> 
        <style type="text/css">
            table {
            margin: 15px;
            }

            th {
            font-family: Arial, Helvetica, sans-serif;
            font-size: .7em;
            background: #666;
            color: #FFF;
            padding: 8px 10px;
            border-collapse: separate;
            border: 2px solid #000;
            }

            td {
            font-family: Arial, Helvetica, sans-serif;
            font-size: .7em;
            border: 2px solid #DDD;
            }
        </style>
    </head>
    <body>
        <font size=5>Thank You: Got Your Input.</font>
        <?php
            $name = $_POST["name"];
            $gender = $_POST["gender"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $class = $_POST["class"];
            $university = $_POST["university"];
            
            echo "<table>";
            echo "<tr><th>Name</th> <th>$name</th>";
            echo "<tr><th>Gender</th> <th>$gender</th>";
            echo "<tr><th>Email</th> <th>$email</th>";
            echo "<tr><th>Tel</th> <th>$phone</th>";
            echo "<tr><th>University</th> <th>$university</th>";
            echo "<tr><th>Class</th> <th>$class</th>";         

            $i="";
            if (isset($_POST["hobby"])) {
                foreach ($_POST["hobby"] as $hobbyItem){
                    if (in_array($hobbyItem, $_POST["hobby"])){
                        $i = $i . $hobbyItem . "<br>";
                    }
                }
            } else {
                $i = $i . "Where's your freaking hobby?" . "<br>";
            }
            echo "<br><tr><th>Hobbies</th> <th>$i</th>"
        ?>
    </body>
</html>