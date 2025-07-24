<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Adventure Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <style>
        .swiper {
            width: 100%;
            height: 200px;
        }
    </style>
</head>

<body class="bg-gray-100 p-4">


    <div class="bg-white rounded-xl shadow-md p-6 mb-8">
        <h1 class="text-2xl font-bold mb-2">{{ $advDetails['name'] }}</h1>
        <p class="text-gray-600 mb-4">{{ $advDetails['subtitle'] }}</p>

        <!-- Carousel for images -->
        @if(is_array($advDetails['images']))
        <div class="swiper mySwiper mb-4 rounded-lg overflow-hidden">
            <div class="swiper-wrapper">
                @foreach ($advDetails['images'] as $img)
                <div class="swiper-slide">
                    <img src="{{ $img }}" alt="{{ $advDetails['name'] }}" class="w-full h-48 object-cover">
                </div>
                @endforeach
            </div>
            <!-- Swiper navigation buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        @else
        <img src="{{ $details['images'] }}" alt="{{ $details['name'] }}" class="w-full h-48 object-cover rounded-lg mb-4">
        @endif

        <p class="text-gray-700">{{ $advDetails['content'] }}</p>
    </div>


    <!-- SwiperJS JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>

</html>