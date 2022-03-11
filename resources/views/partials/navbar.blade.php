<nav class="flex items-center justify-between pt-8">
    <ul class="flex items-center space-x-5">
        <li><a href="#">Group Trips</a></li>
        <li><a href="#">Private Trips</a></li>
        <li><a href="#">Past Trips & Reviews</a></li>
    </ul>
    <div class="mx-auto">
        <h1 class="font-semibold text-3xl">Luxe Tribes</h1>
    </div>
    <ul class="flex items-center space-x-5">
        <li><a href="#">About us</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact us</a></li>
        <li
            class="group flex items-center space-x-2 px-2 border border-gray-200 p-[0.2rem] hover:bg-pink-300 hover:text-white hover:border-pink-300 rounded-full">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                </path>
            </svg>
            <span>Search</span>
        </li>
        @if (Route::has('login'))
            @auth
                <li
                    class="px-2 border border-gray-200 p-[0.3rem] hover:bg-pink-300 hover:text-white hover:border-pink-300 rounded-full">
                    <a class="flex items-center space-x-2" href="#">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        <span>{{ Auth::user()->username }}</span>
                    </a>

                </li>
            @else
                <li
                    class="px-2 border border-gray-200 p-[0.3rem] hover:bg-pink-300 hover:text-white hover:border-pink-300 rounded-full">
                    <a class="flex items-center space-x-2" href="#">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        <span>Log in</span>
                    </a>

                </li>
            @endauth
        @endif
    </ul>
</nav>
