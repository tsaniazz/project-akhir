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
                <h4 className="a text-black">Romance</h4><br></br><br></br>
                <Slider {...settings}>
                    <div className="rounded-md flex max-h-[200px] w-30 object-cover relative">
                        <img
                            src="/img/romance/berdansa.webp"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                        <h4 className=" a text-white pl-4">Berdansa</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/romance/by your side romane.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">By Your Side</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/romance/dignitate romance.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Dignitate</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/romance/hyunnam.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Hyun Nam</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/romance/laut tengah.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Laut Tengah</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/romance/karen romance.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Karen Hawkins</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/romance/memori janji eskrim.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Memori Janji Eskrim</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/romance/menanti hari berhanti.jpeg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Menanti Hari Berhenti</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/romance/opa.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Opacarophile</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/romance/paper romance.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Paper Romance</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/romance/pulanh pergi.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Pulang Pergi</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/romance/saat2 jauh romance.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Saat- Saat Jauh</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/romance/why secertary kim romance.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Why Secertary Kim?</h4>
                    </div>
                </Slider>
            </div>
        );
    }
    
}
