<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Cards</title>
    <script src="https://cdn.tailwindcss.com?version=3.4.3"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="container mx-auto py-6">
        <div class="mb-6">
            <input type="text" id="citySearch" onkeyup="filterCities()" placeholder="Search for cities..."
                class="w-600 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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
            // Get the search input value and convert to lowercase for case-insensitive search
            let input = document.getElementById('citySearch').value.toLowerCase();
            // Get all the city card elements
            let cityCards = document.querySelectorAll('.city-card');

            // Loop through each city card
            cityCards.forEach(card => {
                // Get the city name from within the card and convert to lowercase
                let cityName = card.querySelector('.city-name').textContent.toLowerCase();

                // Check if the city name includes the search input
                if (cityName.includes(input)) {
                    // If it matches, display the card
                    card.style.display = ''; // or 'block' or 'flex' depending on your layout
                } else {
                    // If it doesn't match, hide the card
                    card.style.display = 'none';
                }
            });
        }
    </script>

</body>

</html>