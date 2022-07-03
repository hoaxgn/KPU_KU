const database = require('../config/database')
const sequelize = require('sequelize')

const KecamatanModel= database.define('tbl_kecamatan', {
    id: {
        type: sequelize.INTEGER,
        primaryKey: true
    },
    kecamatan: {
        type: sequelize.CHAR
    }
},{
    createdAt: 'created_at',
    updatedAt: 'updated_at',
    tableName: 'tbl_kecamatan',
    sequelize,
    modelName: 'KecamatanModel'
})

module.exports = KecamatanModel