<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactpagina</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="understructe.css">
</head>
<body>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-custom">
        <a class="navbar-brand p-0" href="#">
            <img src="{{ asset('LogoNoText.PNG') }}" alt="Logo" class="navbar-logo">
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
            </form>
        </div>
    </nav>

    <div class="container text-center">
        <h1>Contactpagina</h1>
        <p>Route naar bosweg 34, Best</p>
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.293192039574!2d5.405722577649258!3d51.541546109077466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6dd991962cda9%3A0x40322e05f11ef9e2!2sBosweg%2C%20Best!5e0!3m2!1snl!2snl!4v1707474397065!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="container mt-10">
        <h2>Neem contact met ons op</h2>
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
                <textarea class="form-control" id="bericht" rows="3" placeholder="Voer uw bericht in"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Verzenden</button>
        </form>
    </div>
</body>
</html>
