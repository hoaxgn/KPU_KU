const ParpolModel = require('../models/ParpolModel')
const {response} = require('express')
const req = require('express/lib/request')
const sequelize = require('../config/database')

const Parpol_Controller = {
    getAllParpol: async(req, res) => {
        try {
            const parpol = await ParpolModel.findAll()
            res.json({
                // status: true,
                data: parpol,
                // method: req.method,
                // url: req.url
            })

        } catch (err) {
            console.log(err)
        }
    },
    addParpol: async(req, res) => {
        try {
            const data = {
                nama: req.body.nama,
                logo: req.body.logo,
                visi: req.body.visi,
                misi: req.body.misi,
                nama_ketua: req.body.nama_ketua,
                img_ketua: req.body.img_ketua,
                profil: req.body.profil
            }
            await ParpolModel.create(data)
            res.json({
                status: true,
                message: 'tambah data berhasil!'
            })
        } catch (err) {
            console.log(err)
        }
    },
    getParpolById: async(req, res) => {
        try {
            const parpol = await ParpolModel.findOne({
                where: {
                    id: req.params.id
                }
            })
            res.json({data:parpol})
        } catch (err) {
            console.log(err)
        }
    },
    updateParpol: async(req, res) => {
        try {
            const data = {
                nama: req.body.nama,
                logo: req.body.logo,
                visi: req.body.visi,
                misi: req.body.misi,
                nama_ketua: req.body.nama_ketua,
                img_ketua: req.body.img_ketua,
                profil: req.body.profil
            }
            await ParpolModel.update(data, {
                where: {
                    id: req.params.id
                }
            })
            res.json({
                status: true,
                message: 'data berhasil diubah!'
            })
        } catch (err) {
            console.log(err)
        }
    },
    deleteParpol: async(req, res) => {
        try{
            await ParpolModel.destroy({
                where: {
                    id: req.params.id
                }
            })
            res.json({
                status: true,
                messsage: 'data berhasil dihapus!'})
        }catch(err){
            console.log(err)
        }
    }
}

module.exports = Parpol_Controller