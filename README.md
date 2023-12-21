<img src="https://github.com/ibelick/background-snippets/blob/main/public/cover.webp" alt="logo"/>

# Laravel - Composer Package for the https://bg.ibelick.com/ backgrounds.

## Instalation

```composer
composer require livghit\laragrounds
```

```php
//add this to the Service Providers
LaragroundsServiceProvider::class;

//also add this to the tailwind.config.js under require
"./vendor/livghit/laragrounds/src/Views/Components/**/*.php",
```

```php

```

After those steps you are ready to use the backgrounds :

```php
<main>
  //this sets the bg
  <x-dotted-dark/>
  <x-grid/>
  //below this just add you're code
  <div>HELOOO</div>
</main>

```

# Backgorunds available at the moment:

```php
<x-dotted-light />
<x-dotted-dark />
<x-grid-simple-light />
<x-grid-simple-dark />
<x-big-grid-colored color="red"/>
<x-big-grid-colored color="rgba(234,44,222,0.4)" />
<x-big-grid />
<x-grid-black-white />
<x-side-color />
<x-half-grid/>
```
