<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <section>
        <div class="container justify-content-center align-items-center align-content-center"
            style="padding: 40px;margin-top: 100px;">
            <div class="row">
                <div class="col" style="padding-right: 150px;padding-left: 150px;">
                    <div class="border rounded-pill">
                        <h2 class="display-6 text-center"
                            style="font-family: 'Alegreya Sans SC', sans-serif;padding-top: 10px;padding-bottom: 0px;margin-bottom: 0px;">
                            Welcome Back!</h2>
                        <p class="text-center text-muted" style="font-family: 'Alegreya Sans SC', sans-serif;">Sick Test
                            Management</p>
                    </div>
                </div>
            </div>
            <div class="row text-center d-flex align-content-center" style="margin-top: 40px;">
                <div class="col text-center d-flex justify-content-center align-items-center align-content-center align-self-center"
                    style="padding-top: 100px;">
                    <form wire:submit.prevent="handleLogin">
                        @csrf
                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-envelope text-muted"></i></span><input
                                class="form-control" type="email" placeholder="User@email.com" wire:model.defer="user_Email">
                        </div>

                        @error('user_Email')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span
                                class="input-group-text"><i class="icon-lock text-muted"></i></span><input
                                class="form-control" type="password" placeholder="Password" wire:model="password"></div>

                        @error('password')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This
                                    Field Is Required</p>
                            </div>
                        @enderror

                        <button class="btn btn-outline-primary border rounded border-success shadow-sm" type="submit"
                            style="margin-right: 2px;width: 150px;border-color: var(--bs-btn-disabled-border-color);">Sign
                            In</button>

                        <p style="padding-top: 15px;">In need of an account? <a class="link-primary"
                                href={{ Route('Register') }}>  Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
