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
        try {
            $request->validate([
                'isi_link' => ['required', 'boolean'],
                'status' => ['required', 'string'],
            ]);

            $intern->update($request->all());
            return redirect()->route('intern.data.index')->with('success', 'Internship report updated successfully.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors([$e->getMessage()]);
        }
    }

    public function destroy(InternshipReport $intern)
    {
        $intern->delete();
        return redirect()->route('intern.data.index')->with('success', 'Internship report deleted successfully.');
    }
}
