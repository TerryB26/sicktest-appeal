<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Student_Controller extends Controller
{


    public function dashboard()
    {
        $user = session()->get('user');
        $user = $user['user'];

        //dd($user);
        return view('student.dashboard', ['user' => $user]);
    }



    public function application()
    {
        $user = session()->get('user');

        $user = $user['user'];
        $courses = $user['courses'];
        $modules = $courses[0]['modules'];

        try {
            $user = session()->get('user');
            $studentId = $user['user']['studentId'];
            $response = Http::asForm()
                ->withHeaders([
                    'accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ])
                ->get(env('API_URL') . 'student-sick-tests/' . $studentId);

            if ($response->status() != 200) {
                return back()->with('error', $response->json());
            }

            $sickTests = $response->json();
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }



        return view('student.application', ['sickTests' => $sickTests]);
    }

    public function Application_Student(Request $request)
    {
        $this->validate($request, [
            'reason' => 'required',
            'sickTest' => 'required',
            'file_attachment' => ['required', 'file', 'mimes:pdf'],
        ]);

        $reason = $request->reason;
        $studentId = session()->get('user')['user']['studentId'];
        $sickTestId = $request->sickTest;


        try {
            // if ($request->hasFile('file_attachment')) {
            //     $document = $request->file('file_attachment');
            //     $attachment = $document->getContent();
            //    // $attachmentName = $document->getClientOriginalName();
            // } else {
            //     $attachment = null;
            //    // $attachmentName = null;
            // }
            $response = Http::asForm()
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ])
                ->post(env('API_URL') . 'applications', [
                    'reason' => $reason,
                    'studentId' => $studentId,
                    'sickTestId' => $sickTestId,
                ]);
           // dd($response->json());
            if ($response->status() != 201) {
                $errorMessage = $response->json();
                return back()->with('error', $errorMessage['message'] ?? $errorMessage);
            }

            return back()->with('success', 'Applied Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }




    public function history()
    {
        try {
            $user = session()->get('user');
            $studentId = $user['user']['studentId'];

            $response = Http::asForm()
                ->withHeaders([
                    'accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ])
                ->get(env('API_URL') . 'student-applications/' . $studentId);

            if ($response->status() != 200) {
                return back()->with('error', $response->json());
            }

            $applications = $response->json();
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', $th->getMessage());
        }

        return view('student.history', ['applications' => $applications]);
    }

    public function profile()
    {
        $user = session()->get('user');
        $user = $user['user'];

        return view('student.profile', ['user' => $user]);
    }

    public function signout()
    {
        return view('student.signout');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('Login')->with('Logout_Success', 'Signed Out Successfully');
    }
}
