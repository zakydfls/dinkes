<?php

namespace App\Http\Controllers;

use App\Models\InternshipReport;
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
                'file' => ['required', 'mimes:pdf', 'max:10240']
            ]);

            // Get the file from the request
            $file = $request->file('file');
            if (!$file) {
                throw new \Exception('File not found in request.');
            }

            // Generate a unique name for the file
            $filename = time() . '.' . $file->getClientOriginalExtension();

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

            // Hapus record dari database
            $report->delete();

            // Redirect ke dashboard dengan pesan sukses
            return redirect()->route('intern.dashboard')->with('success', 'Internship report deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete report: ' . $e->getMessage());
        }
    }
}
