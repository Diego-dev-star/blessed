<section class="comon_section blogSection" id="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="sec_sub_title">@lang('lang.newstitle')</h5>
                <h2 class="sec_title">
                 @lang('lang.newssubtitle');
                </h2>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-8 col-sm-12 col-md-8">
                <div class="row">

                    @php
                        $num = 1;
                    @endphp
                    @foreach($newsblock as $num => $item)
                    @if($num == 0)
                    <div class="blog_loop_1 clearfix">
                        <div class="col-lg-6 col-sm-6 noPadding">
                            <div class="bl1_thumb">
                                <img src="{{asset('storage/'.$item->image)}}" alt=""/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 noPadding">
                            <div class="bl1_details text-left bl1_one">
                                <div class="bl1_meta">
                                    <a href="#">{{date("d.m.Y", strtotime($item->created_at))}}</a>
                                </div>
                                <h3>
                                    <a href="#">
                                        {{$item->getTranslatedAttribute('title')}}
                                    </a>
                                </h3>
                                <p>
                                    {{$item->getTranslatedAttribute('meta_description')}}
                                </p>
                                <a href="{{route('news.show',['id' => $item->id, 'slug' => $item->slug])}}" class="ast_learnmore">@lang('lang.readmore')<i class="arrowicon-arrows-2"></i></a>
                            </div>
                        </div>
                    </div>
                        @elseif($num == 1)
                    <div class="blog_loop_1 clearfix">
                        <div class="col-lg-6 col-sm-6 noPadding hidden-sm hidden-md hidden-lg">
                            <div class="bl1_thumb">
                                <img src="{{asset('storage/'.$item->image)}}" alt=""/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 noPadding">
                            <div class="bl1_details text-right bl1_two">
                                <div class="bl1_meta">
                                    <a href="#">{{date("d.m.Y", strtotime($item->created_at))}}</a>
                                </div>
                                <h3>
                                    <a href="{{$item->slug}}">
                                        {{$item->title}}
                                    </a>
                                </h3>
                                <p>
                                    {{$item->meta_description}}
                                </p>
                                <a href="{{route('news.show',['id' => $item->id, 'slug' => $item->slug])}}" class="ast_learnmore iconinleft"><i class="arrowicon-arrows-2"></i>@lang('lang.readmore')</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 noPadding hidden-xs">
                            <div class="bl1_thumb">
                                <img src="{{asset('storage/'.$item->image)}}" alt=""/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @elseif($num == 2)
            <div class="col-lg-4 col-sm-12 col-md-4 col-md-offset-0">
                <div class="row">

                    <div class="blog_loop_1 clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-6 noPadding">
                            <div class="bl1_thumb">
                                <img src="{{asset('storage/'.$item->image)}}" alt=""/>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6 noPadding">
                            <div class="bl1_details text-center bl1_three">
                                <div class="bl1_meta">
                                    <a href="#">{{date("d.m.Y", strtotime($item->created_at))}}</a>
                                </div>
                                <h3>
                                    <a href="{{ '/news/'. app()->getLocale().'/'. $item->slug}}">
                                        {{$item->title}}
                                    </a>
                                </h3>
                                <p>
                                    {{$item->meta_description}}
                                </p>
                                <a href="{{route('news.show',['id' => $item->id, 'slug' => $item->slug])}}" class="ast_learnmore">@lang('lang.readmore')<i class="arrowicon-arrows-2"></i></a>
                            </div>
                        </div>
                    </div>
                    @endif
                        @endforeach
                </div>
            </div>

        </div>
    </div>
</section>


