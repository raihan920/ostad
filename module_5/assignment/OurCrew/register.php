<?php
    if(($_SERVER['REQUEST_METHOD'] == "POST") && isset($_POST['register'])){
        
        if(isset($_POST['username']) && ($_POST['username']!='')){
            $userName = trim($_POST['username']) ;
        }
        if(isset($_POST['email']) && ($_POST['email']!='')){
            $userEmail = $_POST['email'];
        }
        if(isset($_POST['password']) && ($_POST['password']!='')){
            $userPassword = $_POST['password'];
        }

        //file to store user data
        $userfile = './storage/data.txt';
        $allUsers = file_get_contents($userfile);
        $allUsersDecoded = json_decode($allUsers, true);

        var_dump($allUsers);

        if(!empty($allUsersDecoded)){
            var_dump($allUsersDecoded);
        }

        if(empty($allUsersDecoded)){
            $allUsersDecoded = array();
        }

        //data to insert
        $inputData = [
            "username"=>$userName,
            "email"=>$userEmail,
            "password"=>md5($userPassword),
            "role"=>""
        ];
       
        array_push($allUsersDecoded, $inputData); //pushing data into the decoded array

        $encodedData = json_encode($allUsersDecoded);

        file_put_contents($userfile, $encodedData, FILE_APPEND | LOCK_EX);
                
        header("Location: register.php");
    }

    //file to store user data
    $userfile = './storage/data.txt';
    $allUsers = file_get_contents($userfile);
    $allUsersDecoded = json_decode($allUsers);

    // print_r($allUsers);
    // echo "<hr>";       

    // print_r($allUsersDecoded);
    // var_dump($allUsersDecoded);
    // echo "<hr>";
?>

<?php include('header.php') ?>

<div class="container">
    <main class="form-signin w-50 mx-auto my-4 bg-grey">
        <form method="POST" action="">            
            <h1 class="h3 mb-3 fw-normal my-2">Please Register </h1>
            <div class="form-floating my-2">
                <input type="text" class="form-control" name="username" id="username" placeholder="User Name" required>
                <label for="username">User Name</label>
            </div>    
            <div class="form-floating my-2">
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating my-2">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="password" required>
                <label for="password">Password</label>
            </div>
            <div class="my-2">
                <button class="btn btn-primary w-100" name="register" type="submit" value="register">Register</button>                
            </div>
            <div class="my-3">
                <span>Already have an account?</span> <a href="./login.php"> Sign in </a> 
            </div>
        </form>        
    </main>
</div>

<?php include('footer.php') ?>