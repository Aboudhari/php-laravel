<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            min-height: 100vh;
        }
        .card {
            max-width: 600px;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4">
            <h2 class="text-center text-primary">Student Registration</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('student.register') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Registration Number:</label>
                    <input type="text" name="student_reg_number" class="form-control" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">First Name:</label>
                        <input type="text" name="student_first_name" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name:</label>
                        <input type="text" name="student_last_name" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender:</label>
                    <select name="student_gender" class="form-select">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" name="student_email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone Number:</label>
                    <input type="text" name="student_phone_number" class="form-control" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Confirm Password:</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                </div>

               
                <div class="text-center mt-2">
                <button type="submit" class="btn btn-primary w-100">Register</button>
            <a href="login" class="text-decoration-none">I already have an account! login</a>
        </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
