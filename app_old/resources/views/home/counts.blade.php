@php
$bg = setting('homecounts.bg');

@endphp

<section class="comon_section overlay funfactsection" style=" background: url({!!asset('/storage/'. str_replace('\\', '/', $bg))!!}) no-repeat fixed center center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="sec_sub_title">{{setting('homecounts.title')}}</h5>
                <h2 class="sec_title white">
                   {{setting('homecounts.subtitle')}}
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="fact_1 funfact">
                    <i class="sgi sgi-Users"></i>
                    <h2><span class="timer" data-counter="{{setting('homecounts.count1')}}">{{setting('homecounts.count1')}}</span><span>Нашли  работу</span></h2>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="fact_1 funfact">
                    <i class="sgi sgi-Briefcase"></i>
                    <h2><span class="timer" data-counter="{{setting('homecounts.count2')}}">{{setting('homecounts.count2')}}</span><span>Работодателей с нами</span></h2>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="fact_1 funfact">
                    <i class="sgi sgi-Headset"></i>
                    <h2><span class="timer" data-counter="{{setting('homecounts.count3')}}">{{setting('homecounts.count3')}}</span><span>В нашей дружной  команде</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>