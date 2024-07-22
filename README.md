
# Final Proyek Web Programming 2
<ul>
  <li>Mata Kuliah: Web Programming 2</li>
  <li>Dosen Pengampu: <a href="https://github.com/Muhammad-Ikhwan-Fathulloh">Muhammad Ikhwan Fathulloh</a></li>
</ul>

## Kelompok
<ul>
  <li>Kelompok: kelompok 1</li>
  <li>Proyek: Website Voting Hero Mobile Legend</li>
  <li>Anggota:</li>
  <ul>
    <li>Anggota 1: <a href="https://github.com/YusaM20">Aulia Wira Yudha Mustopa | 22552012039</a></li>
    <li>Anggota 2: <a href="https://github.com/akmalfman">Akmal Fauzi Salman | 21552011233</a></li>
  </ul>
</ul>

## Judul Proyek
![Logo_VoteNow](public/aset/images/logos/vertical_logo.png)
<p>VoteNow</p>

## Penjelasan Proyek
<p>VoteNow adalah sebuah platform yang memungkinkan pengguna untuk memberikan suara pada hero favorit mereka dari sebuah game MOBA. Platform ini terdiri dari dua jenis pengguna: admin dan user. Admin memiliki kemampuan untuk melakukan CRUD (Create, Read, Update, Delete) untuk pengguna dan hero yang akan divote. Pengguna dapat memberikan suara sekali saja dan melihat leaderboard yang menampilkan peringkat hero berdasarkan hasil voting. Pengguna juga dapat melihat hero berdasarkan role saat akan melakukan vote.
</p>

## Fitur

1. **Admin**
    - Melakukan CRUD untuk user
    - Melakukan CRUD untuk hero yang akan divote

2. **User**
    - Memberikan vote satu kali untuk hero favorit
    - Melihat leaderboard yang menampilkan peringkat hero berdasarkan hasil voting
    - Melihat hero berdasarkan role saat melihat vote

## Komponen Proyek

- **Peserta**
- **Role**
- **Hero**
- **Vote**
- **Leaderboard**

## Pembagian Tim
<p><a href="https://github.com/akmalfman">Akmal Fauzi Salman</a>.
<br>
  <ul>
    <li>Peserta(onProgress)</li>
    <li>Kategori(onProgress)</li>
    <li>Paslon(onProgress)</li>
  </ul>
  <br></p>
  <p><a href="https://github.com/YusaM20">Aulia Wira Yudha Mustopa</a>
<br>
  <ul>
     <li>Vote(onProgress)</li>
    <li>Riwayat Vote(onProgress)</li>
  </ul>
  <br></p>

## Demo Proyek
<ul>
  <li>Github: <a href="https://github.com/YusaM20/VoteNow">(https://github.com/YusaM20/VoteNow)</a></li>
  <li>Youtube: <a href="https://www.youtube.com/watch?v=L1E_1ja06vw">(https://www.youtube.com/watch?v=L1E_1ja06vw)</a></li>
</ul>

## Instalasi

1. Clone repositori:
   ```bash
   git clone https://github.com/username/votenow.git

2. Masuk ke direktori proyek:
   ```bash
   cd votenow

3. Install dependencies:
   ```bash
   composer install
   npm install

4. Copy file .env.example ke .env dan sesuaikan konfigurasi:
   ```bash
   cp .env.example .env

5. Generate key aplikasi:
   ```bash
   php artisan key:generate

6. Jalankan migrasi dan seeder database:
   ```bash
   php artisan migrate --seed

7. Jalankan server aplikasi:
   ```bash
   php artisan serve

8. Buka aplikasi di browser pada http://localhost:8000.
