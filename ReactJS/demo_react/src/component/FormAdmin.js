import './FormAdmin.css';
import { db } from '../Server';
import { useState, useEffect} from 'react';
function FormAdmin (){
    const [id, setID] =useState(0);
    const [name, setName] =useState("");
    const [age, setAge] =useState(0);
    const [student, setStudent] =useState([]);

    useEffect(() => {
        db.student.toArray().then(items => setStudent(items))
    },[])

    const clearform = () => {
        setID(0)
        setName("")
        setAge(0)
    }

    const save= (id,name,age) =>{
        if(id === 0){
            db.student.add({name:name,age:age})
        } else {
            db.student.update(id,{name:name, age:age})
        }
        db.student.toArray().then(items =>setStudent(items))
        clearform();
    }

    const loadDataEdit =(id) => {
        db.student.get(id).then(item => {
            setID(item.id)
            setAge(item.age)
            setName(item.name)
        })
    }

    const deleteItem =(id) => {
        db.student.delete(id)
        db.student.toArray().then(items => setStudent(items))
    }
    return (
        <>
            <input type="hidden" value={id} />
            <div>
                <label>Name</label>
                <input type="text" value={name} onChange={(e) => setName(e.target.value)}/>
            </div>
            <div>
                <label>Age</label>
                <input type="text" value={age} onChange={(e) => setAge(e.target.value)}/>
            </div>
            <button onClick={() => save(id,name,age)}>Save</button>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {student.map((item,index) => (
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
export default FormAdmin;