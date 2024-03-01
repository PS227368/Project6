<!-- resources/views/product.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Store Page</title>

    <!-- Add Tailwind CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="winkelwagen.css">

</head>
<body class="bg-gray-100">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-custom">
        <a class="navbar-brand p-0" href="/understructure">
            <img src="{{ asset('LogoNoText.PNG') }}" alt="Logo" class="navbar-logo max-h-10 max-w-40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!--Zorgt voor de wit space-->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-contact my-2 my-sm-0" href="/understructure">Home</a>
                <a class="btn btn-contact my-2 my-sm-0" href="/index">Productpagina</a>
                <a class="btn btn-contact my-2 my-sm-0" href="/contact">Contactpagina</a>
            </form>
        </div>
    </nav>

    <h1 class="text-4xl font-bold text-center mt-12 mb-8">Welkom bij je winkelwagen</h1>
    
    <h2>Vul hieronder je gegevens in</h2>
    <div class="container-wrapper">
        <div class="container mt-10">
            <form>
                <div class="form-group">
                    <label for="naam">Naam:</label>
                    <input type="text" class="form-control" id="naam" placeholder="Voer uw naam in">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" placeholder="Voer uw e-mailadres in">
                </div>
                <div class="form-group">
                    <label for="bericht">Bericht:</label>
                    <textarea class="form-control" id="bericht"  placeholder="Voer uw bericht in"></textarea>
                </div>
            </form>
        </div>
        <div class="container mt-10">
            <form>
                <div class="form-group">
                    <label for="naam">Naam:</label>
                    <input type="text" class="form-control" id="naam" placeholder="Voer uw naam in">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" placeholder="Voer uw e-mailadres in">
                </div>
                <div class="form-group">
                    <label for="bericht">Bericht:</label>
                    <textarea class="form-control" id="bericht"  placeholder="Voer uw bericht in"></textarea>
                </div>
            </form>
        </div>
    </div>
    <div class="button-container">
        <button type="submit" class="btn btn-primary">Afrekenen</button>
    </div>
</body>
</html>
