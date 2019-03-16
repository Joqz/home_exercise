<?php

    spl_autoload_register(function ($class_name) {
        include $class_name . ".php";
    }); 

    echo "<h3>Students</h3>";
    $Student1 = new Student("Bob","Stone","1997","75");
    $Student1->setCourses("JavaScript programming");
    $Student1->setCourses("PHP programming");
    $coursesOfStudent1=$Student1->getCourses();
    echo "Student ".$Student1->getFirstName()." ".$Student1->getLastName()." is " .$Student1->getAge()." years old and studies ".json_encode($coursesOfStudent1).". <br>";

    echo "<h3>Teachers</h3>";
    $Teacher1 = new Teacher("Jim", "Lee", "1982", "OAMK");
    $Teacher1->setTeachingSubjects("Mathematics");
    $Teacher1->setTeachingSubjects("Physics");
    $subjectsOfTeacher1=$Teacher1->getTeachingSubjects();
    echo "Teacher ".$Teacher1->getFirstName()." ".$Teacher1->getLastName()." is " .$Teacher1->getAge()." years old and teaches at ".$Teacher1->getDepartment().". <br>";
    echo "His primary subjects are ".json_encode($subjectsOfTeacher1).". <br>"; 

    echo "<h3>Staff</h3>";
    $Staff1 = new Staff("Jack", "Wallace", "1992", "Cleaner");
    echo "Staff member ".$Staff1->getFirstName()." ".$Staff1->getLastName()." is ".$Staff1->getAge()." years old and is a ".$Staff1->getVacancy().". <br>";
    
    $Staff2 = new Staff("Jay", "Moore", "1994", "Caretaker");
    echo "Staff member ".$Staff2->getFirstName()." ".$Staff2->getLastName()." is ".$Staff2->getAge()." years old and is a ".$Staff2->getVacancy().". <br>";

?>
