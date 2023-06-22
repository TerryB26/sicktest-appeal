<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class Login extends Component
{
    public $user_Email, $password;
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function mount()
    {
    }

    public function handleLogin(Request $request)
    {

        $inputValue = $request->input('user_Email');
        dd($inputValue);

        $email = $request->input('user_Email');
        $password = $request->input('password');

        dd($request -> user_Email);
        try {
            //code...
            $response = Http::asForm()
            ->withHeaders([
                'accept'=> 'application/json',
                'Content-Type'=> 'application/x-www-form-urlencoded',
            ])
            ->post(env('API_URL') . 'login',[
                'email'=>$email,
                'password'=>$password,
            ]);

            dd($response->body());
            //dd($email,$password);


        } catch (\Throwable $th) {
            //throw $th;
            dd($th->getMessage());
        }

        //dd($this->user_Email, $this->password);

    }
}
