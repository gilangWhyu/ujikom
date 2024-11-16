<x-layout>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
            <!-- popular content -->
            <p class="text-center font-extrabold text-xl">NEW RELEASE</p>

            <div class="container mx-auto mt-10 flex flex-wrap justify-center gap-6">
                <!-- book 1 -->
                <div class="bg-white shadow-lg rounded-lg w-[300px] h-[500px] p-4 flex flex-col justify-between">
                    <img src="listbook.jpg" alt="Product Image" class="w-full h-[300px] object-cover rounded-md">
                    <div>
                        <h2 class="text-xl font-bold mt-4">3726 MDPL</h2>
                        <p class="text-gray-600 mt-2">Gunung Rinjani adalah gunung yang berlokasi di Pulau Lombok, Nusa Tenggara Barat.</p>
                    </div>
                    <!-- Label yang mengontrol checkbox untuk membuka modal -->
                    <button data-modal-target="modal-pinjam" data-modal-toggle="modal-pinjam"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        pinjam
                    </button>
                </div>

                <!-- book 2 -->
                <div class="bg-white shadow-lg rounded-lg w-[300px] h-[500px] p-4 flex flex-col justify-between">
                    <img src="book1.jpg" alt="Product Image" class="w-full h-[300px] object-cover rounded-md">
                    <div>
                        <h2 class="text-xl font-bold mt-4">Your Name</h2>
                        <p class="text-gray-600 mt-2">Dua remaja berbagi hubungan magis yang mendalam setelah mengetahui bahwa mereka bertukar tubuh
                        </p>
                    </div>
                    <!-- Label yang mengontrol checkbox untuk membuka modal -->
                    <button data-modal-target="modal-pinjam" data-modal-toggle="modal-pinjam"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        pinjam
                    </button>
                </div>

                <!-- book 3 -->
                <div class="bg-white shadow-lg rounded-lg w-[300px] h-[500px] p-4 flex flex-col justify-between">
                    <img src="sole.jpg" alt="Product Image" class="w-full h-[300px] object-cover rounded-md">
                    <div>
                        <h2 class="text-xl font-bold mt-4">Solo Leveling</h2>
                        <p class="text-gray-600 mt-2">petualangan Sung Jin-woo, seorang pemburu yang awalnya dianggap lemah di dunia penuh monster
                        </p>
                    </div>
                    <!-- Label yang mengontrol checkbox untuk membuka modal -->
                    <button data-modal-target="modal-pinjam" data-modal-toggle="modal-pinjam"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        pinjam
                    </button>
                </div>
            </div>
        </div>

        <!-- category -->
        <div class="mx-auto max-w-7xl px-2 py-7 sm:px-12 lg:px-3">
            <p class="text-center font-extrabold text-xl">BUKU-BUKU TERSEDIA</p>

            <div class="relative inline-block text-left">
                <!-- Checkbox for toggling the dropdown -->
                <input type="checkbox" id="dropdown-toggle" class="peer hidden">

                <!-- Dropdown button -->
                <label for="dropdown-toggle"
                    class="inline-flex justify-between items-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-blue-600 text-white font-medium hover:bg-blue-500 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Kategori
                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </label>

                <!-- Dropdown menu (initially hidden) -->
                <div
                    class="peer-checked:block hidden origin-top-left absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 sm:w-64">
                    <div class="py-1">
                        <a href="{{ url('novel') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">novel</a>
                        <a href="{{ url('comic') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">comic</a>
                        <a href="{{ url('agama') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Agama</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">default</a>
                    </div>
                </div>
            </div>

            {{-- main content --}}
            <div class="container mx-auto mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- book 1 -->
                <div class="bg-white shadow-lg rounded-lg w-full h-[500px] p-4 flex flex-col justify-between">
                    <img src="image/novel/n1.jpg" alt="kphi" class="w-full h-[300px] object-cover rounded-md">
                    <div>
                        <h2 class="text-lg font-bold mt-4">Kita Pergi Hari Ini</h2>
                        <p class="text-gray-600 mt-2">Lima anak-anak yang tinggal di sebuah kota bernama Kota Suara.</p>
                    </div>
                    <!-- Modal toggle -->
                    <button data-modal-target="modal-pinjam" data-modal-toggle="modal-pinjam"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        pinjam
                    </button>
                </div>

                <!-- book 2 -->
                <div class="bg-white shadow-lg rounded-lg w-full h-[500px] p-4 flex flex-col justify-between">
                    <img src="image/comic/c1.jpg" alt="sj" class="w-full h-[300px] object-cover rounded-md">
                    <div>
                        <h2 class="text-lg font-bold mt-4">Si Juki Cari Kerja!</h2>
                        <p class="text-gray-600 mt-2">petualangan Juki dalam mencari pekerjaan setelah lulus SMA</p>
                    </div>
                    <button data-modal-target="modal-pinjam" data-modal-toggle="modal-pinjam"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        pinjam
                    </button>
                </div>

                <!-- book 3 -->
                <div class="bg-white shadow-lg rounded-lg w-full h-[500px] p-4 flex flex-col justify-between">
                    <img src="image/agama/a1.jpg" alt="pembangunan-karakter-islam"
                        class="w-full h-[300px] object-cover rounded-md">
                    <div>
                        <h2 class="text-lg font-bold mt-4">Pembangunan Karakter islam</h2>
                        <p class="text-gray-600 mt-2">Tasawuf merupakan batin (esoteris) dari ajaran Islam.
                        </p>
                    </div>
                    <!-- Label yang mengontrol checkbox untuk membuka modal -->
                    <button data-modal-target="modal-pinjam" data-modal-toggle="modal-pinjam"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        pinjam
                    </button>
                </div>

                <!-- book 4 -->
                <div class="bg-white shadow-lg rounded-lg w-full h-[500px] p-4 flex flex-col justify-between">
                    <img src="image/comic/c3.jpg" alt="demon-slayer" class="w-full h-[300px] object-cover rounded-md">
                    <div>
                        <h2 class="text-lg font-bold mt-4">Demon Slayer</h2>
                        <p class="text-gray-600 mt-2">Koyoharo Gotouge
                        </p>
                    </div>
                    <!-- Label yang mengontrol checkbox untuk membuka modal -->
                    <button data-modal-target="modal-pinjam" data-modal-toggle="modal-pinjam"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        pinjam
                    </button>
                </div>

            </div>

            {{-- modal pinjam --}}
            <!-- Main modal -->
            <div id="modal-pinjam" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Kita Pergi Hari Ini
                            </h3>
                            <button type="button"
                                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="modal-pinjam">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <p class="text-xl font-serif">descriptoin</p>
                            <form class="space-y-4" action="#">
                                @csrf
                                <div class="text-gray-400 font-mono">
                                    <p>PENERBIT : gilang</p>
                                    <p>PENULIS : gilang</p>
                                    <p>TAHUN TERBIT : 30/10/2024</p>
                                    <hr>
                                </div>
                                <div>
                                    <p>category : novel</p> 
                                </div>
                                
                                <!-- Nama Peminjam -->
                                <div>
                                    <label for="name" class="block text-gray-700">Nama Peminjam</label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full border border-gray-300 rounded p-2 mt-1 focus:outline-none focus:border-blue-500">
                                </div>
                                <!-- Tanggal pengembalian -->
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="borrow_date" class="block text-gray-700">Tanggal Peminjaman</label>
                                    <input type="date" id="borrow_date" name="borrow_date" required
                                        class="w-full border border-gray-300 rounded p-2 mt-1 focus:outline-none focus:border-blue-500">
                                </div>
                                <div>
                                    <label for="text" class="block text-gray-700">jumlah pinjam</label>
                                    <input type="number" id="name" name="name" required
                                        class="w-full border border-gray-300 rounded p-2 mt-1 focus:outline-none focus:border-blue-500">
                                </div>

                                <button type="submit"
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">pinjam</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </main>
</x-layout>
