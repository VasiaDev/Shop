<template>
    <div>
        <!-- header-default start -->
        <header class="header-style-3">
            <!-- Start Desktop Menu -->
            <div class="menubox">
                <div class="container-fluid">
                    <div class="row d-lg-none d-block">
                        <div class="mobile-menu ">
                            <div class="mobile-menu__menu-top border-bottom-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="menu-info d-flex justify-content-between align-items-center">
                                            <div class="menubar"><span></span> <span></span> <span></span></div>
                                            <a
                                                href="index.html" class="logo"> <img
                                                src="/public/assets/images/logo/logo.png" width="150" height="100"
                                                alt=""> </a>
                                            <div class="cart-holder">
                                                <a href="#0" class="cart cart-icon position-relative">
                                                    <i class="flaticon-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-closer"></div>
                            <div class="mobile-menu__sidebar-menu">
                                <div class="menu-closer two"><span> Close Menu</span> <span class="cross"><i
                                    class="flaticon-cross"></i></span></div>
                                <div class="search-box-holder">
                                    <form action="#0">
                                        <div class="form-group search-box menu"><input type="text" class="form-control"
                                                                                       placeholder="Search for products">
                                            <span class="search-icon"> <i
                                                class="flaticon-magnifying-glass"></i> </span></div>
                                    </form>
                                </div>
                                <ul class="page-dropdown-menu">
                                    <li class="dropdown-list">
                                        <router-link to="/"><span>Главная </span></router-link>
                                    </li>
                                    <li class="dropdown-list">
                                        <router-link to="/products"><span>Каталог </span></router-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-block d-none">
                        <div class="row g-0 position-relative">
                            <div class="col-lg-3 d-flex align-items-center justify-content-center border-rit ">
                                <div class="logo"><a href="index.html"> <img src="/public/assets/images/logo/logo.png"
                                                                             width="150" height="100" alt=""> </a>
                                </div>
                            </div>
                            <div class="col-lg-9 g-0 p-0">
                                <div class="row g-0 holder">
                                    <div class="col-12">
                                        <div class="some-info">
                                            <p class="d-flex align-items-center"> <span class="icon"> <i
                                                class="flaticon-power"></i> </span>Добро пожаловать в интернет-магазин
                                                Cartify</p>
                                            <div class="right d-flex align-items-center ">
                                                <div class="language currency"><select>
                                                    <option>MDL</option>
                                                    <option value="1">USD</option>
                                                    <option value="2">EUR</option>
                                                </select></div>
                                                <div class="language two"><select>
                                                    <option>РУССКИЙ</option>
                                                    <option value="1">АНГЛИЙСКИЙ</option>
                                                    <option value="4">РУМЫНСКИЙ</option>
                                                </select></div>
                                                <div v-if="!user">
                                                    <a href="#" @click.prevent="openModal('login')">Вход</a> /
                                                    <a href="#" @click.prevent="openModal('register')">Регистрация</a>
                                                </div>
                                                <div v-else>
                                                    <a href="#" @click.prevent="openAccountModal">Мой аккаунт</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-one"></div>
                                <div class="row g-0 holder">
                                    <div class="col-12">
                                        <div class="mega-menu-default mega-menu d-lg-block d-none">
                                            <div class=" d-flex align-items-center justify-content-between ">
                                                <nav>
                                                    <ul
                                                        class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                                        <li class="dropdown-list">
                                                            <router-link to="/"><span>Главная</span></router-link>
                                                        </li>
                                                        <li class="dropdown-list">
                                                            <router-link to="/products"><span>Каталог товаров </span>
                                                            </router-link>
                                                        </li>

                                                    </ul>
                                                </nav>


                                                <div class="right d-flex align-items-center justify-content-end">
                                                    <ul class="main-menu__widge-box d-flex align-items-center ">
                                                        <li class="d-lg-block d-none"><a href="my-account.html"><i
                                                            class="flaticon-user"></i> </a></li>
                                                        <li class="d-lg-block d-none"><a href="wishlist.html"
                                                                                         class="number"><i
                                                            class="flaticon-heart"></i> <span
                                                            class="count">(2)</span> </a></li>
                                                        <li class="cartm"><a href="#0" class="number cart-icon"> <i
                                                            class="flaticon-shopping-cart"></i><span
                                                            class="count">({{ totalQuantity }})</span> </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="shop-grid.html" class="offer-link"> Offer </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="sticy-header">
                <div class="mobile-menu d-lg-none d-block">
                    <div class="mobile-menu__menu-top border-bottom-0">
                        <div class="container">
                            <div class="row">
                                <div class="menu-info d-flex justify-content-between align-items-center">
                                    <div class="menubar"><span></span> <span></span> <span></span></div>
                                    <a
                                        href="index.html" class="logo"> <img src="/public/assets/images/logo/logo.png"
                                                                             width="150" height="100" alt=""> </a>
                                    <div class="cart-holder">
                                        <a href="#0" class="cart cart-icon position-relative">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container position-relative d-lg-block d-none">
                    <div class="d-flex align-items-center justify-content-between"><a href="index.html"
                                                                                      class="logo me-2">
                        <img src="/public/assets/images/logo/logo.png" width="150" height="100" alt=""> </a>
                        <div class="mega-menu-default mega-menu d-lg-block d-none">
                            <div class="container ">
                                <div class="row">
                                    <nav>
                                        <ul
                                            class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                            <li class="dropdown-list">
                                                <router-link to="/"><span>Главная</span></router-link>
                                            </li>
                                            <li class="dropdown-list">
                                                <router-link to="/products"><span>Каталог </span></router-link>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-cart-closer"></div>
            <div class="side-cart d-flex flex-column justify-content-between">
                <div class="top">
                    <div class="content d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Корзина ({{ totalQuantity }})</h6> <span class="cart-close text-uppercase">X</span>
                    </div>
                    <div v-for="product in products" class="cart_items">
                        <div class="items d-flex justify-content-between align-items-center">
                            <div class="left d-flex align-items-center"><a href="shop-details-1.html" class="thumb d-flex justify-content-between align-items-center">
                                <img
                                    :src="product.image_url" :alt="product.title"> </a>
                                <div class="text"><a href="shop-details-1.html">
                                    <h6>{{ product.title }}</h6>
                                </a>
                                    <p>{{ product.qty }} X <span>{{ product.price }}</span></p>
                                </div>
                            </div>
                            <div class="right">
                                <div @click.prevent="removeProduct(product.id)" class="item-remove"><i class="flaticon-cross"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <div class="total-ammount d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Всего:</h6>
                        <h6 class="ammount text-uppercase">{{ totalPrice }} lei</h6>
                    </div>
                    <div class="button-box d-flex justify-content-between">
                        <router-link to="/cart" class="btn_black"> Оформить
                        </router-link>
                        <a @click.prevent="removeAllProducts" href="cart.html" class="button-2 btn_theme"> Очистить </a></div>
                </div>
            </div>
            <div class="sidebar-content-closer"></div>
            <div class="sidebar-content">
                <div class="sidebar-widget-container">
                    <div class="widget-heading d-flex justify-content-end align-content-center"> <span
                        class="close-side-widget">X</span></div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo"><a href="index.html"><img src="/public/assets/images/logo/logo-2.png"
                                                                            alt=""></a>
                                </div>
                                <div class="content-box">
                                    <h4>About Us</h4>
                                    <div class="inner-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                    </div>
                                </div>
                                <div class="form_inner">
                                    <h4>Support</h4>
                                    <form action="index.html" method="post">
                                        <div class="form-group mt-4"><input type="text" name="name" placeholder="Name"
                                                                            required=""></div>
                                        <div class="form-group mt-4"><input type="email" name="email"
                                                                            placeholder="Email"
                                                                            required=""></div>
                                        <div class="form-group mt-4"> <textarea name="message"
                                                                                placeholder="Message..."></textarea>
                                        </div>
                                        <div class="form-group message-btn mt-4">
                                            <button type="submit"
                                                    class="btn--secondary"><span class="txt">Submit Now</span></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="sidebar-contact-info">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li><span class="flaticon-pin-1"></span> New York, United States</li>
                                        <li><span class="flaticon-telephone"></span> <a href="tel:+44203700001">+44 123
                                            456
                                            789</a></li>
                                        <li><span class="flaticon-mail"></span> <a
                                            href="mailto:info@example.com">info@example.com</a></li>
                                    </ul>
                                </div>
                                <div class="thm-medio-boxx1">
                                    <ul class="social-box">
                                        <li class="facebook"><a href="https://www.facebook.com/" target="_blank"><i
                                            class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/" target="_blank"><i
                                            class="flaticon-twitter"></i></a></li>
                                        <li class="instagram"><a href="https://www.instagram.com/" target="_blank"><i
                                            class="flaticon-instagram"></i></a></li>
                                        <li class="youtube"><a href="https://www.youtube.com/" target="_blank"><i
                                            class="flaticon-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <router-view></router-view>

        <!--  Footer Three start -->
        <footer class="footer-default footer-3 ">
            <div class="footer-default__shap_1 position-absolute "><img
                src="/public/assets/images/shape/footer-shape-1.png"
                alt=""></div>
            <!--Start Footer-->
            <div class="footer-default__main-footer position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="company-info">
                                    <div class="footer-title">
                                        <h4> Офис</h4>
                                    </div>
                                    <div class="text1">
                                        <p>улица Букурешть 69, Этаж 3, Офис 12 </p>
                                    </div>
                                    <div class="text2">
                                        <p>Кишинёв, MD-2025</p>
                                    </div>
                                    <div class="text3">
                                        <p>Республика Молдавия</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="footer-title">
                                    <h4> Полезные ссылки </h4>
                                </div>
                                <ul class="footer-links">
                                    <li><a href="my-account.html">Аккаунт</a></li>
                                    <li><a href="login.html">Войти</a></li>
                                    <li><a href="cart.html">Корзина</a></li>
                                    <li><a href="wishlist.html">Мой список желаний</a></li>
                                    <li><a href="compare.html">Сравнить товары</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="footer-title">
                                    <h4> Информация </h4>
                                </div>
                                <ul class="footer-links">
                                    <li><a href="about-us.html">О нас</a></li>
                                    <li><a href="contact.html">Связаться с нами</a></li>
                                    <li><a href="faq.html">Вопросы и ответы</a></li>
                                    <li><a href="blog.html">Последние записи</a></li>
                                    <li><a href="order-track.html">Отслеживание заказа</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="footer-title">
                                    <h4> Рассылка новостей </h4>
                                </div>
                                <div class="footer-newsletter">
                                    <p class="text">Введите свой email, чтобы получать наши последние обновления о продуктах и акциях. </p>
                                    <form action="#0" class="footer-default__subscrib-form">
                                        <div class="footer-input-box"><input type="email" placeholder="Эл. почта"
                                                                             name="email">
                                            <button type="submit" class="subscribe_btn"> Подписаться
                                            </button>
                                        </div>
                                    </form>
                                    <div class="newsletter-bottom d-flex align-items-center">
                                        <div class="footer-title-box">
                                            <p>Следите за нами:</p>
                                        </div>
                                        <div class="footer__medio-boxx  medio-boxx  d-flex align-items-center">
                                            <ul>
                                                <li><a href="https://www.facebook.com/" target="_blank"
                                                       class="active"><i
                                                    class="flaticon-facebook-app-symbol"></i></a></li>
                                                <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="flaticon-youtube"></i></a></li>
                                                <li><a href="https://twitter.com/"><i class="flaticon-twitter"
                                                                                      target="_blank"></i></a></li>
                                                <li><a href="https://www.instagram.com/"><i class="flaticon-instagram"
                                                                                            target="_blank"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- footer-bottom Footer-->
            <div class="footer_bottom position-relative">
                <div class="container">
                    <div class="footer_bottom_content">
                        <div class="copyright wow fadeInUp animated">
                            <p>© 2025 <a href="index.html">Cartify.</a> Все права защищены.</p>
                        </div>
                        <div class="footer-payment wow fadeInUp animated">
                            <a href="#0"> <img src="/public/assets/images/home-four/method-1.jpg" alt="payment"> </a>
                            <a href="#0"> <img src="/public/assets/images/home-four/method-2.jpg" alt="payment"> </a>
                            <a href="#0"> <img src="/public/assets/images/home-four/method-3.jpg" alt="payment"> </a>
                            <a href="#0"> <img src="/public/assets/images/home-four/method-4.jpg" alt="payment"> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div v-if="authModalOpen" class="modal-overlay" @click.self="closeModal">
                    <div class="auth-modal">
                        <div class="auth-content">
                            <LoginForm v-if="activeTab === 'login'" :key="formKey" @login-success="handleLoginSuccess" />
                            <RegisterForm v-if="activeTab === 'register'" :key="formKey" />
                        </div>

                        <div class="auth-toggle">
                            <p v-if="activeTab === 'login'">
                                Нет аккаунта?
                                <span @click="activeTab = 'register'; formKey++">Зарегистрироваться</span>
                            </p>
                            <p v-else>
                                Уже есть аккаунт?
                                <span @click="activeTab = 'login'; formKey++">Войти</span>
                            </p>
                        </div>

                        <button class="close-btn" @click="closeModal">×</button>
                    </div>
                </div>

                <div v-if="accountModalOpen" class="modal-overlay" @click.self="closeAccountModal">
                    <div class="auth-modal">
                        <div class="auth-content" style="flex-direction: column; align-items: flex-start; padding: 20px;">
                            <h2 style="margin: 0 0 20px 0;">Мой аккаунт</h2>

                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <div style="display: flex;">
                                    <strong style="width: 80px;">Имя:</strong>
                                    <span>{{ user.name }}</span>
                                </div>
                                <div style="display: flex;">
                                    <strong style="width: 80px;">Email:</strong>
                                    <span>{{ user.email }}</span>
                                </div>
                            </div>

                            <div style="display: flex; gap: 10px; margin-top: 20px;">
                                <button
                                    v-if="user.role === 1"
                                    @click="goToAdminPanel"
                                    style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 25px; cursor: pointer;">
                                    Control Panel
                                </button>

                                <button
                                    @click="logout"
                                    style="background-color: #ff6b00; color: white; border: none; padding: 10px 20px; border-radius: 25px; cursor: pointer;">
                                    Выйти
                                </button>
                            </div>
                        </div>

                        <button class="close-btn" @click="closeAccountModal">×</button>
                    </div>
                </div>

                <div v-if="successMessage" class="alert-success">
                    {{ successMessage }}
                </div>

            </div>
        </footer>
    </div>
