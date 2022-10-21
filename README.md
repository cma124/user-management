# User Management

User management system with three different roles - **Admin**, **Manager** and **User**

## User

-   Can create or register account
-   Can update profile information
-   Can upload or delete profile image
-   Can check account list

## Manager

-   Same functions as **User** role
-   Can change accounts into different role
-   Can suspend or activate accounts

## Admin

-   Same functions as **Manager** role
-   Can delete other accounts

## Languages

-   Bootstrap, PHP, FakerPHP Package, MySQL

## Database Structure

### Database Name

user_management

### Table Structure

users

-   id (int auto_increment)
-   name (varchar)
-   email (varchar)
-   phone (varchar)
-   address (text)
-   password (varchar)
-   role_id (int)
-   photo (varchar default null)
-   suspended (int default 0)
-   created_at (datetime)
-   updated_at (datetime default null)

roles

-   id (int auto_increment)
-   name (varchar)
-   value (int)
