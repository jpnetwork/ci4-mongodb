# ci4-mongodb
ใช้งานฐานข้อมูล MongoDB ใน CodeIgniter 4
ข้อดีดีตรงที่ตอนเพิ่ม document เข้าไปในฐานข้อมูล เราไม่ต้องสร้าง Schema เหมือนใน Node.js หรือไม่ต้องไปสร้างตารางขึ้นมาก่อนเหมือนใน MySQL ใน CodeIgniter 4 สามารถกำหนดค่าชื่อ column ใน array สำหรับ insert ได้เลย
ตัวอย่างการ Count, InsertOne และการ Find อยู่ใน  App/Controllers/Mongo.php แล้ว  สามารถดูคำสั่งการ Query เพิ่มเติมได้ใน App/Models/MongoModel.php 

Original Source: https://github.com/bertugfahriozer/ci4mongodblibrary
