<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Резюме</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }
        h1 {
            font-size: 2em;
            margin: 0;
        }
        p {
            font-size: 1em;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex justify-center mt-6">
        <a href="{{route("resume.download")}}" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-blue-600 transition duration-300">
            Скачать резюме в PDF
        </a>
    </div>
    <div class="max-w-3xl mx-auto p-8 bg-white rounded-lg shadow-lg mt-10">
        <h1 class="text-3xl font-bold text-gray-800">{{ $resume['basics']['name'] }}</h1>
        <h2 class="text-xl text-gray-600">{{ $resume['basics']['label']}}</h2>
        
        <p class="mt-2 text-gray-700">{{ $resume['basics']['summary'] }}</p>
        
        <div class="mt-4">
            <h3 class="text-lg font-semibold text-gray-800">Контактная информация</h3>
            <p class="text-gray-700">Email: <a href="mailto:{{ $resume['basics']['email'] }}" class="text-blue-500">{{ $resume['basics']['email'] }}</a></p>
            <p class="text-gray-700">Телефон: {{ $resume['basics']['phone'] }}</p>
            <p class="text-gray-700">Адрес: {{ $resume['basics']['location']['address'] }}, {{ $resume['basics']['location']['city'] }}, {{ $resume['basics']['location']['region'] }}, {{ $resume['basics']['location']['postalCode'] }}</p>
        </div>
        <div class="mt-4">
            <h3 class="text-lg font-semibold text-gray-800">Профили в социальных сетях</h3>
            @foreach($resume['basics']['profiles'] as $profile)
                <p class="text-gray-700">
                    {{ $profile['network'] }}: 
                    <a href="{{ $profile['url'] }}" class="text-blue-500" target="_blank">{{ $profile['username'] }}</a>
                </p>
            @endforeach
        </div>
    </div>
</body>
</html>
