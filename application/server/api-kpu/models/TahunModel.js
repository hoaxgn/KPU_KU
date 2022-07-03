const database = require('../config/database')
const sequelize = require('sequelize')

const TahunModel = database.define('tbl_tahun', {
    id: {
        type: sequelize.INTEGER,
        primaryKey: true
    },
    tahun: {
        type: sequelize.CHAR
    }
},{
    createdAt: 'created_at',
    updatedAt: 'updated_at',
    sequelize,
    tableName: 'tbl_tahun',
    modelName: 'TahunModel'
})

module.exports = TahunModel