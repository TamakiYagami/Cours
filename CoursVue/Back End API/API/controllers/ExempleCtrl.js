import { InsertUsername } from '../models/ExempleModel.js'

export function CreateUsername(res, req) {
    const { username } = res.body
    InsertUsername(username)
}