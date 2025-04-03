@extends('master')
@section('content')
<div class="container" style="padding-top: 150px;">
  <div id="content">
    <div class="row">
      <div class="col-sm-9">

        <div class="row">
          <div class="col-sm-6">
            <img src="{{asset('source/img/beef.jpg')}}" alt="Product" style="width:100%; height:auto;">
          </div>
          <div class="col-sm-6">
            <div class="single-item-body">
              <h2 class="single-item-title" style="font-size: 24px; font-weight: bold;">Beef Steak</h2>
              <p class="single-item-price" style="font-size: 18px;">
                <span class="flash-sale">500,000 VND</span>
              </p>
            </div>

            <div class="space20">&nbsp;</div>

            <div class="single-item-desc">
              <p>Delicious beef steak with high-quality ingredients and excellent taste.</p>
            </div>
            <div class="space20">&nbsp;</div>

            <p>Quantity:</p>
            <div class="single-item-options quantity-container">
                <button class="quantity-btn" onclick="changeQuantity(-1)">−</button>
                <input type="number" id="quantity" name="quantity" value="1" min="1" max="10" readonly>
                <button class="quantity-btn" onclick="changeQuantity(1)">+</button>
            </div>

            <a class="add-to-cart" href="javascript:void(0)">
                <i class="fa fa-shopping-cart"></i> Add to Cart
            </a>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="space40">&nbsp;</div>
        <div class="woocommerce-tabs">
          <ul class="tabs">
            <li><a href="#tab-description">Description</a></li>
            <li><a href="#tab-comment">Comments</a></li>
          </ul>

          <div class="panel" id="tab-description">
            <p>Detailed product description...</p>
          </div>

          <div class="panel" id="tab-comment">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="card-body">
                    <form method="post" action="">
                      <div class="form-group">
                        <textarea class="form-control" name="comment" required></textarea>
                      </div>
                      <button type="submit" class="beta-btn primary">Submit Comment</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            @if(isset($comments))
              @foreach($comments as $comment)
                <p class="border-bottom">
                  <b>{{ $comment->username }}</b>
                  <br />
                  <p>{{ $comment->comment }}</p>
                </p>
              @endforeach
            @else
              <p>No comments yet!</p>
            @endif
          </div>
        </div>

        <div class="space50">&nbsp;</div>
        <div class="beta-products-list">
          <h4>Related Products</h4>
          <div class="row">
            <div class="col-sm-4">
              <div class="single-item">
                <div class="single-item-header">
                  <a href=""><img src="https://via.placeholder.com/200" alt="Related Product"></a>
                </div>
                <div class="single-item-body">
                  <p class="single-item-title">Product 1</p>
                  <p class="single-item-price">
                    <span class="flash-sale">400,000 VND</span>
                  </p>
                </div>
                <div class="single-item-caption">
                  <a class="add-to-cart pull-left" href=""><i class="fa fa-shopping-cart"></i></a>
                  <a class="beta-btn primary" href="">View Details <i class="fa fa-chevron-right"></i></a>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div> 
</div>
@endsection
