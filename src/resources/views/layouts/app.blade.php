<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <h1 class="header__logo">FashionablyLate</h1>
            </div>
            <nav>
                <ul class="header-nav">
                    @if (Auth::check())
                    <li class="header-nav__item">
                        <form action="/logout" method="post">
                            @csrf
                            <button>logout</button>
                        </form>
                    </li>
                    @endif
                    <!-- <li class="header-nav__item">
                        <a href="">login</a>
                    </li> -->
                    <!-- <li class="header-nav__item">
                        <a href="">registor</a>
                    </li> -->
                </ul>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>