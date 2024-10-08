import Front from "../Layouts/Front";
import { Head, Link } from "@inertiajs/react";
import PageTitle from "../Components/Front/PageTitle";

export default function () {
  return (
    <Front>
      <Head title="Privacy Policy" />
      <PageTitle title="Privacy Policy" />

      <main>
        <section id="privacy-policy" className="container py-20 text-justify">
          <h3 className="text-2xl font-bold">
            What information do we collect?
          </h3>
          <p>
            We collect information from you when you fill out a form. When
            ordering or registering on our site, as appropriate, you may be
            asked to enter your: name, e-mail address, mailing address, phone
            number or credit card information. You may, however, visit our site
            anonymously.
          </p>
          <h3 className="text-2xl font-bold mt-8">
            What do we use your information for?
          </h3>
          <p>
            Any of the information we collect from you may be used in one of the
            following ways:
          </p>
          <ul className="list-disc list-inside">
            {[
              "To personalize your experience",
              "To improve our website",
              "To improve customer service",
              "To process transactions",
              "To administer a contest, promotion, survey or other site feature",
              "To send periodic emails",
            ].map((el, index) => (
              <li key={index}>{el}</li>
            ))}
          </ul>

          <h3 className="text-2xl font-bold mt-8">
            How do we protect your information?
          </h3>
          <p>
            We implement a variety of security measures to maintain the safety
            of your personal information when you place an order or enter,
            submit, or access your personal information.
          </p>
          <h3 className="text-2xl font-bold mt-8">Do we use cookies?</h3>
          <p>
            Yes (Cookies are small files that a site or its service provider
            transfers to your computers hard drive through your Web browser (if
            you allow) that enables the sites or service providers systems to
            recognize your browser and capture and remember certain information
            We use cookies to understand and save your preferences for future
            visits and compile aggregate data about site traffic and site
            interaction so that we can offer better site experiences and tools
            in the future. We may contract with third-party service providers to
            assist us in better understanding our site visitors. These service
            providers are not permitted to use the information collected on our
            behalf except to help us conduct and improve our business.
          </p>
          <h3 className="text-2xl font-bold mt-8">
            Do we disclose any information to outside parties?
          </h3>
          <p>
            We do not sell, trade, or otherwise transfer to outside parties your
            personally identifiable information. This does not include trusted
            third parties who assist us in operating our website, conducting our
            business, or servicing you, so long as those parties agree to keep
            this information confidential. We may also release your information
            when we believe release is appropriate to comply with the law,
            enforce our site policies, or protect ours or others rights,
            property, or safety. However, non-personally identifiable visitor
            information may be provided to other parties for marketing,
            advertising, or other uses.
          </p>
          <h3 className="text-2xl font-bold mt-8">Third party links</h3>
          <p>
            Occasionally, at our discretion, we may include or offer third party
            products or services on our website. These third party sites have
            separate and independent privacy policies. We therefore have no
            responsibility or liability for the content and activities of these
            linked sites. Nonetheless, we seek to protect the integrity of our
            site and welcome any feedback about these sites.
          </p>
          <h3 className="text-2xl font-bold mt-8">
            Online Privacy Protection Act Compliance
          </h3>
          <p>
            Because we value your privacy we have taken the necessary
            precautions to be in compliance with the Online Privacy Protection
            Act. We therefore will not distribute your personal information to
            outside parties without your consent.
          </p>
          <h3 className="text-2xl font-bold mt-8">
            Children Online Privacy Protection Act Compliance
          </h3>
          <p>
            We are in compliance with the requirements of COPPA (Children Online
            Privacy Protection Act), we do not collect any information from
            anyone under 13 years of age. Our website, products and services are
            all directed to people who are at least 13 years old or older.
          </p>
          <h3 className="text-2xl font-bold mt-8">
            Online Privacy Policy Only
          </h3>
          <p>
            This online privacy policy applies only to information collected
            through our website and not to information collected offline.
          </p>
          <h3 className="text-2xl font-bold mt-8">Terms and Conditions</h3>
          <p>
            Please also visit our{" "}
            <a href="/terms-and-conditions">Terms and Conditions</a> section
            establishing the use, disclaimers, and limitations of liability
            governing the use of our website at{" "}
            <a href="https://codefuel.in">https://www.codefuel.in</a>
          </p>
          <h3 className="text-2xl font-bold mt-8">Your Consent</h3>
          <p>
            By using our site, products and services, you consent to our online
            privacy policy.
          </p>
          <h3 className="text-2xl font-bold mt-8">
            Changes to our Privacy Policy
          </h3>
          <p>
            If we decide to change our privacy policy, we will post those
            changes on this page.
          </p>
          <h3 className="text-2xl font-bold mt-8">Contacting Us</h3>
          <p>
            If there are any questions regarding this privacy policy you may
            contact us using the contact form or our contact details mentioned
            on our <Link href={route('front.contact')}>contact page</Link>.
          </p>
        </section>
      </main>
    </Front>
  );
}
