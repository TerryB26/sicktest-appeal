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
        <div>
            <aside id="sidenav-main"
                class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3">
                <div class="sidenav-header"><i
                        class="fa fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none"></i><a
                        class="navbar-brand m-0" href="" style="margin-right: -13px;padding-right: 44px;"><img
                            class="navbar-brand-img h-100 w-15" src="../assets/img/medical-icon-png-6589.png"
                            style="margin-right: -6px;"><span class="ms-2 font-weight-bolder"
                            style="font-family: 'Alegreya Sans SC', sans-serif;font-size: 20px;padding-left: 0px;margin-right: 10px;padding-right: 20px;"><span
                                style="color: rgb(203, 12, 159);">Sick Test Management</span></span></a>
                    <hr class="horizontal dark mt-0">
                    <div id="sidenav-collapse-main" class="collapse navbar-collapse w-auto">
                    </div>
                </div>
            </aside>
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
                                        <li class="nav-item"><a class="nav-link"
                                                href={{ Route('Lecturer_Dashboard') }}><i
                                                    class="icon-home icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center"></i><span
                                                    class="nav-link-text ms-1"
                                                    style="font-family: 'Alegreya Sans SC', sans-serif;">Dashboard<br></span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link active"
                                                href={{ Route('Lecturer_History') }}><i
                                                    class="icon-calendar text-light active icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i><span
                                                    class="nav-link-text ms-1"
                                                    style="font-family: 'Alegreya Sans SC', sans-serif;">Previous
                                                    Tests</span></a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href={{ Route('Lecturer_Applications') }}><i
                                                    class="icon-note icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i><span
                                                    class="nav-link-text ms-1"
                                                    style="font-family: 'Alegreya Sans SC', sans-serif;">Sick
                                                    Tests</span></a></li>

                                        <li class="nav-item"><a class="nav-link"
                                                href={{ Route('sick_applications') }}><i
                                                    class="fa fa-hospital-o icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i><span
                                                    class="nav-link-text ms-1"
                                                    style="font-family: 'Alegreya Sans SC', sans-serif;">Sick Test
                                                    Applications<br></span></a>
                                        </li>
                                        <li class="nav-item mt-3"><span
                                                class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6"
                                                style="font-family: 'Alegreya Sans SC', sans-serif;">User
                                                Management</span></li>
                                        <li class="nav-item"><a class="nav-link" href={{ Route('Lecturer_Profile') }}><i
                                                    class="icon-wrench icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i><span
                                                    class="nav-link-text ms-1"
                                                    style="font-family: 'Alegreya Sans SC', sans-serif;">Profile<br></span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href={{ Route('Lecturer_Signout') }}><i
                                                    class="icon-power active icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i><span
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
                        <div>
                            <h1 class="text-center"
                                style="margin-top: 30px;font-family: 'Alegreya Sans SC', sans-serif;font-weight: bold;color: rgb(203,12,159);">
                                Previous Tests</h1>
                            <hr>
                        </div>
                        <div style="padding-left: 0px;margin-top: 50px;margin-left: 0px;">
                            <div class="card shadow" style="font-family: 'Alegreya Sans SC', sans-serif;">
                                <div class="card-header text-center py-3">
                                    <p class="text-primary m-0 fw-bold">Previous Tests</p>
                                </div>
                                <div class="card-body">

                                    <div class="table-responsive table mt-2" id="dataTable-1" role="grid"
                                        aria-describedby="dataTable_info">


                                        @unless (count($tests) == 0)
                                            <table class="table my-0" id="dataTable">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center;">Module</th>
                                                        <th style="text-align: center;">Venue</th>
                                                        <th
                                                            style="margin-left: -2px;padding-left: 10px;text-align: center;">
                                                            Test Type</th>
                                                        <th style="text-align: center;">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tests as $test)
                                                        <tr>
                                                            <td style="text-align: center;">{{ $test['module'] }}</td>
                                                            <td
                                                                style="margin-right: 0px;padding-right: 0px;text-align: center;">
                                                                {{ $test['venue'] }}</td>
                                                            <td style="text-align: center;">{{ $test['type'] }}</td>
                                                            <td style="text-align: center;">{{ $test['date'] }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <div>
                                                <p class="text-primary m-0 fw-bold">No Tests</p>
                                            </div>
                                        @endunless

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
</body>

</html>
