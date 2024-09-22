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
            className={'inset-0 absolute top-20 w-full bg-white z-50 | lg:inset-auto lg:top-auto lg:block lg:static lg:m-0 lg:w-auto ' + (!mobileNavigationOpen ? 'hidden' : '')}
          >
            <nav className=" bg-white py-4 px-6 | md:px-32 | lg:px-0 lg:py-0">
              <ul className="menu list-none uppercase text-sm sm:mt-0">
                <li className="menu-item mx-4">
                  <a href="{{ route('front.home') }}">Home</a>
                </li>
                <li className="menu-item mx-4">
                  <a href="{{ route('front.about') }}">About</a>
                </li>
                <li className="menu-item mx-4">
                  <a href="{{ route('front.services') }}">Services</a>
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

      <footer className="bg-gray-800 py-10 px-6 text-white | md:px-32">
        <div className="container mx-auto grid grid-cols-1 gap-4 | md:grid-cols-4 md:gap-8">
          <div>
            <h4 className="text-xl capitalize font-bold mb-4">
              Want to reach us?
            </h4>
            <p>
              Want to start a project? Want to get a quote? <br />
              You may also reach out to us at{" "}
              <b>
                <a href="mailto:hello@codefuel.in">hello@codefuel.in</a>
              </b>{" "}
              <br />
            </p>
          </div>
          <div>
            <h4 className="text-xl capitalize font-bold mb-4">Follow us</h4>
            <ul className="list none capitalize">
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
          <div>
            <h4 className="text-xl capitalize font-bold mb-4">Company</h4>
            <ul className="list none capitalize">
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
          </div>
          <div>
            <h4 className="text-xl capitalize font-bold mb-4">Newsletter</h4>
            <p>
              Register for our newsletter and receive all the latest updates
              from us
            </p>
            <div className="mt-4">
              <form action="{{ route('newsletter.store') }}" method="post">
                <input
                  type="email"
                  className="block w-full text-gray-900 rounded-md"
                  name="email"
                  placeholder="youremail@example.com"
                />
                <button
                  type="submit"
                  className="text-white w-full block hover:underline mt-1"
                >
                  Register For Newsletter
                </button>
              </form>
            </div>
          </div>
        </div>
        <div className="mt-8 text-center">
          <p className="inline">
            &copy; 2016 -{" "}
            <span x-data="{}" x-text="new Date().getFullYear()"></span>. All
            Rights Reserved. <b>Codefuel</b>
          </p>
        </div>
      </footer>
    </>
  );
}
