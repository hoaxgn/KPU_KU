const express = require('express')
const multer = require('multer')
const bodyparser = require('body-parser')
const router = require('./router/route')
const app = express()

app.use((req, res, next)=>{
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, DELETE, OPTIONS');
  res.setHeader('Access-Control-Allow-Headers','Content-Type, Authorization');
  next();
});

app.get('/', function(req, res){
  const kelas = {
    id : 1,
    nama : "Jajang"
   }
  res.send(kelas)
  }) 

  const fileStorage = multer.diskStorage({
    destination: (req, file, cb)=>{
      cb(null, 'images')
    },
    filename: (req, file, cb)=>{
      cb(null, new Date.now().toString()+ '-' +file.originalname)
    }
  })
  
  const fileFilter = (req, file, cb)=> {
    if(
      file.mimetype=='image/png'||
      file.mimetype=='image/jpg'||
      file.mimetype=='image/jpeg'
      ){
      cb(null, true)
    }else{
      cb(null, false)
    }
  }
  
  app.use(bodyparser.json()) // for parsing application/json
  app.use(bodyparser.urlencoded({ extended: true }))// for parsing application/x-www-form-urlencoded
  
// app.use('/images', express.static(part.join(__dirname,'images')))
app.use(multer({storage: fileStorage, fileFilter: fileFilter}).single('image'))
app.use(router)
app.listen(2000, function(){
  console.log('Server is Okey')
})