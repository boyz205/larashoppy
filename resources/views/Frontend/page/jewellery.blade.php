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
                                <li><a href="{{url('/jewellery')}}">Neck sets</a></li>
                                <li><a href="{{url('/jewellery')}}">Rings</a></li>
                                <li><a href="{{url('/jewellery')}}">Chains</a></li>
                                <li><a href="{{url('/jewellery')}}">Bracelets</a></li>
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
                        <img src="{{asset('frontend/images/offer6.jpg')}}" alt=" " class="img-responsive" />
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
                                <img src="{{asset('frontend/images/jp1.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Neck set" />
                                        <input type="hidden" name="amount" value="150.00" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div></a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                        <h4>Neck set</h4>
                        <h5>$150.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp2 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/jp2.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Ring" />
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
                        <h4>Ring</h4>
                        <h5>$20.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp3 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/jp3.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Bracelet" />
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
                        <h4>Bracelet</h4>
                        <h5>$90.00</h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="women-set2">
                    <div class="col-md-4 women-grids wp4 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/jp4.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Bracelet" />
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
                        <h4>Bracelet</h4>
                        <h5>$80.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp5 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/jp5.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Neck set" />
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
                        <h4>Neck set</h4>
                        <h5>$120.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp6 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/jp6.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value=" Ear tops" />
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
                        <h4>Ear tops</h4>
                        <h5>$30.00</h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="women-set3">
                    <div class="col-md-4 women-grids mp7 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/jp7.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Bracelet" />
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
                        <h4>Bracelet</h4>
                        <h5>$110.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp8 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/jp8.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Bangles" />
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
                        <h4>Bangles</h4>
                        <h5>$180.00</h5>
                    </div>
                    <div class="col-md-4 women-grids wp9 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="{{url('/single')}}"><div class="product-img">
                                <img src="{{asset('frontend/images/jp9.jpg')}}" alt="" />
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="Bangles" />
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
                        <h4>Bangles</h4>
                        <h5>$130.00</h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection