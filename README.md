# Contoh Rest API
Untuk menjalankan proses backend untuk menjalankan perintah **Create (Post), Read (Get), Update (Put) dan Delete (Delete)** via aplikasi Postman menggunakan Codeigniter 4.

## Persiapan
###a.buatlah database ci4restapi dan table pegawai dengan Field table:
              1. id: INT, 5, auto_increment
              2. nama: VARCHAR, 100
              3. email: VARCHAR, 100
###b.download source example-ci4-restapi dan ekstrak ke htdoc dengan nama folder ci4restapi              
###c.gunakan postman 

## Gunakan Postman
   ###1.Create data
        Response Method: POST
        Request URL: http://localhost/ci4restapi/public/pegawai
        form data : key     nama
                    nama    nama yg mau di input 
                    email   email yg mau di input
        hasil : {
                   "status": 201,
                   "error": null,
                   "message": {
                   "success": "Insert data pegawai berhasil"
                              }
                }            
         
