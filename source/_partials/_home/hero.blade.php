@if($error)
    <div class="rs-hero px-8" style="background-image: url('../images/header-banner.png');">
@else
    <div class="rs-hero px-8" style="background-image: url('./images/header-banner.png');">
@endif

<div class="container mx-auto pt-8">
        <div class="w-full md:w-4/5 mx-auto">
            @include('_partials.navbar')
        </div>

        <h2 class="rs-hero-headline" data-text="Feel the Rush">Feel the Rush</h2>
        <div class="w-full md:w-4/5 mx-auto relative z-40 flex mt-8 mb-16 sm:mb-0">
            <div class="text-xl text-white w-full md:w-4/5 lg:w-3/5 pr-0 sm:pr-8">
            @if($error)
                <span>The page you are looking for does not exist</span>
            @else
                <span>
                    We believe in the power of Sports, the importance of the Fans and the thrill of the Game. We're on a mission to change the gambling industry, for good.
                </span>
            @endif
            </div>
            <div class="w-2/5 text-right hidden lg:inline-block">
            @if($error)
                <a class="btn-cta" href="/">
                    Go Back @include('_partials._icons.chevron-right')
                </a>
            @else
                <a class="btn-cta" href="#our-brands" rush-navbar-item>
                    Find Out More @include('_partials._icons.chevron-right')
                </a>
            @endif
            </div>
        </div>

        <span class="hidden lg:block rs-hero-mouse">@include('_partials._icons.mouse')</span>
    </div>
</div>