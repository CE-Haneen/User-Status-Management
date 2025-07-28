# User Status Management
This project is a simple PHP-MySQL web application that allows you to manage a list of users by adding their name and age, and toggling their status between 0 and 1.

## Features
- Submit user name and age through a form.
- Store the submitted data into a MySQL database.
- Display all user records in a structured HTML table.
- Toggle user status dynamically between 0 and 1.
- Delete users from the list.
- Stylish dark-themed buttons and clean table design.

## Technologies Used
- HTML
- CSS
- PHP
- MySQL
- JavaScript (basic)

## 📂 Project Structure

- index.php – Main page displaying the form and users table.
- insert.php – Handles form submissions and inserts data into the database.
- toggle.php – Toggles the user status.
- delete.php – Deletes a user record from the database.

## 📌 How it works

1. User enters a name and age then clicks Submit.
2. The data is inserted into the users table.
3. A table shows all users with their ID, Name, Age, Status, and action buttons.
4. You can toggle the status or delete any user, and changes are reflected immediately.

## Database

Table: users

| id | name | age | status |
|----|------|-----|--------|
| int | varchar | int | int (0 or 1) |


## Preview
Here is how the form and table look:

![Form Preview](https://github.com/user-attachments/assets/5ae1a9dd-e3d6-42b6-90db-328e11479aed)

![Table Preview](https://github.com/user-attachments/assets/d233b150-25d9-4147-bd8a-9b150925f287)
