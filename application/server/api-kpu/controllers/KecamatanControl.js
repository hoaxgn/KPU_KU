const KecamatanModel = require('../models/KecamatanModel')
const { response } = require('express')

const KecamatanControl ={
    getAllKecamatan: async(req, res) => {
        try {
            const kecamatan = await KecamatanModel.findAll()
            res.json({
                status: true,
                data: kecamatan,
                method: req.method,
                url: req.url
            })
        } catch (err) {
            console.log(err)
        }
    },
    addKecamatan: async(req, res) =>{
        try {
            const data = {
                kecamatan: req.body.kecamatan
            }
            await KecamatanModel.create(data)
            res.json({message: 'tambah data berhasil!'})
        } catch (err) {
            console.log(err)
        }
    },
    getKecamatanById: async(req, res) => {
        try {
            const kecamatan = await KecamatanModel.findOne({
                where: {
                    id: req.params.id
                }
            })
            res.json({data:kecamatan})
        } catch (err) {
            console.log(err)
        }
    },
    updatekecamatan: async(req, res) => {
        try {
            const kecamatan = await KecamatanModel.findOne({
                where: {
                    id: req.params.id
                }
            })
            const data = {
                kecamatan: req.body.kecamatan
            }
            await KecamatanModel.update(data, {
                where:{
                    id: req.params.id
                }
            })
            res.json({message: 'data berhasil diubah!'})
        } catch (err) {
            console.log(err)
        }
    },
    deletekecamatan: async(req, res) => {
        try {
            const kecamatan = await KecamatanModel.findOne({
                where:{
                    id: req.params.id
                }
            })
            await KecamatanModel.destroy({
                where: {
                    id: req.params.id
                }
            })
            res.json({message:'data berhasil dihapus!'})
        } catch (err) {
            console.log(err)
        }
    }
}

module.exports = KecamatanControl