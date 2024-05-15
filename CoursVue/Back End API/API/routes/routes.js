import express from 'express';

const router = express.Router();

import { CreateUsername } from '../controllers/ExempleCtrl.js';


router.post('/create', CreateUsername);



export default router