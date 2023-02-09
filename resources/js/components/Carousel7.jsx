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
                <h1 className="a text-black">Kids</h1><br></br><br></br>
                <Slider {...settings}>
                    <div className="rounded-md flex max-h-[150px] w-30 object-cover relative">
                        <img
                            src="/img/kids/a duet for home.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                        <h4 className=" a text-white pr-4">A Duet For Home</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/kids/diary of wimpy kids.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Diary Of Wimpy Kids <br></br>
                         Calling</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/kids/fiqh for kids.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Fiqh For Kids <br></br>
                         kids</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/kids/meps kids.png"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Meps kids</h4>
                    </div>
                    {/* <div className="">
                        <img
                            src="/img/kids/smartes kids in the world KIDS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Smartes Kids In The World </h4>
                    </div> */}
                    <div className="">
                        <img
                            src="/img/kids/the girl with the puppy KIDS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">The Girl With The Puppy</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/kids/totto chan KIDS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">TottoChan</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/kids/totto chan's children KIDS.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">TottoChan children</h4>
                    </div>
                </Slider>
            </div>
        );
    }
    
}

