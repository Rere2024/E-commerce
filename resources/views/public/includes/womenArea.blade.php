<section class="section" id="women">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Women's Latest</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="women-item-carousel">
                    <div class="owl-women-item owl-carousel">
                        @foreach ($latestwomenProducts as $product)
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('singleProduct', $product->id) }}"><i
                                                        class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('assets/public/images/products/' . $product->image) }}"
                                        alt="">
                                </div>
                                <div class="down-content">
                                    <h4>{{ $product->title }}</h4>
                                    <span>${{ $product->price }}</span>
                                    <ul class="stars">
                                        @for ($i = 0; $i < $product->rate; $i++)
                                            <li><i class="fa fa-star"></i></li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
