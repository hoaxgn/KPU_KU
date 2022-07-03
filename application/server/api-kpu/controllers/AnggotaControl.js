const { response } = require('express')
const AnggotaModel = require('../models/AnggotaModel')
const Gol_PemilihanModel = require('../models/Gol_PemilihanModel')
const Jmlh_suaraModel = require('../models/Jmlh_suaraModel')

AnggotaModel.hasMany(Gol_PemilihanModel,{foreignKey: 'gol_pemilihan_id'})
AnggotaModel.hasMany(Jmlh_suaraModel, {foreignKey: 'jmlh_suara_id'})

const AnggotaParpol_Controller = {
    getAnggotaParpol : async(req, res) => {
        try {
            const angparpol = await AnggotaModel.findAll({
                include:[{
                    model: Gol_PemilihanModel,
                    attributes: ['golongan']
                },
                {model: Jmlh_suaraModel,
                attributes: ['status']

                }],
                order: [['parpol_id', 'DESC']]
            })
            res.json({data:angparpol})
        } catch (err) {
            console.log(err)
        }
    }
}
module.exports = AnggotaParpol_Controller
