<!DOCTYPE html>
<html>
  <head>
    <title> PHP is an Object-Oriented Programming Language </title>
  </head>
<body>
  <p>
    <?php
    class Student {
      private $firstName;
      private $lastName;
      private $Id;

      // contructor
      public function __construct($firstname, $lastname, $id) {
          $this->firstName = $firstname;
          $this->lastName = $lastname;
          $this->Id = $id;
      }

      // return function for displaying info on screen
      public function newStudent() {
          return " New Student is " . $this->get_fname() . " " . $this->get_lname();
      }

      // first name set
      public function set_fname($new_fname) {
          $this->firstName = $new_fname;
      }

      // first name get
      public function get_fname() {
          return $this->firstName;
      }

      // last name set
      public function set_lname($new_lname) {
          $this->lastName = $new_lname;
      }

      // last name get
      public function get_lname() {
          return $this->lastName;
      }

      // stu# set
      public function set_id($new_id) {
          $this->Id = $new_id;
      }

      // stu# get
      public function get_id() {
          return $this->Id;
      }         
    }

    $stobj = new Student('Mak', 'Irwin', 2130219387892157894372502);
    echo $stobj->newStudent(); 
    ?>
    </p>
  </body>
</html>