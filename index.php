<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');

        $students = array();
        
        // first student record
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first; // first letter of key comes from first name
        
        // second student record
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        // third student record
        $third = new Student();
        $third->surname = "Lee";
        $third->first_name = "Luke";
        $third->add_email('work','lukelee@work.com');
        $third->add_grade(80);
        $third->add_grade(60);
        $students['l789'] = $third;
        
        // sort the student array in ascending order according to the key
        ksort($students);
        
        // prints out all the students in the array
        foreach($students as $student) {
            echo $student->toString();
        }
        ?>
    </body>
</html>
