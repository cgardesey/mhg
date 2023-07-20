# Backend Laravel Project for Managing Patients' Records

![ic_launcher-web](https://github.com/cgardesey/mhg/assets/10109354/59df1f07-52b3-493e-8af4-39d9c4d31989)


## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [API Documentation](#api-documentation)
- [Contributing](#contributing)
- [License](#license)

## Introduction

This is a backend Laravel project that serves as the server-side application for an [android app](https://github.com/cgardesey/MedicalHealthGard) managing patients' records for doctors. It provides RESTful APIs to handle CRUD operations for patients' data, allowing doctors to store, retrieve, update, and delete patient information efficiently.

The project follows best practices and utilizes Laravel's features to ensure a secure and scalable backend for healthcare applications.

## Features

- User authentication and authorization system with role-based access control.
- CRUD operations for patients' records.
- Secure API endpoints with validation and error handling.

## Prerequisites

Before setting up the project, make sure you have the following installed:

- PHP (Version 7.4.X)
- Composer
- MySQL
- Laravel
- Other dependencies as listed in the `composer.json` file.

## Installation

- Clone this repository to your local machine:
  ```bash
     git clone https://github.com/cgardesey/mhg.git
- Install the dependencies:
   ```bash
      composer install
- Create a .env file:
   ```bash
      cp .env.example .env
- Generate the application key:
   ```bash
      php artisan key:generate
- Install the dependencies:
   ```bash
      composer install
- Set up your database credentials in the .env file:
   ```bash
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=your_database_name
      DB_USERNAME=your_database_username
      DB_PASSWORD=your_database_password
- Run the database migrations:
   ```bash
      php artisan migrate
- Start the development server:
   ```bash
      php artisan serve
The backend server will be running at http://localhost:8000.

## Contributing
Contributions to this project are welcome. If you would like to contribute, please follow these steps:
1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make your changes and test them thoroughly.
4. Submit a pull request with a clear description of your changes.

If you're looking to integrate with an android based project, make sure to check out the the repository corresponding to the [android project](https://github.com/cgardesey/MedicalHealthGard) for detailed instructions.

## License
This project is licensed under the [MIT License](LICENSE). Feel free to modify and distribute this project as needed.


