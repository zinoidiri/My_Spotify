import React from "react";
import {Link} from "react-router-dom";
import logo from "./logo.png";
const Navigation= ()=>{
    return (

        
        <nav id="navbar">
            <img src={logo} draggable="false" id="logo" alt="logospotify"/>
        <ul class="liste" style={{display: 'flex'}}>

            <Link to="/">
                <li>Acceuil</li>
            </Link>
            <Link to="/Albums">
                <li>Albums</li>
            </Link>
            
            <Link to="/Artists">
                <li>Artists</li>
            </Link>
            
            <Link to="/Tracks">
                <li>Tracks</li>
            </Link>

            <Link to="Genres">
                <li>Genres</li>
            </Link>
        </ul>
        </nav>
    )
};

export default Navigation;