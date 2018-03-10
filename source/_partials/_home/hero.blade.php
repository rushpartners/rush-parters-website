<div class="rs-hero px-8" style="background-image: url('./images/header-banner.png');">
    <div class="container mx-auto pt-8">
        <div class="w-full md:w-4/5 mx-auto">
            @include('_partials.navbar')
        </div>

        <h2 class="rs-hero-headline" data-text="Feel the Rush">Feel the Rush</h2>

        <div class="w-full md:w-4/5 mx-auto relative z-40 flex mt-8 mb-16 sm:mb-0">
            <div class="text-xl text-white w-full md:w-4/5 lg:w-3/5 pr-0 sm:pr-8">
                We belive in the power of Sports, the importance of the Fans and the thrill of the Game. We're on a mission to change the gambling industry, for good.
            </div>
            <div class="w-2/5 text-right hidden lg:inline-block">
                <a class="btn-cta" href="#our-brands" rush-navbar-item>
                    Find Out More @include('_partials._icons.chevron-right')
                </a>
            </div>
        </div>

        <span class="hidden lg:block rs-hero-mouse">@include('_partials._icons.mouse')</span>
    </div>
</div>