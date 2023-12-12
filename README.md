<img src="https://github.com/ibelick/background-snippets/blob/main/public/cover.webp" alt="logo"/>

# Composer Package for the https://bg.ibelick.com/ backgrounds.

## Instalation

```composer
composer require livghit\laragrounds
```

```php
//add this to the Service Providers
LaragroundsServiceProvider::class;
```

After those steps you are ready to use the backgrounds :

```php
<main>
  //this sets the bg
  <x-/>
  <x-dotted-dark/>
  <x-grid/>
  <x-/>
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
<x-big-grid />
<x-grid-black-white />
<x-side-color />
<x-half-grid/>
```
