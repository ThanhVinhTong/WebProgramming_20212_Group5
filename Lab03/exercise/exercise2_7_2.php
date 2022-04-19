<html>
    <head><title>Date Time</title></head>
    <body>
        <?php
        if(isset($_POST["name1"]))
            $name1 = $_POST["name1"];
        if(isset($_POST["day1"]))
            $day1 = $_POST["day1"];
        if(isset($_POST["month1"]))
            $month1 = $_POST["month1"];
        if(isset($_POST["year1"]))
            $year1 = $_POST["year1"];
        if(isset($_POST["name2"]))
            $name2 = $_POST["name2"];
        if(isset($_POST["day2"]))
            $day2 = $_POST["day2"];
        if(isset($_POST["month2"]))
            $month2 = $_POST["month2"];
        if(isset($_POST["year2"]))
            $year2 = $_POST["year2"];

        function getWeekday($date){
            return date('l', $date);
        }

        function myCheckdate($month, $day, $year){
            return is_numeric($day)&&is_numeric($month)&&is_numeric($year)&&checkdate($month, $day, $year);
        }

        function display($day, $month, $year){
            $date= mktime(0, 0, 0, $month, $day, $year);
            $weekday = getWeekday($date);
            switch ($month){
                case 1:$monthL = "January";break;
                case 2:$monthL = "February";break;
                case 3:$monthL = "March";break;
                case 4:$monthL = "April";break;
                case 5:$monthL = "May";break;
                case 6:$monthL = "June";break;
                case 7:$monthL = "July";break;
                case 8:$monthL = "August";break;
                case 9:$monthL = "September";break;
                case 10:$monthL = "October";break;
                case 11:$monthL = "November";break;
                case 12:$monthL = "December";break;
                default:$monthL = "None";break;
            }
            return ($weekday.", ".$monthL." ".$day.", ".$year);
        }

        if(myCheckdate($month1, $day1, $year1) && myCheckdate($month2, $day2, $year2)){
            print "Birthday of first person: ";
            echo display($day1, $month1, $year1).'<br/>';
            print "<br/>Birthday of second person: ";
            echo display($day2, $month2, $year2).'<br/>';
            $date1 = mktime(0, 0, 0, $month1, $day1, $year1);
            $date2 = mktime(0, 0, 0, $month2, $day2, $year2);
            $currentDate = date("d-m-Y");
            $age1 = floor((time() - $date1)/31556926);
            $age2 = floor((time() - $date2)/31556926);
            echo '<br/>The difference in days between two dates is: '.abs(($date1-$date2)/86400).' days<br/>';
            echo '<br/>Person '.$name1.' is '.$age1.' years old!<br/>';
            echo '<br/>Person '.$name2.' is '.$age2.' years old!<br/>';
            echo '<br/>The difference in years between two dates is: '.abs($year1-$year2).' years<br/>';
        } else{
            print "The input date is not valid!";
        }
        ?>
    </body>
</html>