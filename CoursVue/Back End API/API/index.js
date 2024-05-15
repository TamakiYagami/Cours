import express from 'express';
import cors from 'cors';
import Router from './routes/routes.js'

const API = express();

API.use(express.json())

API.use(cors());

API.use(Router)

API.listen(5000, () => console.log("L'API est en ligne"))