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
            /* background-color: black; */
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
        .card
        {
            background-color: #f4f4f4;
            border:3px solid #12072A !important;

        }
        .image
        {
            overflow: hidden;
        }
        button
        {
            background-color: #12072A;
        }
    </style>
</head>
<body>
    <x-candidateNav>$slot</x-candidateNav>
    <div class="container mt-5 pb-5">
        <div class="row">
            <div class="col-12">
                <div class="about">
                    <div class="card mb-3 border rounded pt-3 pb-3 ps-3">
                        <div class="row g-0">
                          <div class="col-md-3 d-flex align-items-center justify-content-center">
                            <div class="image rounded-circle w-50">
                                <img src="profile.jpg" class="img-fluid" alt="...">
                            </div>
                          </div>
                          <div class="col-md-9">
                            <div class="card-body">
                              <h5 class="card-title">zaher elsersy</h5>
                              <p class="card-text">Full stack php developer</p>
                              <p class="card-text"><small class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda cupiditate rem pariatur. Veniam laborum, delectus natus quo labore pariatur saepe impedit amet veritatis ipsam cum odit doloribus sed, porro ut.</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-12">
                <div class="education">
                    <div class="card mb-3 border rounded pt-3 pb-3 ps-3">
                        <h2 class="text-warning">Education</h2>
                        <p>University: cairo</p>
                        <p>Faculty: computer science</p>
                        <p>Degree: BSc</p>
                        <p>Major: IT</p>
                        <p>Scientific Grade: Very Good</p>
                        <p>Start: 1/1/2017</p>
                        <p>End: 1/1/2021</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="skills">
                    <div class="card mb-3 border rounded pt-3 pb-3 ps-3">
                        <h2 class="text-warning">Skills</h2>
                        <div class="d-flex flex-wrap">
                            <p class="bg-white text-dark pt-2 pb-2 ps-3 pe-3 rounded ms-3">HTML</p>
                            <p class="bg-white text-dark pt-2 pb-2 ps-3 pe-3 rounded ms-3">HTML</p>
                            <p class="bg-white text-dark pt-2 pb-2 ps-3 pe-3 rounded ms-3">HTML</p>
                            <p class="bg-white text-dark pt-2 pb-2 ps-3 pe-3 rounded ms-3">HTML</p>
                            <p class="bg-white text-dark pt-2 pb-2 ps-3 pe-3 rounded ms-3">HTML</p>
                            <p class="bg-white text-dark pt-2 pb-2 ps-3 pe-3 rounded ms-3">HTML</p>
                            <p class="bg-white text-dark pt-2 pb-2 ps-3 pe-3 rounded ms-3">HTML</p>
                            <p class="bg-white text-dark pt-2 pb-2 ps-3 pe-3 rounded ms-3">HTML</p>
                            <p class="bg-white text-dark pt-2 pb-2 ps-3 pe-3 rounded ms-3">HTML</p>
                            <p class="bg-white text-dark pt-2 pb-2 ps-3 pe-3 rounded ms-3">HTML</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="contact">
                    <div class="card mb-3 border rounded pt-3 pb-3 ps-3">
                        <h2 class="text-warning">Contact</h2>
                        <div class="d-flex justify-content-center flex-wrap">
                            <p class="ms-3">phone icon: 01033306585</p>
                            <p class="ms-3">linkedin: link</p>
                            <p class="ms-3">Email: link</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="d-block ps-4 pe-4 pt-2 pb-2 m-auto text-white rounded">Edit Profile</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
