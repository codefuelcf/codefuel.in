import Front from "../Layouts/Front";

export default function () {
  return (
    <Front>
      <section id="page-title" className="bg-primary text-white py-10">
        <div className="container">
          <h1 className="text-4xl font-bold -rotate-1 underline decoration-black decoration-4 underline-offset-4 lg:text-6xl">
            Contact
          </h1>
        </div>
      </section>

      <main>
        <section id="contact" className="bg-grid py-20">
          <div className="container !max-w-screen-md flex flex-col gap-8">
            <div>
              <h1 className="text-5xl capitalize font-bold mb-4 lg:text-6xl">
                let's make something. together.
              </h1>
              <h2 className="text-xl text-black/70">
                It all starts with a (hopefully) pleasant conversation. Let us
                know a little about your business and what you're hoping to
                achieve so that we can see if we're a good fit for your goals.
              </h2>
            </div>

            <h2>
              Email <a href="mailto:hello@codefuel.in">hello@codefuel.in</a> or
              fill out the form below.
            </h2>

            <form className="flex flex-col gap-4">
              <div className="flex flex-col gap-2">
                <label htmlFor="name">Name</label>
                <input
                  className="w-full"
                  placeholder="Name"
                  type="text"
                  name="name"
                  id="name"
                />
              </div>
              <div className="flex flex-col gap-2">
                <label htmlFor="email">Email</label>
                <input
                  className="w-full"
                  placeholder="Email"
                  type="email"
                  name="email"
                  id="email"
                />
              </div>
              <div className="flex flex-col gap-2">
                <label htmlFor="message">Message</label>
                <textarea
                  className="w-full"
                  placeholder="Name"
                  type="text"
                  name="message"
                  id="message"
                  rows={10}
                ></textarea>
              </div>
              <div>
                <button className="bg-primary px-6 py-2 inline text-white">
                  Get In Touch
                </button>
              </div>
            </form>
          </div>
        </section>
      </main>
    </Front>
  );
}
