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
                <h4 className="a text-black">Art</h4><br></br><br></br>
                <Slider {...settings}>
                    <div className="rounded-md flex max-h-[150px] w-30 object-cover relative">
                        <img
                            src="/img/art/bicara ART.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                        <h4 className=" a text-white pl-4">Bicara</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/art/cantik itu luka ART.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Cantik Itu Luka</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/art/seni bodo amat v.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Seni Bodo Amat</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/art/seni rupa ART.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Seni Rupa</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/art/the story of ART.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Story Of Art</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/art/the whole ART.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">The whole Art</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/art/memori janji eskrim.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Memori Janji Eskrim</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/art/menanti hari berhanti.jpeg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Menanti Hari Berhenti</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/art/opa.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Opacarophile</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/art/paper art.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Paper Romance</h4>
                    </div>
                </Slider>
            </div>
        );
    }
    
}
