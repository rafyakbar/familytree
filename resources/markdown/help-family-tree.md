## Bantuan

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 1. Konsep: Model & hubungan

### a. Orang

<ul>
    <li>Seseorang dapat memiliki 1 ayah biologis (1 orang, berdasarkan <b>father_id</b>)</li>
    <li>Seseorang dapat memiliki 1 ibu biologis (1 orang, berdasarkan <b>mother_id</b>)</li>
    <li>Seseorang dapat memiliki 1 set orang tua, biologis atau tidak (1 pasangan dari 2 orang, berdasarkan <b>parents_id</b>)</li>
    <li>Seseorang dapat memiliki 0 hingga banyak anak biologis (n orang, berdasarkan father_id/mother_id)</li>
    <li>Seseorang dapat memiliki 0 hingga banyak pasangan (n orang), menjadi bagian dari 0 hingga banyak pasangan (lawan jenis atau jenis kelamin biologis yang sama)</li>
    <li>Seseorang dapat menjadi bagian dari pasangan dengan pasangan yang sama beberapa kali (menikah lagi atau bersatu kembali)</li>
</ul>

### b. Pasangan

<ul>
    <li>Sebuah pasangan dapat memiliki 0 hingga banyak anak (berdasarkan parents_id sebagai pasangan atau father_id/mother_id secara individu)</li>
    <li>Sebuah pasangan bisa menikah atau tidak, tetap bersama atau terpisah sementara</li>
</ul>

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 2. Autentikasi, multi-tenant dan aksesibilitas data

### a. Pengguna

<img src="img/help/genealogy-002aa.webp" class="rounded" alt="Menu">

Pengguna dapat <b>mendaftar</b> sendiri.<br/>
Setidaknya diperlukan <b>nama belakang</b>, alamat <b>e-mail</b> yang valid, <b>bahasa</b>, <b>waktu</b> dan <b>kata sandi</b>.

<img src="img/help/genealogy-002bb.webp" class="rounded" alt="Daftar">

Setelah pendaftaran dan verifikasi email yang bersifat opsional, pengguna dapat <b>masuk</b>.<br/>

<img src="img/help/genealogy-002cc.webp" class="rounded" alt="Login">

Pengguna yang terautentikasi, tanpa undangan, secara default akan menjadi bagian dari (dan memiliki) <b>tim pribadi</b> mereka sendiri.<br/>
Pengguna baru, setelah menerima undangan melalui email dari pengguna lain dan mendaftar, secara default akan masuk ke tim yang mereka diundang. Pengguna tersebut juga secara default memiliki tim pribadi mereka sendiri yang tersedia.

<img src="img/help/genealogy-002d.webp" class="rounded" alt="Tim">

<b>Autentikasi Dua Faktor</b> (2FA) dan <b>Verifikasi Email</b> dapat diaktifkan dan dikonfigurasi di <b>config/fortify.php</b>.

### b. Akun pengguna dan profil

Pengguna yang terautentikasi dapat mengelola akun dan profil pengguna mereka dengan menggunakan menu dropdown di sudut kanan atas bilah menu.

<img src="img/help/genealogy-003a.webp" class="rounded" alt="Pengaturan profil">

<img src="img/help/genealogy-005aa.webp" class="rounded" alt="Profil pengguna">

### c. Tim

Aplikasi ini menggunakan <a href="https://jetstream.laravel.com/" target="_blank">Laravel Jetstream</a> dengan opsi <a href="https://jetstream.laravel.com/features/teams.html" target="_blank">Tim</a> untuk menerapkan dan menegakkan <a href="https://en.wikipedia.org/wiki/Multitenancy" target="_blank">multi-tenant</a>.

Pengguna yang terautentikasi dapat mengelola tim mereka dan pengaturan tim dengan menggunakan menu dropdown di sudut kanan atas bilah menu.

<img src="img/help/genealogy-004.webp" class="rounded" alt="Pengaturan tim">

