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
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/Floating-Button.css">
    <link rel="stylesheet" href="../assets/css/Soft-UI-Aside-Navbar.css">
</head>

<body>
    <section>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="margin-right: -421px;padding-right: 420px;">
                        <div>
                            <aside id="sidenav-main-1"
                                class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3">
                                <div class="sidenav-header"><i
                                        class="fa fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none"></i><a
                                        class="navbar-brand m-0" href=""
                                        style="margin-right: -13px;padding-right: 44px;"><img
                                            class="navbar-brand-img h-100 w-15"
                                            src="../assets/img/medical-icon-png-6589.png"
                                            style="margin-right: -6px;"><span class="ms-2 font-weight-bolder"
                                            style="font-family: 'Alegreya Sans SC', sans-serif;font-size: 20px;padding-left: 0px;margin-right: 10px;padding-right: 20px;"><span
                                                style="color: rgb(203, 12, 159);">Sick Test Management</span></span></a>
                                    <hr class="horizontal dark mt-0">

                                    <ul class="navbar-nav">
                                        <li class="nav-item"><a class="nav-link active"
                                                href={{ Route('Student_Dashboard') }}><i
                                                    class="fas fa-home active icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center"></i><span
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
                                        <li class="nav-item"><a class="nav-link" href={{ Route('Student_Profile') }}><i
                                                    class="icon-wrench icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i><span
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
                            </aside>
                        </div>
                    </div>


                    <div class="col-md-6" style="padding-right: 0px;margin-right: 0px;margin-left: 200px;">
                        <div class="text-center">
                            <h1 class="text-center"
                                style="margin-top: 30px;font-family: 'Alegreya Sans SC', sans-serif;font-weight: bold;color: rgb(203,12,159);">
                                Dashboard</h1>

                            <hr>

                        </div>


                        <div style="padding-left: 0px;margin-top: 50px;margin-left: 0px;">
                            <div class="row">
                                <div class="col"
                                    style="margin-top: 0px;margin-right: 0px;padding-right: 0px;padding-left: 0px;margin-left: -19px;">
                                    <div>
                                        <lottie-player src="../assets/js/77622-remote-work-management.json"
                                            mode="normal" loop="" autoplay=""></lottie-player>
                                    </div>
                                </div>

                                <div class="col" style="margin-left: 25px;">
                                    <h1 class="text-start"
                                        style="text-align: left;font-family: 'Alegreya Sans SC', sans-serif;">Hey,
                                        {{ $user['name'] }} {{ $user['surname'] }} <br>

                                        <span class="text-muted" style="margin-right: 150px;font-size: 25px;">
                                            {{ $user['courses'][0]['name']." Student" }}
                                        </span>

                                        <a href={{ Route('Student_History') }}>
                                            <button class="btn btn-outline-primary border rounded-pill shadow"
                                                type="button">Application History</button>
                                        </a>
                                        <a href={{ Route('Student_Application') }}>
                                            <button class="btn btn-outline-primary border rounded-pill shadow"
                                                type="button" style="margin-right: 150px;margin-top: 10px;">Apply For
                                                Sicktest</button>
                                        </a>
                                        <a href={{ Route('Student_Signout') }}>
                                            <button class="btn btn-outline-primary border rounded-pill shadow"
                                                type="button" style="margin-top: 10px;">Logout</button>
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/lottie-player.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
</body>

</html>
