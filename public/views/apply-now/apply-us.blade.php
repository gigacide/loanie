<!DOCTYPE html>
<html lang="en-gb">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Start your application to access qualified lender quotes</title>

    <meta name="description" />
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link href="../bundles/css334b.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>



</head>
<body>
    <div id="wrapper">
        <div id="header">
            <div class="h-top">
                <div class="payment-warning">
                    <span>
                        <strong>Warning</strong>: Late repayment can cause you serious money problems. For help go to <a href="https://www.moneyhelper.org.uk/en" rel="nofollow" target="_blank">moneyhelper.org.uk</a>
                    </span>
                </div>
                <div class="fraud-warning">
                    <strong>Avoid Scams</strong> Recognize the signs of online scams <a href="{{route('terms')}}">See More</a>
                </div>
            </div>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-5 col-sm-6 header-left">
                            <a href="{{route('home-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>'', 'aff_sub'=>$affiliate['aff_sub']])}}" class="logo">
                                <span class=""><img width="304" height="170"
                                style="height:80px"
                                                    src="wp-content/uploads/logo_payday_uk_trap.png"
                                                    class="attachment-full size-full" alt="Loanie logo"
                                                    srcset="wp-content/uploads/logo_payday_uk_trap.png 304w, wp-content/uploads/logo_payday_uk_white.png 300w"
                                                    sizes="(max-width: 304px) 100vw, 304px"/></span>  </a>
                        </div>

                        <div class="section-dark gradient-orange main-menu">
                            <div class=nav>
                                <ul>
                                    <li >
                                        <a href="{{route('home-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>'', 'aff_sub'=>$affiliate['aff_sub']])}}">Home</a>
                                    <li>
                                    <li class=active><a
                                            href="{{route('guides',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">How
                                            it works</a>
                                    <li>
                                        <a href="{{route('guides',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">FAQs</a>
                                    <li>
                                        <a href="{{route('contact-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">Contact
                                            us</a>
                                    <li>
                                        <a href="{{route('complaints',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}">Complaints</a>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-xs-7 col-sm-6 header-right">
                          <a href="#" class="btn btn-square btn-border btn-menu">
                                <span class="bar bar-1"></span><span class="bar bar-2"></span>
                            </a>
                            <a href="{{route('apply-us',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}" class="btn btn-default">Get a loan quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form class="test" id="uPingForm" name="uPingForm" novalidate>
            @csrf


            <input type="hidden" id="affiliate_id" name="affiliate_id" value="{{$affiliate['affiliate_id']}}">
            <input type="hidden" id="offer_id" name="offer_id" value="{{$affiliate['offer_id']}}">
            <input type="hidden" id="transaction_id" name="transaction_id" value="{{$affiliate['transaction_id']}}">
            <input type="hidden" id="aff_sub" name="aff_sub" value="{{$affiliate['aff_sub'] ?? 'null'}}">
            <input type="hidden" id="aff_sub2" name="aff_sub2" value="{{$affiliate['aff_sub2'] ?? 'null'}}">
            <input type="hidden" id="aff_sub3" name="aff_sub3" value="{{$affiliate['aff_sub3'] ?? 'null'}}">
            <input type="hidden" id="aff_sub4" name="aff_sub4" value="{{$affiliate['aff_sub4'] ?? 'null'}}">
            <input type="hidden" id="aff_sub5" name="aff_sub5" value="{{$affiliate['aff_sub5'] ?? 'null'}}">

            <div class="page-main" id="maincontent">
                <div class="section section-grey section-form active">
                    <div class="container">
                        <div class="row">
                            <div class="col col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                                <div class="title">
                                    <h1>Loan quote</h1>
                                    <p class="lead">Average response time is 60 seconds</p>
                                </div>

                                <div class="hide_element" id="error-list">
                                    <ul id="inject-errors"></ul>
                                </div>

                                <div class="loan-details">
                                    <div class="loan-amount">
                                        <div class="form-group">
                                            <label>Loan amount</label>
                                            <div class="loan-amount-input">
                                                <span class="currency-symbol">&dollar;</span>
                                                <input class="form-control loan-amount-input"
                                                       id="loanAmount"
                                                       type="tel"
                                                       value="1500"/>
                                                <a class="btn btn-primary amount-change amount-minus" href="#"><i
                                                        class="far fa-minus"></i></a>
                                                <a class="btn btn-primary amount-change amount-plus" href="#"><i
                                                        class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="loan-months">
                                        <div class="form-group" id="radio_terms">

                                            <label>For how many months?</label>
                                            <div class="form-choice loan-months-input radio-class">
                                                <div class="field-choice">
                                                    <input id="term_radio3" name="term_radio" type="radio" value="3"/>
                                                    <label class="form-control transition" for="term_radio3">3</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="term_radio6" name="term_radio" type="radio" value="6"/>
                                                    <label class="form-control transition" for="term_radio6">6</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="term_radio9" name="term_radio" type="radio" value="12"/>
                                                    <label class="form-control transition" for="term_radio9">12</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="term_radio12" name="term_radio" type="radio" value="18"/>
                                                    <label class="form-control transition" for="term_radio12">18</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="term_radio24" name="term_radio" type="radio" value="24"/>
                                                    <label class="form-control transition" for="term_radio24">24+</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" id="loanPurposeRadio">
                                    <label>What is the purpose of the loan?</label>
                                    <div class="row row-xs-full row-equal row-form-icons radio-class radio-large loan-purpose">
                                        <div class="col col-xs-6 col-sm-4">
                                            <div class="form-box-icon">
                                                <input id="Subsistence" name="radio_purpose"
                                                       onclick="addLoanPurposeDescription(event)" type="radio" value="1">
                                                <label class="box box-icon box-link" for="Subsistence">
                                                    <div class="icon-image">
                                                        <img src="/Content/Images/icon-subsistence.svg"/>
                                                    </div>
                                                    <h6>Subsistence</h6>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col col-xs-6 col-sm-4">
                                            <div class="form-box-icon">
                                                <input id="pay_bills" name="radio_purpose"
                                                       onclick="addLoanPurposeDescription(event)" type="radio" value="6">
                                                <label class="box box-icon box-link" for="pay_bills">
                                                    <div class="icon-image">
                                                        <img src="/Content/Images/icon-pay-bills.svg"/>
                                                    </div>
                                                    <h6>Pay bills</h6>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col col-xs-6 col-sm-4">
                                            <div class="form-box-icon">
                                                <input id="home_improvements" name="radio_purpose"
                                                       onclick="addLoanPurposeDescription(event)" type="radio" value="9">
                                                <label class="box box-icon box-link" for="home_improvements">
                                                    <div class="icon-image">
                                                        <img src="/Content/Images/icon-improvements.svg"/>
                                                    </div>
                                                    <h6>Home improvements</h6>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col col-xs-6 col-sm-4">
                                            <div class="form-box-icon">
                                                <input id="short_term_cash" name="radio_purpose"
                                                       onclick="addLoanPurposeDescription(event)" type="radio" value="8">
                                                <label class="box box-icon box-link" for="short_term_cash">
                                                    <div class="icon-image">
                                                        <img src="/Content/Images/icon-short-term.svg"/>
                                                    </div>
                                                    <h6>Short term cash</h6>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col col-xs-6 col-sm-4">
                                            <div class="form-box-icon">
                                                <input id="pay_off_loan" name="radio_purpose"
                                                       onclick="addLoanPurposeDescription(event)" type="radio" value="7">
                                                <label class="box box-icon box-link" for="pay_off_loan">
                                                    <div class="icon-image">
                                                        <img src="/Content/Images/icon-pay-loans.svg"/>
                                                    </div>
                                                    <h6>Pay off loan</h6>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col col-xs-6 col-sm-4">
                                            <div class="form-box-icon">
                                                <input id="one_off_purchase" name="radio_purpose"
                                                       onclick="addLoanPurposeDescription(event)" type="radio" value="2">
                                                <label class="box box-icon box-link" for="one_off_purchase">
                                                    <div class="icon-image">
                                                        <img src="/Content/Images/icon-one-off.svg"/>
                                                    </div>
                                                    <h6>One off purchase</h6>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col col-xs-6 col-sm-4">
                                            <div class="form-box-icon">
                                                <input id="debt_consolidation" name="radio_purpose"
                                                       onclick="addLoanPurposeDescription(event)" type="radio" value="4">
                                                <label class="box box-icon box-link" for="debt_consolidation">
                                                    <div class="icon-image">
                                                        <img src="/Content/Images/icon-debt-consolidation.svg"/>
                                                    </div>
                                                    <h6>Debt consolidation</h6>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col col-xs-6 col-sm-4">
                                            <div class="form-box-icon">
                                                <input id="car_loan" name="radio_purpose" onclick="addLoanPurposeDescription(event)"
                                                       type="radio" value="5">
                                                <label class="box box-icon box-link" for="car_loan">
                                                    <div class="icon-image">
                                                        <img src="/Content/Images/icon-car-loan.svg"/>
                                                    </div>
                                                    <h6>Car loan</h6>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col col-xs-6 col-sm-4 no-validate">
                                            <div class="form-box-icon">
                                                <input id="other_loan_purpose" name="radio_purpose"
                                                       onclick="toggleOtherLoanPurpose()" type="radio" value="0">
                                                <label class="box box-icon box-link" for="other_loan_purpose">
                                                    <div class="icon-image">
                                                        <img src="/Content/Images/icon-short-term.svg"/>
                                                    </div>
                                                    <h6>Other</h6>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="messages"></div>
                                </div>

                                <div class="form-group hide_element" id="otherLoanPurposeFields">
                                    <label>Select Other Loan Purpose Here</label>
                                    <div class="field-choice">
                                        <select class="form-control" id="loanPurposeFromSelect"
                                                onchange="addLoanPurposeDescription(event)" style="text-transform: capitalize;">
                                            <option disabled selected value="">Select Other Loan Purpose</option>
                                            <option onclick="addLoanPurposeDescription(event)" value="10">Holidays/Days
                                                Out
                                            </option>
                                            <option onclick="addLoanPurposeDescription(event)" value="11">Household &amp;
                                                Personal Goods
                                            </option>
                                            <option onclick="addLoanPurposeDescription(event)" value="12">Presents/Gifts
                                            </option>
                                            <option onclick="addLoanPurposeDescription(event)" value="13">Household Bills
                                            </option>
                                            <option onclick="addLoanPurposeDescription(event)" value="14">Celebrations/Major
                                                Events
                                            </option>
                                            <option onclick="addLoanPurposeDescription(event)" value="15">
                                                School/Education/Training
                                            </option>
                                            <option onclick="addLoanPurposeDescription(event)" value="16">Home/Moving Home
                                            </option>
                                            <option onclick="addLoanPurposeDescription(event)" value="17">Pet Costs</option>
                                            <option onclick="addLoanPurposeDescription(event)" value="18">Entertainment
                                                &amp; Hobbies
                                            </option>
                                            <option onclick="addLoanPurposeDescription(event)" value="19">Gambling</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="loan_purpose_description">
                                    <p id="loanPurposeDescription" style="color: #000; text-transform: capitalize;"></p>
                                </div>
                                <button id="next1" class="btn btn-lg btn-block btn-default" onclick="nextPrev(1)" type="button">Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-progress mobile-show mobile-sticky">
                    Progress
                    <span class="form-progress">18%</span>
                </div>
                <div class="section section-grey section-form">
                    <div class="container">
                        <div class="row row-equal">

                            <div class="col col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

                                <div class="title">
                                    <h1>A bit about you</h1>
                                </div>

                                <div class="form-container">

                                    <div class="form-group" id="title_radios">
                                        <label>Title</label>
                                        <div class="form-choice radio-class">
                                            <div class="field-choice" id="title_1">
                                                <input id="title_mr" name="radio_titles" type="radio" value="1">
                                                <label class="form-control transition" for="title_mr">Mr</label>
                                            </div>
                                            <div class="field-choice" id="title_2">
                                                <input id="title_mrs" name="radio_titles" type="radio" value="2">
                                                <label class="form-control transition" for="title_mrs">Mrs</label>
                                            </div>
                                            <div class="field-choice" id="title_3" >
                                                <input id="title_ms" name="radio_titles" type="radio" value="3">
                                                <label class="form-control transition" for="title_ms">Ms</label>
                                            </div>
                                            <div class="field-choice" id="title_4">
                                                <input id="title_miss" name="radio_titles" type="radio" value="4">
                                                <label class="form-control transition" for="title_miss">Miss</label>
                                            </div>
                                        </div>
                                        <div class="message"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>First name</label>
                                        <input class="form-control" id="firstname" name="First_name" type="text" placeholder="John"/>
                                        <div class="messages"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input class="form-control" id="lastname" name="Last_name" type="text" placeholder="Doe "/>
                                        <div class="messages"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Date of Birth:</label>
                                        <input class="form-control" id="dob" name="Age" placeholder="MM/DD/YYYY" type="tel">
                                        <div class="messages"></div>
                                    </div>



                                    <div class="form-group" id="email-div">
                                        <label>Email: </label>
                                        <input class="form-control" id="email" name="Email" onkeyup="showEmailDomains()"
                                               type="email" placeholder="john@doe.com">
                                        <div class="email-buttons hide_element" id="email-button-block">
                                            <button class="email-domains btn btn-primary" onclick="addGmail()"
                                                    type="button">@gmail
                                            </button>
                                            <button class="email-domains btn btn-primary" onclick="addYahoo()"
                                                    type="button">@yahoo
                                            </button>
                                            <button class="email-domains btn btn-primary" onclick="addHotmail()"
                                                    type="button">@hotmail
                                            </button>
                                            <button class="email-domains btn btn-primary" onclick="addAol()" type="button">
                                                @aol
                                            </button>
                                        </div>
                                        <div class="messages"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Mobile phone</label>
                                        <input class="form-control" id="mobilephone" name="Mobile_phone"
                                               type="tel" placeholder="5551234567"/>
                                        <div id="mobilephoneError" class="messages"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Home phone (Optional)</label>
                                        <input class="form-control" id="homephone" name="Home_phone" type="tel" placeholder="5551234567"/>
                                        <div id="homephoneError" class="messages"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Work phone</label>
                                        <input class="form-control" id="workphone" name="Work_phone"
                                               type="tel" placeholder="5551234567"/>
                                        <div id="workphoneError" class="messages"></div>
                                    </div>




                                    <div class="hide_element" id="same-number-warning">
                                        <p>
                                            <span class="warning">You have matching work, home, or mobile numbers,</span><br/>
                                            this means lenders may treat you as self-employed. If you are self-employed
                                            great! If you're not, then you may decrease your chance for acceptance. We
                                            encourage you to provide a real work number which is separate from your mobile
                                            to gain the highest possible chance for acceptance
                                        </p>
                                    </div>

                                    <div class="form-group" id="marital_radio">
                                        <label>Marital status</label>
                                        <div class="form-choice radio-class radio-large">
                                            <div class="field-choice">
                                                <input id="marital_single" name="radio_marital" type="radio" value="1">
                                                <label class="form-control transition" for="marital_single">Single</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="marital_married" name="radio_marital" type="radio" value="2">
                                                <label class="form-control transition" for="marital_married">Married</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="marital_together" name="radio_marital" type="radio" value="3">
                                                <label class="form-control transition" for="marital_together">Living
                                                    Together</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="marital_seperated" name="radio_marital" type="radio" value="4">
                                                <label class="form-control transition"
                                                       for="marital_seperated">Seperated</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="marital_divorced" name="radio_marital" type="radio" value="5">
                                                <label class="form-control transition"
                                                       for="marital_divorced">Divorced</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="marital_widowed" name="radio_marital" type="radio" value="6">
                                                <label class="form-control transition" for="marital_widowed">Widowed</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="marital_other" name="radio_marital" type="radio" value="7">
                                                <label class="form-control transition" for="marital_other">Other</label>
                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>

                                    <div class="form-group" id="dependents_radio">
                                        <label>Number of dependants</label>
                                        <div class="form-choice radio-class">
                                            <div class="field-choice" id="dependents_0">
                                                <input id="dependents_none" name="radio_dependents" type="radio" value="0">
                                                <label class="form-control transition" for="dependents_none">0</label>
                                            </div>
                                            <div class="field-choice" id="dependents_1">
                                                <input id="dependents_one" name="radio_dependents" type="radio" value="1">
                                                <label class="form-control transition" for="dependents_one">1</label>
                                            </div>
                                            <div class="field-choice" id="dependents_2">
                                                <input id="dependents_two" name="radio_dependents" type="radio" value="2">
                                                <label class="form-control transition" for="dependents_two">2</label>
                                            </div>
                                            <div class="field-choice" id="dependents_3">
                                                <input id="dependents_three" name="radio_dependents" type="radio" value="3">
                                                <label class="form-control transition" for="dependents_three">3+</label>
                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>

                                    <div class="form-group" id="adults_radio">
                                        <label><strong>Including yourself</strong>, how many adults (18+) live with
                                            you?</label>
                                        <div class="form-choice radio-class">
                                            <div class="field-choice">
                                                <input id="adults_1" name="radio_adultsLivingWith" type="radio" value="1">
                                                <label class="form-control transition" for="adults_1">1</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="adults_2" name="radio_adultsLivingWith" type="radio" value="2">
                                                <label class="form-control transition" for="adults_2">2</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="adults_3" name="radio_adultsLivingWith" type="radio" value="3">
                                                <label class="form-control transition" for="adults_3">3+</label>
                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col col-xs-6">
                                            <button class="btn btn-lg btn-block btn-grey btn-prev" onclick="nextPrev(-1)"
                                                    type="button">Previous
                                            </button>
                                        </div>
                                        <div class="col col-xs-6">
                                            <button class="btn btn-lg btn-block btn-next" onclick="nextPrev(1)"
                                                    id="next2" type="button">Next
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col col-sm-2 col-progress">
                                <div class="box box-progress mobile-hide">
                                    Progress
                                    <span class="form-progress">18%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="box box-progress mobile-show mobile-sticky">
                    Progress
                    <span class="form-progress">49%</span>
                </div>
                <div class="section section-grey section-form">
                    <div class="container">
                        <div class="row row-equal">

                            <div class="col col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

                                <div class="title">
                                    <h1>About your income</h1>

                                </div>


                                <div class="form-container">
                                    <div class="form-group" id="income_source">
                                        <label>Income Source: </label>
                                        <div class="form-choice radio-class radio-large">
                                            <div class="field-choice">
                                                <input id="fulltime" name="radio_source" onclick="showJobFields(event)"
                                                       type="radio" value="1">
                                                <label class="form-control transition" for="fulltime">Full Time</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="parttime" name="radio_source" onclick="showJobFields(event)"
                                                       type="radio" value="2">
                                                <label class="form-control transition" for="parttime">Part Time</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="selfemp" name="radio_source" onclick="showJobFields(event)"
                                                       type="radio" value="3">
                                                <label class="form-control transition" for="selfemp">Self Employed</label>
                                            </div>

                                            <div class="field-choice">
                                                <input id="retired" name="radio_source" onclick="hideJobFields(event)"
                                                       type="radio" value="4">
                                                <label class="form-control transition" for="retired">Retired</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="disability_benefits" name="radio_source" onclick="hideJobFields(event)"
                                                       type="radio" value="5">
                                                <label class="form-control transition" for="disability_benefits">Disability
                                                    Benefits</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="unemployed_benefits" name="radio_source" onclick="hideJobFields(event)"
                                                       type="radio" value="6">
                                                <label class="form-control transition" for="unemployed_benefits">Unemployed
                                                    Benefits</label>
                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>

                                    <div class="hide_element" id="income-message">
                                        <p style="text-align: left;">
                                            <strong>NOTE:</strong> You have chosen a benefit as your income source. If you
                                            have a part-time, full-time, or temp job, regardless of pay amount, choosing one
                                            of these may improve your ability to be matched to a lender.
                                        </p>
                                    </div>

                                    <div class="hide_element" id="job_fields">
                                        <div class="form-group">
                                            <label>Employer name</label>
                                            <input class="form-control" id="employername" name="Employer_name" type="text"/>
                                            <div class="messages"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Job title</label>
                                            <input class="form-control" id="jobtitle" name="Job_title" type="text"/>
                                            <div class="messages"></div>
                                        </div>

                                        <div class="form-group" id="industryEmployer">
                                            <label>Industry</label>
                                            <div class="field-choice">
                                                <select class="form-control" id="employmentindustry"
                                                        style="text-transform: capitalize;">
                                                    <option disabled="" selected="" value="">Select Employment Industry
                                                    </option>
                                                    <option value="4">banking/insurance</option>
                                                    <option value="6">civil service</option>
                                                    <option value="1">construction/manufacturing</option>
                                                    <option value="5">education</option>
                                                    <option value="3">health</option>
                                                    <option value="9">hotel, restaurant and leisure</option>
                                                    <option value="2">military</option>
                                                    <option value="7">supermarket/retail</option>
                                                    <option value="8">utilities/telecom</option>
                                                    <option value="16">senior level management</option>
                                                    <option value="15">mid level management</option>
                                                    <option value="17">skilled trade</option>
                                                    <option value="18">professional</option>
                                                    <option value="13">driving/delivery</option>
                                                    <option value="14">administration/secretarial</option>
                                                    <option value="10">other, office-based</option>
                                                    <option value="11">other, not office-based</option>
                                                    <option value="12">none</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group" id="employerYears">
                                            <label>Years at employer</label>
                                            <div class="form-choice radio-class radio-large">
                                                <div class="field-choice">
                                                    <input id="noyears" name="radio_employerYears"
                                                           type="radio" value="12">
                                                    <label class="form-control transition" for="noyears">0</label>
                                                </div>
                                                <div class="field-choice ">
                                                    <input id="oneyear" name="radio_employerYears"
                                                           type="radio" value="12">
                                                    <label class="form-control transition" for="oneyear">1</label>
                                                </div>
                                                <div class="field-choice ">
                                                    <input id="twoyears" name="radio_employerYears"
                                                           type="radio" value="24">
                                                    <label class="form-control transition" for="twoyears">2</label>
                                                </div>
                                                <div class="field-choice ">
                                                    <input id="threeyears" name="radio_employerYears"
                                                           type="radio" value="36">
                                                    <label class="form-control transition" for="threeyears">3</label>
                                                </div>
                                                <div class="field-choice ">
                                                    <input id="fouryears" name="radio_employerYears"
                                                           type="radio" value="48">
                                                    <label class="form-control transition" for="fouryears">4</label>
                                                </div>
                                                <div class="field-choice ">
                                                    <input id="fiveyears" name="radio_employerYears"
                                                           type="radio" value="60">
                                                    <label class="form-control transition" for="fiveyears">5</label>
                                                </div>
                                                <div class="field-choice ">
                                                    <input id="sixyears" name="radio_employerYears"
                                                           type="radio" value="72">
                                                    <label class="form-control transition" for="sixyears">6</label>
                                                </div>
                                                <div class="field-choice ">
                                                    <input id="sevenplusyears" name="radio_employerYears"
                                                            type="radio" value="84">
                                                    <label class="form-control transition" for="sevenplusyears">7+</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group hide_element" id="employerMonths">
                                            <label>Months At This Employer</label>
                                            <div class="form-choice radio-class">
                                                <div class="field-choice">
                                                    <input id="threemonths" name="radio_employerMonths" type="radio"
                                                           value="3">
                                                    <label class="form-control transition" for="threemonths">3</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="sixmonths" name="radio_employerMonths" type="radio"
                                                           value="6">
                                                    <label class="form-control transition" for="sixmonths">6</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="nineplusmonths" name="radio_employerMonths" type="radio"
                                                           value="9">
                                                    <label class="form-control transition" for="nineplusmonths">9+</label>
                                                </div>
                                            </div>
                                            <div class="messages"></div>
                                        </div>
                                    </div>

                                    <div class="form-group" id="payment_radios">
                                        <label>How are you paid?</label>
                                        <div class="form-choice radio-class">
                                            <div class="field-choice">
                                                <input id="dir_dep" name="radio_payment" type="radio" value="1"/>
                                                <label class="form-control transition" for="dir_dep">Into Bank</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="check" name="radio_payment" type="radio" value="2"/>
                                                <label class="form-control transition" for="check">Cheque</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="cash" name="radio_payment" type="radio" value="3"/>
                                                <label class="form-control transition" for="cash">Cash</label>
                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>

                                    <div class="form-group" id="freq_radios">
                                        <label>How often are you paid? </label>
                                        <div class="form-choice radio-class radio-large">
                                            <div class="field-choice" id="weekly1">
                                                <input id="weekly" name="radio_frequency"
                                                       type="radio" value="1">
                                                <label class="form-control transition" for="weekly">Weekly</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="bi" name="radio_frequency"
                                                       type="radio" value="2">
                                                <label class="form-control transition" for="bi">Bi-Weekly</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="semi" name="radio_frequency"
                                                       type="radio" value="3">
                                                <label class="form-control transition" for="semi">Fortnightly</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="monthly" name="radio_frequency"
                                                       type="radio" value="9">
                                                <label class="form-control transition" for="monthly">Monthly</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="messages"></div>
                                </div>

                                <div class="form-group">
                                    <label>Next Pay Date:</label>
                                    <input class="form-control" id="nextPayDate" name="Next Pay Date" placeholder="MM/DD/YYYY" type="text">
                                    <div id="next_pay_date_error" class="messages text-danger bold"></div>

                                </div>

                                <div class="form-group">
                                    <label>Following Pay Date:</label>
                                    <input class="form-control" id="followingPayDate" name="Following Pay Date" placeholder="MM/DD/YYYY" type="text">
                                    <div id="following_pay_date_error" class="messages text-danger bold"></div>

                                </div>


                                <div class="form-group">
                                    <label>
                                        <span id="net_gross_monthly">Net Monthly</span> Pay Amount from Employer <small>(note:
                                            exclude pension and benefits income)</small>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="far fa-fw fa-dollar-sign"></i></div>
                                        <input class="form-control" id="netamount" name="Net_monthly_amount" oninput="addTotalUserIncome()"
                                               type="tel">
                                    </div>
                                    <div class="messages"></div>
                                </div>

                                <div class="row">
                                    <div class="col col-xs-6">
                                        <a class="btn btn-lg btn-block btn-grey" href="#">Previous</a>
                                    </div>
                                    <div class="col col-xs-6">
                                        <button class="btn btn-lg btn-block btn-default" onclick="nextPrev(1)"
                                               id="next3" type="button">Next
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-sm-2 col-progress">
                                <div class="box box-progress mobile-hide">
                                    Progress
                                    <span class="form-progress">49%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="box box-progress mobile-show mobile-sticky">
                    Progress
                    <span class="form-progress">70%</span>
                </div>
                <div class="section section-grey section-form">
                    <div class="container">
                        <div class="row row-equal">

                            <div class="col col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

                                <div class="title">
                                    <h1>Identity Check</h1>

                                </div>


                                <div class="form-container">

                                    <div class="form-group">
                                        <label>Mortgage / Rent <small>Include your monthly mortgage payments or the monthly
                                                rent</small></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="far fa-fw fa-dollar-sign"></i></div>
                                            <input class="form-control" id="mortgagerent" name="Mortgage_or_Rent"
                                                   type="tel">
                                        </div>
                                        <div class="messages"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ssn">Social Security Number:</label>
                                        <input class="form-control" id="ssn" name="Social_number" placeholder="XXXXXXXXX" type="tel">
                                        <div id="ssn_error" class="messages text-danger bold"></div>

                                    </div>

                                    <div class="form-group">
                                        <label>Driving License Number:</label>
                                        <input class="form-control" id="drivingLicenseNumber" name="Driving_license_number" placeholder="FL12345678" type="text">
                                        <div id="drivingLicenseNumberError" class="messages"></div>
                                    </div>
                                    <div class="form-group prepop-field">
                                        <label>Driving License State</label>
                                        <div class="field-choice">
                                            <select class="form-control" id="drivingLicenseState"
                                                    style="text-transform: capitalize;">
                                                <option disabled="" selected="" value="">Select State
                                                </option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--Military-->
                                    <div class="form-group" id="armedForces">
                                        <label>Military</label>
                                        <div class="form-choice radio-class radio-large">
                                            <div class="field-choice">
                                                <input id="military_none" name="radio_military"
                                                       type="radio" value="1">
                                                <label class="form-control transition" for="military_none">None</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="military_veteran" name="radio_military"
                                                       type="radio" value="2">
                                                <label class="form-control transition" for="military_veteran">Veteran</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="military_reserve" name="radio_military"
                                                        type="radio" value="3">
                                                <label class="form-control transition" for="military_reserve">Reserve</label>
                                            </div>

                                        </div>
                                        <div class="messages"></div>
                                    </div>

                                    <!-- Credit Score-->
                                    <div class="form-group" id="creditScore">
                                        <label>Credit Score</label>
                                        <div class="form-choice radio-class radio-large">
                                            <div class="field-choice">
                                                <input id="credit_score_excellent" name="radio_credit_score" onclick="toggleTypeOfHousing(event)"
                                                       type="radio" value="1">
                                                <label class="form-control transition" for="credit_score_excellent">Excellent</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="credit_score_good" name="radio_credit_score" onclick="toggleTypeOfHousing(event)"
                                                       type="radio" value="2">
                                                <label class="form-control transition" for="credit_score_good">Good</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="credit_score_fair" name="radio_credit_score"
                                                       onclick="toggleTypeOfHousing(event)" type="radio" value="3">
                                                <label class="form-control transition" for="credit_score_fair">Fair
                                                    Housing</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="credit_score_poor" name="radio_credit_score" onclick="toggleTypeOfHousing(event)"
                                                       type="radio" value="4">
                                                <label class="form-control transition" for="credit_score_poor">Poor
                                                </label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="credit_score_not_sure" name="radio_credit_score" onclick="toggleTypeOfHousing(event)"
                                                       type="radio" value="4">
                                                <label class="form-control transition" for="credit_score_not_sure">Not sure</label>
                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>

                                    <!-- Best Time To Call-->
                                    <div class="form-group" id="bestTimeToCall">
                                        <label>Best Time To Call</label>
                                        <div class="form-choice radio-class radio-large">
                                            <div class="field-choice">
                                                <input id="best_call_time_anytime" name="radio_best_time_to_call"
                                                       type="radio" value="1">
                                                <label class="form-control transition" for="best_call_time_anytime">Anytime</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="best_call_time_morning" name="radio_best_time_to_call"
                                                       type="radio" value="2">
                                                <label class="form-control transition" for="best_call_time_morning">Morning</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="best_call_time_evening" name="radio_best_time_to_call"
                                                      type="radio" value="3">
                                                <label class="form-control transition" for="best_call_time_evening">Evening
                                                </label>
                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>


                                    <div class="row">
                                        <div class="col col-xs-6">
                                            <a class="btn btn-lg btn-block btn-grey" href="#">Previous</a>
                                        </div>
                                        <div class="col col-xs-6">
                                            <button class="btn btn-lg btn-block btn-default" onclick="nextPrev(1)"
                                                   id="next4" type="button">Next
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col col-sm-2 col-progress">
                                <div class="box box-progress mobile-hide">
                                    Progress
                                    <span class="form-progress">70%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="box box-progress mobile-show mobile-sticky">
                    Progress
                    <span class="form-progress">81%</span>
                </div>
                <div class="section section-grey section-form">
                    <div class="container">
                        <div class="row row-equal">

                            <div class="col col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

                                <div class="title">
                                    <h1>Where do you live?</h1>

                                </div>


                                <div class="form-container">

                                    <div class="form-group" id="postcode-field">
                                        <label>Zip</label>
                                        <div class="form-postcode">
                                            <input class="form-control" id="postcode" name="Postal_code"
                                                   onkeyup="toggleAddressFields()" onkeyup="validateZipCode(this.value)">
                                            <button class="btn btn-primary postcode-search-button hide_element"
                                                    id="address-search"
                                                    onclick="getPostalCodeInfo()" type="button">Find Address
                                            </button>
                                        </div>
                                        <div id="postcodeError" class="messages text-danger"></div>
                                    </div>

                                    <div class="gap" id="gap" style="height:70px;"></div>

                                    <div class="form-group select-address hide_element" id="addressDiv">
                                        <select class="form-control" id="userAddressSelect">
                                            <option id="userAddress" selected="" value="">Select Address Here</option>
                                        </select>
                                    </div>

                                    <div class="" id="address-details">
                                        <div class="form-group prepop-field">
                                            <p>
                                                <label>House Name/Number:</label>
                                                <input class="form-control" id="housenamenumber"
                                                       name="House_name_or_number">
                                            </p>
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group prepop-field">
                                            <p>
                                                <label>Street: (Your street, e.g. Ave., St.)</label>
                                                <input class="form-control" id="housestreet" name="Street">
                                            </p>
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group prepop-field">
                                            <p>
                                                <label>City/Town:</label>
                                                <input class="form-control" id="citytown" name="City_or_town">
                                            </p>
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group prepop-field">
                                            <label>State</label>
                                            <div class="field-choice">
                                                <select class="form-control" id="county"
                                                        style="text-transform: capitalize;">
                                                    <option disabled="" selected="" value="">Select State
                                                    </option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="CA">California</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="DC">District Of Columbia</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="WV">West Virginia</option>
                                                    <option value="WI">Wisconsin</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                            </div>
                                        </div>


