<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Maxmoll</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
    html,
    body {
        background-color: #fff;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .hidden {
        display: none;
    }

    .h2 {
        margin-bottom: 0;
    }

    .h3 {
        margin-bottom: 0;
    }

    .h4 {
        color: black;
    }

    .h5 {
        margin-bottom: 0;
    }

    p {
        margin-bottom: 0;
    }

    a {
        text-decoration: none;
        color: black;
        font-weight: 700;
    }

    a:hover {
        text-decoration: none;
        color: black;
    }

    .content-logo {
        height: -webkit-fill-available;
        align-items: center;
        padding-top: 0.5rem;
    }
    </style>
</head>

<body>
    <header>
        <section class="mx-auto">
            <div class="content d-flex w-100" style="justify-content:space-between; height: 50px;">
                <div class="col-sm-8 d-flex align-items-center pl-0 pr-0">
                    <div class="content-logo bg-primary pl-3 pr-3">
                        <a href="../welcome">
                            <p class="h3 text-white">%ЛОГО%</p>
                        </a>
                    </div>
                    <div class="content-address d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <p class="h5">Москва, Кремль</p>
                    </div>
                    <div class="content-phone pl-4">
                        <a class="d-flex w-full" href="tel:8-800-555-55-55">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                            <p class="h5 pl-2">8-800-555-55-55</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 d-flex justify-content-end align-items-center">
                    <a href="{{ route('display_card') }}">
                        <div class="content-card">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-cart4" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class=" mx-auto">
            <div class="content-links d-flex p-3 text-dark" style="gap:1rem;">
                <a href="../welcome">
                    <p class="h4 link-one font-weight-bold">Главная</p>
                </a>
                <div class="block-catalogs-all d-grid">
                    <div class="block-catalog d-flex align-items-center">
                        <p class="h4 link-two font-weight-bold">Каталог</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#5B9BD5"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </div>
                    <div class="block-catalog-list hidden d-grid border border-1 border-dark">
                        @foreach ($categories as $category)

                        <section name="categories">
                            <a href="{{ route('display_category_tovars',$category->id) }}">
                                <option class="text-dark font-weight-bold" value="{{ $category->name }}">
                                    {{ $category->name }}</option>
                            </a>
                        </section>

                        @endforeach
                    </div>
                </div>
                <p class="h4 link-three font-weight-bold">О нас</p>
            </div>
        </section>
    </header>
    <main>
        @if($message = Session::get('success'))
        <div class="container message-success bg-success rounded">
            <p class="text-white">{{ $message }}</p>
        </div>
        @endif

        <div class="card-content container d-flex justify-content-between">
            @foreach ($cards as $card)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$card->name}}</h5>
                    <div class="d-flex ">
                        <p class="card-text">{{$card->description}}</p>
                        <p class="card-text pl-3">{{$card->price}}Р</p>
                    </div>
                </div>
                <form action="{{ route('destroy_card', $card->id) }}" method="post">
                    @csrf
                    @method ('DELETE')
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="button-delete-card btn btn-danger text-white h-35" btn-lg
                            btn-block">Убрать из
                            корзины</button>
                    </div>
                </form>
            </div>
            @endforeach
        </div>

    </main>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
    const block_catalog = document.querySelector('div.block-catalog');
    const block_catalog_list = document.querySelector('div.block-catalog-list');

    block_catalog.addEventListener('', () => {
        block_catalog_list.classList.toggle('hidden');
    })

    block_catalog.addEventListener('click', () => {
        block_catalog_list.classList.toggle('hidden');
    })


    const button_add_card = document.querySelector('button.button-add-card');

    document.addEventListener('click', () => {
        button_add_card.classList.remove('hidden');
    })
    </script>
</body>

</html>