<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <style>  
     body {
            background-color: #000000;
            background-image: url('../../../img/cont.jpg') !important;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            color: white;
        }

        .container {
            background-color: rgba(33, 33, 33, 0.9);
            border-radius: 10px;
            padding: 30px;
            max-width: 400px;
            width: 90%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 25px;
            color: white;
            padding: 12px 20px;
            margin-bottom: 20px;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: none;
            color: white;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 25px;
            padding: 12px 0;
            width: 100%;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        label {
            color: #999;
            margin-bottom: 8px;
        }

        ::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }</style>
</head>

<body>
    <div class="container">
        <h2> ¿Olvidaste Tu Contraseña? </h2>
        <form action="../../../../BackEnd/forgotMail.php" method="post">
            <div class="form-group">
                <label for="email">Direccion de Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Email</button>
        </form>
    </div>
</body>

</html>