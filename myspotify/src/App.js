import './App.css';
import { useEffect, useState } from 'react';
let test = "hello"
import Navigation from './components/Navigation';
import Artists from "./components/Artists";
import Genres from "./components/Genres";
import Albums from "./components/Albums";
import Tracks from "./components/Tracks";
import Acceuil from "./components/Acceuil";
import {BrowserRouter as Router, Route} from 'react-router-dom';

function App() {
  const [getArtists, setArtists] = useState([]);
  useEffect(()=>{
    fetch("http://localhost/RUSH/W-WEB-090-PAR-1-1-spotify-abraham.diaw/php/artistes.php")
    .then(res => res.json())
    .then(res => {
      setArtists(res);
    })
  }, [true]);
  let i = 0;
  getArtists.forEach(element => {
    test = element["name"];
    console.log(test);
    i++;
  });
  // test = getArtists[1]["name"];
  // console.log(getArtists);
  return (
    <div className="App">
      <header className="App-header">
        <a>Artistes:</a>
        <span>{test}</span>
      </header>
      <Router>
       <Navigation/>
          <Route path="/" exact component={Acceuil}/>
          <Route path="/Artists" exact component={Artists}/>
          <Route path="/Albums" exact component={Albums}/>
          <Route path="/Tracks" exact component={Tracks}/>
          <Route path="/Genres" exact component={Genres}/>
      </Router>
    </div>
  );
}

export default App;
