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

            @if (Session::has('error'))
                <div class="alert alert-danger border rounded-pill alert-dismissible" role="alert"><button
                        class="btn-close" type="button" aria-label="Close"
                        data-bs-dismiss="alert"></button><span><strong>{{ Session::get('error') }}</strong></span>
                </div>
            @endif


            <div class="row text-center d-flex align-content-center" style="margin-top: 40px;">
                <div class="col text-center d-flex justify-content-center align-items-center align-content-center align-self-center"
                    style="padding-top: 100px;">

                    <form style="font-family: 'Alegreya Sans SC', sans-serif;" action="" method="POST">
                        @csrf
                        <div class="input-group"
                            style="padding-bottom: 20px;padding-right: 0px;margin-right: 150px;height: 60px;"><span
                                class="input-group-text"><i class="icon-user text-muted"></i></span><input
                                class="form-control" type="text"
                                style="padding-left: 10px;padding-right: 10px;padding-bottom: 0px;padding-top: 0px;"
                                placeholder="Name" name="name"></div>

                        @error('name')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-user text-muted"></i></span><input
                                class="form-control" type="text"
                                style="padding-left: 10px;padding-right: 10px;padding-bottom: 0px;padding-top: 0px;"
                                placeholder="Surname" name="surname"></div>

                        @error('surname')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="far fa-address-card text-muted"></i></span><input
                                class="form-control" type="number" name="student_Number" placeholder="Student or Lecturer Number">
                        </div>

                        @error('student_Number')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-envelope text-muted"></i></span><input
                                class="form-control" type="email" placeholder="@gmail.com, @yahoo.com or @icloud.com" name="user_Email">
                        </div>

                        @error('user_Email')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-question text-muted"></i></span><select
                                class="form-select" name="user_type">
                                <optgroup label="User Type">
                                    <option value selected="">Select User Type</option>
                                    <option value="student">Student</option>
                                    <option value="lecturer">Lecturer</option>

                                </optgroup>
                            </select></div>


                        @error('user_type')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-question text-muted"></i></span><select
                                class="form-select" name="course">
                                <optgroup label="Course Type">
                                    <option value selected="">Choose Your Course</option>

                                    @foreach ($courses as $course)
                                    <option value={{ $course['courseId'] }}>{{ $course['name'] }}</option>
                                    @endforeach


                                </optgroup>
                            </select></div>

                            @error('course')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror


                        <button class="btn btn-outline-success border rounded border-success shadow-sm" type="submit"
                            style="margin-right: 2px;width: 150px;border-color: var(--bs-btn-disabled-border-color);">Register</button>
                        <p style="padding-top: 15px;">Already have an account?<a class="link-primary"
                                href={{ Route('Login') }}>  Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>
