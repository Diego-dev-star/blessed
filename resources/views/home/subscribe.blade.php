@php
$arr = setting('subscribe-home.s.image');
$bg = str_replace('\\', '/', $arr["s"]) ;
@endphp

        <section class="comon_section overlay subscribeSection" style="background: url('{!!'/storage/'.$bg !!}') no-repeat fixed center center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="sec_sub_title">{{setting('subscribe-home.name')}}</h5>
                <h2 class="sec_title white">
                  {{setting('subscribe-home.title')}}
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-md-10 col-md-offset-1">
                <form method="post" action="/" class="subscribe_form">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="col-lg-8 col-sm-8 pdr5 noPaddingLeft">
                        <input type="email" name="sub_email" placeholder="@lang('lang.email')"/>
                    </div>
                    <div class="col-lg-4 col-sm-4 pdl5 noPaddingRight">
                        <button class="ast_btn btn-block" type="submit" name="sub_submit"><span>@lang('lang.send')<i class="arrowicon-arrows-2"></i></span></button>
                    </div>
                    <div class="clearfix mb13"></div>
                    <p class="infoP">{{setting('subscribe-home.alert')}}</p>
                </form>
            </div>
        </div>
    </div>
</section>