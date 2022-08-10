<?php

  class Signup {

    private $error = "";

    public function evaluate($data){

      // DATA VALIDATION
      foreach ($data as $key => $value) {

        if ($key == "staff-email") { 

          if (!preg_match('|@must.ac.ug$|', $value)){

            $this->error = $this->error . " INVALID EMAIL ADDRESS ! <br> ";
          
          }
          
        }

        if ($key == "staff-password2") {

          if (strlen($value) < 8 ) {

            $this->error = $this->error . " PASSWORD SHOULD BE MORE THAT 8 CHARACTERS <br> ";

          }
        }

        if ($key == "staff-fname") {

          if (is_numeric($value)) {

            $this->error = $this->error . " FIRST NAME SHOULD CONTAIN ALPHABETICAL LETTERS <br> ";

          }
        }

        if ($key == "staff-lname") {

          if (is_numeric($value)) {
            
            $this->error = $this->error . " LAST NAME SHOULD CONTAIN ALPHABETICAL LETTERS <br> ";

          }
        }
      }

      if ($this->error == "") {
        
        $this->create_user($data);

      }else{
        return $this->error;
      }

    }

    public function create_user($data){

      $fname = $data['staff-fname'];
      $lname = $data['staff-lname'];
  
      $uni_email = $data['staff-email'];
      $password = $data['staff-password2'];
  
      $real_password = hash("sha256", $password);
  
      $signup_query = "INSERT INTO users (fname, lname) VALUES ('$fname', '$lname')";

      $database = new Database();
  
      if ($database->saveData($signup_query)) {
  
        $id_query = "SELECT id FROM users ORDER BY id DESC LIMIT 1; ";
  
        $db = new Database();
        $data = $db->readData($id_query);
  
        if ($data) {                 
          foreach ($data as $ROW) {
  
            $name = $ROW['id'];
  
            $signin_query = "INSERT INTO login (email, password, users_id) VALUES ('$uni_email', '$real_password', '$name')";
  
            $database->saveData($signin_query);
  
          }
        }
  
        header('Location: ../pages/sign-in.php');
        
      }else {
        
        exit();
  
      }
    }

  }
?>