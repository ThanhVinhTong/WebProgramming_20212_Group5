<html>
    <head>
        <title>Inventory Information</title>
    </head>
    <body>
        <?php
        class BaseClass {
            function __construct() {
                print "In BaseClass constructor<br/>";
            }
        }
        class SubClass extends BaseClass {
            function __construct() {
                parent::__construct();
                print "In SubClass constructor<br/>";
            }
        }
        $obj = new BaseClass();
        $obj = new SubClass();
        ?>
    </body>
</html>