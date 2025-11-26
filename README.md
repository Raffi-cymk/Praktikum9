# Praktikum9 – PHP Modular

**Tujuan Praktikum**

1. Mahasiswa mampu memahami konsep modularisasi program pada PHP.

2. Mahasiswa mampu membuat template halaman menggunakan header dan footer.

3. Mahasiswa mampu menerapkan routing menggunakan parameter URL sederhana.

4. Mahasiswa mampu membuat koneksi ke database melalui file konfigurasi.

5. Mahasiswa mampu mengimplementasikan operasi CRUD dasar.

6. Mahasiswa mampu membangun struktur folder yang terorganisasi dan mudah dikelola.


---

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

<img width="1366" height="459" alt="Screenshot 2025-11-26 155703" src="https://github.com/user-attachments/assets/6475e3e3-ece9-495d-bf71-45554850cd32" />

*Screenshot 5 – Struktur Tabel Users*

Menampilkan struktur tabel dengan kolom:

| Nama Kolom | Tipe Data                      |
| ---------- | ------------------------------ |
| id         | INT AUTO_INCREMENT PRIMARY KEY |
| nama       | VARCHAR(100)                   |
| email      | VARCHAR(100)                   |


<img width="1348" height="508" alt="Screenshot 2025-11-26 161013" src="https://github.com/user-attachments/assets/47b1d37c-4be9-4587-9ab4-e65f86088e65" />


*Screenshot 6 – Tampilan Daftar User (Read Data)*

Menampilkan daftar data user yang telah disimpan pada database.

<img width="1366" height="423" alt="Screenshot 2025-11-26 161131" src="https://github.com/user-attachments/assets/6cf6e1b9-47a3-4cbe-b71d-80e49b977726" />

*Screenshot 7 – Tampilan Daftar User (CRUD Lengkap)*

Menampilkan halaman user yang memiliki fitur lengkap:

* Tambah User

* Edit User

* Hapus User

<img width="1366" height="455" alt="Screenshot 2025-11-26 162410" src="https://github.com/user-attachments/assets/4f33b67a-3c27-406e-8cd9-cba4602222cc" />


---

# 3. Fitur CRUD Lengkap

Pada praktikum ini telah diterapkan fitur CRUD sebagai berikut:

**1. Create (Tambah User)**

Menggunakan file:
user/form.php
Form input data kemudian disimpan ke database menggunakan query INSERT.

**2. Read (Daftar User)**

Menggunakan file:
user/list.php
Menampilkan seluruh data dari tabel users menggunakan query SELECT.

**3. Update (Edit User)**

Menggunakan file:
user/edit.php
Mengambil data berdasarkan id, menampilkan form edit, dan menyimpan perubahan dengan query UPDATE.

**4. Delete (Hapus User)**

Menggunakan file:
user/delete.php
Menghapus data berdasarkan parameter ID menggunakan query DELETE.

Semua fitur CRUD ini telah berjalan melalui sistem routing:
index.php?page=user/list
index.php?page=user/form
index.php?page=user/edit&id=...


---

# 4. Pembahasan Singkat
**Modularisasi**

Modularisasi diterapkan dengan memisahkan komponen yang digunakan secara berulang, yaitu:

header.php

footer.php
Hal ini membuat struktur kode lebih bersih dan mudah dipelihara.


**Routing**

Routing diterapkan melalui parameter:
?page=

yang kemudian diproses oleh index.php untuk memanggil file yang sesuai.
Routing ini memungkinkan navigasi antar halaman tanpa perlu menulis banyak file HTML terpisah.


**Koneksi Database**

Koneksi database dibuat pada satu file terpusat:
config/database.php
Sehingga apabila konfigurasi berubah, hanya perlu diperbarui pada satu lokasi.

**CRUD**

Implementasi CRUD mencakup:

* Penambahan data

* Pengeditan data

* Penghapusan data

* Penampilan data dalam tabel

CRUD dibuat pada folder terpisah user/ agar struktur lebih terorganisasi.


---

# 5. Pertanyaan dan Tugas

Implementasikan konsep modularisasi pada kode program praktikum 8 tentang database, sehingga setiap halamannya memiliki template tampilan yang sama. Dan terapkan penggunaan Routing agar project menjadi lebih modular.

<img width="911" height="619" alt="image" src="https://github.com/user-attachments/assets/bbde54dc-c364-4433-b6b0-43b1b2e041e3" />

Routing menggunakan url: index.php?page=user/list

Opsional: Gunakan htaccess agar url lebih SEO Friendly.
Contoh URL: (base-domain)/user/list


---

# 6. Kesimpulan

Pada praktikum ini telah berhasil dibangun sebuah aplikasi PHP sederhana dengan konsep modularisasi, routing, koneksi database, serta fitur CRUD lengkap. Struktur folder yang digunakan mendukung keteraturan kode dan memudahkan proses pengembangan. Seluruh fitur telah diimplementasikan sesuai instruksi modul praktikum, dan program berjalan dengan baik.
