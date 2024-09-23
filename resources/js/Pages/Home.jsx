import Front from "../Layouts/Front";

import Vivo from "../../img/brands/vivo.png";
import Flynterest from "../../img/brands/flynterest.png";
import RoyalEnfield from "../../img/brands/royal-enfield.png";
import SheenGraphics from "../../img/brands/sheen-graphics.png";
import DelhiPublicSchool from "../../img/brands/delhi-public-school.png";

export default function () {
  return (
    <Front>
      <main>
        <section id="masthead" className="bg-grid py-20">
          <div className="container flex flex-col gap-12">
            <div id="masthead-title">
              <h1 className="text-center text-9xl font-bold -rotate-1">
                Turn your{" "}
                <span className="underline decoration-primary">ideas</span> in
                to a{" "}
                <span className="underline decoration-primary">reality</span>
              </h1>
              <h2 className="text-center mt-4 text-black/75 text-lg">
                Codefuel helps you build websites, apps, MVP's and much more
                cost efficiently and great quality
              </h2>
            </div>

            <div id="masthead-ratings" className="flex gap-12 justify-center">
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

        <section
          id="clients"
          className="py-20 bg-white text-center container"
        >
          <div className="grid grid-cols-2 gap-8 items-center md:grid-cols-6">
            {[
              Vivo,
              Flynterest,
              DelhiPublicSchool,
              RoyalEnfield,
              SheenGraphics,
              DelhiPublicSchool,
            ].map((el, index) => (
              <img
                key={index}
                src={el}
                alt="Flynterest"
                className="size-24 grayscale hover:grayscale-0"
              />
            ))}
          </div>
        </section>

        <section id="testimonials" className="bg-grid py-20">
          <div className="container">
            <h4 className="text-center mb-8">Our Happy Clients Say About Us</h4>
            <div className="grid grid-cols-1 gap-4 text-xs md:grid-cols-3">
              {[
                {
                  photo: DelhiPublicSchool,
                  testimonial:
                    "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut facilis cupiditate minus.",
                  name: "Tauseef Shah",
                  brand: "Flynterest",
                },
                {
                  photo: DelhiPublicSchool,
                  testimonial:
                    "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut facilis cupiditate minus.",
                  name: "Tauseef Shah",
                  brand: "Flynterest",
                },
                {
                  photo: DelhiPublicSchool,
                  testimonial:
                    "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut facilis cupiditate minus.",
                  name: "Tauseef Shah",
                  brand: "Flynterest",
                },
              ].map((el, index) => (
                <div
                  key={index}
                  className="rounded-full px-6 py-4 flex gap-2 bg-white"
                >
                  <div className="">{el.testimonial}</div>
                </div>
              ))}
            </div>
          </div>
        </section>
      </main>
    </Front>
  );
}
