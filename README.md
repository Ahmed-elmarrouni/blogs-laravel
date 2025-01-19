# Laravel Blog Application

![Homepage Screenshot](./readme-imgs/image.png)

## Overview

This is a Laravel-based blog application that includes functionality for guests, authors, and admins. The platform allows users to read, create, and manage articles, with different levels of access for each role. The application is designed for simplicity and efficiency, utilizing modern web technologies.

---

## Features

### Guest Features

-   Browse and read articles.
-   View article details.

### Author Features

-   Create, edit, and delete articles.
-   View and manage their own articles.
-   Like and comment on other authors' articles.

### Admin Features

-   Manage all articles (approve or delete).
-   Manage authors (add, update, or delete).
-   Create articles.

---

## Pages

### Home Page

![Home Page](./readme-imgs/image.png)
![Home Page Section](./readme-imgs/image-1.png)
![Home Page Section](./readme-imgs/image-2.png)
![Home Page Section](./readme-imgs/image-3.png)

### Register Page

![Register Page](./readme-imgs/image-5.png)

### Login Page

![Login Page](./readme-imgs/image-4.png)

### Forgot Password Page

![Forgot Password Page](./readme-imgs/image-6.png)

### Main Page (All Articles)

![Main Articles Page](./readme-imgs/image-12.png)

### Article Details

![Article Details](./readme-imgs/image-11.png)

### Create Article

![Create Article](./readme-imgs/image-7.png)

### User Profile Page

![User Profile Page](./readme-imgs/image-8.png)

### Author Managing Their Articles

![Author Article Management](./readme-imgs/image-15.png)

### Admin Features

#### Manage Articles

![Admin Manage Articles](./readme-imgs/image-16.png)

#### Manage Authors

![Admin Manage Authors](./readme-imgs/image-13.png)

#### Create Articles as Admin

![Admin Create Article](./readme-imgs/image-14.png)

---

## Technologies Used

### Backend

-   Laravel 10
-   PHP 8.1

### Frontend

-   Vite
-   TailwindCSS

### Database

-   SQL (MySQL or equivalent)

---

## How to Run the Project

1. Clone the repository.

    ```bash
    git clone <repository-url>
    ```

2. Navigate to the project directory.

    ```bash
    cd ElmarrouniBlogTP-app
    ```

3. Install PHP dependencies.

    ```bash
    composer install
    ```

4. Install Node.js dependencies.

    ```bash
    npm install
    ```

5. Set up the environment.

    - Copy the `.env.example` file to `.env`.
    - Update the `.env` file with your database credentials and other configurations.

6. Run database migrations.

    ```bash
    php artisan migrate
    ```

7. Start the development server.

    ```bash
    php artisan serve
    ```

8. Start Vite.
    ```bash
    npm run dev
    ```

---

## Dependencies

### Composer Dependencies

-   Laravel Framework
-   Sanctum (Authentication)
-   Socialite (OAuth)
-   Tinker

### NPM Dependencies

-   Vite (Bundling)
-   TailwindCSS (Styling)

---

## Screenshots

### Home Page

![Homepage Screenshot](./readme-imgs/image.png)

For more details, explore the screenshots provided in the respective sections above.

---

## License

This project is licensed under the MIT License. See the LICENSE file for details.
