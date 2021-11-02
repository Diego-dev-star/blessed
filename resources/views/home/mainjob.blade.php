
<section class="comon_section workSection" id="work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="sec_sub_title">@lang('lang.job-title')</h5>
                <h2 class="sec_title">
                    @lang('lang.job-sub-title')
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-4 col-md-3">
                <ul class="work_nav shaf_filter text-center hidden-xs">
                    <li class="active" data-group="all"><span>All</span></li>
                    @foreach($filteres as $filter)
                    <li data-group="{{$filter->getTranslatedAttribute('category')}}"><span>{{$filter->getTranslatedAttribute('category')}}</span></li>
                        @endforeach
                </ul>
                <div class="work_bar"></div>
                <div class="pj_parcents">
                    <div class="completeRate" data-skills="0.85" data-gradientstart="#ec07c7" data-gradientend="#138bff"><strong></strong></div>
                    <div class="pjp_con">
                        <i class="pe-7s-portfolio"></i>
                        <h2>{{count($model)}}</h2>
                        <span>@lang('lang.freejob')</span>
                    </div>
                </div>
                <ul class="work_nav shaf_filter text-center hidden-sm hidden-md hidden-lg">
                    <li class="active" data-group="all"><span>@lang('lang.all')</span></li>
                    @foreach($filteres as $filter)
                        <li data-group="{{$filter->getTranslatedAttribute('category')}}"><span>{{$filter->getTranslatedAttribute('category')}}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-9">
                <div class="row work_cus_row shafull_container">
                    @foreach($model as $job);
                    <div class="col-lg-6 col-sm-12 col-md-6 shaf_item work_cust_padd" data-groups='["all", "{{$job->getTranslatedAttribute('category')}}"'>
                        <div class="work_loop_1">
                            <div class="wl1_thumb">
                                <img src="{{asset('storage/'.$job->image)}}" alt=""/>
                            </div>
                            <div class="wl1_cont">
                                <p><a href="#">{{$job->getTranslatedAttribute('category')}}</a></p>
                                <h2><a href="{{route('job.show',['id' => $job->id, 'slug' => $job->slug])}}}">{{$job->getTranslatedAttribute('title')}}</a></h2>
                                <div class="wl1_btns">
                                    <a class="popup_img" href="{{asset('storage/'.$job->image)}}"><i class="pe-7s-search"></i></a>
                                    <a href="{{route('job.show',['id' => $job->id, 'slug' => $job->slug])}}"><i class="la la-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="col-sm-1 shaf_sizer"></div>
                </div>
                <div class="row mt58">
                    <div class="col-lg-12 text-left">
                        <a href="{{url(app()->getLocale(). '/job')}}" class="ast_btn"><span>@lang('lang.allbuttonjob')<i class="arrowicon-arrows-2"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>