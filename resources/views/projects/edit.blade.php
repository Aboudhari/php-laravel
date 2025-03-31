<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

<div class="container">
    <h2 class="mb-4">Edit Project</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project->project_code) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="project_name" class="form-label">Project Name</label>
            <input type="text" name="project_name" class="form-control" value="{{ old('project_name', $project->project_name) }}">
        </div>

        <div class="mb-3">
            <label for="project_problems" class="form-label">Project Problems</label>
            <textarea name="project_problems" class="form-control">{{ old('project_problems', $project->project_problems) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="project_solutions" class="form-label">Project Solutions</label>
            <textarea name="project_solutions" class="form-control">{{ old('project_solutions', $project->project_solutions) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="project_abstract" class="form-label">Project Abstract</label>
            <textarea name="project_abstract" class="form-control">{{ old('project_abstract', $project->project_abstract) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="project_dissertation" class="form-label">Project Dissertation</label>
            <textarea name="project_dissertation" class="form-control">{{ old('project_dissertation', $project->project_dissertation) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="project_source_codes" class="form-label">Project Source Codes (Link)</label>
            <input type="url" name="project_source_codes" class="form-control" value="{{ old('project_source_codes', $project->project_source_codes) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Project</button>
        <a href="{{ route('student.dashboard') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>
