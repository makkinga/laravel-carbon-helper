# Laravel Carbon Helper

A simple helper for easier use of Carbon in Blade views.

# Installation

Install using composer

```bash
composer require makkinga/laravel-carbon-helper
```

# Usage

Use the helper as you would the `\Carbon\Carbon()` class

```blade
{{-- Instead of --}}
<div>{{ \Carbon\Carbon::now()->toDateTimeString() }}</div>

{{-- Use --}}
<div>{{ carbon()->toDateTimeString() }}</div>
```

When no parameters are passed to the helper it will return `now()`.
To parse a string just pass it to the helper

```php
carbon('2020-02-05')->toDateTimeString();
```

# Licence (MIT)

Copyright 2020 Gydo Makkinga <gydo@makking.online>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.