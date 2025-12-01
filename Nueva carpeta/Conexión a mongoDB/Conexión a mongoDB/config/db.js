import { MongoClient } from "mongodb";
import dotenv from "dotenv";

dotenv.config();

const client = new MongoClient(process.env.MONGO_URI);
let db = null;

export async function connectDB() {
    try {
        if (!db) {
            await client.connect();
            console.log("🔥 Conectado a MongoDB");

            db = client.db(process.env.MONGO_DB);
        }
        return db;
    } catch (error) {
        console.error("❌ Error conectando a MongoDB:", error);
    }
}
