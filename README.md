# SiPinjam (Pustaka Digital & Peminjaman Alat Laboratorium)

SiPinjam adalah aplikasi berbasis web dan REST API yang dirancang untuk mengelola inventaris serta proses peminjaman alat-alat laboratorium secara digital. Aplikasi ini memudahkan mahasiswa untuk meminjam peralatan praktikum dan membantu administrator dalam memantau ketersediaan stok serta riwayat peminjaman secara *real-time*.

## Pembuat

* **Nama**: Rizky Satria Pratama

* **NIM**: 225443050

## Langkah Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal Anda:

1. **Clone Repository**

   ```
   git clone https://github.com/rizkysatriaP/sipinjam.git
   cd sipinjam
   
   ```

2. **Install Dependensi Composer**

   ```
   composer install
   
   ```

3. **Salin File Konfigurasi Environment**

   ```
   copy .env.example .env
   
   ```

4. **Generate App Key**

   ```
   php artisan key:generate
   
   ```

5. **Buat Database**
   Buat database MySQL baru melalui phpMyAdmin dengan nama **`db_sipinjam`**.

6. **Konfigurasi Database di `.env`**
   Sesuaikan pengaturan koneksi database pada file `.env`:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_sipinjam
   DB_USERNAME=root
   DB_PASSWORD=
   
   ```

7. **Jalankan Migrasi dan Seeder**

   ```
   php artisan migrate --seed
   
   ```

8. **Jalankan Server Lokal**

   ```
   php artisan serve
   
   ```

   Akses aplikasi melalui browser di alamat: `http://127.0.0.1:8000`

## Akun Uji (Testing Accounts)

Anda dapat menggunakan akun berikut untuk masuk ke dalam aplikasi:

* **Administrator**

  * **Email**: `admin@sipinjam.test`

  * **Password**: `password`

* **Mahasiswa**

  * **Email**: `mhs@sipinjam.test`

  * **Password**: `password`

## Daftar Endpoint API

Semua alamat API diawali dengan awalan `/api`.

| Method | Alamat | Gunanya | Akses | 
| ----- | ----- | ----- | ----- | 
| **GET** | `/api/halo` | Tes API pertama | Publik | 
| **GET** | `/api/kategori` | Daftar kategori dan jumlah alatnya | Publik | 
| **GET** | `/api/alat` | Daftar alat (mendukung `?cari=` dan `?kategori=`) | Publik | 
| **GET** | `/api/alat/{id}` | Detail satu alat | Publik | 
| **POST** | `/api/login` | Login untuk mendapatkan token | Publik | 
| **GET** | `/api/me` | Data pengguna pemilik token | Token | 
| **POST** | `/api/logout` | Mematikan token | Token | 
| **GET** | `/api/peminjaman` | Riwayat peminjaman milik sendiri | Token | 
| **POST** | `/api/peminjaman` | Mengajukan peminjaman alat | Token | 
| **POST** | `/api/alat` | Menambah alat baru | Token Admin | 
| **PUT** | `/api/alat/{id}` | Mengubah data alat | Token Admin | 
| **DELETE** | `/api/alat/{id}` | Menghapus alat | Token Admin | 

````

---

### Cara Mengisi / Memasukkannya di VS Code / Text Editor Anda:

1. Buka folder proyek **`peminjaman225443050rizky`** di VS Code.
2. Cari file **`README.md`** di panel sebelah kiri (jika belum ada, buat file baru lalu beri nama `README.md`).
3. Hapus seluruh isi lama file tersebut (isi bawaan Laravel), lalu **salin dan tempel (paste)** isi dokumentasi di atas.
4. Simpan file tersebut dengan menekan tombol **Ctrl + S**.

Setelah disimpan, Anda tinggal melanjutkan ke perintah Git di terminal untuk melakukan *commit* dan *push* ke GitHub:
```bash
git add .
git commit -m "Tambahkan dokumentasi README.md"
git push origin main

````

Apakah Anda sudah berhasil menempelkan isi `README.md` tersebut ke file proyek Anda?