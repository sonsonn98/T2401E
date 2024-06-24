import './FormAdmin.css';
import { db } from './Server';
import { useState, useEffect} from 'react';
function FormAdmin (){
    const [id, setID] =useState(0);
    const [title, settitle] =useState("");
    const [author, setauthor] =useState("");
    const [year, setyear] =useState(0);
    const [book, setbook] =useState([]);

    useEffect(() => {
        db.book.toArray().then(items => setbook(items))
    },[])

    const clearform = () => {
        setID(0)
        settitle("")
        setauthor("")
        setyear(0)
    }

    const save= (id,title,author,year) =>{
        if(id === 0){
            // if(title =="" || author =="" || year ==0){
            //     alertmsg.style.display = "block"
            // }
            db.book.add({title:title,author:author,year:year})
        } else {
            db.book.update(id,{title:title, author:author, year:year})
        }
        db.book.toArray().then(items =>setbook(items))
        clearform();
    }

    const loadDataEdit =(id) => {
        db.book.get(id).then(item => {
            setID(item.id)
            setauthor(item.author)
            settitle(item.title)
            setyear(item.year)
        })
    }

    const deleteItem =(id) => {
        db.book.delete(id)
        db.book.toArray().then(items => setbook(items))
    }

// Get the modal
const modal = document.getElementById("myModal");

// Get the button that opens the modal
const btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
    return (
        <div className='container'>
            <h1>A list of Books</h1>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {book.map((item,index) => (
                        <tr key={index}>
                        <td>{index+1}</td>
                        <td>{item.title}</td>
                        <td><span className='author'>{item.author}</span></td>
                        <td>{item.year}</td>
                        <td>
                            <button onClick={()=> loadDataEdit(item.id)}>Edit</button>
                            <button onClick={()=> deleteItem(item.id)}>Delete</button>
                        </td>

                    </tr>
                    ))}
                </tbody>
            </table>
            <h1>Add a new book</h1>
            <input type="hidden" value={id} />
            <div>
                <label>Title</label>
                <br/>
                <input type="text" value={title} onChange={(e) => settitle(e.target.value)}/>
            </div>
            <div>
                <label>Author</label>
                <input type="text" value={author} onChange={(e) => setauthor(e.target.value)}/>
            </div>
            <div>
                <label>Publish Year</label>
                <input type="text" value={year} onChange={(e) => setyear(e.target.value)}/>
            </div>
            <button id='myBtn'  onClick={() => save(id,title,author,year)}>
                Add
                </button>
                <div id="myModal" className="modal">

                    <div className="modal-content">
                    <span className="close">&times;</span>
                    <p>Add book successfully!!</p>
                    </div>
                </div>   
        </div>
    )
}
export default FormAdmin;