# Larvel Queue by Cron.

## Setup config

### Composer install

run `composer install` command

### config Database

-   Create DB named "cron"
-   run `php artisan queue:table`
-   run `php artisan migate`

### Config .env file

-   Mail server config.
-   laravel key generate
    run `php artisan key:generate`

## Run

run `php artisan serve` command to run server
run `php artisan queue:work` command to queue work.

## Go to http://localhost:8000/gather

# Explanation.

This application is due to send email to users who inputed in form.
Actually the email sending time is too long so we should use queue job by cron on this feature.
So I have send the email data to queue and call the queue handler every minutes in kernel with cron.

Thanks & Regards.
Antonio
