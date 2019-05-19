<?php

include('model/Course.php');
include('model/Assignment.php');

class StudentController {

    public function home() {
        $user = $_SESSION['user'];
        $courseModel = new Course();

        $my_courses = $courseModel->findStudentCourse($user['id']);
        var_export($my_courses);
        include('view/student/home.php');

    }

    public function my_assignments() {

        $user = $_SESSION['user'];
        $assignmentModel = new Assignment();

        $my_assignments = $assignmentModel->findStudentAssignment($user['id']);

        include('view/student/my_assignments.php');

    }

    public function download_template() {
        $assignmentId = $_REQUEST['id'];

        $assignmentModel = new Assignment();
        $my_assignment = $assignmentModel->getAssignment($assignmentId);

        header("Content-Type:application/octet-stream");
        header("Content-Disposition:attachment;filename=".$my_assignment['attachment']);
        $templateContent = file_get_contents("../storage/uploads/template/" . $my_assignment['attachment']);
        echo $templateContent;

    }
}