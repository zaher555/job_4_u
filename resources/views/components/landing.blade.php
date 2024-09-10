<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
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
        nav a:hover
        {
            color: rgb(255 193 7) !important;
        }
        .landing
        {
            background-repeat: no-repeat;
            height: 100vh;
            position: relative;
        }
        .landing::after
        {
            content: "";
            width: 100%;
            height: 100%;
            background-color: gray;
            top: 0;
            left: 0;
            z-index: 2;
            position: absolute
        }
        .landing .content
        {
            z-index: 3;
            position: absolute;
        }
        .landing button
        {
            width: 100px;
            font-weight: bolder
        }
        .landing button:last-of-type:hover
        {
            background-color: transparent !important;
            border-color: rgb(255 193 7);
            color: white !important;

        }
        .landing button:first-of-type
        {
            background-color: #12072A;
        }
        .landing button:first-of-type:hover
        {
            background-color: transparent;
            border-color: #12072A;
        }
        .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the video covers the div */
            z-index: 3; /* Sends the video behind the content */
        }
    </style>
</head>
<body>
    <x-publicNavbar>$slot</x-publicNavbar>
    <div class="landing text-center d-flex justify-content-center align-items-center">
        <video class="background-video" autoplay loop muted>
            <source src="https://cdn.pixabay.com/video/2016/08/22/4723-179738625_tiny.mp4" type="video/mp4">
        </video>
        <div class="content m-auto">
            <h2 class="text-white">I Want To:</h2>
            <button class="btn text-white rounded pt-1 pb-1">Hire</button>
            <button class="btn text-dark rounded pt-1 pb-1 bg-warning">Work</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
