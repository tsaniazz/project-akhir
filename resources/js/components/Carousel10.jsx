import React, { Component } from "react";
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import { dataDigitalBestSeller } from "../data.js";

export default class Responsive extends Component {
    render() {
        var settings = {
            dots: true,
            infinite: false,
            speed: 500,
            slidesToShow: 5,
            slidesToScroll: 4,
            initialSlide: 0,
            responsive: [
                {
                    breakpoint: 624,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        initialSlide: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        };

        return (
            <div className=" bg-blue-300 mx-auto p-10 mt-20">
                <h1 className="a text-black">Science Fiction</h1><br></br><br></br>
                <Slider {...settings}>
                    <div className="">
                        <img
                            src="/img/science fiction/alpha SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Alpha</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/american SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">American</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/andywair SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">AndyWair</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/artemis SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Artemis</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/behind SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Behind</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/binti SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Binti</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/contact SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Contact</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/cursed SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Cursed</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/dune SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Dune</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/four SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Four</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/harry potter SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Harry Potter</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/keajaiban SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Keajaiban</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/night SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Night</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/penjelajah antariksa SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Penjelajah Antariksa</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/the fall of gondolin SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Fall Of Gondolin</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/the game luck SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Game Luck</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/the hunger games SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Hungger Games</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/the hungger SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Hungger</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/the martian SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Martian</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/science fiction/the shark caller SCIENCE FICTION.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Shark Caller</h4>
                  </div>
                </Slider>
            </div>
        );
    }
    
}

