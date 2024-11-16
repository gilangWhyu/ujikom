<x-layout>
    <div class="mx-auto max-w-7xl px-2 py-7 sm:px-12 lg:px-3">
        <p class="text-center font-extrabold text-xl">COMIC</p>

        <div class="relative inline-block text-left">
            <!-- Checkbox for toggling the dropdown -->
            <input type="checkbox" id="dropdown-toggle" class="peer hidden">

            <!-- Dropdown button -->
            <label for="dropdown-toggle"
                class="inline-flex justify-between items-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-blue-600 text-white font-medium hover:bg-blue-500 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Comic
                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
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
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">komik</a>
                    <a href="{{ url('agama') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Agama</a>
                    <a href="{{ url('home') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Default</a>
                </div>
            </div>

        </div>
        <div class="container mx-auto mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg w-full h-[500px] p-4 flex flex-col justify-between">
                <img src="image/comic/c3.jpg" alt="Product Image"
                    class="w-full h-[300px] object-cover rounded-md">
                <div>
                    <h2 class="text-xl font-bold mt-4">Demon Slayer</h2>
                    <p class="text-gray-600 mt-2">Koyoharo Gotouge</p>
                </div>
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
                                pinjam
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
                                    <p>TAHUN TERBIT : gilang</p>
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


</x-layout>
