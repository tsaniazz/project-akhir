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
                <h1 className="a text-black">History</h1><br></br><br></br>
                <Slider {...settings}>
                    <div className="rounded-md flex max-h-[150px] w-30 object-cover relative">
                        <img
                            src="/img/history/adolf hitler HISTORY.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                        <h4 className=" a text-white pr-4">Adolf Hitler</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/history/arab HISTORY.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Arab History <br></br>
                         Calling</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/history/asia tenggara HISTORY.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Asia Tenggara History <br></br>
                         history</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/history/education HISTORY.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Education History</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/history/lokal HISTORY.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Local History </h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/history/sosekk HISTORY.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Sosekk History</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/history/sumatra HISTORY.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Sumatra History</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/history/teh HISTORY.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Teh History</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/history/the story of java HISTORY.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Story Of Java</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/history/tyranny v.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Tyranny</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/history/world HISTORY.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">World History</h4>
                    </div>
                </Slider>
            </div>
        );
    }
    
}

