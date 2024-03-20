<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactpagina</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-4 items-center">
                    <a href="/understructure" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                        <img src="{{ asset('LogoNoText.PNG') }}" alt="Logo" class="h-8">
                    </a>
                    <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Home</a>
                    <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Productpagina</a>
                    <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Winkelwagen</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto flex flex-col lg:flex-row justify-between items-start lg:items-center mt-8">
        <div class="w-full lg:w-1/2">
            <h1 class="text-4xl font-bold text-center lg:text-center">Contactpagina</h1>
            <p class="text-center lg:text-center">Route naar bosweg 34, Best</p>
            <div id="map" class="mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.293192039574!2d5.405722577649258!3d51.541546109077466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6dd991962cda9%3A0x40322e05f11ef9e2!2sBosweg%2C%20Best!5e0!3m2!1snl!2snl!4v1707474397065!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="w-full lg:w-1/2 mt-8 lg:mt-0">
            <h2 class="text-2xl font-bold mb-4">Neem contact met ons op</h2>
            <form>
                <div class="mb-4">
                    <label for="naam" class="block text-gray-700">Naam:</label>
                    <input type="text" id="naam" name="naam" class="form-input mt-1 block w-full" placeholder="Voer uw naam in">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-input mt-1 block w-full" placeholder="Voer uw e-mailadres in">
                </div>
                <div class="mb-4">
                    <label for="bericht" class="block text-gray-700">Bericht:</label>
                    <textarea id="bericht" name="bericht" rows="3" class="form-textarea mt-1 block w-full" placeholder="Voer uw bericht in"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Verzenden</button>
            </form>
        </div>
    </div>
</body>
</html>
