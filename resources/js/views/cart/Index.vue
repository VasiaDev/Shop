<template>
    <div>
        <main class="overflow-hidden ">
            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area"
                     style="background-image: url(/assets/images/inner-pages/breadcum-bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content text-center wow fadeInUp animated">
                                <h2>Корзина</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="index.html"><i class="flaticon-home pe-2"></i>Главная</a></li>
                                        <li><i class="flaticon-next"></i></li>
                                        <li class="active">Корзина</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Breadcrumb Style2-->
            <!--Start cart area-->
            <section class="cart-area pt-120 pb-120">
                <div class="container">
                    <div class="row wow fadeInUp animated">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="cart-table-box">
                                <div class="table-outer">
                                    <table class="cart-table">
                                        <thead class="cart-header">
                                        <tr>
                                            <th class="">Наименование</th>
                                            <th class="price">Цена</th>
                                            <th>Количество</th>
                                            <th>Всего</th>
                                            <th class="hide-me"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="product in products">
                                            <td>
                                                <div class="thumb-box">
                                                    <router-link
                                                        :to="{name: 'products.show', params: { id: product.id }}"
                                                        class="thumb">
                                                        <img :src="product.image_url" :alt="product.title">
                                                    </router-link>
                                                    <router-link
                                                        :to="{name: 'products.show', params: { id: product.id }}"
                                                        class="title">
                                                        <h5> {{ product.title }} </h5>
                                                    </router-link>
                                                </div>
                                            </td>
                                            <td>{{ product.price }} lei</td>
                                            <td class="qty">
                                                <div class="qtySelector text-center">
                                                    <span @click.prevent="minusQty(product)" class="decreaseQty"><i
                                                        class="flaticon-minus"></i> </span>
                                                    <input type="number" class="qtyValue" :value="product.qty"/>
                                                    <span @click.prevent="plusQty(product)" class="increaseQty"> <i
                                                        class="flaticon-plus"></i> </span>
                                                </div>
                                            </td>
                                            <td class="sub-total">${{ product.price * product.qty }}</td>
                                            <td>
                                                <div @click.prevent="removeProduct(product.id)" class="remove"><i class="flaticon-cross"></i></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="cart-button-box">
                                <div class="apply-coupon wow fadeInUp animated">
                                    <div class="apply-coupon-input-box mt-30 "><input type="text" name="coupon-code"
                                                                                      value=""
                                                                                      placeholder="Код купона"></div>
                                    <div class="apply-coupon-button mt-30">
                                        <button class="btn--primary style2"
                                                type="submit">Применить купон
                                        </button>
                                    </div>
                                </div>
                                <div class="cart-button-box-right wow fadeInUp animated">
                                    <router-link to="/products" class="btn--primary mt-30"
                                            type="submit">Продолжить шоппинг
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-120">
                        <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
                            <div class="cart-total-box">
                                <div class="inner-title">
                                    <h3>Итоги корзины</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--30">
                        <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
                            <div class="cart-total-box mt-30">
                                <div class="table-outer">
                                    <table class="cart-table2">
                                        <thead class="cart-header clearfix">
                                        <tr>
                                            <th colspan="1" class="shipping-title">Стоимость</th>
                                            <th class="price">{{ totalPriceProducts }} lei</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="shipping"> Персональные данные</td>
                                            <td class="selact-box1">
                                                <div class="row w-100">
                                                    <input class="mt-3" type="text" v-model="name" placeholder="Name">
                                                    <input class="mt-3" type="text" v-model="address" placeholder="Address">
                                                    <input class="mt-3" type="text" v-model="email" placeholder="Email">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="total">Всего</h4>
                                            </td>
                                            <td class="subtotal">{{ totalPriceProducts }} lei</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 wow fadeInUp animated">
                            <div class="cart-check-out mt-30">
                                <h3>Оформление заказа</h3>
                                <ul class="cart-check-out-list">
                                    <li>
                                        <div class="left">
                                            <p>Итог</p>
                                        </div>
                                        <div class="right">
                                            <p>{{ totalPriceProducts }} lei</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <p>Стоимость доставки</p>
                                        </div>
                                        <div class="right">
                                            <p>0.00 lei</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <p>Общая стоимость:</p>
                                        </div>
                                        <div class="right">
                                            <p>{{ totalPriceProducts }} lei</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="apply-coupon-button mt-30">
                                    <button class="btn--primary style2"
                                            @click.prevent="storeOrder"
                                            type="submit">Оформить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End cart area-->
        </main>
    </div>
</template>

<script>
export default {
    name: 'Index',
    mounted() {
        $(document).trigger('changed')
        this.getCartProducts();
    },

    data() {
        return {
            products: [],
            name: '',
            address: '',
            email: ''
        }
    },

    computed: {
        totalPrice() {
            let total = 0;
            this.products.forEach( product => {
                total += parseFloat(product.price);
            });
            return total;
        },
        totalPriceProducts() {
            let totalProducts = 0;
            this.products.forEach( product => {
                totalProducts += parseFloat(product.price)  * parseInt(product.qty);
            });
            return totalProducts;
        }
    },

    methods: {
        getCartProducts() {
            this.products = JSON.parse(localStorage.getItem('cart'));
        },
        minusQty(product) {
            if (product.qty === 1) return;
            product.qty--;
            this.updateCart();
        },
        plusQty(product) {
            product.qty++;
            this.updateCart();
        },
        removeProduct(id) {
            this.products = this.products.filter( product => {
                return product.id !== id;
            });
            this.updateCart();
        },
        updateCart() {
            localStorage.setItem('cart', JSON.stringify(this.products));
        },
        storeOrder () {
            this.axios.post(`/api/orders/`, {
                'products': JSON.stringify(this.products),
                'name': this.name,
                'email': this.email,
                'address': this.address,
                'total_price': Number(this.totalPriceProducts)
            }).then( res => {
                console.log(res);
            })
                .finally(v => {
                    $(document).trigger('changed')
                })
        },
    }
}
</script>

<style scoped>

</style>
