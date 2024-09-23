<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Application</title>
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
            background-color: #12072A !important;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 justify-content-center d-flex">
                <form action="" method="" class="border rounded p-5">
                    <h3 class="text-center pb-3">Application</h3>
                    <div class="input-group">
                        <span class="input-group-text text-white"><i class="fa-solid fa-user"></i></span>
                        <input type="text"  class="form-control" name="name" placeholder="Name">
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text text-white" id="email"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text text-white" id="education"><i class="fa-solid fa-school"></i></span>
                        <input type="text" class="form-control" placeholder="Education" name="education">
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text text-white" id="experience"><i class="fa-solid fa-laptop"></i></span>
                        <input type="number" class="form-control" placeholder="Years Of Experience" name="experience">
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text text-white" id="expectedSalary"><i class="fa-solid fa-sack-dollar"></i></span>
                        <input type="number" class="form-control" placeholder="Expected Salary" name="expectedSalary">
                    </div>
                    <hr>
                    <div class="text-center">
                        <h5 class="text-center pb-3">Or Upload Your Resume</h5>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02">
                        </div>
                    </div>
                    <button type="submit" class="btn text-white d-block m-auto">submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
