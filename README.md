# Contoh Rest API Codeigniter 4
Untuk menjalankan proses backend untuk menjalankan perintah **Create (Post), Read (Get), Update (Put) dan Delete (Delete)** via aplikasi Postman menggunakan Codeigniter 4.

## Persiapan
###
   a.buatlah database ci4restapi dan table pegawai dengan Field table:
              1. id: INT, 5, auto_increment
              2. nama: VARCHAR, 100
              3. email: VARCHAR, 100
###
   b.download source example-ci4-restapi dan ekstrak ke htdoc dengan nama folder ci4restapi              
###
   c.gunakan postman 

## Gunakan Postman
   ###
      1.Create data
        Response Method: POST
        Request URL: http://localhost/ci4restapi/public/pegawai
        form data : key     nama
                    nama    luthfi 
                    email   luthfi@hotamail.com
        balikan  : {
                   "status": 201,
                   "error": null,
                   "message": {
                   "success": "Insert data pegawai berhasil"
                              }
                }   
      2.cek data
        Response Method: GET
        Request URL: http://localhost/ci4restapi/public/pegawai
        balikan : {
                  "id": "1",
                   "nama": "luthfi",
                   "email": "luthfi@hotmail.com"
                  },
                  {
                  "id": "2",
                  "nama": "fuadi",
                  "email": "fuadi@hotmail.com"
                  }
        Response Method: GET
        Request URL: http://localhost/ci4restapi/public/pegawai/1
        balikan : {
                  "id": "1",
                   "nama": "luthfi",
                   "email": "luthfi@hotmail.com"
                  }
      3.Update data
        Response Method: PUT
        Request URL: http://localhost/ci4restapi/public/pegawai
        pilih raw dan pilih json
        isi raw :
                  {
                  "id": "1",
                  "nama": "luthfi",
                  "email": "luthfifuadi@gmail.com"
                  }
        balikan : {
                   "status": true,
                   "message": "data berhasil di update !"
                  }              
        4.Hapus data
        Response Method: DELETE
        Request URL: http://localhost/ci4restapi/public/pegawai/1
        balikan  : {
                     "status": 200,
                     "error": null,
                     "message": {
                        "success": "data berhasil dihapus..!"
                                }
                    }
         
