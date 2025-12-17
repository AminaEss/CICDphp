<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI/CD con GitHub Actions</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1d2671, #c33764);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .container {
            background: rgba(0, 0, 0, 0.3);
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            max-width: 500px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2rem;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.5;
        }

        .badge {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 16px;
            background-color: #00d1b2;
            color: #000;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 CI/CD con GitHub Actions</h1>

        <p>
            <?php
                echo 'Le voy a decir a Sergio que no tenéis ningún repo con PHP 😜';
            ?>
        </p>

        <div class="badge">
            Deploy automático activado
        </div>
    </div>
</body>
</html>