Pengguna dapat mengelola tim pribadi mereka atau membuat tim baru.<br/>
<span style="color:red">
Tim pribadi dan semua tim yang dibuat oleh pengguna juga <b>dimiliki</b> oleh pengguna tersebut.<br/>
Hanya pemilik yang dapat mengundang pengguna lain (baru atau sudah terdaftar) untuk bergabung dengan tim yang dimiliki.
</span>

<img src="img/help/genealogy-005b.webp" class="rounded" alt="Manajemen tim">

<span style="color:red">
    Buat <b>tim baru dan terpisah</b> untuk setiap <b>pohon keluarga</b> yang ingin Anda kelola dan ajak pengguna lain untuk bergabung.</b><br/>
    Dengan memberikan pengguna <b>peran</b> yang tepat, Anda dapat menentukan hak yang mereka miliki dalam tim yang dipilih.
</span>

Pengguna yang terautentikasi hanya dapat melihat <b>orang</b> dan <b>pasangan</b>:

<ul>
    <li>yang dibuat oleh tim yang mereka <b>miliki</b> sendiri</li>
    <li>yang dibuat oleh tim yang mereka diundang <b>oleh pemilik tim</b> sebagai <b>Administrator</b>, <b>Manager</b>, <b>Editor</b>, atau <b>Member</b></li>
</ul>

### d. Peran & izin

<table>
    <thead>
        <tr>
            <th style="text-align:left">Peran</th>
            <th style="text-align:left">Model</th>
            <th style="text-align:left">Izin</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td rowspan="3"><b>Administrator</b></td>
            <td>pengguna</td>
            <td>buat, baca, perbarui, hapus</td>
        </tr>
        <tr>
            <td>orang</td>
            <td>buat, baca, perbarui, hapus</td>
        </tr>
        <tr>
            <td>pasangan</td>
            <td>buat, baca, perbarui, hapus</td>
        </tr>
        <tr>
            <td rowspan="2"><b>Manager</b></td>
            <td>orang</td>
            <td>buat, baca, perbarui, hapus</td>
        </tr>
        <tr>
            <td>pasangan</td>
            <td>buat, baca, perbarui, hapus</td>
        </tr>
        <tr>
            <td rowspan="2"><b>Editor</b></td>
            <td>orang</td>
            <td>buat, baca, perbarui</td>
        </tr>
        <tr>
            <td>pasangan</td>
            <td>buat, baca, perbarui</td>
        </tr>
        <tr>
            <td rowspan="2"><b>Member</b></td>
            <td>orang</td>
            <td>baca</td>
        </tr>
        <tr>
            <td>pasangan</td>
            <td>baca</td>
        </tr>
    </tbody>
</table>

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 3. Pencarian

<img src="img/help/genealogy-001.webp" class="rounded" alt="Menu">

Setelah masuk dan <span style="color:red">memilih tim yang sesuai</span>, klik tombol <b>Pencarian</b> di menu navigasi atas.

<img src="img/help/genealogy-010a.webp" class="rounded" alt="Pencarian">

Masukkan nilai pencarian di <b>kotak pencarian</b>.<br/>
Di atas kotak pencarian, jumlah orang yang tersedia / ditemukan di <b>tim saat ini</b> ditampilkan.<br/>

<span class="text-red-500">
<u>Tips</u>:<br/>
<ol>
<li> sistem akan mencari <b>setiap kata</b> dalam nilai pencarian di atribut <b>nama belakang</b>, <b>nama depan</b>, <b>nama lahir</b>, dan <b>nama samaran</b>.</li>
<li>
Mulailah string pencarian dengan <b>%</b> jika Anda ingin mencari bagian dari nama, misalnya: <b>%Jr</b>.<br/> Harap diperhatikan bahwa pencarian semacam ini lebih lambat.
</li>
<li>
Jika nama belakang, nama depan, nama lahir, atau nama samaran mengandung spasi, letakkan nama dalam tanda kutip ganda, misalnya: <b>"John Jr."</b> Kennedy.<br/>
</li>
</ol>
</span>

