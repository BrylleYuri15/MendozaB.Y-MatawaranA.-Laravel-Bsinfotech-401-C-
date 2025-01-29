<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('../storage/images/forest.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            min-height: 90dvh;
        }

        .login {
            width: 40%;
            color: white;
            text-align: center;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
            background-color: rgba(244, 244, 244, 0.3);
            /* Slightly transparent black */
        }

        .login input {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            background-color: rgba(244, 244, 244, 0.3);
            padding-left: 30px;
            border: none;
        }

        h1 {
            color: black;
            text-align: center;
        }

        .formgroup {
            position: relative;
            margin-bottom: 20px;
        }

        .formgroup i {
            position: absolute;
            left: 10px;
            top: 14px;
            color: black
        }

        button {
            padding: 5px;
            border: none;
            width: 60%;
            border-radius: 7px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            background-color: rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        button:hover {
            border-radius: 7px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8);
            background-color: rgba(0, 0, 0, 0.3);
            color: white;
            transform: scale(1.05);
        }

        /* Animation for messages */
        .alert {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 7px;
            border-radius: 8px;
            text-align: center;
            animation: slideDown 0.5s ease-out, fadeOut 0.5s 3s ease-in forwards;
            z-index: 1000;
        }

        .alert-success {
            border-radius: 7px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8);
            background-color: rgba(0, 0, 0, 0.3);
            color: white;
        }

        .alert-error {
            border-radius: 7px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8);
            background-color: #f44336;
            color: white;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateX(-50%) translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
            }
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: translateX(-50%) translateY(-20px);
            }
        }
    </style>
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravelProject\resources\views/layout/mainLayout.blade.php ENDPATH**/ ?>