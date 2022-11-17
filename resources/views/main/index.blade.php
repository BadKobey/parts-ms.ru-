@extends('layouts.main')

@section('content')
<main>
    <!-- slider area start -->
    <section class="slider__area">
        <div class="slider__active swiper-container">
            <div class="swiper-wrapper">
                <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg" data-background="{{asset('assets/img/slider/1.gif')}}">
                    <div class="container">
                        <div class="row ">
                            <div class="col-xxl-5">
                                <div class="slider__content p-relative z-index-11">
                                    <span data-animation="fadeInUp" data-delay=".3s">Интернет-магазин</span>
                                    <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">42 000 000 товаров</h3>
                                    <div class="slider__btn" data-animation="fadeInUp" data-delay=".4s">
                                        <a href="shop.html" class="slider-btn">О нас<i class="fal fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg" data-background="{{asset('assets/img/slider/1.gif')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-5">
                                <div class="slider__content p-relative z-index-11">
                                    <span data-animation="fadeInUp" data-delay=".3s">Автозапчасти</span>
                                    <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">Большой выбор</h3>
                                    <div class="slider__btn" data-animation="fadeInUp" data-delay=".4s">
                                        <a href="shop.html" class="slider-btn">О нас<i class="fal fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-slider-pagination">
                <button class="main-slider-button-prev"><i class="fal fa-angle-left"></i></button>
                <button class="main-slider-button-next"><i class="fal fa-angle-right"></i></button>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <main>



        <!-- cart-area start -->
        <section class="cart-area pb-120 pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">



                        <div class="container grey-bg-3  d-md-block pt-10 pb-10">
                            <div class="row align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="header__search-3">
                                        <form action="#">
                                            <div class="header__search-input-2 header__search-input-3">
                                                <input type="text" placeholder="Поиск..">
                                                <div class="header__search-select">
                                                    <select>
                                                        <option>Каталог</option>
                                                        <option>VIN</option>
                                                    </select>
                                                </div>
                                                <button type="submit"><i class="far fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="header__middle-right header__middle-right-d d-flex align-items-center justify-content-end">
                                        <div class="sd-contact">
                                            <span>Есть вопросы? Позвоните нам. <a href="tel:+0889006690">+88613364215</a></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>

                                        <th class="cart-product-name">Наименование</th>
                                        <th class="product-price">Описание</th>
                                        <th class="product-quantity">Артикул</th>
                                        <th class="product-subtotal">Цена</th>
                                        <th class="product-remove"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td class="product-name">{{ $product->title }}</td>
                                        <td class="product-price"><span class="amount">{{ $product->description }}</span></td>
                                        <td class="product-subtotal"><span class="amount">{{ $product->code }}</span></td>
                                        <td class="product-subtotal"><span class="amount">{{ $product->price }}.</span></td>
                                        <td class="product-quantity">
                                            <a href="cart.html" class="btn-tp">В корзину</a>
                                        </td>
                                    </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="row mb-50">
                                    <div class="col-xxl-12">
                                        <div class="basic-pagination-3 wow fadeInUp mt-20" data-wow-delay=".2s">
                                            <ul class="d-flex align-items-center">
                                                <li class="prev">
                                                    <a href="blog.html" class="link-btn link-prev">
                                                        <i class="fal fa-long-arrow-left"></i>
                                                        Назад
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog.html">
                                                        <span>1</span>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="blog.html">
                                                        <span>2</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog.html">
                                                        <span>3</span>
                                                    </a>
                                                </li>
                                                <li class="next">
                                                    <a href="blog.html" class="link-btn">
                                                        Вперед
                                                        <i class="fal fa-long-arrow-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart-area end -->

    </main>
@endsection
