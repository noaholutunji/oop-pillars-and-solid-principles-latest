<?php

interface LessonRepositoryInterface {

  public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface {

  public function getAll()
  {
    return ["noah", "faby", "papiyinks"];
  }
}

class DbLessonRepository implements LessonRepositoryInterface {

  public function getAll()
  {
    return ["dollypizzle", "onaboss", "bangerlee"];
  }
}

$db = new DbLessonRepository();

var_dump($db->getAll());

$file= new FileLessonRepository();

var_dump($file->getAll());


//.............................

interface MaritalStatus {

  public function isMarried();
}

class Teacher implements MaritalStatus {

  public function isMarried()
  {
    return true;
  }
}

class Student implements MaritalStatus {

  public function isMarried()
  {
    return false;
  }
}

$student = new Student();
$teacher = new Teacher();

var_dump($student->isMarried());
var_dump($teacher->isMarried());