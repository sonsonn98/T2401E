import { db } from '../Server';
import { useState,useEffect } from 'react';
import './BookData.css'

function BookData(){
    const [id,setid]=useState(0);
    const [name,setname]=useState("");
    const [author,setauthor]=useState("");
    const [price,setprice]=useState(0);
    const [picture,setpicture]=useState("");
    const [books,setbooks]=useState([]);

    useEffect(() => {
        db.books.toArray().then(items => setbooks(items))
    },[])

    const clearform = () => {
        setid(0)
        setname("")
        setauthor("")
        setprice(0)
        setpicture("")
    }

    const save= (id,name,author,price,picture) =>{
        if(id === 0){
            db.books.add({name:name,author:author,price:price,picture:picture})
        } else {
            db.books.update(id,{name:name,author:author,price:price,picture:picture})
        }
        db.books.toArray().then(items =>setbooks(items))
        clearform();
    }

    const loadDataEdit =(id) => {
        db.books.get(id).then(item => {
            setid(item.id)
            setname(item.name)
            setauthor(item.author)
            setprice(item.price)
            setpicture(item.picture)
        })
    }

    const deleteItem =(id) => {
        db.books.delete(id)
        db.books.toArray().then(items => setbooks(items))
    }
    return (
        <>
            <input type="hidden" value={id} />
            <div>
                <label>Name</label>
                <input type="text" value={name} onChange={(e) => setname(e.target.value)}/>
            </div>
            <div>
                <label>Author</label>
                <input type="text" value={author} onChange={(e) => setauthor(e.target.value)}/>
            </div>
            <div>
                <label>Price</label>
                <input type="text" value={price} onChange={(e) => setprice(e.target.value)}/>
            </div>
            <div>
                <label>Picture</label>
                <input type="text" value={picture} onChange={(e) => setpicture(e.target.value)}/>
            </div>

            <button onClick={() => save(id,name,author,price,picture)}>Save</button>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {books.map((item,index) => (
                        <tr key={index}>
                        <td>{index+1}</td>
                        <td>{item.name}</td>
                        <td>{item.age}</td>
                        <td>
                            <button onClick={()=> loadDataEdit(item.id)}>Edit</button>
                            <button onClick={()=> deleteItem(item.id)}>Delete</button>
                        </td>

                    </tr>
                    ))}
                </tbody>
            </table>
        </>
    )
}

export default BookData;