@php

@endphp
<section class="comon_section aboutSection2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="sec_sub_title">{{__('Мы лучшие на рынке')}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6">
                <div class="ab_slider owl-carousel">
                    <div class="abs_img">
                        <img src="{!! asset('storage/'.str_replace('\\', '/', setting('about.slid1')))!!}" alt=""/>
                    </div>
                    <div class="abs_img">
                        <img src="{!! asset('storage/'.str_replace('\\', '/', setting('about.slid2')))!!}" alt=""/>
                    </div>
                    <div class="abs_img">
                        <img src="{!! asset('storage/'.str_replace('\\', '/', setting('about.slid3')))!!}" alt=""/>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6">
                <div class="ab_content">
                    <h2>
                       {{setting('about.article-title')}}
                    </h2>
                    <p class="mb42">
                       {{setting('about.article-body')}}
                    </p>
                    <a href="tel:{{ preg_replace("/[^a-zA-Z0-9-&;]/",'', (setting('site.phone')))}}" class="ast_btn_2">{{__('Позвонить нам')}}<i class="pe-7s-call"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>