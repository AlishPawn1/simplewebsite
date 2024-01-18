<?php include("header.php"); ?>


<section class="single-banner bg-light-white margin-top-header">
    <div class="container">
        <div class="content">
            <h1 class="heading">Shop</h1>
            <div class="breadcrumb m-0">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>Clock</span>
                <span>/</span>
                <span>Board Wooden Clock</span>
            </div>
        </div>
    </div>
</section>
<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="row g-sm-4 gy-5 mb-5">
                        <div class="col-sm-6">
                            <div class="">
                                <div class="zoom image image-change position-relative overflow-hidden" id="zoom1">
                                    <img class="zoomable-image" src="image/shop-3.jpg" alt="">
                                    <div class="image-change-full-width">
                                        <i class="fas fa-magnifying-glass" onclick="openFancybox(this)"></i>
                                    </div>
                                </div>
                                <div class="for-change-image d-flex gap-2 pt-2">
                                    <a href="image/shop-3.jpg" data-fancybox="images" data-caption="Image 1">
                                        <img src="image/shop-3.jpg" alt="">
                                    </a>
                                    <a href="image/corporate-5.jpg" data-fancybox="images" data-caption="Image 2">
                                        <img src="image/corporate-5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-price-detail ps-sm-5">
                               <div class="content product-box-list">
                                    <div class="title">
                                        <h4 class="heading">Board Wooden Clock</h4>
                                    </div>
                                    <div class="d-flex gap-2 py-2">
                                        <div class="rateing">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <span>(4 customer reviews)</span>
                                    </div>
                                    <div class="price-tag">
                                        <del><span>$</span> 45.00</del>
                                        <ins><span>$</span> 32.00</ins>
                                    </div>
                               </div>
                               <div class="product-price-description product-box-list">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                               </div>
                               <div class="product-price-input product-box-list">
                                    <form action="">
                                        <div class="product-number position-relative d-flex">
                                            <div class="d-xl-none product-btn" id="plus">+</div>
                                            <input type="number" min="1" value="1" id="quantity">
                                            <div class="d-xl-none product-btn" id="minus">-</div>
                                        </div>
                                        <input type="submit" value="ADD TO CART" class="read-more">
                                    </form>
                               </div>
                               <div class="product-price-detail-category">
                                    <div class="d-flex gap-2 align-items-center">
                                        <h5 class="heading">Category:</h5>
                                        <a href="#">Clock</a>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <h5 class="heading">Tags:</h5>
                                        <div class="d-flex gap-1">
                                            <a href="#">Board</a>,
                                            <a href="#">Clock</a>,
                                            <a href="#">Wooden</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-tab-menu">
                        <div class="tab-menu d-block">
                            <ul class="nav nav-tabs gap-2" id="myTab" role="tablist">
                                <li class="nav-item tab-bootstrap" role="presentation">
                                <button class="nav-link tab-button product-tab active" id="description" data-bs-toggle="tab" data-bs-target="#description-pane" type="button" role="tab" aria-controls="description-pane" aria-selected="true">Description</button>
                                </li>
                                <li class="nav-item tab-bootstrap" role="presentation">
                                <button class="nav-link tab-button product-tab" id="review-tab" data-bs-toggle="tab" data-bs-target="#review-tab-pane" type="button" role="tab" aria-controls="review-tab-pane" aria-selected="false">Reviews <span>(4)</span></button>
                                </li>
                            </ul>
                            <div class="tab-content pt-4 position-relative" id="myTabContent">
                                <div class="tab-pane fade show active" id="description-pane" role="tabpanel" aria-labelledby="description" tabindex="0">
                                    <div class="single-product-description  single-product-tab-box">
                                        <h5 class="heading">Description</h5>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade position-relative" id="review-tab-pane" role="tabpanel" aria-labelledby="review-tab" tabindex="0">
                                    <div class="single-product-reviews comments single-product-tab-box">
                                        <h5 class="heading"><span>4</span> reviews for Board Wooden Clock</h5>
                                        <ul class="comment-list p-0">
                                            <li class="comment">
                                                <div class="comment-detail d-flex gap-3">
                                                    <div class="image">
                                                        <img src="image/user-1.jpeg" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <div class="d-flex gap-3">
                                                            <p>
                                                                <strong class="review-author">Dan </strong>
                                                                <span class="review-dash">-</span>
                                                                <span class="review-published-date">June 7, 2013</span>
                                                            </p>
                                                            <div class="rateing">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="comment-description">
                                                            <p>I thought I was buying a man holding a poster, but when it arrived it was just the poster. Cool poster though, so I’ll give it 3 stars!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="review-form">
                                            <h5 class="heading">Add a review </h5>
                                            <p>You must be <a href="#">logged in</a> to post a review.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related-product">
                        <h5 class="heading underline">Related products</h5>
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="new-arrival-box">
                                    <div class="image">
                                        <img src="image/new-arrival-1.jpg" alt="">
                                        <div class="hidden-btn">
                                            <a href="#" class="btn white-btn">add to cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <a href="shop-single.php">
                                            <div class="rateing">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <h4 class="heading">Clock Gold Arrows</h4>
                                            <div class="price-tag">
                                                <span>$956.00</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="new-arrival-box">
                                    <div class="image">
                                        <img src="image/new-arrival-2.jpg" alt="">
                                        <div class="hidden-btn">
                                            <a href="#" class="btn white-btn">add to cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <a href="shop-single.php">
                                            <div class="rateing">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <h4 class="heading">Stone Vase</h4>
                                            <div class="price-tag">
                                                <span>$956.00</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 d-none">
                <div class="shop-list">
                    <div class="search-product">
                        <form action="">
                            <div class="position-relative">
                                <input type="search" placeholder="Search products...">
                                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                            </div>
                        </form>
                    </div>
                    <div class="top-rated-products shop-widget">
                        <h4 class="heading underline">Top Rated Products</h4>
                        <ul class="p-0">
                            <li>
                                <a href="#">
                                    <div class="d-flex gap-4 align-items-center pt-2 ps-3 main-product" >
                                        <div class="image">
                                            <img src="image/new-arrival-1.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Clock Gold Arrows</h5>
                                            <div class="rateing">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="price-tag">
                                                <span>$956.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="d-flex gap-4 align-items-center pt-2 ps-3 main-product">
                                        <div class="image">
                                            <img src="image/new-arrival-2.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Vintage Chair</h5>
                                            <div class="rateing">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="price-tag">
                                                <span>$55.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="d-flex gap-4 align-items-center pt-2 ps-3 main-product">
                                        <div class="image">
                                            <img src="image/new-arrival-3.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Bollard Lamp</h5>
                                            <div class="rateing">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="price-tag">
                                                <span>$18.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-categories-box shop-widget">
                        <h4 class="heading underline">Product Categories</h4>
                        <ul class="product-categories p-0">
                            <li><a href="#">Chair </a><span>(1)</span></li>
                            <li><a href="#">Clock </a><span>(3)</span></li>
                            <li><a href="#">Flower </a><span>(1)</span></li>
                            <li><a href="#">Horns </a><span>(2)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("footer.php"); ?>
