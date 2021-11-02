@php
    $arr = setting('project.bg');
    $arr2 = setting('project.layer-2');
    $bg = str_replace('\\', '/', $arr) ;
    $bg2 = str_replace('\\', '/', $arr2) ;
@endphp
<section class="comon_section overlay call2ActionSection3" style="background: url({!!'/storage/'. $bg !!}) no-repeat fixed center center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="c2as_content_3 text-center">
                    <h5 class="sec_sub_title">{{setting('project.title')}}</h5>
                    <h2 class="sec_title white">{{setting('project.subtitle')}}</h2>
                    <a href="tel:{{setting('site.phone')}}" class="ast_btn_2 square mb60">@lang('lang.call')<i class="arrowicon-arrows-2"></i></a>
                    <div class="clearfix"></div>
                    <img src="{!!'/storage/'. $bg2 !!}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>