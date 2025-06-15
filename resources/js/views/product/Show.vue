<template>
  <div>
    <main>
      <!--Start Shop Details Breadcrumb-->
      <div class="shop-details-breadcrumb wow fadeInUp animated overflow-hidden ">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="shop-details-inner">
                <ul class="shop-details-menu">
                  <li><a href="index.html">Главная</a></li>
                  <li class="active">Карточка товара</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Shop Details Breadcrumb-->
      <!--Start Shop Details Top-->
      <section v-if="product" class="shop-details-top two ">
        <div class="container">
          <div class="row mt--30">
            <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">
                <div class="single-product-box one">
                    <div class="big-product single-product-one slider-for">
                        <div>
                            <div class="single-item">
                                <img :src="activeImage" alt="">
                                <div class="ptag"><span class="one">-20% </span></div>
                                <a href="#0" class="love"> <i class="flaticon-like"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="navholder">
                        <div class="product-slicknav single-product-one-nav slider-nav">
                            <div v-for="productImage in product.product_images" @click="setActiveImage(productImage.url)">
                                <span class="single-item">
                                    <img :src="productImage.url" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">
              <div class="shop-details-top-right ">
                <div class="shop-details-top-right-content-box">
                  <div class="shop-details-top-review-box">
                    <div class="shop-details-top-review">
                      <ul>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                      </ul>
                      <p>(2 Отзыва)</p>
                    </div>
                  </div>
                  <div class="shop-details-top-title">
                    <h3>{{ product.title }}</h3>
                  </div>
                  <ul class="shop-details-top-info">
                    <li><span>Артикул:</span> 25d5214</li>
                    <li><span>Производитель:</span> Молдова</li>
                  </ul>
                  <div class="shop-details-top-price-box">
                    <h3> {{ product.price }} lei <del v-if="product.old_price">{{ product.old_price }} lei</del></h3>
                    <p>(+15% НДС включено)</p>
                  </div>
                  <p class="shop-details-top-product-sale">Продано <span>20</span> за последние 12 часов
                  </p>
                  <div class="shop-details-top-size-box">
                    <h4>Size:</h4>
                    <div class="shop-details-top-size-list-box">
                      <ul class="shop-details-top-size-list">
                        <li><a href="#0">XS</a></li>
                        <li><a href="#0">S</a></li>
                        <li><a href="#0">M</a></li>
                        <li><a href="#0">XL</a></li>
                      </ul>
                      <p class="shop-details-top-size-guide"><a href="#0">Size Guide</a></p>
                    </div>
                  </div>
                  <div class="shop-details-top-color-sky-box">
                    <h4>Colors:</h4>
                      <template v-if="product.group_products.length">
                          <template v-for="groupProduct in product.group_products" :key="groupProduct.id">
                              <template v-if="groupProduct.id === product.id && groupProduct.colors.length">
                                  <ul>
                                      <li v-for="color in groupProduct.colors" class="varients">
                                          <a :style="`background: ${color.title};width: 50px;height: 50px`" href="#0" class="shop-details-top-color-sky-img"></a>
                                      </li>
                                  </ul>
                              </template>
                          </template>
                      </template>
                  </div>
                  <ul class="shop-details-top-ask-question">
                    <li> <a href="#0">
                      <div class="icon"> <i class="flaticon-left-and-right-arrows"></i> </div>
                      <div class="text">
                        <p>Добавить к сравнению</p>
                      </div>
                    </a> </li>
                    <li> <a href="#0">
                      <div class="icon"> <i class="flaticon-chat-bubble"></i> </div>
                      <div class="text">
                        <p>Задать вопрос</p>
                      </div>
                    </a> </li>
                  </ul>
                  <div class="timer-box">
                    <h4>Running Offer</h4>
                    <div class="countdown-timer">
                      <div class="default-coundown">
                        <div class="box">
                          <div class="countdown time-countdown-two"
                               data-countdown-time="2022/03/12"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="shop-details-top-product-sale"><span> {{ randomCount }} </span> Покупателей заинтересованы в этом товаре</p>
                  <div class="product-quantity">
                    <h4>Кол-во</h4>
                    <div class="product-quantity-box d-flex align-items-center flex-wrap">
                      <div class="qty mr-2">
                        <div class="qtySelector text-center"> <span class="decreaseQty"><i
                            class="flaticon-minus"></i> </span> <input type="number"
                                                                       class="qtyValue" value="1" /> <span class="increaseQty"> <i
                            class="flaticon-plus"></i> </span> </div>
                      </div>
                      <div class="product-quantity-check"> <i class="flaticon-select"></i>
                        <p>В наличии</p>
                      </div>
                    </div>
                  </div>
                  <div class="shop-details-top-order-now"> <i class="flaticon-point"></i>
                    <p>Закажите сейчас, осталось всего {{ product.count }} штук!</p>
                  </div>
                  <div class="shop-details-top-cart-box-btn"> <button class="btn--primary style2 "
                                                                      type="submit">Добавить в корзину</button> </div>
                  <div class="shop-details-top-free-shipping"> <i class="flaticon-shipping"></i>
                    <p>Закажите на сумму <span>$99.00</span> и больше для бесплатной доставки</p>
                  </div>
                  <div class="shop-details-top-social-box">
                    <p>Поделиться:</p>
                    <ul class="ps-1 social_link d-flex align-items-center">
                      <li><a href="https://www.facebook.com/" class="active" target="_blank"><i
                          class="flaticon-facebook-app-symbol"></i></a> </li>
                      <li> <a href="https://www.youtube.com/" target="_blank"><i
                          class="flaticon-youtube"></i></a> </li>
                      <li> <a href="https://twitter.com/" target="_blank"><i
                          class="flaticon-twitter"></i></a> </li>
                      <li> <a href="https://www.instagram.com/" target="_blank"><i
                          class="flaticon-instagram"></i></a> </li>
                    </ul>
                  </div>
                  <div class="checked-box">
                    <form>
                      <div class="form-group"> <input type="checkbox" id="html"> <label for="html">Я согласен(-а) со всеми правилами и условиями компании</label> </div>
                    </form>
                  </div>
                  <div class="shop-details-top-buy-now-btn"> <a href="#" class="btn--primary">Купить</a> </div>
                  <div class="shop-details-top-safe-checkout">
                    <h4>Гарантированна безопасная оплата</h4>
                    <ul class="shop-details-top-safe-checkout-list">
                      <li>
                        <div class="shop-details-top-safe-checkout-img"> <a href="#0"><img
                            src="/public/assets/images/shop/visa.png"
                            class="image-zoom"
                            alt=""></a> </div>
                      </li>
                      <li>
                        <div class="shop-details-top-safe-checkout-img"> <a href="#0"><img
                            src="/public/assets/images/shop/mastercard.png"
                            class="image-zoom"
                            alt=""></a> </div>
                      </li>
                      <li>
                        <div class="shop-details-top-safe-checkout-img"> <a href="#0"><img
                            src="/public/assets/images/shop/applepay.png"
                            class="image-zoom"
                            alt=""></a> </div>
                      </li>
                      <li>
                        <div class="shop-details-top-safe-checkout-img"> <a href="#0"><img
                            src="/public/assets/images/shop/googlepay.png"
                            class="image-zoom"
                            alt=""></a> </div>
                      </li>
                      <li>
                        <div class="shop-details-top-safe-checkout-img"> <a href="#0"><img
                            src="/public/assets/images/shop/smart3ds.png"
                            class="image-zoom"
                            alt=""></a> </div>
                      </li>
                      <li>
                        <div class="shop-details-top-safe-checkout-img"> <a href="#0"><img
                            src="/public/assets/images/shop/https.png"
                            class="image-zoom"
                            alt=""></a> </div>
                      </li>
                    </ul>
                  </div>
                  <p class="shop-details-top-product-delivery">Ожидается, что этот продукт будет доставлен между
                    <span> {{ deliveryStart }} </span> и <span> {{ deliveryEnd }} </span></p>
                      <ul class="shop-details-top-category-tags">
                        <li>Категория: <span> {{ product.category.title }} </span></li>
                          <template v-if="product.group_products.length">
                              <template v-for="groupProduct in product.group_products" :key="groupProduct.id">
                                  <li v-if="groupProduct.id === product.id && groupProduct.tags.length">
                                      Теги:
                                      <span>
                                        {{ groupProduct.tags.map(tag => tag.title).join(', ') }}.
                                      </span>
                                  </li>
                              </template>
                          </template>
                      </ul>
                  <ul class="shop-details-top-feature">
                    <li>
                      <div class="icon"> <i class="flaticon-portfolio"></i> </div>
                      <div class="text">
                        <p>Гарантия возврата денег</p>
                      </div>
                    </li>
                    <li>
                      <div class="icon"> <i class="flaticon-truck"></i> </div>
                      <div class="text">
                        <p>Бесплатная доставка и возврат</p>
                      </div>
                    </li>
                    <li>
                      <div class="icon"> <i class="flaticon-security"></i> </div>
                      <div class="text">
                        <p>Качественная поддержка</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Shop Details Top-->
      <!-- productdrescription-tabStart -->
      <section class="product pt-60 pb-60 wow fadeInUp overflow-hidden ">
        <div class="container">
          <div class="row wow fadeInUp animated">
            <div class="col-12">
              <ul class="nav product-details-nav nav-one nav-pills justify-content-center" id="pills-tab-two"
                  role="tablist">
                <li class="nav-item" role="presentation"> <button class="nav-link active"
                                                                  id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description"
                                                                  type="button" role="tab" aria-controls="pills-description" aria-selected="true">
                    Описание </button> </li>
                <li class="nav-item" role="presentation"> <button class="nav-link" id="pills-additional-tab"
                                                                  data-bs-toggle="pill" data-bs-target="#pills-additional" type="button" role="tab"
                                                                  aria-controls="pills-additional" aria-selected="false"> Дополнительно </button> </li>
                <li class="nav-item" role="presentation"> <button class="nav-link" id="pills-sizechart-tab"
                                                                  data-bs-toggle="pill" data-bs-target="#pills-sizechart" type="button" role="tab"
                                                                  aria-controls="pills-sizechart" aria-selected="false"> Таблица размеров </button> </li>
                <li class="nav-item" role="presentation"> <button class="nav-link" id="pills-review-tab"
                                                                  data-bs-toggle="pill" data-bs-target="#pills-review" type="button" role="tab"
                                                                  aria-controls="pills-review" aria-selected="false"> Отзывы </button> </li>
              </ul>
            </div>
          </div>
          <div class="row wow fadeInUp animated">
            <div class="tab-content" id="pills-tabContent-two">
              <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                   aria-labelledby="pills-description-tab">
                <div class="product-drescription">
                  <h4> Детали товара:</h4>
                  <p> {{ product.content }} </p>
                  <div class="row align-items-center">
                    <div class="col-lg-4 mt-30 ">
                      <div class="thumb"> <img
                          src="/public/assets/images/shop/shop-details-tab-content-specification-img-1.jpg"
                          alt=""> </div>
                    </div>
                    <div class="col-lg-8 mt-30">
                      <h4>Особенности:</h4>
                      <ul class="drescription-list">
                        <li> 1. Асимметричный крой. </li>
                        <li> 2. Женственный Х-образный силуэт. </li>
                        <li> 3. Длина до колена. </li>
                        <li> 4. Идеально для пляжа, прогулок, отдыха. </li>
                        <li> 5. Лёгкая и приятная к телу ткань </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-additional" role="tabpanel"
                   aria-labelledby="pills-additional-tab">
                <div class="product-drescription">
                  <p class="pt-0"> Assertively conceptualize parallel process improvements through user
                    friendly colighue to action items. Interactively antidos cultivate interdependent
                    customer service without clicks-and-mortar e-services. Proactively cultivate go
                    forward testing procedures with accurate quality vectors. Globally aiembrace ethical
                    functionalities via empowered scenarios. Phosfluorescently restore highly efficient
                    opportunities and client-focused infomediaries. Enthusiastically transition
                    multidisciplinary outside the box thinking without premium networks. Progressive
                    supply clicks-and-mortar human capital through enterprise-wide web services.
                    Objectivey bester provide access to extensible processes better than more
                    qulification dumber there stoaling through 24/365 solutions. </p>
                  <ul class="drescription-list">
                    <li> 1. Adipiscing hac cubilia, fermentum ipsum auctor parturient tempus lobortis
                      fermentum. </li>
                    <li> 2. Euismod disagree soler imperdiet vehicula pede eros ipsum cras mi feugiat.
                    </li>
                    <li> 3. Rhoncus consequat phasellus donec suspendisse scelerisque facilisis gravida
                      porttitor turpis. </li>
                    <li> 4. Consequat phasellus donec suspendisse scelerisque facilisis gravida
                      porttitor turpis. </li>
                    <li> 5. Consequat phasellus donec suspendisse scelerisque facilisis gravida
                      porttitor </li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-sizechart" role="tabpanel"
                   aria-labelledby="pills-sizechart-tab">
                <div class="product-drescription">
                  <div class="size-chirt">
                    <h4>Руководство по размерам</h4>
                    <p class="pt-0"> Assertively conceptualize parallel process improvements through
                      user friendly colighue to action items. </p>
                      <div class="size-tabble">
                          <table>
                              <thead>
                              <tr>
                                  <th>Размер</th>
                                  <th>XXS - XS</th>
                                  <th>XS - S</th>
                                  <th>S - M</th>
                                  <th>M - L</th>
                                  <th>L - XL</th>
                                  <th>XL - XXL</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>Moldova / EU</td>
                                  <td>32</td>
                                  <td>34</td>
                                  <td>36</td>
                                  <td>38</td>
                                  <td>40</td>
                                  <td>42</td>
                              </tr>
                              <tr>
                                  <td>UK</td>
                                  <td>4</td>
                                  <td>6</td>
                                  <td>8</td>
                                  <td>10</td>
                                  <td>12</td>
                                  <td>14</td>
                              </tr>
                              <tr>
                                  <td>USA</td>
                                  <td>0</td>
                                  <td>2</td>
                                  <td>4</td>
                                  <td>6</td>
                                  <td>8</td>
                                  <td>10</td>
                              </tr>
                              <tr>
                                  <td>Russia</td>
                                  <td>38</td>
                                  <td>40</td>
                                  <td>42</td>
                                  <td>44</td>
                                  <td>46</td>
                                  <td>48</td>
                              </tr>
                              <tr>
                                  <td>International</td>
                                  <td>XXS</td>
                                  <td>XS</td>
                                  <td>S</td>
                                  <td>M</td>
                                  <td>L</td>
                                  <td>XL</td>
                              </tr>
                              <tr>
                                  <td><strong>Объём талии (см)</strong></td>
                                  <td>58–60</td>
                                  <td>61–63</td>
                                  <td>64–67</td>
                                  <td>68–72</td>
                                  <td>73–76</td>
                                  <td>77–81</td>
                              </tr>
                              <tr>
                                  <td><strong>Объём бёдер (см)</strong></td>
                                  <td>84–86</td>
                                  <td>87–90</td>
                                  <td>91–94</td>
                                  <td>95–98</td>
                                  <td>99–102</td>
                                  <td>103–106</td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                <div class="product-drescription">
                  <div class="review-single pt-0 hed">
                    <div class="ratting"> <i class="flaticon-star-1"></i> <i
                        class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i
                        class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <span
                        class="ps-2">BASED ON 100 REVIEW</span> </div>
                  </div>
                  <div class="review-single">
                    <div class="left">
                      <div class="ratting"> <i class="flaticon-star-1"></i> <i
                          class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i
                          class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> </div>
                      <h6>Vary Good quality Theme <span>Raul Bates on January 28, 2022</span> </h6>
                      <p> Assertively conceptualize parallel process improvements through user
                        friendly colighue to action items. Interactively antidos cultivate
                        interdependent customer service without clicks-and-mortar e-services. </p>
                    </div> <a href="#0" class="right-box"> Report this Comments </a>
                  </div>
                  <div class="review-single">
                    <div class="left">
                      <div class="ratting"> <i class="flaticon-star-1"></i> <i
                          class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i
                          class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> </div>
                      <h6> Amazing Theme <span>Kurt Morgan on January 28, 2022</span> </h6>
                      <p> Assertively conceptualize parallel process improvements through user
                        friendly colighue to action items. Interactively antidos cultivate
                        interdependent customer service without clicks-and-mortar e-services. </p>
                    </div> <a href="#0" class="right-box">Report this Comments </a>
                  </div>
                  <div class="review-from-box mt-30">
                    <h6>Write a Review</h6>
                    <form action="#" class="review-from">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="ratting-box">
                            <p> RATING </p>
                            <div class="ratting"> <i class="flaticon-star-1"></i> <i
                                class="flaticon-star-1"></i> <i class="flaticon-star-1"></i>
                              <i class="flaticon-star-1"></i> <i class="flaticon-star-1"></i>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group"> <label for="name">NAME</label> <input
                              type="text" id="name" class="form-control"
                              placeholder="David Warner"> </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group"> <label for="number">Number</label> <input
                              type="text" id="number" class="form-control"
                              placeholder="Phone Number"> </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group"> <label for="email"> Email </label> <input
                              type="text" id="email" class="form-control"
                              placeholder="support@gmail.com"> </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group"> <label for="namee"> REVIEW TITLE</label> <input
                              type="text" id="namee" class="form-control"
                              placeholder="Give your review title"> </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group m-0"> <label for="email">BODY OF REVIEW (1500)
                          </label> <textarea
                              placeholder="Write Your Comments Here"></textarea> </div>
                        </div>
                      </div> <button type="submit" class="btn--primary style2 ">Submit Review
                    </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> <!-- productdrescription-tab End -->
      <!-- recent-products Start -->
      <section class="recent-products pt-60 pb-120 overflow-hidden wow fadeInUp">
        <div class="container ">
          <div class="row">
            <div class="col-12 wow fadeInUp animated">
              <div class="section-head text-center">
                <h2>Актуальные товары </h2>
              </div>
            </div>
          </div>
          <div class="row mt-30 wow fadeInUp animated">
            <div class="catagory-slider">
              <div class="products-grid-one">
                <div class="products-grid-one__product-image">
                  <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span>
                  </div> <a href="shop-details-1.html" class="d-block products-grid__image_holder"> <img
                    src="/public/assets/images/shop/products-img1.jpg" alt="Alt"> </a>
                  <div class="products-grid__usefull-links">
                    <ul>
                      <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                    wishlist</span> </a> </li>
                      <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                        <span> compare</span> </a> </li>
                      <li><a href="#view-popup1" class="popup_link"> <i
                          class="flaticon-visibility"></i> <span> quick view</span> </a> </li>
                    </ul>
                  </div>
                </div>
                <div id="view-popup1" class="product-gird__quick-view-popup mfp-hide">
                  <div class="container">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-lg-6">
                        <div class="quick-view__left-content">
                          <div class="tabs">
                            <div class="popup-product-thumb-box">
                              <ul>
                                <li class="tab-nav popup-product-thumb"> <a href="#tab7">
                                  <img src="/public/assets/images/shop/products-img1.jpg"
                                       alt="img"> </a> </li>
                                <li class="tab-nav popup-product-thumb "> <a href="#tab8">
                                  <img src="/public/assets/images/shop/products-img2.jpg"
                                       alt="img"> </a> </li>
                                <li class="tab-nav popup-product-thumb "> <a href="#tab9">
                                  <img src="/public/assets/images/shop/products-img3.jpg"
                                       alt="img"> </a> </li>
                              </ul>
                            </div>
                            <div class="popup-product-main-image-box">
                              <div id="tab7" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img1.jpg"
                                    alt="img"> </div>
                              </div>
                              <div id="tab8" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img2.jpg"
                                    alt="img"> </div>
                              </div>
                              <div id="tab9" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img3.jpg"
                                    alt="img"> </div>
                              </div> <button class="prev"> <i class="flaticon-back"></i>
                            </button> <button class="next"> <i class="flaticon-next"></i>
                            </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="popup-right-content">
                          <h3>Blacked Neckles Set</h3>
                          <div class="ratting"> <i class="flaticon-star"></i> <i
                              class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                              class="flaticon-star"></i> <i class="flaticon-star"></i>
                            <span>(100)</span> </div>
                          <p class="text"> Hydrating Plumping Intense Shine Lip Colour </p>
                          <div class="price">
                            <h2> $45 USD <del> $50 USD</del></h2>
                            <h6> In stuck</h6>
                          </div>
                          <div class="color-varient"> <a href="#0" class="color-name pink">
                            <span>Pink</span> </a> <a href="#0" class="color-name red">
                            <span>Red</span> </a> <a href="#0"
                                                     class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                           class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                              class="color-name black"> <span>Black</span> </a> </div>
                          <div class="add-product">
                            <h6>Qty:</h6>
                            <div class="button-group">
                              <div class="qtySelector text-center"> <span
                                  class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="btn--primary "> Добавить в корзину
                            </button>
                            </div>
                          </div>
                          <div class="payment-method"> <a href="#0"> <img
                              src="/public/assets/images/payment_method/method_1.png" alt=""> </a>
                            <a href="#0"> <img src="/public/assets/images/payment_method/method_2.png"
                                               alt=""> </a> <a href="#0"> <img
                                src="/public/assets/images/payment_method/method_3.png" alt=""> </a>
                            <a href="#0"> <img src="/public/assets/images/payment_method/method_4.png"
                                               alt=""> </a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="products-grid__content"> <a href="cart.html"
                                                        class="products-grid__cart-btn btn--primary"> <span class="one"> Добавить в корзину </span>
                  <span class="two"> <i class="flaticon-shopping-cart"> </i> </span> </a>
                  <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> </div>
                  <h5 class="product_name"><a href="shop-details-1.html">Diamond Bracelet </a></h5>
                  <div class="price d-flex align-content-center justify-content-center">
                    <p>$2909</p>
                  </div>
                </div>
              </div>
              <div class="products-grid-one">
                <div class="products-grid-one__product-image">
                  <div class="products-grid-one__badge-box"> <span
                      class="bg_black badge discount">-20%</span> </div> <a href="shop-details-1.html"
                                                                            class="d-block products-grid__image_holder"> <img
                    class="products-grid-one__mainimage products-grid-one__first-img"
                    src="/public/assets/images/shop/products-img3.jpg" alt="Alt"> <img
                    class="products-grid-one__hover-img" src="/public/assets/images/shop/products-img4.jpg"
                    alt="Alt"> </a>
                  <div class="products-grid__usefull-links">
                    <ul>
                      <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                    wishlist</span> </a> </li>
                      <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                        <span> compare</span> </a> </li>
                      <li><a href="#view-popup2" class="popup_link"> <i
                          class="flaticon-visibility"></i> <span> quick view</span> </a> </li>
                    </ul>
                  </div>
                </div>
                <div id="view-popup2" class="product-gird__quick-view-popup mfp-hide">
                  <div class="container">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-lg-6">
                        <div class="quick-view__left-content">
                          <div class="tabs">
                            <div class="popup-product-thumb-box">
                              <ul>
                                <li class="tab-nav popup-product-thumb "> <a href="#tab777">
                                  <img src="/public/assets/images/shop/products-img3.jpg"
                                       alt="img"> </a> </li>
                                <li class="tab-nav popup-product-thumb "> <a href="#tab888">
                                  <img src="/public/assets/images/shop/products-img4.jpg"
                                       alt="img"> </a> </li>
                                <li class="tab-nav popup-product-thumb "> <a href="#tab999">
                                  <img src="/public/assets/images/shop/products-img5.jpg"
                                       alt="img"> </a> </li>
                              </ul>
                            </div>
                            <div class="popup-product-main-image-box">
                              <div id="tab777" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img3.jpg"
                                    alt="img"> </div>
                              </div>
                              <div id="tab888" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img5.jpg"
                                    alt="img"> </div>
                              </div>
                              <div id="tab999" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img6.jpg"
                                    alt="img"> </div>
                              </div> <button class="prev"> <i class="flaticon-back"></i>
                            </button> <button class="next"> <i class="flaticon-next"></i>
                            </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="popup-right-content">
                          <h3>Girl Diamond Ring </h3>
                          <div class="ratting"> <i class="flaticon-star"></i> <i
                              class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                              class="flaticon-star"></i> <i class="flaticon-star"></i>
                            <span>(100)</span> </div>
                          <p class="text"> Hydrating Plumping Intense Shine Lip Colour </p>
                          <div class="price">
                            <h2> $45 USD <del> $50 USD</del></h2>
                            <h6> In stuck</h6>
                          </div>
                          <div class="color-varient"> <a href="#0" class="color-name pink">
                            <span>Pink</span> </a> <a href="#0" class="color-name red">
                            <span>Red</span> </a> <a href="#0"
                                                     class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                           class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                              class="color-name black"> <span>Black</span> </a> </div>
                          <div class="add-product">
                            <h6>Qty:</h6>
                            <div class="button-group">
                              <div class="qtySelector text-center"> <span
                                  class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="btn--primary "> Добавить в корзину
                            </button>
                            </div>
                          </div>
                          <div class="payment-method"> <a href="#0"> <img
                              src="/public/assets/images/payment_method/method_1.png" alt=""> </a>
                            <a href="#0"> <img src="/public/assets/images/payment_method/method_2.png"
                                               alt=""> </a> <a href="#0"> <img
                                src="/public/assets/images/payment_method/method_3.png" alt=""> </a>
                            <a href="#0"> <img src="/public/assets/images/payment_method/method_4.png"
                                               alt=""> </a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="products-grid__content"> <a href="cart.html"
                                                        class="products-grid__cart-btn btn--primary"> <span class="one"> Добавить в корзину </span>
                  <span class="two"> <i class="flaticon-shopping-cart"> </i> </span> </a>
                  <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> </div>
                  <h5 class="product_name"><a href="shop-details-1.html"> Girl Diamond Ring </a></h5>
                  <div class="price d-flex align-content-center justify-content-center">
                    <p>$250</p>
                  </div>
                </div>
                <div class="products-grid-one__thumb-box">
                  <p class="products-grid-one__product-varient"> <span class="color"> Yellow </span> <img
                      src="/public/assets/images/shop/products-img3.jpg" alt="Alt"> </p>
                  <p class="products-grid-one__product-varient"> <span class="color"> blue </span> <img
                      src="/public/assets/images/shop/products-img4.jpg" alt="Alt"> </p>
                  <p class="products-grid-one__product-varient"> <span class="color"> Black </span> <img
                      src="/public/assets/images/shop/products-img5.jpg" alt="Alt"> </p>
                </div>
              </div>
              <div class="products-grid-one">
                <div class="products-grid-one__product-image">
                  <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span>
                    <span class="bg_black badge discount">-30%</span> </div> <a
                    href="shop-details-1.html" class="d-block products-grid__image_holder"> <img
                    class="products-grid-one__mainimage products-grid-one__first-img"
                    src="/public/assets/images/shop/products-img4.jpg" alt="Alt"> <img
                    class="products-grid-one__hover-img" src="/public/assets/images/shop/products-img5.jpg"
                    alt="Alt"> </a>
                  <div class="products-grid__usefull-links">
                    <ul>
                      <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                    wishlist</span> </a> </li>
                      <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                        <span> compare</span> </a> </li>
                      <li><a href="#view-popup3" class="popup_link"> <i
                          class="flaticon-visibility"></i> <span> quick view</span> </a></li>
                    </ul>
                  </div>
                </div>
                <div id="view-popup3" class="product-gird__quick-view-popup mfp-hide">
                  <div class="container">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-lg-6">
                        <div class="quick-view__left-content">
                          <div class="tabs">
                            <div class="popup-product-thumb-box">
                              <ul>
                                <li class="tab-nav popup-product-thumb"> <a href="#tab7777">
                                  <img src="/public/assets/images/shop/products-img4.jpg"
                                       alt="img"> </a> </li>
                                <li class="tab-nav popup-product-thumb "> <a
                                    href="#tab8888"> <img
                                    src="/public/assets/images/shop/products-img5.jpg"
                                    alt="img"> </a> </li>
                                <li class="tab-nav popup-product-thumb "> <a
                                    href="#tab9999"> <img
                                    src="/public/assets/images/shop/products-img6.jpg"
                                    alt="img"> </a> </li>
                              </ul>
                            </div>
                            <div class="popup-product-main-image-box">
                              <div id="tab7777" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img4.jpg"
                                    alt="img"> </div>
                              </div>
                              <div id="tab8888" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img5.jpg"
                                    alt="img"> </div>
                              </div>
                              <div id="tab9999" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img6.jpg"
                                    alt="img"> </div>
                              </div> <button class="prev"> <i class="flaticon-back"></i>
                            </button> <button class="next"> <i class="flaticon-next"></i>
                            </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="popup-right-content">
                          <h3>Women Earring Erl</h3>
                          <div class="ratting"> <i class="flaticon-star"></i> <i
                              class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                              class="flaticon-star"></i> <i class="flaticon-star"></i>
                            <span>(100)</span> </div>
                          <p class="text"> Hydrating Plumping Intense Shine Lip Colour </p>
                          <div class="price">
                            <h2> $45 USD <del> $50 USD</del></h2>
                            <h6> In stuck</h6>
                          </div>
                          <div class="color-varient"> <a href="#0" class="color-name pink">
                            <span>Pink</span> </a> <a href="#0" class="color-name red">
                            <span>Red</span> </a> <a href="#0"
                                                     class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                           class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                              class="color-name black"> <span>Black</span> </a> </div>
                          <div class="add-product">
                            <h6>Qty:</h6>
                            <div class="button-group">
                              <div class="qtySelector text-center"> <span
                                  class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="btn--primary "> Добавить в корзину
                            </button>
                            </div>
                          </div>
                          <div class="payment-method"> <a href="#0"> <img
                              src="/public/assets/images/payment_method/method_1.png" alt=""> </a>
                            <a href="#0"> <img src="/public/assets/images/payment_method/method_2.png"
                                               alt=""> </a> <a href="#0"> <img
                                src="/public/assets/images/payment_method/method_3.png" alt=""> </a>
                            <a href="#0"> <img src="/public/assets/images/payment_method/method_4.png"
                                               alt=""> </a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="products-grid__content"> <a href="cart.html"
                                                        class="products-grid__cart-btn btn--primary"> <span class="one"> Добавить в корзину </span>
                  <span class="two"> <i class="flaticon-shopping-cart"> </i> </span> </a>
                  <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> </div>
                  <h5 class="product_name"><a href="shop-details-1.html"> Women Earring Erl </a></h5>
                  <div class="price d-flex align-content-center justify-content-center"> <span
                      class="pe-1"><del> $200.00</del></span>
                    <p>$160</p>
                  </div>
                </div>
                <div class="products-grid-one__thumb-box">
                  <p class="products-grid-one__product-varient"> <span class="color"> Yellow </span> <img
                      src="/public/assets/images/shop/products-img4.jpg" alt="Alt"> </p>
                  <p class="products-grid-one__product-varient"> <span class="color"> blue </span> <img
                      src="/public/assets/images/shop/products-img5.jpg" alt="Alt"> </p>
                </div>
              </div>
              <div class="products-grid-one">
                <div class="products-grid-one__product-image">
                  <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span>
                  </div> <a href="shop-details-1.html" class="d-block products-grid__image_holder"> <img
                    class="products-grid-one__hover-img now-main"
                    src="/public/assets/images/shop/products-img6.jpg" alt="Alt"> </a>
                  <div class="products-grid__usefull-links">
                    <ul>
                      <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                    wishlist</span> </a> </li>
                      <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                        <span> compare</span> </a> </li>
                      <li><a href="#view-popup4" class="popup_link"> <i
                          class="flaticon-visibility"></i> <span> quick view</span> </a> </li>
                    </ul>
                  </div>
                </div>
                <div id="view-popup4" class="product-gird__quick-view-popup mfp-hide">
                  <div class="container">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-lg-6">
                        <div class="quick-view__left-content">
                          <div class="tabs">
                            <div class="popup-product-thumb-box">
                              <ul>
                                <li class="tab-nav popup-product-thumb"> <a
                                    href="#tab77777"> <img
                                    src="/public/assets/images/shop/products-img5.jpg"
                                    alt="img"> </a> </li>
                                <li class="tab-nav popup-product-thumb "> <a
                                    href="#tab88888"> <img
                                    src="/public/assets/images/shop/products-img6.jpg"
                                    alt="img"> </a> </li>
                                <li class="tab-nav popup-product-thumb "> <a
                                    href="#tab99999"> <img
                                    src="/public/assets/images/shop/products-img7.jpg"
                                    alt="img"> </a> </li>
                              </ul>
                            </div>
                            <div class="popup-product-main-image-box">
                              <div id="tab77777" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img5.jpg"
                                    alt="img"> </div>
                              </div>
                              <div id="tab88888" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img6.jpg"
                                    alt="img"> </div>
                              </div>
                              <div id="tab99999" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img7.jpg"
                                    alt="img"> </div>
                              </div> <button class="prev"> <i class="flaticon-back"></i>
                            </button> <button class="next"> <i class="flaticon-next"></i>
                            </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="popup-right-content">
                          <h3>Wedding Ring Men</h3>
                          <div class="ratting"> <i class="flaticon-star"></i> <i
                              class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                              class="flaticon-star"></i> <i class="flaticon-star"></i>
                            <span>(100)</span> </div>
                          <p class="text"> Hydrating Plumping Intense Shine Lip Colour </p>
                          <div class="price">
                            <h2> $35 USD <del> $50 USD</del></h2>
                            <h6> In stuck</h6>
                          </div>
                          <div class="color-varient"> <a href="#0" class="color-name pink">
                            <span>Pink</span> </a> <a href="#0" class="color-name red">
                            <span>Red</span> </a> <a href="#0"
                                                     class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                           class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                              class="color-name black"> <span>Black</span> </a> </div>
                          <div class="add-product">
                            <h6>Qty:</h6>
                            <div class="button-group">
                              <div class="qtySelector text-center"> <span
                                  class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="btn--primary "> Добавить в корзину
                            </button>
                            </div>
                          </div>
                          <div class="payment-method"> <a href="#0"> <img
                              src="/public/assets/images/payment_method/method_1.png" alt=""> </a>
                            <a href="#0"> <img src="/public/assets/images/payment_method/method_2.png"
                                               alt=""> </a> <a href="#0"> <img
                                src="/public/assets/images/payment_method/method_3.png" alt=""> </a>
                            <a href="#0"> <img src="/public/assets/images/payment_method/method_4.png"
                                               alt=""> </a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="products-grid__content"> <a href="cart.html"
                                                        class="products-grid__cart-btn btn--primary"> <span class="one"> Добавить в корзину </span>
                  <span class="two"> <i class="flaticon-shopping-cart"> </i> </span> </a>
                  <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> </div>
                  <h5 class="product_name"><a href="shop-details-1.html"> Wedding Ring Men </a></h5>
                  <div class="price d-flex align-content-center justify-content-center">
                    <p>$200</p>
                  </div>
                </div>
                <div class="products-grid-one__thumb-box">
                  <p class="products-grid-one__product-varient"> <span class="color"> blue </span> <img
                      src="/public/assets/images/shop/products-img6.jpg" alt="Alt"> </p>
                  <p class="products-grid-one__product-varient"> <span class="color"> Yellow </span> <img
                      src="/public/assets/images/shop/products-img5.jpg" alt="Alt"> </p>
                </div>
              </div>
              <div class="products-grid-one">
                <div class="products-grid-one__product-image">
                  <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span>
                  </div> <a href="shop-details-1.html" class="d-block products-grid__image_holder"> <img
                    class="products-grid-one__mainimage products-grid-one__first-img"
                    src="/public/assets/images/shop/products-img6.jpg" alt="Alt"> <img
                    class="products-grid-one__hover-img" src="/public/assets/images/shop/products-img2.jpg"
                    alt="Alt"> </a>
                  <div class="products-grid__usefull-links">
                    <ul>
                      <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                    wishlist</span> </a> </li>
                      <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                        <span> compare</span> </a> </li>
                      <li><a href="#view-popup5" class="popup_link"> <i
                          class="flaticon-visibility"></i> <span> quick view</span></a> </li>
                    </ul>
                  </div>
                </div>
                <div id="view-popup5" class="product-gird__quick-view-popup mfp-hide">
                  <div class="container">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-lg-6">
                        <div class="quick-view__left-content">
                          <div class="tabs">
                            <div class="popup-product-thumb-box">
                              <ul>
                                <li class="tab-nav popup-product-thumb"> <a href="#stab1">
                                  <img src="/public/assets/images/shop/products-img1.jpg"
                                       alt="img"> </a> </li>
                                <li class="tab-nav popup-product-thumb "> <a href="#stab2">
                                  <img src="/public/assets/images/shop/products-img2.jpg"
                                       alt="img"> </a> </li>
                                <li class="tab-nav popup-product-thumb "> <a href="#stab3">
                                  <img src="/public/assets/images/shop/products-img3.jpg"
                                       alt="img"> </a> </li>
                              </ul>
                            </div>
                            <div class="popup-product-main-image-box">
                              <div id="stab1" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img1.jpg"
                                    alt="img"> </div>
                              </div>
                              <div id="stab2" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img2.jpg"
                                    alt="img"> </div>
                              </div>
                              <div id="stab3" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img3.jpg"
                                    alt="img"> </div>
                              </div> <button class="prev"> <i class="flaticon-back"></i>
                            </button> <button class="next"> <i class="flaticon-next"></i>
                            </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="popup-right-content">
                          <h3>Titan Locket Women</h3>
                          <div class="ratting"> <i class="flaticon-star"></i> <i
                              class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                              class="flaticon-star"></i> <i class="flaticon-star"></i>
                            <span>(100)</span> </div>
                          <p class="text"> Hydrating Plumping Intense Shine Lip Colour </p>
                          <div class="price">
                            <h2> $55 USD <del> $50 USD</del></h2>
                            <h6> In stuck</h6>
                          </div>
                          <div class="color-varient"> <a href="#0" class="color-name pink">
                            <span>Pink</span> </a> <a href="#0" class="color-name red">
                            <span>Red</span> </a> <a href="#0"
                                                     class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                           class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                              class="color-name black"> <span>Black</span> </a> </div>
                          <div class="add-product">
                            <h6>Qty:</h6>
                            <div class="button-group">
                              <div class="qtySelector text-center"> <span
                                  class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="btn--primary "> Добавить в корзину
                            </button>
                            </div>
                          </div>
                          <div class="payment-method"> <a href="#0"> <img
                              src="/public/assets/images/payment_method/method_1.png" alt=""> </a>
                            <a href="#0"> <img src="/public/assets/images/payment_method/method_2.png"
                                               alt=""> </a> <a href="#0"> <img
                                src="/public/assets/images/payment_method/method_3.png" alt=""> </a>
                            <a href="#0"> <img src="/public/assets/images/payment_method/method_4.png"
                                               alt=""> </a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="products-grid__content"> <a href="cart.html"
                                                        class="products-grid__cart-btn btn--primary"> <span class="one"> Добавить в корзину </span>
                  <span class="two"> <i class="flaticon-shopping-cart"> </i> </span> </a>
                  <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> </div>
                  <h5 class="product_name"><a href="shop-details-1.html"> Titan Locket Women </a></h5>
                  <div class="price d-flex align-content-center justify-content-center">
                    <p>$250</p>
                  </div>
                </div>
                <div class="products-grid-one__thumb-box">
                  <p class="products-grid-one__product-varient"> <span class="color"> Blue </span> <img
                      src="/public/assets/images/shop/products-img6.jpg" alt="Alt"> </p>
                  <p class="products-grid-one__product-varient"> <span class="color"> Yellow </span> <img
                      src="/public/assets/images/shop/products-img7.jpg" alt="Alt"> </p>
                  <p class="products-grid-one__product-varient"> <span class="color"> green </span> <img
                      src="/public/assets/images/shop/products-img8.jpg" alt="Alt"> </p>
                </div>
              </div>
              <div class="products-grid-one">
                <div class="products-grid-one__product-image"> <a href="shop-details-1.html"
                                                                  class="d-block products-grid__image_holder"> <img
                    class="products-grid-one__mainimage products-grid-one__first-img"
                    src="/public/assets/images/shop/products-img12.jpg" alt="Alt"> <img
                    class="products-grid-one__hover-img" src="/public/assets/images/shop/products-img11.jpg"
                    alt="Alt"> </a>
                  <div class="products-grid__usefull-links">
                    <ul>
                      <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                    wishlist</span> </a> </li>
                      <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                        <span> compare</span> </a> </li>
                      <li><a href="#view-popup6" class="popup_link"> <i
                          class="flaticon-visibility"></i><span> quick view</span> </a> </li>
                    </ul>
                  </div>
                </div>
                <div id="view-popup6" class="product-gird__quick-view-popup mfp-hide">
                  <div class="container">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-lg-6">
                        <div class="quick-view__left-content">
                          <div class="tabs">
                            <div class="popup-product-thumb-box">
                              <ul>
                                <li class="tab-nav popup-product-thumb"> <a href="#ttab111">
                                  <img src="/public/assets/images/shop/products-img9.jpg"
                                       alt="img"> </a> </li>
                                <li class="tab-nav popup-product-thumb "> <a
                                    href="#ttab222"> <img
                                    src="/public/assets/images/shop/products-img10.jpg"
                                    alt="img"> </a> </li>
                                <li class="tab-nav popup-product-thumb "> <a
                                    href="#ttab333"> <img
                                    src="/public/assets/images/shop/products-img11.jpg"
                                    alt="img"> </a> </li>
                              </ul>
                            </div>
                            <div class="popup-product-main-image-box">
                              <div id="ttab111" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img9.jpg"
                                    alt="img"> </div>
                              </div>
                              <div id="ttab222" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img10.jpg"
                                    alt="img"> </div>
                              </div>
                              <div id="ttab333" class="tab-item popup-product-image">
                                <div class="popup-product-single-image"> <img
                                    src="/public/assets/images/shop/products-img11.jpg"
                                    alt="img"> </div>
                              </div> <button class="prev"> <i class="flaticon-back"></i>
                            </button> <button class="next"> <i class="flaticon-next"></i>
                            </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="popup-right-content">
                          <h3>Gold Bracelet Girl </h3>
                          <div class="ratting"> <i class="flaticon-star"></i> <i
                              class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                              class="flaticon-star"></i> <i class="flaticon-star"></i>
                            <span>(100)</span> </div>
                          <p class="text"> Hydrating Plumping Intense Shine Lip Colour </p>
                          <div class="price">
                            <h2> $65 USD <del> $50 USD</del></h2>
                            <h6> In stuck</h6>
                          </div>
                          <div class="color-varient"> <a href="#0" class="color-name pink">
                            <span>Pink</span> </a> <a href="#0" class="color-name red">
                            <span>Red</span> </a> <a href="#0"
                                                     class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                           class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                              class="color-name black"> <span>Black</span> </a> </div>
                          <div class="add-product">
                            <h6>Qty:</h6>
                            <div class="button-group">
                              <div class="qtySelector text-center"> <span
                                  class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="btn--primary "> Добавить в корзину
                            </button>
                            </div>
                          </div>
                          <div class="payment-method"> <a href="#0"> <img
                              src="/public/assets/images/payment_method/method_1.png" alt=""> </a>
                            <a href="#0"> <img src="/public/assets/images/payment_method/method_2.png"
                                               alt=""> </a> <a href="#0"> <img
                                src="/public/assets/images/payment_method/method_3.png" alt=""> </a>
                            <a href="#0"> <img src="/public/assets/images/payment_method/method_4.png"
                                               alt=""> </a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="products-grid__content"> <a href="cart.html"
                                                        class="products-grid__cart-btn btn--primary"> <span class="one"> Добавить в корзину </span>
                  <span class="two"> <i class="flaticon-shopping-cart"> </i> </span> </a>
                  <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> </div>
                  <h5 class="product_name"><a href="shop-details-1.html">Gold Bracelet Girl </a></h5>
                  <div class="price d-flex align-content-center justify-content-center">
                    <p>$150</p>
                  </div>
                </div>
                <div class="products-grid-one__thumb-box">
                  <p class="products-grid-one__product-varient"> <span class="color"> Blue </span> <img
                      src="/public/assets/images/shop/products-img12.jpg" alt="Alt"> </p>
                  <p class="products-grid-one__product-varient"> <span class="color"> Green </span> <img
                      src="/public/assets/images/shop/products-img11.jpg" alt="Alt"> </p>
                  <p class="products-grid-one__product-varient"> <span class="color"> Black </span> <img
                      src="/public/assets/images/shop/products-img10.jpg" alt="Alt"> </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> <!-- recent-products End -->
    </main>
  </div>
