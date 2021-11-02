<section class="comon_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="sec_sub_title">@lang('lang.servicetitle')}</h5>
                <h2 class="sec_title">
                    @lang('lang.servicesubtitle')
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ast_tab_3">
                    <!-- Nav tabs -->
                    <ul class="ast_tab_3_controll" role="tablist">
                        @foreach($service as $k => $item)
                        <li role="presentation"@if($k == 0) class=" active"  @endif>
                            <a href="#ast_3_{{$item->id}}" aria-controls="{{$item->id}}" role="tab" data-toggle="tab">
                                <div class="single_team_3 text-center">
                                    <img src="{{ asset('storage/'.$item->image) }}" alt="">
                                    <div class="st3_info">
                                        <h2>{{$item->title}}</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                            @endforeach
                    </ul>

                    <!-- Tab panes -->

                    <div class="tab-content ast_tab_content_3">
                        @foreach($service as $k => $panel)
                        <div role="tabpanel" class="tab-pane fade in @if($k == 0) active @endif" id="ast_3_{{$panel->id}}">
                            <div class="st3_tab_content">
                                <h5 class="sec_sub_title text-left">{{$panel->title}}</h5>
                                <h2>
                                   {{$panel->s_descr}}
                                </h2>
                                <div class="row">
                                    <div class="col-lg-5 col-sm-5">
                                        <div class="st3_meta">
                                            <p>
                                              {!! $panel->atr1 !!}
                                            </p>
                                            <p>
                                                {!! $panel->atr2 !!}
                                            </p>
                                            <p>
                                                {!! $panel->atr3 !!}
                                            </p>
                                            <p>
                                                {!! $panel->atr4 !!}
                                            </p>
                                        </div>
                                        <a href="tel:{{ preg_replace("/[^a-zA-Z0-9-&;]/",'', (setting('site.phone')))}}" class="ast_btn_2 square">@lang('lang.call')<i
                                                    class="arrowicon-arrows-2"></i></a>
                                    </div>
                                    <div class="col-lg-7 col-sm-7">
                                        <p class="ast_lead noMarginBottom">
                                            {{$panel->m_descr}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
