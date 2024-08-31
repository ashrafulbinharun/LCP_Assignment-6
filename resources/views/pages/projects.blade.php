@extends('layout.app')

@section('title', 'Projects')

@section('content')
    <section class="py-[30px] md:py-[80px]">
        <div class="container">
            <div class="menuBox" data-aos="fade-up" data-aos-delay="50">
                <div class="inline-block rounded-full border border-text px-[20px] py-[5px]">
                    <div class="flex items-center gap-[6px]">
                        <span>
                            <i class="fa-light fa-diagram-project text-[14px] text-white"></i>
                        </span>
                        <span class="pl-[6px] text-[14px] text-white">Portfolio</span>
                    </div>
                </div>
            </div>
            <br />
            <div class="mt-[10px] md:mt-[20px]">
                <h2 class="text-[32px] font-semibold uppercase leading-tight text-white md:text-[52px]" data-aos="fade-up"
                    data-aos-delay="100">
                    Never Compromise <br class="hidden md:block" />to
                    <span class="text-theme"> Quality!</span>
                </h2>
                <p class="mt-[20px] text-text lg:w-[60%]" data-aos="fade-up" data-aos-delay="150">
                    {{ $info['description'] }}
                </p>
            </div>


            <div class="mt-[60px] md:mt-[80px]">
                <div class="grid gap-y-[30px] md:grid-cols-12 md:gap-x-[30px]">

                    @foreach ($info['projects'] as $index => $project)
                        <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="group rounded-2xl bg-btn p-[30px]">
                                <div class="overflow-hidden rounded-2xl">
                                    <img src="{{ asset($project['image']) }}" alt="Lariv - Portfolio Template"
                                        class="w-full object-cover transition-all duration-500 group-hover:scale-[110%]" />
                                </div>
                                <div>
                                    <p class="mt-[16px] text-[14px] text-text">
                                        {{ $project['category'] }}
                                    </p>
                                    <div
                                        class="portfolio-button-open cursor-pointer text-white transition-all duration-300 hover:text-theme">
                                        <a href="{{ route('projects.show', $project['id']) }}">
                                            <h2 class="mt-[15px] text-[20px] font-medium capitalize md:text-[20px]">
                                                {{ $project['title'] }}
                                            </h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
