# LaravelCourse

RTC11-11-2018

# Laravel web developer

## Course Layout

- Introduction
- Route, Controller
- View, Layouts
- Request, Validation
- Authentication, DB Class (CRUD)
- Migration
- Model (CRUD)
- Seed, Factory
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

## mysql

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

### RESTful Resource Controllers

    # To Creating a Controller Write in cmd
      > 	php artisan make:controller EmpController

```php
Route::resource('emps', 'EmpController');
```

+-----------+-----------------+---------+-------------+
| Verb | Path | Action | Route Name |
+-----------+-----------------+---------+-------------+
| GET | /emp | index | emp.index |
+-----------+-----------------+---------+-------------+
| GET | /emp/create | create | emp.create |
+-----------+-----------------+---------+-------------+
| POST | /emp | store | emp.store |
+-----------+-----------------+---------+-------------+
| GET | /emp/{emp} | show | emp.show |
+-----------+-----------------+---------+-------------+
| GET | /emp/{emp}/edit | edit | emp.edit |
+-----------+-----------------+---------+-------------+
| PUT/PATCH | /emp/{emp} | update | emp.update |
+-----------+-----------------+---------+-------------+
| DELETE | /emp/{emp} | destroy | emp.destroy |
+-----------+-----------------+---------+-------------+

### API Resource Routes

    # To Creating a Controller Write in cmd
      > 	php artisan make:controller EmpController --api

```php
Route::apiResource('emps', 'EmpController');
OR
Route::apiResources([
    'emps' => 'EmpController',
    'posts' => 'PostController'
]);
```

---

# lecture 3 View Blade syntax

## Blade syntax - Basic output

```php
// Displaying
{{ $x }} - Echo content
{!! $x !!} - Echo content without escaping special characters
{{ $x or 'default' }} - Echo content with a default value

// Comments
 {{-- This comment will not be present in the rendered HTML --}}

// PHP
@php...@endphp
<?php  ?>
```

## Blade syntax - Path Control

```php
// If Statements
@if, @elseif, @else and @endif
@unless, @endunless

// Loops
@for...@endfor
@foreach...@endforeach
@forelse...@empty...@endforelse
@while...@endwhile
@continue, @continue($user->type==1)
@break, $break($user->type==1)
$loop - index, iteration, remaining, count, first, last, depth, parent
```

## Blade syntax - Template inheritance

```php
// Defining A Layout
@yield('name')
@yield('x', 'y') - Yields the content of a section called x; defaults to y if x is not defined.
@section('name')
@endsection

// Extending A Layout
@extends('template')
@section('name')
@endsection

@section('name', 'value')
@section('name', $value)
```

## Blade syntax - including

```php
@include('view.name'])

@include('view.name', ['some' => 'data'])

@includeIf('view.name', ['some' => 'data'])

@includeWhen($boolean, 'view.name', ['some' => 'data'])
```

## Blade syntax - Forms

```php
// csrf_token
    {{ csrf_token() }}

// CSRF Field
	@csrf

// Method Field
	@method('PUT')
```

## Blade syntax - Rendering JSON

```php
<script>
 		var app = <?php echo json_encode($array); ?>;
 </script>

<script>
 		var app = @json($array);
 </script>
```

## Blade syntax - multi language

```php
@lang('messages.welcome')
```

---

# lecture 4 Request, Validation

---
