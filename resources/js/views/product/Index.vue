<template>
    <div>
        <main class="overflow-hidden ">
            <!--Start Breadcrumb Style2-->
            <div class="breadcrumb-area" style="background-image: url(/assets/images/inner-pages/breadcum-bg-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content pb-60 text-center wow fadeInUp animated">
                                <h2>Каталог товаров</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="index.html"><i class="flaticon-home pe-2"></i>Главная</a></li>
                                        <li><i class="flaticon-next"></i></li>
                                        <li class="active">Каталог товаров</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Breadcrumb Style2-->
            <!--Start Product Categories One-->
            <section class="product-categories-one pb-60">
                <div class="container">
                    <div class="row wow fadeInUp animated">
                        <div class="col-xl-12">
                            <div class="product-categories-one__inner">
                                <ul>
                                    <li><a href="#0" class="img-box">
                                        <div class="inner"><img src="/public/assets/images/shop/aks.jpg"
                                                                alt=""/></div>
                                    </a>
                                        <div class="title"><a href="#0">
                                            <h6>Аксессуары</h6>
                                        </a></div>
                                    </li>
                                    <li><a href="#0" class="img-box">
                                        <div class="inner"><img src="/public/assets/images/shop/obuvi.jpg"
                                                                alt=""/></div>
                                    </a>
                                        <div class="title"><a href="#0">
                                            <h6>Обувь</h6>
                                        </a></div>
                                    </li>
                                    <li><a href="#0" class="img-box">
                                        <div class="inner"><img src="/public/assets/images/shop/ucrasenia.jpg"
                                                                alt=""/></div>
                                    </a>
                                        <div class="title"><a href="#0">
                                            <h6>Украшения</h6>
                                        </a></div>
                                    </li>
                                    <li><a href="#0" class="img-box">
                                        <div class="inner"><img src="/public/assets/images/shop/odejda.jpg"
                                                                alt=""/></div>
                                    </a>
                                        <div class="title"><a href="#0">
                                            <h6>Одежда</h6>
                                        </a></div>
                                    </li>
                                    <li><a href="#0" class="img-box">
                                        <div class="inner"><img src="/public/assets/images/shop/sliapi.jpg"
                                                                alt=""/></div>
                                    </a>
                                        <div class="title"><a href="#0">
                                            <h6>Головные уборы</h6>
                                        </a></div>
                                    </li>
                                    <li><a href="#0" class="img-box">
                                        <div class="inner"><img src="/public/assets/images/shop/sport.jpg"
                                                                alt=""/></div>
                                    </a>
                                        <div class="title"><a href="#0">
                                            <h6>Спорт</h6>
                                        </a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Product Categories One-->
            <!--Start product-grid-->
            <div class="product-grid pt-60 pb-120">
                <div class="container">
                    <div class="row gx-4">
                        <div class="col-xl-3 col-lg-4">
                            <div class="shop-grid-sidebar">
                                <button class="remove-sidebar d-lg-none d-block"><i
                                    class="flaticon-cross"> </i></button>
                                <div class="sidebar-holder">
                                    <form action="#0"
                                          class="footer-default__subscrib-form m-0 p-0 wow fadeInUp animated">
                                        <div class="footer-input-box p-0 "><input type="email" placeholder="Поиск"
                                                                                  name="email">
                                            <button type="submit" class="subscribe_btn"><i
                                                class="flaticon-magnifying-glass"></i></button>
                                        </div>
                                    </form>
                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated ">
                                        <h4>Выберите категории</h4>
                                        <div class="checkbox-item">
                                            <form>
                                                <div v-for="category in filterList.categories" class="form-group"><input
                                                    :value="category.id" v-model="categories" type="checkbox"
                                                    :id="category.id"> <label
                                                    :for="category.id">{{ category.title }}</label></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                                        <h4>Выбор цветов </h4>
                                        <ul class="color-option">
                                            <li v-for="color in filterList.colors">
                                                <a @click.prevent="addOrRemoveColor(color.id)" href="#0"
                                                   class="color-option-single" :style="`background: ${color.title}`">
                                                    <span> {{ color.title }} </span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                                        <h4>Фильтровать по цене</h4>
                                        <div class="slider-box">
                                            <div id="price-range" class="slider"></div>
                                            <div class="output-price"><label for="priceRange">Цена:</label> <input
                                                type="text" id="priceRange" readonly></div>
                                            <button @click.prevent="filterProducts" class="filterbtn"
                                                    type="submit"> Фильтр
                                            </button>
                                        </div>
                                    </div>
                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated pb-0 border-bottom-0 ">
                                        <h4>Теги </h4>
                                        <ul class="popular-tag">
                                            <li v-for="tag in filterList.tags">
                                                <a @click.prevent="addOrRemoveTag(tag.id)" href="#0">{{ tag.title }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div
                                        class="shop-grid-page-top-info p-0 justify-content-md-between justify-content-center">
                                        <div class="left-box wow fadeInUp animated">
                                            <p>Показано с 1 по 12 из 50 результатов</p>
                                        </div>
                                        <div
                                            class="right-box justify-content-md-between justify-content-center wow fadeInUp animated">
                                            <div class="short-by">
                                                <div class="select-box">
                                                    <select class="wide">
                                                        <option data-display="Сорт. по последним">Рекомендуемые</option>
                                                        <option value="1">Самые продаваемые</option>
                                                        <option value="2">По алфавиту, A–Я</option>
                                                        <option value="3">По алфавиту, Я–A</option>
                                                        <option value="4">Цена: по возрастанию</option>
                                                        <option value="5">Цена: по убыванию</option>
                                                        <option value="6">Дата: от старых к новым</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="product-view-style d-flex justify-content-md-between justify-content-center">
                                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="pills-grid-tab"
                                                                data-bs-toggle="pill" data-bs-target="#pills-grid"
                                                                type="button"
                                                                role="tab" aria-selected="true">
                                                            <i class="flaticon-grid"></i>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-list-tab"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#pills-list" type="button" role="tab"
                                                                aria-selected="false">
                                                            <i class="flaticon-list"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <button class="slidebarfilter d-lg-none d-flex"><i
                                                    class="flaticon-edit"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                                             aria-labelledby="pills-grid-tab">
                                            <div class="row">
                                                <div v-for="product in products" class="col-xl-4 col-lg-6 col-6 ">
                                                    <div class="products-three-single w-100  mt-30">
                                                        <div class="products-three-single-img"><a
                                                            href="shop-details-3.html" class="d-block"> <img
                                                            :src="product.image_url"
                                                            class="first-img" alt=""/> <img
                                                            src="/public/assets/images/home-three/cartify.png"
                                                            alt="" class="hover-img"/>
                                                        </a>
                                                            <div class="products-grid-one__badge-box"> <span
                                                                class="bg_base badge new ">New</span>
                                                            </div>
                                                            <a @click.prevent="addToCart(product, true)"
                                                               href="cart.html" class="addcart btn--primary style2">
                                                                Добавить в корзину </a>
                                                            <div class="products-grid__usefull-links">
                                                                <ul>
                                                                    <li><a href="wishlist.html"> <i
                                                                        class="flaticon-heart">
                                                                    </i> <span>
                                                                            Избранное</span> </a></li>
                                                                    <li><a href="compare.html"> <i
                                                                        class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            Сравнить</span> </a></li>
                                                                    <li><a @click="getProduct(product.id)"
                                                                           :href="`#popup${product.id}`"
                                                                           class="popup_link"> <i
                                                                        class="flaticon-visibility"></i>
                                                                        <span> Быстрый просмотр</span>
                                                                    </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div :id="`popup${product.id}`"
                                                             class="product-gird__quick-view-popup mfp-hide">
                                                            <div v-if="popupProduct" class="container">
                                                                <div
                                                                    class="row justify-content-between align-items-center">
                                                                    <div class="col-lg-6">
                                                                        <div class="quick-view__left-content"
                                                                             v-if="popupProduct.product_images.length > 2">
                                                                            <div class="tabs">
                                                                                <div class="popup-product-thumb-box">
                                                                                    <ul>
                                                                                        <li v-for="productImage in popupProduct.product_images"
                                                                                            class="tab-nav popup-product-thumb">
                                                                                            <a :href="`#tabb1${productImage.id}`">
                                                                                                <img
                                                                                                    :src="productImage.url"
                                                                                                    alt=""/> </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div
                                                                                    class="popup-product-main-image-box">
                                                                                    <div
                                                                                        v-for="productImage in popupProduct.product_images"
                                                                                        :id="`tabb1${productImage.id}`"
                                                                                        class="tab-item popup-product-image">
                                                                                        <div
                                                                                            class="popup-product-single-image">
                                                                                            <img :src="productImage.url"
                                                                                                 alt=""/></div>
                                                                                    </div>
                                                                                    <button class="prev"><i
                                                                                        class="flaticon-back"></i>
                                                                                    </button>
                                                                                    <button class="next"><i
                                                                                        class="flaticon-next"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="popup-right-content">
                                                                            <h3> {{ popupProduct.title }}</h3>
                                                                            <div class="ratting"><i
                                                                                class="flaticon-star"></i> <i
                                                                                class="flaticon-star"></i> <i
                                                                                class="flaticon-star"></i>
                                                                                <i class="flaticon-star"></i> <i
                                                                                    class="flaticon-star"></i>
                                                                                <span>(112)</span></div>
                                                                            <p class="text">
                                                                                {{ popupProduct.description }} </p>
                                                                            <div class="price">
                                                                                <h2> ${{ popupProduct.price }} lei
                                                                                    <del v-if="popupProduct.old_price">
                                                                                        ${{ popupProduct.old_price }}
                                                                                        lei
                                                                                    </del>
                                                                                </h2>
                                                                                <h6> В наличие</h6>
                                                                            </div>
                                                                            <div class="color-varient">
                                                                                <template
                                                                                    v-for="groupProduct in popupProduct.group_products">
                                                                                    <template
                                                                                        v-if="groupProduct.id === product.id && groupProduct.colors.length">
                                                                                        <a
                                                                                            @click.prevent="getProduct(groupProduct.id)"
                                                                                            v-for="color in groupProduct.colors"
                                                                                            href="#0"
                                                                                            :style="`background: ${color.title}; border: 1px solid #333; border-radius: 50%; width: 30px; height: 30px; display: inline-block; margin-right: 5px;`"
                                                                                            class="color-name">
                                                                                            <span style="display: none">{{ color.title }}</span>
                                                                                        </a>

                                                                                    </template>
                                                                                </template>
                                                                            </div>

                                                                            <div class="add-product">
                                                                                <h6>Qty:</h6>
                                                                                <div class="button-group">
                                                                                    <div
                                                                                        class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                        class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                                        <span class="increaseQty"> <i
                                                                                            class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                                    <button
                                                                                        @click.prevent="addToCart(product)"
                                                                                        class="btn--primary "> Add to
                                                                                        Cart
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="payment-method"><a href="#0">
                                                                                <img
                                                                                    src="/public/assets/images/payment_method/method_1.png"
                                                                                    alt=""> </a>
                                                                                <a href="#0"> <img
                                                                                    src="/public/assets/images/payment_method/method_2.png"
                                                                                    alt=""> </a> <a href="#0"> <img
                                                                                    src="/public/assets/images/payment_method/method_3.png"
                                                                                    alt=""> </a>
                                                                                <a href="#0"> <img
                                                                                    src="/public/assets/images/payment_method/method_4.png"
                                                                                    alt=""> </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="products-three-single-content text-center">
                                                            <span> {{ product.category.title }} </span>
                                                            <h5>
                                                                <router-link :to="{name: 'products.show', params: {id: product.id }}">
                                                                    {{ product.title }}
                                                                </router-link>
                                                            </h5>
                                                            <p>
                                                                <del v-if="product.old_price">{{ product.old_price }}
                                                                    lei
                                                                </del>
                                                                {{ product.price }} lei
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" v-if="pagination.last_page > 1">
                                <div class="col-12 d-flex justify-content-center wow fadeInUp animated">
                                    <ul class="pagination text-center">
                                        <li v-if="pagination.current_page !== 1" class="next">
                                            <a @click.prevent="getProducts(pagination.current_page - 1)" href="#0"><i
                                                class="flaticon-left-arrow-1" aria-hidden="true"></i> </a>
                                        </li>

                                        <li v-for="link in pagination.links">
                                            <template v-if="Number(link.label) &&
                          (pagination.current_page - link.label < 2 &&
                          pagination.current_page - link.label > -2) ||
                          Number(link.label) === 1 || Number(link.label) === pagination.last_page">
                                                <a @click.prevent="getProducts(link.label)"
                                                   :class="link.active ? 'active' : ''" href="#0">{{ link.label }}</a>
                                            </template>
                                            <template v-if="Number(link.label) &&
                        pagination.current_page !== 3 &&
                        (pagination.current_page - link.label === 2) ||
                        Number(link.label) &&
                        pagination.current_page !== pagination.last_page - 2 &&
                        (pagination.current_page - link.label === -2)">
                                                <a>...</a>
                                            </template>
                                        </li>

                                        <li v-if="pagination.current_page !== pagination.last_page" class="next">
                                            <a @click.prevent="getProducts(pagination.current_page + 1)" href="#0"><i
                                                class="flaticon-next-1" aria-hidden="true"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End product-grid-->
        </main>
    </div>
</template>

<script>
export default {
    name: 'Index',
    mounted() {
        this.setupAxiosCsrf();
        $(document).trigger('changed')
        this.getProducts();
        this.getFilterList();
    },

    data() {
        return {
            products: [],
            popupProduct: null,
            filterList: [],
            categories: [],
            colors: [],
            tags: [],
            prices: [],
            pagination: []
        }
    },

    methods: {
        setupAxiosCsrf() {
            // Функция для получения cookie по имени
            function getCookie(name) {
                const value = `; ${document.cookie}`;
                const parts = value.split(`; ${name}=`);
                if (parts.length === 2) return parts.pop().split(';').shift();
            }

            // Включаем отправку cookie с запросами
            axios.defaults.withCredentials = true;

            // Добавляем interceptor, чтобы подставлять X-XSRF-TOKEN из cookie в заголовок
            axios.interceptors.request.use(config => {
                const token = getCookie('XSRF-TOKEN');
                if (token) {
                    config.headers['X-XSRF-TOKEN'] = decodeURIComponent(token);
                }
                return config;
            });
        },
        addToCart(product, isSingle) {

            let qty = isSingle ? 1 : $('.qtyValue').val();
            let cart = localStorage.getItem('cart');
            $('.qtyValue').val(1);
            let newProduct = [
                {
                    'id': product.id,
                    'image_url': product.image_url,
                    'title': product.title,
                    'price': product.price,
                    'qty': qty
                }
            ]

            if (!cart) {
                localStorage.setItem('cart', JSON.stringify(newProduct));
            } else {
                cart = JSON.parse(cart);
                cart.forEach((productInCart) => {
                    if (productInCart.id === product.id) {
                        productInCart.qty = Number(productInCart.qty) + Number(qty);
                        newProduct = null;
                    }
                })
                Array.prototype.push.apply(cart, newProduct);
                localStorage.setItem('cart', JSON.stringify(cart));
            }
        },
        filterProducts() {
            axios.get('/sanctum/csrf-cookie', {withCredentials: true})
                .then(() => {
                    this.getProducts();
                })
                .catch(() => {
                    this.getProducts();
                });
        },
        addOrRemoveTag(id) {
            if (!this.tags.includes(id)) {
                this.tags.push(id);
            } else {
                this.tags = this.tags.filter(elem => {
                    return elem !== id;
                });
            }
        },
        addOrRemoveColor(id) {
            if (!this.colors.includes(id)) {
                this.colors.push(id);
            } else {
                this.colors = this.colors.filter(elem => {
                    return elem !== id;
                });
            }
        },

        getProducts(page = 1) {
            // Здесь НЕ нужно повторно вызывать /sanctum/csrf-cookie, т.к. он уже получен в mounted()
            axios.post('/api/products', {
                categories: this.categories,
                colors: this.colors,
                tags: this.tags,
                prices: this.prices,
                page: page
            }, {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                }
                // withCredentials уже включен глобально
            })
                .then(res => {
                    this.products = res.data.data.filter(product => product.is_published === 1);
                    this.pagination = res.data.meta;
                })
                .catch(error => {
                    console.error('Ошибка загрузки продуктов:', error);
                })
                .finally(() => {
                    $(document).trigger('changed');
                });
        },
        getProduct(id) {
            this.axios.get(`/api/products/${id}`).then(res => {
                this.popupProduct = res.data.data;
            })
                .finally(v => {
                    $(document).trigger('changed')
                })
        },
        getFilterList() {
            this.axios.get(`/api/products/filters`).then(res => {
                this.filterList = res.data;
                console.log(res.data);

                const min = parseFloat(this.filterList.price.min);
                const max = parseFloat(this.filterList.price.max);

                //  Price Filter
                if ($("#price-range").length) {
                    let thisVue = this;
                    $("#price-range").slider({
                        range: true,
                        min: min,
                        max: max,
                        values: [min, max],
                        slide: function (event, ui) {
                            $("#priceRange").val(ui.values[0] + " lei" + " - " + ui.values[1] + " lei");
                            thisVue.prices = [ui.values[0], ui.values[1]]
                        }
                    });
                    $("#priceRange").val($("#price-range").slider("values", 0) + " lei" + " - " + $("#price-range").slider("values", 1) + " lei");
                }

            })
                .finally(v => {
                    $(document).trigger('changed')
                })
        }
    }
}
</script>

<style scoped>

</style>
