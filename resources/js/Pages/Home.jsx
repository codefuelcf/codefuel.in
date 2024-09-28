import Front from "../Layouts/Front";
import { Head } from "@inertiajs/react";

import Vivo from "../../img/brands/vivo.png";
import RoyalEnfield from "../../img/brands/royal-enfield.png";
import SheenGraphics from "../../img/brands/sheen-graphics.png";
import DelhiPublicSchool from "../../img/brands/delhi-public-school.png";

export default function () {
  return (
    <Front>
      <Head title="Home" />
      <main>
        <section id="masthead" className="bg-grid py-20">
          <div className="container flex flex-col gap-12">
            <div id="masthead-title">
              <h1 className="text-center text-6xl font-bold -rotate-1 lg:text-9xl">
                Turn your{" "}
                <span className="underline decoration-primary">ideas</span> in
                to a{" "}
                <span className="underline decoration-primary">reality</span>
              </h1>
              <h2 className="text-center mt-4 text-black/75 text-lg">
                We build quality websites, apps, MVP's, designs, wireframes and
                more at efficient cost
              </h2>
            </div>

            <div id="masthead-ratings" className="flex gap-10 justify-center">
              {[
                { number: 20, title: "Happy Customers" },
                { number: 5, title: "Years of Experience" },
                { number: 100, title: "Projects Completed" },
              ].map((el, index) => (
                <div
                  className="flex flex-col items-center gap-2 text-center"
                  key={index}
                >
                  <h3 className="font-bold text-4xl text-primary">
                    {el.number}+
                  </h3>
                  <h3 className="leading-tight">{el.title}</h3>
                </div>
              ))}
            </div>

            <div id="masthead-cta" className="flex justify-center">
              <a
                href="mailto:hello@codefuel.in?subject=May%20the%20Force%20be%20with%20you&body=May%20the%20Force%20be'%20with%20us%20all%3A%0D%0A%0D%0ACheers%2C%0D%0AHappy%20Customer"
                className="bg-primary text-white p-4 rounded-full font-medium"
              >
                Schedule Consultation
              </a>
            </div>
          </div>
        </section>

        <section id="clients" className="py-20 bg-white container">
          <h2 className="text-4xl heading-text mb-8">
            Trusted By All Sizes Since 2018
          </h2>
          <h3 className="text-xl mb-8">
            We've had the privilege of working with a diverse range of clients,
            from ambitious startups to top global brands.
          </h3>

          <div className="grid grid-cols-2 gap-8 items-center md:grid-cols-4">
            {[Vivo, RoyalEnfield, SheenGraphics, DelhiPublicSchool].map(
              (el, index) => (
                <img
                  key={index}
                  src={el}
                  alt="Flynterest"
                  className="size-32 grayscale hover:grayscale-0"
                />
              )
            )}
          </div>
        </section>

        <section id="testimonials" className="bg-primary py-20">
          <div className="container">
            <h4 className="text-4xl heading-text mb-8 !decoration-black text-white">
              Our Happy Clients Say About Us
            </h4>
            <div className="grid grid-cols-1 gap-4 text-sm lg:grid-cols-3">
              {[
                {
                  testimonial:
                    "Working with Codefuel was great. Technical solutions provided by them have streamlined our operations and boosted productivity.",
                  name: "Ehsan Qudussi",
                  designation: "CTO",
                  brand: "Delhi Public School, Srinagar",
                },
                {
                  testimonial:
                    "The web application built for us to manage rewards is great. It works efficiently, is easy to use and is completely reliable.",
                  name: "Sahil Gupta",
                  designation: "JK Sales Head",
                  brand: "Vivo India",
                },
                {
                  testimonial:
                    "People we trust for quality work. Codefuel's proffesionalism and attention to detail is unmatched.",
                  name: "Irfan Amin",
                  designation: "MD",
                  brand: "Sheen Graphics",
                },
              ].map((el, index) => (
                <div key={index} className="px-6 py-4 bg-white">
                  <p className="italic">"{el.testimonial}"</p>
                  <div className="text-black/50 mt-4 font-medium">
                    <p>{el.name}</p>
                    <p>
                      {el.designation} - {el.brand}
                    </p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </section>

        <section id="good-at-few-things" className="bg-grid py-20">
          <div className="container">
            <h2 className="text-4xl heading-text mb-8">
              We are good at a few things
            </h2>
            <h3 className="text-xl mb-8">
              We only focus on certain areas, giving you the results that really
              matter. We won't offer you something we don't excel in.
            </h3>
            <div className="grid grid-cols-1 gap-8 lg:grid-cols-3">
              {/* 
              - Be secific to it and not mention anything else
              - Don;t praise, people should know
              For what / Why / Experience / 
              */}
              {[
                {
                  title: "Laravel",
                  content:
                    "Laravel is our framework of choice for everything that requires a backend. We love working with Laravel, Inertia, React, and Tailwind to create great web applications.",
                },
                {
                  title: "React/Next",
                  content:
                    "React is our preferred frontend framework, and with Next on top of it, we build stunning websites with accessible, responsive, interactive, and user-friendly UIs.",
                },
                {
                  title: "Wordpress/Wix",
                  content:
                    "WordPress and Wix are our go-to CMSes and underdog website builders. With their vast ecosystems, we get amazing websites up and running in just a few hours.",
                },
              ].map((el, index) => (
                <div key={index}>
                  <h4 className="text-2xl underline decoration-red-500 transform -rotate-2 mb-4 underline-offset-8 font-bold">
                    {el.title}
                  </h4>
                  <p className="text-md text-black/50">{el.content}</p>
                </div>
              ))}
            </div>
          </div>
        </section>

        <section id="how-we-work" className="bg-primary text-white py-20">
          <div className="container">
            <h2 className="text-4xl heading-text mb-8 !decoration-black">
              Steps we take to deliver outstanding projects.
            </h2>
            <h3 className="text-xl mb-8">
              Our approach to work is simple and robust. Our process helps you get the best results
            </h3>
            <div className="grid grid-cols-1 gap-8 lg:grid-cols-4">
              {[
                {
                  title: "1) Ideation",
                  content:
                    "We enjoy discussing and understanding your ideas to help you refine and envision an incredible platform. Exploring your ideas allows us to offer you the optimal solution.",
                },
                {
                  title: "2) Prototyping",
                  content:
                    "From ideation to prototyping, we give solid shape to your ideas, allowing you to interact with them and gather initial feedback. Prototyping can range from wireframes to MVPs.",
                },
                {
                  title: "3) Implementation",
                  content:
                    "With a tailored tech stack, we implement and shape your ideas, making them ready to ship and scale. We iterate on this step until we find what works best for you and delivers targeted results.",
                },
                {
                  title: "4) Maintainence",
                  content:
                    "After the projects are complete, we provide long-term maintenance and support. We help with deployment, upgrades, adding functionalities, and more to ensure your services run smoothly.",
                },
              ].map((el, index) => (
                <div key={index}>
                  <h4 className="text-2xl underline decoration-black transform -rotate-2 mb-4 underline-offset-8 font-bold">
                    {el.title}
                  </h4>
                  <p className="text-md text-white/80 mt-8">{el.content}</p>
                </div>
              ))}
            </div>
          </div>
        </section>

        <section id="start-a-project" className="py-20">
          <div className="container">
            <h2 className="text-4xl heading-text mb-8">
              Want to start a project?
            </h2>
            <h3 className="text-xl mb-8">
             Let's collaborate on your next big project and create something great together.
            </h3>
          </div>
        </section>
      </main>
    </Front>
  );
}
