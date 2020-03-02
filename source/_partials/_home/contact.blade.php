<div id="contact-us" class="rs-section rs-section-dark px-8 md:px-0">
    <div class="container mx-auto text-center">
        <div class="rs-section-title" data-text="Contact Us">Contact Us</div>
        <div class="rs-section-body ">
            <h3 class="text-xl font-normal text-uppercase mb-2 mt-8 text-grey-light">Get in touch with us</h3>

            @if($page->formEnabled)
                <form action="https://formspree.io/hello@rushpartners.co.uk" method="POST" class="w-full mt-8">
                    <div class="flex -mx-4">
                        <div class="w-1/2 px-4">
                            <div class="flex -mx-4">
                                <div class="w-1/2 px-4">
                                    <input class="form-control" type="text" name="name" placeholder="Your name*" />
                                </div>
                                <div class="w-1/2 px-4">
                                    <input class="form-control" type="text" name="email" placeholder="Your email*" />
                                </div>
                            </div>
                            <div class="flex -mx-4 mt-8">
                                <div class="w-full px-4">
                                    <input class="form-control" type="text" name="subject" placeholder="Subject" />
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 px-4">
                            <textarea class="form-control form-contact-message" placeholder=""></textarea>
                        </div>
                    </div>

                    <div class="text-right mt-8">
                        <button type="submit" class="btn-cta w-56">Submit</button>
                </form>
            @else
                <div class="w-full md:w-2/3 mx-auto mt-4">
                    <p>Send us an email at <a href="mailto:{{ $page->contactEmail }}" class="text-white hover:text-underline"><strong>{{ $page->contactEmail }}</strong></a> or follow us on <a href="{{ $page->linkedInUrl }}" class="text-white hover:text-underline"><strong>LinkedIn</strong></a>.</p>
                </div>
            @endif

            <div class="flex justify-start flex-wrap mt-24 text-left text-grey-light -mx-4">
                <div class="w-1/3 sm:w-1/3 md:w-1/3 px-4 mb-8 lg:mb-0">
                    <span class="text-white block">Oslo</span>
                    R{!! Htmlentities('å') !!}dhusgata 23<br />0158 <br />Oslo<br />Norway
                </div>
                <div class="w-1/3 sm:w-1/3 md:w-1/3 px-4 mb-8 lg:mb-0">
                    <span class="text-white block">Stockholm</span>
                    Kaplansbacken 2<br />112 24 Stockholm,<br />Sweden
                </div>
                <div class="w-1/3 sm:w-1/3 md:w-1/3 px-4 mb-8 lg:mb-0">
                    <span class="text-white block">Malta - Rush Gaming</span>
                    Level 3<br/>203 BMW Building<br/>Rue D'Argens<br/>Gzira<br/>GZR1368<br/>Malta<br/>
                </div>
            </div>
        </div>
    </div>
</div>