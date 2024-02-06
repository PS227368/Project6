<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactpagina</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Voeg eventuele andere aangepaste stijlen hier toe -->
    <style>
        /* Voeg eventuele aangepaste stijlen hier toe */
        /* Dit is een voorbeeld van hoe je de body kunt centreren met flexbox */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        #map {
            width: 400px;
            height: 400px; /* Hoogte van de kaart container */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-custom">
        <a class="navbar-brand" href="#">Webshop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!--Zorgt voor de wit space-->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-contact my-2 my-sm-0" href="/understructure">HomeScreen</a>
            </form>
        </div>
    </nav>
    
    <div class="container text-center">
        <h1>Contactpagina</h1>
        <p>Route naar Summa College, Sterrenlaan 10, Eindhoven:</p>
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.5402634201273!2d5.496716!3d51.466596800000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d8d46a1fd9a7%3A0x2683f0238844f87a!2sSumma%20College!5e0!3m2!1snl!2snl!4v1707225941409!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="container mt-">
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
