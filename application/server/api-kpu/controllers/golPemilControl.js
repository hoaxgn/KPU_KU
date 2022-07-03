const Gol_PemilihanModel = require("../models/Gol_PemilihanModel")
const KecModel = require("../models/KecamatanModel")
const KelModel = require("../models/KelurahanModel")
const { response } = require('express')

const GolPemilController ={
    getAllGolPemil: async(req, res) =>{
        try {
            const GolPemil = await Gol_PemilihanModel.findAll({
                include:[{
                    model: KecModel,
                    attributes: ['kecamatan']
                },
            {
                model: KelModel,
                attributes: ['kelurahan']
            }]
            })
            res.json({data: GolPemil})
        } catch (err) {
            console.log(err)
        }
    }
}