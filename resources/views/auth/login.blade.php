<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow-lg" style="width: 350px;">
        <h3 class="text-center mb-4">Student Login</h3>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('student.login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Registration Number:</label>
                <input type="text" name="student_reg_number" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
            <div class="text-center mt-3">
            <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password?</a>
        </div>
        
        <div class="text-center mt-2">
            <a href="register" class="text-decoration-none">Don't have an account? Register</a>
        </div>
    </div>
        </form>
        
    
</body>
</html>
