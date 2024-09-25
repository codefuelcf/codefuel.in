import Logo from "../Logo";
import { useState } from "react";
import { Link } from "@inertiajs/react";
import { Menu, XCircle } from "lucide-react";

export default function () {
  const [isOpen, toggleMenu] = useState(false);
  return (
    <>
      <button onClick={() => toggleMenu(!isOpen)}>
        <Menu className="size-5" />
      </button>

      <div
        className={
          "fixed inset-0 w-screen h-screen bg-primary text-white z-50 transition-opacity delay-50 duration-700 " +
          (isOpen ? "opacity-100 visible" : "opacity-0 invisible")
        }
      >
        <div className="container">
          <div className="h-20 flex justify-between items-center">
            <div id="navbar-logo">
              <a href="/">
                <Logo className="h-12 text-white" />
              </a>
            </div>
            <button onClick={() => toggleMenu(!isOpen)}>
              <XCircle strokeWidth={3} className="size-5" />
            </button>
          </div>

          <div className="pt-20">
            <ul className="text-4xl font-bold list-none capitalize flex flex-col gap-4 lg:text-6xl">
              {[
                {
                  title: "Contact",
                  link: route("front.contact"),
                },
                {
                  title: "Privacy Policy",
                  link: route("front.privacy-policy"),
                },
                {
                  title: "Return & Refunds",
                  link: route("front.returns-and-refunds"),
                },
                {
                  title: "Terms & Conditions",
                  link: route("front.terms-and-conditions"),
                },
              ].map((el, index) => (
                <li key={index}>
                  <Link className="text-white" href={el.link}>
                    {el.title}
                  </Link>
                </li>
              ))}
            </ul>

            <ul className="text-lg font-bold flex gap-4 mt-8 list-none capitalize">
              {[
                {
                  platform: "X",
                  link: "https://x.com/codefuelcf",
                },
                {
                  platform: "Github",
                  link: "https://github.com/codefuelcf",
                },
              ].map((el, index) => (
                <li key={index}>
                  <a className="text-white" href={el.link} target="__blank">
                    {el.platform}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          <div className="text-sm mt-8">
            <p className="">Codefuel Software and Solutions Private Limited</p>
            <p className="">CIN: U72900JK2021OPC012765</p>
            <p className="">GST: 01AAJCC8036E1Z1</p>
          </div>
        </div>
      </div>
    </>
  );
}
