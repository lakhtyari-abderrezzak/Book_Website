# 📚 Book Website

A modern Laravel web app that showcases popular books with clean UI, dynamic pages, and Livewire interactivity. Built with Laravel, Livewire, and Filament.

---

## ✨ Features

- 📖 Book list and detail pages
- ⚡ Livewire-powered UI
- 🎨 Admin panel with Filament
- 🖼️ Dynamic image accessor (local or remote)
- 📄 Static pages: About & Contact
- ✅ Pest feature + unit tests

---

## 🚀 Installation

```bash
git clone https://github.com/lakhtyari-abderrezzak/Book_Website.git
cd Book_Website

composer install
npm install

cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan storage:link

npm run dev
php artisan serve


## 🧪 Testing

Uses [Pest PHP](https://pestphp.com/) for clean, expressive testing.

```bash
php artisan test

### ✅ Test Coverage

- Homepage (`/`)
- `/books`, `/about`, `/contact`
- 404 error pages
- Accessors (e.g., `img_path`)


## 🛠️ Tech Stack
- Laravel 12

- Livewire

- Filament

- Blade

- MySQL

- Pest

## 🤝 Contributing

We welcome contributions! Follow these simple steps:

1. **Fork & clone the repository**

2. **Create a new branch:**

   ```bash
   git checkout -b feature/your-feature


## 📬 Contact

- **Email**: [Lakhtyari.01@gmail.com](mailto:Lakhtyari.01@gmail.com)
- **GitHub**: [@lakhtyari-abderrezzak](https://github.com/lakhtyari-abderrezzak)


## License

This project is currently not licensed. If you would like to contribute or discuss licensing options, please feel free to reach out.

We welcome collaboration and are open to discussing various licensing models to suit the needs of contributors.


