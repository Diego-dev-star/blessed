<section class="comon_section contactSection" style="background: url({{asset('/storage/background/mapdot2.png')}}) no-repeat center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="sec_sub_title">@lang('lang.title')</h5>
                <h2 class="sec_title">
                    @lang('lang.subtitle')
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-5 col-md-4">
                <div class="contact_info mb57">
                    <h3>@lang('office')</h3>
                    <p>
                        <i class="sgi sgi-Pointer"></i>{{setting('site.city')}}
                    </p>
                    <p><i class="sgi sgi-Mail"></i>{{setting('site.email')}}</p>
                    <p class="phn"><i class="sgi sgi-Phone"></i>{{setting('site.phone')}}</p>
                </div>
            </div>
            <div class="col-lg-8 col-sm-7 col-md-8">
                <div class="contact_form">
                    <form class="" method="post" action="{{url( app()->getLocale().'/contact')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" name="con_name" class="required" placeholder="@lang('name')*"/>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="email" name="con_email" class="required" placeholder="@lang('email')*"/>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" name="con_company" placeholder="@lang('company')"/>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" name="con_phone" placeholder="@lang('phone')"/>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <textarea name="con_message" class="required" placeholder="@lang('message')*"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="ast_btn" name="con_submit"><span>{{__('Отправить')}}<i class="sgi sgi-Mail"></i></span></button>
                                <img src="{{asset('images/ajax.gif')}}" alt="" class="ast_loader"/>
                            </div>
                        </div>
                        <div class="ast_con_message"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>