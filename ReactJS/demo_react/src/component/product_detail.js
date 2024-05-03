import { useParams } from "react-router-dom";
function Product_detail(){
    const {id}=useParams()
    return(
        <>
        <h1>This is product {id}</h1>
        </>
    )
}
export default Product_detail;