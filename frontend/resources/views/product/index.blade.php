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
    <div class="container">
        <div class="row">
            <div class="col-md-3">
               <div class="single-sidebar">
                    <div class="sub-menu-title">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".search-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        Search Products
                    </div>
                    <form action="/product" class="search-collapse collapse" method="GET">
                        {{-- {{ csrf_field() }} --}}
                        <p class="form-row">
                            <label for="name">ชื่อสินค้า</label>
                            <input type="text" id="name" name="name" class="input-text form-control" placeholder="Name products...">  
                        </p>
                        <p class="form-row">
                            <label for="category_id">ประเภทสินค้า</label>
                            <select id="category_id" name="category_id" class="form-control">
                                <option value="">เลือกประเภท...</option>
                                @foreach($category_list as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </p>
                        <p class="form-row">
                            <label>ราคา: <span id="price"></span></label>
                            <div id="slider-range"></div>
                            <input type="hidden" id="price_min" name="price_min">
                            <input type="hidden" id="price_max" name="price_max">
                        </p>
                        <button type="submit"><i class="fa fa-search"></i> Search</button>
                    </form>
                </div>

                <div class="single-sidebar">
                    <div class="sub-menu-title">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".list-group-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        ประเภทสินค้า
                    </div>
                   
                    <div class="list-group list-group-collapse collapse">
                        @foreach($category_list as $category)
                        <a href="/product?category_id={{$category->id}}" class="list-group-item">{{$category->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="product-breadcroumb">
                    <a href="/">Home</a>
                    <a href="/product?category_id={{$category_current->id}}">{{$category_current->name}}</a>
                </div>
                @if ($products->count())
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
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </div>                       
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12">
                        <h2>ไม่พบข้อมูล</h2>                  
                    </div>       
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                   {{--  {{ $products->appends(Request::only('category'))->appends(Request::only('search'))->render() }} --}}

                   {{ $products->appends(Request::all())->render() }}


                   {{-- {{ $products->appends(Request::only('search'))->links() }} --}}
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


@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        var min = 0;
        var max = 25000;
        $( "#slider-range" ).slider({
            range: true,
            min: min,
            max: max,
            values: [ min, max ],
            slide: function( event, ui ) {
                $( "#price" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                $( "#price_min" ).val(ui.values[ 0 ]);
                $( "#price_max" ).val(ui.values[ 1 ]);


                var val = ui.values[$(ui.handle).index()-1] + "";

                if( !ui.handle.firstChild ) {
                    $("<div class='tooltip bottom in' style='display:none;left:-12px;top:14px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
                    .prependTo(ui.handle);
                }
                $(ui.handle.firstChild).show().children().eq(1).text(val);
            }
        }).find('span.ui-slider-handle').on('blur', function(){
            $(this.firstChild).hide();
        });
        $( "#price" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    });
</script>
@endsection
