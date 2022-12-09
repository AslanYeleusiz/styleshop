@extends('layouts.layout')
@section('content')
<div class="slider-area">
    <div class="container-fluid p-0">
        <div class="main-slider-active owl-carousel slider-dot-position-2 slider-dot-style-1 slider-dot-hm2 slider-img-width">
            <div class="single-main-slider bg-light-pink-2 slider-animated-1 slider-height-hm2 custom-d-flex align-items-end" data-dot="01">
                <div class="slider-bg-text-2-1">
                    <h1 class="animated">STYLE </h1>
                </div>
                <div class="slider-bg-text-2-2">
                    <h1 class="animated">SHOP</h1>
                </div>
                <div class="row g-0 width-100-percent flex-row-reverse">
                    <div class="custom-col-slider-hm2-42">
                        <div class="main-slider-img slider-hm2-img-animation">
                            <img class="animated" src="{{ asset('storage/files/images/odezhdalar/'.$odezhdalar[2]->image) }}" alt="">
                        </div>
                    </div>
                    <div class="custom-col-slider-hm2-58 align-self-center">
                        <div class="main-slider-content-2-1 text-center slider-content-mrg-l-2">
                            <span class="animated">ЖАҢА ЖИНАҚТАР 2022 </span>
                            <h1 class="animated">STYLE SHOP </h1>
                            <h5 class="animated">13990T </h5>
                            <div class="slider-btn-2">
                                <a class="animated" href="{{route('details', $odezhdalar[2]->id)}}">Сатып аоу </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-main-slider bg-lightslategray-2 pt-60 slider-animated-1 slider-height-hm2 custom-d-flex" data-dot="02">
                <div class="slider-bg-text-2-3">
                    <h1 class="animated">WINDOWPANE </h1>
                </div>
                <div class="slider-bg-text-2-4">
                    <h1 class="animated"> SUIT BLAZE </h1>
                </div>
                <div class="row g-0 align-items-center width-100-percent flex-row-reverse">
                    <div class="custom-col-slider-hm2-56">
                        <div class="main-slider-content-2-1 text-center slider-content-ntvmrg-1">
                            <span class="animated">ЖАҢА ЖИНАҚТАР 2022 </span>
                            <h1 class="animated slider-content-2-font-dec">{{$odezhdalar[0]->name}}  </h1>
                            <h5 class="animated">{{$odezhdalar[0]->price}}T</h5>
                            <div class="slider-btn-2">
                                <a class="animated" href="{{route('details', $odezhdalar[0]->id)}}">Сатып алу </a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-slider-hm2-44">
                        <div class="main-slider-img slider-img-mrg-l-1 slider-hm2-img-animation">
                            <img class="animated" src="{{ asset('storage/files/images/odezhdalar/'.$odezhdalar[0]->image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-main-slider bg-gray-3 slider-animated-1 slider-height-hm2 custom-d-flex align-items-center" data-dot="03">
                <div class="slider-bg-text-2-5">
                    <h1 class="animated">BLACK <br>CKPACK </h1>
                </div>
                <div class="row g-0  width-100-percent align-items-center">
                    <div class="custom-col-slider-hm2-47">
                        <div class="main-slider-img slider-img-mrg-l-2 slider-hm2-img-animation">
                            <img class="animated" src="{{ asset('storage/files/images/odezhdalar/'.$odezhdalar[1]->image) }}" alt="">
                        </div>
                    </div>
                    <div class="custom-col-slider-hm2-53">
                        <div class="main-slider-content-2-1 text-center slider-content-ntvmrg-2">
                            <span class="animated">ЖАҢА ЖИНАҚТАР 2022 </span>
                            <h1 class="animated slider-content-2-font-dec">{{$odezhdalar[1]->name }}</h1>
                            <h5 class="animated">{{$odezhdalar[1]->price}}T </h5>
                            <div class="slider-btn-2">
                                <a class="animated" href="{{route('details', $odezhdalar[1]->id)}}">Сатып алу </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-social">
        <ul>
            <li><a href="#">DRIBBLE</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">TWITTER</a></li>
        </ul>
    </div>
</div>
<div class="categories-area pt-130 pb-120 section-padding-1">
    <div class="container-fluid">
        <div class="section-title-2 mb-70 text-center">
            <h2>ТАНЫМАЛ САНАТТАР</h2>
            <p>Мен костюмдерді жақсы көремін, өз құлағымды киіндіремін, үндемеңіз, барынша үндемеңіз. Найквист Нью-Йорк</p>
        </div>
        <div class="categories-slider-active dot-style-2 owl-carousel">

            @foreach($popular as $pop)
            <div class="single-categories default-overlay">
                <div class="img-zoom">
                    <a href="#"><img src="{{ asset('storage/files/images/odezhdalar/'.$pop->image) }}" alt="categories"></a>
                </div>
                <div class="categories-content categorie-posution-2">
                    <h3><a href="#">{{$pop->type->name}}</a></h3>
                    <div class="categories-btn">
                        <a href="product-details.html">Заказ беру</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="product-area section-padding-1 pb-125">
    <div class="container-fluid">
        <div class="section-title-2 mb-70 text-center">
            <h2>Қоймада бар</h2>
        </div>
        <div class="row">
           @foreach($odezhdalar as $odezhda)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-wrap mb-60">
                    <div class="product-img default-overlay mb-25">
<!--                        <a onclick="open('https://api.whatsapp.com/send?text=Сәлеметсіз бе? Мен №{{$odezhda->id}} товарға заказ берейін деп едім. Маған төлем реквизитін жіберуіңізді сұраймын! &phone=+77755498911&amp;utm_source=share2','send',`scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,width=0,height=0,left=-1000,top=-1000`)" href="#">-->
                        <a href="{{route('details', $odezhda->id)}}">
                            <img class="default-img" src="{{ asset('storage/files/images/odezhdalar/'.$odezhda->image) }}" alt="">
                            <span class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">sale!</span>
                        </a>
                    </div>
                    <div class="product-content-2 title-font-width-400 text-center">
                        <h3><a href="product-details.html">{{$odezhda->name}}</a></h3>
                        <div class="product-price">
                            <span class="new-price">{{$odezhda->price}}Т</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="btn-style-1 text-center">
            <a class="btn-border" href="shop-fullwide.html">
                <div class="btn-viewmore-normal btn-ptb-1 btn-viewmore-bg-transparent btn-viewmore-common">
                    <span>Барлығын көру</span>
                </div>
                <div class="btn-viewmore-hover btn-ptb-1 btn-viewmore-common btn-hover-transition">
                    <span>Барлығын көру</span>
                </div>
            </a>
        </div>
    </div>
</div>
<style>
.single-categories .categorie-posution-2 {
    position: absolute;
    right: 50px;
    text-align: center;
    /* top: 50%; */
    left: 50%;
    transform: translate(-50%, -50%);
    top: 50%;
    /* -webkit-transform: translateY(-50%); */
/*    -ms-transform: translateY(-50%);*/
    /* transform: translateY(-50%); */
    z-index: 9;
}
</style>
@endsection
