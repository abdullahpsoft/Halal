<div class="row">
    <div class="col">
        <div class="row">

            @isset($products)

                @foreach($products as $product)
                    <div class="col-12 col-md-4 col-lg-3" style="padding-top: 15px;">
                        <a href="/product-detail/{{$product->id}}">
                            <div class="card">
                                @if($product->image != null)
                                    <img class="card-img-top" src="http://lara.halalcheck.net/img/fotos/thumb/{{$product->image}}" style="  height:189px;" alt="Card image cap">
                                @endif
                                @if($product->image == null)
                                    <img class="card-img-top" src="/img/placeholder-product.jpg" style="  height:189px;" alt="Card image cap">
                                @endif
                                <div class="card-body" style="height: 200px;">
                                    <h4 class="card-title" style="height: 50px;"><a href="/product-detail/{{$product->id}}" class="c-title" title="View Product">{{$product->name}}</a></h4>
                                    <div class="row" style="">
                                        @if($product->alcohol == 0)
                                            <label for="image1" style="padding-left: 0px; color:green">Alcohol: No</label>
                                            <img src="/img/no.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                        @endif
                                        @if($product->alcohol == 1)
                                            <label for="image1" style="padding-left: 0px; color: red">Alcohol: Yes</label>
                                            <img src="/img/yes.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                        @endif
                                        @if($product->alcohol == 2)
                                            <label for="image1" style="padding-left: 0px; color: orange">Alcohol: Controversial</label>
                                            <img src="/img/controversial.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                        @endif
                                        @if($product->alcohol == 3)
                                            <label for="image1" style="padding-left: 0px; color: #25b7d3">Alcohol: No Information</label>
                                            <img src="/img/unknown.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                        @endif
                                    </div>

                                    <div class="row" style="">
                                        @if($product->animal_additive == 0)
                                            <label for="image1" style="padding-left: 0px; color:green">Animal Add: No</label>
                                            <img src="/img/no.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                        @endif
                                        @if($product->animal_additive == 1)
                                            <label for="image1" style="padding-left: 0px; color: red">Animal Add: Yes</label>
                                            <img src="/img/yes.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                        @endif
                                        @if($product->animal_additive == 2)
                                            <label for="image1" style="padding-left: 0px; color: orange">Animal Add: Controversial</label>
                                            <img src="/img/controversial.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                        @endif
                                        @if($product->animal_additive == 3)
                                            <label for="image1" style="padding-left: 0px; color: #25b7d3">Animal Add: No Information</label>
                                            <img src="/img/unknown.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endisset

            {{-- {{ $products->appends(Request::all())->links()  }} --}}

        </div>
    </div>

</div>
