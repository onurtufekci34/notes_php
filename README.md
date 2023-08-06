# Notes App

## Description
The Notes App is a simple web application that allows users to create, edit, and delete notes. It is built using PHP and MySQL to manage the data.

## Features
- Add a new note with a title and content.
- Mark a note as important using a checkbox.
- View a list of all notes with their titles and content.
- Edit existing notes.
- Delete notes from the list.

## Requirements
- PHP server with MySQL support.
- MySQL database to store notes.

## Installation
1. Clone this repository to your web server.
2. Create a new MySQL database and import the provided SQL schema file (`notes.sql`) to create the necessary table for notes.
3. Update the database connection details in the `db.php` file to match your MySQL server settings.
4. Make sure the web server has write permissions to the project directory for data storage.

## Usage
1. Access the web application through your web server's URL.
2. On the home page, you will see a list of existing notes (if any).
3. To add a new note, click on the "Add a new note" link and fill in the title, content, and optionally mark it as important.
4. To edit an existing note, click on the "edit note" link next to the note you want to modify. Make your changes and click the "Submit" button to save the changes.
5. To delete a note, click on the "[X] delete note" link next to the note you want to remove. A confirmation prompt will appear before deleting the note.

## Styling
The application is styled using CSS. The `style.css` file contains the styles for various elements such as input fields, text areas, buttons, and note containers.

## Disclaimer
This application is provided as-is without any warranty. Use it at your own risk.

## Contributions
Contributions are welcome! If you find any issues or have suggestions for improvements, feel free to create a pull request.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
