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
                <h1 className="a text-black">Detective</h1><br></br><br></br>
                <Slider {...settings}>
                    <div className="rounded-md flex max-h-[150px] w-30 object-cover relative">
                        <img
                            src="/img/detective/case book DETECTIVE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                        <h4 className=" a text-white pl-2">Sherlock Holmes :<br></br>
                        Case Book</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/cuckoss DETECTIVE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-3">The Cuckoo's <br></br>
                         Calling</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/feral.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-7">The Feral <br></br>
                         Detective</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/fire watching DETECTIVE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Fire Watching</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/holmes 2 DETECTIVE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Memoar Sherlock Holmes </h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/holmes DETECTIVE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Sherlock Holmes :<br></br>
                         Puzzle Collection<br></br>
                         The Lost Cases</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/ill fame DETECTIVE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-7">Ill Fame</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/la_DETECTIVE.png"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-9">L.A the Detective</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/last bow.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Sherlock Holmes :<br></br>
                         His Last Bow</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/reluctant DETECTIVE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Reluctant</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/silent DETECTIVE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-2">Silent Parade</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/stification DETECTIVE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-3"> MyStification</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/study DETECTIVE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-4">Study Detective</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/detective/yakumo DETECTIVE.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-7">Yakumo</h4>
                    </div>
                </Slider>
            </div>
        );
    }
    
}

