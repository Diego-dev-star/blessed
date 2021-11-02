<ul>
    @foreach($items as $item)
        <li>
            <a href="{{Url(app()->getLocale() . $item->url)}}">{{$item->getTranslatedAttribute('title')}}</a>
        </li>
    @endforeach

    <li class="scroll menu-item-has-children lang">
        <a href="#">{{ app()->getLocale() }} <img src="{!! asset('/images/lang/'. app()->getLocale().'.png')!!}" style="height: 15px; margin-top: -3px;"></a>
        <ul class="sub-menu dl-submenu">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        <img src="{!! asset('/images/lang/'. $localeCode.'.png')!!}"> {{ $properties['native'] }}
                    </a>
                </li>
                @endforeach
            </li>
        </ul>
    </li>
</ul>