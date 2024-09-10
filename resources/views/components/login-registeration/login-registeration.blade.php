<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login/Registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
    <style>
        html,body
        {
            height: 100%;
            background-color: #12072A;
        }
        form
        {
            background-color: white;
        }
        h3,h5
        {
            color: #12072A;
            font-family: Playwrite CU, cursive;
            font-optical-sizing: auto;
            font-style: normal;
        }
        span
        {
            background-color: #12072A !important;
        }
        hr
        {
            color: #12072A;
        }
        button
        {
            border-color: #12072A !important;
        }
    </style>
</head>
<body>
    <form action="" method="" class="border rounded p-5 w-50 m-auto mt-5">
        <h3 class="text-center pb-3">Register</h3>
        </div>
        <div class="input-group">
            <span class="input-group-text text-white">First and last name</span>
            <input type="text"  class="form-control" name="firstName" placeholder="First Name">
            <input type="text" class="form-control" name="lastName" placeholder="Last Name">
        </div>

        <div class="input-group mb-3 mt-3">
            <span class="input-group-text text-white" id="email"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>

        <div class="input-group mb-3 mt-3">
            <span class="input-group-text text-white" id="password"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>

        <div class="input-group mb-3 mt-3">
            <span class="input-group-text text-white" id="re-password"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Re-enter Password" name="re-password">
        </div>

        <div class="input-group mb-3 mt-3">
            <span class="input-group-text text-white" id="phone"><i class="fa-solid fa-phone"></i></span>
            <input type="text" class="form-control" placeholder="Phone" name="phone">
        </div>
        <div class="text-center">
            <h4 class="text-center">Upload Your Photo</h4>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
        </div>
        <hr>
        <div class="text-center">
            <h5 class="text-center pb-3">Or Sign Up With:</h5>
            <button class="btn btn-white w-25"><i class="fa-brands fa-google"></i> gmail</button>
            <button class="btn btn-white w-25"><i class="fa-brands fa-github"></i> github</button>
        </div>
    </form>

    {{-- <form action="" method="" class="border rounded p-5 w-50 m-auto mt-5">
        <h3 class="text-center pb-3">Log In</h3>
        <div class="input-group mb-3 mt-3">
            <span class="input-group-text text-white" id="email"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>

        <div class="input-group mb-3 mt-3">
            <span class="input-group-text text-white" id="password"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <hr>
        <div class="text-center">
            <h5 class="text-center pb-3">Or Login In With:</h5>
            <button class="btn btn-white w-25"><i class="fa-brands fa-google"></i> gmail</button>
            <button class="btn btn-white w-25"><i class="fa-brands fa-github"></i> github</button>
        </div>
    </form> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
