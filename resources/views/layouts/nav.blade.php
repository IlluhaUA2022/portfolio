<div class="text-grey-400 bg-sky-700">
    <div class="flex flex-row items-center max-w-screen-xl px-8 mx-auto text-white">
        <div class="flex w-full md:w-auto justify-between py-6">
            <div class="relative">
                <h1 class="font-bold text-white text-lg pr-5 relative z-50">Skilline</h1>
                <svg class="w-11 h-11 absolute -top-2 -left-3 z-40" viewBox="0 0 79 79" fill="none">
                    <path d="M35.9645 2.94975C37.9171 0.997129 41.0829 0.997127 43.0355 2.94975L76.0502 35.9645C78.0029 37.9171 78.0029 41.0829 76.0503 43.0355L43.0355 76.0502C41.0829 78.0029 37.9171 78.0029 35.9645 76.0503L2.94975 43.0355C0.997129 41.0829 0.997127 37.9171 2.94975 35.9645L35.9645 2.94975Z" stroke="#26C1F2" stroke-width="3"/>
                </svg>
            </div>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="w-8"  viewBox="0 0 24 24">
                    <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 17h-12v-2h12v2zm0-4h-12v-2h12v2zm0-4h-12v-2h12v2z"/>
                </svg>
            </button>
        </div>
        <nav  class="h-0 hidden md:block md:transform-none md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300">
            <a class="px-4 py-2 font-medium text-lg bg-transparent rounded-xl md:ml-4 hover:text-gray-300 focus:outline-none focus:shadow-outline" href="#">Home</a>
            <a class="px-4 py-2 font-medium text-lg bg-transparent rounded-xl md:ml-4 hover:text-gray-300 focus:outline-none focus:shadow-outline" href="#">Careers</a>
            <a class="px-4 py-2 font-medium text-lg bg-transparent rounded-xl md:ml-4 hover:text-gray-300 focus:outline-none focus:shadow-outline" href="#">Blog</a>
            <a class="px-4 py-2 font-medium text-lg bg-transparent rounded-xl md:ml-4 hover:text-gray-300 focus:outline-none focus:shadow-outline" href="#">About Us</a>
            <a class="px-10 py-3 font-medium text-lg text-center bg-white text-gray-600 rounded-full md:ml-4" href="#">Login</a>
            <a class="px-10 py-3 font-medium text-lg text-center bg-yellow-500 text-gray-600 rounded-full md:ml-4" href="#">Sign Up</a>
        </nav>
    </div>
</div>
