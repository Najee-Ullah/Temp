<?php 

    $TeamMembers = array(
        new Student("BSCS51F22S043", "NajeeUllah"),
      );

      final class Student{
        public $name;
        public $rollNo;

        function __construct($rollNo, $name){
          $this->name = $name;
          $this->rollNo = $rollNo;
        }
      }