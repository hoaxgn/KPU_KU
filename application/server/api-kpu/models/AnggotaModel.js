const database = require('../config/database')
const sequelize = require('sequelize')

const AnggotaModel = database.define('tbl_anggota_parpol',{
    id: {
        type: sequelize.INTEGER,
        primaryKey: true
    },
    nama: {
        type: sequelize.CHAR
    },
    img: {
        type: sequelize.CHAR
    },
    parpol_id: {
        type: sequelize.INTEGER
    },
    jabatan_partai: {
        type: sequelize.CHAR
    },
    jenis_kelamin: {
        type: sequelize.CHAR
    },
    gol_pemilihan_id: {
        type: sequelize.INTEGER
    },
    jmlh_suara_id: {
        type: sequelize.INTEGER
    }
},{
    createdAt: 'created_at',
    updatedAt: 'updared_at',
    sequelize,
    tableName: 'tbl_anggota_parpol',
    modelName: 'AnggotaModel'
})

module.exports = AnggotaModel