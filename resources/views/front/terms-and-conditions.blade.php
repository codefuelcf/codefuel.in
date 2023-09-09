@extends('front.layout', ['title' => 'Terms and Conditions'])

@section('mainContent')
<x-front.breadcrumb description="Here are all our terms and conditions" />

<main>
    <section id="about-us" class="px-6 py-20 | md:px-32">
        <div class="text-justify">
            <ol class="list-decimal list-inside">
                <li><strong>Job Order/Contract: </strong>The client's approval for work to commence shall be deemed a contractual agreement between the client and Codefuel. The approval for the work can be through either an email confirming back the quote (with the quote document attached) or the quote document signed by the client.<br />
                    <b>Important:</b> Payment of the advance fee indicates that the client accepts these terms and conditions, and approves to commence the job/work.
                </li><br />
                <li><strong>One(1) Year Free Technical Support:</strong> Codefuel provides One(1) year free technical support for following kind of issues:
                    <ul>
                        <li>Logical Bugs/Calculation related errors/bugs</li><br />
                        <li>Server side scripting/programming errors/bugs</li><br />
                        <li>Connection errors/API Integration Errors</li><br />
                    </ul>
                    <p>Above support is not available if the errors/bugs arise due to any external entity. Examples:</p>
                    <ul>
                        <li>Server or software or application or extension downgrades or upgrades</li><br />
                        <li>Edits done by any external entity/person/professional in the code/scripts delivered by us.</li><br />
                        <li>Operating System or Browser Version Downgrades/Upgrades</li><br />
                        <li>Any other factor which is not directly related to any deficiency at the end of Codefuel</li><br />
                    </ul>
                </li><br />
                <li><strong>Photography and graphics:</strong> Codefuel may use stock photographs and images while creating the website. Images and graphics purchased from stock libraries or photographs taken by professional from Codefuel are not generally included in the quote and will be invoiced separately. Codefuel will keep the client updated about the stock images being used or professional photogtaphy conducted and the cost involved before raising the invoice.</li><br />
                <li><strong>Cross Browser compatibility: </strong>Codefuel makes every effort to design pages that work flawlessly on most popular current browsers i.e. IE11 and latest version of FireFox/Chrome released on the date of project agreement. We however cannot be held responsible for pages that do not display acceptably in new versions of browsers released after pages have been designed. <i>IE10 and older IE versions are outdated browsers however we still keep backword compatibility in mind to max possible level. We recommend using latest version of Chrome or Firefox instead of older versions of Microsoft Internet Explorer.</i></li><br />
                <li><strong>Search Engine Submission/Optimization:</strong> Following services are not part of the project unless agreed otherwise in writing:
                    <ul>
                        <li>Submission of websites on different search engines.</li><br />
                        <li>Securing good ranking of your website on different search engines.</li><br />
                        <li>Search Engine Optimization – On Page/Off Page.</li><br />
                    </ul>
                </li><br />
                <li><strong>Site maintenance:</strong> Unless otherwise agreed in writing, following services will be separately billed after the website has been made live:
                    <ul class="terms_listing">
                        <li>Content updates</li><br />
                        <li>Refinements and logical tweaks to the website, which were not planned/approved by client earlier.</li><br />
                        <li>Content presentation and design updates which were not planned/approved by client earlier.</li><br />
                    </ul>
                </li><br />
                <li><strong>Content:</strong> After Codefuel has delivered the website to client, client is solely responsible for the content/information/images posted on his website. If there is any error or omission by Codefuel team while uploading/posting the content/information/images on client's website, Codefuel will correct it if reported to Codefuel representatives.</li><br />
                <li><strong>Material: </strong>All material supplied by the client shall remain client's property. Codefuel rightfully believes that this material belongs to the client and that it does not breach any copyright laws. Under no circumstances shall Codefuel be held responsible for any claims, damages, and loss of profit or reputation caused to client due to the use of material provided by the client.</li><br />
                <li><strong>Domain names booked by Codefuel on behalf of client: </strong>Codefuel provides domain name consultancy if required. Domain names registered by Codefuel on the client's behalf are property of Codefuel until client has paid for the domain booked and any fee involved.Codefuel agrees to transfer such domains to the client or his/her agent when asked to do so provided that all accounts have been settled.<b>Note:</b> Domains booked and owned by client are not subject to this term. This term applies only to those domains which are booked by Codefuel upon the request of client.</li><br />
                <li><strong>Travel Time and Expenses:</strong> Travelling time to and from the client premises is not generally included in our estimate. If a visit/travel is required for meeting, the client will bear all the expenses or as agreed by both the parties.</li><br />
                <li><strong>3<sup>rd</sup> Party Add-ons/services/applications:</strong> All third party costs arising from the registration of a domain name/purchase of third party utilities/services shall be met by the Client and are payable to Codefuel before a formal application for registration is made. Examples of 3<sup>rd</sup> party fees are as under:
                    <ul class="terms_listing">
                        <li>Domain Names</li><br />
                        <li>Server Space Hosting Fees</li><br />
                        <li>SSL Certificates</li><br />
                        <li>Backup Services</li><br />
                        <li>3<sup>rd</sup> Party APIs, if any, required by ‘Client' to be integrated with the work ordered.</li><br />
                        <li>3<sup>rd</sup> Party Plugins/Scripts/Applications/Software/Widgets/Services, if any, required by ‘Client' to be integrated with the work ordered.</li><br />
                        <li>Payment Gateways Signup and Recurring Fees</li><br />
                        <li>SMS Gateways Integration and SMS Volume Fee</li><br />
                    </ul>
                </li><br />
                <li><strong>Examples of work:</strong> Unless negotiated otherwise, Codefuel retains the right to list/display the client name and logo with or without work performed (Design/Development/Online Promotion) for the Client in its respective portfolios and promotion materials. This over-rides all previous agreements and NDAs signed.</li><br />
                <li><strong>Quotations:</strong> The price quoted to the client is for the work agreed in the proposal document only. Should the client decide that changes are required after the project work has been initiated, then Codefuel will provide a separate quote for the additional work and may need to review the timescale for completing the project. Cost estimates and prices quoted are valid for maximum one month unless otherwise agreed.</li><br />
                <li><strong>Mode of Payment</strong>
                    <ul class="terms_listing">
                        <li>Clients Based Outside India: International Wire Transfers to company account.</li><br />
                        <li>Clients Based in India: NEFT, RTGS, Physical Cheques mailed to our office address or cash payment to authorized persons with payment receipt.</li><br />
                    </ul>
                </li><br />
                <li><strong>Payment Terms:</strong>
                    <ul class="terms_listing">
                        <li>Payment plan is agreed between the ‘Client' and Codefuel based on the milestones.</li><br />
                        <li>Payment shall be due within 14 days of the invoice date unless specifically mentioned in the Invoice.</li><br />
                        <li>Any material previously published may be removed if payment is not received. When this occurs, a minimum charge of 1500 INR will be charged to have the site restored.</li><br />
                        <li>Accounts that have not been settled within 14 days of the date shown on the invoice will incur a late payment charge of 500 INR or 5% of the Invoiced Amount (whichever is higher), for each week delayed.</li><br />
                        <li>In case of delay in payments beyond the due date, Codefuel reserves the right to stop the work being commenced and ‘Client' agrees to exempt Codefuel from meeting the timelines agreed.</li><br />
                    </ul>
                </li><br />
                <li><strong>Cancellation: Both the parties reserve the right to cancel the project at any stage.</strong>
                    <ul class="terms_listing">
                        <li>In case the project is cancelled by Client, the payments made for the project can be refunded to the client after deducting the upfront payment amount received for Initiation of the project and the other payments received against the milestones completed.</li><br />
                        <li>In case the project is cancelled by Codefuel, the payments made for the project can be refunded after deducting the payment amount for project milestones delivered to client. After the payments are settled between the two parties – Codefuel shall transfer to ‘Client' &#8211; all the documents, designs and scripts produced for the project.</li><br />
                    </ul>
                </li><br />
                <li><strong>Delayed Response From Client Side:</strong> Unreasonable delays from client side in providing the required feedback/information/data to finish the project shall exempt Codefuel from meeting the timelines mentioned in the quote. In case client does not provide required details/data/information within 15 working days, client agrees that the payments made towards the project will be forfeited and retained by Codefuel as full and final settlement against the work completed till date. Codefuel shall not be liable to deliver any files to client if client is not traceable or not responsive for 15 working days.</li><br />
                <li><strong>Escalation:</strong> Codefuel ensures you get right assistance to resolve issues in a timely manner. If your concerns are not entertained to your satisfaction, you can escalate critical issues to higher level of management. You may follow the below-mentioned escalation matrix to avoid any delay or discomfort in the event of dissatisfaction.
                    <ul class="lower-alpha">
                        <li><strong>First Level Escalation:</strong> In case of delay in project timeline or unsatisfactory response from your associated Project Manager/Business Analyst, You may escalate your case to Chief Technology Officer or Project Manager and expect a response within next 2 working days.</li><br />
                        <li><strong>Final Escalation:</strong> If you don't receive a satisfactory solution from any of the team members following the first level of escalation, or haven&#8217;t received a reply within 5 business days after submitting your Feedback/Query/Complaint, you may escalate your case to our Chief Executive Officer or Chief Operating Officer. Rest assured that immediate action will be taken.</li><br />
                    </ul>
                </li><br />
                <li><strong>Time Estimates:</strong> Client agrees that stipulated timelines cannot be met if the project scope is changed by client once the project scope document is finalized. Client agrees not to change the requirements without extending the original agreed timelines by minimum 1 week against each change request.</li><br />
                <li><strong>Share in profits from business or sale of business: </strong>After client makes the agreed payment for the project, Codefuel will not claim share in client's profits from business or from sale of business to some other company, unless negotiated otherwise.</li><br />
                <li><strong>Copyright/Ownership Rights:</strong> Codefuel will retain the copyright of any material, including design, artwork and the source code, created for the client by Codefuel. Codefuel reserves the right to retain the copyright on all material created by Codefuel unless otherwise agreed between the two parties in writing. As per the agreed terms client owns rights on following items:
                    <ul class="terms_listing">
                        <li>Logo/Graphics/Pictures/Images supplied by client – Yes</li><br />
                        <li>Website Interface/PSD/Creatives/Designs – Yes, if client has ordered custom design with Exclusive Rights.</li><br />
                        <li>Programming Files/Source Code – Yes, if the Client has ordered the project with Exclusive Rights. Client does not own the copyright/Intellectual property rights for projects being done on Single Domain License basis.</li><br />
                        <li>If the project is being done on Single Domain License basis, Client owns the rights to use the system only on designated domains and Client should take reasonable care of the system files to restrict un-authorized access of the system scripts/source code delivered.</li><br />
                    </ul>
                </li><br />
                <li><strong>Ownership of Code and Intellectual Property Rights:</strong> Unless otherwise agreed, Codefuel is the owner of the source code and the intellectual property rights and reserves the right to reuse the code for other projects.</li><br />
                <li><strong>Single Domain License: </strong>Unless otherwise agreed, client agrees to setup the scripts delivered only on one domain, one sub-domain (wip.yourdomain.com) and localhost. However if client wish to run same website on different domain/sub-domain, then client has to purchase separate license for each domain/sub-domain.No license would be required for Add-on Domains that will point to the main domain where this system will be implemented. All add-on domains will be forwarded to the main domain from the hosting server and no additional license would be required for these domains.For every new domain or sub-domain , client has to buy a separate license.</li><br />
                <li><strong>License Validity Period:</strong> Limited period license is issued initially. After 6 months from the date of full payment, life time license is issued. Feel Free to contact Codefuel Support Team, in case your license has expired and payment has been made in full, such issues will be resolved on highest priority.</li><br />
                <li><strong>No recurring costs of license:</strong> There is no renewal/recurring license fee. However, if client wishes to run same website on different domain or sub domain, then client has to purchase separate license for each domain or sub domain.</li><br />
                <li><strong>Use of encrypted files:</strong> Unless otherwise agreed, Codefuel can use own framework (code library in encrypted format) for web applications development for making source code of our intellectual property/scripts secure from other programmers; faster turnaround time; and bug free application development. Client will be provided with detailed documentation for using framework (code library functions). With the help of documentation provided, other programmers can modify the website functionality. Codefuel framework is collection of functions related to Database Manipulation, Images/Files Management, Paging, and Form Builder etc. which looks like PHP/ASP/JSP Functions but have different syntax than default PHP/ASP/JSP functions. Other willing and efficient PHP/ASP/JSP programmers can learn and practice these functions/framework within 5-7 days.<br /><strong>Note :</strong> In no event, Codefuel shall be liable to the client or any third party for any damages, including any lost profits, lost savings or other incidental, consequential or special damages arising out of the operation of or inability to operate these Web pages or website, even if Codefuel has been advised of the possibility of such damages. Despite the best efforts of Codefuel, errors in web page information may occur. At no time will Codefuel be held responsible for accidentally including erroneous information, extending beyond correcting the error.Should Codefuel waive any of these terms on an individual basis, this shall not affect the validity of remaining clauses or commit Codefuel to waive the same clause on any other occasion.By agreeing to these terms and conditions, your statutory rights are not affected.Codefuel reserves the right to change or modify any of these terms or conditions at any time, but agreements signed prior to the updates in this agreement remains unaffected. Please feel free to contact us for more info/clarification about any of the terms and conditions mentioned above.</li><br />
            </ol>
        </div>
    </section>
</main>
@endsection