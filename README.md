- Blade (this project) version: **[github.com/nunomaduro/laravel-starter-kit](https://github.com/nunomaduro/laravel-starter-kit)**
- Inertia & React version: **[github.com/nunomaduro/laravel-starter-kit-inertia-react](https://github.com/nunomaduro/laravel-starter-kit-inertia-react)**

<p align="center">
    <a href="https://youtu.be/VhzP0XWGTC4" target="_blank">
        <img src="/art/banner.png" alt="Overview Laravel Starter Kit" style="width:70%;">
    </a>
</p>

<p>
    <a href="https://github.com/ahosker/laravel-tall-starter-kit/actions"><img src="https://github.com/ahosker/laravel-tall-starter-kit/actions/workflows/tests.yml/badge.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/ahosker/laravel-tall-starter-kit"><img src="https://img.shields.io/packagist/dt/ahosker/laravel-tall-starter-kit" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/ahosker/laravel-tall-starter-kit"><img src="https://img.shields.io/packagist/v/ahosker/laravel-tall-starter-kit" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/ahosker/laravel-tall-starter-kit"><img src="https://img.shields.io/packagist/l/ahosker/laravel-tall-starter-kit" alt="License"></a>
</p>

**Laravel TALL Starter Kit** is fork of [nunomaduro](https://github.com/nunomaduro/laravel-starter-kit) strict [Laravel](https://laravel.com) skeleton - for those who demand meticulous precision in their projects.

Tools like **PHPStan**, **Pest**, **Rector**, **Pint**, and **Prettier** are pre-configured to be as strict as possible. E.g: 100% type and code coverage, PHPStan level max, Rector with max privatization, and more...

> **Requires [PHP 8.4+](https://php.net/releases/)**.

## Differences

Modifications from upstream include:

- TALL stack (TailwindCSS, Alpine.js, Laravel, Livewire) by default.
- Removed `php artisan:make action` from `NunoMaduro\Essentials` in favor of `lorisleiva/laravel-actions`.
- Removed Commercial AI (Cursor, Junie, etc) in favor of `sst/opencode`.
- Added `livewire/flux` (PRO) Livewire Components.

## Create Project

⚡️ Create your project using [Composer](https://getcomposer.org):

```bash
composer create-project ahosker/laravel-tall-starter-kit --prefer-dist example-app

```bash
cd example-app

# Setup project
composer setup

php artisan serve # serve the application...
```

## Features

🥃 Comes with Laravel [Essentials](https://github.com/nunomaduro/essentials), changes defaults in Laravel for more strict usage:

- Strict Models
- Auto Eager Loading
- Immutable Dates
- Force HTTPS
- Safe Console
- Asset Prefetching
- and more...

🧹 Keep a modern codebase with **Pint**, **Rector**, and **Prettier**:

> Every single rule in these tools is customized so they are most strict as possible.

```bash
npm install playwright
npx playwright install
```

### Verify Installation

Run the test suite to ensure everything is configured correctly:

```bash
composer test:type-coverage # 100% type coverage...
```

⚗️ Run static analysis using **PHPStan**:

```bash
composer test:types # level max by default
```

✅ Run unit tests using **PEST**

```bash
composer test:unit # 100% test coverage...
```

🚀 Run the entire test suite:

```bash
composer test # the entire test suite...
```

⚙️ Better defaults for testing, including:

- Fake sleeps
- Stray http requests
- Browser testing
- and more...

💭 Different application structure with:

- `app/Actions` - for application actions
- `app/Enums` - for enumerations
- and more...

🤖 Agent coding style rules with **Laravel Boost**, with support for:

- PHPStorm Junie
- Claude AI
- and more...

## Notes to Self

### Keep your fork up to date with the original repo

1. `git fetch upstream` # get latest changes from original repo
2. `git checkout master` # switch to your local master branch
3.a `git merge upstream/main` # merge changes from original repo into your local master branch
3.b. or  `git rebase upstream/main` # rebase changes from original repo into your local master branch
4. `composer update` # update dependencies if needed.
5. `git push origin master` # push changes to your forked repo

### TODO

- [ ] Add Tests for custom features
- [ ] Add OpenCode Agents/Plugins/Prompts and Agents.MD

## License

**Laravel Starter Kit** was created by **[Nuno Maduro](https://x.com/enunomaduro)** under the **[MIT license](https://opensource.org/licenses/MIT)**.
