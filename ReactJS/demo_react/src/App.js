import logo from './logo.svg';
import { Route,Routes } from 'react-router-dom';
import './App.css';
import Headercomponent, {title} from './component/headercomponent/Header';
import Footer from './component/footer/Footer';
import Contact from './component/contact';
import Homepage from './component/homepage';
import Products from './component/products';
import Product_detail from './component/product_detail';
import FormAdmin from './component/FormAdmin';
function App() {
  return (
    <div className="App">
      <Headercomponent address=" 8 Ton That Thuyet"/>
      <div>{title}</div>
      <Routes>
        <Route path='/' element={<Homepage/>}></Route>
        <Route path='/contact' element={<Contact/>}></Route>
        <Route path='/product' element={<Products/>}></Route>
        <Route path='/product/:id' element={<Product_detail/>}></Route>
      </Routes>
      <Footer name="T2401E"/>
      <FormAdmin/>
    </div>
  );
}

export default App;
