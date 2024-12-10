<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center text-primary mb-4">Welcome To Laravel</h1>
                <form action="{{ route('formSubmit') }}" method="POST" class="card p-4 shadow">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Enter your Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Enter your Email ID:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    
                    <button type="submit" class="btn btn-success w-100">Submit</button>
                </form>
                <!-- Form End -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-w76A/7k02a2ZhMEeOwaeAfW1CELYeh8Ikf2jR4pCO7zCkvhEfQABRsoJm3KWJSQ/" 
            crossorigin="anonymous"></script>
</body>
</html>
