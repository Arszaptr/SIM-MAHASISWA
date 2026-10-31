SIM MAHASISWA — PAKET PEMBERSIHAN

Paket ini dibuat dari ZIP yang dikirim pengguna dengan mempertahankan struktur dan tampilan utama.
Perubahan keamanan/kelengkapan:
- Menghapus blok debug var_dump()/exit dari halaman login RBAC v2 dan mengembalikan formulir login normal.
- Menambahkan koneksi.php di folder sim_mahasiswa_rbac_v2 karena auth.php di folder tersebut memanggil file itu.
- Menghapus setupadmin.php dari paket agar endpoint pembuatan admin tidak terpublikasi.
- Mengeluarkan folder universitassemantik73 yang merupakan aplikasi lain dan berisi konfigurasi database terpisah.
- Tidak menyertakan dump SQL agar tidak dapat diunduh dari folder web jika paket diunggah langsung.

PENTING SEBELUM DIGUNAKAN DI INFINITYFREE:
1. Paket ini TIDAK mengubah database hosting. Tidak ada perintah DROP/RESET database di paket ini.
2. koneksi.php masih memakai konfigurasi lokal XAMPP (127.0.0.1/root/sim_mahasiswa). Sesuaikan dengan host, nama database, username, dan password MySQL SIM Mahasiswa dari panel InfinityFree sebelum login digunakan.
3. Upload file aplikasi ke folder yang benar. Jika situs yang ingin diperbaiki adalah domain utama, file index.php/login.php harus berada langsung di htdocs; jangan mengunggah folder bertingkat tanpa menyesuaikan URL.
4. Jangan mengunggah file konfigurasi aplikasi lain atau membagikan password database.
5. ZIP ini bukan jaminan otomatis bahwa Google Safe Browsing akan langsung menghapus peringatan. Setelah seluruh file di hosting diperiksa dan halaman deceptive dibersihkan, minta peninjauan melalui Search Console.
