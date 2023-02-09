# Laravel Dump Server

This is a wrapper to Beyondcode's [Laravel Dump Servers](https://github.com/beyondcode/laravel-dump-server). It basiacally improves the main package's HTML output functionality by adding the following features:

1. It will remove the previously printed things when a test runs. If you don't want to do that, make `clear_all` `false` in `config/dump-server.php`.
2. It registers a route `/dump-server` and when you display dumpped file on that route, you will get auto-refresh.
3. Dump file is in dark mode.

## Installation
```
sail composer require bakgul/laravel-dump-server --dev
```

Next, you need to publish config file.

```
sail artisan vendor:publish --provider="Bakgul\LaravelDumpServer\LaravelDumpServerServiceProvider"
```

## Usage

1. Run Vite:
```
npm run dev
``` 
2. Listen to dump server: 
```
sail artisan dump-server --format=html > vendor/bakgul/laravel-dump-server/resources/views/dump.html
```
3. Add `dump()` method anywhere you want to display anything.

4. Go to route `/dump-server`

## License

The MIT License (MIT). Please see License File for more information.