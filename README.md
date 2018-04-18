# stockt-audited

Demo stock management app built with Laravel. The app has an audit dashboard that shows changes to all products in realtime. [Tutorial link.]()

## Prerequisites
- PHP >= 7.1.3
- A [Pusher account](https://pusher.com/signup) and [Pusher app credentials](http://dashboard.pusher.com/)

## Getting started
Clone the project:

```bash
git clone https://github.com/shalvah/stockt-audited
```

Copy the `.env.example` file to a `.env` file. Add your Pusher app credentials to this file:
```
PUSHER_APP_ID=your-app-id
PUSHER_APP_KEY=your-app-key
PUSHER_APP_SECRET=your-app-secret
PUSHER_APP_CLUSTER=your-app-cluster
```

Look for these lines of JavaScript in `resources/views/audits.blade.php`:
```javascript
var pusher = new Pusher('your-app-id', {
    cluster: 'your-app-cluster'
});
```
Insert your Pusher app ID and cluster in the appropriate places.

Create an empty file, `database/database.sqlite`.

Then:

```bash
# generate an application key
php artisan key:generate

# run migrations and seed the database
php artisan migrate --seed

# start the app
php artisan serve
```
## Built With

* [Pusher](https://pusher.com/) - APIs to enable devs building realtime features
* [Laravel](http://laravel.com) - the PHP framework for web artisans :sunglasses:

