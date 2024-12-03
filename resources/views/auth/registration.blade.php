<html>
<head>
    <title>Registro - Pastelería</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #f8e1da;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            border: 2px solid #c7a17a;
        }
        .container h2 {
            margin-bottom: 20px;
            color: #c7a17a;
        }
        .container input[type="text"],
        .container input[type="email"],
        .container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }
        .container button {
            width: 100%;
            padding: 10px;
            background-color: #c7a17a;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }
        .container button:hover {
            background-color: #a67c52;
        }
        .container .login-link {
            margin-top: 20px;
            font-size: 14px;
        }
        .container .login-link a {
            color: #c7a17a;
            text-decoration: none;
        }
        .container .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registrate</h2>
        <input type="text" placeholder="Nombre">
        <input type="email" placeholder="Correo electronico">
        <input type="password" placeholder="Constraseña">
        <input type="password" placeholder="Confirmar contraseña">
        <button class="btn btn-primary btn-lg" type="submit">Registrar</button>
        <div class="login-link">
            Tienes una cuenta? <a href="{{ route('login') }}" class="link-primary text-decoration-none">Iniciar sesion</a>
        </div>
    </div>
</body>
</html>