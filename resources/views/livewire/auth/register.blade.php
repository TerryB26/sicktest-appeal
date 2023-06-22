<div>
    {{-- Success is as dangerous as failure. --}}
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

                    <form style="font-family: 'Alegreya Sans SC', sans-serif;" action="" method="POST">
                        @csrf
                        {{-- <div class="input-group" style="padding-bottom: 20px;padding-right: 0px;margin-right: 150px;height: 60px;"><span class="input-group-text"><i class="icon-user text-muted"></i></span><input class="form-control" type="text" style="padding-left: 10px;padding-right: 10px;padding-bottom: 0px;padding-top: 0px;" placeholder="Name" name="name"></div>

                        @error('name')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This Field Is Required</p>
                            </div>
                        @enderror

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span class="input-group-text"><i class="icon-user text-muted"></i></span><input class="form-control" type="text" style="padding-left: 10px;padding-right: 10px;padding-bottom: 0px;padding-top: 0px;" placeholder="Surname" name="surname"></div>

                        @error('surname')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This Field Is Required</p>
                            </div>
                        @enderror --}}

                        {{-- <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span class="input-group-text"><i class="far fa-address-card text-muted"></i></span><input class="form-control" type="number" name="student_Number" placeholder="Student Number"></div>

                        @error('student_Number')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This Field Is Required</p>
                            </div>
                        @enderror --}}

                        {{-- <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span class="input-group-text"><i class="icon-phone text-muted"></i></span><input class="form-control" type="number" name="contact_Number" placeholder="Contact Number"></div>

                        @error('contact_Number')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This Field Is Required</p>
                            </div>
                        @enderror --}}

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-envelope text-muted"></i></span><input
                                class="form-control" type="email" placeholder="User@email.com" name="user_Email">
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
                                    <option value="0" selected="">User Type</option>
                                    <option value="1">Student</option>
                                    <option value="2">Lecture</option>
                                    <option value="3">Admin</option>
                                </optgroup>
                            </select></div>


                        @error('user_type')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror

                        {{--
                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span class="input-group-text"><i class="icon-lock text-muted"></i></span><input class="form-control" type="password" placeholder="Password" name="password"></div>

                        @error('password')
                        <div>
                            <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This Field Is Required</p>
                        </div>
                        @enderror

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span class="input-group-text"><i class="icon-lock text-muted"></i></span><input class="form-control" type="password" placeholder="Retype Password" name="password_confirmation"></div>

                        @error('password_confirmation')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This Field Is Required</p>
                            </div>
                        @enderror --}}

                        <button class="btn btn-outline-success border rounded border-success shadow-sm" type="submit"
                            style="margin-right: 2px;width: 150px;border-color: var(--bs-btn-disabled-border-color);">Register</button>
                        <p style="padding-top: 15px;">Already have an account?<a class="link-primary"
                                href={{ Route('Login') }}>  Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
