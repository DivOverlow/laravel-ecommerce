<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1400 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

 git init
 git status
 git add .
 git commit -m"P17 - Artisan Command for installing"
 git push
  


1. php artisan make:model Product -m
   php artisan migrate
   php artisan make:seed ProductsTableSeeder
   php artisan db:seed
   
2. php artisan make:controller LandingPageController -r
   php artisan make:controller ShopController -r
   
3. php artisan make:Controller CartController -r
   https://github.com/hardevine/LaravelShoppingcart
 
4. add heplers.php to autoload 
   composer dump-autoload 
   
5. php artisan make:controller SaveForLaterController -r

6. php artisan make:controller CheckoutController -r
   https://stripe.com/docs/stripe-js/elements/quickstart
   https://github.com/cartalyst/stripe-laravel
   Test card 
   4242 4242 4242 4242 04/20  420
 
7. php artisan make:request CheckoutRequest

8. php artisan make:model Category -m
   php artisan make:seed CategoriesTableSeeder
   php artisan migrate:refresh
   php artisan db:seed
   php artisan make:migration create_category_product_table --create=category_product
9. php artisan make:model Coupon -m
   php artisan make:seed CouponsTableSeeder
   php artisan migrate:refresh --seed
   https://www.youtube.com/redirect?redir_token=zdBiFCluk4Tx9UyN-Lz9lJombQd8MTU2NDU4ODI0OEAxNTY0NTAxODQ4&v=N9U4FYLBEiQ&q=https%3A%2F%2Fadamwathan.me%2F2015%2F09%2F03%2Fpushing-polymorphism-to-the-database%2F&event=video_description   
   php artisan make:controller CouponsController -r
 
10. composer dumpautoload
    php artisan migrate:fresh --seed
https://laravelvoyager.com/
    php artisan make:model CategoryProduct
      
12. php artisan make:migration add_image_to_products_table
    php artisan migrate
    php artisan make:migration add_images_to_products_table
    php artisan migrate
    
    
13. php artisan make:auth

17. php artisan make:command EcommerceInstall
    php artisan ecommerce:install
    composer dump-autoload
    php artisan ecommerce:install
        (or)
    php artisan ecommerce:install --force
    
18. php artisan make:model Order -m
    php artisan make:model OrederProduct -m
    
19. php artisan make:mail OrderPlaced
    php artisan vendor:publish

20. composer require nicolaslopezj/searchable
    https://github.com/nicolaslopezj/searchable

21. composer require laravel/scout
    composer require algolia/algoliasearch-client-php:^2.2
    
22. php artisan tinker
    >>> App\Product::find(1)->categories
    >>> App\Product::find(1)->categories->pluck('name')->toArray()
    22. php artisan ecommerce:install

23. git checkout -b vue-algolia
                  
25.
    git commit -m"P25 - Fix. Don't allow negative totals in checkout"
    git push
    php artisan make:listener CartUpdateListener
    php artisan make:job UpdateCoupon
    
