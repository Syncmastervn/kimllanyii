<?php

/* index.twig */
class __TwigTemplate_18ba45829e23ecc1fe7c4c5e3940dae38c2d3d7f92cfaecc0a8fbbbb1556402a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
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

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"site-index\">
    <!-- Modal -->
    <!-- <div class=\"modal fade custom-modal\" id=\"onloadModal\" tabindex=\"-1\" aria-labelledby=\"onloadModalLabel\" aria-hidden=\"true\"></div> -->

    <!-- Quick view -->
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
                                        <img src=\"../web/imgs/shop/product-16-2.jpg\" alt=\"product image\">
                                    </figure>
                                    <figure class=\"border-radius-10\">
                                        <img src=\"../web/imgs/shop/product-16-1.jpg\" alt=\"product image\">
                                    </figure>
                                    <figure class=\"border-radius-10\">
                                        <img src=\"../web/imgs/shop/product-16-3.jpg\" alt=\"product image\">
                                    </figure>
                                    <figure class=\"border-radius-10\">
                                        <img src=\"../web/imgs/shop/product-16-4.jpg\" alt=\"product image\">
                                    </figure>
                                    <figure class=\"border-radius-10\">
                                        <img src=\"../web/imgs/shop/product-16-5.jpg\" alt=\"product image\">
                                    </figure>
                                    <figure class=\"border-radius-10\">
                                        <img src=\"../web/imgs/shop/product-16-6.jpg\" alt=\"product image\">
                                    </figure>
                                    <figure class=\"border-radius-10\">
                                        <img src=\"../web/imgs/shop/product-16-7.jpg\" alt=\"product image\">
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class=\"slider-nav-thumbnails pl-15 pr-15\">
                                    <div><img src=\"../web/imgs/shop/thumbnail-3.jpg\" alt=\"product image\"></div>
                                    <div><img src=\"../web/imgs/shop/thumbnail-4.jpg\" alt=\"product image\"></div>
                                    <div><img src=\"../web/imgs/shop/thumbnail-5.jpg\" alt=\"product image\"></div>
                                    <div><img src=\"../web/imgs/shop/thumbnail-6.jpg\" alt=\"product image\"></div>
                                    <div><img src=\"../web/imgs/shop/thumbnail-7.jpg\" alt=\"product image\"></div>
                                    <div><img src=\"../web/imgs/shop/thumbnail-8.jpg\" alt=\"product image\"></div>
                                    <div><img src=\"../web/imgs/shop/thumbnail-9.jpg\" alt=\"product image\"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                            <div class=\"social-icons single-share\">
                                <ul class=\"text-grey-5 d-inline-block\">
                                    <li><strong class=\"mr-10\">Share this:</strong></li>
                                    <li class=\"social-facebook\"><a href=\"#\"><img src=\"../web/imgs/theme/icons/icon-facebook.svg\" alt=\"\"></a></li>
                                    <li class=\"social-twitter\"> <a href=\"#\"><img src=\"../web/imgs/theme/icons/icon-twitter.svg\" alt=\"\"></a></li>
                                    <li class=\"social-instagram\"><a href=\"#\"><img src=\"../web/imgs/theme/icons/icon-instagram.svg\" alt=\"\"></a></li>
                                    <li class=\"social-linkedin\"><a href=\"#\"><img src=\"../web/imgs/theme/icons/icon-pinterest.svg\" alt=\"\"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"detail-info\">
                                <h3 class=\"title-detail mt-30\">Colorful Pattern Shirts HD450</h3>
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
                            Cam kết bán hàng đúng chất lượng
                            <!-- <ul>
                                <li><i class=\"fi-rs-smartphone\"></i> <a href=\"#\">(+01) - 2345 - 6789</a></li>
                                <li><i class=\"fi-rs-marker\"></i><a  href=\"page-contact.html\">Our location</a></li>
                            </ul> -->
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
                                    <a class=\"language-dropdown-active\" href=\"#\"> <i class=\"fi-rs-world\"></i> Tiếng việt <!-- <i class=\"fi-rs-angle-small-down\"> --></i></a>
                                    <!-- <ul class=\"language-dropdown\">
                                        <li><a href=\"#\"><img src=\"../web/imgs/theme/flag-fr.png\" alt=\"\">Français</a></li>
                                        <li><a href=\"#\"><img src=\"../web/imgs/theme/flag-dt.png\" alt=\"\">Deutsch</a></li>
                                        <li><a href=\"#\"><img src=\"../web/imgs/theme/flag-ru.png\" alt=\"\">Pусский</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li><i class=\"fi-rs-user\"></i><a href=\"page-login-register.html\">Log In / Sign Up</a></li> -->
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
                        <a href=\"index.html\"><img src=\"../web/imgs/theme/logo-5.svg\" alt=\"logo\"></a>
                    </div>
                    <div class=\"header-right\">
                        <div class=\"search-style-2\">
                            ";
        // line 196
        $context["form"] = $this->env->getExtension('yii\twig\Extension')->beginWidget("active_form");
        // line 197
        echo "                                <input name=\"SearchModel[search]\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["searchModel"] ?? null), "search", array()), "html", null, true);
        echo "\" placeholder=\"Search for items...\">
                            ";
        // line 198
        $this->env->getExtension('yii\twig\Extension')->endWidget("active_form");
        echo "
                        </div>
                        <div class=\"header-action-right\">
                            <div class=\"header-action-2\">
                                <div class=\"header-action-icon-2\">
                                    <a href=\"shop-wishlist.html\">
                                        <img class=\"svgInject\" alt=\"Evara\" src=\"../web/imgs/theme/icons/icon-heart.svg\">
                                        <span class=\"pro-count blue\">4</span>
                                    </a>
                                </div>
                                <div class=\"header-action-icon-2\">
                                    <a class=\"mini-cart-icon\" href=\"shop-cart.html\">
                                        <img alt=\"Evara\" src=\"../web/imgs/theme/icons/icon-cart.svg\">
                                        <span class=\"pro-count blue\">2</span>
                                    </a>
                                    <div class=\"cart-dropdown-wrap cart-dropdown-hm2\">
                                        <ul>
                                            <li>
                                                <div class=\"shopping-cart-img\">
                                                    <a href=\"shop-product-right.html\"><img alt=\"Evara\" src=\"../web/imgs/shop/thumbnail-3.jpg\"></a>
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
                                                    <a href=\"shop-product-right.html\"><img alt=\"Evara\" src=\"../web/imgs/shop/thumbnail-2.jpg\"></a>
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
                        <a href=\"index.html\"><img src=\"../web/imgs/theme/logo.svg\" alt=\"logo\"></a>
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
                        <p><i class=\"fi-rs-headset\"></i><span>Hotline</span> 0823602999 </p>
                    </div>
                    <p class=\"mobile-promotion\">Happy <span class=\"text-brand\">Mother's Day</span>. Big Sale Up to 40%</p>
                    <div class=\"header-action-right d-block d-lg-none\">
                        <div class=\"header-action-2\">
                            <div class=\"header-action-icon-2\">
                                <a href=\"shop-wishlist.html\">
                                    <img alt=\"Evara\" src=\"../web/imgs/theme/icons/icon-heart.svg\">
                                    <span class=\"pro-count white\">4</span>
                                </a>
                            </div>
                            <div class=\"header-action-icon-2\">
                                <a class=\"mini-cart-icon\" href=\"shop-cart.html\">
                                    <img alt=\"Evara\" src=\"../web/imgs/theme/icons/icon-cart.svg\">
                                    <span class=\"pro-count white\">2</span>
                                </a>
                                <div class=\"cart-dropdown-wrap cart-dropdown-hm2\">
                                    <ul>
                                        <li>
                                            <div class=\"shopping-cart-img\">
                                                <a href=\"shop-product-right.html\"><img alt=\"Evara\" src=\"../web/imgs/shop/thumbnail-3.jpg\"></a>
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
                                                <a href=\"shop-product-right.html\"><img alt=\"Evara\" src=\"../web/imgs/shop/thumbnail-4.jpg\"></a>
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
                    <a href=\"index.html\"><img src=\"../web/imgs/theme/logo.svg\" alt=\"logo\"></a>
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
                    ";
        // line 423
        $context["form"] = $this->env->getExtension('yii\twig\Extension')->beginWidget("active_form");
        // line 424
        echo "                                <input name=\"SearchModel[search]\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["searchModel"] ?? null), "search", array()), "html", null, true);
        echo "\" placeholder=\"Search for items...\">
                            ";
        // line 425
        $this->env->getExtension('yii\twig\Extension')->endWidget("active_form");
        echo "
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
                    <!-- <div class=\"single-mobile-header-info mt-30\">
                        <a  href=\"page-contact.html\"> Our location </a>
                    </div>
                    <div class=\"single-mobile-header-info\">
                        <a href=\"page-login-register.html\">Log In / Sign Up </a>
                    </div>
                    <div class=\"single-mobile-header-info\">
                        <a href=\"#\">(+01) - 2345 - 6789 </a>
                    </div> -->
                </div>
                <div class=\"mobile-social-icon\">
                    <h5 class=\"mb-15 text-grey-4\">Follow Us</h5>
                    <a href=\"#\"><img src=\"../web/imgs/theme/icons/icon-facebook.svg\" alt=\"\">Facebook KIMLAN</a>
                </div>
            </div>
        </div>
    </div>


    <main class=\"main\">       
        <section class=\"home-slider position-relative pt-50\">
            <div class=\"hero-slider-1 dot-style-1 dot-style-1-position-1\">
                <div class=\"single-hero-slider single-animation-wrap\">
                    <div class=\"container\">
                        <div class=\"row align-items-center slider-animated-1\">
                            <div class=\"col-lg-5 col-md-6\">
                                <div class=\"hero-slider-content-2\">
                                    <h4 class=\"animated\">Trade-in offer</h4>
                                    <h2 class=\"animated fw-900\">Nhẫn cặp tình yêu</h2>
                                    <h1 class=\"animated fw-900 text-brand\">Hơn 300 sản phẩm</h1>
                                    <p class=\"animated\">Save more with coupons & up to 70% off</p>
                                    <a class=\"animated btn btn-brush btn-brush-3\" href=\"shop-product-right.html\"> Shop Now </a>
                                </div>
                            </div>
                            <div class=\"col-lg-7 col-md-6\">
                                <div class=\"single-slider-img single-slider-img-1\">
                                    <img class=\"animated slider-1-1\" src=\"";
        // line 582
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/imgs/slider/slider-1B.png\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"single-hero-slider single-animation-wrap\">
                    <div class=\"container\">
                        <div class=\"row align-items-center slider-animated-1\">
                            <div class=\"col-lg-5 col-md-6\">
                                <div class=\"hero-slider-content-2\">
                                    <h4 class=\"animated\">Hot promotions</h4>
                                    <h2 class=\"animated fw-900\">Fashion Trending</h2>
                                    <h1 class=\"animated fw-900 text-7\">Great Collection</h1>
                                    <p class=\"animated\">Save more with coupons & up to 20% off</p>
                                    <a class=\"animated btn btn-brush btn-brush-2\" href=\"shop-product-right.html\"> Discover Now </a>
                                </div>
                            </div>
                            <div class=\"col-lg-7 col-md-6\">
                                <div class=\"single-slider-img single-slider-img-1\">
                                    <img class=\"animated slider-1-2\" src=\"../web/imgs/slider/slider-2.png\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"single-hero-slider single-animation-wrap\">
                    <div class=\"container\">
                        <div class=\"row align-items-center slider-animated-1\">
                            <div class=\"col-lg-5 col-md-6\">
                                <div class=\"hero-slider-content-2\">
                                    <h4 class=\"animated\">Upcoming Offer</h4>
                                    <h2 class=\"animated fw-900\">Big Deals From</h2>
                                    <h1 class=\"animated fw-900 text-8\">Manufacturer</h1>
                                    <p class=\"animated\">Clothing, Shoes, Bags, Wallets...</p>
                                    <a class=\"animated btn btn-brush btn-brush-1\" href=\"shop-product-right.html\"> Shop Now </a>
                                </div>
                            </div>
                            <div class=\"col-lg-7 col-md-6\">
                                <div class=\"single-slider-img single-slider-img-1\">
                                    <img class=\"animated slider-1-3\" src=\"../web/imgs/slider/slider-3.png\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"slider-arrow hero-slider-1-arrow\"></div>
        </section>
        <!-- <section class=\"featured section-padding position-relative\"></section> -->
        <section class=\"product-tabs section-padding position-relative wow fadeIn animated\">
            <!-- <div class=\"bg-square\"></div> -->
            <div class=\"container\">
                <div class=\"tab-header\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        ";
        // line 637
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["record"]) {
            // line 638
            echo "
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link ";
            // line 640
            echo ((($context["index"] == 0)) ? ("active") : (""));
            echo "\" id=\"nav-tab-";
            echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["tabs"] ?? null), $context["index"], array(), "array"), "html", null, true);
            echo "\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-";
            echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["tabs"] ?? null), $context["index"], array(), "array"), "html", null, true);
            echo "\" type=\"button\" role=\"tab\" aria-controls=\"tab-";
            echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["tabs"] ?? null), $context["index"], array(), "array"), "html", null, true);
            echo "\" aria-selected=\"";
            echo ((($context["index"] == 0)) ? ("true") : ("false"));
            echo "\">";
            echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["record"], "Name", array()), "html", null, true);
            echo "</button>
                            </li>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 644
        echo "                    </ul>
                    <a href=\"#\" class=\"view-more d-none d-md-flex\">View More<i class=\"fi-rs-angle-double-small-right\"></i></a>
                </div>
                <!--End nav-tabs-->
                <!-- CODING -->
                <!-- ################################################################################ -->
                <!-- ###################################FRONT END#################################### -->
                <!-- ################################################################################ -->

                
                <div class=\"tab-content wow fadeIn animated\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"tab-one\" role=\"tabpanel\" aria-labelledby=\"tab-one\"*>

                        <div class=\"row product-grid-4\">
                            ";
        // line 658
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tab_one"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 659
            echo "                                    
                                        <div class=\"col-lg-3 col-md-4 col-12 col-sm-6\">
                                            <div class=\"product-cart-wrap mb-30\">
                                                <div class=\"product-img-action-wrap\">
                                                
                                                    <div class=\"product-img product-img-zoom\">
                                                        <a href=\"";
            // line 665
            echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->path("site/fullwidth", array("data" => yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "Id", array()))), "html", null, true);
            echo "\">
                                                            ";
            // line 666
            $context["fileArray"] = twig_split_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "Images", array()), ";");
            // line 667
            echo "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fileArray"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["file"]) {
                // line 668
                echo "                                                                ";
                $context["imgClass"] = ((($context["index"] == 1)) ? ("hover-img") : ("default-img"));
                // line 669
                echo "                                                                <img class=\"";
                echo twig_escape_filter($this->env, ($context["imgClass"] ?? null), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
                echo "/imgs/shop/";
                echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                echo "\" alt=\"\">
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 671
            echo "                                                        </a>
                                                    </div>
                                                    
                                                    <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                        <span class=\"hot\">Hot</span>
                                                    </div>
                                                </div>
                                                <div class=\"product-content-wrap\">
                                                    <div class=\"product-category\">
                                                        <a href=\"shop-grid-right.html\">Vàng 18k</a>
                                                    </div>
                                                    <h2><a href=\"shop-product-right.html\">";
            // line 682
            echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "Name", array()), "html", null, true);
            echo "</a></h2>
                                                    <div class=\"product-price\">
                                                        <span>";
            // line 684
            echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "Price", array()), "html", null, true);
            echo "</span>
                                                    </div>
                                                    <div class=\"product-action-1 show\">
                                                        <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 693
        echo "                        </div>

                    </div>


                    <div class=\"tab-pane fade\" id=\"tab-two\" role=\"tabpanel\" aria-labelledby=\"tab-two\"*>

                        <div class=\"row product-grid-4\">
                            ";
        // line 701
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tab_two"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 702
            echo "                                    
                                        <div class=\"col-lg-3 col-md-4 col-12 col-sm-6\">
                                            <div class=\"product-cart-wrap mb-30\">
                                                <div class=\"product-img-action-wrap\">
                                                    <div class=\"product-img product-img-zoom\">
                                                        <a href=\"";
            // line 707
            echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->path("site/fullwidth", array("data" => yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "Id", array()))), "html", null, true);
            echo "\">
                                                            ";
            // line 708
            $context["fileArray"] = twig_split_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "Images", array()), ";");
            // line 709
            echo "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fileArray"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["file"]) {
                // line 710
                echo "                                                                ";
                $context["imgClass"] = ((($context["index"] == 1)) ? ("hover-img") : ("default-img"));
                // line 711
                echo "                                                                <img class=\"";
                echo twig_escape_filter($this->env, ($context["imgClass"] ?? null), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
                echo "/imgs/shop/";
                echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                echo "\" alt=\"\">
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 713
            echo "                                                        </a>
                                                    </div>
                                                    
                                                    <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                        <span class=\"hot\">Hot</span>
                                                    </div>
                                                </div>
                                                <div class=\"product-content-wrap\">
                                                    <div class=\"product-category\">
                                                        <a href=\"shop-grid-right.html\">Vàng 18k</a>
                                                    </div>
                                                    <h2><a href=\"shop-product-right.html\">";
            // line 724
            echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "Name", array()), "html", null, true);
            echo "</a></h2>
                                                    <div class=\"product-price\">
                                                        <span>";
            // line 726
            echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "Price", array()), "html", null, true);
            echo "</span>
                                                    </div>
                                                    <div class=\"product-action-1 show\">
                                                        <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 735
        echo "                        </div>

                    </div>

                    <div class=\"tab-pane fade\" id=\"tab-three\" role=\"tabpanel\" aria-labelledby=\"tab-three\"*>

                        <div class=\"row product-grid-4\">
                            ";
        // line 742
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tab_three"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 743
            echo "                                    
                                        <div class=\"col-lg-3 col-md-4 col-12 col-sm-6\">
                                            <div class=\"product-cart-wrap mb-30\">
                                                <div class=\"product-img-action-wrap\">
                                                    <div class=\"product-img product-img-zoom\">
                                                        <a href=\"";
            // line 748
            echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->path("site/fullwidth", array("data" => yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "Id", array()))), "html", null, true);
            echo "\">
                                                            ";
            // line 749
            $context["fileArray"] = twig_split_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "Images", array()), ";");
            // line 750
            echo "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fileArray"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["file"]) {
                // line 751
                echo "                                                                ";
                $context["imgClass"] = ((($context["index"] == 1)) ? ("hover-img") : ("default-img"));
                // line 752
                echo "                                                                <img class=\"";
                echo twig_escape_filter($this->env, ($context["imgClass"] ?? null), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
                echo "/imgs/shop/";
                echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                echo "\" alt=\"\">
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 754
            echo "                                                        </a>
                                                    </div>
                                                    
                                                    <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                        <span class=\"hot\">Hot</span>
                                                    </div>
                                                </div>
                                                <div class=\"product-content-wrap\">
                                                    <div class=\"product-category\">
                                                        <a href=\"shop-grid-right.html\">Vàng 18k</a>
                                                    </div>
                                                    <h2><a href=\"shop-product-right.html\">";
            // line 765
            echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "Name", array()), "html", null, true);
            echo "</a></h2>
                                                    <div class=\"product-price\">
                                                        <span>";
            // line 767
            echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "Price", array()), "html", null, true);
            echo "</span>
                                                    </div>
                                                    <div class=\"product-action-1 show\">
                                                        <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 776
        echo "                        </div>

                    </div>
                
                <!--End tab-content-->
            </div>
            
        </section>
        <!-- <section class=\"banner-2 section-padding pb-0\"></section> -->
        <!-- <section class=\"popular-categories section-padding mt-15 mb-25\"></section> -->
        <!-- <section class=\"banners mb-15\"></section> -->
            <!-- <section class=\"section-padding\"> </section> -->
        <!-- <section class=\"deals section-padding\">#### QUẢNG CÁO THÔNG BÁO ###</section> --> 
        <!-- <section class=\"section-padding\"></section> -->
        <section class=\"bg-grey-9 section-padding\">
            <div class=\"container pt-25 pb-25\">
                <div class=\"heading-tab d-flex\">
                    <div class=\"heading-tab-left wow fadeIn animated\">
                        <h3 class=\"section-title mb-20\"><span>Monthly</span> Best Sell</h3>
                    </div>
                    <div class=\"heading-tab-right wow fadeIn animated\">
                        <ul class=\"nav nav-tabs right no-border\" id=\"myTab-1\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link active\" id=\"nav-tab-one-1\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-one-1\" type=\"button\" role=\"tab\" aria-controls=\"tab-one\" aria-selected=\"true\">SP Mới</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"nav-tab-two-1\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-two-1\" type=\"button\" role=\"tab\" aria-controls=\"tab-two\" aria-selected=\"false\">Đặc biệt</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-3 d-none d-lg-flex\">
                        <div class=\"banner-img style-2 wow fadeIn animated\">
                            <img src=\"../web/imgs/banner/banner-9.jpg\" alt=\"\">
                            <div class=\"banner-text\">
                                <span>Woman Area</span>
                                <h4 class=\"mt-5\">Save 17% on <br>Clothing</h4>
                                <a href=\"shop-grid-right.html\" class=\"text-white\">Shop Now <i class=\"fi-rs-arrow-right\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-12\">
                        <div class=\"tab-content wow fadeIn animated\" id=\"myTabContent-1\">
                            <div class=\"tab-pane fade show active\" id=\"tab-one-1\" role=\"tabpanel\" aria-labelledby=\"tab-one-1\">
                                <div class=\"carausel-4-columns-cover arrow-center position-relative\">
                                    <div class=\"slider-arrow slider-arrow-2 carausel-4-columns-arrow\" id=\"carausel-4-columns-arrows\"></div>
                                    <div class=\"carausel-4-columns carausel-arrow-center\" id=\"carausel-4-columns\">
                                        <div class=\"product-cart-wrap\">
                                            <div class=\"product-img-action-wrap\">
                                                <div class=\"product-img product-img-zoom\">
                                                    <a href=\"shop-product-right.html\">
                                                        <img class=\"default-img\" src=\"../web/imgs/shop/product-1-1.jpg\" alt=\"\">
                                                        <img class=\"hover-img\" src=\"../web/imgs/shop/product-1-2.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-action-1\">
                                                    <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal\">
                                                    <i class=\"fi-rs-eye\"></i></a>
                                                    <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\"><i class=\"fi-rs-heart\"></i></a>
                                                    <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\"><i class=\"fi-rs-shuffle\"></i></a>
                                                </div>
                                                <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                    <span class=\"hot\">Hot</span>
                                                </div>
                                            </div>
                                            <div class=\"product-content-wrap\">
                                                <div class=\"product-category\">
                                                    <a href=\"shop-grid-right.html\">Nulla</a>
                                                </div>
                                                <h2><a href=\"shop-product-right.html\">Maecenas eget</a></h2>
                                                <div class=\"rating-result\" title=\"90%\">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class=\"product-price\">
                                                    <span>\$238.85 </span>
                                                    <span class=\"old-price\">\$245.8</span>
                                                </div>
                                                <div class=\"product-action-1 show\">
                                                    <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-cart-wrap\">
                                            <div class=\"product-img-action-wrap\">
                                                <div class=\"product-img product-img-zoom\">
                                                    <a href=\"shop-product-right.html\">
                                                        <img class=\"default-img\" src=\"../web/imgs/shop/product-2-1.jpg\" alt=\"\">
                                                        <img class=\"hover-img\" src=\"../web/imgs/shop/product-2-2.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-action-1\">
                                                    <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal\">
                                                    <i class=\"fi-rs-eye\"></i></a>
                                                    <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\"><i class=\"fi-rs-heart\"></i></a>
                                                    <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\"><i class=\"fi-rs-shuffle\"></i></a>
                                                </div>
                                                <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                    <span class=\"new\">New</span>
                                                </div>
                                            </div>
                                            <div class=\"product-content-wrap\">
                                                <div class=\"product-category\">
                                                    <a href=\"shop-grid-right.html\">Duis </a>
                                                </div>
                                                <h2><a href=\"shop-product-right.html\">Luctus suscipit</a></h2>
                                                <div class=\"rating-result\" title=\"90%\">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class=\"product-price\">
                                                    <span>\$138.85 </span>
                                                    <span class=\"old-price\">\$145.8</span>
                                                </div>
                                                <div class=\"product-action-1 show\">
                                                    <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-cart-wrap\">
                                            <div class=\"product-img-action-wrap\">
                                                <div class=\"product-img product-img-zoom\">
                                                    <a href=\"shop-product-right.html\">
                                                        <img class=\"default-img\" src=\"../web/imgs/shop/product-3-1.jpg\" alt=\"\">
                                                        <img class=\"hover-img\" src=\"../web/imgs/shop/product-3-2.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-action-1\">
                                                    <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal\">
                                                    <i class=\"fi-rs-eye\"></i></a>
                                                    <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\"><i class=\"fi-rs-heart\"></i></a>
                                                    <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\"><i class=\"fi-rs-shuffle\"></i></a>
                                                </div>
                                                <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                    <span class=\"best\">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class=\"product-content-wrap\">
                                                <div class=\"product-category\">
                                                    <a href=\"shop-grid-right.html\">Fusce </a>
                                                </div>
                                                <h2><a href=\"shop-product-right.html\">Aliquam ac</a></h2>
                                                <div class=\"rating-result\" title=\"90%\">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class=\"product-price\">
                                                    <span>\$152.85 </span>
                                                    <span class=\"old-price\">\$156.8</span>
                                                </div>
                                                <div class=\"product-action-1 show\">
                                                    <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-cart-wrap\">
                                            <div class=\"product-img-action-wrap\">
                                                <div class=\"product-img product-img-zoom\">
                                                    <a href=\"shop-product-right.html\">
                                                        <img class=\"default-img\" src=\"../web/imgs/shop/product-4-1.jpg\" alt=\"\">
                                                        <img class=\"hover-img\" src=\"../web/imgs/shop/product-4-2.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-action-1\">
                                                    <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal\">
                                                    <i class=\"fi-rs-eye\"></i></a>
                                                    <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\"><i class=\"fi-rs-heart\"></i></a>
                                                    <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\"><i class=\"fi-rs-shuffle\"></i></a>
                                                </div>
                                                <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                    <span class=\"hot\">-12%</span>
                                                </div>
                                            </div>
                                            <div class=\"product-content-wrap\">
                                                <div class=\"product-category\">
                                                    <a href=\"shop-grid-right.html\">Nunc </a>
                                                </div>
                                                <h2><a href=\"shop-product-right.html\">Fusce et ligula</a></h2>
                                                <div class=\"rating-result\" title=\"90%\">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class=\"product-price\">
                                                    <span>\$238.85 </span>
                                                    <span class=\"old-price\">\$245.8</span>
                                                </div>
                                                <div class=\"product-action-1 show\">
                                                    <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-cart-wrap\">
                                            <div class=\"product-img-action-wrap\">
                                                <div class=\"product-img product-img-zoom\">
                                                    <a href=\"shop-product-right.html\">
                                                        <img class=\"default-img\" src=\"../web/imgs/shop/product-11-1.jpg\" alt=\"\">
                                                        <img class=\"hover-img\" src=\"../web/imgs/shop/product-11-2.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-action-1\">
                                                    <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal\">
                                                    <i class=\"fi-rs-eye\"></i></a>
                                                    <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\"><i class=\"fi-rs-heart\"></i></a>
                                                    <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\"><i class=\"fi-rs-shuffle\"></i></a>
                                                </div>
                                                <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                    <span class=\"sale\">Sale</span>
                                                </div>
                                            </div>
                                            <div class=\"product-content-wrap\">
                                                <div class=\"product-category\">
                                                    <a href=\"shop-grid-right.html\">Aliquam</a>
                                                </div>
                                                <h2><a href=\"shop-product-right.html\">Morbi lacinia</a></h2>
                                                <div class=\"rating-result\" title=\"90%\">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class=\"product-price\">
                                                    <span>\$238.85 </span>
                                                    <span class=\"old-price\">\$245.8</span>
                                                </div>
                                                <div class=\"product-action-1 show\">
                                                    <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End tab-pane-->
                            <div class=\"tab-pane fade\" id=\"tab-two-1\" role=\"tabpanel\" aria-labelledby=\"tab-two-1\">
                                <div class=\"carausel-4-columns-cover arrow-center position-relative\">
                                    <div class=\"slider-arrow slider-arrow-2 carausel-4-columns-arrow\" id=\"carausel-4-columns-2-arrows\"></div>
                                    <div class=\"carausel-4-columns carausel-arrow-center\" id=\"carausel-4-columns-2\">
                                        <div class=\"product-cart-wrap\">
                                            <div class=\"product-img-action-wrap\">
                                                <div class=\"product-img product-img-zoom\">
                                                    <a href=\"shop-product-right.html\">
                                                        <img class=\"default-img\" src=\"../web/imgs/shop/product-6-1.jpg\" alt=\"\">
                                                        <img class=\"hover-img\" src=\"../web/imgs/shop/product-6-2.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-action-1\">
                                                    <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal\">
                                                    <i class=\"fi-rs-eye\"></i></a>
                                                    <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\"><i class=\"fi-rs-heart\"></i></a>
                                                    <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\"><i class=\"fi-rs-shuffle\"></i></a>
                                                </div>
                                                <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                    <span class=\"hot\">Hot</span>
                                                </div>
                                            </div>
                                            <div class=\"product-content-wrap\">
                                                <div class=\"product-category\">
                                                    <a href=\"shop-grid-right.html\">Watch</a>
                                                </div>
                                                <h2><a href=\"shop-product-right.html\">Cotton Leaf Printed 2</a></h2>
                                                <div class=\"rating-result\" title=\"90%\">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class=\"product-price\">
                                                    <span>\$238.85 </span>
                                                    <span class=\"old-price\">\$245.8</span>
                                                </div>
                                                <div class=\"product-action-1 show\">
                                                    <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-cart-wrap\">
                                            <div class=\"product-img-action-wrap\">
                                                <div class=\"product-img product-img-zoom\">
                                                    <a href=\"shop-product-right.html\">
                                                        <img class=\"default-img\" src=\"../web/imgs/shop/product-7-1.jpg\" alt=\"\">
                                                        <img class=\"hover-img\" src=\"../web/imgs/shop/product-7-2.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-action-1\">
                                                    <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal\">
                                                    <i class=\"fi-rs-eye\"></i></a>
                                                    <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\"><i class=\"fi-rs-heart\"></i></a>
                                                    <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\"><i class=\"fi-rs-shuffle\"></i></a>
                                                </div>
                                                <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                    <span class=\"new\">New</span>
                                                </div>
                                            </div>
                                            <div class=\"product-content-wrap\">
                                                <div class=\"product-category\">
                                                    <a href=\"shop-grid-right.html\">Watch</a>
                                                </div>
                                                <h2><a href=\"shop-product-right.html\">Smart Speaker</a></h2>
                                                <div class=\"rating-result\" title=\"90%\">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class=\"product-price\">
                                                    <span>\$138.85 </span>
                                                    <span class=\"old-price\">\$145.8</span>
                                                </div>
                                                <div class=\"product-action-1 show\">
                                                    <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-cart-wrap\">
                                            <div class=\"product-img-action-wrap\">
                                                <div class=\"product-img product-img-zoom\">
                                                    <a href=\"shop-product-right.html\">
                                                        <img class=\"default-img\" src=\"../web/imgs/shop/product-5-1.jpg\" alt=\"\">
                                                        <img class=\"hover-img\" src=\"../web/imgs/shop/product-5-1.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-action-1\">
                                                    <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal\">
                                                    <i class=\"fi-rs-eye\"></i></a>
                                                    <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\"><i class=\"fi-rs-heart\"></i></a>
                                                    <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\"><i class=\"fi-rs-shuffle\"></i></a>
                                                </div>
                                                <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                    <span class=\"best\">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class=\"product-content-wrap\">
                                                <div class=\"product-category\">
                                                    <a href=\"shop-grid-right.html\">Watch</a>
                                                </div>
                                                <h2><a href=\"shop-product-right.html\">Hugy Speaker</a></h2>
                                                <div class=\"rating-result\" title=\"90%\">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class=\"product-price\">
                                                    <span>\$152.85 </span>
                                                    <span class=\"old-price\">\$156.8</span>
                                                </div>
                                                <div class=\"product-action-1 show\">
                                                    <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-cart-wrap\">
                                            <div class=\"product-img-action-wrap\">
                                                <div class=\"product-img product-img-zoom\">
                                                    <a href=\"shop-product-right.html\">
                                                        <img class=\"default-img\" src=\"../web/imgs/shop/product-10-1.jpg\" alt=\"\">
                                                        <img class=\"hover-img\" src=\"../web/imgs/shop/product-10-2.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-action-1\">
                                                    <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal\">
                                                    <i class=\"fi-rs-eye\"></i></a>
                                                    <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\"><i class=\"fi-rs-heart\"></i></a>
                                                    <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\"><i class=\"fi-rs-shuffle\"></i></a>
                                                </div>
                                                <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                    <span class=\"hot\">-12%</span>
                                                </div>
                                            </div>
                                            <div class=\"product-content-wrap\">
                                                <div class=\"product-category\">
                                                    <a href=\"shop-grid-right.html\">Watch</a>
                                                </div>
                                                <h2><a href=\"shop-product-right.html\">Smart Speaker</a></h2>
                                                <div class=\"rating-result\" title=\"90%\">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class=\"product-price\">
                                                    <span>\$238.85 </span>
                                                    <span class=\"old-price\">\$245.8</span>
                                                </div>
                                                <div class=\"product-action-1 show\">
                                                    <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-cart-wrap\">
                                            <div class=\"product-img-action-wrap\">
                                                <div class=\"product-img product-img-zoom\">
                                                    <a href=\"shop-product-right.html\">
                                                        <img class=\"default-img\" src=\"../web/imgs/shop/product-12-1.jpg\" alt=\"\">
                                                        <img class=\"hover-img\" src=\"../web/imgs/shop/product-12-2.jpg\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-action-1\">
                                                    <a aria-label=\"Quick view\" class=\"action-btn small hover-up\" data-bs-toggle=\"modal\" data-bs-target=\"#quickViewModal\">
                                                    <i class=\"fi-rs-eye\"></i></a>
                                                    <a aria-label=\"Add To Wishlist\" class=\"action-btn small hover-up\" href=\"shop-wishlist.html\"><i class=\"fi-rs-heart\"></i></a>
                                                    <a aria-label=\"Compare\" class=\"action-btn small hover-up\" href=\"shop-compare.html\"><i class=\"fi-rs-shuffle\"></i></a>
                                                </div>
                                                <div class=\"product-badges product-badges-position product-badges-mrg\">
                                                    <span class=\"sale\">Sale</span>
                                                </div>
                                            </div>
                                            <div class=\"product-content-wrap\">
                                                <div class=\"product-category\">
                                                    <a href=\"shop-grid-right.html\">Watch</a>
                                                </div>
                                                <h2><a href=\"shop-product-right.html\">Cotton Leaf Printed</a></h2>
                                                <div class=\"rating-result\" title=\"90%\">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class=\"product-price\">
                                                    <span>\$238.85 </span>
                                                    <span class=\"old-price\">\$245.8</span>
                                                </div>
                                                <div class=\"product-action-1 show\">
                                                    <a aria-label=\"Add To Cart\" class=\"action-btn hover-up\" href=\"shop-cart.html\"><i class=\"fi-rs-shopping-bag-add\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!--End tab-content-->
                    </div>
                    <!--End Col-lg-9-->
                </div>
            </div>
        </section>
        <!--  section class=\"section-padding\"></section>-->
        <!-- <section class=\"mb-45\"></section> -->
    </main>
    <footer class=\"main\">
        <!-- <section class=\"newsletter p-30 text-white wow fadeIn animated\"></section> -->
        <section class=\"section-padding footer-mid\">
            <div class=\"container pt-15 pb-20\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"widget-about font-md mb-md-5 mb-lg-0\">
                            <div class=\"logo logo-width-1 wow fadeIn animated\">
                                <a href=\"index.html\"><img src=\"../web/imgs/theme/logo.svg\" alt=\"logo\"></a>
                            </div>
                            <h5 class=\"mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated\">Liên hệ chúng tôi</h5>
                            <p class=\"wow fadeIn animated\">
                                <strong>Địa chỉ: </strong>số 48 & 49 Lý Tự Trọng, phường An Lộc, thị xã Bình Long, tỉnh Bình Phước
                            </p>
                            <p class=\"wow fadeIn animated\">
                                <strong>Điện thoại liên lạc: </strong>0918424696 (Bộ phận thiết kế)
                            </p>
                            <p class=\"wow fadeIn animated\">
                                <strong>Giờ làm việc: </strong>7:00 sáng - 18:40 (từ thứ hai đến chủ nhật)
                            </p>
                            <h5 class=\"mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated\">FACEBOOK</h5>
                            <div class=\"mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0\">
                                <a href=\"#\"><img src=\"../web/imgs/theme/icons/icon-facebook.svg\" alt=\"\">KIMLAN</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-3\">
                        <h5 class=\"widget-title wow fadeIn animated\">Liên kết</h5>
                        <ul class=\"footer-list wow fadeIn animated mb-sm-5 mb-md-0\">
                            <li><a href=\"#\">Đang hoàn thiện</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-2  col-md-3\">
                        <h5 class=\"widget-title wow fadeIn animated\">Tài khoản khách hàng</h5>
                        <ul class=\"footer-list wow fadeIn animated\">
                            <li><a href=\"#\">Đang hoàn thiện</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-4\">
                        <h5 class=\"widget-title wow fadeIn animated\">Phương thức thanh toán!</h5>
                        <div class=\"row\">
                            <div class=\"col-md-8 col-lg-12\">
                                <p class=\"wow fadeIn animated\">Chấp nhận thanh toán các loại thẻ tín dụng</p>
                                <p class=\"wow fadeIn animated\">Có dịch vụ cầm đồ</p>
                                <p class=\"wow fadeIn animated\">Có dịch vụ rút tiền bằng thẻ tín dụng</p>
                                
                            </div>
                            <div class=\"col-md-4 col-lg-12 mt-md-3 mt-lg-0\">
                                <p class=\"mb-20 wow fadeIn animated\">Secured Payment Gateways</p>
                                <img class=\"wow fadeIn animated\" src=\"../web/imgs/theme/payment-method.png\" alt=\"\">
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
                    <h5 class=\"mb-10\">Now Loading</h5>
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
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  969 => 776,  954 => 767,  949 => 765,  936 => 754,  923 => 752,  920 => 751,  915 => 750,  913 => 749,  909 => 748,  902 => 743,  898 => 742,  889 => 735,  874 => 726,  869 => 724,  856 => 713,  843 => 711,  840 => 710,  835 => 709,  833 => 708,  829 => 707,  822 => 702,  818 => 701,  808 => 693,  793 => 684,  788 => 682,  775 => 671,  762 => 669,  759 => 668,  754 => 667,  752 => 666,  748 => 665,  740 => 659,  736 => 658,  720 => 644,  700 => 640,  696 => 638,  692 => 637,  634 => 582,  474 => 425,  469 => 424,  467 => 423,  239 => 198,  234 => 197,  232 => 196,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "C:\\wamp64\\www\\kimlanyii\\frontend\\views\\site\\index.twig");
    }
}
