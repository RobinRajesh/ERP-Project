<tml>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS_files/login-form.css">
        <script src="JS_files/login-form.js"></script>
    </head>
    <body style="background-image:url('Images/login-background.jpg');background-size: cover;">
        <div class="container">
        <form>
			<h1>Login</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<span>or use your email for registration</span>
			<!-- <input type="text" placeholder="Name" name="name" /> -->
			<input type="email" placeholder="Email" name="eemail" id="email"/>
			<input type="password" placeholder="Password" name="ppassword" id="password"/>
			<button type="button" name="submit" onclick="checkAge()">Login</button>
            <script>
                function checkAge() 
                {
                     var email = document.getElementById("email").value;
                        var password = document.getElementById("password").value;

                    if(email=="admin@gmail.com" && password=="admin")
                    {
                        window.open("ecommerce.php","_self");
                    }
                    else{
                        alert("Invalid Email or Password!");
                    }
                }

            </script>
        </div>
    </body>
</html>
