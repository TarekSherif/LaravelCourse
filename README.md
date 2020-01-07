# LaravelCourse

RTC11-11-2018

# Laravel web developer

## Course Layout

- Introduction
- Route
- View ,Controller , Layouts
- Request , Validation
- Authentication ,DB Class (CRUD)
- Migration
- Model (CRUD)
- Seed , Factory
- Collections
- Session & Cookies
- Middleware
- Helpers
- project

---

# Course Requirements

## Necessary Requirements

- HTML
- PHP
- SQL

## Preferred Requirements

- CSS
- JS
- Git

---

# Environment Setup

## Nodejs

    # If you don't already have php installed:
    > https://www.php.net/

## Nodejs

    # If you don't already have mysql installed:
    > https://www.mysql.com/

## Nodejs

    # If you don't already have Nodejs installed:
    > https://nodejs.org/en/

## Composer

    # If you don't already have Composer installed:
    > https://getcomposer.org/

## laravel

    # If you don't already have the laravel installed:
    > composer global require "laravel/installer"

## create a new laravel application

    > composer create-project --prefer-dist laravel/laravel ProjectName

## Development server

Run `php artisan serve` for a dev server. Navigate to `http://localhost:4200/`. The app will automatically reload if you change any of the source files.

---

# lecture 2 Routing

## Routing - Basic Routing

```php
	Route::get('foo', function () {
    return 'Hello World';
    });
```

## Routing Available Router Methods

```php
	Route::get($uri, $callback);
    Route::post($uri, $callback);
    Route::put($uri, $callback);
    Route::patch($uri, $callback);
    Route::delete($uri, $callback);
    Route::options($uri, $callback);
```

## Routing View Routes

```php
    Route::view('/welcome', 'welcome');

    Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
```

## Routing Parameters

### Required Parameters

```php
    Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
        //
    });
```

### Optional Parameters

```php
	Route::get('user/{name?}', function ($name = null) {
    return $name;
    });

    Route::get('user/{name?}', function ($name = 'John') {
        return $name;
    });
```

## Routing Regular Expression Constraints

```php
    Route::get('user/{name}', function ($name) {
        //
    })->where('name', '[A-Za-z]+');

    Route::get('user/{id}', function ($id) {
        //
    })->where('id', '[0-9]+');

    Route::get('user/{id}/{name}', function ($id, $name) {
        //
    })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
```

### Global Constraints

    define these patterns in the boot method of your RouteServiceProvider:
    ```php
    /**
    * Define your route model bindings, pattern filters, etc.
    *
    * @return void
    */
    public function boot()
    {
        Route::pattern('id', '[0-9]+');

        parent::boot();
    }
    ```

To learn more about Regular Expression : `https://regexr.com/`

## Routing Named Routes

```php
    Route::get('user/profile', function () {
        //
    })->name('profile');

    Route::get('user/profile', 'UserProfileController@show')->name('profile');
```

### Generating URLs To Named Routes

```php
  // Generating URLs...
  $url = route('profile');

  // Generating Redirects...
  return redirect()->route('profile');
```

    # If you want to Show  route:list :
      > 	php artisan route:list

---

# lecture 3 View Blade syntax

---

# lecture 4 Routes
