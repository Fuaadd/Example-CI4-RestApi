# Contoh Rest API
Untuk menjalankan proses backend untuk menjalankan perintah **Create (Post), Read (Get), Update (Put) dan Delete (Delete)** via aplikasi Postman menggunakan Codeigniter 4.

## Langkah - langkah 
a.buatlah table pegawai dengan Field table:
              1. id: INT, 5, auto_increment
              2. nama: VARCHAR, 100
              3. email: VARCHAR, 100
b.duplikat file env dan berilah nama .env, kemudian cari baris _DATABASE_              
              ```
              database.default.hostname = localhost
              database.default.database = ci4_simple_crud_api
              database.default.username = root
              database.default.password =
              database.default.DBDriver = MySQLi
              database.default.DBPrefix =
              database.default.port = 3306
              ```
