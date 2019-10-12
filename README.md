# Unic Public id

This library provides you a method to generate a hash from a unique id based on the current time stamp in microseconds

## Getting Started

### Installing

Install the library

```
composer require locojuhi/unic-public-id
```

## Usage

Mostly you have to declare the use statement, ussually you will need to use:
```php
use UnicPublicId\PublicId;
```

then you can use the *`generate`* method as follow:

```php
PublicId::generate([object $object = null]);
```

```text
Note that the $object argument is optional!
```

## Running the tests

Coming soon


## Contributing

Please read [CONTRIBUTING.md](https://github.com/locojuhi/unic-public-id/blob/master/CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* *Contibutors [list](https://github.com/locojuhi/unic-public-id/graphs/contributors) who participated in this project.

## License

This project is licensed under the GPL-3.0 License - see the [LICENSE.md](https://github.com/locojuhi/unic-public-id/blob/master/LICENSE) file for details
