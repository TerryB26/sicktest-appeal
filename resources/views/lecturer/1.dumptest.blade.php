<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SickTest Application</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Floating-Button.css">
    <link rel="stylesheet" href="assets/css/Soft-UI-Aside-Navbar.css">
</head>

<body>
    <section>
        <div class="container justify-content-center align-items-center align-content-center" style="padding: 40px;">
            <div class="row">
                <div class="col" style="padding-right: 150px;padding-left: 150px;">
                    <div class="border rounded-pill">
                        <h2 class="display-6 text-center"
                            style="font-family: 'Alegreya Sans SC', sans-serif;padding-top: 10px;padding-bottom: 0px;margin-bottom: 0px;">
                            User Registration</h2>
                        <p class="text-center text-muted" style="font-family: 'Alegreya Sans SC', sans-serif;">Sick Test
                            Management</p>
                    </div>
                </div>
            </div>
            <div class="row text-center d-flex align-content-center" style="margin-top: 40px;">
                <div class="col text-center d-flex justify-content-center align-items-center align-content-center align-self-center"
                    style="padding-top: 100px;">
                    <form style="font-family: 'Alegreya Sans SC', sans-serif;">
                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="far fa-address-card text-muted"></i></span><input
                                class="form-control" type="text" placeholder="Name" name="user_name"></div>
                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="far fa-address-card text-muted"></i></span><input
                                class="form-control" type="text" name="user_lname" placeholder="Surname"></div>
                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="far fa-address-card text-muted"></i></span><input
                                class="form-control" type="number" name="student_Number" placeholder="Student Number">
                        </div>
                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-envelope text-muted"></i></span><input
                                class="form-control" type="email" placeholder="User@email.com" name="user_Email">
                        </div>
                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-question text-muted"></i></span><select
                                class="form-select" name="user_type">
                                <optgroup label="User Type">
                                    <option value="0" selected="">User Type</option>
                                    <option value="1">Student</option>
                                    <option value="2">Lecture</option>
                                    <option value="3">Admin</option>
                                </optgroup>
                            </select></div><button
                            class="btn btn-outline-success border rounded border-success shadow-sm" type="submit"
                            style="margin-right: 2px;width: 150px;border-color: var(--bs-btn-disabled-border-color);">Register</button>
                        <p style="padding-top: 15px;">Already have an account?<a href="google.com">&nbsp;Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>
