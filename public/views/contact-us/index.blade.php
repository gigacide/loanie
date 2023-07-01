<!DOCTYPE html>
<html lang=en-gb>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.1.4/dist/tailwind.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Submit form data to server
            $("#contactForm").submit(function(event) {
                event.preventDefault();
                var name = $("#name").val();
                var email = $("#email").val();
                var message = $("#message").val();

                // Perform form validation here if needed

                // Send form data to server
                $.ajax({
                    type: "POST",
                    url: "submit_form.php", // Replace with your server-side script URL
                    data: {
                        name: name,
                        email: email,
                        message: message
                    },
                    success: function(response) {
                        // Handle success response here
                        console.log(response);
                        alert("Form submitted successfully!");
                        // Clear form fields
                        $("#name").val("");
                        $("#email").val("");
                        $("#message").val("");
                    },
                    error: function(xhr, status, error) {
                        // Handle error response here
                        console.error(error);
                        alert("Failed to submit form. Please try again.");
                    }
                });
            });
        });
    </script>

    <title>Welcome to Loanie Loan, Your choice to get FREE lender quotes in minutes</title>
    <meta name=description
          content="Loanie is a credit Broker. Our FREE quoting service compares more than 50 lenders within a matter of minutes. Warning: Late repayment can cause you serious money problems. For help go to moneyhelper.org.uk">
    <meta charset=utf-8>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href=favicon.png type=image/x-icon>
    <link href="./bundles/css334b.css" rel=stylesheet>
