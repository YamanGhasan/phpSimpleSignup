<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">

    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">  -->
    <!-- This code uses the asset helper function to generate the URL for the app.css file located in the resources/css directory. This way, 
    you can include the CSS file directly without needing to compile and publish it to the public directory.
    Make sure you have the app.css file in the correct location (resources/css/app.css) for this code to work correctly. -->

    <style> 
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }  

        h1 {
            margin-bottom: 20px;
        } 

        form {
            width: 300px;
            margin: 0 auto;
        }
 
        button[type="submit"]:hover {
            background-color: #45a049;  
        }
        .alert {
        color: red !important;
        }
  
  .alert-danger {
    color: red !important;
  }
    </style>
    <title>Register</title>
</head>
<body>
    <main>
    @if ($errors->any())
    <!-- The $errors variable is available by default in Laravel, and the any() method checks if there are any error messages stored in it -->
    <div class="alert alert-danger">  
        @foreach ($errors->all() as $error)
        <!-- This is a foreach loop that iterates over each error message stored in the $errors variable. The all() method retrieves all the error messages as an array. -->
            {{ $error }}<br>
        @endforeach
    </div>
       @endif
     <form action="{{ route('register') }}" method="post">
            @csrf
            <h1>Sign Up</h1>
            <div> 
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}">
                <!-- In Laravel, when a form is submitted and validation fails, the form is usually
                 displayed back to the user with the previously entered values.
                  The old() function is used to retrieve the old input values from the previous request. -->
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
          
            <div>
                <label for="agree">
                    <input type="checkbox" name="agree" id="agree" value="yes" {{ old('agree') ? 'checked' : '' }}/> I agree
                    with the
                    <a href="#" title="term of services">term of services</a>
                </label>
            </div>
            <button type="submit">Register</button>
         
        </form>
    </main>
</body>
</html>
