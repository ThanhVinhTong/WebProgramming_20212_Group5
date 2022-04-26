<html>
    <head>
        <title>
            Exercise
        </title>
    </head>
    <body>
        <?php
            error_reporting(E_ERROR | E_PARSE);

            $submitted = $_POST["submitted"];
            $sort_type = $_POST["sort_type"];
        ?>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <table style="table-layout: fixed;width: 100%">
                <tr>
                    <td>
                        <?php
                            if ($submitted){
                                if ($sort_type == 'sort'){
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"sort\" checked=\"checked\" /> Standard sort";
                                } else {
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"sort\" /> Standard sort";
                                }
                            } else {
                                echo "<input type=\"radio\" name=\"sort_type\" value=\"sort\" /> Standard sort";
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if ($submitted){
                                if ($sort_type == 'usort'){
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"usort\" checked=\"checked\" /> User-defined sort";
                                } else {
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"usort\" /> User-defined sort";
                                }
                            } else {
                                echo "<input type=\"radio\" name=\"sort_type\" value=\"usort\" /> User-defined sort";
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if ($submitted){
                                if ($sort_type == 'krsort'){
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"krsort\" checked=\"checked\" /> Reverse key sort";
                                } else {
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"krsort\" /> Reverse key sort";
                                }
                            } else {
                                echo "<input type=\"radio\" name=\"sort_type\" value=\"krsort\" /> Reverse key sort";
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if ($submitted){
                                if ($sort_type == 'asort'){
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"asort\" checked=\"checked\" /> Value sort";
                                } else {
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"asort\" /> Value sort";
                                }
                            } else {
                                echo "<input type=\"radio\" name=\"sort_type\" value=\"asort\" /> Value sort";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            if ($submitted){
                                if ($sort_type == 'rsort'){
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"rsort\" checked=\"checked\" /> Reverse sort";
                                } else {
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"rsort\" /> Reverse sort";
                                }
                            } else {
                                echo "<input type=\"radio\" name=\"sort_type\" value=\"rsort\" /> Reverse sort";
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if ($submitted){
                                if ($sort_type == 'ksort'){
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"ksort\" checked=\"checked\" /> Key sort";
                                } else {
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"ksort\" /> Key sort";
                                }
                            } else {
                                echo "<input type=\"radio\" name=\"sort_type\" value=\"ksort\" /> Key sort";
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if ($submitted){
                                if ($sort_type == 'uksort'){
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"uksort\" checked=\"checked\" /> User-defined key sort";
                                } else {
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"uksort\" /> User-defined key sort";
                                }
                            } else {
                                echo "<input type=\"radio\" name=\"sort_type\" value=\"uksort\" /> User-defined key sort";
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if ($submitted){
                                if ($sort_type == 'arsort'){
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"arsort\" checked=\"checked\" /> Reverse value sort";
                                } else {
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"arsort\" /> Reverse value sort";
                                }
                            } else {
                                echo "<input type=\"radio\" name=\"sort_type\" value=\"arsort\" /> Reverse value sort";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <?php
                            if ($submitted){
                                if ($sort_type == 'uasort'){
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"uasort\" checked=\"checked\" /> User-defined value sort";
                                } else {
                                    echo "<input type=\"radio\" name=\"sort_type\" value=\"uasort\" /> User-defined value sort";
                                }
                            } else {
                                echo "<input type=\"radio\" name=\"sort_type\" value=\"uasort\" /> User-defined value sort";
                            }
                        ?>
                    </td>
                </tr>    
            </table >

            <p align="center">
                <input type="submit" value="Sort" name="submitted" />
            </p>

            <?php
                function user_sort($a, $b) {
                    // smarts is all-important, so sort it first
                    if($b == 'smarts') {
                        return 1;
                    } elseif($a == 'smarts') {
                        return -1;
                    }

                    return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);

                }

                $values = array('name' => 'Buzz Lightyear','email_address' => 'buzz@starcommand.gal','age' => 32,'smarts' => 'some');
                $originalValues = $values;

                if($submitted) {
                    if($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
                        $sort_type($values, 'user_sort');
                    } else {
                        $sort_type($values);
                    }
                }
            ?>

            <table style="table-layout: fixed;width: 100%">
                <tr>
                    <td>
                        Value unsorted (before sort):
                    </td>
                    <td>
                        <ul>
                            <?php
                                foreach($originalValues as $key=>$originalValues) {
                                    echo "<li><b>$key</b>: $originalValues</li>";
                                }
                            ?>
                        </ul>
                    </td>
                    <td>
                        <?php
                            if ($submitted){
                                echo "Value sorted by $sort_type:";
                            }
                        ?>
                    </td>
                    <td>
                        <ul>
                            <?php
                                if ($submitted){
                                    foreach($values as $key=>$values) {
                                        echo "<li><b>$key</b>: $values</li>";
                                    }
                                }
                            ?>
                        </ul>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>