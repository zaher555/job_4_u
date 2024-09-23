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
        button
        {
            font-weight: bolder !important;
        }
        .first
        {
            background-color: #12072A;
        }
        .first:hover
        {
            background-color: #12072A;
        }
        th
        {
            text-align: center;
            background-color: #12072A !important;
            color: white !important;
        }
        tr
        {
            text-align: center;
        }
        .post
        {
            background-color: #12072A;
            color: white;
        }
    </style>
</head>
<body>
    <x-employer-nav>$slot</x-employer-nav>
    <div class="container mt-5">
        <table class="table mt-2">
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Required Level</th>
                    <th>Total Applicants</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>php</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td class="d-flex justify-content-center">
                        <button class="btn first text-white">View</button>
                        <button class="btn btn-danger ms-2">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
