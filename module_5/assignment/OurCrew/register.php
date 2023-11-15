<?php include('header.php') ?>
<div class="container">
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="">            
            <h1 class="h3 mb-3 fw-normal">Please Register </h1>username
            <div class="form-floating">
                <input type="text" class="form-control" name="username" id="username" placeholder="User Name">
                <label for="username">User Name</label>
            </div>    
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="Password" id="floatingPassword" placeholder="Password">
                <label for="Password">Password</label>
            </div>
            <div>
                <span>Already have an account?</span> <a href="./login.php"><button class="btn btn-primary py-2" type="submit">Sign in</button></a> 
            </div>
            
            <p class="mt-5 mb-3 text-body-secondary"><?=date('Y') ?></p>
        </form>        
    </main>
</div>

<?php include('footer.php') ?>