Hasil akan ditampilkan dalam sebuah grid di bawah kotak pencarian. Setiap orang diwakili dalam satu kartu.<br/>
Anda dapat menggunakan tombol pagination untuk bernavigasi. Anda juga dapat mengubah jumlah orang yang ditampilkan per halaman.

<img src="img/help/genealogy-012.webp" class="rounded" alt="Menu">

Klik tombol <b>Profil</b> atau <b>Diagram Keluarga</b> untuk melihat detail tentang orang tersebut.<br/>
Klik pada nama ayah atau ibu untuk mengunjungi orang tua.

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 4. Menambahkan orang

### a. Orang baru

Setelah masuk dan <span style="color:red">memilih tim yang tepat</span>, klik tombol <b>Tambah orang</b> di atas bilah pencarian.

<img src="img/help/genealogy-001.webp" class="rounded" alt="Pencarian">

Anda dapat menambahkan orang baru dengan mengklik tombol <b>Tambah orang</b> di atas bilah pencarian.

<img src="img/help/genealogy-010a.webp" class="rounded" alt="Tambah orang">
<img src="img/help/genealogy-011.webp" class="rounded" alt="Tambah orang">

### b. Orang baru sebagai ayah atau ibu

Cara lain untuk menambahkan orang adalah dengan mengklik tab <b>Tambah ayah</b> atau <b>Tambah ibu</b> di menu konteks <b>Keluarga</b> dari orang yang sudah ada.<br/>
Opsi ini hanya tersedia jika orang yang sudah ada belum memiliki ayah atau ibu.

<img src="img/help/genealogy-033a.webp" class="rounded" alt="Pasangan">
<img src="img/help/genealogy-035.webp" class="rounded" alt="Tambah ayah">
<img src="img/help/genealogy-036.webp" class="rounded" alt="Tambah ibu">

<div style="color:red">
    Anda dapat membuat <b>orang BARU</b> atau memilih <b>orang YANG SUDAH ADA</b> sebagai ayah atau ibu orang tersebut.
</div>

<img src="img/help/genealogy-035b.webp" class="rounded" alt="Tambah orang yang ada sebagai ayah">
<img src="img/help/genealogy-036b.webp" class="rounded" alt="Tambah orang yang ada sebagai ibu">

### c. Orang baru sebagai pasangan

Cara lain untuk menambahkan orang adalah dengan mengklik tab <b>Tambah hubungan</b> di menu konteks <b>Pasangan</b> dari orang yang sudah ada.

<img src="img/help/genealogy-055.webp" class="rounded" alt="Pasangan">
<img src="img/help/genealogy-056a.webp" class="rounded" alt="Tambah pasangan">

<div style="color:red">
    Anda dapat membuat <b>orang baru</b> atau memilih <b>orang yang ada</b> sebagai pasangan baru orang tersebut.
</div>

<img src="img/help/genealogy-056b.webp" class="rounded" alt="Tambah orang yang ada sebagai pasangan">

### d. Orang baru sebagai anak

Cara terakhir untuk menambahkan orang adalah dengan mengklik tab <b>Tambah anak</b> di menu konteks <b>Anak-anak</b> dari orang yang sudah ada.

<img src="img/help/genealogy-050.webp" class="rounded" alt="Anak-anak">
<img src="img/help/genealogy-051.webp" class="rounded" alt="Tambah anak">

<div style="color:red">
    Anda dapat membuat <b>orang BARU</b> atau memilih <b>orang YANG SUDAH ADA</b> sebagai anak baru orang tersebut.
</div>

<img src="img/help/genealogy-051b.webp" class="rounded" alt="Tambah orang yang ada sebagai anak">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 5. Orang-orang dan hubungan

### a. Profil

Ikhtisar pribadi menampilkan semua informasi tentang orang yang dipilih.

<img src="img/help/genealogy-020a.webp" class="rounded" alt="Ikhtisar Orang">

Bilangan navigasi di atas memungkinkan Anda memilih beberapa item spesifik.

