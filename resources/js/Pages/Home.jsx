import Front from "../Layouts/Front";

export default function () {
  return (
    <Front>
      <main>
        <section id="masthead" className="bg-grid py-20">
          <div className="container flex flex-col gap-12">
            <div id="masthead-title">
              <h1 className="text-center text-8xl font-bold -rotate-1">
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

        <section id="testimonials"></section>

        <section
          id="clients"
          className="bg-gradient-to-b from-gray-50 to-white border-t-2 border-gray-100 px-6 py-20 bg-white text-center | md:px-32"
        ></section>
      </main>
    </Front>
  );
}
