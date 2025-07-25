<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Cities</title>
    <script src="https://cdn.tailwindcss.com?version=3.4.3"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="container mx-auto py-6">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-8">Discover Your Next Adventure</h1>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-3">Search Cities</h2>
            <input type="text" id="citySearch" onkeyup="filterCities()" placeholder="Search for cities..."
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6" id="cityContainer">
            @foreach ($cities as $city)
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white transform transition-transform duration-300 hover:scale-105 hover:shadow-xl city-card">
                <a href="{{ url('/adventures/'.($city['id'])) }}"><img class="w-full h-48 object-cover"
                        src="{{ $city['image'] }}" alt="{{ $city['city'] }}"></a>

                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 city-name">{{ $city['city'] }}</div>
                    <p class="text-gray-700 text-base">{{ $city['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        function filterCities() {
            let input = document.getElementById('citySearch').value.toLowerCase();
            let cityCards = document.querySelectorAll('.city-card');

            cityCards.forEach(card => {
                let cityName = card.querySelector('.city-name').textContent.toLowerCase();
                if (cityName.includes(input)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

</body>

</html>