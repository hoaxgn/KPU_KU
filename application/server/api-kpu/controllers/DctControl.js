const DctModel = require('../models/DctModel')
const TahunModel = require('../models/TahunModel')
const AnggotaModel = require('../models/AnggotaModel')
const ParpolModel = require('../models/ParpolModel')
const Gol_PemilihanModel = require('../models/Gol_PemilihanModel')
const { response } = require('express')
const res = require('express/lib/response')

DctModel.hasMany(TahunModel,{foreignKey: tahun_id})
DctModel.hasMany(AnggotaModel,{foreignKey: id_anggota})
DctModel.hasMany(ParpolModel,{foreignKey: parpol_id})
DctModel.hasMany(Gol_PemilihanModel,{foreignKey: gol_pemilihan_id})


const DctControl = {
    getAllCalonTetap: async(req, res) => {
        try {
            const Dct = await DctModel.findAll()
            res.json({
                status: true,
                data: Dct,
                method: req.method,
                url: req.url
            })
        } catch (err) {
            console.log(err)
        }
    },
    addCalonTetap: async(req, res) => {
        try {
            const data = {
                nama: req.body.nama,
                tingkat: req.body.tingkat,
                jabatan_id: req.body.jabatan_id,
                periode_awal: req.body.periode_awal,
                periode_akhir: req.body.periode_akhir,
                img_komisioner: req.body.img_komisioner,
                biografi: req.body.biografi
            }
            await KomisionerModel.create(data)
            res.json({message: 'tabambah data berhasil!'})
        } catch (err) {
            console.log(err)
        }
    },
    getKomisionerByid: async(req, res) => {
        try {
            const komisioner = await KomisionerModel.findOne({
                where: {
                    id: req.params.id
                }
            })
            res.json({data:komisioner})
        } catch (err) {
            console.log(err)
        }
    },
    updateKomisioner: async(req, res) => {
        try {
            const komisioner = await KomisionerModel.findOne({
                where: {
                    id: req.params.id
                }
            })
            const data = {
                nama: req.body.nama,
                tingkat: req.body.tingkat,
                jabatan_id: req.body.jabatan_id,
                periode_awal: req.body.periode_awal,
                periode_akhir: req.body.periode_akhir,
                img_komisioner: req.body.img_komisioner,
                biografi: req.body.biografi
            }
            await KomisionerModel.update(data, {
                where: {
                    id: req.params.id
                }
            })
            res.json({message: 'update data berhasil!'})
        } catch (err) {
            console.log(err)
        }
    },
    deleteKomisioner: async(req, res) => {
        try {
            const komisioner = await KomisionerModel.findOne({
                where: {
                    id: req.params.id
                }
            })
            await KomisionerModel.destroy({
                where: {
                    id: req.params.id
                }
            })
            res.json({message: 'Data berhasil dihapus!'})
        } catch (err) {
            
        }
    }
}

module.exports = DctControl