</template>

<script>
export default {
    name: 'Show',
    mounted() {
        $(document).trigger('changed')
        this.getProduct();

        const today = new Date();
        const startDate = new Date();
        const endDate = new Date();

        startDate.setDate(today.getDate() + 10);
        endDate.setDate(today.getDate() + 30);

        this.deliveryStart = this.formatDate(startDate);
        this.deliveryEnd = this.formatDate(endDate);
    },
    created() {
        this.randomCount = this.getRandomInt(10, 30);
    },

    data() {
        return {
            product: null,
            activeImage: '',
            deliveryStart: '',
            deliveryEnd: '',
            randomCount: 0
        }
    },

    methods: {
        getProduct(id) {
            this.axios.get(`/api/products/${this.$route.params.id}`).then(res => {
                this.product = res.data.data;
                if (this.product.product_images.length > 0) {
                    this.activeImage = this.product.product_images[0].url;
                }
                console.log(res);
            })
                .finally(v => {
                    $(document).trigger('changed')
                })
        },
        setActiveImage(url) {
            this.activeImage = url;
        },
        formatDate(date) {
            const options = { weekday: 'long', day: '2-digit', month: 'long' };
            return date.toLocaleDateString('ru-RU', options);
        },
        getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    }
}
</script>

<style scoped>

</style>
