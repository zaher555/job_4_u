<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
    <style>
        html,body
        {
            height: 100%;
        }
        nav
        {
            background-color: #12072A !important;
        }
        .logout
        {
            background-color: #12072A;
            text-decoration: none;
            font-weight: bolder;
        }
        .filter span
        {
            background-color: #12072A;
        }
        .filter input,select
        {
            box-shadow: 5px 5px 10px gainsboro;
        }
        .jobs > div
        {
            background-color: #12072A;
            box-shadow: 10px 10px 10px gainsboro;
        }
        .jobs button:first-of-type
        {
            color: #12072A !important;
            width: 150px;
            font-weight: bolder;
        }
        .jobs button:last-of-type
        {
            background-color:  rgb(255 193 7) !important;
            width: 150px;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <x-candidateNav>$slot</x-candidateNav>
    <div class="container mt-5 pb-5">
        <div class="jobs mt-4 text-white">
            <div class="rounded p-3 mt-4">
                <div class="title-salary d-flex align-items-center justify-content-between pb-5">
                    <h2 class="">php developer</h2>
                    <p class="text-warning">$20000</p>
                </div>
                <div class="pb-3">
                    <h5 class="text-warning">Job Description</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus minus nam numquam sint, esse quos, non deserunt vel cum quidem ipsam blanditiis placeat veritatis rem iste id commodi distinctio nihil.</p>
                </div>
                <hr>
                <div class="pb-3">
                    <h5 class="text-warning">Required Skills</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus minus nam numquam sint, esse quos, non deserunt vel cum quidem ipsam blanditiis placeat veritatis rem iste id commodi distinctio nihil.</p>
                </div>
                <hr>
                <p><h5 class="text-warning d-inline-block">Location:</h5> cairo</p>
                <p><h5 class="text-warning d-inline-block">Type:</h5> full-time</p>
                <p><h5 class="text-warning d-inline-block">Level:</h5> senior</p>
                <p><h5 class="text-warning d-inline-block">Work-Location:</h5> on-site</p>
                <div class="">
                    <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i>
                </div>
                <button class="btn bg-white mt-4">Apply Now</button>
                <button class="btn text-dark mt-4">Back</button>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
