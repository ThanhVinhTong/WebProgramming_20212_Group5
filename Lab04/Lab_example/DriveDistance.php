<html>
    <head>
        <title>Distance calculation Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <font size=4 color="blue">Welcome to distance calculation Page <br/> </font>
        <p>The page calculate distance from Chicago!</p>
        <p>Select a destination:</p>
        <form action="CheckDistance.php" method="POST">
            <select name="destination" size=3>
            <option> Boston </option>
            <option> Dallas </option>
            <option> Las Vegas </option>
            <option> Miami </option>
            <option> Nashville </option>
            <option> Pittsburgh </option>
            <option> San Francisco </option>
            <option> Toronto </option>
            <option> Washington, DC </option>
            </select>
            <br/> <br/>
            <input type="SUBMIT" value="Cick to submit">
            <input type="RESET" value="Erase and Restart">
        </form>
        
    </body>
</html>
