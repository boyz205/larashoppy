@extends('frontend.layouts.main')

@section('title', 'Fashion Club an Ecommerce Online Shopping Category  Flat Bootstrap responsive Website Template | Home :: w3layouts')

@section('sidebar')

    @parent


@endsection

@section('content')
    <div class="sub-banner my-banner3">
    </div>
    <div class="content">
        <div class="container">
            <div class="col-md-4 w3ls_dresses_grid_left">
                <div class="w3ls_dresses_grid_left_grid">
                    <h3>Categories</h3>
                    <div class="w3ls_dresses_grid_left_grid_sub">
                        <div class="ecommerce_dres-type">
                            <ul>
                                <li><a href="{{url('/casuals')}}">Men casuals</a></li>
                                <li><a href="{{url('/casuals')}}">Women casuals</a></li>
                                <li><a href="{{url('/casuals')}}">Jeans</a></li>
                                <li><a href="{{url('/casuals')}}">Shirts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w3ls_dresses_grid_left_grid">
                    <h3>Color</h3>
                    <div class="w3ls_dresses_grid_left_grid_sub">
                        <div class="ecommerce_color">
                            <ul>
                                <li><a href="#"><i></i> Red(5)</a></li>
                                <li><a href="#"><i></i> Brown(2)</a></li>
                                <li><a href="#"><i></i> Yellow(3)</a></li>
                                <li><a href="#"><i></i> Violet(6)</a></li>
                                <li><a href="#"><i></i> Orange(2)</a></li>
                                <li><a href="#"><i></i> Blue(1)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w3ls_dresses_grid_left_grid">
                    <h3>Size</h3>
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
                        <img src="{{asset('frontend/images/offer.jpg')}}" alt=" " class="img-responsive" />
                        <div class="dresses_img_hover_pos">
                            <h4>Upto<span>40%</span><i>Off</i></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 women-dresses">
                <div class="women-set1">
                    <div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{asset('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/cap1.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Pencil dress" />
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
                        <h4>Pencil dress</h4>
                        <h5>$50.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp2 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{asset('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/wp9.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Casual dress" />
                                        <input type="hidden" name="amount" value="70.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                        <h4>Casual dress</h4>
                        <h5>$70.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp3 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{asset('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/mp6.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Casual dress" />
                                        <input type="hidden" name="amount" value="90.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                        <h4>Casual dress</h4>
                        <h5>$90.00</h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="women-set2">
                    <div class="col-md-4 women-grids wp4 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{asset('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/wp2.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Casual dress" />
                                        <input type="hidden" name="amount" value="100.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                        <h4>Casual dress</h4>
                        <h5>$100.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp5 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{asset('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/mp5.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Casual dress" />
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
                        <h4>Casual dress</h4>
                        <h5>$120.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp6 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{asset('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/wp8.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Casual dress" />
                                        <input type="hidden" name="amount" value="160.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <h4>Casual dress</h4>
                        <h5>$160.00</h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="women-set3">
                    <div class="col-md-4 women-grids wp7 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{asset('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/wp7.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Casual dress" />
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
                        <h4>Casual dress</h4>
                        <h5>$110.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp8 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{asset('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/mp8.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Casual dress" />
                                        <input type="hidden" name="amount" value="180.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <h4>Casual dress</h4>
                        <h5>$180.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp9 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{asset('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/wp4.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Casual dress" />
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
                        <h4>Casual dress</h4>
                        <h5>$130.00</h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection