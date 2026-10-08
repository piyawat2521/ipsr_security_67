<header
    class="fixed top-0 left-0 w-full z-40 bg-white/90 backdrop-blur-md border-b border-slate-200/80 transition-all duration-300">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo: IPSR Security -->
            <a href="#" class="flex items-center gap-3 group">
                <div
                    class="w-11 h-11 rounded-xl bg-linear-to-tr from-blue-700 via-blue-600 to-indigo-500 flex items-center justify-center shadow-lg shadow-blue-600/25 group-hover:scale-105 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                        </path>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span
                        class="text-xl font-extrabold tracking-tight text-slate-900 group-hover:text-blue-600 transition-colors">
                        IPSR <span
                            class="bg-linear-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">SECURITY</span>
                    </span>
                    <span class="text-[11px] font-medium tracking-wider text-slate-500 uppercase -mt-1">Building Safety
                        Systems</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex items-center space-x-1 lg:space-x-2">
                <a href="#hero"
                    class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-blue-600 hover:bg-blue-50/80 transition-all duration-200">
                    หน้าแรก
                </a>
                <a href="#features"
                    class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-blue-600 hover:bg-blue-50/80 transition-all duration-200">
                    ฟีเจอร์หลัก
                </a>
                <a href="#why-us"
                    class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-blue-600 hover:bg-blue-50/80 transition-all duration-200">
                    ทำไมต้อง IPSR
                </a>
                <a href="#contact"
                    class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-blue-600 hover:bg-blue-50/80 transition-all duration-200">
                    ติดต่อเรา
                </a>
            </div>

            <!-- Action Buttons -->
            <div class="hidden md:flex items-center gap-3">
                <a href="tel:021234567"
                    class="hidden lg:flex items-center gap-2 text-sm font-medium text-slate-600 hover:text-blue-600 px-3 py-2">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                    </svg>
                    02-123-4567
                </a>
                <button data-modal-target="contact-modal" data-modal-toggle="contact-modal" type="button"
                    class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl text-sm font-semibold text-white bg-linear-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 focus:ring-4 focus:ring-blue-300 shadow-md shadow-blue-500/20 transition-all duration-200 transform hover:-translate-y-0.5">
                    <svg class="w-4 h-4 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </svg>
                    รับคำปรึกษาฟรี
                </button>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex md:hidden items-center">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="p-2.5 text-slate-600 rounded-xl hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">เปิดเมนูหลัก</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div class="hidden md:hidden pb-6 border-t border-slate-100 mt-2" id="navbar-sticky">
            <div class="flex flex-col space-y-2 pt-4">
                <a href="#hero"
                    class="px-4 py-2.5 rounded-lg text-base font-semibold text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    หน้าแรก
                </a>
                <a href="#features"
                    class="px-4 py-2.5 rounded-lg text-base font-semibold text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    ฟีเจอร์หลัก
                </a>
                <a href="#why-us"
                    class="px-4 py-2.5 rounded-lg text-base font-semibold text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    ทำไมต้อง IPSR
                </a>
                <a href="#contact"
                    class="px-4 py-2.5 rounded-lg text-base font-semibold text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    ติดต่อเรา
                </a>
                <div class="pt-4 border-t border-slate-100 flex flex-col gap-3">
                    <button data-modal-target="contact-modal" data-modal-toggle="contact-modal" type="button"
                        class="w-full text-center py-3 rounded-xl text-base font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-md shadow-blue-500/20">
                        รับคำปรึกษาฟรี
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>
