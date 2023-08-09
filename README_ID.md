# DonasiKu - Aplikasi Donasi menggunakan Laravel dan Midtrans

**DonasiKu** adalah sebuah aplikasi donasi yang dibangun menggunakan kerangka kerja **Laravel** dan menggunakan **Midtrans** sebagai payment gateway (saat ini masih dalam mode sandbox). Aplikasi ini memungkinkan pengguna untuk melakukan donasi secara online melalui berbagai metode pembayaran yang didukung oleh Midtrans.

Sebelum menjalankan aplikasi ini, disarankan untuk membaca **dokumentasi Midtrans** terlebih dahulu untuk memahami penggunaan dan integrasi dengan Midtrans. Dokumentasi resmi Midtrans dapat diakses di [https://docs.midtrans.com/docs](https://docs.midtrans.com/docs).

## Menjalankan Sandbox Pembayaran Midtrans

Untuk menjalankan simulasi pembayaran menggunakan Midtrans sandbox, Anda dapat mengakses halaman [https://simulator.sandbox.midtrans.com/gopay/ui/index](https://simulator.sandbox.midtrans.com/gopay/ui/index). Simulasi ini akan memungkinkan Anda untuk melakukan pembayaran menggunakan metode GoPay dalam mode sandbox.

Pastikan untuk menggunakan **lingkungan sandbox** saat menguji dan mengembangkan aplikasi ini. Setelah selesai menguji, Anda dapat beralih ke lingkungan produksi Midtrans ketika aplikasi siap untuk digunakan secara nyata.

## Feature Preview
1. Home Page
![home page](https://github.com/Aryavedas/DonasiKu/assets/120029429/13a6f059-cf8a-419e-8820-5c6a54d45a91)

2. Donation Page
![donation page](https://github.com/Aryavedas/DonasiKu/assets/120029429/7a281cf0-6a87-4765-90a3-42c3c5475772)

3. Donation List
![donation list page](https://github.com/Aryavedas/DonasiKu/assets/120029429/53cc52f6-1720-4b1f-80ba-b15d201c463b)

4. Payment Method
![payment method page](https://github.com/Aryavedas/DonasiKu/assets/120029429/8a06e600-3d10-4347-b075-b9dc0bd1dc88)

## Instalasi

Berikut adalah langkah-langkah untuk menginstal dan menjalankan aplikasi DonasiKu di lingkungan lokal:

1. Pastikan **PHP** dan **Composer** sudah terinstal di komputer Anda.

2. Clone repositori ini ke direktori lokal Anda:
   ```bash
   git clone https://github.com/username/donasi-ku.git

3. Masuk ke direktori proyek:

    ```bash
    cd donasi-ku

4. Salin file .env.example menjadi .env:

    ```bash
    cp .env.example .env

5. Buatlah kunci aplikasi baru dengan menjalankan perintah:

    ```bash
    php artisan key:generate

6. Atur konfigurasi database di file .env dengan mengisi DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, dan DB_PASSWORD sesuai dengan pengaturan lokal Anda.

7. Jalankan migrasi database dan pengisian data awal:

    ```bash
    php artisan migrate --seed

8. Jalankan server pengembangan lokal:

    ```bash
    php artisan serve

9. Akses aplikasi di browser melalui URL http://localhost:8000.

## Kontribusi
Jika Anda ingin berkontribusi pada proyek ini, silakan lakukan langkah-langkah berikut:

Fork repositori ini.

Buat branch baru untuk fitur atau perbaikan yang akan Anda tambahkan:

git checkout -b fitur-baru

Lakukan perubahan yang diperlukan dan commit perubahan Anda:

git commit -m "Menambahkan fitur baru"

Push branch ke repositori remote Anda:

git push origin fitur-baru

Buat pull request di repositori ini dan jelaskan perubahan yang Anda usulkan.

Lisensi
Proyek ini menggunakan lisensi MIT. Untuk informasi lebih lanjut, silakan lihat berkas LICENSE.
