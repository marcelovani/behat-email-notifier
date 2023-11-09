Behat Email Notifier Extension
=========================
This Behat extension integrates with [Behat Notifier](https://github.com/marcelovani/behat-notifier)
to allow sending email notifications for Behat events, i.e.
- When the Suite starts or finishes
- When the Scenarios are tested

Installation
------------

Install by adding to your `composer.json`:

```bash
composer require --dev marcelovani/behat-email-notifier
```

Configuration
-------------

Enable the extension in `behat.yml` like this:

The configuration goes in the `Marcelovani\Behat\Notifier` extension, under `notifiers`

```yml
default:
  extensions:
    Marcelovani\Behat\Notifier:
      notifiers:
        Marcelovani\Behat\Notifier\Email\EmailNotifier:
          recipients:
            - email1@foo.bar
            - email2@foo.bar
```

Extending
-------------

It is possible to extend this class by implementing your own class and listing it
on the `notifiers` list instead of the default class.

Todo
-------------
- Finish the implementation of notify method
- Add example Features and Unit tests
- Add Github actions
- List package on https://packagist.org/
