<!DOCTYPE html>
<html lang="en">

<head>
    <title>Appointment</title>
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>


<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Appointment form</h3>
            </div>
            <form action="/insertintoappointmenttable">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control" placeholder="Enter Date">
                    </div>
                    <div class="col-md-6">
                        <input type="time" class="form-control" placeholder="Enter Time">
                    </div>
                    <div class="col-12">
                        <select class="form-select">
                            <option selected>Doctor List</option>
                            <option value="1">Dr Mohamed Ali</option>
                            <option value="2">Dr Mohamed Eltayeb</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12 mt-5">                        
                        <button type="submit" class="btn btn-primary float-end">Book Appointment</button>
                        <button type="button" class="btn btn-outline-secondary float-end me-2">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

        <!-- COMMON SCRIPTS -->
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/common_scripts.min.js"></script>
        <script src="js/velocity.min.js"></script>
        <script src="js/common_functions.js"></script>

        <!-- Wizard script with branch -->
        <script src="js/wizard_with_branch.js"></script>

</body>