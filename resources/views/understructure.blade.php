<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom bij onze webshop</title>
    <!-- Voeg Tailwind CSS toe -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Voeg eventuele andere aangepaste stijlen hier toe -->
</head>

<body class="bg-gray-100">
    <nav class="bg-white shadow-lg fixed top-0 w-full z-10">
        <div class="container mx-auto flex justify-between items-center py-4 px-8">
            <a class="navbar-brand" href="/understructure">
                <img src="LogoNoText.PNG" alt="Logo" class="h-10">
            </a>
            <button class="block md:hidden focus:outline-none">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <div class="hidden md:flex items-center space-x-4">
                <a href="/index" class="btn btn-contact">Productpagina</a>
                <a href="/contact" class="btn btn-contact">Contactpagina</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto text-center mt-20 px-8">
        <h1 class="text-4xl font-bold mb-8">Welkom bij onze webshop</h1>
        <p class="text-lg text-gray-600 mb-8">Binnenkort komt hier een nieuwe website met een webshop!</p>
        <img src="banner.jpg" alt="Banner" class="w-96 mx-auto mb-8">
    
        <h2 class="text-3xl font-bold mb-4">Adresgegevens van onze vestiging:</h2>
        <ul class="text-center mb-8">
            <li class="text-gray-500">Best - bosweg 34, 5423AP - Tel: 06-20252619</li>
            <li class="text-gray-500">Veldhoven - topstraat 42, 0420 AH - Tel: 06-78789465</li>
        </ul>
    </div>
</body>
</html>
