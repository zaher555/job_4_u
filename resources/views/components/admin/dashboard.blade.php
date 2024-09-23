<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
    <style>
        body,html
        {
            height: 100%;
        }
        .sidebar
        {
           background-color: #12072A;
           height: 100%;
        }
        .card
        {
            background-color: #12072A;
        }
    </style>
</head>
<body>
    <div class="d-flex h-100">
        <x-sidebar>$slot</x-sidebar>
        <div class="content ms-5 w-100 mt-5 justify-content-center d-flex">
            <div class="container justify-content-center">
                <div class="row gy-5">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="users card text-white w-50 d-flex justify-content-center align-items-center p-3">
                            <h1>Users</h1>
                            <p>
                                <i class="fa-solid fa-users"></i>
                                <span>100</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="Employers card text-white w-50 d-flex justify-content-center align-items-center p-3">
                            <h1>Employers</h1>
                            <p>
                                <i class="fa-solid fa-users"></i>
                                <span>100</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="Employees card text-white w-50 d-flex justify-content-center align-items-center p-3">
                            <h1>Employees</h1>
                            <p>
                                <i class="fa-solid fa-users"></i>
                                <span>100</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="Jobs card text-white w-50 d-flex justify-content-center align-items-center p-3">
                            <h1>Jobs</h1>
                            <p>
                                <i class="fa-solid fa-users"></i>
                                <span>100</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
