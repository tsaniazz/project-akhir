import { Link } from "@inertiajs/inertia-react";
import React from "react";
import Logo from "../../../public/sbadmin2/img/crown6.png";
import Button from "./Navbar/Button";
import NavLinks from "./Navbar/NavLinks";


export default function Navbar() {

    return ( 
        <nav className="a bg-blue-300">
            <div className="flex items-center font-medium justify-around">
               <div className="z-50 p-2 md:w-auto w-full flex justify-between ">
                  <img src={Logo} alt="logo" className="md:cursor-pointer h-14" />
            <div className="text-2x1">
            <ion-icon name="menu"></ion-icon>
            </div>
        </div>
        <ul className="md:flex hidden uppercase items-center gap-8 font-[Poppins] mr-52">
            <li>
              <Link to="/" className="py-7 px-3 inline-block">
                Home
              </Link>
            </li>
            <NavLinks />
            </ul>
                <div className="md:block hidden">
                 <Button/>
                 <Button/>  
                  </div>
                {/* Mobile nav*/}
                <ul
                 className={`
                md:hidden bg-white absolute w-full h-full bottom-0 py-24 pl-4
                `}>
                <li>
              <Link to="/" className="py-7 px-3 inline-block">
                Home
              </Link>
            </li>
                <NavLinks/>
                <div className="py-5">
                <Button/>
                </div>
                </ul>
            </div>
        </nav>
    );
}

