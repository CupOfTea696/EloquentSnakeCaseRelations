[![Latest Stable Version](https://poser.pugx.org/cupoftea/eloquent-snake-relations/version.svg)](https://packagist.org/packages/cupoftea/eloquent-snake-relations) [![Total Downloads](https://poser.pugx.org/cupoftea/eloquent-snake-relations/d/total.svg)](https://packagist.org/packages/cupoftea/cupoftea/eloquent-snake-relations) [![Latest Unstable Version](https://poser.pugx.org/cupoftea/eloquent-snake-relations/v/unstable.svg)](https://packagist.org/packages/cupoftea/eloquent-snake-relations)
[![StyleCI](https://styleci.io/repos/186055024/shield?style=flat)](https://styleci.io/repos/186055024)
[![License](https://poser.pugx.org/cupoftea/eloquent-snake-relations/license)](https://packagist.org/packages/eloquent-snake-relations/fluent)

# Eloquent snake_case Relations

A simple trait to access your Eloquent relations using its snake_case property

## Installation

Install via composer by running `composer require cupoftea/eloquent-snake-relations`.

Once installed, Models created via the `make:model` command will automatically extend `CupOfTea\Database\Eloquent\Model` to allow relation access via the snake_cased relation name.

To update the User Model, replace the `Illuminate\Foundation\Auth\User` import with `CupOfTea\Auth\User`. You can keep the alias used for the import.

If you have already created some Models in your Application, simply replace the `Illuminate\Database\Eloquent\Model` import with `CupOfTea\Database\Eloquent\Model`, or for Pivot Models, replace the `Illuminate\Database\Eloquent\Relations\Pivot` import with `CupOfTea\Database\Eloquent\Relations\Pivot`.

Alternatively, if you are extending your own Model class, you can use the `CupOfTea\Database\Eloquent\Concerns\HasSnakeCaseRelations` trait on that Model, or extend it from `CupOfTea\Database\Eloquent\Model` instead of `Illuminate\Database\Eloquent\Model`.

## Usage

To access your model relations, you can now use the snake_case property, even if your relation method is camelCase. For example, if your your relationship method is defined as `User::creditCards()`, you can access it via `$user->credit_cards`.

> **Note**: Please note that only property access can use snake_case. Additional relationship queries or eager loading should still use the relationship method name as is. For example, `$creditCards = User::find(1)->creditCards()->orderBy('expires')->get();`, or `$users = User::with('creditCards')->all();`
