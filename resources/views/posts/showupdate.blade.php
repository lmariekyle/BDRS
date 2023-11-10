


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
        <!-- Add Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Add jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Add Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <!-- Styles -->
        @vite('resources/css/app.css')
    <title>BDRS</title>
</head>

<body class="bg-dirtywhite antialised">

    @include('layouts.navigation')

    <div class="flex flex-col mt-[8rem] justify-items-center">
        <div class="w-max h-max px-3 py-3 bg-dirtywhite shadow-md border-2 border-gold self-center">
            <h1 class="font-playfair text-3xl font-semibold text-center">{{ $update->titleHeading }}</h1>
        </div>
        {{-- <div class = "border-2 border-darkblue "> --}}
        <div class="overflow-hidden mb-7 h-[34rem] w-[40rem] mx-auto pt-8 pb-6 px-7">
            <img src="/{{ $update->coverphoto }}" alt="Image" class="h-[30rem] w-[30rem] object-cover rounded-md shadow-lg mx-auto">
        </div>

        <div class="flex flex-row justify-center space-x-1 mx-2">
            @foreach ($imagePaths as $key => $path)
                <img src="{{ asset($path) }}" alt="Image {{ $key }}"
                    style="width: 280px; height: 280px; margin-bottom: 20px; padding: 5px 5px 7px 7px; position: flex; justify-content: center; "
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

        <div class=" w-[1000px] mt-[2rem] self-center mx-5 px-3 py-4 ">
            <p class="font-poppin text-lg indent-4 text-justify">{{ $update->description }}</p>
        </div>
    </div>
</div>

    @include('layouts.footer')
</body>
</html>
