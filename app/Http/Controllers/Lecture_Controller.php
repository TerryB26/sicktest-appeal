<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class Lecture_Controller extends Controller
{
    public function dashboard()
    {
        $user = session()->get('user');
        $user = $user['user'];


            //dd($user);

        return view('lecturer.dashboard', ['user' => $user]);
    }

    public function profile()
    {
        $user = session()->get('user');
        $user = $user['user'];
        //dd($user);
        return view('lecturer.profile', ['user' => $user]);
    }

    public function signout()
    {
        return view('lecturer.signout');
    }

    public function logout()
    {
        //return view('login');

        Auth::logout();
        return redirect('Login')->with('Logout_Success', 'Signed Out Successfully');
    }



    public function history()
    {
        $user = session()->get('user');
        $user = $user['user'];
        $tests = [];
        $lecturerId = $user['lecturerId'];
        // dd($lecturerId);
        //dd($tests == 'No tests'?? []);

        try {
            $response = Http::asForm()->withHeaders([
                'Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded',
            ])->get(env('API_URL') . 'tests?lecturerId[eq]=' . $lecturerId);

            if ($response->status() != 200) {
                return back()->with('error', $response->json());
            }

            $tests = $response->json()['data'];
            //dd($tests);
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }



        return view('lecturer.history', ['tests' => $tests]);
    }

    public function applications()
    {
        $user = session()->get('user');
        $user = $user['user'];
        $tests = $user['tests'];

        return view('lecturer.newApps', ['tests' => $tests]);
    }

        public function application_view(Request $request)
    {
        $studentName = $request->studentName;
        $studentEmail = $request->studentEmail;
        $studentNumber = $request->studentNumber;
        $reason = $request->reason;
        $status = $request->status;

        return view('lecturer.application', [
            'studentName' => $studentName,
            'studentEmail' => $studentEmail,
            'studentNumber' => $studentNumber,
            'reason' => $reason,
            'status' => $status,
        ]);
    }


    public function application_action(Request $request)
    {
        $reason = $request->input('lecture_reason');
        $status = $request->input('action') == 'approve' ? 'approved' : 'declined';
        $applicationId = $request->applicationId;

        try {
            $response = Http::asForm()
                ->withHeaders([
                    'accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ])
                ->patch(env('API_URL') . 'applications/' . $applicationId, [
                    'status' => $status,
                ]);

            //dd($response->json());

            if ($response->status() != 200) {
                $errorMessage = $response->json();
                return back()->with('error', $errorMessage['message'] ?? $errorMessage);
            }
            return redirect()->Route('Lecturer_Dashboard');
            //$data = $response->json();
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', $th->getMessage());
        }
    }

    public function new_test()
    {
        $user = session()->get('user');

        $user = $user['user'];

        try {

            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])->get(env('API_URL') . 'tests?lecturerId[eq]=' . $user['lecturerId']);

            $testsResponse = $response->json()['data'];
            $tests = [];
            foreach ($testsResponse as $response) {
                $testId = $response['testId'];
                $date = $response['date'];
                $module = $response['module'];


                $tests[] = collect([
                    'testId' => $testId,
                    'date' => $date,
                    'module' => $module,
                    'details' => $module . ' ' . $date,
                ]);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }



        return view('lecturer.sicktest_creation', ['tests' => $tests]);
    }


    public function NewTest(Request $request)
    {
        $this->validate($request, ([
            'venue_name' => 'required',
            'test_type' => 'required',
            'test_date' => 'required',
            'test_time' => 'required',
        ]));

        $date = $request->input('test_date');
        $time = $request->input('test_time');
        $venue_id = $request->input('venue_name');
        $test_id = $request->input('test_type');



        try {
            $response = Http::asForm()
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ])
                ->post(env('API_URL') . 'sick-tests', [

                    'venueId' =>  $venue_id,
                    'time' => $time,
                    'date' => $date,
                    'testId' => $test_id,
                ]);

            if ($response->status() != 201) {
                return back()->with('error', $response->json());
            }
            //dd($response->json());
            return back()->with('success', 'Created Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function past_test()
    {
        $user = session()->get('user');

        $user = $user['user'];
        $courses = $user['courses'];
        $modules = $courses[0]['modules'];


        return view('lecturer.prevTest', ['modules' => $modules]);
    }

    public function Previous_Test(Request $request)
    {
        $user = session()->get('user');

        $user = $user['user'];

        $this->validate($request, ([
            'module_name' => 'required',
            'venue_name' => 'required',
            'test_type' => 'required',
            'test_date' => 'required',
            'test_time' => 'required',
        ]));

        $date = $request->input('test_date');
        $time = $request->input('test_time');
        $venue_id = $request->input('venue_name');
        $type = $request->input('test_type');
        $lecturer_id =  $user['lecturerId'];
        $module_id = $request->input('module_name');
            // dd($module_id);
        ;
        //dd(session()->get('user'));
        //dd($request->input());
        try {
            $response = Http::asForm()
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ])
                ->post(env('API_URL') . 'tests', [

                    'venueId' =>  $venue_id,
                    'time' => $time,
                    'date' => $date,
                    "type" => $type,
                    "lecturerId" => $lecturer_id,
                    "moduleId" => $module_id,
                ]);

            $response->status() == 201 ? [$status = 'success', $message = 'Test Successfully Created'] : [$status = 'failure', $message = $response->json()];
            //dd($status);
            return back()->with($status, $message);
        } catch (\Throwable $th) {
            return back()->with('failure', $th->getMessage());
        }
        //dd($response);
    }

    public function sick_applications()
    {
        $user = session()->get('user');
        $user = $user['user'];
        $lecturerId = $user['lecturerId'];

        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])
                ->get(env('API_URL') . 'lecturer-applications/'.$lecturerId);
           // dd($response->json());
            $sickTests = $response->json();
        } catch (\Throwable $th) {
            //dd($th->getMessage());
            return back()->with('error', $th->getMessage());
        }
        return view('lecturer.student-applications', ['sickTests' => $sickTests]);
    }

    public function historySick()
    {
        $user = session()->get('user');
        $user = $user['user'];
        $tests = [];
        $lecturerId = $user['lecturerId'];
        $sickTests = NULL;
        // dd($lecturerId);
        //dd($tests == 'No tests'?? []);

        try {
            $response = Http::asForm()->withHeaders([
                'Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded',
            ])->get(env('API_URL') . 'tests?lecturerId[eq]=' . $lecturerId);

            if ($response->status() != 200) {
                return back()->with('error', $response->json());
            }


            $tests = $response->json()['data'];
            $sickTests = $this->getSickTests($tests);
            //dd($sickTests);
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }

        return view('lecturer.history-sick', ['sickTests' => $sickTests]);
    }

    public function getSickTests($tests)
    {
        $sickTests = [];
        //dd($tests);
        foreach ($tests as $test) {
            //module,venue,date,time
            //dd($test);
            try {
                $response = Http::asForm()->withHeaders([
                    'Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded',
                ])->get(env('API_URL') . 'sick-tests?testId[eq]=' . $test['testId']);

                if ($response->status() != 200) {
                    return back()->with('error', $response->json());
                }

                $sickTests[] = $response->json()['data'][0];
                //dd($sickTests);
            } catch (\Throwable $th) {

                return back()->with('error', $th->getMessage());
            }
        }

        return $sickTests;
    }
}
