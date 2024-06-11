@extends("frontend.layout.app")

@section("content")

<div class="post-job-container">
      <h2>Post a Job</h2>
      <form action="{{ route('store-job') }}" method="POST">
        @csrf
        <div>
            <label for="job_category">Job Category:</label>
            <select name="job_category" id="job_category" required>
                <option value="Web Development">Web Development</option>
                <option value="Graphic Design">Graphic Design</option>
                <option value="Digital Marketing">Digital Marketing</option>
            </select>
        </div>
        <div>
            <label for="job_title">Job Title:</label>
            <input type="text" id="job_title" name="job_title" required />
        </div>
        <div>
            <label for="job_description">Job Description:</label>
            <textarea id="job_description" name="job_description" required></textarea>
        </div>
        <div>
            <label for="job_description">Job Responsibilities:</label>
            <textarea id="job_description" name="job_Responsibilities" required></textarea>
        </div>
        <div>
            <label for="needed_skills">Needed Skills:</label>
            <input type="text" id="needed_skills" name="needed_skills" required />
        </div>
        <div>
            <label for="needed_skills">Salary:</label>
            <input type="text" id="salary" name="salary" required />
        </div>
        <button type="submit">Post Job</button>
    </form>
    </div>

@endsection