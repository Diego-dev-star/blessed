@php
    $arr = setting('storie.bg');
    $bg = str_replace('\\', '/', $arr) ;
@endphp
<section class="comon_section overlay historySecton" style="background: url('{!! '/storage/'. $bg !!}') no-repeat fixed center center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="sec_sub_title white">{{setting('storie.title')}}</h5>
                <h2 class="sec_title white">{{setting('storie.subtitle')}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="storyTimeline">
                    <div class="col-lg-3 col-sm-3 col-md-3 noPadding">
                        <div class="steps lights">
                            <i class="pe-7s-way"></i>
                            <h6>2017</h6>
                            <p>{{setting('storie.item-1')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 noPadding">
                        <div class="steps downs lights">
                            <i class="pe-7s-add-user"></i>
                            <h6>2018</h6>
                            <p>{{setting('storie.item-2')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 noPadding">
                        <div class="steps lights">
                            <i class="pe-7s-portfolio"></i>
                            <h6>2019</h6>
                            <p>{{setting('storie.item-3')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 noPadding">
                        <div class="steps downs lights">
                            <i class="pe-7s-cup"></i>
                            <h6>2020</h6>
                            <p>{{setting('storie.item-4')}}</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>