<body>
<div id=wrapper>
    <div id=header>
        <div class=h-top>
            <div class=payment-warning><span> <strong>Warning</strong>: Late repayment can cause you serious money problems. </span>
            </div>
            <div class=fraud-warning><strong>Avoid Scams</strong> Recognize the signs of online scams <a
                    href=#>See More</a></div>
        </div>
        <div class=header>
            <div class=container>
                <div class=row>
                    <div class="col col-xs-5 col-sm-6 header-left"><a
                            href="{{route('home-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>'', 'aff_sub'=>$affiliate['aff_sub']])}}"
                            class=logo>
                            <img
                                src="wp-content/uploads/logo_payday_uk_trap.png"
                                class="attachment-full size-full" alt="Loanie logo"
                                style="height:80px"
                            />
                        </a></div>
                    <div class="section-dark gradient-orange main-menu">
                        <div class=nav>
                            <ul>
                                <li >
                                    <a href="{{route('home-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>'', 'aff_sub'=>$affiliate['aff_sub']])}}">Home</a>
                                <li>
                                <li ><a
                                        href="{{route('guides',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">How
                                        it works</a>
                                <li >
                                    <a href="{{route('guides',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">FAQs</a>
                                <li class=active>
                                    <a href="{{route('contact-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">Contact
                                        us</a>
                                <li>
                                    <a href="{{route('complaints',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">Complaints</a>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-xs-7 col-sm-6 header-right"><a href="#"
                                                                       class="btn btn-square btn-border btn-menu"> <span
                                class="bar bar-1"></span><span class="bar bar-2"></span> </a> <a
                            href="{{route('apply-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}"
                            class="btn btn-default">Get
                            a loan quote</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-grey" style="padding-top: 100px">
        <div class=container>
        </div>
        <div id=maincontent class=page-main>
            <div class="section section-icons section-icons-content">
                <div class=container>
                    <div class=row>
                        <div class="col col-sm-5 col-md-5 col-lg-4">
                            <div class="title text-left"><p class=pretitle>Quick Easy Loans
                                <h3>Contact Us</h3>
                                <p class="lead subtitle">Loanie is a credit broker, not a direct lender. Our FREE quoting
                                    service compares more than 50 lenders within a matter of minutes
                                <p class="lead subtitle">We do the hard work for you searching lenders in real time. We then
                                    return a match to you within minutes in the form of a quote</div>
                            <a href="{{route('apply-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}"
                               class="btn btn-default">Get a loan quote</a> <a
                                href="{{route('apply-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}"
                                class="btn btn-primary">Am I eligible?</a></div>
                        <div class="col col-sm-7 col-md-7 col-lg-offset-1">
                                <body class="bg-gray-100">
                                <div class="max-w-md mx-auto pt-10">
                                    <h1 class="text-3xl font-bold mb-6 text-center">Contact Us</h1>
                                    <form id="contactForm" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                        <div class="mb-4">
                                            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                                            <input type="text" id="name" name="name" required
                                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        </div>
                                        <div class="mb-4">
                                            <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                                            <input type="email" id="email" name="email" required
                                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        </div>
                                        <div class="mb-4">
                                            <label for="message" class="block text-gray-700 font-bold mb-2">Message:</label>
                                            <textarea id="message" name="message" rows="4" cols="50" required
                                                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                                        </div>
                                        <div class="flex items-center justify-center">
                                            <input type="submit" value="Submit"
                                                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer">
                                        </div>
                                    </form>
                                </div>
                                </body>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <div class="section section-dark gradient-purple section-quote wave-top wave-bottom lazycssimg">
                <div class=container>
                    <div class=row>
                        <div class="col col-md-12">
                            <div class=title><h2>Get an instant quote</h2>
                                <p class="lead subtitle">Borrow from $100 - $5,000</div>
                            <span style=text-align:center><div class=quote-form><form method=get
                                                                                      action="{{route('apply-us')}}"><div
                                            class=loan-details><div class=loan-amount><div
                                                    class=form-group><label>Loan amount</label><div class=loan-amount-input><span
                                                            class="currency-symbol currency-shim">&dollar;</span><input
                                                            id=loanamount-shim name=la
                                                            type=tel
                                                            class="form-control loan-amount-input"
                                                            value=1500> <a href=#
                                                                           class="btn btn-primary amount-change amount-minus"><i
                                                                class="far fa-minus"></i></a> <a href=#
                                                                                                 class="btn btn-primary amount-change amount-plus"><i
                                                                class="far fa-plus"></i></a></div></div></div><div
                                                class=loan-months><div
                                                    class=form-group><label>Months</label><div
                                                        class="form-choice loan-months-input"><div
                                                            class=field-choice><input id=field-choice-0-3 name=term value=3
                                                                                      type=radio> <label
                                                                for=field-choice-0-3
                                                                class="form-control transition">3</label></div><div
                                                            class=field-choice><input id=field-choice-0-6 name=term value=6
                                                                                      type=radio> <label
                                                                for=field-choice-0-6
                                                                class="form-control transition">6</label></div><div
                                                            class=field-choice><input id=field-choice-0-12 name=term
                                                                                      value=12 type=radio> <label
                                                                for=field-choice-0-12
                                                                class="form-control transition">12</label></div><div
                                                            class=field-choice><input id=field-choice-0-18 name=term
                                                                                      value=18 type=radio> <label
                                                                for=field-choice-0-18
                                                                class="form-control transition">18</label></div><div
                                                            class=field-choice><input id=field-choice-0-24+ name=term
                                                                                      value=24 type=radio> <label
                                                                for=field-choice-0-24+
                                                                class="form-control transition">24+</label></div></div></div></div></div>
                                    <a href="{{route('apply-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">
                                <button class="btn btn-lg btn-block btn-default">Get a loan quote now
                                </button>
                            </a>

                                    <div class="box box-border" style="color: whitesmoke">

                                <p style="color:#FFFFFF !important"><span style=font-weight:700;>Loanie is a registered trading name Stag Finance Ltd who is a credit broker, not a lender</span>.
                                    Loanie is a loan matching service. This site will submit the information you
                                    provide to a panel of lenders. All applications will be subject to credit checks
                                    and affordability assessments. Loanie will not perform a credit check; lenders
                                    will complete a soft search when assessing your eligibility for a loan. If you
                                    accept a lender’s loan offer, they may perform a hard credit search to register
                                    the loan to your credit file</div>
                                </form></div></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-icons">
                <div class=container>
                    <div class=row>
                        <div class="col col-md-12">
                            <div class=title><p class=pretitle>Why Use Loanie?
                                <h3>It's a no brainer</h3>
                                <p class="lead subtitle">No fees, no obligation, no worries</div>
                            <div id=benefit-icons class="row row-xs-full row-equal">
                                <div class="col col-xs-6 col-sm-4 col-lg-2">
                                    <div class="box box-icon">
                                        <div class=box-image><img class=lazy data-src=/Content/Images/icon-e-sign.png></div>
                                        <div class=box-content><h5>No Fees</h5>
                                            <p>Borrow up to $5,000 and pay no fees</div>
                                    </div>
                                </div>
                                <div class="col col-xs-6 col-sm-4 col-lg-2">
                                    <div class="box box-icon">
                                        <div class=box-image><img class=lazy data-src=/Content/Images/icon-paperwork.png>
                                        </div>
                                        <div class=box-content><h5>No Paperwork</h5>
                                            <p>Complete your application online in just a few moments</div>
                                    </div>
                                </div>
                                <div class="col col-xs-6 col-sm-4 col-lg-2">
                                    <div class="box box-icon">
                                        <div class=box-image><img class=lazy
                                                                  data-src=/Content/Images/icon-no-obligation.png></div>
                                        <div class=box-content><h5>No Obligation</h5>
                                            <p>Get a quote in just a few clicks with no obligation</div>
                                    </div>
                                </div>
                                <div class="col col-xs-6 col-sm-4 col-lg-2">
                                    <div class="box box-icon">
                                        <div class=box-image><img class=lazy data-src=/Content/Images/icon-bad-credit.png>
                                        </div>
                                        <div class=box-content><h5>All Credit Types</h5>
                                            <p>All credit types are considered</div>
                                    </div>
                                </div>
                                <div class="col col-xs-6 col-sm-4 col-lg-2">
                                    <div class="box box-icon">
                                        <div class=box-image><img class=lazy data-src=/Content/Images/icon-transfer.svg>
                                        </div>
                                        <div class=box-content><h5>Quick Transfer</h5>
                                            <p>Funds can be transferred direct to your bank quickly</div>
                                    </div>
                                </div>
                                <div class="col col-xs-6 col-sm-4 col-lg-2">
                                    <div class="box box-icon">
                                        <div class=box-image><img class=lazy data-src=/Content/Images/icon-months.png></div>
                                        <div class=box-content><h5>Flexible</h5>
                                            <p>Borrow for up to 36 months and repay with easy monthly repayments</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-lenders">
                <div class=container>
                    <div class=row>
                        <div class="col col-sm-5 col-md-5 col-md-push-7">
                            <div class="lender-logos mobile-lender-logos">
                                <div class=lender-logo><img class=lazy
                                                            data-src=/Content/Images/icon-months.png
                                    ></div>
                                <div class=lender-logo><img class=lazy data-src=/Content/Images/icon-fill-application.png>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-7 col-md-6 col-md-pull-5 col-lg-5">
                            <div class="title text-left"><p class=pretitle>Who We Work With
                                <h3>Trusted lenders you'll love</h3>
                                <div class="lender-logos mobile-lender-logos-2">
                                    <div class=lender-logo><img class=lazy
                                                                data-src=/Content/Images/LenderLogos/cash4unow_highres.png
                                                                style=width:100%;max-width:170px></div>
                                    <div class=lender-logo><img class=lazy data-src=/Content/Images/LenderLogos/dotdot.jpg>
                                    </div>
                                </div>
                                <p class="lead subtitle">We work with over 50 UK lenders, our aim is to find you the lender
                                    that is available to lend you what you need today. You're in safe hands</div>
                        </div>
                    </div>
                </div>
            </div>
            {{--        <div class="section section-testimonials" style=min-height:305px;padding:0></div>--}}
            <div class="section section-lenders">
                <div class=container>
                    <div class=row style=padding:15px><h3>Responsible Lending</h3>
                        <p><strong>Financial Difficulties</strong>
                        <p>Once you have received your loan funds, if for any reason you think you will struggle to meet any
                            of the arranged repayments, you must contact your lender directly as soon as you become aware.
                            Read your Loan Agreement and Terms and Conditions from your lender for further information
                        <p><strong>Implications of Non-Payment</strong>
                        <p>The implications of non-payment of your loan may include adverse details being added to your
                            credit report. This could adversely affect future attempts at securing credit or finance
                        <p><strong>Important Things to Remember</strong>
                        <ul>
                            <li>Don't borrow money if you know you will struggle to pay it back
                            <li>Don't ignore the situation, contact your lender early
                            {{--                        <li>For help go to moneyhelper.org.uk--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=footer class="section-dark gradient-orange footer">
        <div class="footer-top lazycssimg">
            <div class=container>
                <div class=row>
                    <div class="col col-sm-3 footer-top-left">
                        <div class=footer-logo>
                            <img
                                src="wp-content/uploads/loanie-logo-white.png"
                                class="attachment-full size-full" alt="Loanie logo"
                                style="height:75px; width:250px"
                            />
                        </div>
                    </div>
                    <div class="col col-sm-9 footer-top-right"><a
                            href="{{route('apply-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}"
                            class="btn btn-default">Get a loan
                            quote</a> <a
                            href="{{route('apply-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}"
                            class="btn btn-primary">Am I eligible</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=footer-main>
            <div class=container>
                <div class=row>
                    <div class="col col-sm-12">
                        <div class="footer-links divider-line">
                            <ul>
                                <li>
                                    <a href="{{route('home-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>'', 'aff_sub'=>$affiliate['aff_sub']])}}">Home</a>
                                <li>
                                    <a href="{{route('apply-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">Get
                                        a loan quote</a>
                                <li class=active><a
                                        href="{{route('guides',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">How
                                        it works</a>
                                <li>
                                    <a href="{{route('faqs',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">FAQs</a>
                                <li>
                                    <a href="{{route('apply-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">Eligibility</a>
                                <li><a href="http://uping.uk">Affiliates</a>
                                <li>
                                    <a href="{{route('contact-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">Contact
                                        us</a>
                                <li>
                                    <a href="{{route('complaints',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">Complaints</a>
                            </ul>
                        </div>
                        <div class="footer-content divider-line"><p>&copy; Stag Finance Ltd. Loanie is a trading style
                                of Stag Finance Ltd. We are a credit
                                broker and not a lender and offer credit facilities from
                                a panel of lenders
                            <p>&copy; Stag Finance Ltd | Company Reg: xxxxx | Data Protection: xxxxxxx |
                            <p>Registered Address: 1st Floor | 71-75 Shelton Street | London | WC2 9QJ
                            <p>Consumer Advisory: Loanie is a loan matching service. This site will submit the
                                information you provide to a direct lender. Upon loan approval, a direct lender may
                                require further information from you which will be collected after we transfer you to
                                their website or they may contact you via phone or email
                            <p>All applications will be subject to credit checks and affordability assessments in line
                                with responsible lending. Loan terms, conditions and policies vary by lender and
                                applicant qualifications. Late or missed loan payments may be subject to increased fees
                                and interest rates. Not all lending partners offer up to $5,000 loans, and not all
                                applicants will be approved for their requested loan amounts. Loan repayment periods
                                vary by lender also. Lenders may use collection services for non-payment of loans
                            <p>Not all borrowers will qualify for a loan, the operator of this website does not engage
                                in any direct consumer lending, we simply provide a FREE loan matching service to the
                                public. To operate this service we receive a commission from the lender we refer you to
                            <p>Auto Decisioning allows lenders to make a decision on your loan application without the
                                need for human interaction, for more information please contact your lender or see their
                                privacy policy
                            <p>* As part of the process of applying you are agreeing that lenders will carry out a soft
                                search on your credit file to assess your eligibility for the product you are applying
                                for. Soft searches are only visible to you and do not affect your credit rating. Should
                                you elect to move forward with a loan product, the lender may then convert the soft
                                search into a hard search which will be visible to other credit providers and yourself.
                                A hard search can negatively impact your credit score</div>
                        <div class=copyright>
                            <div class=row>
                                <div class="col col-sm-7 col-md-6 copyright-center"><p><a
                                            href="{{route('privacy',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">Privacy
                                            Policy</a> <a
                                            href="{{route('terms',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">Terms
                                            & Conditions</a> <a
                                            href="{{route('marketing_opt_out',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">SMS
                                            Opt Out</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = Array.prototype.forEach;
    }</script>
<script>!function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '');
    fbq('track', 'PageView');</script>
<noscript><img height=1 width=1 src="https://www.facebook.com/tr?id=&amp;ev=PageView&amp;noscript=1">
</noscript>
<script defer src="https://www.googletagmanager.com/gtag/js?id=G-"></script>
<script>window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'G-', {'allow_enhanced_conversions': true});</script>
<script>(function (w, d, t, r, u) {
        var f, n, i;
        w[u] = w[u] || [], f = function () {
            var o = {ti: " "};
            o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
        }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function () {
            var s = this.readyState;
            s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
        }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
    })
    (window, document, "script", "http://bat.bing.com/bat.js", "uetq");</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-"></script>
<script>window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'AW-');</script>
{{--<script src="../bundles/scripts_us"></script>--}}
<script src="../bundles/scripts_us.js"></script>
