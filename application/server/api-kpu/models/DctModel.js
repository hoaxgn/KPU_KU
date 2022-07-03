const database = require('../config/database')
const sequelize = require('sequelize')

const DctModel = database.define('tbl_dct',{
    id: {
        type: sequelize.INTEGER,
        primaryKey: true
    },
    tahun_id: {
        type: sequelize.INTEGER
    },
    anggota_id: {
        type: sequelize.INTEGER
    },
    parpol_id: {
        type: sequelize.INTEGER
    },
    gol_pemilihan_id: {
        type: sequelize.INTEGER
    },
},{
    createdAt: 'created_at',
    updatedAt: 'updated_at',
    sequelize,
    tableName: 'tbl_dct',
    modelName: 'DctModel'
})
module.exports= DctModel