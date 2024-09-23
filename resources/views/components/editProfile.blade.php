<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
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
        h1
        {
            color: #12072A;
            font-family: Playwrite CU, cursive;
            font-optical-sizing: auto;
            font-style: normal;
        }
        button
        {
            background-color: #12072A;
        }

    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 justify-content-center d-flex">
                <div class="bg-white p-5 rounded">
                    <h1 class="text-center pb-5">Edit Profile</h1>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" value="">
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <input type="text" class="form-control" id="bio" placeholder="Your Bio" name="bio" value="">
                    </div>
                    <div class="mb-3">
                        <label for="aboutMe" class="form-label">About Me</label>
                        <input type="text" class="form-control" id="aboutMe" placeholder="About Me" name="aboutMe" value="">
                    </div>
                    <div class="mb-3">
                        <label for="university" class="form-label">University</label>
                        <input type="text" class="form-control" id="university" placeholder="University" name="university" value="">
                    </div>
                    <div class="mb-3">
                        <label for="degree" class="form-label">Degree</label>
                        <input type="text" class="form-control" id="degree" placeholder="Degree" name="degree" value="">
                    </div>
                    <div class="mb-3">
                        <label for="major" class="form-label">Major</label>
                        <input type="text" class="form-control" id="major" placeholder="Major" name="major" value="">
                    </div>
                    <div class="mb-3">
                        <label for="scientificGrade" class="form-label">Scientific Grade</label>
                        <input type="text" class="form-control" id="scientificGrade" placeholder="Scientific Grade" name="scientificGrade" value="">
                    </div>
                    <div class="mb-3">
                        <label for="start" class="form-label">Start</label>
                        <input type="date" class="form-control" id="Start" placeholder="start" name="start" value="">
                    </div>
                    <div class="mb-3">
                        <label for="end" class="form-label">End</label>
                        <input type="date" class="form-control" id="end" placeholder="End" name="end" value="">
                    </div>
                    <div class="mb-3">
                        <label for="skills" class="form-label">Skills</label>
                        <input type="text" class="form-control" id="skills" placeholder="Skills" name="skills" value="">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" value="">
                    </div>
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">Linkedin</label>
                        <input type="url" class="form-control" id="linkedin" placeholder="Linkedin" name="linkedin" value="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="">
                    </div>
                    <div class="mb-3">
                        <label for="profile" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" id="profile" placeholder="Profile Image" name="profile" value="">
                    </div>
                    <button class="m-auto text-white rounded pt-2 pb-2 ps-4 pe-4">Update</button>
                    <button class="m-auto text-white rounded pt-2 pb-2 ps-4 pe-4"">Cancel</button>
                </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
