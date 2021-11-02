        @php
        $arr = setting('word.bg');
        $bg =  str_replace('\\', '/', $arr)

        @endphp

<section class="comon_section overlay whatWeDoSection" style="background: url({{asset('storage/'. $bg)}}) no-repeat fixed center center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-md-10 col-md-offset-1">
                <div class="wwd_slide owl-carousel">
                    <div class="wwd_item text-center">
                        <i class="pe-7s-usb"></i>
                        <h2>{{setting('word.wordslider')}}</h2>
                        <a href="/about" class="ast_btn"><span>Больше о нас<i class="arrowicon-arrows-2"></i></span></a>
                    </div>
                    <div class="wwd_item text-center">
                        <i class="pe-7s-users"></i>
                        <h2>{{setting('word.wordslider2')}}</h2>
                        <a href="/about" class="ast_btn"><span>Больше о нас<i class="arrowicon-arrows-2"></i></span></a>
                    </div>
                    <div class="wwd_item text-center">
                        <i class="pe-7s-global"></i>
                        <h2>{{setting('word.wordslider3')}}</h2>
                        <a href="/about" class="ast_btn"><span>Больше о нас<i class="arrowicon-arrows-2"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>