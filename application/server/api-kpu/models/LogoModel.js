const database = require('../config/database')
const sequelize = require('sequelize')

const LogoModel = database.define('tbl_logo',{
    id: {
        type: sequelize.INTEGER,
        primaryKey: true
    },
    tahun_id: {
        type: sequelize.INTEGER
    },
    logo: {
        type: sequelize.CHAR
    },
    keterangan: {
        type: sequelize.TEXT
    }
},{
    createdAt: 'created_at',
    updatedAt: 'updated_at',
    sequelize,
    tableName: 'tbl_logo',
    modelName: 'LogoModel'
})
module.exports = LogoModel