<img src="img/help/genealogy-021.webp" class="rounded" alt="Menu Orang">

Kartu <b>Profil</b> menunjukkan semua informasi umum tentang orang tersebut.

<img src="img/help/genealogy-022a.webp" class="rounded" alt="Profil Meninggal">

Perhatikan bahwa kartu ini menunjukkan data yang berbeda untuk orang yang <b>hidup</b> dan <b>meninggal</b>.

<img src="img/help/genealogy-022b.webp" class="rounded" alt="Profil Hidup">

Anda dapat mengedit <b>profil</b>, <b>kontak</b>, dan data <b>kematian</b> dengan memilih tab yang sesuai di menu konteks.

<img src="img/help/genealogy-023a.webp" class="rounded" alt="Edit Profil">
<img src="img/help/genealogy-024.webp" class="rounded" alt="Edit Profil">
<img src="img/help/genealogy-025a.webp" class="rounded" alt="Edit Kontak">
<img src="img/help/genealogy-026a.webp" class="rounded" alt="Edit Kematian">

### b. Foto

<img src="img/help/genealogy-022c.webp" class="rounded" alt="Pengeditan Foto">

Anda dapat menelusuri foto yang tersedia menggunakan bilah navigasi di atas carousel foto.<br/>
Anda dapat mengelola foto dengan memilih tab yang sesuai di menu konteks.

<img src="img/help/genealogy-023a.webp" class="rounded" alt="Edit Profil">
<img src="img/help/genealogy-027.webp" class="rounded" alt="Tambah Foto">

Anda dapat <b>mengunggah</b> (beberapa) gambar baru.<br/>
Anda dapat <b>mengunduh</b> atau <b>menghapus</b> gambar yang ada.<br/>
Setelah menghapus foto utama, gambar pertama dalam koleksi akan menjadi foto utama baru.<br/>
Anda juga dapat menetapkan gambar utama dengan mengklik tombol <b>Bintang</b>.

### c. Keluarga

Kartu <b>Keluarga</b> menunjukkan orang tua dan pasangan saat ini.

<img src="img/help/genealogy-033.webp" class="rounded" alt="Keluarga">

<b>Ayah</b> dan <b>Ibu</b> selalu merujuk kepada ayah dan ibu <b>biologis</b>.<br/>
Orang tua non-biologis dapat didefinisikan melalui tautan <b>Orang Tua</b>.

Anda dapat mengedit data keluarga dengan memilih opsi <b>Edit</b> di menu konteks keluarga.<br/>
Jika ayah atau ibu orang yang bersangkutan belum dikenal, Anda dapat menambahkan atau mengeditnya langsung di menu konteks keluarga.

<img src="img/help/genealogy-033a.webp" class="rounded" alt="Edit Keluarga">
<img src="img/help/genealogy-034.webp" class="rounded" alt="Keluarga">

### d. Pasangan (Pasangan)

<img src="img/help/genealogy-040a.webp" class="rounded" alt="Pasangan">

Anda dapat <b>menambahkan</b>, <b>mengedit</b>, atau <b>menghapus</b> hubungan dengan memilih tab yang sesuai di menu konteks.<br/>
Ketika menghapus suatu hubungan, mantan pasangan akan tetap berada dalam koleksi sebagai orang terpisah.<br/>
Dalam keadaan normal, Anda sebaiknya hanya menghapus hubungan ketika dimasukkan secara keliru.<br/>
Anda dapat mengakhiri setiap hubungan yang ada dengan menandai hubungan tersebut sebagai berakhir, dengan atau tanpa menentukan tanggal berakhir.

<img src="img/help/genealogy-042a.webp" class="rounded" alt="Tambahkan Pasangan">

<div style="color:red">
Saat menambahkan pasangan, Anda dapat membuat orang baru atau memilih orang yang sudah ada sebagai pasangan baru.
</div>

### e. Anak-anak

<img src="img/help/genealogy-050a.webp" class="rounded" alt="Anak-anak">

