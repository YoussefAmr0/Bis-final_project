@extends("frontend.layout.app")

@section("content")

<div class="project-form">
    <h2>Submit Your Project</h2>
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image-upload">Upload Image:</label>
            <input type="file" id="image-upload" name="image" />
        </div>
        <div class="form-group">
            <label for="project-description">Title</label>
            <textarea id="project-description" name="title" required></textarea>
        </div>
        <div class="form-group">
            <label for="project-description">Project Description:</label>
            <textarea id="project-description" name="description" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="project-category">Project Category:</label>
            <select id="project-category" name="category">
                <option value="Web Development">Web Development</option>
                <option value="Mobile Development">Mobile Development</option>
                <option value="Design">Design</option>
                <option value="Writing">Writing</option>
            </select>
        </div>
        <button type="submit">Upload your project</button>
    </form>
</div>

@endsection
a