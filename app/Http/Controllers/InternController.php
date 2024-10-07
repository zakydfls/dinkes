<?php

namespace App\Http\Controllers;

use App\Models\InternshipReport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class InternController extends Controller
{
    public function index()
    {
        $interns = InternshipReport::query()
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('intern.dashboard', compact('interns'));
    }

    public function create()
    {
        $userHasReport = InternshipReport::where('user_id', auth()->id())->exists();
        return view('intern.report.create', compact('userHasReport'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'file' => ['required', 'mimes:pdf,doc,docx', 'max:20240'],
                'file_bukti' => ['required', 'mimes:pdf,jpg,png', 'max:20240']
            ]);

            // Get the files from the request
            $file = $request->file('file');
            $fileBukti = $request->file('file_bukti');

            if (!$file || !$fileBukti) {
                throw new \Exception('One or more required files not found in request.');
            }

            // Generate unique names for the files
            $filename = date('YmdHis') . '_report.' . $file->getClientOriginalExtension();
            $filenameBukti = date('YmdHis') . '_bukti.' . $fileBukti->getClientOriginalExtension();

            // Store the files in the storage directory
            $filepath = $file->storeAs('public/intern_reports', $filename);
            $filepathBukti = $fileBukti->storeAs('public/intern_reports', $filenameBukti);

            // Create a new InternshipReport instance
            $report = InternshipReport::create([
                'filename' => $filepath,
                'file_bukti' => $filepathBukti,
                'user_id' => auth()->id(),
            ]);

            // Redirect to the dashboard with a success message
            return redirect()->route('intern.dashboard')->with('success', 'Internship report and supporting document submitted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('intern.dashboard')->with('error', 'Failed to upload: ' . $e->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            // Cari report berdasarkan ID dan user yang sedang login
            $report = InternshipReport::where('id', $id)->where('user_id', auth()->id())->firstOrFail();

            // Hapus file dari penyimpanan
            Storage::disk('public')->delete($report->filename);
            Storage::disk('public')->delete($report->file_bukti);

            // Hapus record dari database
            $report->delete();

            // Redirect ke dashboard dengan pesan sukses
            return redirect()->route('intern.dashboard')->with('success', 'Internship report deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete report: ' . $e->getMessage());
        }
    }

    public function profile()
    {
        $user = auth()->user();

        return view('intern.profile.index', compact('user'));
    }

    public function editProfile(User $user)
    {
        return view('intern.profile.edit', compact('user'));
    }

    public function updateProfile(Request $request, User $user)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'password' => ['nullable', 'string', 'min:8'],
                'no_id' => ['required', 'string', 'max:255'],
                'instansi' => ['required', 'string', 'max:255'],
            ]);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password ? bcrypt($request->password) : $user->password,
                'no_id' => $request->no_id,
                'instansi' => $request->instansi,
            ]);

            return redirect()->route('intern.profile')->with('success', 'Profile updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update profile: ' . $e->getMessage());
        }
    }
}
