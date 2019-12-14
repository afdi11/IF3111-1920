## Simple `LAPOR` :heavy_exclamation_mark:
Anda mengetahui aplikasi `lapor` yang dibuat oleh pemerintah republik indonesia? jika tidak silahkan kunjungi 
http://lapor.go.id, maka anda akan mendapatkan laman seperti gambar di bawah

![](tampilan/lapor.png)

Kali ini kita akan membuat aplikasi web seperti `lapor` untuk mengumpulkan laporan/komentar terkait layanan
di program studi teknik informatika ITERA.
**Luangkan waktu untuk membaca spesifikasi ini sampai selesai.** :kissing_heart:

### Anggota Tim :cyclone:
Project dikerjakan secara **berkelompok** dengan maksimal jumlah anggota adalah 2-3 orang mahasiswa.

### Petunjuk Pengerjaan :umbrella:
1. Fork pada repository ini dengan akun github anda.
2. Silakan commit pada repository anda (hasil fork). Lakukan berberapa commit dengan pesan yang bermakna,
contoh: fix css, membuat post done, jangan seperti final, benerin dikit, oke deh, update deh dll. 
Disarankan untuk tidak melakukan commit dengan perubahan yang besar karena akan mempengaruhi 
penilaian (contoh: hanya melakukan satu commit kemudian dikumpulkan).
3. Ubah **Penjelasan Teknis** pada bagian bawah readme.md ini dengan menjelaskan bagaimana cara anda:
PENJELASAN TEKNIK tubes Web

Installasi Framework (LARAVEL)
1.	Yang pertama adalah install composer terlebih dahulu pada PC
2.	Kemudian buka command prompt (cmd)
3.	Selanjutnya kita akan memulai instalasi laravel dengan mulai mendownload laravel menggunakan composer
4.	Kita masuk dahulu ke direktori dimana letak project Laravel nya ingin dibuat.
5.	Disini kita membuat project Laravel dalam folder htdocs didalam XAMPP
6.	Ketik “cd C:\XAMPP/htdocs/IF3111-1920” pada cmd
7.	Kemudian ketikkan perintah “composer create-project --prefer-dist laravel/IF3111-1920” untuk menginstall Laravel dan tekan enter
8.	Proses download akan memakan waktu beberapa menit tergantung dengan koneksi internet
9.	Setelah selesai kita akan punya folder project “IF3111-1920” dalam folder htdocs
10.	Jika ingin masuk ke folder project kita, caranya bisa melalui cmd dengan mengetikkan perintah “cd IF-3111-1920” dan ketik lagi “php artisan serve”
11.	Kita juga bisa menjalankan project laravel dengan langsung mengakses project kita melalui web browser dengan alamat “http://localhost/IF3111-1920/public”
Cara Koneksi basis data
1.	Yang pertama adalah pastikan kita memiliki sebuah database yang sudah dibuat
2.	Database yang sudah dibuat disini adalah factories
3.	Setelah itu kita mulai membuat koneksi databse php dan mysql dengan cara membuat sebuah file php
4.	Disini database yang sudah dibuat adalah UserFactory.php
5.	Kemudian import ke database yang sudah dibuat tadi
6.	Simpan file php tersebut pada directory localhost kita
Cara Melakukan validasi pada client-side
1.	Disini kita mempunyai validation.php, password.php, pagination.php, auth.php
2.	Kemudian menambahkan function validasi (form) pada kode program javascripst untuk memvalidasi field alamat tidak boleh kosong
3.	Setelah itu tambahkan controller untuk menampilkan halaman form dan memproses form
4.	Jadi kita membuat controller dengan dua action, satu untuk GET dan satunya untuk POST
5.	Disini yang akan digunakan untuk validasi adalah email dan password
6.	Jadi setelah pengguna menginputkan email dan password, data tersebut akan dikirimkan untuk di cocokkan dengan data pada database factories (UserFactory.php)
7.	Jika field alamat dikosongkan oleh pengguna saat menambah data, maka sistem akan menampilkan pesan error yang menerangkan bahwa field alamat tidak boleh kosong. Proses penyimpanan pun akan dibatalkan atau tidak dilanjutkan.
8.	Ataupun jika terjadi kesalahan saat input data atau data yang dimasukkan tidak cocok dengan yang ada di database, maka proses penyimpanan pun akan dibatalkan atau tidak dilanjutkan.

- Melakukan AJAX (mulai dari pengguna melakukan klik pada tombol LAPOR! sampai laporan/komentar terkirim).
4. Pull request dari repository anda ke repository ini dengan 
format **NIM** - **Nama Lengkap**. **Waktu terkahir proses pull request adalah 4 hari setelah 
ujian akhir semester (UAS)**
5. Data yang dikumpulkan adalah:
   - Source code aplikasi
   - Basis data, dan
   - Cara instalasi aplikasi anda
6. Penilaian:
   - Kerjasama tim
   - Kesesuaian dengan spesifikasi
   - Pemahaman dalam penggunaan framework
   - Antarmuka aplikasi
   - Bug free :beetle:
   
