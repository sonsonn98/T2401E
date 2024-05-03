import "./Header.css"
import { Link } from "react-router-dom";
function Headercomponent(){
    return(
        <>
        <h1 style={{color:"red"}}>Hello World!! This is header</h1>
        <div><Link to="/contact">Contact</Link></div>
        <div><Link to="/product">products</Link></div>
        <div><Link to="/">homepage</Link></div>

        </>
    );
}
export default Headercomponent;
export const title="tesst abc";