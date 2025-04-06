# 📚 Book Website

A modern Laravel web app that showcases popular books with a clean UI, dynamic pages, and Livewire interactivity. Built with Laravel, Livewire, and Filament.

---

## ✨ Features

- 📖 Browse book lists and detailed pages
- ⚡ Interactive Livewire-powered UI
- 🎨 Admin panel built with Filament
- 🖼️ Dynamic image handling (local or remote)
- 📄 Static pages: About & Contact
- ✅ Comprehensive tests with Pest PHP

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
```

---

## 🧪 Testing

This project uses [Pest PHP](https://pestphp.com/) for clean and expressive testing.

```bash
php artisan test
```

### ✅ Test Coverage

- Homepage (`/`)
- `/books`, `/about`, `/contact`
- 404 error pages
- Image accessors (e.g., `img_path`)

---

## 🛠️ Tech Stack

- Laravel 12
- Livewire
- Filament
- Blade
- MySQL
- Pest PHP

---

## 🤝 Contributing

We welcome contributions! Follow these steps:

1. **Fork and clone the repository**

2. **Create a new branch:**

    ```bash
    git checkout -b feature/your-feature
    ```

3. **Submit a pull request**

---

## 📬 Contact

- **Email**: [Lakhtyari.01@gmail.com](mailto:Lakhtyari.01@gmail.com)
- **GitHub**: [@lakhtyari-abderrezzak](https://github.com/lakhtyari-abderrezzak)

---

## 📜 License

This project is currently not licensed. If you'd like to contribute or discuss licensing options, please feel free to reach out.

We welcome collaboration and are open to discussing licensing models to suit contributors' needs.
