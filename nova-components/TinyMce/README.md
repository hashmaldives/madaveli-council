# TinyMce

## Installation

Install via git:

go to nova-components/ and run the following command:

```
git clone git@github.com:hashmaldives/TinyMce.git
```

Publish the config file

```
php artisan vendor:publish --provider="Hashtechnologies\TinyMce\FieldServiceProvider"

```

## Setting Up:

1. Add "hashtechnologies/tiny-mce": "*" to composer.json / require section. example:
```
"require": {
    ...
    "hashtechnologies/tiny-mce": "*"
},
```

2. Add the following code to composer.json / repositories:
```
"2": {
    "type": "path",
    "url": "./nova-components/TinyMce"
}
```

3. run "composer update" in the terminal. Make sure terminal working directory is project root.
```
composer update
```

4. Copy resources/css/editor.css to public/css/editor.css

Now you are ready to use the package.


## Usage:
Import class:
```
use Hashtechnologies\TinyMce\TinyMce;
```

Use this as field.
```
TinyMce::make('Gallery Caption Dhivehi','content_dh')->hideFromIndex(),
```

Enjoy!