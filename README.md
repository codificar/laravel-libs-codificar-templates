# laravel-templates

Lib for email templates


## Getting Started

Add in composer.json:

```php
"repositories": [
    {
        "type": "vcs",
        "url": "https://libs:ofImhksJ@git.codificar.com.br/laravel-libs/codificar-templates.git"
    }
]
```

```php
require:{
        "codificar/email-templates": "0.1.1",
}
```

```php
"autoload": {
    "psr-4": {
        "Codificar\\Templates\\": "vendor/codificar/email-templates/src/"
    },
    "files": [
	    "vendor/codificar/email-templates/src/resources/helper.php"
    ]
}
```
Update project dependencies:

```shell
$ composer update
```

Register the service provider in `config/app.php`:

```php
'providers' => [
  /*
   * Package Service Providers...
   */
  Codificar\Templates\TemplateServiceProvider::class,
],
```



Check if has the laravel publishes in composer.json with public_vuejs_libs tag:

```
    "scripts": {
        //...
		"post-autoload-dump": [
			"@php artisan vendor:publish --tag=public_vuejs_libs --force"
		]
	},
```

Or publish by yourself


Publish Js Libs and Tests:

```shell
$ php artisan vendor:publish --tag=public_vuejs_libs --force
```

- Migrate the database tables

```shell
php artisan migrate
```
