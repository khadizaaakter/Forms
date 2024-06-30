<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Submit Your Form</h2>
        <form method="POST" action="{{ route('submit.form') }}">
            @csrf
            <div class="row">
                <div class="col-25">
                    <label for="problemstatement">Problem Statement</label>
                </div>
                <div class="col-75">
                    <input type="text" id="problemstatement" name="problemstatement" placeholder="Enter problem statement" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="serialno">Serial No</label>
                </div>
                <div class="col-75">
                    <input type="text" id="serialno" name="serialno" placeholder="Enter serial no" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="active">Active</label>
                </div>
                <div class="col-75">
                    <input type="text" id="active" name="active" placeholder="Enter status" required>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
