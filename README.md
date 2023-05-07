<h1>Sistem Informasi Multi Level Marketing Sederhana</h1>

![alt text](https://github.com/tonyBred/panel_mlm/blob/master/public/img/diagram.png)

Sistem ini digunakan oleh admin MLM untuk:
1. Menambahkan anggota MLM baru dengan menginputkan inisial dan parent MLM anggota tersebut
2. Memeriksa anggota MLM berdasarkan id dan inisial untuk melihat: Level dan anak-anak MLM anggota tersebut


![alt text](https://github.com/tonyBred/panel_mlm/blob/master/public/img/tabel.png)

Tabel yang digunakan adalah sebagai berikut dimana id_member adalah primary key unique untuk setiap anggota MLM dan memiliki foreign key id_parent yang merujuk pada primary key tabel member kembali.


<h3>Halaman Login</h3>
![alt text](https://github.com/tonyBred/panel_mlm/blob/master/public/img/login.png)
Halaman login menggunakan username: admin, password: admin sebagai identifikasi sistem yang disimpan pada tabel user di database


<h3>Halaman Panel</h3>
![alt text](https://github.com/tonyBred/panel_mlm/blob/master/public/img/panel.png)
Berikut merupakan halaman panel yang digunakan untuk menambahkan dan memeriksa anggota MLM

<h3>Menambahkan Anggota MLM</h3>
![alt text](https://github.com/tonyBred/panel_mlm/blob/master/public/img/member baru.png)
