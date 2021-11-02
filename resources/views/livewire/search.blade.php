<form method="get" class="search_form" action="#">
    <input type="search" wire:model="searchTerm" name="s" autocomplete="off" placeholder="@lang('lang.search')"/>
    <button type="submit"><i class="astral-noun_Search_1534856"></i></button>
<ul class="dropdown-menu">
    @foreach($result as $item)

        <li class="result">
            <a class="bi_content" href="{{route('news.show',['id' => $item->id, 'slug' => $item->slug])}}">
                <div class="small-cont">
                    <div class="img" style="background-image: url({{asset('storage/'. $item->image)}})"></div>
                    <p>{{ mb_strimwidth( $item->getTranslatedAttribute('title'), 0, 30, "...") }} </p>

                </div>
            </a>
        </li>
</ul>
    @endforeach

</form>
