SIM MAHASISWA - PETUNJUK INSTALASI

1. Ekstrak folder simmahasiswa ke C:\xampp\htdocs\simmahasiswa
2. Jalankan Apache dan MySQL dari XAMPP.
3. Buka http://localhost/phpmyadmin
4. Pilih menu Import dan impor sim_mahasiswa.sql.
   PERHATIAN: skrip ini menghapus tabel/view lama di database sim_mahasiswa,
   kemudian membuat ulang tabel dan data contoh. Cadangkan data penting terlebih dahulu.
5. Buka http://localhost/simmahasiswa/
6. Klik Login. Akun demo:
   Username: Admin
   Password: Admin123!

Jika login gagal setelah impor, periksa tabel pengguna dan pastikan akun Admin ada.
Koneksi default ada di koneksi.php: host 127.0.0.1, user root, password kosong,
port 3306. Sesuaikan port/password jika konfigurasi XAMPP Anda berbeda.

Database lengkap memuat tabel audit_log, fakultas, mahasiswa, pengguna,
program_studi, roles, universitas, dan dua view laporan/profil.
Ganti password demo setelah login pertama.
