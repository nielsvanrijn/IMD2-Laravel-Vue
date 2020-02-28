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

#### LabTextarea
- Tag: `<LabTextarea>`\
- Properties

	| Name | Required | Type | Validation | Default |
	|:--|:--|:--|:--|
	| value | yes | `String` |  | `''` |
	| label | yes | `String` |  | `''` |
	| placeholder | yes | `String` |  | `''` |
	| autofocus | yes | `Boolean` |  | `false` |
	| disabled | yes | `Boolean` |  | `false` |
	| requierd  | yes | `Boolean` |  | `false` |
	| hasErrors | yes | `Boolean` |  | `false` |
	| isSuccsess | yes | `Boolean` |  | `false` |
	| col | yes | `Number` |  | `0` |
	| rows | yes | `Number` |  | `0` |
	| maxlength | yes | `Number` |  | `-1` |

- Example:
