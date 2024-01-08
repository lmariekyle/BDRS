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
    <link rel="stylesheet" href="/path/to/your/css/app.css">

    <style>
        body {
            background-color: #fffcf2;
        }

        /* Add a max-width for the entire content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Responsive styles for the navigation */
        nav {
            display: flex;
            gap: 2rem;
        }

        nav a {
            color: white;
            font-size: 1.125rem;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: yellow;
        }

        /* Responsive styles for the News and Updates heading */
        .heading {
            margin-top: 4rem;
            text-align: center;
        }

        .heading p {
            font-family: 'Rozha One', serif;
            font-size: 3.5rem;
            color: black;
            font-weight: bold;
        }

        /* Responsive styles for the article cards */
        .article-card {
            background-color: #fffcf2;
            border: 4px solid #eddea4;
            margin: 3rem auto 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 60rem;
        }

        .article-card img {
            height: 13rem;
            width: 13rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-right: 40px;
        }

        .article-card article {
            display: flex;
            align-items: center;
            padding: 1rem;
        }

        .article-card h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: black;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .article-card p {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            text-align: left;
            color: black;
            font-size: 1.125rem;
            font-weight: 300;
            margin-bottom: 1rem;
            font-family: 'Poppins', sans-serif;
        }

        .article-card a {
            color: #FFD700;
            transition: color 0.3s;
        }

        .article-card a:hover {
            color: #FFD700;
        }
    </style>
</head>

<body>
    @include('layouts.navigation')

    <div class="container">
        <div class="heading">
            <p>News and Updates</p>
        </div>

        <div class="article-cards">
            @foreach($updates as $update)
            <div class="article-card">
                <article>
                    <img src="bdrsrealty/public/{{$update->coverphoto}}" alt="Image">
                    <div>
                        <h2>{{$update->titleHeading}}</h2>
                        <div>
                            <?php
                            $paragraph = $update->description;
                            $maxCharacters = 180;
                            ?>
                            <?php if (strlen($paragraph) > $maxCharacters): ?>
                            <p style="margin-bottom: 0;"><?php echo substr($paragraph, 0, $maxCharacters); ?></p>
                            <a href="{{route('posts.showupdate', $update->id)}}">Read more <i class="fa-solid fa-arrow-right" style="vertical-align: text-bottom;margin-top: 2rem;"></i></a>
                            <?php else: ?>
                            <p style="margin-top: 0.5rem; margin-bottom: 1rem; line-height: 1.25;"><?php echo $paragraph; ?></p>
                            <a href="{{route('posts.showupdate', $update->id)}}" class="text-darkblue hover:text-gold ">Read more <i class="fa-solid fa-arrow-right"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>