{{--                                        <div class="form-group prepop-field">--}}
{{--                                            <p>--}}
{{--                                                <label>State:</label>--}}
{{--                                                <input class="form-control" id="county" name="County">--}}
{{--                                            </p>--}}
{{--                                            <div class="messages"></div>--}}
{{--                                        </div>--}}
                                    </div>

                                    <!--Residential status-->
                                    <div class="form-group" id="residential_status">
                                        <label>Residential status</label>
                                        <div class="form-choice radio-class radio-large">
                                            <div class="field-choice">
                                                <input id="home_own" name="radio_residential" onclick="toggleTypeOfHousing(event)"
                                                       type="radio" value="1">
                                                <label class="form-control transition" for="home_own">Home Owner</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="renter" name="radio_residential" onclick="toggleTypeOfHousing(event)"
                                                       type="radio" value="2">
                                                <label class="form-control transition" for="renter">Renter</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="council_housing" name="radio_residential"
                                                       onclick="toggleTypeOfHousing(event)" type="radio" value="3">
                                                <label class="form-control transition" for="council_housing">Council
                                                    Housing</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="live_parents" name="radio_residential" onclick="toggleTypeOfHousing(event)"
                                                       type="radio" value="4">
                                                <label class="form-control transition" for="live_parents">With
                                                    Family</label>
                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>




                                    <div class="hide_element" id="HousingType">
                                        <div class="form-group">
                                            <label>Type of Housing</label>
                                            <div class="form-choice radio-class radio-large">
                                                <div class="field-choice">
                                                    <input id="HousingTypeRoom" name="type_of_housing" type="radio" value="1">
                                                    <label class="form-control transition" for="Room">Room</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="HousingTypeStudio" name="type_of_housing" type="radio" value="2">
                                                    <label class="form-control transition" for="Studio">Studio</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="HousingTypeBedroom" name="type_of_housing" type="radio" value="3">
                                                    <label class="form-control transition" for="Bedroom">1 Bedroom</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="HousingTypeBedrooms2" name="type_of_housing" type="radio" value="4">
                                                    <label class="form-control transition" for="Bedrooms2">2
                                                        Bedrooms</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="HousingTypeBedrooms3" name="type_of_housing" type="radio" value="5">
                                                    <label class="form-control transition" for="Bedrooms3">3
                                                        Bedrooms</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="Bedrooms4" name="type_of_housing" type="radio" value="6">
                                                    <label class="form-control transition" for="Bedrooms4">4+
                                                        Bedrooms</label>
                                                </div>
                                            </div>
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group" id="renters_numbers">
                                            <label>How many do you split rent with?</label>
                                            <div class="form-choice radio-class radio-large">
                                                <div class="field-choice">
                                                    <input id="number_of_renters0" name="number_of_renters" type="radio"
                                                           value="0">
                                                    <label class="form-control transition"
                                                           for="number_of_renters0">0</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="number_of_renters1" name="number_of_renters" type="radio"
                                                           value="1">
                                                    <label class="form-control transition"
                                                           for="number_of_renters1">1</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="number_of_renters2" name="number_of_renters" type="radio"
                                                           value="2">
                                                    <label class="form-control transition"
                                                           for="number_of_renters2">2</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="number_of_renters3" name="number_of_renters" type="radio"
                                                           value="3">
                                                    <label class="form-control transition"
                                                           for="number_of_renters3">3</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="number_of_renters4" name="number_of_renters" type="radio"
                                                           value="4">
                                                    <label class="form-control transition"
                                                           for="number_of_renters4">4</label>
                                                </div>
                                                <div class="field-choice">
                                                    <input id="number_of_renters5" name="number_of_renters" type="radio"
                                                           value="5">
                                                    <label class="form-control transition"
                                                           for="number_of_renters5">5+</label>
                                                </div>
                                            </div>
                                            <div class="messages"></div>
                                        </div>
                                    </div>

                                    <div class="form-group" id="addressYears">
                                        <label>Years at address</label>
                                        <div class="form-choice radio-class radio-large">
                                            <div class="field-choice">
                                                <input id="addressnoyears" name="radio_addressYears" onclick="showAddressMonths(event)"
                                                       type="radio" value="12">
                                                <label class="form-control transition" for="addressnoyears">0</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="addressoneyear" name="radio_addressYears" onclick="hideAddressMonths(event)"
                                                       type="radio" value="12">
                                                <label class="form-control transition" for="addressoneyear">1</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="addresstwoyears" name="radio_addressYears" onclick="hideAddressMonths(event)"
                                                       type="radio" value="24">
                                                <label class="form-control transition" for="addresstwoyears">2</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="addressthreeyears" name="radio_addressYears"
                                                       onclick="hideAddressMonths(event)" type="radio" value="36">
                                                <label class="form-control transition" for="addressthreeyears">3</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="addressfouryears" name="radio_addressYears" onclick="hideAddressMonths(event)"
                                                       type="radio" value="48">
                                                <label class="form-control transition" for="addressfouryears">4</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="addressfiveyears" name="radio_addressYears" onclick="hideAddressMonths(event)"
                                                       type="radio" value="60">
                                                <label class="form-control transition" for="addressfiveyears">5</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="addresssixyears" name="radio_addressYears" onclick="hideAddressMonths(event)"
                                                       type="radio" value="72">
                                                <label class="form-control transition" for="addresssixyears">6</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="addresssevenplusyears" name="radio_addressYears"
                                                       onclick="hideAddressMonths(event)" type="radio" value="84">
                                                <label class="form-control transition"
                                                       for="addresssevenplusyears">7+</label>
                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>
                                    <div class="form-group hide_element" id="addressMonths">
                                        <label>Months At This Address</label>
                                        <div class="form-choice radio-class">
                                            <div class="field-choice">
                                                <input id="addressthreemonths" name="radio_addressMonths" type="radio"
                                                       value="3">
                                                <label class="form-control transition" for="addressthreemonths">3</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="addresssixmonths" name="radio_addressMonths" type="radio"
                                                       value="6">
                                                <label class="form-control transition" for="addresssixmonths">6</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="addressnineplusmonths" name="radio_addressMonths" type="radio"
                                                       value="9">
                                                <label class="form-control transition"
                                                       for="addressnineplusmonths">9+</label>

                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col col-xs-6">
                                            <a class="btn btn-lg btn-block btn-grey" href="#">Previous</a>
                                        </div>
                                        <div class="col col-xs-6">
                                            <button class="btn btn-lg btn-block btn-default" onclick="nextPrev(1)"
                                                   id="next5" type="button">Next
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col col-sm-2 col-progress">
                                <div class="box box-progress mobile-hide">
                                    Progress
                                    <span class="form-progress">81%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="box box-progress mobile-show mobile-sticky">
                    Progress
                    <span class="form-progress">90%</span>
                </div>
                <div class="section section-grey section-form" id="bank_details">
                    <div class="container">
                        <div class="row row-equal">

                            <div class="col col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

                                <div class="title" >
                                    <h1>Banking information</h1>
                                    <p class="lead">Lenders need to verify that you have a bank account so that the loan can
                                        be paid to you. We cannot use this information to take payments from you</p>
                                </div>


                                <div class="form-container" >

                                    <div class="form-group" >
                                        <label>Bank Name</label>
                                        <input class="form-control" id="bankName" name="Bank_name" type="text">
                                        <div class="messages"></div>
                                    </div>

                                    <div class="form-group" id="bank_sortcode">
                                        <label>Bank Routing Number</label>
                                        <input class="form-control" id="sortcode" name="Bank_sort_code" type="tel" onblur="validateABANumber()">
                                        <div id="bankRoutingNumberError" class="messages"></div>
                                    </div>


                                    <div class="form-group">
                                        <label>Account number</label>
                                        <input class="form-control" id="accountnumber" name="Bank_account_number" type="tel">
                                        <div id="bankAccountNumberError" class="messages"></div>
                                    </div>


                                    <div class="gap" style="height:70px;"></div>


                                    <div class="form-group" id="bank_account_type">
                                        <label>Primary Bank Account Type: </label>
                                        <div class="form-choice radio-class radio-large">
                                            <div class="field-choice">
                                                <input id="vdebit" name="radio_primary_card" type="radio" value="1">
                                                <label class="form-control transition" for="vdebit">Checking</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="vdelta" name="radio_primary_card" type="radio" value="2">
                                                <label class="form-control transition" for="vdelta">Saving</label>
                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>

                                    <div class="form-group" id="bankYears">
                                        <label>Years At This Bank</label>
                                        <div class="form-choice radio-class radio-large">
                                            <div class="field-choice">
                                                <input id="banknoyears" name="radio_bankYears" onclick="showBankMonths(event)"
                                                       type="radio" value="12">
                                                <label class="form-control transition" for="banknoyears">0</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="bankoneyear" name="radio_bankYears" onclick="hideBankMonths(event)"
                                                       type="radio" value="12">
                                                <label class="form-control transition" for="bankoneyear">1</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="banktwoyears" name="radio_bankYears" onclick="hideBankMonths(event)"
                                                       type="radio" value="24">
                                                <label class="form-control transition" for="banktwoyears">2</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="bankthreeyears" name="radio_bankYears" onclick="hideBankMonths(event)"
                                                       type="radio" value="36">
                                                <label class="form-control transition" for="bankthreeyears">3</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="bankfouryears" name="radio_bankYears" onclick="hideBankMonths(event)"
                                                       type="radio" value="48">
                                                <label class="form-control transition" for="bankfouryears">4</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="bankfiveyears" name="radio_bankYears" onclick="hideBankMonths(event)"
                                                       type="radio" value="60">
                                                <label class="form-control transition" for="bankfiveyears">5</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="banksixyears" name="radio_bankYears" onclick="hideBankMonths(event)"
                                                       type="radio" value="72">
                                                <label class="form-control transition" for="banksixyears">6</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="banksevenplusyears" name="radio_bankYears" onclick="hideBankMonths(event)"
                                                       type="radio" value="84">
                                                <label class="form-control transition" for="banksevenplusyears">7+</label>
                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>
                                    <div class="form-group hide_element" id="bankMonths">
                                        <label>Months At This Bank: </label>
                                        <div class="form-choice radio-class">
                                            <div class="field-choice">
                                                <input id="bankthreemonths" name="radio_bankMonths" type="radio" value="3">
                                                <label class="form-control transition" for="bankthreemonths">3</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="banksixmonths" name="radio_bankMonths" type="radio" value="6">
                                                <label class="form-control transition" for="banksixmonths">6</label>
                                            </div>
                                            <div class="field-choice">
                                                <input id="banknineplusmonths" name="radio_bankMonths" type="radio"
                                                       value="9">
                                                <label class="form-control transition" for="banknineplusmonths">9+</label>
                                            </div>
                                        </div>
                                        <div class="messages"></div>
                                    </div>


                                    <div class="row">
                                        <div class="col col-xs-6">
                                            <a class="btn btn-lg btn-block btn-grey" href="#">Previous</a>
                                        </div>
                                        <div class="col col-xs-6">
                                            <button class="btn btn-lg btn-block btn-default" onclick="nextPrev(1)"
                                                   id="next6" type="button">Next
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col col-sm-2 col-progress">
                                <div class="box box-progress mobile-hide">
                                    Progress
                                    <span class="form-progress">90%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="box box-progress mobile-show mobile-sticky">
                    Progress
                    <span class="form-progress">99%</span>
                </div>
                <div class="section section-grey section-form">
                    <div class="container">
                        <div class="row row-equal">
                            <div class="col col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                                <div class="title">
                                    <h1>Last bit...</h1>
                                    <p class="lead">Terms & Conditions</p>
                                </div>
                                <div class="form-terms">
                                    <p>
                                        Warning: Late repayment can cause you serious money problems. For help, go to <a
                                            href="https://www.moneyhelper.org.uk/" target="_blank">moneyhelper.org.uk</a>
                                    </p>
                                    <p>
                                        By submitting your application form, you are agreeing with our <a href="{{route('terms',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}"
                                                                                                          rel="nofollow"
                                                                                                          target="_blank">Terms
                                            &amp; Conditions</a> and confirming that you have read our <a href="{{route('privacy',['affiliate_id'=>$affiliate['affiliate_id'], 'offer_id'=>$affiliate['offer_id'], 'transaction_id'=>$affiliate['transaction_id'], 'aff_sub'=>$affiliate['aff_sub'], 'aff_sub2'=>$affiliate['aff_sub2'], 'aff_sub3'=>$affiliate['aff_sub3'], 'aff_sub4'=>$affiliate['aff_sub4'], 'aff_sub5'=>$affiliate['aff_sub5']])}}"
                                                                                                          rel="nofollow"
                                                                                                          target="_blank">Privacy
                                            Policy</a>. Please be aware that before approving your loan, lenders will perform a
                                        credit check for affordability and sustainability purposes
                                    </p>
                                    <p>
                                        You understand that the information you have provided will be shared with our panel
                                        of direct lenders, brokers, guarantor lenders and alternative solution providers who
                                        will use it to assess your eligibility for the product you are applying for
                                    </p>
                                    <p>
                                        It is important that you understand Stag Finance Ltd and associated <a
                                            id="alert-brands" onclick="brandsPopup()">brands</a> acts as a Credit Broker and
                                        will SMS/Email you multiple times as part of your personal loan enquiry. You can opt
                                        out of communications at any time. To do this now please <a class="opt-out"
                                                                                                    href="{{route('marketing_opt_out')}}"
                                                                                                    rel="nofollow"
                                                                                                    target="_blank">Click
                                            Here</a>. By clicking "Get My Quote" you agree to the points above and consent to be
                                        contacted by SMS, Email, Automated Message and Telephone for the purposes of this
                                        application
                                    </p>
                                    <h6>3rd Party Marketing Options</h6>
                                    <p>
                                        Stag Finance Ltd would like to introduce you to its <a
                                            id="trusted-third-parties" onclick="thirdPartiesPopup()">trusted third
                                            parties</a>. These specially selected companies will contact you regarding products
                                        such as Utility Switching, Life Insurance, Solar Energy, Credit Building, Credit
                                        Report, Debt Solutions and other products we feel may be of interest to you. You can
                                        <a class="opt-out" href="{{route('marketing_opt_out')}}" rel="nofollow"
                                           target="_blank">opt out</a> at any time from receiving these communications.
                                        Please check our <a href="{{route('privacy')}}" rel="nofollow"
                                                            target="_blank">Privacy Policy</a>
                                        for further information. Be assured that any such parties will use your data in
                                        accordance with all applicable law relating to privacy
                                    </p>
                                    <div class="form-group">
                                        <div class="form-choice">
                                            <div class="field-choice" id="email1">
                                                <label>Email</label>
                                                <input id="email-marketing-consent" name="communication" type="checkbox"/>
                                                <label class="form-control transition" for="email-marketing-consent">
                                                    <i class="far fa-check"></i>
                                                </label>
                                            </div>
                                            <div class="field-choice" id="sms1">
                                                <label>SMS</label>
                                                <input id="sms-marketing-consent" name="communication" type="checkbox"/>
                                                <label class="form-control transition" for="sms-marketing-consent">
                                                    <i class="far fa-check"></i>
                                                </label>
                                            </div>
                                            <div class="field-choice" id="phone1">
                                                <label>Phone</label>
                                                <input id="phone-marketing-consent" name="communication" type="checkbox"/>
                                                <label class="form-control transition" for="phone-marketing-consent">
                                                    <i class="far fa-check"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--                        <div class="form-terms modal">-->
                                <!--&lt;!&ndash;                            <div class="form-group offer" onclick="showCreditModal()">&ndash;&gt;-->
                                <!--&lt;!&ndash;                                <div class="special-offer-logo" style="margin-bottom: 10px;">&ndash;&gt;-->
                                <!--&lt;!&ndash;                                    <img src="/Content/Images/CRM-logo.png" alt="Credit Reports Matter">&ndash;&gt;-->
                                <!--&lt;!&ndash;                                </div>&ndash;&gt;-->
                                <!--&lt;!&ndash;                                <div class="form-choice offer">&ndash;&gt;-->
                                <!--&lt;!&ndash;                                    <div class="field-choice offer">&ndash;&gt;-->
                                <!--&lt;!&ndash;                                        <input id="RequestSpecialOffer" name="RequestSpecialOffer" type="checkbox" />&ndash;&gt;-->
                                <!--&lt;!&ndash;                                        <label for="RequestSpecialOffer" class="form-control transition offer_checkbox">&ndash;&gt;-->
                                <!--&lt;!&ndash;                                            <i class="far fa-check"></i>&ndash;&gt;-->
                                <!--&lt;!&ndash;                                        </label>&ndash;&gt;-->
                                <!--&lt;!&ndash;                                        <label class="control-label credit-label" for="RequestSpecialOffer" style="cursor:pointer">&ndash;&gt;-->
                                <!--&lt;!&ndash;                                            Click here to get your free* <strong>10-day trial</strong> to Credit Reports Matter and get access to your <strong>free Credit Report</strong>, Social Report and Account Score today.&ndash;&gt;-->
                                <!--&lt;!&ndash;                                        </label>&ndash;&gt;-->
                                <!--&lt;!&ndash;                                    </div>&ndash;&gt;-->
                                <!--&lt;!&ndash;                                </div>&ndash;&gt;-->
                                <!--&lt;!&ndash;                            </div>&ndash;&gt;-->
                                <!--                        </div>-->
                                <button class="btn btn-lg btn-block btn-default" id="submit_fire_fire" onclick="submitForm()" type="button">Get My
                                    Quote
                                </button>

                                <!--<button class="btn btn-lg btn-block btn-grey btn-loan-failed">Loan Failure</button>-->
                            </div>

                            <div class="col col-sm-2 col-progress">
                                <div class="box box-progress mobile-hide">
                                    Progress
                                    <span class="form-progress">99%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="opaque" style="display: none;"></div>
                <div class="section section-grey section-form credit-modal-visible hide_element" id="credit-modal">
                    <div class="special-offer">
                        <div class="special-offer-logo" style="margin-bottom: 10px;">
                            <img alt="Credit Reports Matter" src="/Content/Images/CRM-logo.png">
                        </div>
                        <p class="offer-message">
                            Enter your card details below to enjoy the benefits of Credit Reports Matter today at <strong>no
                                cost for the first 10 days</strong>. You will not be charged today.
                        </p>
                        <hr>
                        <div class="form-group" style="display:inline-block; width: 53%">
                            <label>Name on Card</label>
                            <input class="form-control" id="offer_cardname" name="Name_on_card" type="text">
                            <div class="messages"></div>
                        </div>
                        <div class="form-group" style="display:inline-block; width: 45%">
                            <label>Card Type</label>
                            <select class="form-control" id="offer_cardtype">
                                <option class="form-control" disabled="disabled" selected="" value="">Select</option>
                                <option value="VISA">Visa</option>
                                <option value="MC">MasterCard</option>
                            </select>
                            <div class="messages"></div>
                        </div>
                        <div class="form-group">
                            <label>Card Number</label>
                            <input class="form-control" id="offer_cardnumber" name="Card_number" type="tel">
                            <div class="messages"></div>
                        </div>
                        <div class="form-group" style="display:inline-block; width: 35%">
                            <label>Card CVV</label>
                            <input class="form-control" id="offer_cardcvv" name="Card_CVV" type="tel">
                            <div class="messages"></div>
                        </div>
                        <div class="form-group exp-group">
                            <label>Expiration Date</label>
                            <div class="form-group exp-date">
                                <select class="form-control" id="offer_expMonth">
                                    <option disabled="disabled" selected="" value="">MM</option>
                                    <option value="01">Jan</option>
                                    <option value="02">Feb</option>
                                    <option value="03">Mar</option>
                                    <option value="04">Apr</option>
                                    <option value="05">May</option>
                                    <option value="06">Jun</option>
                                    <option value="07">Jul</option>
                                    <option value="08">Aug</option>
                                    <option value="09">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dec</option>
                                </select>
                                <div class="messages"></div>
                            </div>
                            <div class="form-group exp-date">
                                <select class="form-control" id="offer_expYear">
                                    <option disabled="disabled" selected="" value="">YYYY</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                </select>
                                <div class="messages"></div>
                            </div>
                        </div>
                        <div>
                            <p class="offer-message" style="margin-bottom: 5px">* By clicking "I AGREE" you agree to the <a
                                    href="https://www.creditreportsmatter.co.uk/privacy" rel="nofollow" target="_blank">Privacy
                                    Policy</a> and <a
                                    href="https://creditreportsmatter.s3.amazonaws.com/files/IMTtechnologiesTermsofMembership.pdf"
                                    rel="nofollow" target="_blank">Terms of Membership</a> of Credit Reports Matter. After
                                the 10-day trial period you authorise ScoresMatter Limited to charge $19.95 per month on a
                                continuous payment authority until you cancel. You can cancel at any time by contacting us
                                on 0808 189 0346</p>
                        </div>
                        <div class="submit-no-offer" style="margin: 30px 0;">
                            <a id="SubmitWithoutOffer" onclick="submitForm()" style="cursor:pointer;">SKIP &amp; SUBMIT MY
                                LOAN APPLICATION WITHOUT THIS OFFER</a>
                        </div>
                        <button class="btn btn-lg btn-block btn-default" onclick="submitFormWithOffer()" type="button">I
                            Agree
                        </button>
                    </div>
                </div>
            </div>
        </form>