Anda dapat <b>menambahkan</b> anak atau <b>memutuskan</b> hubungan dengan anak yang ada dengan memilih tab yang sesuai di menu konteks.<br/>
Anak yang diputuskan akan tetap ada dalam basis data sebagai orang tetapi tidak lagi memiliki orang yang dipilih sebagai ayah atau ibu.

<img src="img/help/genealogy-051c.webp" class="rounded" alt="Tambah Anak">

<div style="color:red">
Saat menambahkan anak, Anda dapat membuat <b>orang baru</b> atau memilih <b>orang yang sudah ada</b>.
</div>

<img src="img/help/genealogy-052.webp" class="rounded" alt="Anak dengan orang yang ada sebagai anak">

### f. Saudara

Saudara ditampilkan di kartu saudara.<br/>

<img src="img/help/genealogy-060a.webp" class="rounded" alt="Saudara">

Seorang saudara bisa <b>penuh</b>: kedua orang tua biologis sama dengan orang yang dipilih.<br/>
Seorang saudara bisa <b>setengah</b>: hanya ibu biologis atau ayah biologis yang sama. <span class="text-warning-500">[1/2]</span><br/>
Seorang saudara bisa <b>plus</b>: baik ayah biologis maupun ibu biologis tidak sama, tetapi anak tersebut merupakan bagian dari hubungan saat ini dari orang yang dipilih <span class="text-warning-500">[+]</span>

### g. Keluarga Nenek Moyang

Ini menunjukkan nenek moyang dari orang yang dipilih.<br/>
Anda dapat mengubah kedalaman pohon dengan menggunakan kontrol di header kartu Nenek Moyang.

<img src="img/help/genealogy-070.webp" class="rounded" alt="Nenek Moyang">

### h. Keturunan

Ini menunjukkan keturunan dari orang yang dipilih.<br/>
Anda dapat mengubah kedalaman pohon dengan menggunakan kontrol di header kartu Keturunan.

<img src="img/help/genealogy-071.webp" class="rounded" alt="Keturunan">

### i. Diagram Keluarga

Ini menunjukkan diagram keluarga lengkap, hingga 3 generasi.<br/>
Klik pada nama anggota keluarga untuk melihat diagram keluarga orang tersebut.

<img src="img/help/genealogy-072.webp" class="rounded" alt="Diagram Keluarga">

### j. Berkas

Kartu <b>Berkas</b> ini menunjukkan berkas yang dilampirkan kepada orang tersebut.<br/>
Anda dapat menggunakan fitur ini untuk melampirkan dokumentasi.

<img src="img/help/genealogy-074.webp" class="rounded" alt="Berkas">

Anda dapat mengunggah (beberapa) dokumen baru.<br/>
Anda dapat menentukan sumber dokumen yang ingin diunggah.<br/>
Anda dapat mengubah urutan dokumen dengan mengklik tombol <b>Naik</b> atau <b>Turun</b>.<br/>
Anda dapat mengunduh dokumen dengan mengklik tombol <b>Unduh</b> atau membukanya di jendela terpisah dengan mengklik ikon dokumen.<br/>
Anda dapat menghapus dokumen dengan mengklik tombol <b>Hapus</b>.

### k. Riwayat

Ini menunjukkan riwayat dari orang yang dipilih.<br/>

<img src="img/help/genealogy-073a.webp" class="rounded" alt="Riwayat">

### l. Data Kertas

Ini menunjukkan lembaran data dari orang yang dipilih.<br/>
Anda dapat menggunakan ini untuk <b>Mencetak</b> sebuah ikhtisar.

<img src="img/help/genealogy-075.webp" class="rounded" alt="Data Kertas">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 6. Ulang tahun

Setelah masuk dan memilih tim yang sesuai, klik tombol <b>Ulang Tahun</b> di menu navigasi atas.

<img src="img/help/genealogy-001.webp" class="rounded" alt="Menu">

Ini menunjukkan ulang tahun yang akan datang.

