<?php
    require 'dbh.inc.php';
                                                            //check if user click log in
try {
    if (isset($_POST['login-submit'])) {
                                                            // get connected to db
                                                            // get information that users is trying to admit give user option to use either id or mail
        $username = $_POST['username'];
        $password = $_POST['password'];
        
                                                            //check if evrything is filled up
        if (empty($username) || empty($password)) {
            $message = "Empty password or username";
            header("Location: ../index.php?error=emptyfields");
            exit();
        }
                                                            //check if users dates match with database one with placeholderd for security measurments
        else if($username!="Admin"){
            $sql = "SELECT * FROM usermaster INNER JOIN client ON usermaster.clientId = client.clientId WHERE username=:username";
                                                            //create statemt refer to conn from dbh.inc.php
            $stmt = $conn -> prepare($sql);
                                                            //check if stmt works
            if (!$stmt) 
            {
                header("Location: ../index.php?error=sqlerror");
                exit();
            } 
            else 
            {
                                                            //take infromation that user gave us and use it to pass it to db and see if there is a match so they can log in log in
                                                            // execute it
                $stmt -> execute(
                    array(
                        'username' => $username,
                    )
                );
                $count = $stmt->rowCount();
                    if($count > 0)  
                    {  
                        $result= $stmt->fetch(PDO::FETCH_ASSOC);
                        if (password_verify($password, $result['password'])) {
                            session_start();
                            $_SESSION["username"] = $_POST["username"];  
                            $_SESSION["email"] = $result['email'];
                            $_SESSION["companyDetails"] = $result['companyDetails'];
                            $_SESSION["margin"] = $result["margin"];
                            header("Location: ../index.php?login=success");                         
                        }
                    }  
                 else  
                    {  
                        $message = "Wrong password or username";
                        echo "<script>window.alert('$message');</script>";

                        echo '<script>window.location="../index.php"</script>';

                        exit();

                    }  
            }
        }
                                                                        //STATEMTN FOR ADMIN ONLY
        else{$sql = "SELECT * FROM usermaster WHERE username=:username";
            $stmt = $conn -> prepare($sql);
            if (!$stmt) 
            {
                header("Location: ../index.php?error=sqlerror");
                exit();
            } 
            else 
            {
                $stmt -> execute(
                    array(
                        'username' => $username,
                    )
                );
                $count = $stmt->rowCount();
                    if($count > 0)  
                    {  
                        $result= $stmt->fetch(PDO::FETCH_ASSOC);
                        if (password_verify($password, $result['password'])) {
                            session_start();
                            $_SESSION["username"] = $_POST["username"];  
                            $_SESSION["email"] = $result['email'];
                            $_SESSION["companyDetails"] = $result['companyDetails'];
                            header("Location: ../index.php?login=success");                         
                        }
                    }  
                 else  
                    {  
                        $message = "Wrong password or username";
                        echo "<script>window.alert('$message');</script>";

                        echo '<script>window.location="../index.php"</script>';

                        exit();

                    }  
            }
        }

        }
    } 

catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
?>