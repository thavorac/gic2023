<html>
    <head>
        <style>
            form {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
        </style>
    </head>
    <body>
        <h3>Register Form</h3>
        <form action="/register_user_info">
            <div>
                Username:
                <input name="username" type="text" />
            </div>
            <div>
                Email:
                <input name="email" type="text" />
            </div>
            <div>
                Password:
                <input name="password" type="password" />
            </div>
            <div>
                Confirm Password:
                <input name="confirm_password" type="password" />
            </div>

            <button style="width:100px">Register</button>
        </form>
    </body>
</html>
