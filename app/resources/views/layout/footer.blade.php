<?php
/**
 * Created by PhpStorm.
 * User: Witalij Coder
 * Date: 24.11.2020
 * Time: 12:51
 */
?>
<footer class="footer_0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ast_logo">
                    <a href="#"><a href="{{'/'}}" class="footer-logo"> <img src="{{asset('storage/'.setting('site.logo'))}}" alt=""/></a></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-5 col-md-6">
                <aside class="widget about_widget">
                    <p>
                        {{setting('site.footer_d')}}
                    </p>
                    <div class="astral_social">
                        <a href="{{setting('site.fb')}}"><i class="fa fa-facebook"></i></a>
                        <a href="{{setting('site.ig')}}"><i class="fa fa-instagram"></i></a>

                    </div>
                </aside>
            </div>
            <div class="col-lg-5 col-sm-7 col-lg-offset-1 col-md-6">
                <aside class="widget insta_update">
                    <h3 class="widget_title">Последние новости</h3>
                    <div class="insta_imgs clearfix">
                        @foreach($newsblock as $k=> $item)
                            @if($k <= 9)
                        <a href="{{route('news.show',['id' => $item->id, 'slug' => $item->slug])}}"><img src="{!!asset('storage/'.$item->image)!!}" alt=""/></a>
                            @endif
                        @endforeach
                    </div>
                </aside>
            </div>
        </div>
    </div>
</footer>
<section class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="copyies">&COPY; {{setting('site.title')}}. All rights reserved {{date('Y')}}. <a href="#">{{setting('site.title')}}</a></div>
            </div>
        </div>
    </div>
</section>

<a href="#" id="backtotop"><i class="fa fa-angle-double-up"></i></a>

