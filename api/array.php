<?php 

    $TeamMembers = array(
        new Student("BSCS51F22S043", "NajeeUllah"),
        new Student("BSCS51F22S050" , "Ahmad Khan"),
      );

      final class Student{
        public $name;
        public $rollNo;

        function __construct($rollNo, $name){
          $this->name = $name;
          $this->rollNo = $rollNo;
        }
      }
