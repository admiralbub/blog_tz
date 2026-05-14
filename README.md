# Blog Project (PHP + MySQL + Smarty)

A simple and fully functional blog system built with pure PHP 8.1 (without frameworks), MySQL, and Smarty template engine.

The project implements:
- Categories
- Articles (posts)
- Related articles
- Sorting and pagination
- Seeder for test data
- MVC-like architecture
- Docker environment

---

# Tech Stack

- PHP 8.1+
- MySQL
- Smarty
- Docker / Docker Compose

---


# Requirements

Before starting the project, make sure the following are installed:

- Docker
- Docker Compose

Check versions:

```bash
docker -v
docker-compose -v
```

---

# Installation & Setup

## 1. Clone repository

```bash
git clone https://github.com/admiralbub/blog_tz.git
cd blog_tz
```

---

## 2. Build and start containers

```bash
docker-compose up -d --build
```

Check running containers:

```bash
docker ps
```

---

## 3. Install Composer dependencies

```bash
docker-compose run --rm composer install
```

---

## 4. Import database

Enter MySQL container:

```bash
docker-compose exec mysql bash
```

Import database dump:

```bash
mysql -u root -p blog < /var/www/html/blog.sql
```

> MySQL password is configured in `env/mysql.env`

Exit container:

```bash
exit
```

---

## 5. Run Seeder

Seeder generates demo categories and articles.

```bash
docker-compose exec php php seed.php
```

---

# Access

After successful startup the project will be available at:

```bash
http://localhost:8080
```

---

# Implemented Features

## Categories
- Category list
- Category page
- Related articles by category

## Articles
- Article page
- Views counter
- Sorting by:
  - newest
  - views
- Related posts block

## Additional
- Pagination
- Seeder with fake data
- Smarty templates
- MVC structure
- Clean PHP without frameworks

---

# Useful Commands

## Stop containers

```bash
docker-compose down
```

## Restart containers

```bash
docker-compose restart
```

## Rebuild containers

```bash
docker-compose up -d --build
```

---

#  Database

SQL dump file:

```bash
blog.sql
```

Seeder file:

```bash
seed.php
```

---
