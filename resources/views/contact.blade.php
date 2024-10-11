<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: #181818;
            color: #fff;
            line-height: 1.6;
            font-family: 'Quicksand', sans-serif;
            padding: 0 1.5em;
        }

        .container {
            max-width: 1170px;
            margin-left: auto;
            margin-right: auto;
            padding: 1.5em;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        .logo {
            text-align: center;
            font-size: 3em;
        }

        .logo span {
            color: #B70E21;
        }

        .contact-wrapper {
            box-shadow: 0 0 20px 0 rgba(255, 255, 255, .3);
        }

        .contact-wrapper > * {
            padding: 1em;
        }

        .contact-form {
            background: #222222;
        }

        .contact-form form {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .contact-form form label {
            display: block;
        }

        .contact-form form p {
            margin: 0;
            padding: 1em;
        }

        .contact-form form .block {
            grid-column: 1 / 3;
        }

        .contact-form form button,
        .contact-form form input,
        .contact-form form textarea {
            width: 100%;
            padding: .7em;
            border: none;
            background: none;
            outline: 0;
            color: #fff;
            border-bottom: 1px solid #d63031;
        }

        .contact-form form button {
            background: #B70E21;
            border: 0;
            text-transform: uppercase;
            padding: 1em;
        }

        .contact-form form button:hover,
        .contact-form form button:focus {
            background: #d63031;
            color: #fff;
            transition: background-color 1s ease-out;
            outline: 0;
        }

        /* CONTACT INFO */
        .contact-info {
            background: #000;
        }

        .contact-info h4, .contact-info ul, .contact-info p {
            text-align: center;
            margin: 0 0 1rem 0;
        }

        /* LARGE SIZE */
        @media(min-width: 700px) {
            body {
                padding: 0 4em;
            }
            .contact-wrapper {
                display: grid;
                grid-template-columns: 2fr 1fr;
            }
            .contact-wrapper > * {
                padding: 2em;
            }
            .contact-info h4,
            .contact-info ul,
            .contact-info p {
                text-align: left;
            }
        }
    </style>
</head>
<body>
    
    <div class="content">

        <h1 class="logo">Contact <span>Us</span></h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Contact us</h3>
                <form action="" method="POST">
                    @csrf
                    <p>
                        <label>Full Name</label>
                        <input type="text" name="fullname" required>
                    </p>
                    <p>
                        <label>Email Address</label>
                        <input type="email" name="email" required>
                    </p>
                    <p>
                        <label>Phone Number</label>
                        <input type="tel" name="phone" required>
                    </p>
                    <p>
                        <label>Affair</label>
                        <input type="text" name="affair" required>
                    </p>
                    <p class="block">
                       <label>Message</label> 
                        <textarea name="message" rows="3" required></textarea>
                    </p>
                    <p class="block">
                        <button type="submit">
                            Send
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>More Info</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Baker Street</li>
                    <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
                    <li><i class="fas fa-envelope-open-text"></i> contact@website.com</li>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
                <p>Company.com</p>
            </div>
        </div>

    </div>

</body>
</html>

