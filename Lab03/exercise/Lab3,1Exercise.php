<html>
    <head><title>Date Time Validation</title></head>
    <body>
        <font size="5" color="blue">
        Enter your name and select date and time for appointment </font>
        <br/>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php
                if (array_key_exists("name", $_GET)) {
                    $name=$_GET["name"];
                    $day=$_GET["day"];
                    $month=$_GET["month"];
                    $year=$_GET["year"];
                    $hour=$_GET["hour"];
                    $minute=$_GET["minute"];
                    $second=$_GET["second"];
                } else {
                    $day=1;
                    $month=1;
                    $year=2000;
                    $hour=0;
                    $minute=0;
                    $second=0;
                }
            ?>
            <table style="table-layout: fixed;width: 300px">
                <tr>
                    <td style="width:50%;text-align: left">Your name: </td>
                    <td colspan="3">
                        <input type="text" size="10" maxlength="15" name ="name">
                    </td>
                </tr>
                <tr>
                    <td align="left">Date: </td>
                    <td>
                        <select name="day">
                            <?php
                                for ($i=1; $i<=31; $i++){
                                    if ($day==$i){
                                       print ("<option selected>$i</option>");
                                    } else {
                                        print ("<option>$i</option>");
                                    }
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="month">
                            <?php
                                for ($i=1;$i<=12;$i++){
                                    if ($month==$i){
                                        print ("<option selected>$i</option>");
                                    } else {
                                        print ("<option>$i</option>");
                                    }
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="year">
                            <?php
                                for ($i=1;$i<=9999;$i++){
                                    if ($year==$i){
                                        print ("<option selected>$i</option>");
                                    } else {
                                        print ("<option>$i</option>");
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="left">Time: </td>
                    <td>
                        <select name="hour">
                            <?php
                                for ($i=0;$i<24;$i++){
                                    if ($hour==$i){
                                        print ("<option selected>$i</option>");
                                    } else {
                                        print ("<option>$i</option>");
                                    }
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="minute">
                            <?php
                                for ($i=0;$i<60;$i++){
                                    if ($minute==$i){
                                        print ("<option selected>$i</option>");
                                    } else {
                                        print ("<option>$i</option>");
                                    }
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="second">
                            <?php
                                for ($i=0;$i<60;$i++){
                                    if ($second==$i){
                                        print ("<option selected>$i</option>");
                                    } else {
                                        print ("<option>$i</option>");
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"> <input type="submit" value="Submit"> </td>
                    <td align="left"> <input type="reset" value="Reset"> </td>
                </tr>
            </table>
            <table>
                <?php
                    function verifyDate($date, $strict = true) {
                        $dateTime = DateTime::createFromFormat('d/m/Y', $date);
                        if ($strict) {
                            $errors = DateTime::getLastErrors();
                            if (!empty($errors['warning_count'])) {
                                return false;
                            }
                        }
                        return $dateTime !== false;
                    }
                    
                    if (array_key_exists("name", $_GET)) {
                        print ("Hi $name!<br/>");
                        $date = $day . "/" . $month . "/" . $year;
                        if (verifyDate($date)==true){
                            print ("You have choose to have an appoitment on $hour:$minute:$second $date<br/>");
                            print ("<br/>More information<br/><br/>");
                            if ($hour>=12){
                                $temp = $hour -12;
                                $date = $year."-".$month."-".$day;
                                print ("In 12 hours, the time and date is $temp:$minute:$second AM ");
                                echo date('d/m/Y', strtotime($date. '+1 days'));
                            } else {
                                print ("In 12 hours, the time and date is $hour:$minute:$second PM $date");
                            }
                            print ("<br/>This month has ");
                            echo cal_days_in_month(CAL_GREGORIAN, $month, $year);
                            print (" days");
                        } else {
                            print ("You have choose an invalid date, please reset and choose again<br/>");
                        }
                    }
                    
                ?>
            </table>
        </form>
    </body>
</html>