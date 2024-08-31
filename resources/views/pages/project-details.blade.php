@extends('layout.app')

@section('title', 'Projects Details')

@section('content')
    <section class="py-[30px] md:py-[80px]">
        <div class="container">
            <div class="menuBox" data-aos="fade-up" data-aos-delay="50">
                <div class="inline-block rounded-full border border-text px-[20px] py-[5px]">
                    <div class="flex items-center gap-[6px]">
                        <span>
                            <i class="fa-regular fa-blog text-[14px] text-white"></i>
                        </span>
                        <span class="pl-[6px] text-[14px] text-white">
                            Project Details
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-[60px]">
                <div>
                    <div class="w-full overflow-hidden lg:h-[720px]" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset($project['image']) }}" alt="Lariv - Portfolio Template"
                            class="h-full w-full rounded-lg object-cover" />
                    </div>
                    <div class="title mt-[40px]" data-aos="fade-up" data-aos-delay="150">
                        <h2
                            class="text-[26px] font-semibold capitalize leading-[36px] text-white md:text-[32px] md:leading-[42px]">
                            {{ $project['title'] }}
                        </h2>
                    </div>

                    <div class="mt-[30px]" data-aos="fade-up" data-aos-delay="100">
                        <p class="text-text">
                            {{ $project['description']['first'] }}
                        </p>
                        <p class="mt-[30px] text-text">
                            {{ $project['description']['second'] }}
                        </p>

                        <div class="mt-[30px]">
                            <div class="grid items-center justify-between md:flex">
                                <div data-aos="fade-up" data-aos-delay="100">
                                    <p class="text-[18px] font-semibold text-white">
                                        By Alex Johan
                                    </p>
                                </div>
                                <div class="mt-[20px] md:mt-0" data-aos="fade-up" data-aos-delay="100">
                                    <div class="mt-[30px] flex justify-center gap-3">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
