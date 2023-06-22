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
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/Floating-Button.css">
    <link rel="stylesheet" href="../assets/css/Soft-UI-Aside-Navbar.css">
</head>

<body>
    <section>
        <div class="container justify-content-center align-items-center align-content-center" style="padding: 40px;">
            <div class="row">
                <div class="col" style="padding-right: 150px;padding-left: 150px;">
                    <div class="border rounded-pill">
                        <h2 class="display-6 text-center"
                            style="font-family: 'Alegreya Sans SC', sans-serif;padding-top: 10px;padding-bottom: 0px;margin-bottom: 0px;">
                            New Sicktest</h2>
                        <p class="text-center text-muted" style="font-family: 'Alegreya Sans SC', sans-serif;">Sick Test
                            Management</p>
                    </div>
                </div>
            </div>

            @if (Session::has('error') || Session::has('success'))
                <div class="alert alert-{{ Session::has('error') ? 'danger' : 'success' }} border rounded-pill alert-dismissible"
                    role="alert">
                    <button class="btn-close" type="button" aria-label="Close"
                        data-bs-dismiss="alert"></button><span><strong>{{ Session::has('error') ? Session::get('error') : Session::get('success') }}</strong>.</span>
                </div>
            @endif



            <div class="row text-center d-flex align-content-center" style="margin-top: 40px;">
                <div class="col text-center d-flex justify-content-center align-items-center align-content-center align-self-center"
                    style="padding-top: 100px;">
                    <form style="font-family: 'Alegreya Sans SC', sans-serif;" action="" method="POST">
                        @csrf

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-question text-muted"></i></span><select
                                class="form-select" name="venue_name">
                                <option value selected="">Choose A Venue</option>
                                <option value="1">10-120</option>
                                <option value="2">14-1106</option>
                                <option value="3">10-140</option>
                                <option value="4">10-233</option>
                                <option value="5">LG10-12A</option>
                            </select></div>

                        @error('venue_name')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-question text-muted"></i></span><select
                                class="form-select" name="test_type">
                                <option value selected="">Choose A Test</option>

                                @foreach ($tests as $test)
                                    <option value={{ $test['testId'] }}>{{ $test['module'] }}</option>
                                @endforeach
                            </select></div>


                        @error('test_type')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-calendar text-muted"></i></span><input
                                class="form-control" type="date" name="test_date"></div>
                        @error('test_date')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-question text-muted"></i></span><select
                                class="form-select" name="test_time">
                                <option value selected="">Choose Test Time</option>
                                <option value="08:00">08:00</option>
                                <option value="09:30">09:30</option>
                                <option value="11:00">11:00</option>
                                <option value="12:30">12:30</option>
                                <option value="14:00">14:00</option>
                                <option value="15:30">15:30</option>
                            </select></div>

                        @error('test_time')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror

                        <a class="btn btn-outline-danger border rounded border-danger shadow-sm" role="button"
                            style="margin-right: 2px;width: 150px;border-color: var(--bs-btn-disabled-border-color);"
                            href={{ Route('Lecturer_Dashboard') }}>Cancel</a><button
                            class="btn btn-outline-info border rounded border-info shadow-sm" type="submit"
                            style="margin-right: 2px;width: 150px;border-color: var(--bs-btn-disabled-border-color);">Create
                            Test</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
</body>

</html>
