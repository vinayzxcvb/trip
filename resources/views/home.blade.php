<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Cards</title>
    <script src="https://cdn.tailwindcss.com?version=3.4.3"></script> 
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($cities as $city)
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white transform transition-transform duration-300 hover:scale-105 hover:shadow-xl">
            <a href="{{ url('/adventures/'.($city['id'])) }}"><img class="w-full h-48 object-cover" src="{{ $city['image'] }}" alt="{{ $city['city'] }}"></a>

            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $city['city'] }}</div>
                <p class="text-gray-700 text-base">{{ $city['description'] }}</p>
            </div>
        </div>
        @endforeach
    </div>

</body>

</html>