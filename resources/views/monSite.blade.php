<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
</head>

<body>
    @include ('partials/navbar')
    <section id="bgSection">
        <section>
            <div class="text">
                <h1 class="text-white" id="monText">Hi, <br>
                    I'm <span class="text-danger">A</span>xel,<br>
                    web developer.<br>
                </h1>
                <h2 class="text-white" id="monTitre">Front End Developer / Gamer / Otaku</h2>
                <button class="btn mt-2 text-white">CONTACT ME</button>
            </div>
        </section>
    </section>

    <section id="mesSection">
        <div id="titreAboutMe">
            <h1 class="text-danger"><strong>About me</strong></h1>
            <p class="text-dark"> <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia cum illum
                    aspernatur
                    ipsa maiores dolorem non, atque fugiat explicabo. Nihil minima fuga accusamus similique accusantium
                    maxime,
                    corrupti earum reiciendis tempore.</strong>
            </p>
            <br>
            <p class="text-dark"> <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, vero
                    consectetur! Quos
                    dolores expedita aspernatur, fugiat at voluptas sunt atque natus neque deleniti nisi quibusdam
                    cumque amet
                    ab ullam similique.</strong>
            </p>
        </div>
    </section>

    {{-- <section id="mesSection">
        
    </section> --}}

    <section id="mesSection">
        <div class="row">
            <div class="col-6">
                @include ('partials/carousel')
            </div>

            <div class="col-6">
                <h1>Mes Projects</h1>
            </div>
        </div>
    </section>

    <section id="mesSection">
        <div id="contact">
            @include('partials/contact')
        </div>
    </section>

</body>

</html>
