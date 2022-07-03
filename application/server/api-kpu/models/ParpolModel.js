const database = require('../config/database')
const sequelize = require('sequelize')

const ParpolModel = database.define('tbl_parpol', {
    id: {
     type: sequelize.INTEGER,
     primaryKey: true
    },
    nama: {
        type: sequelize.CHAR
    },
    logo: {
        type: sequelize.CHAR
    },
    visi: {
        type: sequelize.TEXT
    },
    misi: {
        type: sequelize.TEXT
    },
    nama_ketua: {
        type: sequelize.CHAR
    },
    img_ketua: {
        type: sequelize.CHAR
    },
    profil: {
        type: sequelize.TEXT
    },
},{
    createdAt: 'created_at',
    updatedAt: 'updated_at',
    tableName: 'tbl_parpol',
    sequelize,
    modelName: 'ParpolModel'
})

module.exports = ParpolModel