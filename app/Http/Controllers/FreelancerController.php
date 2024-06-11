<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{
    public function findJob(Request $request)
    {
        // Set the default limit and get the limit from the request
        $limit = $request->input('limit', 6);
    
        // Fetch projects where creator_type is 'client' and limit the number of results
        $projects = Project::where('creator_type', 'client')->take($limit)->get();
    
        // Pass the projects and the current limit to the view
        return view('frontend.freelancer.find-job', compact('projects', 'limit'));
    }
    
    public function showFreelancers(Request $request)
{
    // Set the default limit and get the limit from the request
    $limit = $request->input('limit', 6);

    // Retrieve the users where the type is 'freelancer' and limit the number of results
    $freelancers = User::where('type', 'freelancer')->take($limit)->get();

    // Pass the freelancers and the current limit to the view
    return view('frontend.freelancer.find-freelancer', compact('freelancers', 'limit'));
}


    public function AddProduct()
    {

        return view('frontend.freelancer.add-project');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|max:2048', // Validate image file
        ]);

        // Retrieve authenticated user
        $user = Auth::user();

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Create a new project
        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->category = $request->input('category');
        $project->creator_id = $user->id;
        $project->creator_type = $user->type; // Retrieve and store the user type
        $project->image = $imagePath;
        $project->save();

        return redirect()->back();
    }

public function viewProject($projectId)
{
    // Retrieve the project with the given ID
    $project = Project::findOrFail($projectId);

    // Pass the project data to the blade template as an array
    return view('frontend.freelancer.job-details', ['project' => $project]);
}

}
