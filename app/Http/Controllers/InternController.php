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
                'file' => ['required', 'mimes:pdf,doc,docx', 'max:20240']
            ]);

            // Get the file from the request
            $file = $request->file('file');
            if (!$file) {
                throw new \Exception('File not found in request.');
            }

            // Generate a unique name for the file
            $filename = date('YmdHis') . '.' . $file->getClientOriginalName();

            // Store the file in the storage directory
            $filepath = $file->storeAs('public/intern_reports', $filename);


            // Create a new InternshipReport instance
            $report = InternshipReport::create([
                'filename' => $filepath,
                'user_id' => auth()->id(),
            ]);

            // Redirect to the dashboard with a success message
            return redirect()->route('intern.dashboard')->with('success', 'Internship report submitted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('intern.dashboard')->with('error', 'Failed to upload: ' . $e);
        }
    }

    public function destroy($id)
    {
        try {
            // Cari report berdasarkan ID dan user yang sedang login
            $report = InternshipReport::where('id', $id)->where('user_id', auth()->id())->firstOrFail();

            // Hapus file dari penyimpanan
            Storage::disk('public')->delete($report->filename);

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
