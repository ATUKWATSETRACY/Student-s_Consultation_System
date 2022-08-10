<?php

  class Login{

    private $error = "";

    public function auth($data){

      $email = $data['email'];
      $password = hash("sha256", $data['password']);
              
      // QUERIES TO RETRIEVE THE  DATA 
      $query = "SELECT * FROM login INNER JOIN users WHERE login.email = '$email' 
                AND login.password = '$password' AND login.users_id = users.id LIMIT 1;";

      $DB = new Database();
      $result = $DB->readData($query);

      if ($result) {

        $row = $result[0];

        if ($password === $row['password'] && $email === $row['email']) {

          session_start();

          // STUDENT EMAIL VERIFICATION
          if (preg_match('|@std.must.ac.ug$|', $email)) {

            $_SESSION['users_id'] = $row['users_id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['names'] = $row['fname'] ." ". $row['lname'];

            $log_snapshot = date("Y-m-d H:i:s");

            $log_email = $_SESSION['email'];
            $log_name = $_SESSION['names'];

            $log_query = "INSERT INTO login_logs (names, uni, whenn) VALUES ('$log_name','$log_email','$log_snapshot')" ;

            $DB->saveData($log_query);

            echo "LOGIN SUCCESSFUL";

            header("Location: ../index.php");

          } else {

            $_SESSION['lecturer_id'] = $row['users_id'];
            $_SESSION['lecturer_email'] = $row['email'];
            $_SESSION['lecturer_names'] = $row['fname'] ." ". $row['lname'];

            $log_snapshot = date("Y-m-d H:i:s");

            $log_email = $_SESSION['lecturer_email'];
            $log_name = $_SESSION['lecturer_names'];

            $log_query = "INSERT INTO login_logs (names, uni, whenn) VALUES ('$log_name','$log_email','$log_snapshot')" ;

            $DB->saveData($log_query);

            echo "LOGIN SUCCESSFUL";
            
            header("Location: ../lecturer.php");

          }

        }else {
          $this->error .= " Wrong Email or Password ";
        }

      }else {
        $this->error .= " Wrong Email or Password ";
      }

      return $this->error;

    }

  }

?>