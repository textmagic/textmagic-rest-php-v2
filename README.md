[comment]: <> (HEAD)
# TextMagic PHP SDK

This library provides you with an easy way of sending SMS and receiving replies by integrating the TextMagic SMS Gateway into your PHP application.

## What Is TextMagic?

TextMagic's application programming interface (API) provides the communication link between your application and TextMagic's SMS Gateway, allowing you to send and receive text messages and to check the delivery status of text messages you've already sent.


[comment]: <> (/HEAD)

## Requirements

- **PHP 8.1** or later
- **Composer** for dependency management
- **cURL** extension
- **JSON** extension
- **mbstring** extension

## Installation

### Via Composer (Recommended)

Install the SDK using [Composer](https://getcomposer.org/):

```bash
composer require textmagic/textmagic-rest-php-v2
```

Or add it to your `composer.json`:

```json
{
    "require": {
        "textmagic/textmagic-rest-php-v2": "^3.0.43870"
    }
}
```

Then run:

```bash
composer install
```

### Manual Installation

Download the files and include `autoload.php`:

```php
require_once(__DIR__ . '/vendor/autoload.php');
```

## Quick Start

### Basic Usage

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use TextMagic\Api\TextMagicApi;
use TextMagic\Configuration;
use GuzzleHttp\Client;

// Get your credentials from: https://app.textmagic.com/settings/api
$config = Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_API_KEY');

$api = new TextMagicApi(new Client(), $config);

// Test connection
try {
    $result = $api->ping();
    echo "Ping successful: " . $result->getPing() . PHP_EOL;
} catch (\TextMagic\ApiException $e) {
    echo 'API Error: ' . $e->getMessage() . PHP_EOL;
    echo 'HTTP Code: ' . $e->getCode() . PHP_EOL;
}  catch (\Exception $e) {
    echo 'Exception when calling TextMagicApi->ping: ', $e->getMessage(), PHP_EOL;
}
```

### Sending Messages

```php
<?php
use TextMagic\Models\SendMessageRequest;

$input = new SendMessageRequest();
$input->setText('Hello from TextMagic PHP SDK!');
$input->setPhones('+19993322111,+19993322110');

try {
    $result = $api->sendMessage($input);
    echo "Message sent! Session ID: " . $result->getId() . PHP_EOL;
} catch (\TextMagic\ApiException $e) {
    echo 'Failed to send message: ' . $e->getMessage() . PHP_EOL;
} catch (\Exception $e) {
    echo 'Exception when calling TextMagicApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Getting Outgoing Messages

```php
<?php
try {
    $result = $api->getAllOutboundMessages(1, 10);
    foreach ($result->getResources() as $message) {
        echo "Message ID: " . $message->getId() . PHP_EOL;
        echo "Text: " . $message->getText() . PHP_EOL;
        echo "Status: " . $message->getStatus() . PHP_EOL;
    }
} catch (\TextMagic\ApiException $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
} catch (\Exception $e) {
    echo 'Exception when calling TextMagicApi->getAllOutboundMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Uploading Files

```php
<?php
try {
    $file = new \SplFileObject("avatar.jpg");
    $result = $api->uploadListAvatar($file, 3223); // 3223 number here it is sample list ID
    echo "Avatar uploaded successfully!" . PHP_EOL;
} catch (\TextMagic\ApiException $e) {
    echo 'Upload failed: ' . $e->getMessage() . PHP_EOL;
} catch (\Exception $e) {
    echo 'Exception when calling TextMagicApi->uploadListAvatar: ', $e->getMessage(), PHP_EOL;
}
```

## Migration Guide from v2.x to v3.x

### Breaking Changes

#### PHP Version Requirement

**v2.x:**
```json
"php": "^7.2.5 || ^8.0"
```

**v3.x:**
```json
"php": "^8.1"
```

**Action Required:** Upgrade your PHP version to 8.1 or later.

```bash
# Check your PHP version
php -v

# Should output: PHP 8.1.x or higher
```

#### Dependencies Update

**v2.x:**
```json
"phpunit/phpunit": "^4.8"
"guzzlehttp/guzzle": "^7.2"
```

**v3.x:**
```json
"phpunit/phpunit": "^10.0"
"guzzlehttp/guzzle": "^7.3"
```

**Note:** PHPUnit 10 is required for PHP 8.1 compatibility. PHPUnit 8 and 9 do not support PHP 8.1.

### What Stays the Same

✅ **Namespaces** - No changes required:
```php
use TextMagic\Api\TextMagicApi;
use TextMagic\Models\SendMessageRequest;
use TextMagic\Configuration;
```

✅ **API Methods** - All methods remain the same:
```php
$api->sendMessage($input);
$api->getAllOutboundMessages($page, $limit);
$api->getContact($id);
// ... all other methods unchanged
```

✅ **Model Classes** - All models remain the same:
```php
new SendMessageRequest();
new CreateContactRequest();
// ... all other models unchanged
```

✅ **Configuration** - Configuration setup remains the same:
```php
$config = Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_API_KEY');
```

### Step-by-Step Migration

1. **Upgrade PHP to 8.1+**
   ```bash
   # macOS (Homebrew)
   brew install php@8.1

   # Ubuntu/Debian
   sudo apt-get install php8.1

   # Verify
   php -v
   ```

2. **Update Composer Dependencies**
   ```bash
   # Update composer.json
   composer require textmagic/textmagic-rest-php-v2:^3.0

   # Or update all dependencies
   composer update
   ```

3. **Test Your Application**
   ```bash
   # Run your tests
   vendor/bin/phpunit

   # Or test manually
   php your_script.php
   ```

### Compatibility Matrix

|    Feature    | v2.x | v3.x | Compatible? |
|---------------|------|------|-------------|
| PHP 7.2-7.4   |  ✅  |  ❌  |    ❌ No    |
| PHP 8.0       |  ✅  |  ❌  |    ❌ No    |
| PHP 8.1+      |  ✅  |  ✅  |    ✅ Yes   |
| API Methods   | Same | Same |    ✅ Yes   |
| Models        | Same | Same |    ✅ Yes   |
| Configuration | Same | Same |    ✅ Yes   |

### Need Help?

- 📖 [Full Documentation](https://docs.textmagic.com/)
- 💬 [Support](https://www.textmagic.com/support/)
- 🐛 [Report Issues](https://github.com/textmagic/textmagic-rest-php-v2/issues)


[comment]: <> (FOOTER)
## License
The library is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).

[comment]: <> (/FOOTER)
