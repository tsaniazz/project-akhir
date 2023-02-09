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
                <h1 className="a text-black">Fantacy</h1><br></br><br></br>
                <Slider {...settings}>
                    <div className="rounded-md flex max-h-[150px] w-30 object-cover relative">
                        <img
                            src="/img/fantasy/shadow and bone fantasy.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                        <h4 className=" a text-white pr-4">Shadow and Bone</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/fantasy/strange the dreamer fantasy.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Strange The Dreamer <br></br>
                         Calling</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/fantasy/the lighning thief fantasy.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Lighning Thief <br></br>
                         fantasy</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/fantasy/treasure islandjpeg.jpeg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Treasure Island</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/fantasy/the trouble with perfect.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Trouble With Perfect </h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/fantasy/Tujuh kelana.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Tujuh Kelana</h4>
                    </div>
                </Slider>
            </div>
        );
    }
    
}

