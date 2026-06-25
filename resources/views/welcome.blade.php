<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{config('app.name')}}</title>
        {{-- vite fonts  --}}
        @fonts    
        @vite(['resources/css/app.css', 'resources/js/app.js'])
          
</head>
<body class="bg-red-50">
    <nav class="p-3 bg-white shadow">
        <div>
            <a href="#" class="text-gray-900 text-xl font-brand">
                Laravel Blog
            </a>
        </div>
    </nav>
</body>
</html>