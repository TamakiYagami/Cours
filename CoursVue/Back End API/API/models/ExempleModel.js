import db from '../config/database.js';

export function InsertUsername(username) {
    db.query("INSERT INTO user (username) VALUES (?)", [username])
}