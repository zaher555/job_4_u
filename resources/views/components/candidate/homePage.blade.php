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
        .jobs > div:not(:last-of-type)
        {
            background-color: #12072A;
            box-shadow: 10px 10px 10px gainsboro;
        }
        .jobs button
        {
            color: #12072A !important;
            width: 100px;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <x-candidateNav>$slot</x-candidateNav>
    <div class="container mt-5">
        <div class="filter d-flex align-items-center justify-content-center">
            <div class="input-group w-25">
                <span class="input-group-text text-white" id="jobTitle"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="form-control" placeholder="Select Job" name="jobTitle">
            </div>
            <select class="form-select w-25 ms-4">
                <option selected>Select Location</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            <div class="input-group w-25 ms-4">
                <span class="input-group-text text-white" id="category"><i class="fa-solid fa-list"></i></span>
                <input type="text" class="form-control" placeholder="Select Category" name="category">
            </div>
        </div>
        <div class="jobs mt-4 text-white">
            <div class="rounded p-3 mt-4">
                <div class="title-salary d-flex align-items-center justify-content-between">
                    <h2>php developer</h2>
                    <p class="text-warning">$20000</p>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ...</p>
                <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i>
                <button class="btn bg-white d-block mt-4">View Job</button>
            </div>
            <div class="rounded p-3 mt-4">
                <div class="title-salary d-flex align-items-center justify-content-between">
                    <h2>php developer</h2>
                    <p class="text-warning">$20000</p>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ...</p>
                <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i>
                <button class="btn bg-white d-block mt-4">View Job</button>
            </div>
            <div class="rounded p-3 mt-4">
                <div class="title-salary d-flex align-items-center justify-content-between">
                    <h2>php developer</h2>
                    <p class="text-warning">$20000</p>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ...</p>
                <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i>
                <button class="btn bg-white d-block mt-4">View Job</button>
            </div>
            <div class="mt-5 pb-5 m-auto w-25">
                <nav class="bg-white">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
