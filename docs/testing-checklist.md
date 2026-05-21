# Testing Checklist

Use this checklist before submitting or merging a pull request.

When using Laravel Herd, open the app at `http://mynotepad-final-p.test` or the URL shown in Herd.

## Register Test

- Register with name, email, password, and password confirmation.
- Try registering with an empty name.
- Try registering with an invalid email.
- Try registering with an email that already exists.
- Try registering with different password and confirmation values.

## Login Test

- Login with correct email and password.
- Try login with wrong password.
- Try login with an empty email or password.

## Logout Test

- Login first.
- Click logout.
- Confirm the app redirects to login.
- Try opening `/notes` after logout.

## Create Note Test

- Login first.
- Open New Note page.
- Create a note with title, category, and content.
- Try creating a note without title.
- Try creating a note without content.

## View Note Test

- Open the notes dashboard.
- Click View on a note.
- Confirm the note title and content display correctly.

## Edit Note Test

- Open a note.
- Click Edit.
- Change the title, category, and content.
- Save changes.
- Confirm the updated note is displayed.

## Delete Note Test

- Open the notes dashboard.
- Click Delete on a note.
- Confirm the note is removed from the list.

## User Ownership And Security Test

- Register two different users.
- Create a note with user A.
- Logout and login as user B.
- Confirm user B cannot see user A's note on the dashboard.
- Try opening user A's note URL while logged in as user B.
- Confirm the app returns `403`.

## Responsive UI Test

- Test landing page on desktop and mobile widths.
- Test login and register forms on mobile.
- Test notes dashboard cards on mobile.
- Test create and edit forms on mobile.
