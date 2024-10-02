<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InternshipReport;
use Illuminate\Http\Request;

class InternDataController extends Controller
{
    public function index()
    {
        $interns = InternshipReport::with('user')->get();
        return view('admin.intern-data.index', compact('interns'));
    }
    public function edit(InternshipReport $intern)
    {
        return view('admin.intern-data.edit', compact('intern'));
    }

    public function update(Request $request, InternshipReport $intern)
    {
        $request->validate([
            'revision_notes' => ['nullable', 'string'],
            'status' => ['required', 'string'],
        ]);

        $intern->update($request->all());
        return redirect()->route('intern.data.index')->with('success', 'Internship report updated successfully.');
    }

    public function destroy(InternshipReport $intern)
    {
        $intern->delete();
        return redirect()->route('intern.data.index')->with('success', 'Internship report deleted successfully.');
    }
}
