const database = require('../config/database')
const sequelize = require('sequelize')
const md5 = require('js-md5')
const AdminModel = require('../models/AdminModel')
const response = require('../helpers/respons-parser')
const e = require('express')

const Login_Controller = {
    signIn: async (req, res) => {
        try {
            const username = req.body.username
            const password = req.body.password
            
            const admin = await AdminModel.findOne({
                where : {
                    username : username
                }
            })

            if(admin){
                if(admin.is_active==1){
                    if((md5(password))==admin.password){
                        const data= {
                            id: admin.id,
                            username: admin.username,
                            email: admin.email,
                            image: admin.image
                        }
                        // const token = await jwt.sign({data}, key)
                        // res.json({message: 'berhasil'})
                        res.json({
                            status: true,
                            data: data
                        })
                    }else{
                        res.json({status: false})
                        // response.error(res, {error: 'Password Salah!!'})
                        // res.json({message: 'password salah'})
                    }
                }else{
                    response.error(res, {
                        error: 'Akun Tidak!!',
                        status: false})
                    // res.json({message : 'user ga aktif'})
                }
            }else{
                response.error(res, {
                    error: 'Password Salah!!',
                    status: false
                })
                // res.json({message : 'admin gada'})
            }
        } catch (err) {
            console.log(err)
            response.error(res, {error: err.message})
        }
    },
    // forgotPassword : async(req, res) => {
    //     const email = req.body.email
    //     const admin = await AdminModel.findOne({
    //         where: {
    //             email: email
    //         }
    //     })
    //     if(admin){
    //         const data= {
    //             id: admin.id
    //         }
    //         const Emailtemplate = {
    //             from : "KPU KOTA BOGOR",
    //             to : email,
    //             subject: "Link reset password",
    //             html: '<p>Silakan klik link dibawah untuk mereset password akun</p><p>http://localhost/</p>'
    //         }
    //     }
    // }
}

module.exports = Login_Controller