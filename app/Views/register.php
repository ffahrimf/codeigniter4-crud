<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registration Page</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="/registration-form/css/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="/registration-form/fonts/font-awesome-5/css/fontawesome-all.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="/registration-form/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        #btn-register {
            background-color: #B408BC;
            font-family: 'Varela Round';
            transition: background-color 0.3s ease;
            border-radius: 25px;
            padding: 15px;
        }

        #btn-register:hover {
            background-color: #85088B;
        }

        #btn-back {
            background-color: #808080;
            color: #ffffff;
            font-family: 'Varela Round';
            transition: background-color 0.3s ease;
            text-decoration: none;
            padding: 15px 20px;
            border-radius: 25px;
            margin-right: 10px;
        }

        #btn-back:hover {
            background-color: #5E5E5E;
        }

        .form-v5-content {
            box-shadow: 0 16px 20px rgba(0, 0, 0, 0.3);
            /* Mengatur bayangan */
            /* Anda juga bisa menyesuaikan nilai properti di atas sesuai preferensi */
        }
    </style>
</head>

<body class="form-v5">
    <div class="page-content" style="background-color: yellowgreen;">
        <div class="form-v5-content">
            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form class="form-detail" action="/register/save" method="post">

                <h2 style="color: #B408BC;">Register Account Form</h2>
                <div class="form-row">
                    <label for="InputForName">Full Name</label>
                    <input type="text" name="name" id="InputForName" class="input-text" placeholder="Your Name" style="font-family: 'Varela Round',sans-serif;" value="<?= set_value('name') ?>" required>
                    <i class="fas fa-user" style="color: #B408BC;"></i>
                </div>
                <div class="form-row">
                    <label for="InputForEmail">Your Email</label>
                    <input type="text" name="email" id="InputForEmail" class="input-text" placeholder="Your Email" style="font-family: 'Varela Round',sans-serif;" value="<?= set_value('email') ?>" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                    <i class="fas fa-envelope" style="color: #B408BC;"></i>
                </div>
                <div class="form-row">
                    <label for="InputForPassword">Password</label>
                    <input type="password" name="password" id="InputForPassword" class="input-text" style="font-family: 'Varela Round',sans-serif;" placeholder="Your Password" required>
                    <i class="fas fa-lock" style="color: #B408BC;"></i>
                </div>
                <div class="form-row">
                    <label for="InputForConfPassword">Password</label>
                    <input type="password" name="confpassword" id="InputForConfPassword" class="input-text" style="font-family: 'Varela Round',sans-serif;" placeholder="Your Password" required>
                    <i class="fas fa-lock" style="color: #B408BC;"></i>
                </div>
                <div class="form-row-last">
                    <a id="btn-back" href="/login">Back</a>
                    <input id="btn-register" type="submit" name="register" class="register" value="Register">
                </div>
            </form>
        </div>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>