@extends('frontend.layouts.main')

@section('title', 'Fashion Club an Ecommerce Online Shopping Category  Flat Bootstrap responsive Website Template | Home :: w3layouts')

@section('sidebar')

    @parent


@endsection

@section('content')
    <div class="content">
        <div class="container">
            <div class="col-md-4 w3ls_dresses_grid_left">
                <div class="w3ls_dresses_grid_left_grid">
                    <h3>Categories</h3>
                    <div class="w3ls_dresses_grid_left_grid_sub">
                        <div class="ecommerce_dres-type">
                            <ul>
                                <li><a href="{{url('/cosmetics')}}">Eye shades</a></li>
                                <li><a href="{{url('/cosmetics')}}">Lipsticks</a></li>
                                <li><a href="{{url('/cosmetics')}}">Eye makeup</a></li>
                                <li><a href="{{url('/cosmetics')}}">Eye liner</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w3ls_dresses_grid_left_grid">
                    <h3>Flavour</h3>
                    <div class="w3ls_dresses_grid_left_grid_sub">
                        <div class="ecommerce_color">
                            <ul>
                                <li><a href="{{url('/deos')}}">Rose</a></li>
                                <li><a href="{{url('/deos')}}">Chocolate</a></li>
                                <li><a href="{{url('/deos')}}">Strawberry</a></li>
                                <li><a href="{{url('/deos')}}">Lavender</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w3ls_dresses_grid_left_grid">
                    <h3>Quantity</h3>
                    <div class="w3ls_dresses_grid_left_grid_sub">
                        <div class="ecommerce_color ecommerce_size">
                            <ul>
                                <li><a href="#">Medium</a></li>
                                <li><a href="#">Large</a></li>
                                <li><a href="#">Extra Large</a></li>
                                <li><a href="#">Small</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w3ls_dresses_grid_left_grid">
                    <div class="dresses_img_hover">
                        <img src="{{asset('frontend/images/offer8.jpg')}}" alt=" " class="img-responsive" />
                        <div class="dresses_img_hover_pos">
                            <h4>Upto<span>40%</span><i>Off</i></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 women-dresses">
                <div class="women-set1">
                    <div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/cp1.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Lip gloss" />
                                        <input type="hidden" name="amount" value="50.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                        <h4>Lip gloss</h4>
                        <h5>$50.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp2 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/cp2.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Eyeliner" />
                                        <input type="hidden" name="amount" value="20.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                        <h4>Eyeliner</h4>
                        <h5>$20.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp3 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/cp3.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Eyeliner" />
                                        <input type="hidden" name="amount" value="30.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                        <h4>Eyeliner</h4>
                        <h5>$30.00</h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="women-set2">
                    <div class="col-md-4 women-grids wp4 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/cp4.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Kajal" />
                                        <input type="hidden" name="amount" value="80.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                        <h4>Kajal</h4>
                        <h5>$80.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp5 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/cp5.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Lipstick" />
                                        <input type="hidden" name="amount" value="120.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <h4>Lipstick</h4>
                        <h5>$120.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp6 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/cp6.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Lipstick" />
                                        <input type="hidden" name="amount" value="30.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <h4>lipstick</h4>
                        <h5>$30.00</h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="women-set3">
                    <div class="col-md-4 women-grids mp7 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/cp7.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Eye shades" />
                                        <input type="hidden" name="amount" value="110.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <h4>Eye shades</h4>
                        <h5>$110.00</h5>
                    </div>
                    <a href="{{url('/single')}}"><div class="col-md-4 women-grids wp8 animated wow slideInUp" data-wow-delay=".5s">
                            <div class="product-img">
                                <img src="{{asset('frontend/images/cp8.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Eye shades" />
                                        <input type="hidden" name="amount" value="180.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <h4>Eye shades</h4>
                            <h5>$180.00</h5>
                        </div></a>
                    <div class="col-md-4 women-grids wp9 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/cp9.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Eye shades" />
                                        <input type="hidden" name="amount" value="130.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <h4>Eye shades</h4>
                        <h5>$130.00</h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection