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
                <h2 class="sidebar-title">Search Products</h2>
                <form action="/product" method="GET">
                    {{-- {{ csrf_field() }} --}}
                    <p class="form-row">
                        <label for="name">ชื่อสินค้า</label>
                        <input type="text" id="name" name="name" class="input-text form-control" placeholder="Name products...">  
                    </p>
                    <p class="form-row">
                        <label for="category_id">ประเภทสินค้า</label>
                        <select id="category_id" name="category_id" class="form-control">
                            <option value="">เลือกประเภท...</option>
                            @foreach($categorys as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </p>
                    <button type="submit"><i class="fa fa-search"></i> Search</button>
                </form>

            </div>

            {{-- <div class="single-sidebar">
                <h2 class="sidebar-title">ประเภทสินค้า</h2>
                <div class="list-group">
                    @foreach($categorys as $category)
                    <a href="/product?category={{$category->id}}" class="list-group-item">{{$category->name}}</a>
                    @endforeach
                </div>
            </div> --}}
               {{--  <div class="panel panel-primary">
                <div class="panel-heading product-big-title-area">ประเภทสินค้า</div>
                <div class="list-group">
                  <a href="#" class="list-group-item active">Smartphone</a>
                  <a href="#" class="list-group-item">Notebook</a>
                  <a href="#" class="list-group-item">Software</a>
              </div>
          </div> --}}
      </div>
      <div class="col-md-9">
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
