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
                <h1 className="a text-black">Thriller</h1><br></br><br></br>
                <Slider {...settings}>
                    <div className="">
                        <img
                            src="/img/thriller/dan brown THRILLERS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Dan Brown</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/thriller/dark matter THRILLERS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Dark Matter</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/thriller/girl at the edge THRILLERS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Girl At The Edge</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/thriller/good son THRILLERS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Good Son</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/thriller/katarsis thriller.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Katarsis</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/thriller/medeas course THRILLERS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Medeas Course</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/thriller/out THRILLERS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Out</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/thriller/the gest list THRILLERS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Gest List</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/thriller/the memory police THRILLERS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Memory Police</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/thriller/the silent patient THRILLERS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Silent Patient</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/thriller/the THRILLERS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Trillers</h4>
                  </div>
                    <div className="">
                        <img
                            src="/img/thriller/the women in cabin 10 THRILLERS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Women In Cabin 10</h4>
                  </div>
                </Slider>
            </div>
        );
    }
    
}

