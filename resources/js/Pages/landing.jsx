import React from "react";
import Button from 'react-bootstrap/Button';
import Carousel from "../components/Carousel";
import Carousel10 from "../components/Carousel10";
import Carousel11 from "../components/Carousel11";
import Carousel2 from "../components/Carousel2";
import Carousel3 from "../components/Carousel3";
import Carousel4 from "../components/Carousel4";
import Carousel5 from "../components/Carousel5";
import Carousel6 from "../components/Carousel6";
import Carousel7 from "../components/Carousel7";
import Carousel8 from "../components/Carousel8";
import Carousel9 from "../components/Carousel9";
import Footer from "../components/Footer";
import Navbar from "../components/Navbar";


export default function landing() {
    return (
        <section
        className="h-full bg-blue-100 w-full  bg-cover
        font-[Poppins] md:bg-top bg-center"
        >
        <>
            <Navbar/>
            <Carousel/>
            <Carousel2/>
            <Carousel3/>
            <Carousel4/>
            <Carousel5/>
            <Carousel6/>
            <Carousel7/>
            <Carousel8/>
            <Carousel9/>
            <Carousel10/>
            <Carousel11/>
            <Footer/>
        </>
        </section>
    );
}
