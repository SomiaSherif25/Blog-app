**Blog Application with Laravel API**

This is a blog application built with Laravel, providing RESTful API endpoints for user authentication, CRUD operations for posts and categories, and logging for post operations. The application ensures robust unit testing for all functionalities, including edge cases and error handling.

**Features**

 User Authentication: Register, login, and logout functionalities using Laravel Sanctum.
 
 Posts Management: Create, read, update, and delete posts. Includes post logging and user association.
 
 Categories Management: Create, read, update, and delete categories.
 
 Logging: Log post creation, update, and deletion operations for auditing purposes.
 




**Explanation of API Endpoints**
Authentication Endpoints:

POST /register: Register a new user.

POST /login: Log in an existing user.

POST /logout: Log out the authenticated user.

**Post Endpoints:**

GET /posts: Retrieve a list of posts, including their related user and category.

POST /posts: Create a new post.

GET /posts/{post}: Retrieve a single post by ID.

PUT /posts/{post}: Update an existing post.

DELETE /posts/{post}: Delete a post by ID.

**Category Endpoints:**

GET /categories: Retrieve a list of categories.

POST /categories: Create a new category.

GET /categories/{category}: Retrieve a single category by ID.
PUT /categories/{category}: Update an existing category.
DELETE /categories/{category}: Delete a category by ID.
