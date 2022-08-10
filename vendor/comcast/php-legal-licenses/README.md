<p align="center">
    <a href="https://styleci.io/repos/106569641"><img src="https://styleci.io/repos/106569641/shield" alt="StyleCI Status"></a>
    <a href="https://packagist.org/packages/comcast/php-legal-licenses"><img src="https://poser.pugx.org/comcast/php-legal-licenses/d/total.svg" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/comcast/php-legal-licenses"><img src="https://poser.pugx.org/comcast/php-legal-licenses/v/stable.svg" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/comcast/php-legal-licenses"><img src="https://poser.pugx.org/comcast/php-legal-licenses/license.svg" alt="License"></a>
</p>

# PHP Legal Licenses

Legal Licenses is a utility to help generate a single text file containing all of the important information about a project's dependencies. In some organizations, the use of Open Source Software (OSS) is strictly controlled and audited, and requires having every OSS library simply documented.

This utility will generate a `licenses.md` file in the root of your project that contains a list of all dependencies, the currently installed version, commit sha, its description, homepage, list of licenses, and full license text if it is present in the dependency source code directly. It receives this information from the `composer.lock` file, so you must have run a `composer update` or `composer install` at least once in order to use this utility.

## Installation

If you need a utility such as this for your place of business, chances are, you will need it for more than a single project. Therefore, the easiest and reccommeded way to install this utility is as a global composer package:

```php
composer global require comcast/php-legal-licenses
```

## Usage

If you installed php-legal-licenses globally via composer, you should be able to run the script in any of your projects. Note, you must have run either `composer update` or `composer install` at least once, to create a `composer.lock` file.

```
$ cd /path/to/my/project
$ which php-legal-licenses
> ~/.composer/vendor/bin/php-legal-licenses
$ php-legal-licenses generate
> Generating Licenses file...
> Done!
```

You can also hide dependency version with `--hide-version` option:

```
$ php-legal-licenses generate --hide-version
```



## Example Output
Here is a snippet of the licenses file that would be generated for this utility itself:

```
# Project Licenses
This file was generated by the Legal Licenses utility. It contains the name, version and commit sha, description, homepage, and license information for every dependency in this project.

## Dependencies

### psr/log (Version 1.0.2 | 4ebe3a8)
Common interface for logging libraries
Homepage: https://github.com/php-fig/log
Licenses Used: MIT
Copyright (c) 2012 PHP Framework Interoperability Group

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.


### symfony/console (Version v3.3.6 | b087823)
Symfony Console Component
Homepage: https://symfony.com
Licenses Used: MIT

...
```