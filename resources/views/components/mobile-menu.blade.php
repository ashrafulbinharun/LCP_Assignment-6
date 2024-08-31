{{-- side bar start  --}}
<div class="sidebar fixed left-[100%] top-0 z-[999] h-full w-full bg-btn/60 transition-all duration-500">
    <div class="ml-auto h-full min-h-[750px] w-[300px] bg-card px-[30px] pt-[60px] md:min-h-[700px]">
        <div class="relative flex justify-center">
            <span class="sidebar-close group absolute left-[-78px] rounded-lg bg-card px-[15px] py-[10px] text-[26px]">
                <i
                    class="fa-regular fa-xmark text-white transition-all duration-500 group-hover:rotate-90 group-hover:text-theme"></i>
            </span>
            <div>
                <img src="{{ asset('assets/images/logo.svg') }}" alt="Lariv - Portfolio Template" />
            </div>
        </div>
        <div class="my-[30px] border-t border-[#ddd]"></div>
        <nav class="mt-[30px]">
            <ul class="grid gap-[24px]">
                <li class="text-[18px] font-semibold">
                    <a href="{{ route('home') }}" class="navActive">Home</a>
                </li>
                <li class="text-[18px] font-semibold">
                    <a href="{{ route('about') }}" class="navNotActive">About</a>
                </li>
                <li class="text-[18px] font-semibold">
                    <a href="{{ route('projects') }}" class="navNotActive">Portfolio</a>
                </li>
            </ul>
        </nav>
        <div class="my-[30px] border-t border-[#ddd]"></div>

        <div class="contact mt-[40px] pb-[20px] md:mt-[0px]">
            <div>
                <p class="text-[20px] font-semibold text-white">Follow Me:</p>

                <div class="mt-[20px] flex gap-3">
                    <a href="#">
                        <button
                            class="boxShadow rounded-lg bg-btn w-[40px] h-[40px] flex justify-center items-center text-text shadow-none transition duration-300 hover:text-theme">
                            <i class="fa-brands fa-facebook-f text-[22px]"></i>
                        </button>
                    </a>
                    <a href="#">
                        <button
                            class="boxShadow rounded-lg bg-btn w-[40px] h-[40px] flex justify-center items-center text-text shadow-none transition duration-300 hover:text-theme">
                            <i class="fa-brands fa-twitter text-[22px]"></i>
                        </button>
                    </a>
                    <a href="#">
                        <button
                            class="boxShadow rounded-lg bg-btn w-[40px] h-[40px] flex justify-center items-center text-text shadow-none transition duration-300 hover:text-theme">
                            <i class="fa-brands fa-linkedin-in text-[22px]"></i>
                        </button>
                    </a>
                    <a href="#">
                        <button
                            class="boxShadow rounded-lg bg-btn w-[40px] h-[40px] flex justify-center items-center text-text shadow-none transition duration-300 hover:text-theme">
                            <i class="fa-brands fa-instagram text-[22px]"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- side bar end  --}}
