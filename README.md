# Mailchimp Transactional — PHP

The official PHP client library for the Mailchimp Transactional API (v1)

## Installation

**Option 1:** Install via Packagist
```
composer require mailchimp/transactional
```

Or add the following to `composer.json`
```
{
  "require": {
    "mailchimp/transactional": "*"
  }
}
```

Install all composer dependencies using:
```
composer install
```

**Option 2:** Install Manually

Clone the repo
```
git clone git@github.com:mailchimp/mailchimp-transactional-php.git
```

In the project root, install all dependencies
```
composer install
```

Manually include `vendor/autoload.php` in your implementation
```php
require_once('/path/to/MailchimpTransactional/vendor/autoload.php');
```

## Quick Start

```php
require_once('/path/to/MailchimpTransactional/vendor/autoload.php');

$mailchimp = new MailchimpTransactional\ApiClient();
$mailchimp->setApiKey('YOUR_API_KEY');

$response = $mailchimp->users->ping();
print_r($response);
```

## Sending Requests
All requests are sent via POST and accept a single argument as the request body parameter.
```php
$mailchimp->templates->publish([ 'name' => 'My Template']);
```

## Output Formats
Optionally, you can set the default response format for **all requests** to one of the following:
- `json` *(default)*
- `xml`
- `php`
- `yaml`

```php
$mailchimp->setDefaultOutputFormat('xml');
```

You can also set the response format for a **single request** by passing in a special `outputFormat` param to the request body.
```php
$mailchimp->senders->list([ 'outputFormat' => 'php']);
```

## API Endpoints

All URIs are relative to *https://mandrillapp.com/api/1.0*

| Method | Endpoint |
| ---------- | -------- |
| **exports.activity** | /exports/activity |
| **exports.info** | /exports/info |
| **exports.list** | /exports/list |
| **exports.rejects** | /exports/rejects |
| **exports.whitelist** | /exports/whitelist |
| **inbound.addDomain** | /inbound/add-domain |
| **inbound.addRoute** | /inbound/add-route |
| **inbound.checkDomain** | /inbound/check-domain |
| **inbound.deleteDomain** | /inbound/delete-domain |
| **inbound.deleteRoute** | /inbound/delete-route |
| **inbound.domains** | /inbound/domains |
| **inbound.routes** | /inbound/routes |
| **inbound.sendRaw** | /inbound/send-raw |
| **inbound.updateRoute** | /inbound/update-route |
| **ips.cancelWarmup** | /ips/cancel-warmup |
| **ips.checkCustomDns** | /ips/check-custom-dns |
| **ips.createPool** | /ips/create-pool |
| **ips.delete** | /ips/delete |
| **ips.deletePool** | /ips/delete-pool |
| **ips.info** | /ips/info |
| **ips.list** | /ips/list |
| **ips.listPools** | /ips/list-pools |
| **ips.poolInfo** | /ips/pool-info |
| **ips.provision** | /ips/provision |
| **ips.setCustomDns** | /ips/set-custom-dns |
| **ips.setPool** | /ips/set-pool |
| **ips.startWarmup** | /ips/start-warmup |
| **messages.cancelScheduled** | /messages/cancel-scheduled |
| **messages.content** | /messages/content |
| **messages.info** | /messages/info |
| **messages.listScheduled** | /messages/list-scheduled |
| **messages.parse** | /messages/parse |
| **messages.reschedule** | /messages/reschedule |
| **messages.search** | /messages/search |
| **messages.searchTimeSeries** | /messages/search-time-series |
| **messages.send** | /messages/send |
| **messages.sendRaw** | /messages/send-raw |
| **messages.sendTemplate** | /messages/send-template |
| **metadata.add** | /metadata/add |
| **metadata.delete** | /metadata/delete |
| **metadata.list** | /metadata/list |
| **metadata.update** | /metadata/update |
| **rejects.add** | /rejects/add |
| **rejects.delete** | /rejects/delete |
| **rejects.list** | /rejects/list |
| **senders.addDomain** | /senders/add-domain |
| **senders.checkDomain** | /senders/check-domain |
| **senders.domains** | /senders/domains |
| **senders.info** | /senders/info |
| **senders.list** | /senders/list |
| **senders.timeSeries** | /senders/time-series |
| **senders.verifyDomain** | /senders/verify-domain |
| **subaccounts.add** | /subaccounts/add |
| **subaccounts.delete** | /subaccounts/delete |
| **subaccounts.info** | /subaccounts/info |
| **subaccounts.list** | /subaccounts/list |
| **subaccounts.pause** | /subaccounts/pause |
| **subaccounts.resume** | /subaccounts/resume |
| **subaccounts.update** | /subaccounts/update |
| **tags.allTimeSeries** | /tags/all-time-series |
| **tags.delete** | /tags/delete |
| **tags.info** | /tags/info |
| **tags.list** | /tags/list |
| **tags.timeSeries** | /tags/time-series |
| **templates.add** | /templates/add |
| **templates.delete** | /templates/delete |
| **templates.info** | /templates/info |
| **templates.list** | /templates/list |
| **templates.publish** | /templates/publish |
| **templates.render** | /templates/render |
| **templates.timeSeries** | /templates/time-series |
| **templates.update** | /templates/update |
| **urls.addTrackingDomain** | /urls/add-tracking-domain |
| **urls.checkTrackingDomain** | /urls/check-tracking-domain |
| **urls.list** | /urls/list |
| **urls.search** | /urls/search |
| **urls.timeSeries** | /urls/time-series |
| **urls.trackingDomains** | /urls/tracking-domains |
| **users.info** | /users/info |
| **users.ping** | /users/ping |
| **users.ping2** | /users/ping2 |
| **users.senders** | /users/senders |
| **webhooks.add** | /webhooks/add |
| **webhooks.delete** | /webhooks/delete |
| **webhooks.info** | /webhooks/info |
| **webhooks.list** | /webhooks/list |
| **webhooks.update** | /webhooks/update |
| **whitelists.add** | /whitelists/add |
| **whitelists.delete** | /whitelists/delete |
| **whitelists.list** | /whitelists/list |


## Additional Client Libraries

Mailchimp Transactional libraries are available in the following languages:

<div>
  <a href="https://github.com/mailchimp/mailchimp-transactional-node">
  <img src="https://github.com/mailchimp/mailchimp-client-lib-codegen/blob/master/resources/images/lang_node.png?raw=true" width="44" height="44">
  </a>
  <a href="https://github.com/mailchimp/mailchimp-transactional-php">
  <img src="https://github.com/mailchimp/mailchimp-client-lib-codegen/blob/master/resources/images/lang_php.png?raw=true" width="44" height="44">
  </a>
  <a href="https://github.com/mailchimp/mailchimp-transactional-ruby">
  <img src="https://github.com/mailchimp/mailchimp-client-lib-codegen/blob/master/resources/images/lang_ruby.png?raw=true" width="44" height="44">
  </a>
  <a href="https://github.com/mailchimp/mailchimp-transactional-python">
  <img src="https://github.com/mailchimp/mailchimp-client-lib-codegen/blob/master/resources/images/lang_python.png?raw=true" width="44" height="44">
  </a>
</div>
