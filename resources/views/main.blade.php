<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSS Grid Example</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo">SCC Grid Example</div>
                <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
            </div>  <!-- end top-nav -->

            <div class="hero container">
                <div class="hero-copy">
                    <h1>CSS Grid Example</h1>
                    <p>A practical example of using CSS Grid for a typical website layout.</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">Button 1</a>
                        <a href="#" class="button button-white">Button 2</a>
                    </div>
                </div> <!-- end hero-copy  -->
                <div class="hero-image">
                    <img src="/public/img/macbook-pro-laravel.png" alt="hero image">
                </div>
            </div>  <!-- end hero -->
        </header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">CSS Grid Example</h1>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda fuga incidunt iste provident voluptate. Ad blanditiis est labore numquam perspiciatis possimus quae tempora, veritatis! Minus nisi odit quas tempora ullam.</p>

                <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div>

                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="/public/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><span class="product-name">Mack Book Pro</span></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/public/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><span class="product-name">Mack Book Pro</span></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/public/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><span class="product-name">Mack Book Pro</span></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/public/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><span class="product-name">Mack Book Pro</span></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/public/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><span class="product-name">Mack Book Pro</span></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/public/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><span class="product-name">Mack Book Pro</span></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/public/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><span class="product-name">Mack Book Pro</span></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/public/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><span class="product-name">Mack Book Pro</span></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                </div>  <!-- end products -->

                <div class="text-center button-container">
                    <a href="#" class="button">View more products</a>
                </div>

            </div>  <!-- and container -->
        </div>  <!-- and featured-section -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">From Our Blog</h1>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias blanditiis debitis eligendi harum id ipsa magnam minima nemo nisi non obcaecati pariatur porro qui, quos sapiente ut vel veniam.</p>

                <div class="blog-posts">
                    <div class="blog-post" id="blog1">
                        <a href="#"><img src="/public/img/blog1.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus
                            obcaecati officia suscipit!
                        </div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <a href="#"><img src="/public/img/blog2.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 2</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus
                            obcaecati officia suscipit!
                        </div>
                    </div>
                    <div class="blog-post" id="blog3">
                        <a href="#"><img src="/public/img/blog3.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 3</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus
                            obcaecati officia suscipit!
                        </div>
                    </div>
                </div>  <!-- end blog-posts -->
            </div>  <!-- end container -->
        </div> <!-- end blog-section -->

        <footer>
            <div class="footer-content container">
                <div class="made-with">Made with <i class="fa fa-heart">by Andre Madarang</i></div>
                <ul>
                    <li>Follow Me:</li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>  <!-- end footer-content -->
        </footer>
    </body>
</html>
