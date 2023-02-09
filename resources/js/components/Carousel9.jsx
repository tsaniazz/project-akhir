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
                <h1 className="a text-black">Science</h1><br></br><br></br>
                <Slider {...settings}>
                    <div className="">
                        <img
                            src="/img/science/binary SCIENCE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Binary</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/science/biology SCIENCE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Biologi Science</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/science/breath SCIENCE.png"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Breath</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/science/crow SCIENCE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Crow</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/science/fight or flight SCIENCE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Fight Or Flight</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/science/genecit SCIENCE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Genecit</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/science/hyperion SCIENCE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Hyperion</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/science/mind race SCIENCE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Mind Race</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/science/molecular SCIENCE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Molecular</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/science/molleculeSCIENCE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Mollecule</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/science/physic.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Physic</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/science/saphiere SCIENCE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Saphiere</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/science/scientific SCIENCE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Scientific</h4>
                    </div>
                </Slider>
            </div>
        );
    }
    
}

