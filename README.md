# ci4-mongodb
ใช้งานฐานข้อมูล MongoDB ใน CodeIgniter 4

Source: https://github.com/bertugfahriozer/ci4mongodblibrary


การใช้งานฐานข้อมูล MongoDB ใน CodeIgniter 4 สามารถ clone source ได้จาก https://github.com/jpnetwork/ci4-mongodb ครับ มันดีตรงที่ตอนเพิ่ม document เข้าไปในฐานข้อมูล เราไม่ต้องสร้าง Schema เหมือนใน Node.js หรือไม่ต้องไปสร้างตารางขึ้นมาก่อนเหมือนใน MySQL อันนี้ใน CI4 คือกำหนดค่าชื่อ column ใน array สำหรับ insert ได้เลย
ผมทำตัวอย่างการ Count, InsertOne และการ Find ไว้ใน  App/Controllers/Mongo.php แล้ว  สามารถดูคำสั่งเพิ่มเติมได้ใน App/Models/MongoModel.php ครับ
