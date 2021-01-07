<script>
    window.onload = function myFunction() {
        var date = new Date();
        var year = date.getFullYear();
        document.getElementById("year").innerHTML = year;
    }
</script>
<div class="rs-section rs-section-darker py-6">
    <div class="container mx-auto">
        <div class="flex items-center flex-wrap content-center relative z-40">
            <div class="w-full md:w-1/2 text-grey text-center md:text-left mb-8 md:mb-0">
                Copyright &copy; <span id="year"></span> <span class="text-white">Rush Partners Ltd</span>. All rights reserved.
            </div>

            <div class="w-full md:w-1/2 text-grey relative">
                <a href="{{ $page->linkedInUrl }}" class="text-grey-light hover:text-grey flex items-center justify-center md:justify-end">
                    <span class="mr-2">Follow us on</span> @include('_partials._icons.linkedin')
                </a>
            </div>
        </div>
        <div class="rs-section-text-shadow rs-section-text-shadow-footer">Feel the Rush</div>
    </div>
</div>