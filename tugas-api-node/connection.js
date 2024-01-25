const mysql = require('mysql')

const db = mysql.createConnection({
    host: "localhost",
    user:"root",
    password: "", 
    database: "biodata"
})

module.exports = db