</template>

<script>
import RegisterForm from './views/authentication/RegisterForm.vue'
import LoginForm from './views/authentication/LoginForm.vue'
import axios from 'axios'

export default {
    name: 'App',
    components: {
        RegisterForm,
        LoginForm
    },
    data() {
        return {
            user: null,
            products: [],
            activeTab: 'login',
            authModalOpen: false,
            accountModalOpen: false,
            successMessage: '',
            formKey: 0,
            redirectAfterLogin: null,
        }
    },
    computed: {
        totalPrice() {
            return this.products.reduce((total, product) => {
                return total + parseFloat(product.price) * parseInt(product.qty)
            }, 0)
        },
        totalQuantity() {
            return this.products.reduce((total, product) => {
                return total + Number(product.qty)
            }, 0)
        }
    },
    methods: {
        goToAdminPanel() {
            this.closeAccountModal();
            this.redirectAfterLogin = '/admin';
            this.activeTab = 'login';
            this.authModalOpen = true;
        },
        handleLoginSuccess(userData) {
            this.closeModal();
            this.user = userData;

            this.successMessage = 'Вы успешно вошли в аккаунт!';
            setTimeout(() => {
                this.successMessage = '';
            }, 4000);

            if (this.redirectAfterLogin) {
                const target = this.redirectAfterLogin;
                this.redirectAfterLogin = null;
                window.location.href = target;
            } else {
                this.getUser();
            }
        },
        openModal(tab = 'login') {
            this.activeTab = tab
            this.authModalOpen = true
            this.formKey++
            document.body.classList.add('blurred')
        },
        closeModal() {
            this.authModalOpen = false
            document.body.classList.remove('blurred')
        },
        async getUser() {
            const token = localStorage.getItem('token')
            try {
                const res = await axios.get('/api/user', {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                })
                this.user = res.data
            } catch (err) {
                console.error(err)
            }
        },
        openAccountModal() {
            this.accountModalOpen = true
            document.body.classList.add('blurred')
        },
        closeAccountModal() {
            this.accountModalOpen = false
            document.body.classList.remove('blurred')
        },
        logout() {
            localStorage.removeItem('token')
            this.user = null
            this.closeAccountModal()
        },
        getCartProducts() {
            const cart = localStorage.getItem('cart')
            this.products = cart ? JSON.parse(cart) : []
        },
        minusQty(product) {
            if (product.qty === 1) return
            product.qty--
            this.updateCart()
        },
        plusQty(product) {
            product.qty++
            this.updateCart()
        },
        removeProduct(id) {
            this.products = this.products.filter(p => p.id !== id)
            this.updateCart()
        },
        removeAllProducts() {
            this.products = []
            this.updateCart()
        },
        updateCart() {
            localStorage.setItem('cart', JSON.stringify(this.products))
        }
    },
    mounted() {
        $(document).trigger('changed');
        this.getCartProducts();
        this.getUser();
    }
}
</script>


