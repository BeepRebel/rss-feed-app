# RSS Feed Web Application

This project is a web application built with Laravel that fetches and displays news articles from the Times of India's Mumbai news section. The application provides features like searching, sorting, and pagination for a better user experience.

## Features

- Fetches news articles dynamically from an RSS feed.
- Displays articles in a searchable, sortable, and paginated data table.
- Responsive design for optimal viewing on various devices.
- Elegant and user-friendly interface with custom styles.

## Prerequisites

- PHP 8.3.8 or higher
- Composer
- Node.js and npm (for frontend assets)
- SQLite (or another database supported by Laravel)

## Installation

Follow these steps to set up and run the project:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/yourusername/rss-feed-app.git
    cd rss-feed-app
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Install JavaScript dependencies:**

    ```bash
    npm install
    ```

4. **Compile frontend assets:**

    ```bash
    npm run dev
    ```

5. **Configure the environment:**

    Copy the `.env.example` file to `.env` and update the necessary environment variables.

    ```bash
    cp .env.example .env
    ```

    **Set the SQLite database:**

    ```plaintext
    DB_CONNECTION=sqlite
    DB_DATABASE=/absolute/path/to/database.sqlite
    ```

    Create an empty SQLite database file:

    ```bash
    touch database/database.sqlite
    ```

6. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

7. **Run database migrations:**

    ```bash
    php artisan migrate
    ```

8. **Start the development server:**

    ```bash
    php artisan serve
    ```

9. **Access the application:**

    Open your web browser and navigate to `http://localhost:8000/rssfeed`.

## Project Structure

- **app/Http/Controllers/RssFeedController.php:** Controller for fetching and displaying the RSS feed data.
- **resources/views/rssfeed.blade.php:** Blade template for displaying the data table.
- **public/css/styles.css:** Custom CSS styles for the application.
- **routes/web.php:** Route definition for accessing the RSS feed page.

## Technologies Used

- **Laravel 9.x**
- **PHP 8.3.8**
- **Composer**
- **Node.js & npm**
- **DataTables jQuery Plugin**
- **SQLite**

## Custom CSS Styles

The `styles.css` file in the `public/css` directory contains custom styles to enhance the appearance and responsiveness of the application. It includes styles for:

- Body and container elements
- Data table elements (headers, rows, links)
- Responsive adjustments for smaller screens

## Troubleshooting

If you encounter any issues during setup or running the application, consider the following steps:

- Ensure all dependencies are installed correctly.
- Verify the `.env` file configuration, especially the database connection.
- Check the server logs for any errors (`storage/logs/laravel.log`).

## License

This project is open-source.

## Contact

For any inquiries or support, please contact charvipahuja2385@gmail.com(mailto:charvipahuja2385@gmail.com).
