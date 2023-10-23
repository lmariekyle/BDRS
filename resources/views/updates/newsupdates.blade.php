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
        
    <title>Document</title>
</head>
<body>
<div class="bg-gray-300 py-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="http://127.0.0.1:8000" class="flex items-center space-x-2">
            <img src="/images/logo.png" alt="Logo" class="w-16 h-16 hover:scale-105 transform transition-transform">
            <
        </a>
        <nav class="flex space-x-8">
            <a href="/" class="text-white text-lg font-medium hover:text-yellow-400 transition duration-300">HOME</a>
            <a href="#" class="text-white text-lg font-medium hover:text-yellow-400 transition duration-300">ABOUT US</a>
            <a href="#" class="text-white text-lg font-medium hover:text-yellow-400 transition duration-300">UPDATES</a>
        </nav>
    </div>
</div>

<div class = "">
@foreach($updates as $update)
<div class="border-gold mt-8 mb-8 border-4 h-[19rem] w-[60rem] mx-auto">
    <article class="p-4 flex items-center">
        <img class="h-60 w-60" src="{{$update->coverphoto}}" alt="Image">
        <div class="flex flex-col ml-4 pb-8">
            <figcaption class = "font-bold text-2xl ">{{$update->titleHeading}}</figcaption>
            <div class="line-clamp-4 mt-4"><?php $paragraph = $update->description ?>
                        <?php $maxCharacters = 200 ?>
                        <?php if (strlen($paragraph) > $maxCharacters): ?>
                       <p class="line-clamp-9 text-left text-gray-700 dark:text-gray-400 text-lg font-light my-4  h4 mb-[10px] font-poppin"><?php echo substr($paragraph, 0, $maxCharacters); ?></p>
                      <a href="{{route('posts.showupdate', $update->id)}}" class="text-darkblue hover:text-gold ">Read more <i class="fa-solid fa-arrow-right"></i></a>
                      <?php else: ?>
                      <p class = "text-left text-gray-700 dark:text-gray-400 text-lg font-poppin  my-4 h4 mb-[10px]"><?php echo $paragraph; ?></p>
                     <?php endif; ?></div>
        </div>
    </article>
</div>
@endforeach
</div>


    
</body>
</html>