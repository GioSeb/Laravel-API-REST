# API REST with CRUD Operations

This project provides a REST API with CRUD (Create, Read, Update, Delete) operations for managing students. 

## Requirements

To install and run this project, you need:
- [Composer](https://getcomposer.org/)
- [Laravel Installer](https://laravel.com/docs/installation)

## Installation

1. Clone the repository.
2. Install the dependencies using Composer:

   composer install

3. Run the server with the following command:

    php artisan serve

4. The API will be available on a local server.

Student Model
You can create and manage students with the following fields:

name
email
phone
language

## API Endpoints
The available API endpoints are:

GET /students/ - View all students.
GET /students/{id} - View a single student by ID.
POST /students - Store a new student.
PUT /students/{id} - Modify all data of a specific student by ID.
PATCH /students/{id} - Modify one or more fields of a specific student by ID.
DELETE /students/{id} - Delete a student by ID.

## Usage
After creating students, you can make requests to:

View all students:
GET /students/

View a single student by ID:
GET /students/{id}

Create a new student:
POST /students
Use a JSON body with the fields: name, email, phone, and language.

Update a student by ID:
PUT /students/{id}
Provide all fields to update: name, email, phone, and language.

Modify specific fields of a student by ID:
PATCH /students/{id}
Provide one or more fields to update.

Delete a student by ID:
DELETE /students/{id}
