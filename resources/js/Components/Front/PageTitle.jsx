export default function ({ title }) {
  return (
    <section id="page-title" className="bg-primary text-white py-10">
      <div className="container">
        <h1 className="text-4xl font-bold -rotate-1 underline decoration-black decoration-4 underline-offset-4 lg:text-6xl">
          {title}
        </h1>
      </div>
    </section>
  );
}
