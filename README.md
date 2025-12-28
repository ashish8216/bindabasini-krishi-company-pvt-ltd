# Bindabasini Krishi Company Pvt. Ltd.

An advanced **Agriculture E-Commerce Platform** built using **Laravel**, **Tailwind CSS**, and modern development tools.  
Designed for selling agricultural tools, equipment, seeds, and farming accessories.

![Banner](public/Screenshot%202025-12-25%20110148.png)

---

## 🌾 Project Overview

Bindabasini Krishi Company Pvt. Ltd. is a modern e-commerce system built with a modular structure for speed, scalability, and easy maintenance.  
It supports multi-user pricing, inventory control, an admin panel, and clean responsive UI built with Tailwind.

---

## 🚀 Tech Stack

| Technology             | Description                                      |
| ---------------------- | ------------------------------------------------ |
| **Laravel Framework**  | Backend logic, authentication, API               |
| **Laravel Breeze**     | Authentication scaffolding with Blade / Tailwind |
| **MySQL Database**     | Relational database                              |
| **Laravel Modules**    | Modular architecture for large apps              |
| **Tailwind CSS**       | Modern utility-first CSS framework               |
| **Vite**               | Lightning-fast bundler                           |
| **SweetAlert**         | Interactive alerts                               |
| **Eloquent Sluggable** | Auto slug generation                             |
| **FilamentPHP v4**     | Admin panel builder                              |
| **FontAwesome Icons**  | Icons used in the frontend UI                    |

---

## 📌 Features

-   🛒 **Full E-commerce Product System**
-   🔐 **Authentication using Laravel Breeze**
-   👥 **Multi-user Pricing Logic** (Retailer, Dealer, Province Dealer, Shareholder)
-   🏷 **Product Category / Brand / Unit Management**
-   📦 **Stock & Inventory Management**
-   🌐 **SEO-friendly URLs with Sluggable**
-   🧩 **Module-Based Architecture**
-   ⚡ **Fast UI with Tailwind + Vite**
-   🛠 **Admin Panel using Filament v4**
-   🎨 **FontAwesome Icons integrated in UI**
-   📱 **Responsive Mobile-Friendly Layout**
-   🔍 **Search, Sorting, Filter System**

---

## 📥 Installation Guide

### 1️⃣ Clone Project

```bash

git clone https://github.com/ashish8216/bindabasini-krishi-company.git
cd bindabasini-krishi-company

```

## ⚙️ Project Setup

Follow these steps to install and run the project on your local machine.

### 1️⃣ Update Composer Dependencies

```bash

composer update
copy('.env.example', '.env')
php artisan key:generate
php artisan migrate:fresh --seed
npm install
npm run build

```
