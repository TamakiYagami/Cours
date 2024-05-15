import mysql from "mysql2"

const db = mysql.createPool({
    host: "localhost",
    user: "Anto",
    password: "Azerty123",
    database: 'api'
})

export default db