<div class="finalization section section-form">
    <div id="progress_div" class="hide_element" style="text-align: center;">
        <h2 class="loading-ellipsis">Searching</h2>
        <div id="progressBar" class="hide_element">
            <div id="barStatus"></div>
        </div>
        <p>This might take a minute. Please don't reload your browser.</p>

        <div class="status-div">
            <h3 id="status-text" class="text-center warning-message"></h3>
        </div>
    </div>

    <div id="countdown-div" class="hide_element" style="text-align: center;">
        <p>Congratulations, you've been connected with a lender!</p>
        <p id="redirect-message">You will now be redirected to your lender in</p>

        <h2 id="countdown" class="count-down"></h2>
        <div id="tracking-codes" style="height: 1px; width: 1px">
        </div>
        <iframe id="tracking-code" style="visibility: hidden" height="0" width="0"></iframe>
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
    <script type="text/javascript">
        if (window.NodeList && !NodeList.prototype.forEach) {
            NodeList.prototype.forEach = Array.prototype.forEach;
        }
    </script>




    <script>
        $(document).ready(function() {

            function validateInput(inputElement, errorElement, pattern, errorMessage) {
                const inputValue = $(inputElement).val().replace(/[-\/\\^$*+?.()|[\]{}]/g, '');
                if (!pattern.test(inputValue)) {
                    $(errorElement).html('<span class="text-danger">' + errorMessage + '</span>');
                    $(inputElement).addClass('form-group has-error');
                } else {
                    $(errorElement).html('<span class="text-danger"></span>');
                    $(inputElement).removeClass('form-group has-error');
                }
            }

            function validatePhoneNumber(inputElement, errorElement, regex) {
                const phoneNumberError = document.getElementById(errorElement);
                const phoneNumber = $(inputElement).val();
                const cleanedPhoneNumber = phoneNumber.replace(/\D/g, '');

                if (regex.test(cleanedPhoneNumber)) {
                    phoneNumberError.innerHTML = '<span class="text-danger"></span>';
                    $(inputElement).parent().addClass('has-success').removeClass('has-error');
                } else {
                    phoneNumberError.innerHTML = '<span class="text-danger">Invalid Phone Number</span>';
                    $(inputElement).parent().addClass('has-error').removeClass('has-success');
                }
            }

            $('#ssn').on('input', function() {
                const pattern = /^\d{9}$/;
                validateInput('#ssn', '#ssn_error', pattern, 'Invalid Social Security Number');
            });

            $('#drivingLicenseNumber').on('input', function() {
                const pattern = /^[A-Z]{1}[A-Z0-9]{1,20}$/;
                validateInput('#drivingLicenseNumber', '#drivingLicenseNumberError', pattern, 'Invalid Driving License Number');
            });

            $('#postcode').on('input', function() {
                const pattern = /^\d{5}$/;
                validateInput('#postcode', '#postcodeError', pattern, 'Invalid ZIP Code');
            });

            $('#accountnumber').on('input', function() {
                const pattern = /^\d{6,17}$/;
                validateInput('#accountnumber', '#bankAccountNumberError', pattern, 'Invalid Bank Account Number');
            });

            $('#sortcode').on('input', function() {
                const pattern = /^\d{9}$/;
                validateInput('#sortcode', '#bankRoutingNumberError', pattern, 'Invalid Bank Routing Number');
            });

            $('#mobilephone').on('input', function() {
                const regex = /^(?:\+1|1)?[-.\s]?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
                validatePhoneNumber('#mobilephone', 'mobilephoneError', regex);
            });

            $('#homePhone').on('input', function() {
                const regex = /^(?:\+1|1)?[-.\s]?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
                validatePhoneNumber('#homePhone', 'homePhoneError', regex);
            });

            $('#workPhone').on('input', function() {
                const regex = /^(?:\+1|1)?[-.\s]?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
                validatePhoneNumber('#workPhone', 'workPhoneError', regex);
            });

        });
        $(document).ready(function() {
            // Validation for Loan Amount
            $('#loanAmount').on('input', function() {
                const loanAmount = parseInt($(this).val());
                if (isNaN(loanAmount) || loanAmount < 1) {
                    $(this).addClass('has-error');
                } else {
                    $(this).removeClass('has-error');
                }
            });

            // Validation for Loan Term
            $('input[name="term_radio"]').on('change', function() {
                if (!$('input[name="term_radio"]:checked').length) {
                    $('#radio_terms').addClass('has-error');
                } else {
                    $('#radio_terms').removeClass('has-error');
                }
            });

            // Validation for Loan Purpose
            $('input[name="radio_purpose"]').on('change', function() {
                if (!$('input[name="radio_purpose"]:checked').length) {
                    $('#loanPurposeRadio').addClass('has-error');
                } else {
                    $('#loanPurposeRadio').removeClass('has-error');
                }
            });

            // Validation for Other Loan Purpose
            $('#loanPurposeFromSelect').on('change', function() {
                if ($(this).val() === '') {
                    $('#otherLoanPurposeFields').addClass('has-error');
                } else {
                    $('#otherLoanPurposeFields').removeClass('has-error');
                }
            });

            // Next button click event
            $('#next1').on('click', function() {
                // Check if all fields are valid
                const loanAmountValid = !$('#loanAmount').hasClass('has-error');
                const termValid = $('input[name="term_radio"]:checked').length > 0;
                const purposeValid = $('input[name="radio_purpose"]:checked').length > 0;
                const otherPurposeValid = $('#loanPurposeFromSelect').val() !== '';

                if (!loanAmountValid || !termValid || !purposeValid || !otherPurposeValid) {
                    // Display error message or prevent form submission
                    alert('Please fill in all required fields.');
                    return false;
                }

                // Proceed to the next step
                nextPrev(1);
            });
        });

    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=&amp;ev=PageView&amp;noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
{{--    <script defer src="https://www.googletagmanager.com/gtag/js?id=G-"></script>--}}
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-21N4P19VN1', { 'allow_enhanced_conversions': true });</script>
    <!-- Bing Pixel Code -->
    <script>
        (function (w, d, t, r, u) {
            var f, n, i;
            w[u] = w[u] || [], f = function () {
                var o = { ti: " " };
                o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
            },
                n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function () {
                    var s = this.readyState;
                    s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
                },
                i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
        })
            (window, document, "script", "http://bat.bing.com/bat.js", "");
    </script>
{{--    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-"></script>--}}
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-');
    </script>

    <script src="../bundles/scripts_us.js"></script>
    <script src="../bundles/formscripts_us.js"></script>

    <script>
            function validateABANumber() {
            const abaNumberInput = document.getElementById('sortcode');
            const abaNumber = abaNumberInput.value;

            // Remove any non-digit characters
            const cleanABANumber = abaNumber.replace(/\D/g, '');

            // Check if the number is 9 digits long
            if (cleanABANumber.length !== 9) {
            return false;
        }

            // Calculate the check digit
            let sum = 0;
            for (let i = 0; i < 9; i += 3) {
            sum += parseInt(cleanABANumber[i], 10) * 3;
            sum += parseInt(cleanABANumber[i + 1], 10) * 7;
            sum += parseInt(cleanABANumber[i + 2], 10);
        }

            // Check if the sum is divisible by 10
            return sum % 10 === 0;
        }

            function displayError(errorMessage) {
            const errorContainer = document.getElementById('bankRoutingNumberError');
            errorContainer.innerHTML = errorMessage;
            alert(errorMessage);
        }
    </script>

</body>

</html>
