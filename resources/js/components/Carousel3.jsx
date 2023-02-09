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
                <h4 className="a text-black">Biographies</h4><br></br><br></br>
                <Slider {...settings}>
                    <div className="rounded-md flex max-h-[150px] w-30 object-cover relative">
                        <img
                            src="/img/biografi/bungkarno BIOGRAPHIES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                        <h4 className=" a text-white pl-4">Bung Karno</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/biografi/buya hamka BIOGRAPHIES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Buya Hamka</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/biografi/chairil BIOGRAPHIES.webp"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Chairil</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/biografi/gusdur BIOGRAPHIES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Gus Dur</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/biografi/ibnu khaldun BIOGRAPHIES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Ibnu Khaldun</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/biografi/ki hajar dewantara BIOGRAPHIES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Ki Hajar Dewantara</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/biografi/mao zedong BIOGRAPHIES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Mao Zedong</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/biografi/rudy BIOGRAPHIES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Rudy Habibie</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/biografi/tjokroaminoto BIOGRAPHIES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">TjokroAminoto</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/biografi/untuk negriku BIOGRAPHIES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Untuk Negriku</h4>
                    </div>
                </Slider>
            </div>
        );
    }
    
}
