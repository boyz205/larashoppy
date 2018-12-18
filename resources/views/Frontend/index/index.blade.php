@extends('frontend.layouts.main')

@section('title', 'Tieu de cua website dat')

@section('sidebar')

    @parent

@endsection

@section('content')
    <div class="banner-agile">
        <div class="container">
            <h2>WELCOME TO</h2>
            <h3>FASHION <span>CLUB</span></h3>
            <p>Suspendisse sed tellus id libero pretium interdum. Suspendisse potenti. Quisque consectetur elit sit amet vehicula tristique. </p>
            <a href="{{url('/about')}}">Read More</a>
        </div>
    </div>
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
                <a href="{{url('/women')}}"><div class="bb-left-agileits-w3layouts-inner">
                        <h3>SALE</h3>
                        <h4>upto<span>75%</span></h4>
                    </div></a>
            </div>
            <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
                <a href="{{url('/shoes')}}"><div class="bb-middle-top">
                        <h3>SALE</h3>
                        <h4>upto<span>55%</span></h4>
                    </div></a>
                <a href="{{url('/jewellery')}}"><div class="bb-middle-bottom">
                        <h3>SALE</h3>
                        <h4>upto<span>65%</span></h4>
                    </div></a>
            </div>
            <div class="col-md-3 bb-grids bb-right-agileits-w3layouts">
                <a href="{{url('/watches')}}"><div class="bb-right-top">
                        <h3>SALE</h3>
                        <h4>upto<span>50%</span></h4>
                    </div></a>
                <a href="{{url('/handbags')}}"><div class="bb-right-bottom">
                        <h3>SALE</h3>
                        <h4>upto<span>60%</span></h4>
                    </div></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="top-products">
        <div class="container">
            <h3>Top Products</h3>
            <div class="sap_tabs">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item"><span>Men's</span></li>
                        <li class="resp-tab-item"><span>Women</span></li>
                        <li class="resp-tab-item"><span>Handbags</span></li>
                        <li class="resp-tab-item"><span>Cosmetics</span></li>
                    </ul>
                    <div class="clearfix"> </div>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content">
                            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp1.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Formal shoes" />
                                                <input type="hidden" name="amount" value="220.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Formal shoes</h4>
                                <h5>$220.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp2">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp2.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Formal shirt" />
                                                <input type="hidden" name="amount" value="190.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Formal shirt</h4>
                                <h5>$190.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp3">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp3.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Blazer" />
                                                <input type="hidden" name="amount" value="160.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Blazer</h4>
                                <h5>$160.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp4.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Casual shoes" />
                                                <input type="hidden" name="amount" value="250.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Casual shoes</h4>
                                <h5>$250.00</h5>
                            </div>
                            <div class="clearfix"></div>
                            <div class="top-products-set2">
                                <div class="col-md-3 top-product-grids tp5">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/ip2.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Inner wear" />
                                                    <input type="hidden" name="amount" value="50.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Inner wear</h4>
                                    <h5>$50.00</h5>
                                </div>
                                <div class="col-md-3 top-product-grids tp6">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/shp8.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Shoes" />
                                                    <input type="hidden" name="amount" value="150.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Shoes</h4>
                                    <h5>$150.00</h5>
                                </div>
                                <div class="col-md-3 top-product-grids tp7">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/cap1.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Formal shirt" />
                                                    <input type="hidden" name="amount" value="100.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Formal shirt</h4>
                                    <h5>$100.00</h5>
                                </div>
                                <div class="col-md-3 top-product-grids tp4">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/wap3.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Watch" />
                                                    <input type="hidden" name="amount" value="200.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Watch</h4>
                                    <h5>$200.00</h5>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="tab-1 resp-tab-content">
                            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp5.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                                <input type="hidden" name="amount" value="220.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Casual wear</h4>
                                <h5>$220.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp2">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp6.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                                <input type="hidden" name="amount" value="190.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Casual wear</h4>
                                <h5>$190.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp3">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp7.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                                <input type="hidden" name="amount" value="160.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Casual wear</h4>
                                <h5>$160.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp8.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                                <input type="hidden" name="amount" value="250.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Casual wear</h4>
                                <h5>$250.00</h5>
                            </div>
                            <div class="clearfix"></div>
                            <div class="top-products-set2">
                                <div class="col-md-3 top-product-grids tp4">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/wp8.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                                    <input type="hidden" name="amount" value="250.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Casual wear</h4>
                                    <h5>$250.00</h5>
                                </div>
                                <div class="col-md-3 top-product-grids tp4">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/wp5.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                                    <input type="hidden" name="amount" value="250.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Casual wear</h4>
                                    <h5>$250.00</h5>
                                </div>
                                <div class="col-md-3 top-product-grids tp4">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/wp4.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                                    <input type="hidden" name="amount" value="350.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Casual wear</h4>
                                    <h5>$350.00</h5>
                                </div>
                                <div class="col-md-3 top-product-grids tp4">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/wp3.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                                    <input type="hidden" name="amount" value="200.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Casual wear</h4>
                                    <h5>$200.00</h5>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="tab-1 resp-tab-content">
                            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp9.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Handbag" />
                                                <input type="hidden" name="amount" value="90.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Handbag</h4>
                                <h5>$90.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp2">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp10.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Handbag" />
                                                <input type="hidden" name="amount" value="60.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Handbag</h4>
                                <h5>$60.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp3">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp11.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Handbag" />
                                                <input type="hidden" name="amount" value="120.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Handbag</h4>
                                <h5>$120.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp12.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Handbag" />
                                                <input type="hidden" name="amount" value="70.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Handbag</h4>
                                <h5>$70.00</h5>
                            </div>
                            <div class="clearfix"></div>
                            <div class="top-products-set2">
                                <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/hp9.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Handbag" />
                                                    <input type="hidden" name="amount" value="290.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Handbag</h4>
                                    <h5>$290.00</h5>
                                </div>
                                <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/hp8.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Handbag" />
                                                    <input type="hidden" name="amount" value="50.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Handbag</h4>
                                    <h5>$50.00</h5>
                                </div>
                                <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/hp7.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Handbag" />
                                                    <input type="hidden" name="amount" value="70.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Handbag</h4>
                                    <h5>$70.00</h5>
                                </div>
                                <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/hp3.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Handbag" />
                                                    <input type="hidden" name="amount" value="190.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Handbag</h4>
                                    <h5>$190.00</h5>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="tab-1 resp-tab-content">
                            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp13.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Eye makeup" />
                                                <input type="hidden" name="amount" value="90.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Eye makeup</h4>
                                <h5>$90.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp2">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp14.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Gold makeup" />
                                                <input type="hidden" name="amount" value="60.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Gold makeup</h4>
                                <h5>$60.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp3">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp15.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Tya Makeup kit" />
                                                <input type="hidden" name="amount" value="120.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Tya Makeup kit</h4>
                                <h5>$120.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="{{url('/single')}}"><div class="product-img">
                                        <img src="{{asset('frontend/images/tp16.jpg')}}" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Vega Brushes" />
                                                <input type="hidden" name="amount" value="60.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Vega Brushes</h4>
                                <h5>$60.00</h5>
                            </div>
                            <div class="clearfix"></div>
                            <div class="top-products-set2">
                                <div class="col-md-3 top-product-grids tp4">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/cp5.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Vega Brushes" />
                                                    <input type="hidden" name="amount" value="60.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Lipstick</h4>
                                    <h5>$60.00</h5>
                                </div>
                                <div class="col-md-3 top-product-grids tp4">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/cp4.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Vega Brushes" />
                                                    <input type="hidden" name="amount" value="60.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Eye liner</h4>
                                    <h5>$60.00</h5>
                                </div>
                                <div class="col-md-3 top-product-grids tp4">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/cp7.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Eye shades" />
                                                    <input type="hidden" name="amount" value="60.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Eye shades</h4>
                                    <h5>$60.00</h5>
                                </div>
                                <div class="col-md-3 top-product-grids tp4">
                                    <a href="{{url('/single')}}"><div class="product-img">
                                            <img src="{{asset('frontend/images/cp8.jpg')}}" alt="" />
                                            <div class="p-mask">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls1_item" value="Eye shades" />
                                                    <input type="hidden" name="amount" value="160.00" />
                                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div></a>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    <h4>Eye shades</h4>
                                    <h5>$160.00</h5>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('frontend/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>
    <div class="fandt">
        <div class="container">
            <div class="col-md-6 features">
                <h3>Our Services</h3>
                <div class="support">
                    <div class="col-md-2 ficon hvr-rectangle-out">
                        <i class="fa fa-user " aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 ftext">
                        <h4>24/7 online free support</h4>
                        <p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="shipping">
                    <div class="col-md-2 ficon hvr-rectangle-out">
                        <i class="fa fa-bus" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 ftext">
                        <h4>Free shipping</h4>
                        <p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="money-back">
                    <div class="col-md-2 ficon hvr-rectangle-out">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 ftext">
                        <h4>100% money back</h4>
                        <p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 testimonials">
                <div class="test-inner">
                    <div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
                        <div class="wmuSliderWrapper">
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-wrap">
                                    <img src="{{asset('frontend/images/c1.png')}}" alt=" " class="img-responsive" />
                                    <p>Nam elementum magna id nibh pretium suscipit varius tortor. Phasellus in lorem sed massa consectetur fermentum. Praesent pellentesque sapien euismod.</p>
                                    <h4># Andrew</h4>
                                </div>
                            </article>
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-wrap">
                                    <img src="{{asset('frontend/images/c2.png')}}" alt=" " class="img-responsive" />
                                    <p>Morbi semper, risus dignissim sagittis iaculis, diam est ornare neque, accumsan risus tortor at est. Vivamus auctor quis lacus sed interdum celerisque.</p>
                                    <h4># Lucy</h4>
                                </div>
                            </article>
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-wrap">
                                    <img src="{{asset('frontend/images/c3.png')}}" alt=" " class="img-responsive" />
                                    <p>Fusce non cursus quam, in hendrerit sem. Nam nunc dui, venenatis vitae porta sed, sagittis id nisl. Pellentesque celerisque  eget ullamcorper vehicula. </p>
                                    <h4># Martina</h4>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <script src="{{asset('frontend/js/jquery.wmuSlider.js')}}"></script>
        <script>
            $('.example1').wmuSlider();
        </script>
    </div>
    <!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Top Brands</h3>
            <div class="sliderfig">
                <ul id="flexiselDemo1">
                    <li>
                        <img src="{{asset('frontend/images/4.png')}}" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="{{asset('frontend/images/5.png')}}" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="{{asset('frontend/images/6.png')}}" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="{{asset('frontend/images/7.png')}}" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="{{asset('frontend/images/46.jpg')}}" alt=" " class="img-responsive" />
                    </li>
                </ul>
            </div>
            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: false,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems:2
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });
                });
            </script>
            <script type="text/javascript" src="{{asset('frontend/js/jquery.flexisel.js')}}"></script>
        </div>
    </div>
    <!-- //top-brands -->
@endsection