<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## របៀប clone project នេះ
- $ git clone https://github.com/yoeukream/laravel9lv.git
- $ cd laravel9lv
- $ composer install
- $ cp .env.example .env
- $ php artisan key:generate

## ចូលទៅកាន់ file .env (បើក file .env) ដើម្បីដាក់ឈ្មោះ Database
យើងត្រូវតែប្រាកដថា មានឈ្មោះ database ដែលបានបង្កើតរួចហើយក្នុង phpMyAdmin (localhost/phpmyadmin)

  -  **DB_CONNECTION=mysql**
  -  **DB_HOST=127.0.0.1**
  -  **DB_PORT=3306**
  -  **DB_DATABASE=laravel9lv**
  -  **DB_USERNAME=root**
  -  **DB_PASSWORD=**

## ដោយយើងប្រើប្រាស់រូបភាពជាមួយ MediaLibrary យើងត្រូវប្រើ command
  - $ php artisan storage:link

## Run Laravel Framework
  - $ php artisan serve
  - ចូលទៅកាន់ browser វាយ ពាក្យថា localhost:8000
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

សូមអរគុណចំពោះការពិចារណាក្នុងការរួមចំណែកដល់ក្របខ័ណ្ឌ Laravel! ការណែនាំអំពីការរួមចំណែកអាចរកបាននៅក្នុង [ឯកសារ Laravel](https://laravel.com/docs/contributions)។

## Code of Conduct

ដើម្បីធានាថាសហគមន៍ Laravel ត្រូវបានស្វាគមន៍ចំពោះអ្នកទាំងអស់គ្នា សូមពិនិត្យមើល និងគោរពតាម [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct)។

## Security Vulnerabilities

ប្រសិនបើអ្នករកឃើញភាពងាយរងគ្រោះផ្នែកសុវត្ថិភាពនៅក្នុង Laravel សូមផ្ញើអ៊ីមែលទៅកាន់ Taylor Otwell តាមរយៈ [taylor@laravel.com](mailto:taylor@laravel.com)។ ភាពងាយរងគ្រោះផ្នែកសុវត្ថិភាពទាំងអស់នឹងត្រូវបានដោះស្រាយភ្លាមៗ។

## License

Laravel framework គឺជា open-sourced software licensed ដែលបង្កើតឡើងដោយ[MIT license](https://opensource.org/licenses/MIT)
