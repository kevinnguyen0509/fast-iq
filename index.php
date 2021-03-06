<?php

    /*
    Author: Brian, Kevin, Sonie
    01/16/2018
    handles routing using fat free framework*/

    //Require the autoload file
    require_once('vendor/autoload.php');
    session_start();

    require("../config_fast-iq.php");
    
    try
    {
        //instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    //Create an instance of the Base class
    $f3 = Base::instance();

    $f3->set('DEBUG', 3);
    
    $categoryDB = new CategoryDB();
    $unitDB = new UnitDB();
    $exerciseDB = new ExerciseDB();
    $memberDB = new MemberDB();
    $studentDB = new StudentsDB();
    $gradeDB = new GradesDB();

    //$f3->route('GET /', function($f3)
    //{
    //
    //    //$usernameCheck = $_SESSION['username'];
    //    //$passwordCheck = $_SESSION['password'];
    //    //if($usernameCheck == null || $passwordCheck == null){
    //    //    $f3->reroute('/login');
    //    //}
    //    $view = new View;
    //                
    //    echo $view->render('pages/login.php');
    //});
    
    $f3->route('GET /angularTest', function($f3)
    {
       echo Template::instance()->render('pages/angularTest.html');
    });
    
    $f3->route('GET /', function($f3)
    {
        $categories =  $GLOBALS['categoryDB']->allCategories();
        $students =  $GLOBALS['studentDB']->allStudents();
        $exercises =  $GLOBALS['exerciseDB']->allExercises();
        
        $f3->set('categories', $categories);
        $f3->set('students', $students);
        $f3->set('exercises', $exercises);
        echo Template::instance()->render('pages/category_page_two.html');
    });
    
            $f3->route('GET /categoryBackend', function($f3)
            {
                $usernameCheck = $_SESSION['username'];
                $passwordCheck = $_SESSION['password'];
                if($usernameCheck == null || $passwordCheck == null)
                {
                    $f3->reroute('/');
                }
                
                $categories =  $GLOBALS['categoryDB']->allCategories();
                $students =  $GLOBALS['studentDB']->allStudents();
                $exercises =  $GLOBALS['exerciseDB']->allExercises();
                
                $f3->set('categories', $categories);
                $f3->set('students', $students);
                $f3->set('exercises', $exercises);
                echo Template::instance()->render('pages/category_backend.html');
            });
    
    //$f3->route('GET /units', function($f3)
    //{
    //    $units =  $GLOBALS['unitDB']->unitsByCategory($_SESSION['categoryID']);
    //    
    //    $categoryName = $GLOBALS['categoryDB']->getCategoryByID($_SESSION['categoryID']);
    //    
    //    $f3->set('categoryName', $categoryName);
    //    $f3->set('units', $units);
    //    echo Template::instance()->render('pages/unit_page.html');
    //});
    
            $f3->route('GET /unitsBackend', function($f3)
            {
                $usernameCheck = $_SESSION['username'];
                $passwordCheck = $_SESSION['password'];
                if($usernameCheck == null || $passwordCheck == null)
                {
                    $f3->reroute('/');
                }
                
                $units =  $GLOBALS['unitDB']->unitsByCategory($_SESSION['categoryID']);
                
                $categoryName = $GLOBALS['categoryDB']->getCategoryByID($_SESSION['categoryID']);
                
                $f3->set('categoryName', $categoryName);
                $f3->set('units', $units);
                echo Template::instance()->render('pages/unit_backend.html');
            });
    
    //$f3->route('GET /exercises', function($f3)
    //{
    //    $exercises =  $GLOBALS['exerciseDB']->exercisesByUnit($_SESSION['unitID']);
    //            
    //    $unitName = $GLOBALS['unitDB']->getUnitByID($_SESSION['unitID']);
    //            
    //    $f3->set('categoryID', $_SESSION['categoryID']);
    //    $f3->set('unitName', $unitName);
    //    $f3->set('exercises', $exercises);
    //    echo Template::instance()->render('pages/exercise_page.html');
    //});
    
            $f3->route('GET /exercisesBackend', function($f3)
            {
                $usernameCheck = $_SESSION['username'];
                $passwordCheck = $_SESSION['password'];
                if($usernameCheck == null || $passwordCheck == null)
                {
                    $f3->reroute('/');
                }
                
                $exercises =  $GLOBALS['exerciseDB']->exercisesByUnit($_SESSION['unitID']);
                $unitName = $GLOBALS['unitDB']->getUnitByID($_SESSION['unitID']);
                $categoryName = $GLOBALS['categoryDB']->getCategoryByID($_SESSION['categoryID']);
                
                $f3->set('categoryName', $categoryName);
                
                $f3->set('unitID', $_SESSION['unitID']);
                $f3->set('categoryID', $_SESSION['categoryID']);
                $f3->set('unitName', $unitName);
                $f3->set('exercises', $exercises);
                echo Template::instance()->render('pages/exercise_backend.html');
            });
            
            $f3->route('POST /studentGrade', function($f3)
            {
               $GLOBALS['gradeDB']->updateGrade($_POST['student'], $_POST['exercise'], $_POST['grade']);
                $f3->reroute('/studentInfo');
            });
            
            $f3->route('POST /studentAttendance', function($f3)
            {
                $GLOBALS['studentDB']->updateStudent($_POST['student'], $_POST['hoursMissed']);
                $f3->reroute('/studentInfo');
            });
            
            $f3->route('POST /addStudent', function($f3)
            {
                $GLOBALS['studentDB']->addStudent($_POST['fName'], $_POST['lName']);
                $f3->reroute('/studentInfo');
            });
            
            //method to delete one student
            $f3->route('POST /deleteStudent', function($f3)
            {
                $GLOBALS['studentDB']->deleteOneStudent($_POST['student']);
                
                $f3->reroute('/studentInfo');
            });
            
             //method to edit students names 
            $f3->route('POST /studentEdit', function($f3)
            {
                //$GLOBALS['studentDB']->editStudentName($_POST['student'], $_POST['fName'], $_POST['lName']);
               
                $student_fName = $_POST['student_fName'];
                $student_lName = $_POST['student_lName'];
                $student_id = $_POST['student_id'];
                
                       
                       for($i = 0; $i < count($student_id); ++$i)
                        {
                            //print_r($student_fName[$i]);
                            //print_r($student_lName[$i]);
                            //print_r($student_id[$i]);
                            //print_r("  ");
                            //
;                           $GLOBALS['studentDB']->editStudentName($student_id[$i], $student_fName[$i], $student_lName[$i]);
                        
                
                        }
                
                
                $f3->reroute('/studentInfo');
            });
            
            
            $f3->route('GET /studentInfo', function($f3)
            {
                $students = $GLOBALS['studentDB']->allStudents();
                $grades = $GLOBALS['gradeDB']->allGrades();
                $exercises = $GLOBALS['exerciseDB']->allExercises();
                
                $f3->set('students', $students);
                $f3->set('grades', $grades);
                $f3->set('exercises', $exercises);
                
                
                echo Template::instance()->render('pages/student_info.html');
            });
    

           
    require("./indexRequire/brian.php");
    require("./indexRequire/kevin.php");
    require("./indexRequire/sonie.php");
    require("./indexRequire/verificationRoutes.php");

    //Run fat free
    $f3->run();
?>