<img src="img/help/genealogy-080.webp" class="rounded" alt="Ulang Tahun">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 7. Menu Offcanvas

Pengguna dapat mengklik tombol di menu sudut kanan atas untuk membuka <b>menu offcanvas</b>.<br/>
Di atas, peran dan izin pengguna di tim saat ini ditampilkan.<br/>
Jika seorang pengguna memiliki hak yang tepat, fitur tambahan akan ditampilkan.

<img src="img/help/genealogy-006a.webp" class="rounded" alt="Menu Offcanvas">

### a. Tim

Menu offcanvas memungkinkan <b>semua pengguna</b> untuk berkonsultasi dengan <b>tim aktif</b>.

<img src="img/help/genealogy-100.webp" class="rounded" alt="Tim">

### b. Tim & orang

Menu offcanvas memungkinkan <b>pengembang</b> untuk berkonsultasi dengan semua <b>tim</b> dan <b>orang</b>.

<img src="img/help/genealogy-090a.webp" class="rounded" alt="Tim">
<img src="img/help/genealogy-090b.webp" class="rounded" alt="Orang">

Anda juga dapat berkonsultasi dengan sejarah perubahan orang di <b>Buku Log Orang</b>.

<img src="img/help/genealogy-090c.webp" class="rounded" alt="Pencatatan Orang">

### c. Pengguna & pencatatan

Menu offcanvas memungkinkan <b>pengembang</b> untuk berkonsultasi dengan pengguna dan informasi pencatatan mereka.

<img src="img/help/genealogy-091.webp" class="rounded" alt="Pengguna">
<img src="img/help/genealogy-093.webp" class="rounded" alt="Pencatatan Pengguna 1">
<img src="img/help/genealogy-094.webp" class="rounded" alt="Pencatatan Pengguna 2">
<img src="img/help/genealogy-094b.webp" class="rounded" alt="Pencatatan Pengguna 3">

### d. Cadangan

Item menu <b>Cadangan</b> memungkinkan <b>pengembang</b> untuk mengelola cadangan basis data.

<img src="img/help/genealogy-095.webp" class="rounded" alt="Cadangan">

### e. Penampil log

Item menu <b>Penampil Log</b> memungkinkan <b>pengembang</b> untuk berkonsultasi dengan file log aplikasi.

<img src="img/help/genealogy-096a.webp" class="rounded" alt="Penampil Log">

### f. Ketergantungan

Item menu <b>Ketergantungan</b> memungkinkan <b>pengembang</b> untuk berkonsultasi dengan ketergantungan aplikasi.

<img src="img/help/genealogy-097.webp" class="rounded" alt="Ketergantungan">

### g. Sesi

Item menu <b>Sesi</b> memungkinkan <b>pengembang</b> untuk berkonsultasi dengan sesi aplikasi.

<img src="img/help/genealogy-098.webp" class="rounded" alt="Sesi">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 8. Bahasa & Zona Waktu

### a. Pengunjung

Pengunjung dapat mengubah bahasa di menu sudut kanan atas menggunakan <b>pemilih bahasa</b>.<br/>
<b>Bahasa</b> aplikasi default adalah <b>Inggris</b>.

<img src="img/help/genealogy-002aa.webp" class="rounded" alt="Menu Bahasa">

### b. Pengguna yang Terautentikasi

Pengguna yang terautentikasi dapat mengubah bahasa dan zona waktu di menu sudut kanan atas menggunakan <b>editor profil</b>.<br/>
Bahasa dan zona waktu yang dipilih disimpan di basis data.

<img src="img/help/genealogy-002d.webp" class="rounded" alt="Editor Profil">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 9. Tema Warna

Pengguna dapat mengubah tema warna di menu sudut kanan atas menggunakan <b>ikon tema</b>.<br/>
<b>Tema</b> aplikasi default adalah <b>Mode Gelap</b>.

<img src="img/help/genealogy-002aa.webp" class="rounded" alt="Pemilih Tema">
