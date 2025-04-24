<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
</p>

<h1 align="center">Laravel CRUD Application</h1>

<p align="center">
  A simple CRUD (Create, Read, Update, Delete) web app built using Laravel for learning and demonstration purposes.
</p>

---

## 📌 Features

- 📝 Create a category
- 📃 View all categories
- ✏️ Edit a category
- ❌ Delete a category


---

## 🔧 Tech Stack

- **Framework**: Laravel 10.x
- **Database**: MySQL
- **Frontend**: Blade Templates + HTML/CSS
- **Server**: Laravel's built-in dev server

---

## 🚀 Getting Started

### 1. Clone the repository


git clone https://github.com/taahashahzad/laravel-crud-app.git
cd laravel-crud-app


### 2. Install dependencies


composer install


### 3. Set up environment


cp .env.example .env
php artisan key:generate


Update your `.env` file with your database credentials:


DB_DATABASE=your_db_name
DB_USERNAME=your_username
DB_PASSWORD=your_password


### 4. Run migrations


php artisan migrate


### 5. Serve the application


php artisan serve


Visit [http://localhost:8000](http://localhost:8000)


## 🙌 Contributing

Feel free to fork this repo, make improvements, and create a pull request. Contributions are always welcome!

---

## 📬 Contact

Made with ❤️ by [Taaha Shahzad](https://github.com/taahashahzad)

---

## 📝 License

This project is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).
