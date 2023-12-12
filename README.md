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
  <x-dotted-light/>
  <x-dotted-dark/>
  <x-grid/>
  <x-dotted-light/>
  //below this just add you're code
  <div>HELOOO</div>
</main>

```

# Backgorunds available at the moment:

dotted-light
dotted-dark
grid-simple-light
grid-simple-dark
big-grid-colored
big-grid
grid-black-white
side-color
half-grid
