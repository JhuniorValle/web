<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #f8e1da;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
            border: 2px solid #c7a17a;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 22px;
            color: #c7a17a;
        }
        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 15px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            background-color: #fef9e7;
        }
        .login-container input[type="checkbox"] {
            margin-right: 10px;
        }
        .login-container label {
            font-size: 14px;
            color: #c7a17a;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #c7a17a;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }
        .login-container button:hover {
            background-color: #b08b6f;
        }
        .login-container .signup-link {
            display: block;
            margin-top: 20px;
            font-size: 14px;
            color: #c7a17a;
        }
        .login-container .signup-link a {
            color: #c7a17a;
            text-decoration: none;
        }
        .login-container .signup-link a:hover {
            text-decoration: underline;
        }
        .login-container .remember-container {
            text-align: left;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar sesión con tu cuenta</h2>
        <form>
            <input type="email" placeholder="Correo electrónico" value="" required>
            <input type="password" placeholder="Contraseña" value="" required>
            <div class="remember-container">
                <input type="checkbox" id="remember">
                <label for="remember">Grabar</label>
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
        <div class="signup-link">
            ¿No tienes una cuenta? <a href="{{ route('register') }}" class="link-primary text-decoration-none">Crear Cuenta</a>
        </div>
    </div>
</body>
</html>