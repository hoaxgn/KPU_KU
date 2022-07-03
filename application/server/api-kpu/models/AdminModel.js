const database = require('../config/database')
const sequelize = require('sequelize')

const AdminModel = database.define('tbl_admin', {
    id: {
        type: sequelize.STRING,
        primaryKey: true
    },
    username: {
        type: sequelize.STRING
    },
    password: {
        type: sequelize.STRING
    },
    email: {
        type: sequelize.STRING
    },
    image: {
        type: sequelize.STRING
    },
    is_active: {
        type: sequelize.STRING
    }
},{
    createdAt: 'created_at',
    updatedAt: 'updated_at',
    tableName: 'tbl_admin',
    sequelize,
    modelName: 'AdminModel'
})

module.exports = AdminModel