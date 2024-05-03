import React from "react";

class Footer extends React.Component{
    render(){
        return(
            <>
            <h1>This is footer demo</h1>
            <h1>{this.props.name}</h1>
            </>
        )
    }
}
export default Footer;