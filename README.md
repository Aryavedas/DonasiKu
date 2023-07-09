# DonasiKu - Aplikasi Donasi menggunakan Laravel dan Midtrans

DonasiKu adalah sebuah aplikasi donasi yang dibangun menggunakan kerangka kerja Laravel dan menggunakan Midtrans sebagai payment gateway (saat ini masih dalam mode sandbox). Aplikasi ini memungkinkan pengguna untuk melakukan donasi secara online melalui berbagai metode pembayaran yang didukung oleh Midtrans.

## Menjalankan Sandbox Pembayaran Midtrans

Untuk menjalankan simulasi pembayaran menggunakan Midtrans sandbox, Anda dapat mengakses halaman [ini](https://simulator.sandbox.midtrans.com/gopay/ui/index). Simulasi ini akan memungkinkan Anda untuk melakukan pembayaran menggunakan metode GoPay dalam mode sandbox.

## Instalasi

Berikut adalah langkah-langkah untuk menginstal dan menjalankan aplikasi DonasiKu di lingkungan lokal:

1. Pastikan PHP dan Composer sudah terinstal di komputer Anda.
2. Clone repositori ini ke direktori lokal Anda.
3. Masuk ke direktori proyek.
4. Salin file `.env.example` menjadi `.env`.
5. Buatlah kunci aplikasi baru.
6. Atur konfigurasi database di file `.env`.
7. Jalankan migrasi database dan pengisian data awal.
8. Jalankan server pengembangan lokal.
9. Akses aplikasi di browser melalui URL `http://localhost:8000`.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan lakukan langkah-langkah berikut:

1. Fork repositori ini.
2. Buat branch baru untuk fitur atau perbaikan yang akan Anda tambahkan.
3. Lakukan perubahan yang diperlukan dan commit perubahan Anda.
4. Push branch ke repositori remote Anda.
5. Buat pull request di repositori ini dan jelaskan perubahan yang Anda usulkan.

## Lisensi

Proyek ini menggunakan lisensi MIT. Untuk informasi lebih lanjut, silakan lihat berkas [LICENSE](LICENSE).
