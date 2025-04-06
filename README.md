# My Project

## Description
A book website that showcases some of the most read books. It provides users with an engaging platform to explore popular titles, discover key details about each book, and find inspiration for their next read.

## Installation
1. Clone the repository:
    ```bash
    git clone https://github.com/lakhtyari-abderrezzak/Book_Website.git
    ```
2. Navigate to the project directory:
    ```bash
    cd Book_Website
    ```
3. Install dependencies using Composer:
    ```bash
    composer install
    ```
4. Set up the environment file:
    ```bash
    cp .env.example .env
    ```
5. Generate the application key:
    ```bash
    php artisan key:generate
    ```
6. Run database migrations:
    ```bash
    php artisan migrate
    ```
7. Create a symbolic link for storage:
    ```bash
    php artisan storage:link
    ```
8. Start the development server:
    ```bash
    php artisan serve
    ```
9. Compile assets using npm:
    ```bash
    npm run dev
    ```

## Usage
To start the development server and view the website locally, run the following command:
```bash
php artisan serve
```
This project is built using Laravel, Livewire, and Filament, providing a robust and dynamic experience.
```

## Contributing
Contributions are welcome! Please follow these steps:
1. Fork the repository.
2. Create a new branch:
    ```bash
    git checkout -b feature-name
    ```
3. Commit your changes:
    ```bash
    git commit -m "Add feature-name"
    ```
4. Push to the branch:
    ```bash
    git push origin feature-name
    ```
5. Open a pull request.

## License
This project does not currently have a license. If you would like to contribute, please reach out to discuss licensing options.

## Contact
For questions or feedback, please contact [Lakhtyari.01@gmail.com].