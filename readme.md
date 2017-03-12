# BotMan Laravel Starter

This repository is an example Laravel application to instantly start developing cross-platform messaging bots using [BotMan](https://github.com/mpociot/botman).

## Installation

1. Create a new bot project using this boilerplate.

```bash
composer create-project mpociot/botman-laravel-starter my_new_bot
```

2. Install [Laravel Valet](https://laravel.com/docs/5.3/valet) and use `valet share` to retrieve a HTTPS URL that you can use in 
the messaging services for testing. The predefined route is `/botman`.

3. Edit your `.env` file and [connect BotMan with your Messaging Services](https://github.com/mpociot/botman#connect-with-your-messaging-service)

4. Modify your bot logic in `app/Controllers/BotManController.php` and/or `routes/botman.php`.

5. Build awesome bots!

> If you want to use the Slack RTM API, simply call `php artisan botman:listen` to let your bot connect to your Slack channel!

## License

BotMan and this boilerplate is free software distributed under the terms of the MIT license.
