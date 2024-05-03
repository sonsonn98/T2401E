import Dexie from "dexie";

export const db = new Dexie('myDatabase');
db.version(1).stores({
  books: '++id, name, author, price, picture' // Primary key and indexed props
});