<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class JobController extends Controller
{
    public function showForm()
    {
        return view('frontend.client.Post-job');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'job_category' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'job_Responsibilities' => 'nullable|string',
            'needed_skills' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $user = auth()->user();

        Project::create([
            'creator_id' => $user->id,
            'creator_type' => $user->type,
            'category' => $validatedData['job_category'],
            'title' => $validatedData['job_title'],
            'description' => $validatedData['job_description'],
            'Responsibilities' => $validatedData['job_Responsibilities'],
            'needed_skills' => $validatedData['needed_skills'],
            'salary' => $validatedData['salary'],
            'image' => $validatedData['image'] ?? null, // Assuming image is optional
        ]);

        // Redirect or return a response as needed
        return redirect()->back();
    }

    public function portfolio()
    {
        // Retrieve the authenticated user's projects
        $user = auth()->user();
        $projects = Project::where('creator_id', $user->id)->get();

        // Pass the projects to the view
        return view('frontend.client.Profile', compact('projects'));
    }
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        // Check if the authenticated user is the owner of the project
        if (auth()->user()->id !== $project->creator_id) {
            abort(403, 'Unauthorized action.');
        }

        $project->delete();

        return redirect()->route('Profile')->with('success', 'Project deleted successfully');
    }
}
