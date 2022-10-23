# User Management

User management system with three different roles - **Admin**, **Manager** and **User**

## What user can do

-   Login or register account
-   Update profile information
-   Upload or delete profile image
-   Check account list

## What manager can do

-   Same actions as **User** role
-   Change accounts into different role
-   Suspend or activate other accounts

## What admin can do

-   Same actions as **Manager** role
-   Delete other accounts

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
