<header class="header_1" id="fix_nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="logo">
                            <a href="{{url(app()->getLocale(). '/')}}"> <img src="{{asset('storage/'.setting('site.logo'))}}" alt=""/></a>

                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="mobileMenuBar">
                            <a href="javascript: void(0);"><span>Menu</span><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="mainmenu">
                                {{menu('mainMenu', 'layout.nav')}}
                            <a id="open-overlay-nav" class="togglers hamburger hidden-xs hidden-sm" href="javascript:void(0);"><span></span><span></span><span></span></a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- PopUP Menu -->
        <div class="popup popup__menu">
            <a href="" id="close-popup" class="close-popup"></a>
            <div class="container mobileContainer">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <div class="logo2">
                            <a href="#"><img src="{{asset('storage/'.setting('site.logo'))}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="popup-inner">
                            <div class="dl-menu__wrap dl-menuwrapper">
                                <ul class="dl-menu dl-menuopen">
                                    {{menu('mainMenu', 'layout.nav')}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                        <ul class="footer__contacts text-left">
                            <li>{{__('Phone')}} : {{setting('site.phone')}}</li>
                            <li>{{__('Email')}} : {{setting('site.email')}}</li>
                            <li>{{__('Address')}} : {{setting('site.city')}}</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                        <div class="popUp_social text-right">
                            <a href="{{setting('site.fb')}}"><i class="fa fa-facebook"></i>Facebook</a>
                            <a href="{{setting('site.ig')}}"><i class="fa fa-instagram"></i>Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>