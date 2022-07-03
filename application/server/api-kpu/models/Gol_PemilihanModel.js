const database = require('../config/database')
const sequelize = require('sequelize')

const Gol_PemilihanModel = database.define('tbl_gol_pemilihan', {
    id: {
        type: sequelize.INTEGER,
        primaryKey: true
    },
    golongan: {
        type: sequelize.CHAR,
    },
    kecamatan_id: {
        type: sequelize.INTEGER
    },
    kelurahan_id: {
        type: sequelize.INTEGER
    }
},{
    createdAt: 'created_at',
    updatedAt: 'updated_at',
    sequelize,
    tableName: 'tbl_gol_pemilihan',
    modelName: 'Gol_PemilihanModel'
})

module.exports = Gol_PemilihanModel