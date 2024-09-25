import Front from "../Layouts/Front";
import { Head } from "@inertiajs/react";
import PageTitle from "../Components/Front/PageTitle";

export default function () {
  return (
    <Front>
      <Head title="Returns & Refunds" />
      <PageTitle title="Returns & Refunds" />

      <main>
        <section id="returns-and-refunds" class="px-6 py-20 | md:px-32">
          <div class="container text-justify">
            <h4 class="text-2xl font-bold">Services</h4>
            <ol class="list-decimal list-inside">
              <li>
                <strong>Service-Based Solutions</strong>
                <ul class="list-disc list-inside">
                  <li>
                    <strong>Non-Refundable Services:</strong> Due to the nature
                    of the work involved, once services have been delivered or
                    commenced, payments for these services are non-refundable.
                    This includes project-based work, hourly work, or ongoing
                    service agreements.
                  </li>
                  <li>
                    <strong>Service Dissatisfaction:</strong> If you are
                    unsatisfied with the quality of the service provided, please
                    contact us within 7 days of service completion. We will work
                    with you to resolve any issues through revisions or service
                    improvements. Refunds may be granted on a case-by-case basis
                    at our discretion if it's determined that the services did
                    not meet the agreed-upon scope of work.
                  </li>
                </ul>
              </li>
              <li>
                <strong>Service Cancellations</strong>
                <p>
                  If a client wishes to cancel a service that has not yet
                  commenced, a full refund may be issued. For services that are
                  partially completed, the client will be billed for the work
                  done up to the cancellation point, and any remaining balance
                  may be refunded.
                </p>
              </li>
            </ol>

            <h4 class="text-2xl font-bold mt-8">Digital Products</h4>
            <ol class="list-decimal list-inside">
              <li>
                <strong>Non-Tangible Digital Products</strong>
                <p>
                  Due to the nature of digital products (e.g., software,
                  licenses, digital templates), refunds cannot be offered once
                  the product has been downloaded or accessed, except in the
                  following circumstances:
                </p>
                <ul class="list-disc list-inside">
                  <li>
                    <strong>Defective Products:</strong> If a digital product is
                    proven to be defective or not functioning as intended, we
                    will offer a replacement or repair. If the defect cannot be
                    resolved, a full refund may be issued.
                  </li>
                  <li>
                    <strong>Incorrect Purchase:</strong> If a customer
                    mistakenly purchases the wrong digital product, they must
                    contact us within 24 hours of the purchase. If the product
                    has not been downloaded or accessed, a refund or product
                    exchange may be processed.
                  </li>
                </ul>
              </li>
              <li>
                <strong>Licenses and Subscriptions</strong>
                <p>
                  Digital products sold as part of a subscription service or
                  with a recurring license fee are subject to the terms of the
                  license agreement. Refunds for unused subscription periods may
                  be issued upon cancellation within the first 14 days of the
                  subscription purchase. No refunds will be issued for partial
                  months or after 14 days have passed.
                </p>
              </li>
            </ol>

            <h4 class="text-2xl font-bold mt-8">Exclusions</h4>
            <p>
              Refunds and returns will not be offered under the following
              circumstances:
            </p>
            <ul class="list-disc list-inside">
              <li>
                <strong>
                  Failure to provide required information or assets:
                </strong>{" "}
                If the service cannot be completed due to the client failing to
                provide necessary information, assets, or cooperation, no refund
                will be issued.
              </li>
              <li>
                <strong>Customer Change of Mind:</strong> Refunds are not
                offered if a customer changes their mind after the purchase of a
                digital product or service has been initiated.
              </li>
              <li>
                <strong>Compatibility Issues:</strong> It is the customer's
                responsibility to ensure the compatibility of digital products
                with their systems before purchasing.
              </li>
            </ul>

            <h4 class="text-2xl font-bold mt-8">
              How to Request a Refund or Return
            </h4>
            <p>
              To request a refund or report an issue with a product or service:
            </p>
            <ul class="list-disc list-inside">
              <li>
                Email us at{" "}
                <a href="mailto:info@codefuel.in">info@codefuel.in</a> with your
                order details, a description of the issue, and any relevant
                documentation or screenshots.
              </li>
              <li>
                Our team will review your request within 5 business days and
                will notify you of the outcome. If approved, refunds will be
                processed within 10 business days via the original payment
                method.
              </li>
            </ul>
          </div>
        </section>
      </main>
    </Front>
  );
}
