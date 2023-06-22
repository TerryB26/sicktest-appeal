<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SickTest Application</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../assets/css/Floating-Button.css">
    <link rel="stylesheet" href="../assets/css/Soft-UI-Aside-Navbar.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-right: -421px;padding-right: 420px;">
                    <div>
                        <aside id="sidenav-main"
                            class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3">
                            <div class="sidenav-header"><i
                                    class="fa fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none"></i><a
                                    class="navbar-brand m-0" href=""
                                    style="margin-right: -13px;padding-right: 44px;"><img
                                        class="navbar-brand-img h-100 w-15"
                                        src="../assets/img/medical-icon-png-6589.png" style="margin-right: -6px;"><span
                                        class="ms-2 font-weight-bolder"
                                        style="font-family: 'Alegreya Sans SC', sans-serif;font-size: 20px;padding-left: 0px;margin-right: 10px;padding-right: 20px;"><span
                                            style="color: rgb(203, 12, 159);">Sick Test Management</span></span></a>
                                <hr class="horizontal dark mt-0">
                                <div id="sidenav-collapse-main" class="collapse navbar-collapse w-auto">
                                    <ul class="navbar-nav">
                                        <li class="nav-item"><a class="nav-link"
                                                href={{ Route('Student_Dashboard') }}><i
                                                    class="fas fa-home icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center"></i><span
                                                    class="nav-link-text ms-1"
                                                    style="font-family: 'Alegreya Sans SC', sans-serif;">Dashboard<br></span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href={{ Route('Student_History') }}><i
                                                    class="icon-calendar icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i><span
                                                    class="nav-link-text ms-1"
                                                    style="font-family: 'Alegreya Sans SC', sans-serif;">Previous
                                                    Applications</span></a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href={{ Route('Student_Application') }}><i
                                                    class="icon-note icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i><span
                                                    class="nav-link-text ms-1"
                                                    style="font-family: 'Alegreya Sans SC', sans-serif;">Apply For
                                                    Sicktest</span></a></li>

                                        <li class="nav-item mt-3"><span
                                                class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6"
                                                style="font-family: 'Alegreya Sans SC', sans-serif;">User
                                                Management</span></li>
                                        <li class="nav-item"><a class="nav-link active"
                                                href={{ Route('Student_Profile') }}><i
                                                    class="icon-wrench text-light active icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i><span
                                                    class="nav-link-text ms-1"
                                                    style="font-family: 'Alegreya Sans SC', sans-serif;">Profile<br></span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href={{ Route('Student_Signout') }}><i
                                                    class="icon-power icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i><span
                                                    class="nav-link-text ms-1"
                                                    style="font-family: 'Alegreya Sans SC', sans-serif;">Sign
                                                    Out</span></a></li>
                                        <li>
                                            <div>
                                                <div class="btn-toolbar"
                                                    style="margin-top: 20px;margin-bottom: 10px;margin-left: 20px;">
                                                    <div class="btn-group btn-group-sm" role="group"><button
                                                            onclick="window.history.back()"
                                                            class="btn btn-primary border rounded-pill border-light shadow"
                                                            type="button"
                                                            style="background: var(--bs-btn-color);border-color: var(--bs-pink);margin-right: 15px;"><span
                                                                style="color: var(--bs-navbar-active-color);"><i
                                                                    class="icon ion-arrow-return-left"
                                                                    style="margin-top: 0px;"></i>&nbsp;Go
                                                                Back</span></button><button
                                                            onclick="window.history.forward()"
                                                            class="btn btn-primary border rounded-pill border-light shadow"
                                                            type="button"
                                                            style="background: var(--bs-btn-color);border-color: var(--bs-pink);"><span
                                                                style="color: var(--bs-navbar-active-color);"><i
                                                                    class="icon ion-arrow-return-right"
                                                                    style="margin-top: 0px;"></i>&nbsp;Go
                                                                Forward</span></button></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-6" style="padding-right: 0px;margin-right: 0px;">
                    <div>
                        <h1 class="text-center"
                            style="margin-top: 30px;font-family: 'Alegreya Sans SC', sans-serif;font-weight: bold;color: rgb(203,12,159);">
                            User Profile</h1>
                        <hr>
                    </div>

                    <div style="padding-left: 0px;margin-top: 50px;margin-left: 0px;">

                        <form
                            class="text-center d-inline-block float-end justify-content-center align-items-center align-content-center">
                            <div class="input-group text-center"
                                style="padding-bottom: 20px;padding-right: 0px;margin-right: 150px;height: 60px;width: 300px;">
                                <span class="input-group-text"><i class="icon-user text-muted"></i></span><input
                                    class="form-control form-control-sm" type="text"
                                    style="padding-left: 10px;padding-right: 10px;padding-bottom: 0px;padding-top: 0px;"
                                    placeholder={{ $user['name'] }} name="name" disabled="">
                            </div>
                            <div class="input-group" style="padding-bottom: 20px;height: 60px;width: 300px;"><span
                                    class="input-group-text"><i class="icon-user text-muted"></i></span><input
                                    class="form-control" type="text"
                                    style="padding-left: 10px;padding-right: 10px;padding-bottom: 0px;padding-top: 0px;"
                                    placeholder={{ $user['surname'] }} name="surname" disabled=""></div>
                            <div class="input-group" style="padding-bottom: 20px;height: 60px;width: 300px;"><span
                                    class="input-group-text"><i
                                        class="far fa-address-card text-muted"></i></span><input class="form-control"
                                    type="number" name="student_Number" placeholder={{ $user['studentId'] }}
                                    disabled=""></div>
                            <div class="input-group" style="padding-bottom: 20px;height: 60px;width: 300px;"><span
                                    class="input-group-text"><i class="icon-envelope text-muted"></i></span><input
                                    class="form-control" type="email"
                                    placeholder={{ $user['studentId'] . '@tut4life.ac.za' }} name="user_Email"
                                    disabled=""></div>
                            <div class="input-group" style="padding-bottom: 20px;height: 60px;width: 300px;"><span
                                    class="input-group-text"><i class="icon-envelope text-muted"></i></span><input
                                    class="form-control" type="email"
                                    placeholder={{ $user['courses'][0]['name'] }} name="user_course"
                                    disabled=""></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
</body>

</html>
