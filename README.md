## Install
- `composer update`
- `php artisan key:generate`
- `composer dump-autoload`

## Data Demo
`php artisan db:seed`

## Login
- admin@omran.dev
- admin

## Storage Link
Create link to public storage using the command `php artisa storage:link`

For files that are stored in the user app storage (e.g. user profile photo), we need to provide the app url to the admin app. In the .env file, make sure you specifiy the urls as follows, for example, if you are using http://localhost the urls will be:

`APP_URL=http://localhost/<admin_app_dir_name>/public`
`APP_USER_URL=http://localhost/<user_app_dir_name>/public`

## Front End Assests
In this project, so far, the assests are directy managed from the `public` directory directly. Meaning, the application is not using `npm` and the `resources/assets`. This have to be fixed in the future.# admin
# test2
