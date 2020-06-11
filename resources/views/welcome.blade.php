<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.css">

        @livewireStyles
    </head>
    <body>
        <div class=" flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Bienvenue sur Crypto - Watch
                </div>

                <div class="h5 mt-5 mb-5">
                    <p class="">Cette application a été concu avec le framework <strong>Laravel</strong>  sans aucune ligne de <strong>javascript</strong>,  ni <strong>ajax</strong>  grâce à la librairie <strong>Livewire</strong></p>
                    <p><a target="_blank" href="https://laravel-livewire.com/">Le lien de la doc</a></p>
                    <p><a target="_blank" href="https://github.com/gaston223/Crypto-Watch">Le lien du repo Github </a></p>
                </div>




                @livewire("crypto-board")

            </div>

        </div>
<footer class="footer flex-center h5 mb-5">
   Application conçu par&nbsp;<a href="https://gaoussou-coulibaly.fr/">Gaoussou Coulibaly</a>
</footer>

        @livewireScripts
    </body>
</html>
