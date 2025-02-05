<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('img/landing.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            font-family: Arial, sans-serif;
            color: #ffffff;
        }

        /* Loading Screen */
        .loading-screen {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            display: none;
        }
        
        .spinner {
            width: 150px;
            height: 150px;
            border: 5px solid #f3f3f3;
            margin-left: 95vh; 
            margin-top: 37vh; 
            border-top: 5px solid #C74B3B;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }


        .clickable-heading {
            color: white;
            padding: 25px 40px;
            cursor: pointer;
            font-size: 20px;
            width: 150px;
            float: right;
            display: inline-block;
            margin-bottom: 10px; /* Adjust margin as needed */
            text-decoration: none; /* Remove underline */
        }
          
        
        .clickable-heading-login {
        color: white;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 20px;
        width: 95px;
        float: right;
        display: inline-block;
        margin-bottom: 10px;
        margin-top: 15px;
        margin-right: 20px; 
        text-decoration: none; /* Remove underline */
        background-color: #D7953F; /* Green background color */
        border-radius: 25px 25px 25px 25px; /* Make it circular */
        }

        .none{
            text-decoration: none; 
        }

        .clickable-heading-login {
        display: inline; /* Ensures it's inline */
        text-decoration: none; /* Removes underline */
        color: inherit; /* Keeps the default text color */
        }

        .clickable-heading-login:hover, 
        .clickable-heading-login:focus {
        color: inherit; /* Prevents color change on hover/focus */
        text-decoration: none; /* Ensures no underline appears */
}


        .clickable-heading {
        display: inline; /* Ensures it's inline */
        text-decoration: none; /* Removes underline */
        color: inherit; /* Keeps the default text color */
        }

        .clickable-heading:hover, 
        .clickable-heading:focus {
        color: inherit; /* Prevents color change on hover/focus */
        text-decoration: none; /* Ensures no underline appears */
}


    </style>
</head>
<body>
    <!-- Loading UI -->
    <div class="loading-screen" id="loadingScreen">
        <div class="spinner"></div>
    </div>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $error }}
        </div>
    @endforeach
    @endif

    <div>
        <a href="{{route('login')}}" class="clickable-heading-login none" style = "text-decoration: none; " id="loginButton" >
            Log in
        </a>
        <a href="{{ route('register') }}" class="clickable-heading none" style = "text-decoration: none; " id="registerButton">
            Register
        </a>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            // Hide loading screen after page load
            $("#loadingScreen").fadeOut();
        });

        $("#loginButton, #registerButton").click(function(event) {
            event.preventDefault(); // Prevent immediate navigation
            $("#loadingScreen").fadeIn();
            
            let newPage = $(this).attr("href");
            setTimeout(function() {
                window.location.href = newPage;
            }, 1000); // Delay navigation for 1 second
        });
    </script>
</body>
</html>
