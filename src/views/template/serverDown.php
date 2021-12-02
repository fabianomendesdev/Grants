<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Error</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .main {
            padding: 25px 0;
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-image: linear-gradient(111.94deg, rgba(191, 38, 38, 0.85) 0%, rgba(185, 34, 41, 0.85) 26.56%, rgba(179, 30, 44, 0.85) 51.04%, rgba(173, 26, 47, 0.85) 77.6%, rgba(166, 23, 49, 0.85) 100%);
        }

        .main h1 {
            margin-bottom: 50px;
            font-size: 45px;
            font-family: 'Press Start 2P', cursive;
            background-color: #FFF;
            padding: 50px;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main img {
            height: 600px;
        }

        .main p {
            text-align: center;
            margin-top: 80px;
            font-family: 'Press Start 2P', cursive;
        }

        @media (max-width: 980px) {
            .main img {
                width: 90%;
                height: unset;
            }
        }

        @media (max-width: 500px) {
            .main h1 {
                width: 120px;
                height: 120px;
                padding: 50px;
                font-size: 30px;
            }
        }
    </style>
</head>
<body>
    <main class="main">
        <h1><?= $_SESSION['error'] ?></h1>
        <?php unset($_SESSION['error']); ?>
        <img src="assets/img/undraw_server_down_s-4-lk.svg" alt="Img Error">
        <p>Volte mais tarde!</p>
    </main>
</body>
</html>