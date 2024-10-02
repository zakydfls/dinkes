<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicantRequest;
use App\Models\ApplicantData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PHPUnit\Metadata\Version\Requirement;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicant = ApplicantData::query()
            ->latest()
            ->get();
        return view('admin.dashboard', [
            'applicants' => $applicant
        ]);
    }

    public function create()
    {
        return view(view: 'applicants.form');
    }

    public function store(ApplicantRequest $request)
    {
        try {
            $data = $request->validated();
            // Log::info('Data validated: ', $data);
            $file = $request->file('file');
            if (!$file) {
                throw new \Exception('File not found in request.');
            }
            $filename = time() . '_' . $file->getClientOriginalName();
            $filepath = $file->storeAs('public/data', $filename);
            $data['filename'] = $filepath;
            Log::info('File stored at: ' . $filepath);

            ApplicantData::create($data);
            return redirect('/')->with('message', 'Form submitted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors([$e->getMessage()]);
        }
    }

    public function edit(ApplicantData $applicant)
    {
        return view('applicants.edit', compact('applicant'));
    }

    public function update(Request $request, ApplicantData $applicant)
    {
        $request->validate([
            'status' => ['required', 'string'],
        ]);

        // Update applicant status
        $applicant->update([
            'status' => $request['status']
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Data updated successfully.');
    }


    public function generateIntern(ApplicantData $applicant)
    {
        try {
            $user = User::create([
                'name' => $applicant->name,
                'email' => $applicant->name . @'@dinkes.com',
                'password' => bcrypt('dinkes123'),
                'no_id' => $applicant->nim,
                'instansi' => $applicant->asal_instansi,
            ]);
            $user->assignRole('intern');

            if (!empty($applicant->name_2) && !empty($applicant->nim_2)) {
                $user2 = User::create([
                    'name' => $applicant->name_2,
                    'email' => $applicant->name_2 . '@dinkes.com',
                    'password' => bcrypt('dinkes123'),
                    'no_id' => $applicant->nim_2,
                    'instansi' => $applicant->asal_instansi,
                ]);
                $user2->assignRole('intern');
            }

            if (!empty($applicant->name_3) && !empty($applicant->nim_3)) {
                $user3 = User::create([
                    'name' => $applicant->name_3,
                    'email' => $applicant->name_3 . '@dinkes.com',
                    'password' => bcrypt('dinkes123'),
                    'no_id' => $applicant->nim_3,
                    'instansi' => $applicant->asal_instansi,
                ]);
                $user3->assignRole('intern');
            }

            return redirect()->back()->with('success', 'User created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create user / User have been created.');
        }
    }
}
