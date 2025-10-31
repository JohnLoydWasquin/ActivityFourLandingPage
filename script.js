$(document).ready(function(){
    $("#loginForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            email: {
                required: "The email you entered isn't connected to an account",
                email: "Enter a valid email address"
            },
            password: {
                required: "The password field cannot be empty",
                minlength: "The password must be at least 5 character"
            }
        },
        errorClass: "error",
        submitHandler: function(){
            const email = "admin@gmail.com";
            const password = "12345";

            let enteredEmail = $("#email").val();
            let enteredPassword = $("#password").val();

            if(enteredEmail === email && enteredPassword === password){
                window.location.href = "https://johnloydwasquin.github.io/ActivityFourLandingPage/";
            }else{
                Swal.fire({
                icon: "error",
                title: "Login Failed",
                text: "Invalid username or password. Try again!",
                confirmButtonColor: "#d33",
                confirmButtonText: "OK"
            });
            }
        }
    });
    $("#registerForm").validate({
        rules: {
            fullName: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                equalTo: "#reg_password"
            }
        },
        messages: {
            fullName: "Enter at least 3 characters",
            email: "Enter a valid email",
            password: {
                required: "Password is required",
                minlength: "At least 5 characters"
            },
            confirm_password: {
                required: "Please confirm your password",
                equalTo: "Passwords do not match"
            }
        },
        errorClass: "error",
        submitHandler: function(){
            Swal.fire({
            icon: "success",
            title: "Registration Successful!",
            text: "You can now login to your account.",
            showConfirmButton: true,
            confirmButtonText: "Go to Login"
            }).then(() => {
                window.location.href = "index.html";
            });
        }
    });
});