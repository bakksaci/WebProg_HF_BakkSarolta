<?php
declare(strict_types=1);

require_once "Student.php";
require_once "Subject.php";
require_once "University.php";

$univ = new University();

$webProg = null;
$database = null;

try {
    $webProg = $univ->addSubject('101', 'Web programming');
    $database = $univ->addSubject('102', 'Database');
} catch (Exception $e) {
    echo $e->getMessage();
}

$webProg->addStudent('Kiss Lajos', '520');
$webProg->addStudent('Nagy Peter', '521');
$database->addStudent('Egy Elek', '522');
$database->addStudent('Ket Ella', '523');

$univ-> addSubject('103', 'Java programming');
$univ->addStudentOnSubject('103', new Student("524", "Harom Ella"));



$studentToDelete = new Student("Gipsz Jakab", "525");

$deleted = $webProg->deleteStudent($studentToDelete);

if ($deleted) {
    echo "A hallgató sikeresen törölve a Web programozás tantárgyból.\n";
} else {
    echo "A hallgató nem található a Web programozás tantárgyban.\n";
}

$studentNotInSubject = new Student("Minta Elemér", "526");
$deleted = $webProg->deleteStudent($studentNotInSubject);

if ($deleted) {
    echo "A hallgató sikeresen törölve a Web programozás tantárgyból.\n";
} else {
    echo "A hallgató nem található a Web programozás tantárgyban.\n";
}


$univ->print();
echo "Total number of students: " . $univ->getNumberOfStudents();