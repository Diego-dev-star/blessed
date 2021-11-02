
<div class="page_banner overlay" style="background: url('{{asset('storage/' .$brecrumbs[0]->image) }}')no-repeat center center / cover;" >
<div class="vmiddle">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="pb_title">{{config('app.name')}}</h2>
                <div class="page_crumb">
                    @for($i = 0; $i <= count(Request::segments()); $i++)
                        <a href="">{{Request::segment($i)}}</a>
                    @if($i < count(Request::segments()) & $i > 0)
                        {!!'-'!!}
                    @endif
                @endfor
                </div>
            </div>
        </div>
    </div>
</div>
</div>
