<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
            color: #efb810;
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
            border-bottom: 1px solid #efb810;
        }

        .contact-form form button {
            background: #efb810;
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

        .alert {
            padding: 1em;
            margin: 1em 0;
            border-radius: 5px;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
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
        <h1 class="logo">Contáctanos <span>UwU</span></h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Contáctanos</h3>

                <!-- Mensajes de error y éxito -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <p>
                        <label>Nombre Completo</label>
                        <input type="text" name="fullname" required>
                    </p>
                    <p>
                        <label>Email</label>
                        <input type="email" name="email" required>
                    </p>
                    <p>
                        <label>Número celular</label>
                        <input type="tel" name="phone" pattern="[0-9]*" required title="Solo se permiten números.">
                    </p>
                    <p>
                        <label>Interés</label>
                        <input type="text" name="affair" required>
                    </p>
                    <p class="block">
                       <label>Mensaje</label> 
                        <textarea name="message" rows="3" required></textarea>
                    </p>
                    <p class="block">
                        <button type="submit">
                            ENVIAR
                        </button>
                    </p>
                    <p class="block">
                        <button onclick="history.back()">
                            Volver
                        </button>
                    </p>
                </form>
                

            </div>
            <div class="contact-info">
                <h4>Más Información</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Jr. Las Huainitas 123</li>
                    <li><i class="fas fa-phone"></i> 964605505 </li>
                    <li><i class="fas fa-envelope-open-text"></i> tupapimasna@gmail.com </li>
                </ul>
                <p>Estamos al tanto de sus peticiones y necesidades, las consultas serán atendidas en un periodo de 8 días hábiles</p>
                <p>MaquinaAlquiler-Contral.com</p>
            </div>
        </div>

    </div>

</body>
</html>

