# Inpsyde Block Mails Quick'n'Dirty

Blocks outgoing WordPress emails by removing all recipients

## Table Of Contents

* [Installation](#installation)
* [Usage](#usage)
* [Crafted by Inpsyde](#crafted-by-inpsyde)
* [License](#license)
* [Contributing](#contributing)

## Installation

The best way to use this package is through Composer:

```BASH
$ composer require inpsyde/block-mails-quick-n-dirty
```

## Usage

Just install the plugin and activate it. No Mails will be sent anymore via `wp_mail()`. It works by removing any recipient from the underlying PHPMailer. Thanks to mutable objects.

## Crafted by Inpsyde

The team at [Inpsyde](http://inpsyde.com) is engineering the Web since 2006.

## License

Copyright (c) 2016, Inpsyde

Good news, this plugin is free for everyone! Since it's released under the [MIT License](LICENSE) you can use it free of charge on your personal or commercial website.

## Contributing

All feedback / bug reports / pull requests are welcome.