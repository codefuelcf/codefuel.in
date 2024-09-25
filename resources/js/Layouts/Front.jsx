import Logo from "../Components/Logo";
import { Link } from "@inertiajs/react";
import Menu from "../Components/Front/Menu";

export default function ({ children }) {
  return (
    <>
      <header className="sticky top-0 z-40 border-b bg-white">
        <div className="h-20 flex justify-between items-center container">
          <div id="navbar-logo">
            <Link href={route("front.home")}>
              <Logo className="h-12 text-primary" />
            </Link>
          </div>
          <Menu />
        </div>
      </header>

      {children}

      <footer className="bg-primary py-20 px-6 text-white">
        <div className="container grid grid-cols-1 gap-8 | lg:grid-cols-2">
          <div className="order-last lg:order-first">
            <h4 className="text-5xl capitalize font-bold mb-4 lg:text-6xl">
              let's make something. together.
            </h4>
            <div className="text-sm">
              <p className="">
                Codefuel Software and Solutions Private Limited
              </p>
              <p className="">CIN: U72900JK2021OPC012765</p>
              <p className="">GST: 01AAJCC8036E1Z1</p>
            </div>
          </div>
          <div className="text-center lg:text-right">
            <ul className="text-xl font-bold list-none capitalize lg:text-3xl">
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
                  <Link className="text-white" href={el.link}>{el.title}</Link>
                </li>
              ))}
            </ul>

            <ul className="text-lg font-bold flex justify-center gap-4 mt-8 list-none capitalize lg:justify-end">
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
        </div>
      </footer>
    </>
  );
}
