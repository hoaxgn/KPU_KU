const AdminModel = require('../models/AdminModel')
const md5 = require('md5')
const { response } = require('express')


const Admin_Controller = {
    getAllAdmin: async(req, res) => {
        try{
            const admin = await AdminModel.findAll()
            res.json({
                // status: true,
                data: admin,
                // method: req.method,
                // url: req.url
            })
        }catch(err){
            console.log(err)
        }
    },
    addAdmin: async(req, res) => {
        try {
            let pass = md5(req.body.password)
            const data = {
                username: req.body.username,
                password: pass,
                email: req.body.email,
                image: req.body.image,
                is_active: 1
            }
            await AdminModel.create(data)
            res.json({message: 'tambah data berhasil!'})
        } catch (err) {
            console.log(err)
        }
    },
    getAdminById: async(req, res) => {
        try {
            const admin = await AdminModel.findOne({
                where: {
                    id: req.params.id
                }
            })
            res.json({data:admin})
        } catch (err) {
            console.log(err)
        }
    },
    deleteAdmin: async(req, res) => {
        try {
            const Admin = await AdminModel.findOne({
                where: {
                    id: req.params.id
                }
            })
            await AdminModel.destroy({
                where: {
                    id: req.params.id
                }
            })
            res.json({message: 'hapus data berhasil!'})
        } catch (err) {
            console.log(err)
        }
    },
    updateAdmin: async(req, res) => {
        try {
            const pass = md5(req.body.password)
            const Admin = await AdminModel.findOne({
                where : {
                    id: req.params.id
                }
            })
            const data = {
                username: req.body.username,
                password: pass,
                email: req.body.email,
                image: req.body.image,
                is_active: 1
            }
            await AdminModel.update(data, {
                where: {
                    id: req.params.id
                }
            })
            res.json({message: 'data berhasil diubah'})
        } catch (err) {
            console.log(err)
        }
    }
}



module.exports = Admin_Controller