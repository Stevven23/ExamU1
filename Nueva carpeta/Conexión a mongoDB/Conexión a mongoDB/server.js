import express from "express";
import dotenv from "dotenv";
import { connectDB } from "./config/db.js";

dotenv.config();

const app = express();
app.use(express.json());

// Conectar a la base de datos antes de iniciar el servidor
connectDB().then(() => {
    app.listen(process.env.PORT, () => {
        console.log(`🚀 Servidor en http://localhost:${process.env.PORT}`);
    });
});
