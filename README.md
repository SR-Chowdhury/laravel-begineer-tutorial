<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Laravel Basic to Advanced
- [ ]  **What is Laravel? Pre-requirement for learning Laravel**

> **Answer:** Laravel is a web application PHP framework. Before starting Laravel you should have knowledge on PHP & cocept of OOP.

- [ ]  **MVC pattern & MVT pattern?**

> **Answer:** M[Model] V[View] C[Controller] MVC used _Laravel_ && M[Model] V[View] T[Template] MVT used _Django_

- [ ]  **Laravel Homestead & Valet**

> **Answer:** Laravel _**Homestead**_ is an official, pre-packaged Vagrant box that provides you a wonderful development environment without requiring you to
> install PHP, a web server, and any other server software on your local machine.
> Homestead runs on any Windows, macOS, or Linux system and includes Nginx, PHP, MySQL, PostgreSQL, Redis, Memcached, Node, and all of the other software you need to develop amazing Laravel applications.
> **Valet** is a Laravel development environment for macOS minimalists like **Homestead**

- [ ]  **Architecture Concepts**

> **Answer:** Read the [Documentation of Laravel](https://laravel.com/docs/8.x/lifecycle) & Ready for Interview. Becuase majority of the question come from here. 

- [ ]  **Blade Template / Syntaxt**

> **Answer:** Blade is the simple, yet powerful templating engine that is included with Laravel. Blade template files use the **`.blade.php`** file extension and
> are typically stored in the resources/views directory.

- [ ] **Middleware in Laravel**

> **Answer:** Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application. There are several middleware
> included in the Laravel framework, including middleware for authentication and CSRF protection. All of these middleware are located in the
> **`app/Http/Middleware directory`**.
> * Create a Middleware **`php artisan make:middleware exampleMiddleware`**
> * Requesting Middleware: There are three types of Middleware
>   _1.Global Middleware_, 
>   _2.Assigning Middleware To Routes_, 
>   _3.Group Middleware_
> * **Global Middleware:** `app/Http/karnel.php` -> `protectd $middleware`  
> * **Assigning Middleware To Routes:** `app/Http/karnel.php` -> `protectd $routeMiddleware`  
>   **N.B.** When you want to use middleware for one or more routes.
>   ```
>       Route::get('/about', function() {
>           return view('about');
>       })->middleware('test');
>   ```
> * **Group Middleware:** `app/Http/karnel.php` -> `protected $routeMiddleware`  
>    ```
>    Route::middleware(['web'])->group(function () {
>        //
>    });
>    ```

- [ ] **Controller**
> **Answer:** Where we implement our logic. When a HTTP request comes through route to Controller than it pass to View or Models vice versa.
> 
> **N.B.**: Some changes comes in php v8.0
> * To create a controller using cmd or powershell `php artisan make:controller ExampleController`
> * **Web.php **
> ```
> use App\Http\Controllers\FirstController; [Top of the web.php route file]
> Route::get('/about', [FirstController::class, 'firstMethod']);
>   
> ```

- [ ]  **Route [url(), URL::to(), md5() encryption]**
> **Answer:** When you have given a name of a router like -
> 
> **web.php** 
>   ``` 
>       Route::get('/', [FirstController::class, 'Method1']);
>       Route::get('/about', [FirstController::class, 'Method2'])->name('about_page');
>       Route::get('/blog', [FirstController::class, 'Method3'])->name('blog_page');
>       Route::get(md5('/contact'), [FirstController::class, 'Method4'])->name('contact_page');
>   ```   
>   **x.blade.php**
>   ```
>       <a href="{{ url('/') }}">Home</a>
>       <a href="{{ URL::to('/about') }}">about</a>
>       <a href="{{ route('blog_page') }}">Blog</a>
>       <a href="{{ route('contact_page') }}">Contact</a>
>   ``` 
>   **N.B. `md5` means encryption & when you used in router then you must have give a route name()**
>
   
- [ ]  **Layouts Using Template Inheritance**
> **Answer:** When defining a child view, use the @extends Blade directive to specify which layout the child view should "inherit". 
> ``` 
>   @extends('hearder')
>       <h1>Bismillah</h1>
>   @extends('footer')
>   
> ```
>  Yeield in Laravel
> * welcome.html
> ```
>   <body>
>       @yeield('content')
>   </body>
> ```
> * index.html
> ```
>  @section ('content')
>  ------
>  @endsection
> ```
- [ ] **Asset in Laravel**
> **Answer:** declare asset `{{ asset('frontend/css/bootstrap.css') }}`
> 
> Even we can use `{{ URL::to('frontend/css/bootstrap.css') }}` 
> here **URL::to('')** & **asset('')** work same
> 
- [ ] **Root Directory Change in laravel**
> **Answer:** 
> First bring out all files from `public` folder to `root` folder / directory
> 
> Besides, assest should like `{{ asset('public/frontend/css/bootstrap.css') }}` here `public/` added because `index.php` now in root directory 
> 
- [ ] **Migration in Laravel**
> **Answer:** To create a table remember that table name should have in plural form.

        php artisan make:migration create_users_table --create=users
        php artisan migrate
  
  **N>B> Table->timestamp should be created as default value Current_Timestamp**
        
> 
- [ ] **@CSRF in Laravel**
> **Answer:** Cross-site request forgery (CSRF) are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authorized user.
> Thankfully, Laravel makes it easy to protect your application from CSRF by using `@csrf` in `form`
> 
 **Remember: A website or a webapplication is being hacked by attack in `form action` or in `route`**
> 
- [ ] **Asset in Laravel**
> **Answer:**
> 
- [ ] **Asset in Laravel**
> **Answer:**
> 
- [ ] **Asset in Laravel**
> **Answer:**
> 
- [ ] **Asset in Laravel**
> **Answer:**
> 
- [ ] **Asset in Laravel**
> **Answer:**
> 
- [ ] **Asset in Laravel**
> **Answer:**
> 
- [ ] **Asset in Laravel**
> **Answer:**
> 
- [ ] **Asset in Laravel**
> **Answer:**
> 
- [ ] **Asset in Laravel**
> **Answer:**
> 
- [ ] **Asset in Laravel**
> **Answer:**
> 
- [ ] **Asset in Laravel**
> **Answer:**
    
