<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Friendly Vote</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex items-center justify-between" px-8 py-4>
            <a href="/"> <img src="{{ asset('img/logo.png')}}" alt="logo" width="200"  ></a>
            <div class="flex items-center">
                @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{route('logout')}}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                    </a>
                    </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <a href="#">
                    <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" 
                    alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>

        <main class="container mx-auto flex" style="max-width:1000px">
            <div style="max-width:280px; margin-right:20px">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis molestias perspiciatis blanditiis, similique velit iusto, obcaecati maxime alias dolorum est debitis consectetur fugit dolorem ut quo laudantium mollitia modi, saepe numquam amet doloremque animi. Officiis consectetur eligendi nam officia itaque non dolores deleniti illo, earum, quidem velit obcaecati? Nam tenetur quae eligendi perspiciatis amet esse veritatis quos! Voluptatibus voluptatem doloremque a quam facilis sequi, ex tempore voluptates inventore voluptatum esse quas nobis quaerat nihil dolorum accusantium optio vel et placeat mollitia rerum enim nostrum. Nostrum sequi ut quae, nihil porro vel quidem ad voluptatum nesciunt, corrupti molestiae deserunt iure autem.
            </div>
            <div style="max-width:700px">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit aperiam quidem corrupti ducimus, harum voluptatibus, necessitatibus ipsam ratione, veniam neque quos architecto? Saepe iste aperiam autem totam. Voluptates, nihil aspernatur ipsum maiores excepturi similique, fuga velit sed natus cumque aliquid quod, quisquam est quidem dolorum ab porro alias numquam eum assumenda amet! Iusto repellat quisquam vero minus provident impedit iste nemo, nesciunt alias adipisci accusantium odit nulla optio fuga quo nostrum iure assumenda. Suscipit adipisci quo voluptatum dolorem provident labore, vero quasi incidunt architecto quisquam tempora optio quam deleniti repellat exercitationem quia autem recusandae debitis fugit dolor similique totam mollitia reiciendis ut. Impedit placeat eum similique, aliquid laudantium earum magni ut consequuntur ducimus alias officiis accusantium tempore neque tenetur sint magnam, et incidunt vitae quod dolor? Hic in iusto sit velit voluptates. Libero itaque nostrum et ratione odio minima perspiciatis repellendus rerum deserunt deleniti impedit, qui dignissimos. Ipsum fugit fugiat eaque architecto asperiores iusto quas assumenda obcaecati in delectus quisquam non mollitia, deleniti quod aperiam laborum omnis voluptatibus recusandae sequi nostrum dignissimos! Sed reprehenderit esse dignissimos ea, tempore velit earum aspernatur. Nemo, iusto minus? Veritatis et rerum ad in, debitis hic eaque perspiciatis, officiis reprehenderit assumenda ducimus quod aspernatur? Maiores.
            </div>
        </main>
    </body>
</html>
