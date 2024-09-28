import { Head } from "@inertiajs/react";

export default function ({
  url = null,
  title = null,
  description = null,
  featuredImage = null,
}) {
  return (
    <>
      <Head>
        <meta
          name="keywords"
          content="Websites, Web Applications, Apps, Development, Designing"
        />
      </Head>

      {url && (
        <Head>
          <meta name="url" content={url} />
          <meta name="og:url" content={url} />
          <meta name="twitter:url" content={url} />
        </Head>
      )}

      {title && (
        <Head>
          <meta name="title" content={title} />
          <meta name="og:title" content={title} />
          <meta name="twitter:title" content={title} />
        </Head>
      )}

      {description && (
        <Head>
          <meta name="description" content={description} />
          <meta name="og:description" content={description} />
          <meta name="twitter:description" content={description} />
        </Head>
      )}

      {featuredImage && (
        <Head>
          <meta name="image" content={featuredImage} />
          <meta name="og:image" content={featuredImage} />
          <meta name="twitter:image" content={featuredImage} />
        </Head>
      )}
    </>
  );
}
