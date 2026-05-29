# MyNPad

MyNPad is a simple personal notes web application built with Laravel. Registered users can write and manage their own text notes in one place.

This project is made for a school final project and uses a beginner-friendly Laravel MVC structure without Breeze, Jetstream, Fortify, or any authentication starter kit.

## Team Members

- Member 1: Muhammad Hideaki Isdianto
- Member 2: Luthfan Ahmad Qiwam
- Member 3: Muhammad Yahya Arrayhan
- Member 4: Miftachul Azzam Al Mawardy

## Features

- Public landing page
- Manual user registration
- Manual user login and logout
- Authenticated notes dashboard
- Create, view, edit, and delete notes
- Notes belong to the logged-in user
- Users cannot access notes owned by another user

## Tech Stack

- Laravel
- Laravel Blade
- Tailwind CSS
- MySQL
- PHP
- Vite

## Installation Steps

1. Clone the repository.
2. Run `composer install`.
3. Run `npm install`.
4. Copy `.env.example` to `.env`.
5. Run `php artisan key:generate`.
6. Start MySQL from Laravel Herd.
7. Create a MySQL database named `mynotepad`.
8. Update the database settings in `.env`.
9. Run `php artisan migrate`.
10. Run `npm run dev`.
11. Open the Herd site in your browser.

## Database Setup

Use these values in `.env` for a normal local MySQL setup:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mynotepad
DB_USERNAME=root
DB_PASSWORD=
```

If your MySQL user has a password, put it in `DB_PASSWORD`.

## Run The Project

This project is inside the Laravel Herd folder, so Herd can serve it automatically. You do not need to run `php artisan serve` when using Herd.

Start MySQL in Herd, then start Vite:

```bash
npm run dev
```

Open the app at:

```text
http://mynotepad-final-p.test
```

If your Herd site name is different, use the URL shown in Herd.

If a teammate is not using Herd, they can still run:

```bash
php artisan serve
```

## Folder Structure

- `routes/web.php`: Web routes for landing page, auth, and notes.
- `app/Http/Controllers/AuthController.php`: Manual registration, login, and logout logic.
- `app/Http/Controllers/NoteController.php`: Notes CRUD logic.
- `app/Models/User.php`: User model and notes relationship.
- `app/Models/Note.php`: Note model and user relationship.
- `database/migrations`: Database table definitions.
- `resources/views`: Blade templates for pages and forms.
- `resources/views/components/layouts/app.blade.php`: Shared page layout.
- `docs`: Project planning, feature list, testing checklist, and presentation notes.

## Manual Authentication

This project does not use Laravel Breeze or any starter kit. Authentication is written manually with controllers, validation, sessions, `Hash`, and `Auth`.

Passwords are hashed before saving because plain text passwords are unsafe. The notes routes use `auth` middleware so only logged-in users can open the dashboard and note pages.

## Why `user_id` Is Important

The `notes` table has a `user_id` column. This connects each note to the user who created it. The app uses this value to show only the logged-in user's notes and return `403` if a user tries to access someone else's note.

## GitHub Workflow

- `main`: stable code
- `dev`: development branch
- `feature/auth`: authentication work
- `feature/notes-crud`: notes CRUD work
- `feature/ui`: interface work
- `feature/docs`: documentation work

Example commit messages:

- `init Laravel project structure`
- `add manual authentication pages`
- `add notes migration and model`
- `add notes CRUD controller`
- `improve dashboard UI`
- `add testing checklist`
- `update README documentation`

## Screenshots

Add screenshots here after the UI is finished.

## Demo Video

Add the demo video link here before submission.
