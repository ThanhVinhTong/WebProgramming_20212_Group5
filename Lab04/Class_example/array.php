<?php
    $names = array('Denise', 'Christopher', 'Matthew',
    'Bryant');
    print ("$names[0], $names[1], $names[2], $names[3] <br/>");

    $i=3;
    $classes = array('Math', 'History', 'Science', 'Pottery');
    $oneclass = $classes[$i-1];
    print "$classes[$i] $oneclass $classes[1] $classes[0] <br/>";

    $scores = array(75, 65, 85, 90);
    $scores[3] = 95;
    $average = ($scores[0] + $scores[1] + $scores[2] + $scores[3]) / 4;
    print "average=$average <br/>";

    $scores = array(1=>75, 2=>65, 3=>85);
    $scores[] = 100;
    print "$scores[1] $scores[2] $scores[3] $scores[4] <br/>";

    $courses = array ('Perl1', 'PHP1', 'C1','Java1', 'Pascal1', 'Cobol1', 'Visual Basic1');
    for ($i=0; $i < count($courses); $i++) {
        print ("$courses[$i] ");
    }
    print ("<br/");
    $courses2 = array('Perl', 'PHP', 'C', 'Java','Pascal', 'Cobol', 'Visual Basic');
    foreach ($courses2 as $item){
        print ("$item ");
    }
    print ("<br/");
?>
