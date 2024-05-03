import Dexie from "dexie";

export const db = new Dexie('myDatabase');
db.version(1).stores({
  student: '++id, name, age' // Primary key and indexed props
});