const database = require('../config/database')
const sequelize = require('sequelize')

const KapasitasModel = database.define('tbl_kapasitas', {
    id: {
        type: sequelize.INTEGER,
        primaryKey: true
    },
    gol_pemilihan_id: {
        type: sequelize.INTEGER
    },
    tahun_id: {
        type: sequelize.INTEGER
    },
    kapasitas: {
        type: sequelize.INTEGER
    }
},{
    createdAt: 'created_at',
    updatedAt: 'updated_at',
    sequelize,
    tableName: 'tbl_kapasitas',
    modelName: 'KapasitasModel'
})
module.exports = KapasitasModel