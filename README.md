## VOST Portugal Website

## Project setup
Install dependencies:
```sh
composer install
```

Copy the `.env` file:
```sh
cp .env.example .env
```

Generate an encryption key:
```sh
php artisan key:generate
```

create symbolic link to storage folder
```sh
php artisan storage:link
```
>:warning: here you should download all assests into the storage folder

install npm packages
```sh
npm install && npm run dev
```

### Database
Execute the migration and seeders:
```sh
php artisan migrate:refresh --seed
```

## Contributing
Contributions are always welcome, but before anything else, make sure you get acquainted with the [CONTRIBUTING](CONTRIBUTING.md) guide.

## Credits
- [VOST Portugal](https://github.com/vostpt)

## License
This project is open source software licensed under the [MIT LICENSE](LICENSE.MD).
