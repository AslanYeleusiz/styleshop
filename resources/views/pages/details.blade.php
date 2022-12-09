@extends('layouts.layout')
@section('content')
<div class="product-details-area section-padding-1 pb-90 pt-250">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-details-tab">
                    <div class="product-dec-right pro-dec-big-img-slider">
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="assets/images/product-details/b-large-1.jpg">
                                    <img src="{{asset('storage/files/images/odezhdalar/'.$odezhda->image)}}" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-1.jpg"><i class="dlicon ui-1_zoom-in "></i></a>
                        </div>
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="assets/images/product-details/b-large-2.jpg">
                                    <img src="assets/images/product-details/large-2.jpg" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-2.jpg"><i class="dlicon ui-1_zoom-in "></i></a>
                        </div>
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="assets/images/product-details/b-large-3.jpg">
                                    <img src="assets/images/product-details/large-3.jpg" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-3.jpg"><i class="dlicon ui-1_zoom-in "></i></a>
                        </div>
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="assets/images/product-details/b-large-4.jpg">
                                    <img src="assets/images/product-details/large-4.jpg" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-4.jpg"><i class="dlicon ui-1_zoom-in "></i></a>
                        </div>
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="assets/images/product-details/b-large-2.jpg">
                                    <img src="assets/images/product-details/large-2.jpg" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-2.jpg"><i class="dlicon ui-1_zoom-in "></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="product-details-col-72">
                        <div class="product-details-content p-dec-content-edit">
                            <h2 class="uppercase">{{$odezhda->name}}</h2>
                            <div class="product-details-ratting-wrap">
                                <div class="product-details-ratting">
                                    <i class="yellow fa fa-star"></i>
                                    <i class="yellow fa fa-star"></i>
                                    <i class="yellow fa fa-star"></i>
                                    <i class="yellow fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="#"> (1 customer review)</a>
                            </div>
                            <h3>{{$odezhda->price}}T</h3>
                            <div class="product-details-peragraph">
                                <ul>
                                    <li>{{$odezhda->description}}</li>
                                </ul>
                            </div>

                            <div class="product-details-action-wrap">

                                <div class="product-details-cart">
                                    <a onclick="open('https://api.whatsapp.com/send?text=Сәлеметсіз бе? Мен №{{$odezhda->id}} товарға заказ берейін деп едім. Маған төлем реквизитін жіберуіңізді сұраймын! &phone=+77755498911&amp;utm_source=share2','send',`scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,width=0,height=0,left=-1000,top=-1000`)" title="Add to cart" href="#">Тапсырыс беру</a>
                                </div>

                            </div>

                            <div class="product-details-meta">
                                <span>Түрі: {{$odezhda->type->name}}</span>
                                <span>Сипаттама: {{$odezhda->description}}</span>
                                <span>Бренд: {{$odezhda->brand}}</span>
                                <span>Өндіруші: {{$odezhda->facturer->name}}</span>
                                <span>Түс: {{$odezhda->color->name}}</span>
                                <span>Өлшемі: {{$odezhda->form->name}}</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
