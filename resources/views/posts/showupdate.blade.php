
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
       <link rel="stylesheet" href="/path/to/your/css/app.css">
    <title>BDRS</title>
</head>

<body style="background-color: #fffcf2; color: antialiased;">

    @include('layouts.navigation')


   <div style="display: flex; flex-direction: column; margin-top: 10rem; justify-items: center;padding: 5px 30px 5px; margin-bottom:15rem;">

    <!-- Title Container -->
    <div style="width: min(90%, max-content); padding: 24px; align-self: center;border-bottom-width: 2px; border-bottom-color: #eddea4;">
        <h1 style="font-family: 'Playfair Display', serif; font-size: 1.875rem; font-weight: 600; text-align: center; font-size: 40px;">{{ $update->titleHeading }}</h1>
    </div>
    <!-- End of Title Container -->

    <!--Start of Content -->
    <div style="display: flex; flex-direction: row;margin-top:5rem;">
                <!-- Image Gallery Container -->
        <div style="display: flex; flex-direction: column;">
            <!-- Start of Photo Container -->
            <div style="overflow: hidden; margin-bottom: 1.75rem; width: min(500px); max-width: 700px; margin-left: 8rem;margin-top: 20px; padding: 15px 10px 15px;">

                @php
                    $key = $update->coverphoto;
                @endphp
                <div style="position: relative; margin-bottom: 0.2rem;  overflow: hidden;">
                    <img src="{{ asset($update->coverphoto) }}" alt="Cover Image {{ $key }}" style="width: 100%; height: auto; border-radius: 10px; border: 4px solid #eddea4; cursor: pointer; transition: transform 0.3s ease-in-out;"          data-toggle="modal" data-target="#imageModal{{ $key}}">
                </div>
                <div class="modal fade" id="imageModal{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel{{ $key }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" style="align-items: center;">
                                <div class="modal-content ml-2">
                                    <img src="{{ asset($update->coverphoto) }}"  style=" height: 100%; width: 1000px;">
                                </div>
                            </div>
                </div>

                <!-- <div style="width: 100%; border-bottom-width: 2px; border-bottom-color: #eddea4; margin-top:1rem; margin-bottom:-1rem;">
                </div> -->

                <!-- Change this part na ma center ang image gallery below the cover photo and update description Image Gallery -->
               <div style="display: flex; flex-wrap: wrap;justify-content: center;align-items: center; margin-top:1rem;">

                    <!-- Loop through images -->
                        @forelse ($imagePaths ?? [] as $key => $path)
                        <div style=" flex: 1 2 200px; position: relative; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;margin-top:10px;margin-left:10px;">

                            <!-- Image -->
                            <img src="{{ asset($path) }}" alt="Image {{ $key }}" style=" height: auto; cursor: pointer; transition: transform 0.3s ease-in-out;" data-toggle="modal" data-target="#imageModal{{ $key}}">

                            <!-- Image Caption -->
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #fff; opacity: 0; transition: opacity 0.3s ease-in-out;">
                                <h3 style="font-size: 1.2rem; font-weight: 600;">Image {{ $key + 1 }}</h3>
                            </div>

                        </div>

                        <!-- Image Modal -->
                        <div class="modal fade" id="imageModal{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel{{ $key }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" style="align-items: center;">
                                <div class="modal-content ml-2">
                                    <img src="{{ asset($path) }}" alt="Image {{ $key }}" alt="Image {{ $key }}" style=" height: 100%; width: 1000px;">
                                </div>
                            </div>
                        </div>
                        @empty
                        <div>

                        </div>

                    @endforelse
                </div>
                <p style="font-family: 'Poppins', sans-serif; font-size: 12px; text-align: center; margin-top:1rem">Click on the pictures to view.</p>
            </div>
        </div>

                    <div style="display: flex; flex-direction: column;">
                <div style="width: max-content; padding: 4px; align-self: center;">
                    <h1 style="font-family: 'Playfair Display', serif; font-size: 1.875rem; font-weight: 600; text-align: center; font-size: 30px; margin-top:4rem;">{{ $update->titleSub }}</h1>
                </div>

                <!-- Description Container -->
                <div style="width: min(80%, 900px); margin-top: 2rem; align-self: center; margin-left: 0.625rem; margin-right: 0.625rem; padding-left: 0.375rem; padding-right: 0.375rem; padding-top: 1rem; padding-bottom: 1rem; box-shadow: 2px 2px 2px 2px  rgba(0, 0, 0, 0.1);border-bottom-width: 2px; border-top-width: 2px; border-bottom-color: #eddea4;; border-top-color: #eddea4;;">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; text-indent: 1rem; text-align: justify; margin: 20px;">{{ $update->description }}</p>
                </div>
        </div>
    </div>

</div>

    @include('layouts.footer')
</body>
</html>
