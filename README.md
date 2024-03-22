# Labs API V3

This project is a test project and not a real project. It is intended for testing purposes only.

## Description

The Labs API V3 is a RESTful API built using Laravel framework. It provides various endpoints for managing labs and related data.

## Features

-   To
-   CRUD operations for labs and analyses with API
-   Search functionality
-   Pagination support

## Laravel Installation

To install Laravel, follow these steps:

1. Install Composer: Visit the [Composer website](https://getcomposer.org/) and follow the installation instructions for your operating system.
2. Open a terminal or command prompt and navigate to the project directory.
3. Run the following command to create a new Laravel project: `composer create-project --prefer-dist laravel/laravel project-name`
4. Once the installation is complete, navigate to the project directory: `cd project-name`
5. Start the development server: `php artisan serve`

## Lancast Tutorial

To access the Lancast tutorial, follow these steps:

1. Visit the [Lancast website](https://www.lancast.com/) and create an account.
2. Once logged in, navigate to the tutorial section.
3. Follow the instructions provided in the tutorial to learn and practice Laravel development.

## Installation

To install and run the project, follow these steps:

1. Clone the repository: `git clone https://github.com/your-username/Labs-API-V3.git`
2. Install dependencies: `composer install`
3. Configure the database connection in the `.env` file
4. Run database migrations: `php artisan migrate`
5. Start the development server: `php artisan serve`

## Usage

Once the project is up and running, you can use tools like Postman to interact with the API endpoints. Refer to the API documentation for detailed usage instructions.

# Lab API Endpoints

## GET /api/labs

This endpoint retrieves all labs along with their associated analyses.

## POST /api/labs

This endpoint creates a new lab. The request body should include the following fields:

-   `name`: The name of the lab (required)
-   `phone`: The phone number of the lab (required)
-   `photo`: The photo of the lab (required)
-   `address`: The address of the lab (required)

If the request is successful, it returns a JSON response with a message indicating that the lab has been added.

## GET /api/labs/{id}

This endpoint retrieves the lab with the specified ID.

## PUT /api/labs/{id}

This endpoint updates the lab with the specified ID. The request body should include the following fields:

-   `id`: The ID of the lab (required)
-   `name`: The new name of the lab (required)
-   `phone`: The new phone number of the lab (required)
-   `photo`: The new photo of the lab (required)
-   `address`: The new address of the lab (required)

If the request is successful, it returns a JSON response with a message indicating that the lab has been updated.

## DELETE /api/labs/{id}

This endpoint deletes the lab with the specified ID. If the request is successful, it returns a JSON response with a message indicating that the lab has been deleted.

## GET /api/labs/search

This endpoint retrieves labs and analyses based on a search term. The search term should be provided as a query parameter named `sherch`. The search term is used to filter the labs and analyses based on their `name` and `address` fields.

# Analyse API Endpoints

## GET /api/analyses

This endpoint retrieves all analyses along with their associated labs.

## POST /api/analyses

This endpoint creates a new analysis. The request body should include the following fields:

-   `name`: The name of the analysis (required)
-   `parms`: The parameters of the analysis (required)
-   `value`: The value of the analysis (required)
-   `lab_id`: The ID of the associated lab (required)

## GET /api/analyses/{id}

This endpoint retrieves the analysis with the specified ID.

## PUT /api/analyses/{id}

This endpoint updates the analysis with the specified ID. The request body should include the following fields:

-   `name`: The new name of the analysis (required)
-   `parms`: The new parameters of the analysis (required)
-   `value`: The new value of the analysis (required)
-   `lab_id`: The new ID of the associated lab (required)

## DELETE /api/analyses/{id}

This endpoint deletes the analysis with the specified ID.

## GET /api/analyses/search

This endpoint retrieves analyses based on a search term. The search term should be provided as a query parameter named `sherch`. The search term is used to filter the analyses based on their `name` and `parms` fields.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
