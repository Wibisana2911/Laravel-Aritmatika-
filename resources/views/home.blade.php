<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
<div class="relative py-16 bg-gray-800 shadow-2xl">  
    <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
        <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
            <div class="rounded-xl bg-white shadow-xl">
                <div class="p-6 sm:p-16">
                    <div class="space-y-4">
                        
                        <h2 class="text-center mb-8 text-3xl text-black font-serif font-semibold">KALKULATOR OPERASI ARITMATIKA</h2>
                        <h1 class="text-center mb-10 text-2xl text-black font-serif font-medium">MENU : </h1>
                    </div>
                    <div class="mt-16 grid space-y-4">
                        
                    <button class=" bg-gradient-to-r from-cyan-700 via-sky-800 to-purple-800 group h-12 px-6 border-2 border-black  rounded-full transition duration-300 
                                     hover:border-yellow-400 focus:bg-blue-50 active:bg-blue-100 shadow-2xl">
                            <div class="relative flex items-center space-x-4 justify-center">
                                 
                                <a href="/kalkulator">
                                <span class="block w-max font-semibold tracking-wide text-white text-sm transition duration-300 group-hover:text-yellow-600 sm:text-base font-serif">PENJUMLAHAN ( + ) </span>
                            </a></div>
                        </button>

                        <button class=" bg-[conic-gradient(at_left,_var(--tw-gradient-stops))] from-teal-400 via-cyan-800 to-rose-500 group h-12 px-6 border-2 border-black rounded-full transition duration-300 
                                     hover:border-yellow-400 focus:bg-blue-50 active:bg-blue-100 shadow-2xl">
                            <div class="relative flex items-center space-x-4 justify-center">
                                 
                                <a href="/pengurangan">
                                <span class="block w-max font-semibold tracking-wide text-white text-sm transition duration-300 group-hover:text-yellow-600 sm:text-base font-serif">PENGURANGAN ( - ) </span>
                            </a></div>
                        </button>

                        <button class=" bg-[conic-gradient(at_top_left,_var(--tw-gradient-stops))] from-yellow-600 via-red-300 to-indigo-400 group h-12 px-6 border-2 border-black rounded-full transition duration-300 
                                     hover:border-yellow-400 focus:bg-blue-50 active:bg-blue-100 shadow-2xl">
                            <div class="relative flex items-center space-x-4 justify-center">
                                 
                                <a href="/perkalian">
                                <span class="block w-max font-semibold tracking-wide text-black text-sm transition duration-300 group-hover:text-yellow-600 sm:text-base font-serif">PERKALIAN ( x ) </span>
                            </a></div>
                        </button>

                        <button class=" bg-[conic-gradient(at_right,_var(--tw-gradient-stops))] from-gray-700 via-rose-600 to-cyan-800 group h-12 px-6 border-2 border-black rounded-full transition duration-300 
                                     hover:border-yellow-400 focus:bg-blue-50 active:bg-blue-100 shadow-2xl">
                            <div class="relative flex items-center space-x-4 justify-center">
                                 
                                <a href="/pembagian">
                                <span class="block w-max font-semibold tracking-wide text-black text-sm transition duration-300 group-hover:text-yellow-600 sm:text-base font-serif">PEMBAGIAN ( ÷ ) </span>
                            </a>
                            </div>
                        </button>
                
                    </div>

                    <div class="mt-32 space-y-4 text-gray-600 text-center sm:-mb-8">
                        <p class="text-xs">KOMANG WIBISANA | 2115101063</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
