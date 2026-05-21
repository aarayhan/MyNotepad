# Presentation Notes

## Simple Explanation Script

Good morning/afternoon. Our project is called MyNPad. It is a simple personal notes application built with Laravel. We made this project to practice Laravel MVC, manual authentication, database relationships, and CRUD operations.

The main purpose of MyNPad is to let users register, login, and manage their own notes. After logging in, a user can create a note, view note details, edit the note, and delete it.

## What MyNPad Is

MyNPad is a simple web app for writing and managing personal notes. It is not a complex productivity system. It focuses on basic features that are easy to understand and explain.

## Why We Made It

We made it because notes are a clear example of a CRUD application. The project also helps us understand authentication, sessions, database tables, and relationships between users and notes.

## Main Features

- Public landing page
- User registration
- User login and logout
- Notes dashboard
- Create note
- View note
- Edit note
- Delete note
- User ownership protection

## Database Structure

The app uses a `users` table and a `notes` table.

The `users` table stores account information such as name, email, and hashed password.

The `notes` table stores each note's title, content, and `user_id`.

## Authentication Flow

When a user registers, the form is validated first. Then the password is hashed using `Hash::make()` before the user is saved. After registration, the app logs the user in and redirects to the notes dashboard.

When a user logs in, Laravel checks the email and password using `Auth::attempt()`. If the credentials are correct, the session is regenerated and the user is sent to the notes dashboard. If the credentials are wrong, the app shows a simple validation error.

When a user logs out, Laravel clears the authentication session, invalidates the session, regenerates the CSRF token, and redirects to the login page.

## CRUD Flow

Create means the user writes a title and content, then the app saves the note with the logged-in user's `user_id`.

Read means the dashboard shows only notes created by the logged-in user, and the show page displays one selected note.

Update means the user edits the title or content, then the app validates and saves the changes.

Delete means the user removes a note from the database.

## Why `user_id` Is Important

The `user_id` connects each note to the user who created it. Without `user_id`, the app would not know which notes belong to which user. This is important for privacy and security.

## Why Password Hashing Is Important

Password hashing is important because passwords should never be stored as plain text. If the database is exposed, hashed passwords are much safer than readable passwords.

## Code Structure Explanation

The routes are in `routes/web.php`. They connect URLs to controller methods.

The controllers are in `app/Http/Controllers`. `AuthController` handles registration, login, and logout. `NoteController` handles note CRUD.

The models are in `app/Models`. `User` represents users and has many notes. `Note` represents notes and belongs to a user.

The views are in `resources/views`. Blade files display forms, the dashboard, and note pages.

The migrations are in `database/migrations`. They create the database tables.

## What Each Team Member Can Explain

- Member 1 can explain manual authentication and validation.
- Member 2 can explain notes CRUD and controller methods.
- Member 3 can explain Blade views and Tailwind UI.
- Member 4 can explain database tables, relationships, testing, and GitHub workflow.

## What We Learned

We learned how Laravel MVC works, how routes connect to controllers, how controllers use models, how Blade displays data, how to validate forms, how to hash passwords, how to protect routes with middleware, and how to prevent users from accessing other users' data.
