# HashAdmin

This package will install necessary styles and fonts for Nova4 to run HashCMS.

## Installation

Install via git:

go to nova-components/ and run the following command:

```
git clone git@github.com:hashmaldives/HashAdmin.git
```


## Setting Up:

1. Add "hashtechnologies/hash-admine": "*" to composer.json / require section. example:
```
"require": {
    ...
    "hashtechnologies/hash-admin": "*",
},
```

2. Add the following code to composer.json / repositories:
```
"0": {
    "type": "path",
    "url": "./nova-components/HashAdmin"
},
```

3. run "composer update" in the terminal. Make sure terminal working directory is project root.
```
composer update
```

Now you are ready to use the package. Just do a hard refresh and all styles will be applied to your nova admin panel.

Enjoy!