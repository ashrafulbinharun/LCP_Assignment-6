# Getting Started

It's super easy to setup.

First, clone the project and change the directory

```shell
git clone git@github.com:ashrafulbinharun/LCP_Assignment-6.git
cd LCP_Assignment-6
```

Then follow the process.

1. Install the dependencies

```shell
composer install
npm install
```

2. Copy `.env.example` to `.env`

```shell
cp .env.example .env
```

3. Generate application key

```shell
php artisan key:generate
```

1. Run the migration

```shell
php artisan migrate
```

5. Start the webserver

```shell
nmp run dev
php artisan serve
```
