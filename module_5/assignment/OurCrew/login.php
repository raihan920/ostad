<?php include('header.php') ?>
<?php


?>
<div class="container">
    <main class="form-signin w-50 mx-auto my-4 bg-grey">
        <form method="POST" action="">            
            <h1 class="h3 mb-3 fw-normal my-2">Login </h1>             
            <div class="form-floating my-2">
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating my-2">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="password">
                <label for="password">Password</label>
            </div>
            <div class="my-2">
                <button class="btn btn-primary w-100" name="register" type="submit">Login</button>                
            </div>
            <div class="my-3">
                <span>Don't have an account?</span> <a href="./register.php"> Register here </a> 
            </div>
        </form>        
    </main>
</div>
<?php include('footer.php') ?>