<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body class="font-sans">
        <div id="app">
            <header class="py-6 mb-8 pb-10">
                <h1>
                    <img alt="SPA" src="/images/logo.svg" style="width: 5em; height: auto">
                </h1>
            </header>
            <div class="container px-8">
                <main class="flex">
                    <aside class="w-64 pt-8">
                        <div class="mb-10">
                            <h5 class="uppercase font-bold mb-35 text-base">The Brand</h5>

                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/" exact>Logo</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/colors">Colors</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/typography">Typography</router-link></li>
                            </ul>
                        </div>


                        <div class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/theme">Theme</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/illustrations">Illustrations</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/animations">Animations</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </div>

                        <div>
                            <h5 class="uppercase font-bold mb-5 text-base">Stats</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/site-stats">Site Stats</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/tasks">Your Tasks</router-link></li>
                            </ul>
                        </div>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>

        </div>


        <script src="/js/app.js"></script>
    </body>
</html>
