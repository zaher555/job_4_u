<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Job</title>
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
        .first
        {
            background-color: #12072A !important;
        }
        button
        {
            font-weight: bolder !important;
        }
        label
        {
            font-weight: bolder;
            margin-bottom: 0 !important;
        }
    </style>
</head>
<body>
    <form action="" method="" class="border rounded p-5 w-50 m-auto mt-5">
        <h3 class="text-center pb-3">Update Job</h3>
        <div class="mb-3">
            <label for="jobTitle" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="jobTitle" placeholder="Job Title" name="jobTitle" value="">
          </div>

          <div class="mb-3">
            <label for="jobDescription" class="form-label">Job Description</label>
            <input type="text" class="form-control" id="jobDescription" placeholder="Job Description" name="jobDescription" value="">
          </div>

          <div class="mb-3">
            <label for="requiredSkills" class="form-label">Required Skills</label>
            <input type="email" class="form-control" id="requiredSkills" placeholder="Required Skills" name="requiredSkills" value="">
          </div>

          <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" placeholder="Location" name="location" value="">
          </div>

          <div class="mb-3">
            <label for="jobType" class="form-label">Job Type</label>
            <input type="text" class="form-control" id="jobType" placeholder="Job Type" name="jobType" value="">
          </div>

          <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <input type="text" class="form-control" id="level" placeholder="Level" name="level" value="">
          </div>
          <div class="mb-3">
            <label for="workLocation" class="form-label">Work Location</label>
            <input type="text" class="form-control" id="workLocation" placeholder="Work Location" name="workLocation" value="">
          </div>
          <div class="mb-3">
            <label for="salary" class="form-label d-block">Salary</label>
            <input type="number" class="form-control w-75 d-inline-block" id="salary" placeholder="Salary" name="salary" name="salary" value=""> EGP
          </div>
          <div class="buttons text-center">
            <button type="submit" class="btn text-white first">Update</button>
            <button type="submit" class="btn btn-danger text-white">Cancel</button>
          </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

