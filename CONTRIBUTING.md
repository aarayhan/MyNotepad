# Contributing

This guide keeps the team workflow simple and organized.

## Team Workflow

1. Pull the latest code from `dev`.
2. Create a feature branch for your task.
3. Make small changes and test them locally.
4. Commit with a clear message.
5. Push your branch to GitHub.
6. Open a pull request into `dev`.
7. Ask a teammate to review before merging.

## Branch Naming Guide

- `feature/auth`
- `feature/notes-crud`
- `feature/ui`
- `feature/docs`
- `fix/login-validation`
- `fix/note-delete`

## Commit Message Examples

- `init Laravel project structure`
- `add manual authentication pages`
- `add notes migration and model`
- `add notes CRUD controller`
- `improve dashboard UI`
- `add testing checklist`
- `update README documentation`

## Pull Request Steps

1. Explain what was changed.
2. Mention how you tested it.
3. Add screenshots if the UI changed.
4. Check that no `.env` file is committed.
5. Request review from a teammate.

## Code Style Rules

- Keep controller methods simple.
- Use clear variable names.
- Do not add unused files or packages.
- Use Blade for views and Tailwind for styling.
- Add comments only for important logic.
- Test registration, login, logout, and note CRUD before opening a pull request.
