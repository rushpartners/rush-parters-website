<div class="rs-section rs-section-dark p-4">
    <div class="container mx-auto">
        <div class="w-full md:w-4/5 mx-auto">
        <ul class="list-reset flex justify-center items-center text-xl md:text-2xl font-avenir text-uppercase px-8 sm:px-0">
            <li class="">
                <a href="/">@include('_partials.logo')</a>
            </li>
        </ul>
        </div>
    </div>
</div>
<div id="investor" class="rs-section rs-section-light px-8 md:px-0">
    <div class="container mx-auto text-center">
        <div class="rs-section-title" data-text="Investor Information">Investor Information</div>
        <div class="rs-section-body">
            <div class="w-full md:w-2/3 mx-auto mt-4">
                <p>Please see the following investor information. For any further information please contact us <a href="mailto:{{ $page->contactEmail }}">{{ $page->contactEmail }}</a>.</p>
            </div>

            <div class="flex flex-wrap justify-center items-center mt-24">
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 mb-4 lg:mb-0">
                    <span class="text-uppercase text-xl text-black block text-orange font-avenir">27th February 2020</span>
                    <span class="text-uppercase text-black block">Notice of extraordinary general meeting</span>
                    <a target="_blank" href="https://rushpartners.s3-eu-west-1.amazonaws.com/investor/uploads/02-2020/REG+AB+-+Kallelse+EGM+160320.pdf" class="text-uppercase block">Download document</a>
                </div>
            </div>
        </div>
    </div>
</div>