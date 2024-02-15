<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BDRS Realty Management Services Co.</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oooh+Baby&family=Playfair+Display&family=Poppins&family=Rozha+One&display=swap" rel="stylesheet">

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->


    </head>
    <body style="background-color:#fffcf2;">
        @include('layouts.navigation')


        <!-- start of  content -->
        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; margin-top: 2rem; width: 100%; max-height: max-content;">
           <div style="display: flex; flex-direction: column; margin-bottom: 5rem;">
            <p style="font-family: 'Rozha One', serif; font-size: 42px; color: #000000; align-self: center; margin-top: 8rem;">About Us</p>
            <p style="font-family: 'Poppins', sans-serif; font-size: 22px; color: #000000; align-self: center; margin-top: 1rem; font-weight: 600; margin-left: 1rem;">BDRS Realty Management Services Co.</p>
           </div>

           <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; width: 100%; height: 500px; margin-top: 2rem; padding-left: 1rem; padding-right: 1rem; padding-top: 1rem; padding-bottom: 1rem;">
                <div style="width: 1200px; height: 500px; margin-left: 0.5rem; margin-top: 8rem;">
                    <img src="images/logo.png" alt="" style="width: 200px; height: 200px;margin-left: 5rem; margin-top: 10rem; align-self: center;">
                </div>
                <div style="display: flex; flex-direction: column; margin-left: 1rem; margin-top: 3rem;">
                    <p style="font-family: 'Rozha One', serif; font-size: 32px; color: #000000; margin-top: 10rem; margin-left: 35rem; margin-bottom: 1rem;">Our Story</p>
                        <table style="table-layout: auto; border-spacing: 2px; margin-left: 1rem; border-right: 1px solid #000000; border-right-width: 2px; margin-right:2rem;">
                            <tbody>
                                <tr class="">
                                    <th scope="row" style="padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 1rem; padding-bottom: 1rem; font-family: 'Poppins', sans-serif; font-size: 14px; color: #000000; align-self: center;">
                                        2017-2018
                                    </th>
                                    <td style="padding-left: 2rem; padding-right: 2rem; padding-top: 1rem; padding-bottom: 2rem; font-family: 'Poppins', sans-serif; font-size: 12px; color: #000000;">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row" style="width: 20rem; padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 1rem; padding-bottom: 1rem; font-family: 'Poppins', sans-serif; font-size: 14px; color: #000000; align-self: center;"">2019</th>
                                <td style="padding-left: 2rem; padding-right: 2rem; padding-top: 1rem; padding-bottom: 2rem; font-family: 'Poppins', sans-serif; font-size: 12px; color: #000000;">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </td>
                                </tr>
                                <tr>
                                <th scope="row" style="padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 1rem; padding-bottom: 1rem; font-family: 'Poppins', sans-serif; font-size: 14px; color: #000000; align-self: center;">2020-2022</th>
                                <td style="padding-left: 2rem; padding-right: 2rem; padding-top: 1rem; padding-bottom: 2rem; font-family: 'Poppins', sans-serif; font-size: 12px; color: #000000;">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row" style="padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 1rem; padding-bottom: 1rem; font-family: 'Poppins', sans-serif; font-size: 14px; color: #000000; align-self: center;">2023-Present</th>
                                <td style="padding-left: 2rem; padding-right: 2rem; padding-top: 1rem; padding-bottom: 2rem; font-family: 'Poppins', sans-serif; font-size: 12px; color: #000000;">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                </div>
           </div>
                
           <p style="font-family: 'Rozha One', serif; font-size: 42px; color: #000000; align-self: center; margin-top: 18rem;">Our Brand Identity</p>
            <div style="border-bottom: 1px solid #000000;"></div>
            <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; max-height: max-content; max-width: max-content; margin-top: 1rem; column-gap: 8rem;">
                    <div style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center; height: 500px; max-width: max-content; margin-top: 12rem;">
                        <p style="font-family: 'Rozha One', serif; font-size: 32px; color: #000000; align-self: center; margin-top: 2rem;">Realty</p>
                        <p style="width: 40rem; height: 200px; padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 1rem; padding-bottom: 1rem; font-family: 'Poppins', sans-serif; font-size: 16px; color: #000000; align-self: center; word-break: break-word; text-indent: 2rem;">Experience a world of possibilities with our expert consultancy services tailored to your real estate dreams. Discover the perfect lifestyle that suits your desires and needs, all while ensuring the utmost security and peace of mind. Explore a diverse range of options and embark on your journey towards the ideal living experience with confidence.</p>
                    </div>
                    <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; height: 500px; width: 500px;">
                            <div style="background-color: #0d5385; border-width: 2px; border-color: #000000; height: 400px; width: 400px; box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.5);"></div>
                            <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; position: absolute; background-color: #f7f5f2; border-width: 2px; border-color: #000000; height: 400px; width: 400px; margin-right: 3rem; margin-top: 2rem;">
                                <img src="images/realty.jpg" alt="" style="height:360px; width:360px;border-width: 4px; border-color: #f4f4f4; border-radius: 0.375rem; box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.06), 0 1px 2px rgba(0, 0, 0, 0.1);">
                            </div>
                    </div>
            </div>

            <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; max-height: max-content; max-width: max-content; margin-top: 1rem; column-gap: 10rem; margin-left:-5rem;">
                    <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;  height: 500px; width: 500px;margin-left:4rem;">
                            <div style="background-color: #0d5385; border-width: 2px; border-color: #000000; height: 400px; width: 400px; box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.5); "></div>
                                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; position: absolute; background-color: #f7f5f2; border-width: 2px; border-color: #000000; height: 400px; width: 400px; margin-left: 3rem; margin-top: 3rem;">
                                        <img src="images/management.jpg" alt="" style="height:460px; width:460px;border-width: 4px; border-color: #f4f4f4; border-radius: 0.375rem; box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.06), 0 1px 2px rgba(0, 0, 0, 0.1);">
                                    </div>
                    </div>

                    <div style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center; height: 500px; width: max-content; margin-top: 8px;">
                        <p style="font-family: 'Rozha One', serif; font-size: 32px; color: black; align-self: center; margin-top: 6rem;">Management</p>
                        <p style="width: 40rem; height: 200px; padding-left: 3px; padding-right: 3px; padding-top: 4px; padding-bottom: 4px; font-family: 'Poppins', sans-serif; font-size: 16px; color: black; align-self: center; word-wrap: break-word; text-indent: 8em;margin-top:1rem;">Elevate your investment strategy with our exclusive MANAGEMENT services, designed to not only save you valuable time but also guarantee exceptional returns on your investments. Our expert team is dedicated to guiding you in making the most informed and profitable choices, ensuring that your assets are managed to exceed even the loftiest of expectations. Let us empower your investments and turn your aspirations into a reality.</p>
                    </div>
            </div>

        <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; max-height: 100vh; max-width: max-content; margin-top: 4rem; gap: 10rem; margin-left:1rem;">
                <div style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center; height: 500px; width: max-content; margin-top: 1rem;">
                                <p style="font-family: 'Rozha One', serif; font-size: 32px; color: black; align-self: center; margin-top: 36px;">Services</p>
                                <p style="width: 40rem; height: 200px; padding-left: 6px; padding-right: 6px; padding-top: 4px; padding-bottom: 4px; font-family: 'Poppins', sans-serif; font-size: 18px; color: black; align-self: center; word-wrap: break-word; text-indent: 8em;">We champion the art of exemplary service, going above and beyond without expecting anything in return. It's not just about the business at hand; it's about the dedication to deliver the absolute best in service, elevating the customer experience to unparalleled heights.</p>
                </div>
                    <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; height: 500px; width: 500px;">
                            <div style="background-color: #0d5385; border: 2px solid black; height: 400px; width: 400px; box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.5);"></div>
                                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; position: absolute; background-color: #fffcf2; border: 2px solid black; height: 400px; width: 400px; margin-right: 43px; margin-top: 40px;">
                                        <img src="images/services.jpg" alt="" style="height:360px; width:360px;border-width: 4px; border-color: #edede9; border-style: solid; border-radius: 0.375rem; box-shadow: inset 0 0 0.5rem rgba(0, 0, 0, 0.1);">
                                    </div>
                    </div>
        </div>

        <p style="font-family: 'Rozha One', serif; font-size: 32px; color: black; align-self: center; margin-top: 4rem;">Our Core Commitments</p>

        <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; max-height: 100vh; max-width: max-content; margin-top: 3rem;">
            <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding-left: 5px; padding-right: 5px; padding-top: 7px; padding-bottom: 7px; gap: 3rem;">
                <div class="">
                    <img src="images/4.png" alt="" style="height:360px; width:360px;border-width: 4px; border-color: #eddea4; border-style: solid; border-radius: 0.375rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                </div>
                <div class="">
                    <img src="images/5.png" alt="" style="height:360px; width:360px;border-width: 4px; border-color: #eddea4; border-style: solid; border-radius: 0.375rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                </div>
                <div class="">
                    <img src="images/6.png" alt="" style="height:360px; width:360px;border-width: 4px; border-color: #eddea4; border-style: solid; border-radius: 0.375rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                </div>
            </div>
        </div>

        <p style="font-family: 'Rozha One', serif; font-size: 52px; color: black; align-self: center; margin-top: 10rem;">Our Leaders</p>

        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; max-height: max-content; max-width: max-content; margin-top: 2rem;">
                <div style="display: flex; flex-direction: row;">
                    <img src="images/SirJerome.png" alt="" style="height:260px; width:260px;position: absolute; border-width: 4px; border-color: #eddea4; border-style: solid;background-color: #fffcf2; border-radius: 0.375rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <div style="display: flex; flex-direction: column; background-color: #fffcf2; border: 2px solid #0d5385; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); margin-left: 10rem; margin-top: 10px; width: max-content;">
                            <div style="margin-left: 8rem; padding-left: 3px; padding-right: 3px; padding-top: 3px; padding-bottom: 3px; width: 800px;">
                                <p style="font-family: 'Playfair Display', serif; font-size: 42px; color: black; align-self: flex-start; margin-right: 10px; font-weight: 600; border-bottom-width: 2px; border-bottom-color: eddea4; margin-bottom: 4px;">President Jerome Barbanida</p>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 22px; color: black; align-self: flex-start; margin-right: 10px; margin-bottom: 4px;">As the President of a thriving Realty Company, I've embarked on a journey of leadership, innovation, and unwavering dedication, shaping the company's success while helping countless individuals find their dream homes and build their futures.</p>
                            </div>
                    </div>
                </div>
                <div style="display: flex; flex-direction: row; margin-top: 7rem; margin-botton: 3rem;">
                    <img src="images/MamInin.png" alt="" style="height:260px; width:260px;position: absolute; border-width: 4px; border-color: #eddea4; border-style: solid; background-color: #fffcf2; border-radius: 0.375rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <div style="display: flex; flex-direction: column; background-color: #fffcf2; border: 2px solid #0d5385; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); margin-left: 10rem; margin-top: 10px; width: max-content;">
                            <div style="margin-left: 8rem; padding-left: 3px; padding-right: 3px; padding-top: 3px; padding-bottom: 3px; width: 800px;">
                                <p style="font-family: 'Playfair Display', serif; font-size: 42px; color: black; align-self: flex-start; margin-right: 10px; font-weight: 600; border-bottom-width: 2px; border-bottom-color: #eddea4; margin-bottom: 4px;">Chairwoman Novellyn G. Quiambao</p>
                                <p style="font-family: 'Poppins', sans-serif; font-size: 22px; color: black; align-self: flex-start; margin-right: 10px; margin-bottom: 4px;">As the Chairwoman of our esteemed Realty Company, I've led with a commitment to excellence, fostering growth, and empowering our team to redefine industry standards while creating countless success stories for our clients and partners.</p>
                            </div>
                    </div>
                </div>
        </div>
        
    </div> <!-- end div of col! -->
        <div style="margin-top:10rem;">
            @include('layouts.footer')
        </div>
    </body>
</html>