### Tools :hammer:
1. Untuk backend, wajib menggunakan PHP framework apapun (Contoh: Codeigniter, Laravel, Slim, Yii dll).
2. Gunakan MySQL atau basis data relasional lain untuk menyimpan data.
3. Untuk frontend, gunakan Javascript, HTML dan CSS. **Tidak boleh menggunakan library atau framework CSS atau JS seperti 
JQuery atau Bootstrap.** CSS sebisa mungkin ada di file yang berbeda (tidak inline styling/embeding styling).

### Spesifikasi Simple LAPOR!
#### Tampilan :soccer:
Anda diminta untuk membuat tampilan sedemikian hingga mirip dengan tampilan berikut. Website yang diminta tidak harus 
responsive. Desain tampilan tidak perlu dibuat indah. Icon dan jenis font tidak harus sama dengan contoh. Warna font, 
garis pemisah, dan perbedaan ukuran font harus terlihat sesuai contoh. Perhatikan juga tata letak elemen-elemen.

![](tampilan/utama.png)
- Search bar diletakkan di bagian paling atas dibawah judul.
- Tombol "cari" berada di sebelah kanan search bar.
- **Buat LAPOR!** digunakan untuk mengirimkan laporan/komentar baru.
- Tampilan search bar ini harus tetap ada walaupun anda tidak mengimplementasikan fitur search.
- Tampilan pertanyaan tidak harus urut berdasarkan "Laporan/Komentar terakhir", 
namun tulisan "Laporan/komentar Terakhir" ini harus ada.

![](tampilan/buat.png)
- Tampilan di atas digunakan untuk mengajukan atau mengubah laporan/komentar.
- Perhatikan label dari field pada form berada di dalam field (tidak di luar)
- Apek yang dilaporkan ditampilkan dalam bentuk `select`

![](tampilan/detail.png)
- Bagian ini menampilkan laporan/komentar. Bagian `datetime` harus ada. Tanda `kuote` tidak harus ada
- Perhatikan label dari field pada form berada di dalam field (tidak di luar)

### List laporan/komentar
Halaman utama berisi daftar judul pertanyaan, siapa yang bertanya, dan isi pertanyaan. Isi pertanyaan yang terlalu 
panjang harus dipotong. Silakan definisikan sendiri seberapa panjang agar tetap baik terlihat di layout yang Anda buat.

Pada masing-masing elemen list, terdapat menu untuk mengubah dan menghapus pertanyaan.

### Kirim laporan/komentar `LAPOR!`
Pengguna dapat mengajukan laporan/komentar. Form yang digunakan memiliki komentar (textarea), 
data lapiran berupa gambar 
dan file berekstention `doc, docx, xls, xlsx, ppt, pptx, pdf``. Gunakan HTTP POST.

### Ubah Laporan/komentar
Pengguna dapat mengubah laporan/komentar yang sudah dibuat. Form yang digunakan memiliki tampilan yang sama dengan 
form untuk bertanya, namun field-field yang ada sudah terisi. Gunakan HTTP POST untuk menyimpan perubahan.

### Hapus Laporan/komentar
Pengguna dapat menghapus laporan/komentar yang sudah dibuat. Lakukan konfirmasi penghapusan dengan `javascript`.

### Lihat Laporan/komentar
Pengguna dapat melihat laporan/komentar. Pada halaman ini terdapat informasi aspek yang dilaporkan.
(Dosen, Staff, Mahasiswa, Infrastruktur dan Pengajaran ), isi laporan/komentar, waktu pengiriman komentar `datetime` 
dan file lapiran. 

### Validasi
Validasi **wajib** dilakukan pada *client-side*, dengan menggunakan **javascript** bukan HTML 5 input type, yaitu:
- Setiap field pada form tidak boleh kosong.
- minimal jumlah kata dalam laporan/komentar adalah 20 kata.

### Bonus
Pengguna dapat mencari laporan/komentar dengan melakukan search ke `isi laporan/komentar`.

### Penjelasan Teknis
`Silakan isi bagian ini dengan penjelasan anda, sesuai Petunjuk Pengerjaan di atas.`

### Knowledge
Untuk meringankan beban tugas ini, ada berberapa keyword yang bisa anda cari untuk menyelesaikan tugas ini.
- CSS: margin, padding, header tag, font-size, text-align, float, clear, border, color, div, span, placeholder, 
anchor tag.
- Javascript : XMLHTTPRequest.
- PHP Framework : [Codeigniter](https://codeigniter.com/en/docs), [Laravel](https://laravel.com/docs/6.x) dll.
- SQL query: SELECT, INSERT, UPDATE, DELETE, WHERE, operator LIKE.

:telephone: Jika ada pertanyaan silakan tanyakan lewat `Asisten`.

### About :honeybee:

Dosen       : Rajif Agung Yunmar, S.Kom., M.Cs.	,Ahmad Luky Ramdani, S.Komp., M.Kom. ,
Arief Ichwani, S.Kom., M.Cs., Andre Febrianto, S.Kom., M.Eng, Ilham Firman Ashari, S.Kom., M.T

