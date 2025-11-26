# Praktikum9 – PHP Modular

**Tujuan Praktikum**

1. Mahasiswa mampu memahami konsep modularisasi program pada PHP.

2. Mahasiswa mampu membuat template halaman menggunakan header dan footer.

3. Mahasiswa mampu menerapkan routing menggunakan parameter URL sederhana.

4. Mahasiswa mampu membuat koneksi ke database melalui file konfigurasi.

5. Mahasiswa mampu mengimplementasikan operasi CRUD dasar.

6. Mahasiswa mampu membangun struktur folder yang terorganisasi dan mudah dikelola.


**Instruksi Praktikum (Sesuai Modul PDF)**

1. Membuat folder project bernama lab9_php_modular pada direktori htdocs.

2. Membuat file header.php, footer.php, home.php, dan about.php sebagai bagian dari modularisasi tampilan.

3. Membuat folder config yang berisi file database.php untuk koneksi ke MySQL.

4. Membuat folder user untuk mengelompokkan fitur CRUD terkait user.

5. Menerapkan routing menggunakan format:
index.php?page=user/list

6. Mengintegrasikan koneksi database pada seluruh halaman yang membutuhkan.

7. Mengimplementasikan fitur CRUD (Create, Read, Update, Delete) untuk tabel users.


---

# 1. Struktur Folder Proyek

Struktur folder yang digunakan dalam praktikum ini adalah sebagai berikut:

lab9_php_modular/
│── index.php
│── header.php
│── footer.php
│── home.php
│── about.php
│── style.css
│
│── config/
│     └── database.php
│
│── user/
      ├── list.php
      ├── form.php
      ├── edit.php
      └── delete.php


# 2. Dokumentasi Proses Pengerjaan (Screenshot 1–7)

Bagian ini berisi seluruh screenshot proses pengerjaan praktikum secara berurutan.

*Screenshot 1 – Tampilan awal “Index of” pada localhost*
Menampilkan folder yang tersedia pada direktori htdocs, termasuk folder lab9_php_modular.

<img width="605" height="567" alt="Screenshot 2025-11-26 154426" src="https://github.com/user-attachments/assets/d419c93c-bb3e-4a23-8dfa-b2b9697a580a" />

*Screenshot 2 – Tampilan Halaman Home*
Menampilkan halaman utama (Home) ketika membuka index.php.

<img width="549" height="313" alt="Screenshot 2025-11-26 154550" src="https://github.com/user-attachments/assets/e94f9b15-05cb-4567-a8f3-dbb0e35fbd67" />

*Screenshot 3 – Tampilan Halaman Tentang*
Menampilkan halaman about.php melalui routing ?page=about.

<img width="605" height="344" alt="Screenshot 2025-11-26 163155" src="https://github.com/user-attachments/assets/2b3f3dc4-d604-4a49-b790-a74422fc8c4e" />

*Screenshot 4 – Pembuatan Database “prak8” beserta tabel “users”*
Menampilkan proses pembuatan database baru bernama prak8 dan penambahan tabel users.
