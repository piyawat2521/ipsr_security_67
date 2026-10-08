<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel + Tailwind CSS & Flowbite</title>

    @fonts

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white font-sans antialiased selection:bg-blue-500 selection:text-white min-h-screen flex flex-col justify-between">

    <!-- Header / Flowbite Navigation Bar -->
    <header>
        <nav
            class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 fixed w-full z-20 top-0 inset-s-0">
            <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <div
                        class="p-2 bg-linear-to-tr from-blue-600 to-indigo-500 rounded-xl shadow-lg shadow-blue-500/20">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>
                    </div>
                    <span
                        class="self-center text-xl font-bold whitespace-nowrap dark:text-white bg-clip-text text-transparent bg-linear-to-r from-blue-600 to-indigo-500">
                        IPSR Security App
                    </span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse items-center gap-2">
                    <!-- Flowbite Modal Trigger Button -->
                    <button data-modal-target="flowbite-demo-modal" data-modal-toggle="flowbite-demo-modal"
                        class="text-white bg-linear-to-r from-blue-600 to-indigo-600 hover:bg-linear-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-4 py-2 text-center transition-all duration-300 shadow-md shadow-blue-500/20"
                        type="button">
                        Test Flowbite Modal
                    </button>
                    <!-- Mobile Menu Toggle Button -->
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-600 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#features"
                                class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-600 md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Features</a>
                        </li>
                        <li>
                            <a href="#flowbite-components"
                                class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-600 md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Components</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Hero Section -->
    <main class="mt-20">
        <section class="relative overflow-hidden pt-12 pb-16 md:pt-20 md:pb-24">
            <div
                class="absolute inset-0 bg-linear-to-b from-blue-500/10 via-transparent to-transparent pointer-events-none">
            </div>
            <div class="max-w-7xl px-4 mx-auto text-center relative z-10">
                <span
                    class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-semibold bg-blue-100 text-blue-800 dark:bg-blue-900/40 dark:text-blue-300 border border-blue-200 dark:border-blue-800 mb-6">
                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                    Tailwind CSS v4 + Flowbite Installed Successfully
                </span>

                <h1
                    class="mb-6 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-6xl dark:text-white max-w-4xl mx-auto">
                    Laravel Application with <span
                        class="bg-linear-to-r from-blue-600 via-indigo-500 to-purple-500 bg-clip-text text-transparent">Tailwind
                        CSS & Flowbite</span>
                </h1>

                <p
                    class="mb-8 text-lg font-normal text-gray-600 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400 max-w-3xl mx-auto">
                    ระบบพัฒนาด้วย Laravel Framework พร้อมใช้งาน Tailwind CSS v4 และ Flowbite Component Library
                    สมบูรณ์เรียบร้อยแล้ว
                </p>

                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="#flowbite-components"
                        class="inline-flex justify-center items-center py-3 px-6 text-base font-medium text-center text-white rounded-lg bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 transition duration-200 shadow-lg shadow-blue-500/25">
                        ดูตัวอย่าง Components
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <button data-dropdown-toggle="demoDropdown"
                        class="text-gray-900 dark:text-white bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 border border-gray-200 dark:border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:focus:ring-gray-700 font-medium rounded-lg text-base px-6 py-3 text-center inline-flex items-center justify-center transition duration-200">
                        Flowbite Dropdown
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Flowbite Dropdown Menu -->
                    <div id="demoDropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-xl w-44 dark:bg-gray-700 border border-gray-100 dark:border-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Security</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Components Feature Section -->
        <section id="flowbite-components"
            class="py-12 bg-white dark:bg-gray-800/50 border-y border-gray-200 dark:border-gray-800">
            <div class="max-w-7xl px-4 mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                        องค์ประกอบหลักที่ได้รับการติดตั้ง
                    </h2>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        ทุกอย่างพร้อมสำหรับการพัฒนา UI ที่สวยงาม รวดเร็ว และตอบสนองทุกหน้าจอ
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature Card 1 -->
                    <div
                        class="p-6 bg-gray-50 dark:bg-gray-800 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center text-blue-600 dark:text-blue-400 mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-23">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Tailwind CSS v4</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            ใช้ระบบ Vite Plugin ล่าสุดด้วย `@tailwindcss/vite` รันการประมวลผล CSS
                            ได้อย่างรวดเร็วเป็นพิเศษ
                        </p>
                    </div>

                    <!-- Feature Card 2 -->
                    <div
                        class="p-6 bg-gray-50 dark:bg-gray-800 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow">
                        <div
                            class="w-12 h-12 rounded-xl bg-indigo-100 dark:bg-indigo-900/50 flex items-center justify-center text-indigo-600 dark:text-indigo-400 mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Flowbite Interactivity</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            พร้อมใช้งาน Interactive UI ทั้ง Dropdown, Modal, Accordion, Tooltip โดยนำเข้า JS ใน `app.js`
                            แล้ว
                        </p>
                    </div>

                    <!-- Feature Card 3 -->
                    <div
                        class="p-6 bg-gray-50 dark:bg-gray-800 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow">
                        <div
                            class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-900/50 flex items-center justify-center text-purple-600 dark:text-purple-400 mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Dark Mode Support</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            รองรับโหมดมืด (Dark Mode) อัตโนมัติ ปรับแต่งโทนสีได้อย่างสวยงามสบายตา
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Flowbite Modal Component Demonstration -->
    <div id="flowbite-demo-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div
                class="relative bg-white rounded-2xl shadow-2xl dark:bg-gray-800 border border-gray-100 dark:border-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200 dark:border-gray-700">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Flowbite Modal พร้อมใช้งาน!
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="flowbite-demo-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-600 dark:text-gray-300">
                        นี่คือตัวอย่าง Popup Modal จาก **Flowbite** ที่ทำงานร่วมกับ JavaScript Data Attribute
                        (`data-modal-toggle`) ในระบบ Laravel ของคุณโดยไม่ต้องเขียนสคริปต์เพิ่ม
                    </p>
                    <div
                        class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-700 dark:text-blue-400 border border-blue-200 dark:border-blue-600">
                        <span class="font-medium">เรียบร้อย!</span> คุณสามารถนำ UI Components อื่นๆ จากเอกสาร <a
                            href="https://flowbite.com" target="_blank" class="underline font-bold">Flowbite
                            Documentation</a> มาใช้ในโปรเจกต์นี้ได้เลยทันที
                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-700 justify-end space-x-3">
                    <button data-modal-hide="flowbite-demo-modal" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        ตกลง
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 py-6">
        <div class="max-w-7xl mx-auto px-4 text-center text-sm text-gray-500 dark:text-gray-400">
            <p>Laravel v{{ app()->version() }} (PHP v{{ PHP_VERSION }}) • Tailwind CSS v4 • Flowbite</p>
        </div>
    </footer>

</body>

</html>
