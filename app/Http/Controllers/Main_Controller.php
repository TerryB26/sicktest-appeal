<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Main_Controller extends Controller
{
    public function login_View()
    {
        return view('login');
    }

    public function Login_user(Request $request)
    {

        $email = $request->input('user_Email');
        $password = $request->input('password');

        $request->validate([
            'user_Email' => 'required|email',
            'password' => 'required',
            //|regex:/^[0-9]{9}@tut4life\.ac\.za$/'
        ]);

        try {
            $response = Http::asForm()
                ->withHeaders([
                    'accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ])
                ->post(env('API_URL') . 'login', [
                    'email' => $email,
                    'password' => $password,
                ]);

            if ($response->status() != 200) {
                $errorMessage = $response->json();
                return back()->with('error', $errorMessage['message'] ?? $errorMessage);
            }
            $data = $response->json();
            session()->put('user', $data['data']);

            $type = session()->get('user')['type'];
            if (session()->get('user')) {
                return redirect()->route(ucfirst($type) . '_Dashboard');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', $th->getMessage());
        }
    }


    public function register_View()
    {
        $courses = Null;
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])
                ->get(env('API_URL') . 'courses');
            $courses = $response->json()['data'];
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }

        return view('register', ['courses' => $courses]);
    }

    public function Register_user(Request $request)
    {
        $this->validate($request, ([
            'name' => 'required',
            'surname' => 'required',
            'student_Number' => 'required',
            'user_type' => 'required',
            'user_Email' => 'required|email',
            'course' => 'required',
        ]));

        $allowedDomains = ['gmail.com', 'yahoo.com', 'icloud.com'];
        $domain = substr(strrchr($request->input('user_Email'), "@"), 1);

        if (!in_array($domain, $allowedDomains)) {
            return back()->with('error', 'Email domain restricted. Please use Gmail, Yahoo, or iCloud email address');
        }

        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('user_Email');
        //$value = $request->input('user_type');
        $course_id = $request->input('course');
        $student_number = $request->input('student_Number');
        $type = $request->input('user_type');
        //dd();
        try {
            $response = Http::asForm()
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ])
                ->post(env('API_URL') . 'accounts', [

                    'name' => $name,
                    'email' => $email,
                    'surname' => $surname,
                    'type' => $type,
                    'courseId' => $course_id,
                    'userId' => $student_number,
                ]);
            if ($response->status() != 201) {
                $errorMessage = $response->json();
                return back()->with('error', $errorMessage['message'] ?? $errorMessage);
            }
            return redirect()->route('reg_success_view');
        } catch (\Throwable $th) {
            //dd($th->getMessage());
            return back()->with('error', $th->getMessage());
        }
    }

    public function password_View(Request $request)
    {
        $email = $request->email;

        //dd($request);
        return view('password_creation', ['email' => $email]);
    }

    public function Pass_View(Request $request)
    {
        $email = $request->email;
        $accountId = $request->id;
        $token = $request->token;


        $this->validate($request, ([
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',

        ]));

        $password = $request->password;
        $passwordConfirmation = $request->password_confirmation;
        // dd($url);
        try {

            $response = Http::asForm()
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ])
                ->patch(env('API_URL') . 'accounts/' . $accountId, [
                    'password' => $password,
                    'passwordConfirmation' => $passwordConfirmation,
                    'token' => $token,
                ]);

            if ($response->status() != 201) {
                return back()->with('error', $response->json());
            }

            $data = $response->json();
            session()->put('user', $data);
            $type = session()->get('user')['type'];
            if (session()->get('user')) {
                return redirect()->route(ucfirst($type) . '_Dashboard');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', $th->getMessage());
        }




        return view('password_creation');
    }

    //reg_success_view

    public function reg_success_view()
    {
        return view('reg_success');
    }
}
