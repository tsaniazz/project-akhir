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
                <h1 className="a text-black">Recipes</h1><br></br><br></br>
                <Slider {...settings}>
                    <div className="rounded-md flex max-h-[150px] w-30 object-cover relative">
                        <img
                            src="/img/recipes/a new take on cake RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                        <h4 className=" a text-white pr-4">A New Take On Cake</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/chiness RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Chiness Recipes <br></br>
                         Calling</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/coconut sambal RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Coconut Sambal <br></br>
                         recipes</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/delicious RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pl-4">Delicious Recipes</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/fav milenial RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Favorite Milenial </h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/happy baking RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Happy Baking</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/home helps RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Home Helps</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/jajanan pasar RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Jajanan Pasar</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/korean RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Korean Recipes</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/masakan minang RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Masakan Minang</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/pastry RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Pastry Recipes</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/recipe book RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Recipe Book</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/recipes RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Recipes</h4>
                    </div>
                    <div className="">
                        <img
                            src="/img/recipes/sushi RECIPES.jpg"
                            alt=""
                            className="max-h-[200px] w-30 object-cover"
                        /><br></br>
                         <h4 className=" a text-white pr-7">Sushi Recipes</h4>
                    </div>
                </Slider>
            </div>
        );
    }
    
}

