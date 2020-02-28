# 1 App 4 Frameworks Laravel + Vue
The Laravel + Vue version of the app

## Approach
A fairly simple Laravel application using MySQL database

## Usage
Run composer

```
composer install
```

Install node modules

```
npm i
```

Change the `.env.example` to `.env` with your database credentials.

Create the tables

```
php artisan migrate
```

Seed database with genres and some actors

```
php artisan db:seed
```

#### LabAlert
- Tag: `<LabAlert>`\
- Properties

	| Name | Required | Type | Validation | Default |
	|:--|:--|:--|:--|:--|
	| msg | yes | `String` |  |  |
	| type | yes | `String` |  |  |

- Example:

	```html
	<LabAlert :msg="'There was a error'" :type="'error'" />
	```

- Example:

| Command | Description |
| --- | --- |
| git status | List all new or modified files |
| git diff | Show file differences that haven't been staged |
| git diff |  |
