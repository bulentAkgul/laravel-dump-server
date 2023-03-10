# Laravel Dump Server

This is a wrapper to Beyondcode's [Laravel Dump Server](https://github.com/beyondcode/laravel-dump-server). It basiacally improves the main package's HTML output functionality by adding the following features:

1. It will remove the previously printed things when a test runs. If you don't want to do that, make `reset_on_each_test` `false` in `config/dump-server.php`.
2. It registers a route which is `/dump-server`, and when you display dumpped file on that route, you will get auto-refresh.
3. Dump file is in dark mode. But, because of a reason that I couldn't figure out, the dark mode will be active after 2 tests runs.

## Installation

First, you need to install the package.

```
sail composer require bakgul/laravel-dump-server --dev
```

Next, you need to publish config file.

```
sail artisan vendor:publish --provider="Bakgul\LaravelDumpServer\LaravelDumpServerServiceProvider"
```

## Configuration

Add the following part to `laravel({ ... })` in `vite.config.js`

```
refresh: [
    "vendor/bakgul/laravel-dump-server/resources/views/dump.html",
    "resources/**",
    "routes/**",
],
```

Modify your `TestCase`

```
use Bakgul\LaravelDumpServer\Concerns\HasDumper;

class TestCase extends BaseTestCase
{
    use HasDumper;

    public function setUp(): void
    {
        parent::setUp();

        $this->resetDumper();
    }
}
```

## Usage

Run Vite:

```
npm run dev
```

Listen to dump server

```
sail artisan dump-server --format=html > vendor/bakgul/laravel-dump-server/resources/dump.html
```

Add `dump($varToDump)` method anywhere you want to display something.

Go to route `/dump-server`.

## License

This is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).