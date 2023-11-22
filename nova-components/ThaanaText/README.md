# ThaanaText

## Installation

Install via git:

go to nova-components/ and run the following command:

```
git clone git@github.com:hashmaldives/ThaanaText.git
```

## Setting Up:

1. Add "hash-technologies/thaana-text": "@dev", to composer.json / require section. example:
```
"require": {
    ...
    "hash-technologies/thaana-text": "@dev",
},
```

2. Add the following code to composer.json / repositories:
```
"1": {
    "type": "path",
    "url": "./nova-components/ThaanaText"
},
```

3. run "composer update" in the terminal. Make sure terminal working directory is project root.
```
composer update
```

Now you are ready to use the package.


## Usage:
Import class:
```
use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
```

Use this as field.
```
ThaanaText::make('Title', 'title_dh'),
```

Enjoy!