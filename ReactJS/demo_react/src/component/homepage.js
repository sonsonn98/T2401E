import { Link } from "react-router-dom";
function Homepage(){
    let products = [{id:1, name:"product 01"},{id:2, name:"product 02"},{id:3, name:"product 03"}]
    return(
    <><div>This is homepage</div>
    <ul>
        {products.map((item, index) => <li key={index} ><Link to={"product/"+item.id} >{item.name}</Link></li> )}
    </ul>
</>
)
}

export default Homepage;