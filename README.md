Hi, salam kenal...nama saya Quin Audi Tasya Effendy, dan akrab dipanggil Quin. Saya seorang junior web developer

SISTEM INFORMASI PEMUNGUTAN SUARA
==================================
bahasa pemrograman Laravel 8
## Default akun untuk testing

- Admin
username : superadmin
password : admin123

Pemilih :
Isikan data pemilih di halaman admin, lalu buat akun untuk calon pemilih agar bisa login ke halaman dashboard pemilih dan menyumbangkan hak suara 


## Instalasi

clone project atau download

```bash
  git clone https://github.com/auditasya12/Sistem-Informasi-Pemungutan-Suara.git  
  cd Sistem-Informasi-Pemungutan Suara
  composer install
  cp .env.example .env
```

Buka `.env` dan atur database anda
```bash
  DB_PORT=3306
  DB_DATABASE=db_voting
  DB_USERNAME=root
  DB_PASSWORD=
```

Install website
```bash
  php artisan key:generate
  php artisan storage:link
  php artisan migrate --seed
```

Jalankan website
```bash
  php artisan serve
```
## interface halaman admin
![IMG-20240725-WA0006](https://github.com/user-attachments/assets/8fe0b530-ee32-40a4-b402-54f4136508e9)
![IMG-20240725-WA0007](https://github.com/user-attachments/assets/46ca1023-51a4-4831-bd48-b47378fbaea8)
![IMG-20240725-WA0008](https://github.com/user-attachments/assets/c7d490cf-8c66-48cb-9fde-6f6995a7c3ce)


## interface halaman siswa
![IMG-20240725-WA0000](https://github.com/user-attachments/assets/3cc9ac65-9a6b-418c-884a-31de33b7f0a0)
![IMG-20240725-WA0001](https://github.com/user-attachments/assets/547bcdbf-114e-4a5c-aa37-d0f4e7ce79dd)
![IMG-20240725-WA0013](https://github.com/user-attachments/assets/9b8ea56b-3b0c-4725-959b-7e15db64121c)


