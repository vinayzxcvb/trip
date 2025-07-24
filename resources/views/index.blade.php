<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Adventures in {{ ucfirst($city) }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-6">
     <h1 class="text-3xl font-bold mb-6 text-center">
        Adventures in <span class="text-blue-600">{{ ucfirst($city) }}</span>
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
        @foreach ($adventures as $adventure)
        <div class="bg-white border rounded-lg shadow-md overflow-hidden 
                    transform transition-all duration-300 ease-in-out 
                    hover:-translate-y-1 hover:shadow-2xl hover:border-blue-500">
            <div class="relative">
                <a href="{{ url('/adventure/details/'.$adventure['id']) }}">
                    <img src="{{ $adventure['image'] }}" alt="{{ $adventure['name'] }}"
                    class="w-full h-48 object-cover rounded-t-lg"></a>
                <div class="absolute top-4 right-4 bg-yellow-500 text-black px-4 py-1 rounded-lg text-sm font-bold shadow-md">
                    {{ $adventure['category'] }}
                </div>
            </div>

            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $adventure['name'] }}</h2>
                <p class="text-gray-500 mt-2">💵 Price: ${{ $adventure['costPerHead'] }}</p>
                <p class="text-gray-500">⏱ Duration: {{ $adventure['duration'] }} hrs</p>
                <p class="text-yellow-500">Currency: {{ $adventure['currency']}}</p>
            </div>
        </div>

        @endforeach
    </div>
</body>

</html>