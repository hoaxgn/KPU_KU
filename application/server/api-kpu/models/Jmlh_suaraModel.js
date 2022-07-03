const database = require('../config/database')
const sequelize = require('sequelize')

const Jmlh_suaraModel = database.define('tbl_jmlh_suara', {
    id: {
        type: sequelize.INTEGER,
        primaryKey: true
    },
    gol_pemilihan_id: {
        type: sequelize.INTEGER
    },
    suara_sah: {
        type: sequelize.INTEGER
    },
    anggota_id: {
        type: sequelize.INTEGER
    },
    kecamatan_id: {
        type: sequelize.INTEGER
    },
    status:{
        type: sequelize.CHAR
    }
},{
    createdAt: 'created_at',
    updatedAt: 'updated_at',
    sequelize,
    tableName: 'tbl_jmlh_suara',
    modelName: 'Jmlh_suaraModel'
})
module.exports = Jmlh_suaraModel