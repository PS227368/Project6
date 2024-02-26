<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom bij onze webshop</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Voeg eventuele andere aangepaste stijlen hier toe -->
    <link rel="stylesheet" href="understructe.css">
</head>
<body>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-custom">
        <a class="navbar-brand p-0" href="/understructure">
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
                <a class="btn btn-contact my-2 my-sm-0" href="/index">Productpagina</a>
                <a class="btn btn-contact my-2 my-sm-0" href="/contact">Contactpagina</a>
            </form>
        </div>
    </nav>    

    <div class="container text-center">
        <h1>Welkom bij onze webshop</h1>
        <p>Binnenkort komt hier een nieuwe website met een webshop!</p>
        <img src="{{asset('banner.jpg')}}" class="w-50 h-50">

        <h2>Adresgegevens van onze vestiging:</h2>  
        <ul>
            <li>Best - bosweg 34, 5423AP - Tel: 06-20252619</li>
            <li>Veldhoven - topstraat 42, 0420 AH - Tel: 06-78789465 </li>
        </ul>
    </div>
    
</body>
</html>
