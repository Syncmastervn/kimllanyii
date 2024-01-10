<?php

/* product.twig */
class __TwigTemplate_53cba9b921553e10dd0c6ff7c2c0a62eb73c9da8e85aa3f9519a529eacac8964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "product.twig", 1);
        $this->blocks = array(
            'asset' => array($this, 'block_asset'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_asset($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/css/main.css\" /> 
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"product-full\">
<div class=\"modal fade custom-modal\" id=\"quickViewModal\" tabindex=\"-1\" aria-labelledby=\"quickViewModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
        <div class=\"modal-content\">              
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>       
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"detail-gallery\">
                                <span class=\"zoom-icon\"><i class=\"fi-rs-search\"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class=\"product-image-slider\">
                                    <figure class=\"border-radius-10\">
                                        <img src=\"assets/imgs/shop/product-16-2.jpg\" alt=\"product image\">
                                    </figure>
                                    <figure class=\"border-radius-10\">
                                        <img src=\"assets/imgs/shop/product-16-1.jpg\" alt=\"product image\">
                                    </figure>
                                    <figure class=\"border-radius-10\">
                                        <img src=\"assets/imgs/shop/product-16-3.jpg\" alt=\"product image\">
                                    </figure>
                                    <figure class=\"border-radius-10\">
                                        <img src=\"assets/imgs/shop/product-16-4.jpg\" alt=\"product image\">
                                    </figure>
                                    <figure class=\"border-radius-10\">
                                        <img src=\"assets/imgs/shop/product-16-5.jpg\" alt=\"product image\">
                                    </figure>
                                    <figure class=\"border-radius-10\">
                                        <img src=\"assets/imgs/shop/product-16-6.jpg\" alt=\"product image\">
                                    </figure>
                                    <figure class=\"border-radius-10\">
                                        <img src=\"assets/imgs/shop/product-16-7.jpg\" alt=\"product image\">
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class=\"slider-nav-thumbnails pl-15 pr-15\">
                                    <div><img src=\"assets/imgs/shop/thumbnail-3.jpg\" alt=\"product image\"></div>
                                    <div><img src=\"assets/imgs/shop/thumbnail-4.jpg\" alt=\"product image\"></div>
                                    <div><img src=\"assets/imgs/shop/thumbnail-5.jpg\" alt=\"product image\"></div>
                                    <div><img src=\"assets/imgs/shop/thumbnail-6.jpg\" alt=\"product image\"></div>
                                    <div><img src=\"assets/imgs/shop/thumbnail-7.jpg\" alt=\"product image\"></div>
                                    <div><img src=\"assets/imgs/shop/thumbnail-8.jpg\" alt=\"product image\"></div>
                                    <div><img src=\"assets/imgs/shop/thumbnail-9.jpg\" alt=\"product image\"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                            <div class=\"social-icons single-share\">
                                <ul class=\"text-grey-5 d-inline-block\">
                                    <li><strong class=\"mr-10\">Share this:</strong></li>
                                    <li class=\"social-facebook\"><a href=\"#\"><img src=\"assets/imgs/theme/icons/icon-facebook.svg\" alt=\"\"></a></li>
                                    <li class=\"social-twitter\"> <a href=\"#\"><img src=\"assets/imgs/theme/icons/icon-twitter.svg\" alt=\"\"></a></li>
                                    <li class=\"social-instagram\"><a href=\"#\"><img src=\"assets/imgs/theme/icons/icon-instagram.svg\" alt=\"\"></a></li>
                                    <li class=\"social-linkedin\"><a href=\"#\"><img src=\"assets/imgs/theme/icons/icon-pinterest.svg\" alt=\"\"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"detail-info\">
                                <h3 class=\"title-detail mt-30\">Sản phẩm liên kết</h3>
                                <div class=\"product-detail-rating\">
                                    <div class=\"pro-details-brand\">
                                        <span> Brands: <a href=\"shop-grid-right.html\">Bootstrap</a></span>
                                    </div>
                                    <div class=\"product-rate-cover text-end\">
                                        <div class=\"product-rate d-inline-block\">
                                            <div class=\"product-rating\" style=\"width:90%\">
                                            </div>
                                        </div>
                                        <span class=\"font-small ml-5 text-muted\"> (25 reviews)</span>
                                    </div>
                                </div>
                                <div class=\"clearfix product-price-cover\">
                                    <div class=\"product-price primary-color float-left\">
                                        <ins><span class=\"text-brand\">\$120.00</span></ins>
                                        <ins><span class=\"old-price font-md ml-15\">\$200.00</span></ins>
                                        <span class=\"save-price  font-md color3 ml-15\">25% Off</span>
                                    </div>
                                </div>
                                <div class=\"bt-1 border-color-1 mt-15 mb-15\"></div>
                                <div class=\"short-desc mb-30\">
                                    <p class=\"font-sm\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi,!</p>
                                </div>
                                
                                <div class=\"attr-detail attr-color mb-15\">
                                    <strong class=\"mr-10\">Color</strong>
                                    <ul class=\"list-filter color-filter\">
                                        <li><a href=\"#\" data-color=\"Red\"><span class=\"product-color-red\"></span></a></li>
                                        <li><a href=\"#\" data-color=\"Yellow\"><span class=\"product-color-yellow\"></span></a></li>
                                        <li class=\"active\"><a href=\"#\" data-color=\"White\"><span class=\"product-color-white\"></span></a></li>
                                        <li><a href=\"#\" data-color=\"Orange\"><span class=\"product-color-orange\"></span></a></li>
                                        <li><a href=\"#\" data-color=\"Cyan\"><span class=\"product-color-cyan\"></span></a></li>
                                        <li><a href=\"#\" data-color=\"Green\"><span class=\"product-color-green\"></span></a></li>
                                        <li><a href=\"#\" data-color=\"Purple\"><span class=\"product-color-purple\"></span></a></li>
                                    </ul>
                                </div>
                                <div class=\"attr-detail attr-size\">
                                    <strong class=\"mr-10\">Size</strong>
                                    <ul class=\"list-filter size-filter font-small\">
                                        <li><a href=\"#\">S</a></li>
                                        <li class=\"active\"><a href=\"#\">M</a></li>
                                        <li><a href=\"#\">L</a></li>
                                        <li><a href=\"#\">XL</a></li>
                                        <li><a href=\"#\">XXL</a></li>
                                    </ul>
                                </div>
                                <div class=\"bt-1 border-color-1 mt-30 mb-30\"></div>
                                <div class=\"detail-extralink\">
                                    <div class=\"detail-qty border radius\">
                                        <a href=\"#\" class=\"qty-down\"><i class=\"fi-rs-angle-small-down\"></i></a>
                                        <span class=\"qty-val\">1</span>
                                        <a href=\"#\" class=\"qty-up\"><i class=\"fi-rs-angle-small-up\"></i></a>
                                    </div>
                                    <div class=\"product-extra-link2\">
                                        <button type=\"submit\" class=\"button button-add-to-cart\">Add to cart</button>
                                        <a aria-label=\"Add To Wishlist\" class=\"action-btn hover-up\" href=\"shop-wishlist.html\"><i class=\"fi-rs-heart\"></i></a>
                                        <a aria-label=\"Compare\" class=\"action-btn hover-up\" href=\"shop-compare.html\"><i class=\"fi-rs-shuffle\"></i></a>
                                    </div>
                                </div>
                                <ul class=\"product-meta font-xs color-grey mt-50\">
                                    <li class=\"mb-5\">SKU: <a href=\"#\">FWM15VKT</a></li>
                                    <li class=\"mb-5\">Tags: <a href=\"#\" rel=\"tag\">Cloth</a>, <a href=\"#\" rel=\"tag\">Women</a>, <a href=\"#\" rel=\"tag\">Dress</a> </li>
                                    <li>Availability:<span class=\"in-stock text-success ml-5\">8 Items In Stock</span></li>
                                </ul>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>        
        </div>
        </div>
    </div>
    <header class=\"header-area header-style-1 header-height-2\">
        <div class=\"header-top header-top-ptb-1 d-none d-lg-block\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-3 col-lg-4\">
                        <div class=\"header-info\">
                            <ul>
                                <li><i class=\"fi-rs-smartphone\"></i> <a href=\"#\">(+01) - 2345 - 6789</a></li>
                                <li><i class=\"fi-rs-marker\"></i><a  href=\"page-contact.html\">Our location</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-4\">
                        <div class=\"text-center\">
                            <div id=\"news-flash\" class=\"d-inline-block\">
                                <ul>
                                    <li>Get great devices up to 50% off <a href=\"shop-grid-right.html\">View details</a></li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today <a href=\"shop-grid-right.html\">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4\">
                        <div class=\"header-info header-info-right\">
                            <ul>
                                <li>
                                    <a class=\"language-dropdown-active\" href=\"#\"> <i class=\"fi-rs-world\"></i> English <i class=\"fi-rs-angle-small-down\"></i></a>
                                    <ul class=\"language-dropdown\">
                                        <li><a href=\"#\"><img src=\"assets/imgs/theme/flag-fr.png\" alt=\"\">Français</a></li>
                                        <li><a href=\"#\"><img src=\"assets/imgs/theme/flag-dt.png\" alt=\"\">Deutsch</a></li>
                                        <li><a href=\"#\"><img src=\"assets/imgs/theme/flag-ru.png\" alt=\"\">Pусский</a></li>
                                    </ul>
                                </li>
                                <li><i class=\"fi-rs-user\"></i><a href=\"page-login-register.html\">Log In / Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"header-middle header-middle-ptb-1 d-none d-lg-block\">
            <div class=\"container\">
                <div class=\"header-wrap\">
                    <div class=\"logo logo-width-1\">
                        <a href=\"index.html\"><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/theme/logo.svg\" alt=\"logo\"></a>
                    </div>
                    <div class=\"header-right\">
                        <div class=\"search-style-2\">
                            <form action=\"#\">
                                <input type=\"text\" placeholder=\"Search for items...\">
                            </form>
                        </div>
                        <div class=\"header-action-right\">
                            <div class=\"header-action-2\">
                                <div class=\"header-action-icon-2\">
                                    <a href=\"shop-wishlist.html\">
                                        <img class=\"svgInject\" alt=\"Evara\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/theme/icons/icon-heart.svg\">
                                        <span class=\"pro-count blue\">4</span>
                                    </a>
                                </div>
                                <div class=\"header-action-icon-2\">
                                    <a class=\"mini-cart-icon\" href=\"shop-cart.html\">
                                        <img alt=\"Evara\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/theme/icons/icon-cart.svg\">
                                        <span class=\"pro-count blue\">2</span>
                                    </a>
                                    <div class=\"cart-dropdown-wrap cart-dropdown-hm2\">
                                        <ul>
                                            <li>
                                                <div class=\"shopping-cart-img\">
                                                    <a href=\"shop-product-right.html\"><img alt=\"Evara\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/shop/thumbnail-3.jpg\"></a>
                                                </div>
                                                <div class=\"shopping-cart-title\">
                                                    <h4><a href=\"shop-product-right.html\">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>\$800.00</h4>
                                                </div>
                                                <div class=\"shopping-cart-delete\">
                                                    <a href=\"#\"><i class=\"fi-rs-cross-small\"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"shopping-cart-img\">
                                                    <a href=\"shop-product-right.html\"><img alt=\"Evara\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/shop/thumbnail-2.jpg\"></a>
                                                </div>
                                                <div class=\"shopping-cart-title\">
                                                    <h4><a href=\"shop-product-right.html\">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>\$3200.00</h4>
                                                </div>
                                                <div class=\"shopping-cart-delete\">
                                                    <a href=\"#\"><i class=\"fi-rs-cross-small\"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class=\"shopping-cart-footer\">
                                            <div class=\"shopping-cart-total\">
                                                <h4>Total <span>\$4000.00</span></h4>
                                            </div>
                                            <div class=\"shopping-cart-button\">
                                                <a href=\"shop-cart.html\" class=\"outline\">View cart</a>
                                                <a href=\"shop-checkout.html\">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"header-bottom header-bottom-bg-color sticky-bar\">
            <div class=\"container\">
                <div class=\"header-wrap header-space-between position-relative\">
                    <div class=\"logo logo-width-1 d-block d-lg-none\">
                        <a href=\"index.html\"><img src=\"assets/imgs/theme/logo.svg\" alt=\"logo\"></a>
                    </div>
                    <div class=\"header-nav d-none d-lg-flex\">
                        <div class=\"main-categori-wrap d-none d-lg-block\">
                            <a class=\"categori-button-active\" href=\"#\">
                                <span class=\"fi-rs-apps\"></span> 
                                Tiêu chuẩn cao cấp
                            </a>
                            <!-- <div class=\"categori-dropdown-wrap categori-dropdown-active-large\"></div> -->
                        </div>
                        <div class=\"main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block\">
                            <nav class=\" main-menu-align-right\"> <!-- ### KIEN ###-->
                                <ul>
                                    <li><a  href=\"index.html\">Trang chủ </i></a>
                                        <!-- <ul class=\"sub-menu\">
                                            <li><a href=\"index.html\">Home 1</a></li>
                                            <li><a href=\"index-2.html\">Home 2</a></li>
                                            <li><a href=\"index-3.html\">Home 3</a></li>
                                            <li><a href=\"index-4.html\">Home 4</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href=\"shop-grid-right.html\">Sản Phẩm <i class=\"fi-rs-angle-down\"></i></a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"shop-grid-right.html\">Shop Grid – Right Sidebar</a></li>
                                            <li><a href=\"shop-grid-left.html\">Shop Grid – Left Sidebar</a></li>
                                            <li><a href=\"shop-list-right.html\">Shop List – Right Sidebar</a></li>
                                            <li><a href=\"shop-list-left.html\">Shop List – Left Sidebar</a></li>
                                            <li><a href=\"shop-fullwidth.html\">Shop - Wide</a></li>
                                            <li><a href=\"#\">Single Product <i class=\"fi-rs-angle-right\"></i></a>
                                                <ul class=\"level-menu\">
                                                    <li><a href=\"shop-product-right.html\">Product – Right Sidebar</a></li>
                                                    <li><a href=\"shop-product-left.html\">Product – Left Sidebar</a></li>
                                                    <li><a href=\"shop-product-full.html\">Product – No sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"shop-filter.html\">Shop – Filter</a></li>
                                            <li><a href=\"shop-wishlist.html\">Shop – Wishlist</a></li>
                                            <li><a href=\"shop-cart.html\">Shop – Cart</a></li>
                                            <li><a href=\"shop-checkout.html\">Shop – Checkout</a></li>
                                            <li><a href=\"shop-compare.html\">Shop – Compare</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class=\"position-static\"><a href=\"#\">Mega menu <i class=\"fi-rs-angle-down\"></i></a></li> -->
                                    <li><a href=\"blog-category-grid.html\">Thông tin <i class=\"fi-rs-angle-down\"></i></a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"blog-category-grid.html\">Blog Category Grid</a></li>
                                            <li><a href=\"blog-category-list.html\">Blog Category List</a></li>
                                            <li><a href=\"blog-category-big.html\">Blog Category Big</a></li>
                                            <li><a href=\"blog-category-fullwidth.html\">Blog Category Wide</a></li>
                                            <li><a href=\"#\">Single Post <i class=\"fi-rs-angle-right\"></i></a>
                                                <ul class=\"level-menu level-menu-modify\">
                                                    <li><a href=\"blog-post-left.html\">Left Sidebar</a></li>
                                                    <li><a href=\"blog-post-right.html\">Right Sidebar</a></li>
                                                    <li><a href=\"blog-post-fullwidth.html\">No Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- <li><a href=\"#\">Pages <i class=\"fi-rs-angle-down\"></i></a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"page-about.html\">About Us</a></li>
                                            <li><a href=\"page-contact.html\">Contact</a></li>
                                            <li><a href=\"page-account.html\">My Account</a></li>
                                            <li><a href=\"page-login-register.html\">login/register</a></li>
                                            <li><a href=\"page-purchase-guide.html\">Purchase Guide</a></li>
                                            <li><a href=\"page-privacy-policy.html\">Privacy Policy</a></li>
                                            <li><a href=\"page-terms.html\">Terms of Service</a></li>
                                            <li><a href=\"page-404.html\">404 Page</a></li>
                                        </ul>
                                    </li> -->
                                    <li>
                                        <a href=\"page-contact.html\">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class=\"hotline d-none d-lg-block\">
                        <p><i class=\"fi-rs-headset\"></i><span>Hotline</span> 1900 - 888 </p>
                    </div>
                    <p class=\"mobile-promotion\">Happy <span class=\"text-brand\">Mother's Day</span>. Big Sale Up to 40%</p>
                    <div class=\"header-action-right d-block d-lg-none\">
                        <div class=\"header-action-2\">
                            <div class=\"header-action-icon-2\">
                                <a href=\"shop-wishlist.html\">
                                    <img alt=\"Evara\" src=\"assets/imgs/theme/icons/icon-heart.svg\">
                                    <span class=\"pro-count white\">4</span>
                                </a>
                            </div>
                            <div class=\"header-action-icon-2\">
                                <a class=\"mini-cart-icon\" href=\"shop-cart.html\">
                                    <img alt=\"Evara\" src=\"assets/imgs/theme/icons/icon-cart.svg\">
                                    <span class=\"pro-count white\">2</span>
                                </a>
                                <div class=\"cart-dropdown-wrap cart-dropdown-hm2\">
                                    <ul>
                                        <li>
                                            <div class=\"shopping-cart-img\">
                                                <a href=\"shop-product-right.html\"><img alt=\"Evara\" src=\"assets/imgs/shop/thumbnail-3.jpg\"></a>
                                            </div>
                                            <div class=\"shopping-cart-title\">
                                                <h4><a href=\"shop-product-right.html\">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>\$800.00</h3>
                                            </div>
                                            <div class=\"shopping-cart-delete\">
                                                <a href=\"#\"><i class=\"fi-rs-cross-small\"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"shopping-cart-img\">
                                                <a href=\"shop-product-right.html\"><img alt=\"Evara\" src=\"assets/imgs/shop/thumbnail-4.jpg\"></a>
                                            </div>
                                            <div class=\"shopping-cart-title\">
                                                <h4><a href=\"shop-product-right.html\">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>\$3500.00</h3>
                                            </div>
                                            <div class=\"shopping-cart-delete\">
                                                <a href=\"#\"><i class=\"fi-rs-cross-small\"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=\"shopping-cart-footer\">
                                        <div class=\"shopping-cart-total\">
                                            <h4>Total <span>\$383.00</span></h4>
                                        </div>
                                        <div class=\"shopping-cart-button\">
                                            <a href=\"shop-cart.html\">View cart</a>
                                            <a href=\"shop-checkout.html\">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"header-action-icon-2 d-block d-lg-none\">
                                <div class=\"burger-icon burger-icon-white\">
                                    <span class=\"burger-icon-top\"></span>
                                    <span class=\"burger-icon-mid\"></span>
                                    <span class=\"burger-icon-bottom\"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class=\"mobile-header-active mobile-header-wrapper-style\">
        <div class=\"mobile-header-wrapper-inner\">
            <div class=\"mobile-header-top\">
                <div class=\"mobile-header-logo\">
                    <a href=\"index.html\"><img src=\"assets/imgs/theme/logo.svg\" alt=\"logo\"></a>
                </div>
                <div class=\"mobile-menu-close close-style-wrap close-style-position-inherit\">
                    <button class=\"close-style search-close\">
                        <i class=\"icon-top\"></i>
                        <i class=\"icon-bottom\"></i>
                    </button>
                </div>
            </div>
            <div class=\"mobile-header-content-area\">
                <div class=\"mobile-search search-style-3 mobile-header-border\">
                    <form action=\"#\">
                        <input type=\"text\" placeholder=\"Search for items…\">
                        <button type=\"submit\"><i class=\"fi-rs-search\"></i></button>
                    </form>
                </div>
                <div class=\"mobile-menu-wrap mobile-header-border\">
                    <div class=\"main-categori-wrap mobile-header-border\">
                        <a class=\"categori-button-active-2\" href=\"#\">
                            <span class=\"fi-rs-apps\"></span> Browse Categories
                        </a>
                        <div class=\"categori-dropdown-wrap categori-dropdown-active-small\">
                            <ul>
                                <li><a href=\"shop-grid-right.html\"><i class=\"evara-font-dress\"></i>Women's Clothing</a></li>
                                <li><a href=\"shop-grid-right.html\"><i class=\"evara-font-tshirt\"></i>Men's Clothing</a></li>
                                <li> <a href=\"shop-grid-right.html\"><i class=\"evara-font-smartphone\"></i> Cellphones</a></li>
                                <li><a href=\"shop-grid-right.html\"><i class=\"evara-font-desktop\"></i>Computer & Office</a></li>
                                <li><a href=\"shop-grid-right.html\"><i class=\"evara-font-cpu\"></i>Consumer Electronics</a></li>
                                <li><a href=\"shop-grid-right.html\"><i class=\"evara-font-home\"></i>Home & Garden</a></li>
                                <li><a href=\"shop-grid-right.html\"><i class=\"evara-font-high-heels\"></i>Shoes</a></li>
                                <li><a href=\"shop-grid-right.html\"><i class=\"evara-font-teddy-bear\"></i>Mother & Kids</a></li>
                                <li><a href=\"shop-grid-right.html\"><i class=\"evara-font-kite\"></i>Outdoor fun</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class=\"mobile-menu\">
                            <li class=\"menu-item-has-children\"><span class=\"menu-expand\"></span><a href=\"index.html\">Home</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"index.html\">Home 1</a></li>
                                    <li><a href=\"index-2.html\">Home 2</a></li>
                                    <li><a href=\"index-3.html\">Home 3</a></li>
                                    <li><a href=\"index-4.html\">Home 4</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\"><span class=\"menu-expand\"></span><a href=\"shop-grid-right.html\">shop</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"shop-grid-right.html\">Shop Grid – Right Sidebar</a></li>
                                    <li><a href=\"shop-grid-left.html\">Shop Grid – Left Sidebar</a></li>
                                    <li><a href=\"shop-list-right.html\">Shop List – Right Sidebar</a></li>
                                    <li><a href=\"shop-list-left.html\">Shop List – Left Sidebar</a></li>
                                    <li><a href=\"shop-fullwidth.html\">Shop - Wide</a></li>
                                    <li class=\"menu-item-has-children\"><span class=\"menu-expand\"></span><a href=\"#\">Single Product</a>
                                        <ul class=\"dropdown\">
                                            <li><a href=\"shop-product-right.html\">Product – Right Sidebar</a></li>
                                            <li><a href=\"shop-product-left.html\">Product – Left Sidebar</a></li>
                                            <li><a href=\"shop-product-full.html\">Product – No sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"shop-filter.html\">Shop – Filter</a></li>
                                    <li><a href=\"shop-wishlist.html\">Shop – Wishlist</a></li>
                                    <li><a href=\"shop-cart.html\">Shop – Cart</a></li>
                                    <li><a href=\"shop-checkout.html\">Shop – Checkout</a></li>
                                    <li><a href=\"shop-compare.html\">Shop – Compare</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\"><span class=\"menu-expand\"></span><a href=\"#\">Mega menu</a>
                                <ul class=\"dropdown\">
                                    <li class=\"menu-item-has-children\"><span class=\"menu-expand\"></span><a href=\"#\">Women's Fashion</a>
                                        <ul class=\"dropdown\">
                                            <li><a href=\"shop-product-right.html\">Dresses</a></li>
                                            <li><a href=\"shop-product-right.html\">Blouses & Shirts</a></li>
                                            <li><a href=\"shop-product-right.html\">Hoodies & Sweatshirts</a></li>
                                            <li><a href=\"shop-product-right.html\">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><span class=\"menu-expand\"></span><a href=\"#\">Men's Fashion</a>
                                        <ul class=\"dropdown\">
                                            <li><a href=\"shop-product-right.html\">Jackets</a></li>
                                            <li><a href=\"shop-product-right.html\">Casual Faux Leather</a></li>
                                            <li><a href=\"shop-product-right.html\">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item-has-children\"><span class=\"menu-expand\"></span><a href=\"#\">Technology</a>
                                        <ul class=\"dropdown\">
                                            <li><a href=\"shop-product-right.html\">Gaming Laptops</a></li>
                                            <li><a href=\"shop-product-right.html\">Ultraslim Laptops</a></li>
                                            <li><a href=\"shop-product-right.html\">Tablets</a></li>
                                            <li><a href=\"shop-product-right.html\">Laptop Accessories</a></li>
                                            <li><a href=\"shop-product-right.html\">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\"><span class=\"menu-expand\"></span><a href=\"blog-category-fullwidth.html\">Blog</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"blog-category-grid.html\">Blog Category Grid</a></li>
                                    <li><a href=\"blog-category-list.html\">Blog Category List</a></li>
                                    <li><a href=\"blog-category-big.html\">Blog Category Big</a></li>
                                    <li><a href=\"blog-category-fullwidth.html\">Blog Category Wide</a></li>
                                    <li class=\"menu-item-has-children\"><span class=\"menu-expand\"></span><a href=\"#\">Single Product Layout</a>
                                        <ul class=\"dropdown\">
                                            <li><a href=\"blog-post-left.html\">Left Sidebar</a></li>
                                            <li><a href=\"blog-post-right.html\">Right Sidebar</a></li>
                                            <li><a href=\"blog-post-fullwidth.html\">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\"><span class=\"menu-expand\"></span><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"page-about.html\">About Us</a></li>
                                    <li><a href=\"page-contact.html\">Contact</a></li>
                                    <li><a href=\"page-account.html\">My Account</a></li>
                                    <li><a href=\"page-login-register.html\">login/register</a></li>
                                    <li><a href=\"page-purchase-guide.html\">Purchase Guide</a></li>
                                    <li><a href=\"page-privacy-policy.html\">Privacy Policy</a></li>
                                    <li><a href=\"page-terms.html\">Terms of Service</a></li>
                                    <li><a href=\"page-404.html\">404 Page</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\"><span class=\"menu-expand\"></span><a href=\"#\">Language</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"#\">English</a></li>
                                    <li><a href=\"#\">French</a></li>
                                    <li><a href=\"#\">German</a></li>
                                    <li><a href=\"#\">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class=\"mobile-header-info-wrap mobile-header-border\">
                    <div class=\"single-mobile-header-info mt-30\">
                        <a  href=\"page-contact.html\"> Our location </a>
                    </div>
                    <div class=\"single-mobile-header-info\">
                        <a href=\"page-login-register.html\">Log In / Sign Up </a>
                    </div>
                    <div class=\"single-mobile-header-info\">
                        <a href=\"#\">(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class=\"mobile-social-icon\">
                    <h5 class=\"mb-15 text-grey-4\">Follow Us</h5>
                    <a href=\"#\"><img src=\"assets/imgs/theme/icons/icon-facebook.svg\" alt=\"\"></a>
                    <a href=\"#\"><img src=\"assets/imgs/theme/icons/icon-twitter.svg\" alt=\"\"></a>
                    <a href=\"#\"><img src=\"assets/imgs/theme/icons/icon-instagram.svg\" alt=\"\"></a>
                    <a href=\"#\"><img src=\"assets/imgs/theme/icons/icon-pinterest.svg\" alt=\"\"></a>
                    <a href=\"#\"><img src=\"assets/imgs/theme/icons/icon-youtube.svg\" alt=\"\"></a>
                </div>
            </div>
        </div>
    </div>
    <main class=\"main\">
        <div class=\"page-header breadcrumb-wrap\">
            <div class=\"container\">
                <div class=\"breadcrumb\">
                    <a href=\"index.html\" rel=\"nofollow\">Home</a>
                    <span></span> Fashion
                    <span></span> Abstract Print Patchwork Dress
                </div>
            </div>
        </div>
        <section class=\"mt-50 mb-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"product-detail accordion-detail\">
                            <div class=\"row mb-50\">
                                <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                    <div class=\"detail-gallery\">
                                        <span class=\"zoom-icon\"><i class=\"fi-rs-search\"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class=\"product-image-slider\">
                                            
                                            ";
        // line 581
        $context["fileArray"] = twig_split_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "Images", array()), ";");
        // line 582
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fileArray"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 583
            echo "
                                                <figure class=\"border-radius-10\">
                                                    <img src=\"";
            // line 585
            echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
            echo "/imgs/shop/";
            echo twig_escape_filter($this->env, $context["file"], "html", null, true);
            echo "\" alt=\"product image\">
                                                </figure>

                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 589
        echo "                                                
                                            
                                            
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class=\"slider-nav-thumbnails pl-15 pr-15\">
                                            ";
        // line 595
        $context["fileArray"] = twig_split_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "Images", array()), ";");
        // line 596
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fileArray"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["thumb"]) {
            // line 597
            echo "                                                ";
            if (($context["index"] < 2)) {
                // line 598
                echo "                                                    <div><img src=\"";
                echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
                echo "/imgs/shop/";
                echo twig_escape_filter($this->env, $context["thumb"], "html", null, true);
                echo "\" alt=\"product image\"></div>
                                                ";
            }
            // line 600
            echo "                                               

                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['thumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 603
        echo "                                        </div> 
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                    <div class=\"detail-info\">
                                        <h2 class=\"title-detail\">Colorful Pattern Shirts HD450</h2>
                                        <div class=\"product-detail-rating\">
                                            <div class=\"pro-details-brand\">
                                                <span> Brands: <a href=\"shop-grid-right.html\">Bootstrap</a></span>
                                            </div>
                                            <div class=\"product-rate-cover text-end\">
                                                <div class=\"product-rate d-inline-block\">
                                                    <div class=\"product-rating\" style=\"width:90%\">
                                                    </div>
                                                </div>
                                                <span class=\"font-small ml-5 text-muted\"> (25 reviews)</span>
                                            </div>
                                        </div>
                                        <div class=\"clearfix product-price-cover\">
                                            <div class=\"product-price primary-color float-left\">
                                                <ins><span class=\"text-brand\">3.000.000đ</span></ins>
                                                <ins><span class=\"old-price font-md ml-15\">\$200.00</span></ins>
                                                <span class=\"save-price  font-md color3 ml-15\">25% Off</span>
                                            </div>
                                        </div>
                                        <div class=\"bt-1 border-color-1 mt-15 mb-15\"></div>
                                        <div class=\"short-desc mb-30\">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi? Officia doloremque facere quia. Voluptatum, accusantium!</p>
                                        </div>
                                        
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-10 m-auto entry-main-content\">
                                    <h2 class=\"section-title style-1 mb-30\">Mô tả sản phẩm</h2>
                                    <div class=\"description mb-50\">
                                        <p>Những sản phẩm vàng 18k tại tiệm vàng KimLan đều đã được kiểm tra kỹ lưỡng
                                            về chất lượng và cân nặng vàng theo tiêu chuẩn Quốc Gia, khách hàng hoàn toàn 
                                            có thể yên tâm về độ bền chắc của sản phẩm
                                        </p>
                                        <ul class=\"product-more-infor mt-30\">
                                            <li><span>Loại vàng</span> 610</li>
                                            <li><span>Màu</span> Vàng</li>
                                            <li><span>Quantity Per Case</span> 100ml</li>
                                            <li><span>Ethyl Alcohol</span> 70%</li>
                                            <li><span>Piece In One</span> Carton</li>
                                        </ul>
                                        <hr class=\"wp-block-separator is-style-dots\">
                                        <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward
                                            energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>
                                        <h4 class=\"mt-30\">Packaging & Delivery</h4>
                                        <hr class=\"wp-block-separator is-style-wide\">
                                        <p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane
                                            went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.
                                        </p>
                                        <p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian
                                            in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively
                                            dachshund.
                                        </p>
                                    </div>
                                    <h3 class=\"section-title style-1 mb-30\">Additional info</h3>
                                    <table class=\"font-md mb-30\">
                                        <tbody>
                                            <tr class=\"stand-up\">
                                                <th>Loại vàng</th>
                                                <td>
                                                    <p>610 - 18k</p>
                                                </td>
                                            </tr>
                                            <tr class=\"folded-wo-wheels\">
                                                <th>Cỡ tay</th>
                                                <td>
                                                    <p>Nữ từ 48kg đến 60kg</p>
                                                </td>
                                            </tr>
                                            <tr class=\"folded-wo-wheels\">
                                                <th>Cân nặng vàng</th>
                                                <td>
                                                    <p>Từ 4 phân đến 6 phân</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- <h3 class=\"section-title style-1 mb-30 mt-30\">Reviews (3)</h3> -->
                                    <!--Comments-->
                                    <!--comment form-->
                                </div>
                            </div>
                            <div class=\"row mt-60\">
                                <div class=\"col-12\">
                                    <h3 class=\"section-title style-1 mb-30\">Related products</h3>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"row related-products\">
                                        <div class=\"col-lg-3 col-md-4 col-12 col-sm-6\">
                                            <div class=\"product-cart-wrap small hover-up\">
                                                <div class=\"product-img-action-wrap\">
                                                    <div class=\"product-img product-img-zoom\">
                                                        <a href=\"shop-product-right.html\" tabindex=\"0\">
                                                            <img class=\"default-img\" src=\"";
        // line 705
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/shop/product-2-1.jpg\" alt=\"\">
                                                            <img class=\"hover-img\" src=\"";
        // line 706
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/shop/product-2-2.jpg\" alt=\"\">
                                                        </a>
                                                    </div>
                                                    <div class=\"product-action-1\">
                                                        <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal
\"><i class=\"fi-rs-search\"></i></a>
                                                        <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\" tabindex=\"0\"><i class=\"fi-rs-heart\"></i></a>
                                                        <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\" tabindex=\"0\"><i class=\"fi-rs-shuffle\"></i></a>
                                                    </div>
                                                    <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                        <span class=\"hot\">Hot</span>
                                                    </div>
                                                </div>
                                                <div class=\"product-content-wrap\">
                                                    <h2><a href=\"shop-product-right.html\" tabindex=\"0\">Ulstra Bass Headphone</a></h2>
                                                    <div class=\"rating-result\" title=\"90%\">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class=\"product-price\">
                                                        <span>\$238.85 </span>
                                                        <span class=\"old-price\">\$245.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3 col-md-4 col-12 col-sm-6\">
                                            <div class=\"product-cart-wrap small hover-up\">
                                                <div class=\"product-img-action-wrap\">
                                                    <div class=\"product-img product-img-zoom\">
                                                        <a href=\"shop-product-right.html\" tabindex=\"0\">
                                                            <img class=\"default-img\" src=\"";
        // line 737
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/shop/product-3-1.jpg\" alt=\"\">
                                                            <img class=\"hover-img\" src=\"";
        // line 738
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/shop/product-4-2.jpg\" alt=\"\">
                                                        </a>
                                                    </div>
                                                    <div class=\"product-action-1\">
                                                        <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal
\"><i class=\"fi-rs-search\"></i></a>
                                                        <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\" tabindex=\"0\"><i class=\"fi-rs-heart\"></i></a>
                                                        <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\" tabindex=\"0\"><i class=\"fi-rs-shuffle\"></i></a>
                                                    </div>
                                                    <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                        <span class=\"sale\">-12%</span>
                                                    </div>
                                                </div>
                                                <div class=\"product-content-wrap\">
                                                    <h2><a href=\"shop-product-right.html\" tabindex=\"0\">Smart Bluetooth Speaker</a></h2>
                                                    <div class=\"rating-result\" title=\"90%\">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class=\"product-price\">
                                                        <span>\$138.85 </span>
                                                        <span class=\"old-price\">\$145.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3 col-md-4 col-12 col-sm-6\">
                                            <div class=\"product-cart-wrap small hover-up\">
                                                <div class=\"product-img-action-wrap\">
                                                    <div class=\"product-img product-img-zoom\">
                                                        <a href=\"shop-product-right.html\" tabindex=\"0\">
                                                            <img class=\"default-img\" src=\"";
        // line 769
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/shop/product-4-1.jpg\" alt=\"\">
                                                            <img class=\"hover-img\" src=\"";
        // line 770
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/shop/product-4-2.jpg\" alt=\"\">
                                                        </a>
                                                    </div>
                                                    <div class=\"product-action-1\">
                                                        <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal
\"><i class=\"fi-rs-search\"></i></a>
                                                        <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\" tabindex=\"0\"><i class=\"fi-rs-heart\"></i></a>
                                                        <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\" tabindex=\"0\"><i class=\"fi-rs-shuffle\"></i></a>
                                                    </div>
                                                    <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                        <span class=\"new\">New</span>
                                                    </div>
                                                </div>
                                                <div class=\"product-content-wrap\">
                                                    <h2><a href=\"shop-product-right.html\" tabindex=\"0\">HomeSpeak 12UEA Goole</a></h2>
                                                    <div class=\"rating-result\" title=\"90%\">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class=\"product-price\">
                                                        <span>\$738.85 </span>
                                                        <span class=\"old-price\">\$1245.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3 col-md-4 col-12 col-sm-6\">
                                            <div class=\"product-cart-wrap small hover-up mb-0\">
                                                <div class=\"product-img-action-wrap\">
                                                    <div class=\"product-img product-img-zoom\">
                                                        <a href=\"shop-product-right.html\" tabindex=\"0\">
                                                            <img class=\"default-img\" src=\"";
        // line 801
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/shop/product-5-1.jpg\" alt=\"\">
                                                            <img class=\"hover-img\" src=\"";
        // line 802
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/shop/product-3-2.jpg\" alt=\"\">
                                                        </a>
                                                    </div>
                                                    <div class=\"product-action-1\">
                                                        <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal
\"><i class=\"fi-rs-search\"></i></a>
                                                        <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\" tabindex=\"0\"><i class=\"fi-rs-heart\"></i></a>
                                                        <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\" tabindex=\"0\"><i class=\"fi-rs-shuffle\"></i></a>
                                                    </div>
                                                    <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                        <span class=\"hot\">Hot</span>
                                                    </div>
                                                </div>
                                                <div class=\"product-content-wrap\">
                                                    <h2><a href=\"shop-product-right.html\" tabindex=\"0\">Dadua Camera 4K 2021EF</a></h2>
                                                    <div class=\"rating-result\" title=\"90%\">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class=\"product-price\">
                                                        <span>\$89.8 </span>
                                                        <span class=\"old-price\">\$98.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"banner-img banner-big wow fadeIn f-none animated mt-50\">
                                <img class=\"border-radius-10\" src=\"";
        // line 832
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/banner/banner-4.png\" alt=\"\">
                                <div class=\"banner-text\">
                                    <h4 class=\"mb-15 mt-40\">Repair Services</h4>
                                    <h2 class=\"fw-600 mb-20\">We're an Apple <br>Authorised Service Provider</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class=\"main\">
        <section class=\"newsletter p-30 text-white wow fadeIn animated\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-7 mb-md-3 mb-lg-0\">
                        <div class=\"row align-items-center\">
                            <div class=\"col flex-horizontal-center\">
                                <img class=\"icon-email\" src=\"";
        // line 851
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/theme/icons/icon-email.svg\" alt=\"\">
                                <h4 class=\"font-size-20 mb-0 ml-3\">Sign up to Newsletter</h4>
                            </div>
                            <div class=\"col my-4 my-md-0 des\">
                                <h5 class=\"font-size-15 ml-4 mb-0\">...and receive <strong>\$25 coupon for first shopping.</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-5\">
                        <!-- Subscribe Form -->
                        <form class=\"form-subcriber d-flex wow fadeIn animated\">
                            <input type=\"email\" class=\"form-control bg-white font-small\" placeholder=\"Enter your email\">
                            <button class=\"btn bg-dark text-white\" type=\"submit\">Subscribe</button>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </section>
        <section class=\"section-padding footer-mid\">
            <div class=\"container pt-15 pb-20\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"widget-about font-md mb-md-5 mb-lg-0\">
                            <div class=\"logo logo-width-1 wow fadeIn animated\">
                                <a href=\"index.html\"><img src=\"";
        // line 876
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/theme/logo.svg\" alt=\"logo\"></a>
                            </div>
                            <h5 class=\"mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated\">Contact</h5>
                            <p class=\"wow fadeIn animated\">
                                <strong>Address: </strong>562 Wellington Road, Street 32, San Francisco
                            </p>
                            <p class=\"wow fadeIn animated\">
                                <strong>Phone: </strong>+01 2222 365 /(+91) 01 2345 6789
                            </p>
                            <p class=\"wow fadeIn animated\">
                                <strong>Hours: </strong>10:00 - 18:00, Mon - Sat
                            </p>
                            <h5 class=\"mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated\">Follow Us</h5>
                            <div class=\"mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0\">
                                <a href=\"#\"><img src=\"";
        // line 890
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/theme/icons/icon-facebook.svg\" alt=\"\"></a>
                                <a href=\"#\"><img src=\"";
        // line 891
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/theme/icons/icon-twitter.svg\" alt=\"\"></a>
                                <a href=\"#\"><img src=\"";
        // line 892
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/theme/icons/icon-instagram.svg\" alt=\"\"></a>
                                <a href=\"#\"><img src=\"assets/imgs/theme/icons/icon-pinterest.svg\" alt=\"\"></a>
                                <a href=\"#\"><img src=\"assets/imgs/theme/icons/icon-youtube.svg\" alt=\"\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-3\">
                        <h5 class=\"widget-title wow fadeIn animated\">About</h5>
                        <ul class=\"footer-list wow fadeIn animated mb-sm-5 mb-md-0\">
                            <li><a href=\"#\">About Us</a></li>
                            <li><a href=\"#\">Delivery Information</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Terms &amp; Conditions</a></li>
                            <li><a href=\"#\">Contact Us</a></li>
                            <li><a href=\"#\">Support Center</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-2  col-md-3\">
                        <h5 class=\"widget-title wow fadeIn animated\">My Account</h5>
                        <ul class=\"footer-list wow fadeIn animated\">
                            <li><a href=\"#\">Sign In</a></li>
                            <li><a href=\"#\">View Cart</a></li>
                            <li><a href=\"#\">My Wishlist</a></li>
                            <li><a href=\"#\">Track My Order</a></li>
                            <li><a href=\"#\">Help</a></li>
                            <li><a href=\"#\">Order</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-4\">
                        <h5 class=\"widget-title wow fadeIn animated\">Install App</h5>
                        <div class=\"row\">
                            <div class=\"col-md-8 col-lg-12\">
                                <p class=\"wow fadeIn animated\">From App Store or Google Play</p>
                                <div class=\"download-app wow fadeIn animated\">
                                    <a href=\"#\" class=\"hover-up mb-sm-4 mb-lg-0\"><img class=\"active\" src=\"assets/imgs/theme/app-store.jpg\" alt=\"\"></a>
                                    <a href=\"#\" class=\"hover-up\"><img src=\"assets/imgs/theme/google-play.jpg\" alt=\"\"></a>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-lg-12 mt-md-3 mt-lg-0\">
                                <p class=\"mb-20 wow fadeIn animated\">Secured Payment Gateways</p>
                                <img class=\"wow fadeIn animated\" src=\"assets/imgs/theme/payment-method.png\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class=\"container pb-20 wow fadeIn animated\">
            <div class=\"row\">
                <div class=\"col-12 mb-20\">
                    <div class=\"footer-bottom\"></div>
                </div>
                <div class=\"col-lg-6\">
                    <p class=\"float-md-left font-sm text-muted mb-0\">&copy; 2021, <strong class=\"text-brand\">Evara</strong> - HTML Ecommerce Template </p>
                </div>
                <div class=\"col-lg-6\">
                    <p class=\"text-lg-end text-start font-sm text-muted mb-0\">
                        Designed by <a href=\"http://alithemes.com\" target=\"_blank\">Alithemes.com</a>. All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"text-center\">
                    <h5 class=\"mb-5\">Now Loading</h5>
                    <div class=\"loader\">
                        <div class=\"bar bar1\"></div>
                        <div class=\"bar bar2\"></div>
                        <div class=\"bar bar3\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1018 => 892,  1014 => 891,  1010 => 890,  993 => 876,  965 => 851,  943 => 832,  910 => 802,  906 => 801,  872 => 770,  868 => 769,  834 => 738,  830 => 737,  796 => 706,  792 => 705,  688 => 603,  680 => 600,  672 => 598,  669 => 597,  664 => 596,  662 => 595,  654 => 589,  642 => 585,  638 => 583,  633 => 582,  631 => 581,  269 => 222,  254 => 210,  244 => 203,  235 => 197,  220 => 185,  42 => 9,  39 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "product.twig", "C:\\wamp64\\www\\kimlanyii\\frontend\\views\\site\\product.twig");
    }
}
