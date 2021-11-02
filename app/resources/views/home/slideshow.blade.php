<?php
/**
 * Created by PhpStorm.
 * User: Witalij Coder
 * Date: 23.12.2020
 * Time: 9:24
 */
?>
<!-- Slider Section -->
        <section class="slider_revolution slider_1" id="home">
            <div class="rev_slider_wrapper">
                <div id="rev_slider_2" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        @foreach($slider as $slide)
                        <li data-index="rs-{{$slide->id}}" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <img src="{!!  asset('/storage/'. str_replace('\\', '/', $slide->image))!!}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <div class="tp-caption tp-resizeme"
                                 data-x="['center']"
                                 data-hoffset="['0']"

                                 data-y="['top','top','top','top']"
                                 data-voffset="['130','100','120','115']"

                                 data-fontsize="['16','16','18','20']"
                                 data-lineheight="['30']"
                                 data-letterspacing="['1']"
                                 data-fontweight="600"
                                 data-width="['100%','100%','100%','100%']"
                                 data-height="['auto']"
                                 data-whitesapce="['normal']"
                                 data-color="['#138bff']"

                                 data-type="text"
                                 data-responsive_offset="off"

                                 data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;",
                                 "ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                 data-textAlign="['center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,15]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,15]"

                                 style="z-index: 5;  white-space: normal; text-transform: uppercase;">{{ $slide->getTranslatedAttribute('title') }}</div>
                            <div class="tp-caption tp-resizeme layer_1"
                                 data-x="['center']"
                                 data-hoffset="['0']"

                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['-50','-40','-40','-20']"

                                 data-fontsize="['70','70','60','45']"
                                 data-lineheight="['80','80','70','50']"
                                 data-letterspacing="0"
                                 data-fontweight="100"
                                 data-width="['100%','100%','100%','100%']"
                                 data-height="['auto']"
                                 data-whitesapce="['normal']"
                                 data-color="['#fff']"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"x:-200px;skX:85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                 data-textAlign="['center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 5;  white-space: normal; text-transform: lowercase;">{{ $slide->getTranslatedAttribute('description') }}</div>
                            <div class="tp-caption  tp-resizeme"
                                 data-x="['center']"
                                 data-hoffset="['0']"

                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['50','60','40','70']"

                                 data-fontsize="14"
                                 data-fontweight="600"
                                 data-lineheight=""
                                 data-width="auto"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-color="#fff"

                                 data-type="text"
                                 data-responsive_offset="off"

                                 data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"x:200px;skX:-85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                 data-textAlign="['center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 5; white-space: nowrap; text-transform: none;"><a href="{{url(app()->getLocale().$slide->href)}}" class="ast_btn"><span>@lang('lang.sl-button')<i class="arrowicon-arrows-2"></i></span></a></div>
                        </li>
                            @endforeach
                    </ul>
                </div>
            </div>
            <a class="scrollDown scrollOff" href="#work"><i class="la la-arrow-down"></i></a>
        </section>
        <!-- Slider Section -->