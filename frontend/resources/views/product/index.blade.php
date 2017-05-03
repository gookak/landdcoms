@extends('layouts/main')

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shop</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">ประเภทสินค้า</h2>
                    <div class="list-group">
                    @foreach($categorys as $category)
                      <a href="#" class="list-group-item">{{$category->name}}</a>
                    @endforeach
                    </div>
                </div>
                <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading product-big-title-area">ประเภทสินค้า</div>
                <!-- List group -->
                <div class="list-group">
                  <a href="#" class="list-group-item active">Smartphone</a>
                  <a href="#" class="list-group-item">Notebook</a>
                  <a href="#" class="list-group-item">Software</a>
              </div>
          </div>
      </div>
      <div class="col-md-9">
        @foreach($products as $product)
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{ asset('themes/ustora/img/product-2.jpg') }}" alt="">
                </div>
                <h2><a href="/productDetail/{{$product->id}}">{{ $product->name }}</a></h2>
                <div class="product-carousel-price">
                    {{ $product->price }}
                </div>  

                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                </div>                       
            </div>
        </div>
        @endforeach
        {{-- <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{ asset('themes/ustora/img/product-1.jpg') }}" alt="">
                </div>
                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                <div class="product-carousel-price">
                    <ins>$899.00</ins> <del>$999.00</del>
                </div>  

                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                </div>                       
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{ asset('themes/ustora/img/product-3.jpg') }}" alt="">
                </div>
                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                <div class="product-carousel-price">
                    <ins>$899.00</ins> <del>$999.00</del>
                </div>  

                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                </div>                       
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{ asset('themes/ustora/img/product-4.jpg') }}" alt="">
                </div>
                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                <div class="product-carousel-price">
                    <ins>$899.00</ins> <del>$999.00</del>
                </div>  

                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                </div>                       
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{ asset('themes/ustora/img/product-2.jpg') }}" alt="">
                </div>
                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                <div class="product-carousel-price">
                    <ins>$899.00</ins> <del>$999.00</del>
                </div>  

                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                </div>                       
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{ asset('themes/ustora/img/product-1.jpg') }}" alt="">
                </div>
                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                <div class="product-carousel-price">
                    <ins>$899.00</ins> <del>$999.00</del>
                </div>  

                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                </div>                       
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{ asset('themes/ustora/img/product-3.jpg') }}" alt="">
                </div>
                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                <div class="product-carousel-price">
                    <ins>$899.00</ins> <del>$999.00</del>
                </div>  

                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                </div>                       
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{ asset('themes/ustora/img/product-4.jpg') }}" alt="">
                </div>
                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                <div class="product-carousel-price">
                    <ins>$899.00</ins> <del>$999.00</del>
                </div>  

                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                </div>                       
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{ asset('themes/ustora/img/product-2.jpg') }}" alt="">
                </div>
                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                <div class="product-carousel-price">
                    <ins>$899.00</ins> <del>$999.00</del>
                </div>  

                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                </div>                       
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{ asset('themes/ustora/img/product-1.jpg') }}" alt="">
                </div>
                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                <div class="product-carousel-price">
                    <ins>$899.00</ins> <del>$999.00</del>
                </div>  

                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                </div>                       
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{ asset('themes/ustora/img/product-3.jpg') }}" alt="">
                </div>
                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                <div class="product-carousel-price">
                    <ins>$899.00</ins> <del>$999.00</del>
                </div>  

                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                </div>                       
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{ asset('themes/ustora/img/product-4.jpg') }}" alt="">
                </div>
                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                <div class="product-carousel-price">
                    <ins>$899.00</ins> <del>$999.00</del>
                </div>  

                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                </div>                       
            </div>
        </div> --}}
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="product-pagination text-center">
        {{ $products->render() }}
           {{--  <nav>
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>     --}}                    
</div>
</div>
</div>
</div>
</div>
@endsection
