<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('homepagewords.Laravel')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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

            .links > a {
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{__('homepagewords.Home')}}</a>
                    @else
                        <a href="{{ route('login') }}">{{__('homepagewords.Login')}}</a>

                        @if (Route::has('register'))
                            <a href="{{route('register') }}">{{__('homepagewords.Register')}}</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{__('homepagewords.Welcome')}}
                 </div>
                 <p>{{__('homepagewords.Choose Your Language')}}</p>
                <div class="links">
                    <a href="lang/en">EN</a>
                    <a href="lang/ne">नेपाली</a>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">{{__('homepagewords.Docs')}}</a>
                    <a href="https://laracasts.com">{{__('homepagewords.Laracasts')}}</a>
                    <a href="https://laravel-news.com">{{__('homepagewords.News')}}</a>
                    <a href="https://blog.laravel.com">{{__('homepagewords.Blog')}}</a>
                    <a href="https://nova.laravel.com">{{__('homepagewords.Nova')}}</a>
                    <a href="https://forge.laravel.com">{{__('homepagewords.Forge')}}</a>
                    <a href="https://vapor.laravel.com">{{__('homepagewords.Vapor')}}</a>
                    <a href="https://github.com/laravel/laravel">{{__('homepagewords.GitHub')}}</a>
                </div>
            </div>
        </div>
    </body>
</html>
