@extends('layout.app')

@section('title', 'About')

@section('content')
    <section class="py-[30px] md:py-[80px]">
        <div class="container">
            <div class="grid grid-cols-12 gap-[20px]">
                <div class="col-span-12 lg:col-span-4 lg:pr-[30px]">
                    <div class="menuBox" data-aos="fade-up" data-aos-delay="50">
                        <div class="inline-block rounded-full border border-text px-[20px] py-[5px]">
                            <div class="flex items-center gap-[6px]">
                                <span>
                                    <i class="fa-regular fa-user text-[14px] text-white"></i>
                                </span>
                                <span class="pl-[6px] text-[14px] text-white">
                                    About
                                </span>
                            </div>
                        </div>
                    </div>
                    <br />
                    <!-- Profile Info  -->
                    <div class="info-card mt-[10px] md:mt-[30px]">
                        <div class="rounded-[20px] bg-card px-[30px] py-[40px]">
                            <div>
                                <div class="mt-[25px]">
                                    <div class="text-center">
                                        <h3 class="wow fadeIn animated text-[24px] font-semibold text-white"
                                            data-aos="fade-up" data-aos-delay="100">
                                            Hy! I’m
                                            <span class="text-theme"> ASHRAFUL!</span>
                                        </h3>
                                        <p class="mt-[6px] text-text" data-aos="fade-up" data-aos-delay="150">
                                            Software Developer
                                        </p>
                                        <div class="mt-[26px] flex justify-center" data-aos="fade-up" data-aos-delay="200">
                                            <img src="{{ asset('assets/images/profile/user.png') }}"
                                                alt="Lariv portfolio web template"
                                                class="w-full rounded-2xl object-cover" />
                                        </div>
                                        <div class="mt-[26px]" data-aos="fade-up" data-aos-delay="250">
                                            <p class="text-[20px] text-text" data-aos="fade-up" data-aos-delay="100">
                                                ashrafulkarim.dev@gmail.com
                                            </p>
                                            <p class="mt-[10px] text-text" data-aos="fade-up" data-aos-delay="150">
                                                Dhaka Cantonment<br />
                                                Dhaka 1206
                                            </p>
                                        </div>
                                        <div class="mt-[30px] flex justify-center gap-3" data-aos="fade-up"
                                            data-aos-delay="200">
                                            <a href="#" class="block">
                                                <i class="fa-brands fa-facebook-f socialRound"></i>
                                            </a>
                                            <a href="#" class="block">
                                                <i class="fa-brands fa-twitter socialRound"></i>
                                            </a>
                                            <a href="#" class="block">
                                                <i class="fa-brands fa-linkedin-in socialRound"></i>
                                            </a>
                                            <a href="#" class="block">
                                                <i class="fa-brands fa-github socialRound"></i>
                                            </a>
                                        </div>
                                        <div class="mt-[30px]" data-aos="fade-up" data-aos-delay="250">
                                            <a href="{{ asset('assets/pdf/Ashraful_Karim-CV.pdf') }}"
                                                class="block rounded-full border-2 border-theme bg-theme py-[10px] font-medium text-white transition-all duration-300 hover:bg-transparent">
                                                Download CV
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-8">
                    <div class="mt-[80px]">
                        <h2 class="text-[32px] font-semibold uppercase leading-tight text-white md:text-[52px]"
                            data-aos="fade-up" data-aos-delay="50">
                            I can develop that
                            <br class="hidden md:block" />
                            help
                            <span class="text-theme"> people!</span>
                        </h2>
                        <p class="mt-[20px] text-text" data-aos="fade-up" data-aos-delay="100">
                            {{ $info['description'] }}
                        </p>
                    </div>

                    <!-- Education Information  -->
                    <div class="mt-[60px]">
                        <h2 class="text-[32px] font-semibold" data-aos="fade-up" data-aos-delay="50">
                            Educational <span class="text-theme">Qualifications:</span>
                        </h2>
                        @foreach ($info['education'] as $education)
                            <div class="items mt-[40px] grid gap-[40px]">
                                <div class="item relative grid gap-[40px] border-l-[2px] border-theme pb-[16px] pl-[35px]">
                                    <i
                                        class="fa-solid fa-fire-flame-curved absolute left-[-13px] top-[-25px] text-[30px] text-theme"></i>

                                    <div>
                                        <p class="text-text" data-aos="fade-up" data-aos-delay="100">
                                            {{ $education['year'] }}
                                        </p>
                                        <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]"
                                            data-aos="fade-up" data-aos-delay="150">
                                            {{ $education['degree'] }}
                                        </h3>
                                        <p class="mt-[10px] text-[18px] font-medium text-text" data-aos="fade-up"
                                            data-aos-delay="200">
                                            {{ $education['institution'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Skill Information  -->
                    <div class="mt-[60px]">
                        <h2 class="text-[32px] font-semibold" data-aos="fade-up" data-aos-delay="50">
                            My <span class="text-theme">Advantages:</span>
                        </h2>

                        @foreach ($info['skills'] as $skill)
                            <div class="items mt-[40px] grid gap-[40px]">
                                <div class="item relative grid gap-[40px] border-l-[2px] border-theme pb-[16px] pl-[35px]">
                                    <i
                                        class="fa-solid fa-fire-flame-curved absolute left-[-13px] top-[-25px] text-[30px] text-theme"></i>

                                    <div>
                                        <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]"
                                            data-aos="fade-up" data-aos-delay="150">
                                            {{ $skill['name'] }}
                                        </h3>
                                        <div class="mt-[20px] w-full">
                                            <div class="mb-2 flex items-center justify-between gap-4" data-aos="fade-up"
                                                data-aos-delay="250">
                                                <h6 class="text-white">{{ $skill['percentage'] }}%</h6>
                                            </div>
                                            <div
                                                class="border border-theme/20 bg-theme/10 py-[8px] px-1 flex items-center h-[12px] w-full overflow-hidden font-sans text-xs font-medium rounded-full">
                                                <div class="h-[6px] justify-center overflow-hidden rounded-full bg-theme wow"
                                                    style="width: {{ $skill['percentage'] }}%;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div>
                                        <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]"
                                            data-aos="fade-up" data-aos-delay="150">
                                            MySQL
                                        </h3>
                                        <div class="mt-[20px] w-full">
                                            <div class="mb-2 flex items-center justify-between gap-4" data-aos="fade-up"
                                                data-aos-delay="250">
                                                <h6 class="text-white">75%</h6>
                                            </div>
                                            <div
                                                class="border border-theme/20 bg-theme/10 py-[8px] px-1 flex items-center h-[12px] w-full overflow-hidden font-sans text-xs font-medium rounded-full">
                                                <div class="h-[6px] justify-center overflow-hidden rounded-full bg-theme wow"
                                                    style="width: 75%"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]"
                                            data-aos="fade-up" data-aos-delay="150">
                                            Laravel
                                        </h3>
                                        <div class="mt-[20px] w-full">
                                            <div class="mb-2 flex items-center justify-between gap-4" data-aos="fade-up"
                                                data-aos-delay="250">
                                                <h6 class="text-white">70%</h6>
                                            </div>
                                            <div
                                                class="border border-theme/20 bg-theme/10 py-[8px] px-1 flex items-center h-[12px] w-full overflow-hidden font-sans text-xs font-medium rounded-full">
                                                <div class="h-[6px] justify-center overflow-hidden rounded-full bg-theme wow"
                                                    style="width: 70%"></div>
                                            </div>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
