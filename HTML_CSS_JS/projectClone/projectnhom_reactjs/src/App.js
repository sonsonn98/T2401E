import logo from './logo.svg';
import './App.css';
import './responsive.css';
import { Route, Routes } from 'react-router-dom';
import Header from './Header';
import Footer from './Footer';
import Mainpage from './Content/Mainpage';
import Detailpage from './Content/Detailpage';
import BookData from './Content/BookData';

function App() {
  return (
    <div className="App">
      <Header/>
      <Routes>
      <Route path='/' element={<Mainpage/>}></Route>
      <Route path='/Detailpage' element={<Detailpage/>}></Route>
      <Route path='/Bookdata' element={<BookData/>}></Route>
      </Routes>
      <Footer/>
    </div>
  );
}

export default App;
