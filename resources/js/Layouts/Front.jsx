import { useState } from "react";
import Logo from "../Components/Logo";

export default function ({ children }) {
  const [mobileNavigationOpen, setMobileNavigationOpen] = useState(0);
  return (
    <>
      <header className="sticky top-0 z-50 border-b px-6 bg-white | md:px-32">
        <div className="h-20 flex justify-between items-center container mx-auto">
          <div id="navbar-logo">
            <a href="/">
              <Logo className="h-12 text-primary" />
            </a>
          </div>
          <div
            id="navbar-mobile-icon"
            className={
              "block | lg:hidden lg:static " +
              (mobileNavigationOpen ? "transform rotate-90" : "")
            }
            onClick={() => setMobileNavigationOpen(!mobileNavigationOpen)}
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              className="h-4 w-4 text-primary"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth="1.5"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </div>
          <div
            id="navbar"
            className={
              "inset-0 absolute top-20 w-full bg-white z-50 | lg:inset-auto lg:top-auto lg:block lg:static lg:m-0 lg:w-auto " +
              (!mobileNavigationOpen ? "hidden" : "")
            }
          >
            <nav className=" bg-white py-4 px-6 | md:px-32 | lg:px-0 lg:py-0">
              <ul className="menu list-none text-sm sm:mt-0">
                <li className="menu-item mx-4">
                  <a href="{{ route('front.home') }}">Home</a>
                </li>
                <li className="menu-item mx-4">
                  <a href="{{ route('front.services') }}">Pricing</a>
                </li>
                <li className="menu-item mx-4">
                  <a href="{{ route('front.contact') }}">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>

      {children}

      <footer className="bg-primary py-20 px-6 text-white | md:px-32">
        <div className="container grid grid-cols-1 gap-8 | lg:grid-cols-2">
          <div>
            <h4 className="text-6xl capitalize font-bold mb-4">
              let's make something. together.
            </h4>
          </div>
          <div className="text-right">
            <ul className="text-3xl font-bold list-none capitalize">
              <li>
                <a href="{{ route('front.about') }}">About</a>
              </li>
              <li>
                <a href="{{ route('front.privacy-policy') }}">Privacy Policy</a>
              </li>
              <li>
                <a href="{{ route('front.terms-and-conditions') }}">
                  Terms & Conditions
                </a>
              </li>
              <li>
                <a href="{{ route('front.returns-and-refunds') }}">
                  Return & Refunds
                </a>
              </li>
            </ul>
            <ul className="text-lg font-bold flex justify-end gap-4 mt-8 list-none capitalize">
              <li>
                <a href="https://github.com/codefuelcf" target="__blank">
                  Github
                </a>
              </li>
              <li>
                <a href="https://facebook.com/codefuelcf" target="__blank">
                  Facebook
                </a>
              </li>
              <li>
                <a href="https://instagram.com/codefuelcf" target="__blank">
                  Instagram
                </a>
              </li>
              <li>
                <a href="https://twitter.com/codefuelcf" target="__blank">
                  Twitter
                </a>
              </li>
            </ul>
          </div>
          <div className="text-sm font-bold">
            <p>hello@codefuel.in</p>
          </div>
          <div className="text-sm font-bold flex flex-col gap-1 text-right">
            <p className="">Codefuel Software and Solutions Private Limited</p>
            <p className="">CIN: U72900JK2021OPC012765</p>
            <p className="">GST: 01AAJCC8036E1Z1</p>
          </div>
        </div>
      </footer>
    </>
  );
}