<style scoped>
.alert-success {
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #ff6b00;
    color: white;
    padding: 15px 30px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    z-index: 9999;
    font-size: 16px;
}

.auth-toggle {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #666;
}

.auth-toggle span {
    color: #ff6b00;
    font-weight: bold;
    cursor: pointer;
    margin-left: 5px;
    transition: color 0.3s;
}

.auth-toggle span:hover {
    color: #e95c00;
}

body.blurred #app > *:not(.modal-overlay) {
    filter: blur(6px);
    pointer-events: none;
}

.modal-overlay {
    position: fixed;
    top: 0; left: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(4px);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.auth-modal {
    background: #fff;
    padding: 35px 30px;
    border-radius: 16px;
    width: 100%;
    max-width: 460px;
    position: relative;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);
    animation: fadeIn 0.3s ease-out;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 14px;
    background: none;
    border: none;
    font-size: 28px;
    color: #888;
    cursor: pointer;
    transition: color 0.3s ease;
}
.close-btn:hover {
    color: #ff6b00;
}

.auth-tabs button {
    padding: 10px 25px;
    font-size: 16px;
    border: 2px solid transparent;
    border-radius: 25px;
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
}

.auth-tabs button.active {
    background-color: #ff6b00;
    color: #fff;
    border-color: #ff6b00;
}

.auth-content {
    display: flex;
    justify-content: center;
    align-items: center;
}

@keyframes fadeIn {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.auth-modal button[type="submit"] {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #ff6b00;
    border: none;
    border-radius: 30px;
    color: white;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 20px;
    text-align: center;
}
.auth-modal button[type="submit"]:hover {
    background-color: #e95c00;
}
</style>



