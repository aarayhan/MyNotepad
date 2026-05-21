# Feature List

## Public Features

- Landing page
- Login page
- Register page

## Auth Features

- User registration
- Password confirmation
- Password hashing
- User login
- Login validation errors
- User logout
- Session regeneration after login

## Notes CRUD Features

- Notes dashboard
- Total notes count
- Notes list with title, preview, and updated date
- Create new note
- View note detail
- Edit existing note
- Delete note
- Empty state when no notes exist

## Security Features

- Notes routes protected with `auth` middleware
- Notes saved with `user_id`
- Dashboard only shows logged-in user's notes
- Ownership check before view, edit, update, and delete
- Return `403` when accessing another user's note
