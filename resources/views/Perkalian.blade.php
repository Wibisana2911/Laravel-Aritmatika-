<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
    <div behavior="alternate" class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
        <div class="md:flex w-full">
            <div class="hidden md:block w-1/2 bg-[conic-gradient(at_top_left,_var(--tw-gradient-stops))] from-yellow-600 via-red-300 to-indigo-400 py-10 px-10  ">
            <h1 class="font-bold text-3xl mt-52 text-black text-center ">PERKALIAN ( X )</h1>
            </div>
            <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                <div class="text-center mb-10">
                    <h1 class="font-bold text-3xl text-gray-900">KALKULATOR</h1>
                    <p>Program Operasi Aritmatika</p>
                </div>

                    <div class="flex -mx-3 ml-16">
                    <form action="" method="post">
                        @csrf
                        <div class="w-full px-3 mb-12">
                            <label for="" class="text-xs font-serif font-semibold px-3 ml-20">ANGKA PERTAMA</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                <input name="angka1" type="text" id="angka1" class="py-2 pl-2 text-center bg-gray-200 rounded-lg w-content required md:py-4 focus:outline-none" placeholder="Masukan Angka Pertama" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex -mx-3 ml-16">
                        <div class="w-full px-3 mb-12">
                            <label for="" class="text-xs font-serif font-semibold px-3 ml-20">ANGKA KEDUA</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                                <input name="angka2" type="text" id="angka2" class="py-2 pl-2 text-center rounded-lg w-content required bg-gray200 md:py-4 focus:outline-none" placeholder="Masukan Angka Kedua" />
                            </div>
                        </div>
                    </div>
                    
                <div class="flex mb-6">
         
                    <div class="flex mr-2">
                            <button
                                class="px-4 py-2 mt-3 ml-24 text-base text-white transition duration-300 ease-in-out bg-blue-500 rounded-md cursor-pointer hover:shadow-lg hover:opacity-50 justify-self-center">
                                Hasil
                            </button>
                        </div>
                        
                        <div class="flex mr-2">
                            <a href="/perkalian"
                                class="mt-3 cursor-pointer px-4 py-2.5 text-base text-white bg-red-700 rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">
                                Reset
                            </a>
                        </div>
                        
                        <div class="flex mr-2">
                        <a href="/"
                            class="mt-3 cursor-pointer px-4 py-2.5 text-base text-white bg-slate-700 rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">
                            Menu
                        </a>
                        </div>
                        </form>
                </div>
            </div>
            
        </div>
        <div class="p-6 m-3  from-gray-900 to-gray-600 bg-gradient-to-r border rounded-lg shadow-lg ">

        <div class="overflow-x-auto sm:-mx-6 lg:-mx-auto">
            <div class="inline-block min-w-full py-4 sm:px-6">
            <div class="overflow-hidden">
                <h2 class="font-bold text-center text-white">Hasil</h2>
                        <div class="flex items-center pt-4 mb-6 text-lg md:mb-8">
                        <input disabled type="number" id="angka2" class="w-full py-2 pl-12 bg-gray-200 rounded-lg md:py-4 focus:outline-none" value="{{$hasil}}" />
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>

       
</body>

</html>
