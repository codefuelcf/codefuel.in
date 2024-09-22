import Logo from "../Components/Logo";
import Front from "../Layouts/Front";

export default function () {
  return (
    <Front>
      <main>
        <section id="masthead" className="bg-grid py-20">
          <div className="container">
            <h1 className="text-center text-8xl font-bold -rotate-1">
              Turn your <span className="underline decoration-primary">ideas</span> in to
              a <span className="underline decoration-primary">reality</span>
            </h1>
            <h2 className="text-center mt-4 text-black/75 text-lg">
              Codefuel's team help you build websites, apps, MVP's and much more cost efficiently and great quality
            </h2>
          </div>
        </section>

        <section
          id="home-hero"
          className="px-6 py-20 bg-gradient-to-bl from-primary to-red-800 text-white | md:px-32"
        >
          <div className="container mx-auto | md:flex md:items-center">
            <div className="hidden mb-8 | md:block md:w-1/3 md:mb-0">
              <Logo className="h-32 mx-auto text-primary" />
            </div>
            <div className="w-full text-right | md:w-2/3">
              <h1 className="text-5xl">
                Hey There, We Areaa <br />
              </h1>
              <h1 className="text-5xl h-12">
                <span id="home-typed-js-hero"></span>
              </h1>
              <p className="mt-8">
                We provide solutions for all your digital needs ranging from
                development to desigining to marketing.
              </p>
            </div>
          </div>
        </section>
        <section
          id="our-numbers"
          className="px-6 py-20 text-center w-full | md:w-1/3 md:mx-auto"
        >
          <div className="container mx-auto flex items-center gap-8">
            <div className="flex-1">
              <h2 className="text-xl font-bold text-primary">15+</h2>
              <h4 className="text-xs">Clients</h4>
            </div>
            <div className="flex-1">
              <h2 className="text-xl font-bold text-primary">
                <span
                  x-data="{}"
                  x-text="new Date().getFullYear() - new Date(2016, 0 , 1).getFullYear()"
                ></span>
                +
              </h2>
              <h4 className="text-xs">Years</h4>
            </div>
            <div className="flex-1">
              <h2 className="text-xl font-bold text-primary">50+</h2>
              <h4 className="text-xs">Projects</h4>
            </div>
          </div>
        </section>
        <section
          id="clients"
          className="bg-gradient-to-b from-gray-50 to-white border-t-2 border-gray-100 px-6 py-20 bg-white text-center | md:px-32"
        ></section>
      </main>
    </Front>
  );
}
