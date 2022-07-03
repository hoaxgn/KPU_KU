const database = require('../config/database')
const sequelize = require('sequelize')

KelurahanModel = database.define('tbl_kelurahan', {
    id: {
        type: sequelize.INTEGER,
        primaryKey: true
    },
    kecamatan_id: {
        type: sequelize.INTEGER
    },
    kelurahan: {
        type: sequelize.CHAR
    }
},{
    createdAt: 'created_at',
    updatedAt: 'updated-at',
    sequelize,
    tableName: 'tbl_kelurahan',
    modelName: 'KelurahanModel'
})
module.exports = KelurahanModel