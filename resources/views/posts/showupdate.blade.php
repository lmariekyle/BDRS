<!-- Add Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Add jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Add Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oooh+Baby&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">

        <!--Filter Scripts-->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->
        @vite('resources/css/app.css')
    <title>BDRS show update</title>
</head>
<body class = >
        

<body class="bg-gray-200">

<!-- Navigation Bar -->
<div class="bg-gray-300 py-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="http://127.0.0.1:8000" class="flex items-center space-x-2">
            <img src="/images/logo.png" alt="Logo" class="w-16 h-16 hover:scale-105 transform transition-transform">
            <
        </a>

        <nav class="flex space-x-8">
            <a href="http://127.0.0.1:8000/" class="text-white text-lg font-medium hover:text-yellow-400 transition duration-300">HOME</a>
            <a href="http://127.0.0.1:8000/aboutpage" class="text-white text-lg font-medium hover:text-yellow-400 transition duration-300">ABOUT US</a>
            <a href="http://127.0.0.1:8000/newsupdates" class="text-white text-lg font-medium hover:text-yellow-400 transition duration-300">UPDATES</a>
        </nav>
    </div>
</div>

<!-- Content Section -->
<div class="shadow-2xl mx-7 mt-8 p-10 border-4 border-gold rounded-lg mb-8 ">
    <div class="overflow-hidden mb-7 h-[34rem] w-[40rem] mx-auto pt-8 pb-6 px-7">
        <img src="/{{ $update->coverphoto }}" alt="Image" class="h-[30rem] w-[30rem] object-cover rounded-md shadow-lg mx-auto">
    </div>
    
    <div class="flex flex-row justify-center space-x-1 mx-2">
    @foreach ($imagePaths as $key => $path)
        <img src="{{ asset($path) }}" alt="Image {{ $key }}" 
           style="width: 250px; height: 250px; margin-bottom: 20px; padding: 5px 5px 7px 7px; position: flex; justify-content: center; "
           data-toggle="modal" data-target="#imageModal{{ $key }}">

        <div class="modal fade" id="imageModal{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel{{ $key }}" aria-hidden="true" >
           <div class="modal-dialog modal-dialog-centered flex items-center">
              <div class="modal-content ml-2">

                    <img src="{{ asset($path) }}" alt="Image {{ $key }}" style="max-width: 300%; width: 600px; height: 550px;">
                
            </div>
        </div>
    </div>
@endforeach
    </div>
    
    <div>
        <h1 class="text-3xl font-semibold mb-6 text-center">{{ $update->titleHeading }}</h1>
    </div>
    
    <div class="text-lg text-gray-700 mx-5">
        <p class="font-roboto">{{ $update->description }}</p>
    </div>
</div>



        
    
</body>
</html>