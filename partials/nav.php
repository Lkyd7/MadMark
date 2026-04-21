<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<div class="w-full h-screen dark:bg-gray-900">
    <!-- Nav -->
    <nav class="fixed top-0 left-0 w-full h-20 grid place-items-center z-50 transition-all bg-[#003347]">
        <div class="container mx-auto flex justify-between items-center h-full px-6">
            <!-- LOGO -->
            <a href="/" class="w-12">
                <img src="https://tailwindflex.com/images/logo.svg" alt="nav logo" class="object-cover object-center">
            </a>

            <!-- NAV LINKS -->
            <ul class="hidden lg:flex gap-16 text-white">
                <li><a href="" class="hover:text-[#ff7b02] transition-colors">Home</a></li>
                <li><a href="" class="hover:text-[#ff7b02] transition-colors">About</a></li>
                <li><a href="" class="hover:text-[#ff7b02] transition-colors">Services</a></li>
                <li><a href="" class="hover:text-[#ff7b02] transition-colors">Resources</a></li>
                <li><a href="" class="hover:text-[#ff7b02] transition-colors">Contact</a></li>
            </ul>

            <!-- SOCIAL LINKS -->
            <ul class="hidden lg:flex gap-4">
                <li>
                    <a href="https://instagram.com" target="_blank"
                        class="w-8 h-8 grid place-items-center text-[#003347] bg-gradient-to-b from-[#e5a55d] to-[#ff7b02] rounded-lg hover:shadow-lg">
                        <i class="uil uil-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com" target="_blank"
                        class="w-8 h-8 grid place-items-center text-[#003347] bg-gradient-to-b from-[#e5a55d] to-[#ff7b02] rounded-lg hover:shadow-lg">
                        <i class="uil uil-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://youtube.com" target="_blank"
                        class="w-8 h-8 grid place-items-center text-[#003347] bg-gradient-to-b from-[#e5a55d] to-[#ff7b02] rounded-lg hover:shadow-lg">
                        <i class="uil uil-youtube"></i>
                    </a>
                </li>
            </ul>

            <!-- TOGGLE BUTTONS -->
            <button class="block lg:hidden text-3xl text-white" id="nav__toggle-open">
                <i class="uil uil-bars"></i>
            </button>
            <button class="hidden lg:hidden text-3xl text-white" id="nav__toggle-close">
                <i class="uil uil-multiply"></i>
            </button>
        </div>
    </nav>

    <!-- MOBILE NAV LINKS -->
    <ul class="absolute top-[4rem] right-0  text-white flex-col hidden lg:hidden w-48 shadow-lg" id="mobile-nav">
        <li
            class="h-20 shadow-[-3rem_3rem_3rem_rgba(0,0,0,0.7)] bg-[#003347] hover:bg-[#003347]/80 animate-navAnimation [animation-delay:0ms]">
            <a href="" class="flex items-center h-full px-6">Home</a>
        </li>
        <li
            class="h-20 shadow-[-3rem_3rem_3rem_rgba(0,0,0,0.7)] bg-[#003347] hover:bg-[#003347]/80 animate-navAnimation [animation-delay:200ms]">
            <a href="" class="flex items-center h-full px-6">About</a>
        </li>
        <li
            class="h-20 shadow-[-3rem_3rem_3rem_rgba(0,0,0,0.7)] bg-[#003347] hover:bg-[#003347]/80 animate-navAnimation [animation-delay:400ms]">
            <a href="" class="flex items-center h-full px-6">Services</a>
        </li>
        <li
            class="h-20 shadow-[-3rem_3rem_3rem_rgba(0,0,0,0.7)] bg-[#003347] hover:bg-[#003347]/80 animate-navAnimation [animation-delay:600ms]">
            <a href="" class="flex items-center h-full px-6">Resources</a>
        </li>
        <li
            class="h-20 shadow-[-3rem_3rem_3rem_rgba(0,0,0,0.7)] bg-[#003347] hover:bg-[#003347]/80 animate-navAnimation [animation-delay:600ms]">
            <a href="" class="flex items-center h-full px-6">Contact</a>
        </li>
    </ul>
    <!-- End Of Nav -->
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script>
    //   ==================NAV BAR=====================

const nav = document.getElementById('mobile-nav');
        const openNavBtn = document.getElementById('nav__toggle-open');
        const closeNavBtn = document.getElementById('nav__toggle-close');

        openNavBtn.addEventListener('click', () => {
            nav.classList.remove('hidden');
            openNavBtn.classList.add('hidden');
            closeNavBtn.classList.remove('hidden');
        });

        closeNavBtn.addEventListener('click', () => {
            nav.classList.add('hidden');
            openNavBtn.classList.remove('hidden');
            closeNavBtn.classList.add('hidden');
        });
</script>