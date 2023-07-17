function showEmailDomains() {
    var n = emailInput.value;
    n.length > 2 ? document.getElementById("email-button-block").classList.remove("hide_element") : document.getElementById("email-button-block").classList.add("hide_element");
    emailContainer.classList.contains("has-success") && document.getElementById("email-button-block").classList.add("hide_element")
}

function addGmail() {
    var n = emailInput.value.indexOf("@");
    n !== -1 && (emailInput.value = emailInput.value.slice(0, n));
    document.querySelector("#email-div p.help-block.error") && (emailInput.value += "@gmail.com", document.getElementById("email-div").classList.remove("has-error"), document.getElementById("email-div").classList.add("has-success"), document.querySelector("#email-div p.help-block.error").innerHTML = "");
    document.getElementById("email-button-block").classList.add("hide_element")
}

function addYahoo() {
    var n = emailInput.value.indexOf("@");
    n !== -1 && (emailInput.value = emailInput.value.slice(0, n));
    document.querySelector("#email-div p.help-block.error") && (emailInput.value += "@yahoo.com", document.getElementById("email-div").classList.remove("has-error"), document.getElementById("email-div").classList.add("has-success"), document.querySelector("#email-div p.help-block.error").innerHTML = "");
    document.getElementById("email-button-block").classList.add("hide_element")
}

function addHotmail() {
    var n = emailInput.value.indexOf("@");
    n !== -1 && (emailInput.value = emailInput.value.slice(0, n));
    document.querySelector("#email-div p.help-block.error") && (emailInput.value += "@hotmail.com", document.getElementById("email-div").classList.remove("has-error"), document.getElementById("email-div").classList.add("has-success"), document.querySelector("#email-div p.help-block.error").innerHTML = "");
    document.getElementById("email-button-block").classList.add("hide_element")
}

function addAol() {
    var n = emailInput.value.indexOf("@");
    n !== -1 && (emailInput.value = emailInput.value.slice(0, n));
    document.querySelector("#email-div p.help-block.error") && (emailInput.value += "@aol.com", document.getElementById("email-div").classList.remove("has-error"), document.getElementById("email-div").classList.add("has-success"), document.querySelector("#email-div p.help-block.error").innerHTML = "");
    document.getElementById("email-button-block").classList.add("hide_element")
}

function setQueryParams() {
    var n = uping.getUrlVars(), t = document.getElementById(n.term);
    n.la && (document.getElementById("loanamount").value = n.la);
    t && (t.checked = !0);
    n.fn && (document.getElementById("firstname").value = n.fn);
    n.ln && (document.getElementById("lastname").value = n.ln);
    appExtensions = getAppExtensions(cookies);
    console.log(uping)
}

function getAppExtensions(n) {
    var r, i, t;
    if (n) {
        r = ["la", "term", "fn", "ln", "em", "campaign", "id", "subid"];
        i = [];
        for (t in n) r.indexOf(t) == -1 && i.push({Name: t, Value: n[t]});
        return i
    }
}

function appendQueryParams(n, t, i) {
    if (!t && !i || n.indexOf(t) > 0) return n;
    var r = n.indexOf("?") > 0;
    return r ? n + `&${t}=${i}` : n + `?${t}=${i}`
}

// function checkMobileNumber() {
//     'on yer bike'
// }

function checkWorkNumber() {
}

function toggleOtherLoanPurpose() {
    var i = document.getElementById("other_loan_purpose"), n = document.getElementById("otherLoanPurposeFields"),
        t = document.getElementById("loanPurposeRadio");
    i.checked ? (n.classList.remove("hide_element"), t.classList.add("no-validate"), loanPurposeElement.innerHTML = "") : (n.classList.add("hide_element"), t.classList.remove("no-validate"))
}

function addLoanPurposeDescription(n) {
    toggleOtherLoanPurpose();
    var t = n.target.value, i = "", r = {
        0: "",
        1: "food, clothing, prescriptions, nights out and daily travel",
        3: "anything not covered in another option",
        4: "repaying other loans or credit",
        5: "buying, insuring, repairing, servicing, taxing a vehicle or motorbike",
        9: "DIY, carpets, decorating, furniture, or gardening",
        10: "day trips, weekend breaks and holidays",
        11: "washing machines, fridges, TV, phones and tablets",
        12: "birthdays, christenings, weddings, and christmas",
        13: "gas, electric, water, council tax, insurance, mortgage, rent, TV licence, TV subscription",
        14: "milestone birthday, wedding, divorce, or funeral",
        15: "education/training costs, school trips, or school uniform",
        16: "moving expenses or rental deposit",
        17: "buying or owning a pet, including insurance and vet fees",
        18: "hobbies to include playing or watching sport, season tickets and equipment",
        19: "gambling, gaming, online bingo and slots"
    };
    r[t] != undefined && (i = "Example: " + r[t]);
    loanPurposeElement.innerHTML = i
}

function toggleNetGrossMonthly(n) {
    var t = n.target.value;
    document.getElementById("net_gross_monthly").innerHTML = t == 1 ? "Gross Monthly" : "Net Monthly"
}

// function toggleRetirementPensionField() {
//     var n = document.getElementById("retirement_pension_checkbox");
//     n.checked ? showRetirementPensionField() : hideRetirementPensionField();
//     addTotalUserIncome()
// }
//
// function toggleGovernmentBenefitsField() {
//     var n = document.getElementById("government_benefits_checkbox");
//     n.checked ? showGovernmentBenefitsField() : hideGovernmentBenefitsField();
//     addTotalUserIncome()
// }
//
// function toggleOtherIncomeField() {
//     var t = document.getElementById("other_income_checkbox"), n = document.getElementById("other_benefits_field");
//     t.checked ? n.classList.remove("hide_element") : (n.classList.add("hide_element"), document.getElementById("other_income").value = "");
//     addTotalUserIncome()
// }

// function showRetirementPensionField() {
//     document.getElementById("retirement_pension_checkbox").checked = !0;
//     document.getElementById("retirement_pension_field").classList.remove("hide_element")
// }

// function hideRetirementPensionField() {
//     document.getElementById("retirement_pension_checkbox").checked = !1;
//     document.getElementById("retirement_pension_field").classList.add("hide_element");
//     document.getElementById("retirement_pension_benefits").value = "";
//     addTotalUserIncome()
// }
//
// function hideGovernmentBenefitsField() {
//     document.getElementById("government_benefits_checkbox").checked = !1;
//     document.getElementById("government_benefits_field").classList.add("hide_element");
//     document.getElementById("government_benfits").value = "";
//     addTotalUserIncome()
// }
//
// function showGovernmentBenefitsField() {
//     document.getElementById("government_benefits_checkbox").checked = !0;
//     document.getElementById("government_benefits_field").classList.remove("hide_element")
// }

function addTotalUserIncome() {
    var t, i, r, u, n, f;
    t = document.getElementById("netamount").value;
    // i = document.getElementById("retirement_pension_benefits").value;
    // r = document.getElementById("government_benfits").value;
    // u = document.getElementById("other_income").value;
    // n = document.getElementById("total_monthly_amount");
    f = document.getElementById("total_monthly_message");
    n.value = Number(t) + Number(i) + Number(r) + Number(u);
    n.dispatchEvent(new Event("input", {bubbles: !0}));
    f.innerHTML = "Your Total Monthly Income: &dollar;" + n.value
}

function toggleAddressFields() {
    var t = document.getElementById("postcode-field"), n = document.getElementById("userAddressSelect"),
        i = document.getElementById("housenamenumber"), r = document.getElementById("housestreet"),
        u = document.getElementById("citytown"), f = document.getElementById("county");
    t.classList.contains("has-success") ? (n[0].innerHTML = "Select Address Here", n.classList.remove("disabled-select"), document.getElementById("address-search").classList.remove("hide_element")) : document.getElementById("addressDiv").classList.add("hide_element");
    n.classList.add("hide_element");
    i.value = "";
    r.value = "";
    u.value = "";
    f.value = ""
}

function toggleTypeOfHousing(n) {
    // for (var t, r = n.target.value, u = document.querySelectorAll('input[name="type_of_housing"]'), f = document.querySelectorAll('input[name="number_of_renters"]'), i = 0; i < u.length; i++) u[i].checked = !1;
    // for (t = 0; t < f.length; t++) f[t].checked = !1;
    // r == "2" || r == "3" ? document.getElementById("type-of-housing").classList.remove("hide_element") : document.getElementById("type-of-housing").classList.add("hide_element")
}

function getPostalCodeInfo() {
    var n = document.getElementById("userAddressSelect"), r = document.getElementById("housenamenumber"),
        u = document.getElementById("housestreet"), f, e = document.getElementById("postcode").value,
        o = document.querySelectorAll("#userAddressSelect option"), h = document.getElementById("postcode-field"),
        c = document.getElementById("address-details"), s;
    if (e = e.replace(/[^a-z0-9+]+/gi, ""), h.classList.contains("has-success") ? (n[0].innerHTML = "Select Address Here", n.classList.remove("disabled-select"), document.getElementById("addressDiv").classList.remove("hide_element")) : c.classList.add("hide_element"), e.length > 3) {
        var i = document.getElementById("address-search"), t = new XMLHttpRequest;
        t.onreadystatechange = function () {
            var s;
            if (t.status == 0 ? (i.innerHTML = "Searching...", i.classList.add("blink"), n.classList.add("hide_element")) : (i.classList.remove("blink"), i.innerHTML = "Find Address", n.classList.remove("hide_element")), t.readyState == 4 && t.status == 200) {
                for (f = [], f = JSON.parse(this.responseText), s = 1; s < o.length; s++) o[s].remove();
                if (r.value = "", u.value = "", f.length == 1) {
                    var e = f[0], c = e.HouseNumber ? e.HouseNumber : "", l = e.HouseName ? e.HouseName : "",
                        a = e.AddressLine1 ? e.AddressLine1 : "", v = e.AddressLine2 ? e.AddressLine2 : "";
                    n.classList.add("hide_element");
                    document.getElementById("citytown").value = e.City;
                    document.getElementById("county").value = e.County;
                    document.getElementById("housenamenumber").value = (c + " " + l).trim();
                    document.getElementById("housestreet").value = (a + " " + v).trim();
                    document.getElementById("address-details").classList.remove("hide_element")
                } else f.forEach(function (t) {
                    var i = document.createElement("option"), r = t.HouseNumber ? t.HouseNumber : "",
                        u = t.HouseName ? t.HouseName : "", f = t.AddressLine1 ? t.AddressLine1 : "",
                        e = t.AddressLine2 ? t.AddressLine2 : "";
                    document.getElementById("citytown").value = t.City;
                    document.getElementById("county").value = t.County;
                    i.value = r + "," + u + "," + f + "," + e;
                    i.className = "set-postalcode";
                    i.innerHTML = r + " " + u + " " + f + " " + e;
                    n.appendChild(i)
                });
                setTimeout(() => {
                    document.getElementById("gap").scrollIntoView({behavior: "smooth"})
                }, 200)
            } else h.classList.contains("has-success") && t.status != 200 && t.status != 0 && (n[0].innerHTML = "Couldn't find address. Enter below", n.classList.add("disabled-select"), n[0].selected = !0, n.setAttribute("disabled", ""), f = [], document.getElementById("address-details").classList.remove("hide_element"), r.value = "", u.value = "", document.getElementById("citytown").value = "", document.getElementById("county").value = "");
            setTimeout(function () {
                i.innerHTML != "Find Address" && (i.innerHTML = "Find Address", i.classList.remove("blink"), n[0].innerHTML = "Couldn't find address. Enter below", n.classList.remove("hide_element"), n.classList.add("disabled-select"), n[0].selected = !0, n.setAttribute("disabled", ""), document.getElementById("address-details").classList.remove("hide_element"), r.value = "", u.value = "", document.getElementById("citytown").value = "", document.getElementById("county").value = "")
            }, 3500)
        };
        t.open("GET", "https://www.uping.uk/find/locales/postcode/" + e, !0);
        t.send()
    } else for (document.getElementById("address-details").classList.add("hide_element"), r.value = "", u.value = "", document.getElementById("citytown").value = "", document.getElementById("county").value = "", s = 1; s < o.length; s++) o[s].remove();
    n.removeAttribute("disabled");
    n.classList.remove("disabled-select");
    n[0].innerHTML = "Select Address Here";
    n.addEventListener("change", function () {
        var t = n.value.split(",");
        n.length < 2 ? (n[0].innerHTML = "Couldn't find address. Enter below", n.classList.add("disabled-select"), n.setAttribute("disabled", "")) : (n.classList.remove("disabled-select"), n[0].innerHTML = "Select Address Here", r.value = (t[0] + " " + t[1]).trim(), u.value = (t[2] + " " + t[3]).trim(), document.getElementById("address-details").classList.remove("hide_element"), n.value != "" ? document.getElementById("address-details").classList.remove("hide_element") : document.getElementById("address-details").classList.add("hide_element"));
        t.length != 4 && (r.value = "", u.value = "");
        document.querySelectorAll(".prepop-field input").forEach(function (n) {
            n.dispatchEvent(triggerInputEvent)
        })
    })
}

function autoTriggerPostCodeInfo() {
    var n = document.getElementById("addressDiv");
    setTimeout(function () {
        n.classList.contains("hide_element") && getPostalCodeInfo()
    }, 1500)
}

function handleFormSubmit(n) {
    var t = validate(n, constraints), i = document.getElementById("RequestSpecialOffer");
    showErrors(n, t || {});
    !t && i.checked ? handleSuccessWithOffer() : t ? document.getElementsByClassName("has-error")[0].scrollIntoView() : handleSuccess()
}

function showErrors(n, t) {
    _.each(n.querySelectorAll("input[name], select[name]"), function (n) {
        showErrorsForInput(n, t && t[n.name])
    })
}

function showErrorsForInput(n, t) {
    var i = closestParent(n.parentNode, "form-group"), r;
    i && (r = i.querySelector(".messages"), resetFormGroup(i), t ? (i.classList.add("has-error"), _.each(t, function (n) {
        addError(r, n)
    })) : i.classList.add("has-success"))
}

function closestParent(n, t) {
    return !n || n == document ? null : n.classList.contains(t) ? n : closestParent(n.parentNode, t)
}

function resetFormGroup(n) {
    n.classList.remove("has-error");
    n.classList.remove("has-success");
    _.each(n.querySelectorAll(".help-block.error"), function (n) {
        n.parentNode.removeChild(n)
    })
}

function addError(n, t) {
    var i = document.createElement("p");
    i.classList.add("help-block");
    i.classList.add("error");
    i.innerText = t;
    n.appendChild(i)
}

function trackProgress(n) {
    if (window.scrollTo(0, 0),
        document.getElementById("progressBar").classList.remove("hide_element"),
        document.getElementById("barStatus")) return (!n || n < 8) && (n = "8"),
        document.getElementById("barStatus").style.width = n + "%",
        document.getElementById("barStatus").innerHTML = n + "%",
        !1
}

function startCountDown(n, t) {
    var u = document.querySelector("iframe#tracking-code"), i, r;
    u.setAttribute("src", "https://leads.uping.uk/application/trackingcodes/" + n);
    navigator.userAgent.match("FB_IAB/FB4A") ? injectRedirectAsLink(t) : (i = 5, r = setInterval(function () {
        if (i < 2) return window.location.href = t, clearInterval(r), !1;
        document.getElementById("countdown").innerHTML = i;
        i -= 1
    }, 1e3))
}

function injectRedirectAsLink(n) {
    var t = document.createElement("a");
    t.href = n;
    t.title = "Redirect Link";
    t.className = "btn";
    t.innerHTML = "Proceed to your offer";
    document.getElementById("redirect-message").remove();
    document.getElementById("countdown").appendChild(t)
}

function handleSuccess() {
    var t = processFormData();
    console.log(t);

    form.classList.add("hide_element");
    progressDiv.classList.remove("hide_element");
    document.getElementsByTagName("body")[0].scrollIntoView({ behavior: "auto" });

    var n = "https://portal.loanieloans.com/api/process";
    fetch(n, { method: "POST", headers: { "Content-Type": "application/json" }, body: t })
        .then(n => n.json())
        .then(n => {
            console.log('POST::', n);
            debugger;

            var checkStatusID = n[0].CheckStatusID;
            console.log('checkStatus ID::', checkStatusID);
            debugger;

            var i = `https://portal.loanieloans.com/api/check-lead-status/${checkStatusID}`,
                t = setInterval(() => {
                    var r;
                    fetch(i, { method: "GET", headers: { "Content-Type": "application/json" } })
                        .then(n => n.json())
                        .then(n => {
                            r = n;
                            console.log('GET::', r);
                            debugger;

                            var u = r[0].CheckStatusID,
                                f = r[0].PercentageComplete,
                                e = r[0].CheckStatus,
                                i = r[0].RedirectURL;
                            console.log(u);
                            debugger;

                            if (trackProgress(f), i) {
                                console.warn("redirecting");
                                progressDiv.classList.add("hide_element");
                                countdownDiv.classList.remove("hide_element");
                                startCountDown(u, i);
                                trackFacebookConversion(r);
                                trackGoogleConversion(r);
                                trackBingConversion(u, r);
                                clearInterval(t);
                                return false;
                            }

                            if (e === "NoLenderFound" || (f === 100 && !i)) {
                                countdownDiv.classList.add("hide_element");
                                console.warn("no lender");
                                statusText.innerHTML = "Could not match you with a lender at this time. Please try again.";
                                clearInterval(t);
                                return;
                            }
                        })

                }, 2500);
        });
}




function handleSold(responseData) {
    const leadID = responseData.LeadID;
    const price = responseData.Price;
    const redirectURL = responseData.Redirect;

    // Redirect the user to the provided redirect URL
    window.location.href = redirectURL;

    // Optionally, you can also perform other actions based on the lead ID and price
    console.warn("Redirecting...");
    progressDiv.classList.add("hide_element");
    countdownDiv.classList.remove("hide_element");
}


function handleError(responseData) {
    const errorMessages = responseData.Messages;
    console.warn(errorMessages);
    statusText.innerHTML = "Application error. Please try again.";

    // Handle the error response based on the error messages
}

function handleRejected(responseData) {
    const leadID = responseData.LeadID;
    // Handle the rejected response based on the lead ID
    console.warn("no lender");
    countdownDiv.classList.add("hide_element");
    statusText.innerHTML = "Could not match you with a lender at this time. Please try again.";
    // clearInterval(requestBody);
}

function handleRejectedWithPriceReject(responseData) {
    const leadID = responseData.LeadID;
    const priceRejectAmount = responseData.PriceRejectAmount;
    // Handle the rejected response with price reject based on the lead ID and price reject amount
    console.warn("no lender");
    countdownDiv.classList.add("hide_element");
    statusText.innerHTML = "Could not match you with a lender at this time. Please try again.";
    // clearInterval(requestBody);
}

function handleRejectedWithPriceReject(responseData) {
    var leadID = responseData.LeadID;
    var priceRejectAmount = responseData.PriceRejectAmount;
    // Handle the rejected response with price reject based on the lead ID and price reject amount
}


function handleSuccessWithOffer() {
    var t = processFormDataSpecialOffer(), n;
    form.classList.add("hide_element");
    progressDiv.classList.remove("hide_element");
    document.getElementsByTagName("body")[0].scrollIntoView({behavior: "auto"});
    n = "https://leads.uping.uk/application/submit";
    fetch(n, {method: "POST", headers: {"Content-Type": "application/json"}, body: t}).then(n => n.json()).then(n => {
        trackFacebookSubmission();
        var i = "https://leads.uping.uk" + n.StatusCheckUrl, t = setInterval(() => {
            var r;
            fetch(i, {method: "GET", headers: {"Content-Type": "application/json"}}).then(n => n.json()).then(n => {
                r = n;
                var f = r.CorrelationId, u = r.PercentageComplete, e = r.Status, i = r.RedirectionUrl;
                if (trackProgress(u), i) return console.warn("redirecting"), progressDiv.classList.add("hide_element"), countdownDiv.classList.remove("hide_element"), startCountDown(f, i), trackFacebookConversion(r), trackGoogleConversion(r), clearInterval(t), !1;
                if (e == "Rejected" || u == 100 && !i) {
                    countdownDiv.classList.add("hide_element");
                    console.warn("no lender");
                    statusText.innerHTML = "Could not match you with a lender at this time. Please try again.";
                    clearInterval(t);
                    return
                }
            }).catch(i => {
                var o = n, e;
                clearInterval(t);
                var r = document.getElementById("error-list"), u = document.getElementById("inject-errors"),
                    f = o.Errors;
                console.log(f);
                u.innerHTML = "";
                f.forEach(function (n) {
                    return u.innerHTML += "<p>" + n + "<\/p>"
                });
                r.classList.remove("hide_element");
                progressDiv.classList.add("hide_element");
                form.classList.remove("hide_element");
                e = document.querySelectorAll(".section.section-form");
                e.forEach(n => {
                    n.style.display = "block"
                });
                r.scrollIntoView();
                window.scrollBy({top: -200, behavior: "smooth"});
                console.error("Error:", i)
            })
        }, 2500)
    }).catch(n => {
        console.error("Error:", n)
    })
}

function showCreditModal() {
    var n = document.getElementById("firstname").value, t = document.getElementById("lastname").value,
        i = document.getElementById("offer_cardname");
    i.value = n + " " + t;
    opaque.style.display = "block";
    creditModal.classList.remove("hide_element")
}

function submitForm() {
    // offerCheckbox.checked && (opaque.style.display = "none", creditModal.classList.add("hide_element"), offerCheckbox.checked = !1);
    nextPrev(1);
    var n = validateForm();
    console.log("test " + n);
    n && handleSuccess()
}

function submitFormWithOffer() {
    nextPrev(1);
    var n = validateForm();
    n ? handleSuccessWithOffer() : currentSection != 7 && (opaque.style.display = "none", creditModal.classList.add("hide_element"), offerCheckbox.checked = !1)
}

function showSection(n) {
    var t = document.getElementsByClassName("section");
    t[n] != undefined && (t[n].scrollIntoView({behavior: "smooth"}), fixStepIndicator(n))
}

function nextPrev(n) {
    if (!validateForm()) return !1;
    currentSection = currentSection + n;
    showSection(currentSection)
}

function validateForm() {
    var n, t, i, u = !0, f = !1, s, h;
    if (n = document.getElementsByClassName("section"), n[currentSection] === undefined) return undefined;
    t = n[currentSection].querySelectorAll("input, textarea, select");
    var r = n[currentSection].querySelectorAll("div.radio-class"),
        e = n[currentSection].querySelectorAll(".hide_element input, .hide_element select, #userAddressSelect, #homephone, .no-validate input"),
        o = n[currentSection].querySelectorAll(".hide_element div.radio-class.radio_employer, .hide_element .radio-class"),
        c = n[currentSection].querySelectorAll(".has-error");
    for (e = [].slice.call(e), o = [].slice.call(o), t = [].slice.call(t).filter(function (n) {
        return this.indexOf(n) < 0
    }, e), r = [].slice.call(r).filter(function (n) {
        return this.indexOf(n) < 0
    }, o), u = c.length > 0 ? !1 : !0, i = 0; i < t.length; i++) t[i].value == "" ? (t[i].className += " invalid", u = !1) : t[i].classList.remove("invalid");
    return (s = 0, r.length ? r.forEach(function (n) {
        var i = n.querySelectorAll("input"), t = [];
        i.forEach(function (n) {
            t.push(n.checked)
        });
        t.indexOf(!0) < 0 ? n.parentNode.classList.add("invalid") : (n.parentNode.classList.remove("invalid"), s++)
    }) : f = !0, s == r.length && (f = !0), u && f) ? !0 : (h = document.querySelectorAll(".invalid, .has-error")[0], h.scrollIntoView(), window.scrollBy({
        top: -250,
        behavior: "smooth"
    }), u && f)
}

function fixStepIndicator(n) {
    for (var i = document.getElementsByClassName("section"), t = 0; t < i.length; t++) i[t].className = i[t].className.replace(" active", "");
    i[n].className += " active"
}

function showJobFields(n) {
    var t = incomeMessageDiv.classList.contains("hide_element"), i = n.target.value;
    toggleNetGrossMonthly(n);
    jobFields.classList.remove("hide_element");
    jobFields.classList.add("show_element");
    // document.getElementById("netamount").value = "";
    // hideRetirementPensionField();
    // hideGovernmentBenefitsField();
    // document.getElementById("other_income_checkbox").checked = !1;
    // document.getElementById("other_benefits_field").classList.add("hide_element");
    t || hideIncomeMessage(i)
}

function hideJobFields(n) {
    var i = incomeMessageDiv.classList.contains("hide_element");
    let t = n.target.value;
    toggleNetGrossMonthly(n);
    jobFields.classList.remove("show_element");
    jobFields.classList.add("hide_element");
    console.log(i);
    // t == 5 && (document.getElementById("netamount").value = "0", hideGovernmentBenefitsField(), showRetirementPensionField(), addTotalUserIncome());
    // (t == 6 || t == 7) && (document.getElementById("netamount").value = "0", hideRetirementPensionField(), showGovernmentBenefitsField(), addTotalUserIncome());
    i && showIncomeMessage(t)
}

function showIncomeMessage(n) {
    // if (incomeMessageDiv.classList.remove("hide_element"), n != 1) {
    //     var t = new XMLHttpRequest;
    //     t.open("POST", "https://leads.uping.uk/application/metric/benefitsincomemessage/display", !0);
    //     t.send("")
    // }
}

function hideIncomeMessage(n) {
    // if (incomeMessageDiv.classList.add("hide_element"), n != 1) {
    //     var t = new XMLHttpRequest;
    //     t.open("POST", "https://leads.uping.uk/application/metric/benefitsincomemessage/change", !0);
    //     t.send("")
    // }
}

function showEmployerMonths() {
    // document.getElementById("employer-months").classList.remove("hide_element")
}

function hideEmployerMonths() {
    // var n = document.querySelectorAll('input[name="radio_employerMonths"]');
    // n.forEach(function (n) {
    //     n.checked = !1
    // });
    // document.getElementById("employer-months").classList.add("hide_element")
}

function showAddressMonths() {
    // document.getElementById("address-months").classList.remove("hide_element")
}

function hideAddressMonths() {
    // var n = document.querySelectorAll('input[name="radio_addressMonths"]');
    // n.forEach(function (n) {
    //     n.checked = !1
    // });
    // document.getElementById("address-months").classList.add("hide_element")
}

function showBankMonths() {
    // document.getElementById("bank-months").classList.remove("hide_element")
}

function hideBankMonths() {
    // var n = document.querySelectorAll('input[name="radio_bankMonths"]');
    // n.forEach(function (n) {
    //     n.checked = !1
    // });
    // document.getElementById("bank-months").classList.add("hide_element")
}

function dobToEpoch() {
    var n = document.getElementById("dob").value;
    return n.length == 0 && console.error("No DOB"), "/Date(" + String(moment.utc(n, "DD/MM/YYYY").set({
        hour: 12,
        minute: 0,
        second: 0,
        millisecond: 0
    }).valueOf()) + ")/"
}

function getIpAddress(n) {
    var t = new XMLHttpRequest;
    // return '127.0.0.1'
    return t.open("GET", n, !1), t.send(null), t.response.replace(/['"]+/g, "")
}

function createImpression() {
    var t = document.referrer, i = uping.getVisitCookieName(), r = JSON.parse(uping.readVisitCookie(i)), n;
    if (r == undefined) return uping.createVisitCookie(), console.log(uping.getVisitCookieName()), n = new XMLHttpRequest, n.open("POST", "https://leads.uping.uk/application/impression/" + uping.defaultAffiliate, !1), n.send(t), n.responseText
}

function getLoanProceedUse() {
    var n = document.querySelector('input[name="radio_purpose"]:checked'),
        t = document.getElementById("loanPurposeFromSelect");
    return n.value != "0" ? Number(n.value) : Number(t.value)
}

function dateOfBirth() {
    var n = document.getElementById("dob").value;
    return n.split('/');
}

function nextPayDate() {
    var n = document.getElementById("nextPayDate").value;
    return n.split('/');
}

function followingPayDate() {
    var n = document.getElementById("followingPayDate").value;
    return n.split('/');
}


function processFormData() {
    var t = calculateIncome(),
        r = calculateBank(),
        u = calculateMoveIn(),
        f = document.getElementById("employername").value.length > 0 ? document.getElementById("employername").value : "Unemployed",
        e = document.getElementById("jobtitle").value.length > 0 ? document.getElementById("jobtitle").value : "Unemployed",
        o = document.getElementById("employmentindustry").value.length > 0 ? Number(document.getElementById("employmentindustry").value) : 'Other',
        s = dobToEpoch(),
        n = document.referrer,
        // h = '127.0.0.1',
        h = getIpAddress("https://portal.loanieloans.com/api/get_ip"),
        // h = 'loanieloans.com'
        dateOfBirthDates = dateOfBirth(),
        nextPayDates = nextPayDate(),
        followingPayDates = followingPayDate(),
        // bankSortcode = bankSortCode(),
        c = getLoanProceedUse(),
        l = uping.defaultAffiliate,
        i;


    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const affiliate_id = urlParams.get('affiliate_id') ?? '0001';
    const offer_id = urlParams.get('offer_id')  ?? '2';
    const transaction_id = urlParams.get('transaction_id')  ?? '';

    debugger


    if (!l) throw"Affiliate Id not detected. Fallback to Loanie Default";
    return cookies && cookies.gclid && (n = appendQueryParams(n, "gclid", cookies.gclid)), i = {
        campaign: uping.defaultCampaign,
        affiliate_id: document.getElementById("affiliate_id").value ?? uping.defaultAffiliate,
        offer_id:  document.getElementById("offer_id").value ?? '',
        transaction_id: document.getElementById("transaction_id").value ?? '',
        aff_sub: document.getElementById("aff_sub").value ?? 'null',
        aff_sub2: document.getElementById("aff_sub2").value ?? 'null',
        aff_sub3: document.getElementById("aff_sub3").value ?? 'null',
        aff_sub4: document.getElementById("aff_sub4").value ?? 'null',
        aff_sub5: document.getElementById("aff_sub5").value ?? 'null',
        istest: false,
        subid: uping.defaultSubAffiliate,
        timeout: 210,
        minCommissionAmount: 0.00,
        maxCommissionAmount: 0.00,
        source: {
            userAgent : window.navigator.userAgent,
            ipAddress: h,
            creationUrl: 'www.loanieloans.com',
            referringUrl: 'www.loanieloans.com',
        },
        loan: {
            loanAmount: Number(document.getElementById("loanAmount").value.replace(/\D/g, "")),
            loanTerms: Number(document.querySelector('input[name="term_radio"]:checked').value),
            loanPurpose: Number(document.querySelector('input[name="radio_purpose"]:checked').value),
        },
        applicant: {
            nameTitle: Number(document.querySelector('input[name="radio_titles"]:checked').value),
            firstName: document.getElementById("firstname").value,
            lastName: document.getElementById("lastname").value,
            dateOfBirthDay: dateOfBirthDates[0],
            dateOfBirthMonth: dateOfBirthDates[1],
            dateOfBirthYear: dateOfBirthDates[2],
            email: document.getElementById("email").value,
            homePhoneNumber: document.getElementById("homephone").value.length > 0 ? document.getElementById("homephone").value : document.getElementById("mobilephone").value,
            cellPhoneNumber: document.getElementById("mobilephone").value,
            workPhoneNumber: document.getElementById("workphone").value,
            dependants: Number(document.querySelector('input[name="radio_dependents"]:checked').value),
            numberOfAdults: Number(document.querySelector('input[name="radio_adultsLivingWith"]:checked').value),
            maritalStatus: Number(document.querySelector('input[name="radio_marital"]:checked').value),
            ssn: document.getElementById("ssn").value,
            drivingLicenseNumber: document.getElementById("drivingLicenseNumber").value,
            inMilitary: Number(document.querySelector('input[name="radio_military"]:checked').value),
            drivingLicenseState: document.getElementById("drivingLicenseState").value,
            callTime: Number(document.querySelector('input[name="radio_best_time_to_call"]:checked').value),
            creditType: Number(document.querySelector('input[name="radio_credit_score"]:checked').value),
        },
        employer: {
            employerName: f,
            jobTitle: e,
            employmentIndustry: Number(document.getElementById("employmentindustry").value),
            monthsAtEmployer: document.querySelector('input[name="radio_employerYears"]:checked').value,
            incomeSource: Number(document.querySelector('input[name="radio_source"]:checked').value),
            incomeCycle: Number(document.querySelector('input[name="radio_frequency"]:checked').value),
            monthlyIncome: Number(document.getElementById("netamount").value),
            incomePaymentType: Number(document.querySelector('input[name="radio_payment"]:checked').value),
            nextPayDateDay: nextPayDates[0],
            nextPayDateMonth: nextPayDates[1],
            nextPayDateYear: nextPayDates[2],
            followingPayDateDay: followingPayDates[0],
            followingPayDateMonth: followingPayDates[1],
            followingPayDateYear: followingPayDates[2],
        },
        residence: {
            houseNumber: document.getElementById("housenamenumber").value,
            addressStreet1: document.getElementById("housestreet").value,
            city: document.getElementById("citytown").value,
            addressCountryCode: "us",
            state: document.getElementById("county").value,
            monthsAtAddress: Number(document.querySelector('input[name="radio_addressYears"]:checked').value),
            zip: document.getElementById("postcode").value,
            residentialStatus: Number(document.querySelector('input[name="radio_residential"]:checked').value),
            typeOfHousing: document.querySelector('input[name="type_of_housing"]:checked') ? Number(document.querySelector('input[name="type_of_housing"]:checked').value) : 0,
            numberOfRenters: document.querySelector('input[name="number_of_renters"]:checked') ? Number(document.querySelector('input[name="number_of_renters"]:checked').value) : null,
            monthlyMortgageRent: Number(document.getElementById("mortgagerent").value),

        },
        bank: {
            bankName: document.getElementById("bankName").value,
            bankAccountNumber: document.getElementById("accountnumber").value,
            monthsAtBank: Number(document.querySelector('input[name="radio_bankYears"]:checked').value),
            bankAccountType: Number(document.querySelector('input[name="radio_primary_card"]:checked').value),
            bankRoutingNumber: document.getElementById("sortcode").value,
            directDeposit: 'yes',

        },
        consent: {
            consentFinancial: !0,
            consentToCreditSearch: !0,
            consentToMarketingEmails: document.getElementById("email-marketing-consent").checked,
            consentToMarketingSms: document.getElementById("sms-marketing-consent").checked,
            consentToMarketingPhone: document.getElementById("phone-marketing-consent").checked,
        },
        additional: {
            // bestTimeToCall: Number(document.querySelector('input[name="radio_best_time_to_call"]:checked').value),
            // creditScore: Number(document.querySelector('input[name="radio_credit_score"]:checked').value),
        },
    }, JSON.stringify(i)
}


function processFormDataSpecialOffer() {
    var t = calculateIncome(),
        r = calculateBank(),
        u = calculateMoveIn(),
        f = document.getElementById("employername").value.length > 0 ? document.getElementById("employername").value : "Unemployed",
        e = document.getElementById("jobtitle").value.length > 0 ? document.getElementById("jobtitle").value : "Unemployed",
        // o = document.getElementById("employmentindustry").value.length > 0 ? Number(document.getElementById("employmentindustry").value) : 'Other',
        s = dobToEpoch(),
        n = document.referrer,
        // h = '127.0.0.1',
        h = getIpAddress("https://portal.loanieloans.com/api/geo/ip"),
        dateOfBirthDates = dateOfBirth(),
        nextPayDates = nextPayDate(),
        followingPayDates = followingPayDate(),
        // bankSortcode = bankSortCode(),
        c = getLoanProceedUse(),
        l = uping.defaultAffiliate,
        i;


    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const vid = urlParams.get('vid') ?? 'AFF1000';
    const oid = urlParams.get('oid')  ?? '1';
    const transaction_id = urlParams.get('transaction_id')  ?? '';
    const aff_sub = urlParams.get('aff_sub')  ?? '';
    const aff_sub2 = urlParams.get('aff_sub2')  ?? '';
    const aff_sub3 = urlParams.get('aff_sub3')  ?? '';
    const aff_sub4 = urlParams.get('aff_sub4')  ?? '';
    const aff_sub5 = urlParams.get('aff_sub5')  ?? '';
    const fb_pix = urlParams.get('fb_pix')  ?? '';

    debugger


    if (!l) throw"Affiliate Id not detected. Fallback to Loanie Default";
    return cookies && cookies.gclid && (n = appendQueryParams(n, "gclid", cookies.gclid)), i = {
        campaign: uping.defaultCampaign,
        vid: vid ?? uping.defaultAffiliate,
        oid:  oid ??  1,
        transaction_id: transaction_id ?? '',
        aff_sub: aff_sub ?? '',
        aff_sub2: aff_sub2 ?? '',
        aff_sub3: aff_sub3 ?? '',
        aff_sub4: aff_sub4 ?? '',
        aff_sub5: aff_sub5 ?? '',
        // fb_pix: params.fbpix ?? '',
        istest: true,
        response_type: 'json',
        subid: uping.defaultSubAffiliate,
        timeout: 210,
        minCommissionAmount: 0.00,
        maxCommissionAmount: 0.00,
        source: {
            userAgent : window.navigator.userAgent,
            ipAddress: h,
            creationUrl: 'https://loanieloans.com',
            referringUrl: 'https://loanieloans.com',
        },
        loan: {
            loanAmount: Number(document.getElementById("loanAmount").value.replace(/\D/g, "")),
            loanTerms: Number(document.querySelector('input[name="term_radio"]:checked').value),
            loanPurpose: document.querySelector('input[name="radio_purpose"]:checked').value,
            // recentLoanCount: Number(document.querySelector('input[name="radio_loans_90Days"]:checked').value),

        },
        applicant: {
            nameTitle: Number(document.querySelector('input[name="radio_titles"]:checked').value),
            firstName: document.getElementById("firstname").value,
            lastName: document.getElementById("lastname").value,
            dateOfBirthDay: dateOfBirthDates[0],
            dateOfBirthMonth: dateOfBirthDates[1],
            dateOfBirthYear: dateOfBirthDates[2],
            email: document.getElementById("email").value,
            homePhoneNumber: document.getElementById("homephone").value.length > 0 ? document.getElementById("homephone").value : document.getElementById("mobilephone").value,
            cellPhoneNumber: document.getElementById("mobilephone").value,
            workPhoneNumber: document.getElementById("workphone").value,
            dependants: Number(document.querySelector('input[name="radio_dependents"]:checked').value),
            numberOfAdults: Number(document.querySelector('input[name="radio_adultsLivingWith"]:checked').value),
            maritalStatus: Number(document.querySelector('input[name="radio_marital"]:checked').value),
            ssn: document.getElementById("ssn").value,
            drivingLicenseNumber: document.getElementById("drivingLicenseNumber").value,
            inMilitary: Number(document.querySelector('input[name="radio_military"]:checked').value),
            drivingLicenseState: document.getElementById("drivingLicenseState").value,
        },
        employer: {
            employerName: f,
            jobTitle: e,
            employmentIndustry: document.getElementById("employmentindustry").value,
            monthsAtEmployer: document.querySelector('input[name="radio_employerYears"]:checked').value,
            incomeSource: document.querySelector('input[name="radio_source"]:checked').value,
            incomeCycle: document.querySelector('input[name="radio_frequency"]:checked').value,
            monthlyIncome: Number(document.getElementById("netamount").value),
            incomePaymentType: document.querySelector('input[name="radio_payment"]:checked').value,
            nextPayDateDay: nextPayDates[0],
            nextPayDateMonth: nextPayDates[1],
            nextPayDateYear: nextPayDates[2],
            followingPayDateDay: followingPayDates[0],
            followingPayDateMonth: followingPayDates[1],
            followingPayDateYear: followingPayDates[2],
            // governmentBenefitsAmount: Number(document.getElementById("government_benfits").value),
            // pensionAmount: Number(document.getElementById("retirement_pension_benefits").value),
            // otherIncomeAmount: Number(document.getElementById("other_income").value),
        },
        residence: {
            houseName: document.getElementById("housenamenumber").value,
            addressStreet1: document.getElementById("housestreet").value,
            city: document.getElementById("citytown").value,
            addressCountryCode: "GB",
            state: document.getElementById("county").value,
            monthsAtAddress: Number(document.querySelector('input[name="radio_addressYears"]:checked').value),
            zip: document.getElementById("postcode").value,
            residentialStatus: Number(document.querySelector('input[name="radio_residential"]:checked').value),
            typeOfHousing: document.querySelector('input[name="type_of_housing"]:checked') ? Number(document.querySelector('input[name="type_of_housing"]:checked').value) : 0,
            numberOfRenters: document.querySelector('input[name="number_of_renters"]:checked') ? Number(document.querySelector('input[name="number_of_renters"]:checked').value) : null,
            monthlyMortgageRent: Number(document.getElementById("mortgagerent").value),

        },
        // expense: {
        //     utilitiesExpense: Number(document.getElementById("monthlycreditcommitments").value),
        //     monthlyRepayments: Number(document.getElementById("utilities").value),
        //     foodExpense: Number(document.getElementById("transport").value),
        //     transportExpense: Number(document.getElementById("food").value),
        //     otherExpense: Number(document.getElementById("otherregularexpenses").value),
        // },

        bank: {
            bankName: document.getElementById("bankName").value,
            bankAccountNumber: document.getElementById("accountnumber").value,
            monthsAtBank: Number(document.querySelector('input[name="radio_bankYears"]:checked').value),
            bankAccountType: document.querySelector('input[name="radio_primary_card"]:checked').value,
            // bankRoutingNumber: document.getElementById("sortcode").value,
            bankRoutingNumber: document.getElementById("sortcode").value,
        },
        consent: {
            consentFinancial: !0,
            consentToCreditSearch: !0,
            consentToMarketingEmails: document.getElementById("email-marketing-consent").checked,
            consentToMarketingSms: document.getElementById("sms-marketing-consent").checked,
            consentToMarketingPhone: document.getElementById("phone-marketing-consent").checked,
        },
        additional: {
            bestTimeToCall: Number(document.querySelector('input[name="radio_best_time_to_call"]:checked').value),
            creditScore: Number(document.querySelector('input[name="radio_credit_score"]:checked').value),
        },
        SpecialOffer: {
            Type: 1,
            Parameters: [{Name: "NameOnCard", Value: document.getElementById("offer_cardname").value}, {
                Name: "CardCvv",
                Value: document.getElementById("offer_cardcvv").value
            }, {
                Name: "CardNumber",
                Value: document.getElementById("offer_cardnumber").value
            }, {
                Name: "CardExpirationMonth",
                Value: document.getElementById("offer_expMonth").value
            }, {Name: "CardExpirationYear", Value: document.getElementById("offer_expYear").value}, {
                Name: "CardType",
                Value: document.getElementById("offer_cardtype").value
            }]
        }
    }, JSON.stringify(i)
}

function trackFacebookSubmission() {
    try {
        fbq("track", "SubmitApplication")
    } catch (n) {
        console.error(n)
    }
}

function trackFacebookConversion(n) {
    var t = n.EstimatedCommission.Amount, i = String(n.EstimatedCommission.CurrencyCode) || "GBP";
    try {
        fbq("track", "Purchase", {value: t, currency: i})
    } catch (r) {
        console.error(r)
    }
}

function trackGoogleConversion(n) {
    fillEnhancedConversionData();
    var t = n.EstimatedCommission.Amount, i = String(n.EstimatedCommission.CurrencyCode) || "GBP";
    try {
        gtag("event", "conversion", {send_to: "", value: t, currency: i})
    } catch (r) {
        console.error(r)
    }
}

function trackBingConversion(n, t) {
    var i = t.EstimatedCommission.Amount, r = String(t.EstimatedCommission.CurrencyCode) || "GBP";
    try {
        window.uetq = window.uetq || [];
        window.uetq.push("event", "purchase", {revenue_value: i, currency: r})
    } catch (u) {
        console.error(u)
    }
}

function fillEnhancedConversionData() {
    var n = document.getElementById("email").value;
    enhanced_conversion_data = {email: n}
}

function calculateMoveIn() {
    var n = document.querySelector('input[name="radio_addressMonths"]:checked'), t = n ? n.value : "0",
        i = document.querySelector('input[name="radio_addressYears"]:checked').value,
        r = Number(t.replace(/\D/g, "")) / 12, u = Number(i.replace(/\D/g, "")), f = (r + u) * 365,
        e = moment.utc().subtract(f, "days").format("ll");
    return "/Date(" + String(moment.utc(e, "MMM Do YYYY").set({
        hour: 12,
        minute: 0,
        second: 0,
        millisecond: 0
    }).valueOf()) + ")/"
}

function calculateBank() {
    var n = document.querySelector('input[name="radio_bankMonths"]:checked'),
        t = document.querySelector('input[name="radio_bankYears"]:checked').value, i = n ? n.value : "0",
        r = Number(i.replace(/\D/g, "")) / 12, u = Number(t.replace(/\D/g, "")), f = (r + u) * 365,
        e = moment.utc().subtract(f, "days").format("ll");
    return "/Date(" + String(moment.utc(e, "MMM Do YYYY").set({
        hour: 12,
        minute: 0,
        second: 0,
        millisecond: 0
    }).valueOf()) + ")/"
}

function calculateIncome() {
    var f, e, o, p = document.querySelector('input[name="radio_source"]:checked').value,
        a = document.querySelector('input[name="radio_frequency"]:checked').value, w, v, b, d, g, y, nt, s, h, i, c, u,
        l;
    if (p == "5" || p == "6" || p == "7") o = moment.utc().subtract(1, "year").format("ll"); else {
        w = document.querySelector('input[name="radio_employerMonths"]:checked');
        employmentyears = document.querySelector('input[name="radio_employerYears"]:checked').value;
        employmentmonths = w ? w.value : "0";
        var tt = Number(employmentmonths.replace(/\D/g, "")) / 12, it = Number(employmentyears.replace(/\D/g, "")),
            rt = (tt + it) * 365;
        o = moment.utc().subtract(rt, "days").format("ll")
    }
    if (o = "/Date(" + String(moment.utc(o, "MMM Do YYYY").set({
        hour: 12,
        minute: 0,
        second: 0,
        millisecond: 0
    }).valueOf()) + ")/", a == "1") {
        v = moment.utc().endOf("week").subtract(1, "days").format("ll");
        b = moment.utc().endOf("week").subtract(1, "days").add(1, "weeks").format("ll");
        const t = moment.utc().format("ll"), n = moment.utc().format("llll").slice(0, 3);
        (v == t || n == "Sun" || n == "Sat") && (v = moment.utc().endOf("week").subtract(1, "days").add(1, "weeks").format("ll"), b = moment.utc().endOf("week").subtract(1, "days").add(2, "weeks").format("ll"));
        f = "/Date(" + String(moment.utc(v, "MMM Do YYYY").set({
            hour: 12,
            minute: 0,
            second: 0,
            millisecond: 0
        }).valueOf()) + ")/";
        e = "/Date(" + String(moment.utc(b, "MMM Do YYYY").set({
            hour: 12,
            minute: 0,
            second: 0,
            millisecond: 0
        }).valueOf()) + ")/"
    } else if (a == "2") {
        for (var k = moment.utc().startOf("year").add(2, "weeks").endOf("week").subtract(1, "day").format("llll"), ut = moment.utc().add(4, "weeks").endOf("week").subtract(1, "days").format("ll"), n, t = [], r = 0; new Date(k) < new Date(ut);) r += 2, n = moment.utc().startOf("year").add(1, "weeks").endOf("week").subtract(1, "day").format("ll"), k = moment.utc().startOf("year").add(1, "weeks").endOf("week").subtract(1, "day").add(r, "weeks").format("ll"), t.push(n), t.push(k);
        t = t.reduce(function (n, t) {
            return n.indexOf(t) < 0 && n.push(t), n
        }, []);
        t = t.filter(function (n) {
            return new Date(n) > new Date(moment.utc().format("ll"))
        });
        d = t[0];
        g = t[1];
        f = "/Date(" + String(moment.utc(d, "MMM Do YYYY").set({
            hour: 12,
            minute: 0,
            second: 0,
            millisecond: 0
        }).valueOf()) + ")/";
        e = "/Date(" + String(moment.utc(g, "MMM Do YYYY").set({
            hour: 12,
            minute: 0,
            second: 0,
            millisecond: 0
        }).valueOf()) + ")/"
    } else if (a == "3") {
        for (y = Math.floor(moment.utc().startOf("year").add(0, "months").endOf("month").daysInMonth() / 2), n = moment.utc().startOf("year").add(0, "months").endOf("month").subtract(y, "days"), nt = moment.utc().add(4, "months").format("ll"), r = 0, s = []; new Date(n.format("ll")) < new Date(nt);) y = Math.floor(moment.utc().startOf("year").add(r, "months").endOf("month").daysInMonth() / 2), n = moment.utc().startOf("year").add(r, "months").endOf("month").subtract(y, "days"), h = moment.utc().startOf("year").add(r, "months").endOf("month"), n.format("dddd") == "Sunday" && n.add(1, "days"), h.format("dddd") == "Sunday" && h.subtract(2, "days"), n.format("dddd") == "Saturday" && n.subtract(1, "days"), h.format("dddd") == "Saturday" && h.subtract(1, "days"), s.push(n.format("ll"), h.format("ll")), r++;
        s = s.filter(function (n) {
            return new Date(n) > new Date(moment.utc().format("ll"))
        });
        const t = s[0], i = s[1];
        f = "/Date(" + String(moment.utc(t, "MMM Do YYYY").set({
            hour: 12,
            minute: 0,
            second: 0,
            millisecond: 0
        }).valueOf()) + ")/";
        e = "/Date(" + String(moment.utc(i, "MMM Do YYYY").set({
            hour: 12,
            minute: 0,
            second: 0,
            millisecond: 0
        }).valueOf()) + ")/"
    } else if (a == "4" || a == "9") {
        i = moment.utc().endOf("month").format("ll");
        c = moment.utc().endOf("month").format("llll").slice(0, 3);
        u = moment.utc().add(1, "months").endOf("month").format("ll");
        l = moment.utc().add(1, "months").endOf("month").format("llll").slice(0, 3);
        c == "Sun" && (i = moment.utc().endOf("month").subtract(2, "days").format("ll"));
        l == "Sun" && (u = moment.utc().add(1, "months").endOf("month").subtract(2, "days").format("ll"));
        c == "Sat" && (i = moment.utc().endOf("month").subtract(1, "days").format("ll"));
        l == "Sat" && (u = moment.utc().add(1, "months").endOf("month").subtract(1, "days").format("ll"));
        const n = moment.utc().format("ll");
        i == n && (i = moment.utc().add(1, "months").endOf("month").format("ll"), c = moment.utc().add(1, "months").endOf("month").format("llll").slice(0, 3), u = moment.utc().add(2, "months").endOf("month").format("ll"), l = moment.utc().add(2, "months").endOf("month").format("llll").slice(0, 3), c == "Sun" && (i = moment.utc().add(1, "months").endOf("month").subtract(2, "days").format("ll")), l == "Sun" && (u = moment.utc().add(2, "months").endOf("month").subtract(2, "days").format("ll")), c == "Sat" && (i = moment.utc().add(1, "months").endOf("month").subtract(1, "days").format("ll")), l == "Sat" && (u = moment.utc().add(2, "months").endOf("month").subtract(1, "days").format("ll")));
        f = "/Date(" + String(moment.utc(i, "MMM Do YYYY").set({
            hour: 12,
            minute: 0,
            second: 0,
            millisecond: 0
        }).valueOf()) + ")/";
        e = "/Date(" + String(moment.utc(u, "MMM Do YYYY").set({
            hour: 12,
            minute: 0,
            second: 0,
            millisecond: 0
        }).valueOf()) + ")/"
    }
    return console.log({employmentstarted: o, nextpaydate: f, followingpaydate: e}), {
        employmentstarted: o,
        nextpaydate: f,
        followingpaydate: e
    }
}

function brandsPopup() {
    alert("AssociatedBrands\n\nwww.tendoloan.co.uk\nwww.solusloans.co.uk\nwww.bizzyloans.co.uk\nwww.debtsolvo.co.uk")
}

function thirdPartiesPopup() {
    alert("Trusted Parties\n\nIMT Technologies Limited: 3rd Floor, 207 Regent Street, London, W1B 3HH. Email: contact@imttech.co.uk\n\nYour Social Insights Limited: Kemp House, 152-160 City Road, London, England, EC1V 2NX. Email: contact@yoursocialinsights.co.uk\n\nFortis Insolvency: 683-693 Wilmslow Road, Manchester, M20 6RE. Email: info@fortisinsolvency.co.uk\n\nDL UK: 7St Petersgate, Stockport, SK1 1EB. Email: hello@dluk-uk.com")
}

var loadingSpinner, i, appExtensions, loanPurposeElement, currentSection, jobFields, incomeMessageDiv,
    enhanced_conversion_data;
(function () {
    function nt(t) {
        function r(n, i, r, u, f, e) {
            for (; f >= 0 && e > f; f += t) {
                var o = u ? u[f] : f;
                r = i(r, n[o], o, n)
            }
            return r
        }

        return function (u, f, o, s) {
            f = e(f, s, 4);
            var h = !i(u) && n.keys(u), l = (h || u).length, c = t > 0 ? 0 : l - 1;
            return arguments.length < 3 && (o = u[h ? h[c] : c], c += t), r(u, f, o, h, c, l)
        }
    }

    function tt(n) {
        return function (i, r, f) {
            r = t(r, f);
            for (var o = u(i), e = n > 0 ? 0 : o - 1; e >= 0 && o > e; e += n) if (r(i[e], e, i)) return e;
            return -1
        }
    }

    function it(t, i, f) {
        return function (e, o, s) {
            var c = 0, h = u(e);
            if ("number" == typeof s) t > 0 ? c = s >= 0 ? s : Math.max(s + h, c) : h = s >= 0 ? Math.min(s + 1, h) : s + h + 1; else if (f && s && h) return s = f(e, o), e[s] === o ? s : -1;
            if (o !== o) return s = i(r.call(e, c, h), n.isNaN), s >= 0 ? s + c : -1;
            for (s = t > 0 ? c : h - 1; s >= 0 && h > s; s += t) if (e[s] === o) return s;
            return -1
        }
    }

    function rt(t, i) {
        var u = d.length, f = t.constructor, e = n.isFunction(f) && f.prototype || v, r = "constructor";
        for (n.has(t, r) && !n.contains(i, r) && i.push(r); u--;) r = d[u], r in t && t[r] !== e[r] && !n.contains(i, r) && i.push(r)
    }

    var a = this, lt = a._, s = Array.prototype, v = Object.prototype, at = Function.prototype, vt = s.push,
        r = s.slice, o = v.toString, yt = v.hasOwnProperty, pt = Array.isArray, ut = Object.keys, y = at.bind,
        ft = Object.create, p = function () {
        }, n = function (t) {
            return t instanceof n ? t : this instanceof n ? void (this._wrapped = t) : new n(t)
        }, e, t, h, f, b, k, d, c, ct, l;
    "undefined" != typeof exports ? ("undefined" != typeof module && module.exports && (exports = module.exports = n), exports._ = n) : a._ = n;
    n.VERSION = "1.8.3";
    e = function (n, t, i) {
        if (t === void 0) return n;
        switch (null == i ? 3 : i) {
            case 1:
                return function (i) {
                    return n.call(t, i)
                };
            case 2:
                return function (i, r) {
                    return n.call(t, i, r)
                };
            case 3:
                return function (i, r, u) {
                    return n.call(t, i, r, u)
                };
            case 4:
                return function (i, r, u, f) {
                    return n.call(t, i, r, u, f)
                }
        }
        return function () {
            return n.apply(t, arguments)
        }
    };
    t = function (t, i, r) {
        return null == t ? n.identity : n.isFunction(t) ? e(t, i, r) : n.isObject(t) ? n.matcher(t) : n.property(t)
    };
    n.iteratee = function (n, i) {
        return t(n, i, 1 / 0)
    };
    var w = function (n, t) {
        return function (i) {
            var e = arguments.length, r, u;
            if (2 > e || null == i) return i;
            for (r = 1; e > r; r++) for (var o = arguments[r], s = n(o), h = s.length, f = 0; h > f; f++) u = s[f], t && i[u] !== void 0 || (i[u] = o[u]);
            return i
        }
    }, et = function (t) {
        if (!n.isObject(t)) return {};
        if (ft) return ft(t);
        p.prototype = t;
        var i = new p;
        return p.prototype = null, i
    }, ot = function (n) {
        return function (t) {
            if (null != t) return t[n]
        }
    }, wt = Math.pow(2, 53) - 1, u = ot("length"), i = function (n) {
        var t = u(n);
        return "number" == typeof t && t >= 0 && wt >= t
    };
    n.each = n.forEach = function (t, r, u) {
        var f, o, s;
        if (r = e(r, u), i(t)) for (f = 0, o = t.length; o > f; f++) r(t[f], f, t); else for (s = n.keys(t), f = 0, o = s.length; o > f; f++) r(t[s[f]], s[f], t);
        return t
    };
    n.map = n.collect = function (r, u, f) {
        var s;
        u = t(u, f);
        for (var o = !i(r) && n.keys(r), h = (o || r).length, c = Array(h), e = 0; h > e; e++) s = o ? o[e] : e, c[e] = u(r[s], s, r);
        return c
    };
    n.reduce = n.foldl = n.inject = nt(1);
    n.reduceRight = n.foldr = nt(-1);
    n.find = n.detect = function (t, r, u) {
        var f;
        return f = i(t) ? n.findIndex(t, r, u) : n.findKey(t, r, u), f !== void 0 && f !== -1 ? t[f] : void 0
    };
    n.filter = n.select = function (i, r, u) {
        var f = [];
        return r = t(r, u), n.each(i, function (n, t, i) {
            r(n, t, i) && f.push(n)
        }), f
    };
    n.reject = function (i, r, u) {
        return n.filter(i, n.negate(t(r)), u)
    };
    n.every = n.all = function (r, u, f) {
        var s;
        u = t(u, f);
        for (var o = !i(r) && n.keys(r), h = (o || r).length, e = 0; h > e; e++) if (s = o ? o[e] : e, !u(r[s], s, r)) return !1;
        return !0
    };
    n.some = n.any = function (r, u, f) {
        var s;
        u = t(u, f);
        for (var o = !i(r) && n.keys(r), h = (o || r).length, e = 0; h > e; e++) if (s = o ? o[e] : e, u(r[s], s, r)) return !0;
        return !1
    };
    n.contains = n.includes = n.include = function (t, r, u, f) {
        return i(t) || (t = n.values(t)), ("number" != typeof u || f) && (u = 0), n.indexOf(t, r, u) >= 0
    };
    n.invoke = function (t, i) {
        var u = r.call(arguments, 2), f = n.isFunction(i);
        return n.map(t, function (n) {
            var t = f ? i : n[i];
            return null == t ? t : t.apply(n, u)
        })
    };
    n.pluck = function (t, i) {
        return n.map(t, n.property(i))
    };
    n.where = function (t, i) {
        return n.filter(t, n.matcher(i))
    };
    n.findWhere = function (t, i) {
        return n.find(t, n.matcher(i))
    };
    n.max = function (r, u, f) {
        var h, o, e = -1 / 0, c = -1 / 0, s, l;
        if (null == u && null != r) for (r = i(r) ? r : n.values(r), s = 0, l = r.length; l > s; s++) h = r[s], h > e && (e = h); else u = t(u, f), n.each(r, function (n, t, i) {
            o = u(n, t, i);
            (o > c || o === -1 / 0 && e === -1 / 0) && (e = n, c = o)
        });
        return e
    };
    n.min = function (r, u, f) {
        var h, o, e = 1 / 0, c = 1 / 0, s, l;
        if (null == u && null != r) for (r = i(r) ? r : n.values(r), s = 0, l = r.length; l > s; s++) h = r[s], e > h && (e = h); else u = t(u, f), n.each(r, function (n, t, i) {
            o = u(n, t, i);
            (c > o || 1 / 0 === o && 1 / 0 === e) && (e = n, c = o)
        });
        return e
    };
    n.shuffle = function (t) {
        for (var u, e = i(t) ? t : n.values(t), o = e.length, f = Array(o), r = 0; o > r; r++) u = n.random(0, r), u !== r && (f[r] = f[u]), f[u] = e[r];
        return f
    };
    n.sample = function (t, r, u) {
        return null == r || u ? (i(t) || (t = n.values(t)), t[n.random(t.length - 1)]) : n.shuffle(t).slice(0, Math.max(0, r))
    };
    n.sortBy = function (i, r, u) {
        return r = t(r, u), n.pluck(n.map(i, function (n, t, i) {
            return {value: n, index: t, criteria: r(n, t, i)}
        }).sort(function (n, t) {
            var i = n.criteria, r = t.criteria;
            if (i !== r) {
                if (i > r || i === void 0) return 1;
                if (r > i || r === void 0) return -1
            }
            return n.index - t.index
        }), "value")
    };
    h = function (i) {
        return function (r, u, f) {
            var e = {};
            return u = t(u, f), n.each(r, function (n, t) {
                var f = u(n, t, r);
                i(e, n, f)
            }), e
        }
    };
    n.groupBy = h(function (t, i, r) {
        n.has(t, r) ? t[r].push(i) : t[r] = [i]
    });
    n.indexBy = h(function (n, t, i) {
        n[i] = t
    });
    n.countBy = h(function (t, i, r) {
        n.has(t, r) ? t[r]++ : t[r] = 1
    });
    n.toArray = function (t) {
        return t ? n.isArray(t) ? r.call(t) : i(t) ? n.map(t, n.identity) : n.values(t) : []
    };
    n.size = function (t) {
        return null == t ? 0 : i(t) ? t.length : n.keys(t).length
    };
    n.partition = function (i, r, u) {
        r = t(r, u);
        var f = [], e = [];
        return n.each(i, function (n, t, i) {
            (r(n, t, i) ? f : e).push(n)
        }), [f, e]
    };
    n.first = n.head = n.take = function (t, i, r) {
        if (null != t) return null == i || r ? t[0] : n.initial(t, t.length - i)
    };
    n.initial = function (n, t, i) {
        return r.call(n, 0, Math.max(0, n.length - (null == t || i ? 1 : t)))
    };
    n.last = function (t, i, r) {
        if (null != t) return null == i || r ? t[t.length - 1] : n.rest(t, Math.max(0, t.length - i))
    };
    n.rest = n.tail = n.drop = function (n, t, i) {
        return r.call(n, null == t || i ? 1 : t)
    };
    n.compact = function (t) {
        return n.filter(t, n.identity)
    };
    f = function (t, r, e, o) {
        for (var s, l, a, h = [], v = 0, c = o || 0, y = u(t); y > c; c++) if (s = t[c], i(s) && (n.isArray(s) || n.isArguments(s))) for (r || (s = f(s, r, e)), l = 0, a = s.length, h.length += a; a > l;) h[v++] = s[l++]; else e || (h[v++] = s);
        return h
    };
    n.flatten = function (n, t) {
        return f(n, t, !1)
    };
    n.without = function (t) {
        return n.difference(t, r.call(arguments, 1))
    };
    n.uniq = n.unique = function (i, r, f, e) {
        var o, c;
        n.isBoolean(r) || (e = f, f = r, r = !1);
        null != f && (f = t(f, e));
        for (var s = [], l = [], h = 0, a = u(i); a > h; h++) o = i[h], c = f ? f(o, h, i) : o, r ? (h && l === c || s.push(o), l = c) : f ? n.contains(l, c) || (l.push(c), s.push(o)) : n.contains(s, o) || s.push(o);
        return s
    };
    n.union = function () {
        return n.uniq(f(arguments, !0, !0))
    };
    n.intersection = function (t) {
        for (var r, i, f = [], o = arguments.length, e = 0, s = u(t); s > e; e++) if (r = t[e], !n.contains(f, r)) {
            for (i = 1; o > i && n.contains(arguments[i], r); i++) ;
            i === o && f.push(r)
        }
        return f
    };
    n.difference = function (t) {
        var i = f(arguments, !0, !0, 1);
        return n.filter(t, function (t) {
            return !n.contains(i, t)
        })
    };
    n.zip = function () {
        return n.unzip(arguments)
    };
    n.unzip = function (t) {
        for (var r = t && n.max(t, u).length || 0, f = Array(r), i = 0; r > i; i++) f[i] = n.pluck(t, i);
        return f
    };
    n.object = function (n, t) {
        for (var r = {}, i = 0, f = u(n); f > i; i++) t ? r[n[i]] = t[i] : r[n[i][0]] = n[i][1];
        return r
    };
    n.findIndex = tt(1);
    n.findLastIndex = tt(-1);
    n.sortedIndex = function (n, i, r, f) {
        var o;
        r = t(r, f, 1);
        for (var h = r(i), e = 0, s = u(n); s > e;) o = Math.floor((e + s) / 2), r(n[o]) < h ? e = o + 1 : s = o;
        return e
    };
    n.indexOf = it(1, n.findIndex, n.sortedIndex);
    n.lastIndexOf = it(-1, n.findLastIndex);
    n.range = function (n, t, i) {
        null == t && (t = n || 0, n = 0);
        i = i || 1;
        for (var u = Math.max(Math.ceil((t - n) / i), 0), f = Array(u), r = 0; u > r; r++, n += i) f[r] = n;
        return f
    };
    b = function (t, i, r, u, f) {
        if (!(u instanceof i)) return t.apply(r, f);
        var e = et(t.prototype), o = t.apply(e, f);
        return n.isObject(o) ? o : e
    };
    n.bind = function (t, i) {
        if (y && t.bind === y) return y.apply(t, r.call(arguments, 1));
        if (!n.isFunction(t)) throw new TypeError("Bind must be called on a function");
        var f = r.call(arguments, 2), u = function () {
            return b(t, u, i, this, f.concat(r.call(arguments)))
        };
        return u
    };
    n.partial = function (t) {
        var i = r.call(arguments, 1), u = function () {
            for (var f = 0, o = i.length, e = Array(o), r = 0; o > r; r++) e[r] = i[r] === n ? arguments[f++] : i[r];
            for (; f < arguments.length;) e.push(arguments[f++]);
            return b(t, u, this, this, e)
        };
        return u
    };
    n.bindAll = function (t) {
        var i, r, u = arguments.length;
        if (1 >= u) throw new Error("bindAll must be passed function names");
        for (i = 1; u > i; i++) r = arguments[i], t[r] = n.bind(t[r], t);
        return t
    };
    n.memoize = function (t, i) {
        var r = function (u) {
            var f = r.cache, e = "" + (i ? i.apply(this, arguments) : u);
            return n.has(f, e) || (f[e] = t.apply(this, arguments)), f[e]
        };
        return r.cache = {}, r
    };
    n.delay = function (n, t) {
        var i = r.call(arguments, 2);
        return setTimeout(function () {
            return n.apply(null, i)
        }, t)
    };
    n.defer = n.partial(n.delay, n, 1);
    n.throttle = function (t, i, r) {
        var f, e, s, u = null, o = 0, h;
        return r || (r = {}), h = function () {
            o = r.leading === !1 ? 0 : n.now();
            u = null;
            s = t.apply(f, e);
            u || (f = e = null)
        }, function () {
            var l = n.now(), c;
            return o || r.leading !== !1 || (o = l), c = i - (l - o), f = this, e = arguments, 0 >= c || c > i ? (u && (clearTimeout(u), u = null), o = l, s = t.apply(f, e), u || (f = e = null)) : u || r.trailing === !1 || (u = setTimeout(h, c)), s
        }
    };
    n.debounce = function (t, i, r) {
        var u, f, e, s, o, h = function () {
            var c = n.now() - s;
            i > c && c >= 0 ? u = setTimeout(h, i - c) : (u = null, r || (o = t.apply(e, f), u || (e = f = null)))
        };
        return function () {
            e = this;
            f = arguments;
            s = n.now();
            var c = r && !u;
            return u || (u = setTimeout(h, i)), c && (o = t.apply(e, f), e = f = null), o
        }
    };
    n.wrap = function (t, i) {
        return n.partial(i, t)
    };
    n.negate = function (n) {
        return function () {
            return !n.apply(this, arguments)
        }
    };
    n.compose = function () {
        var n = arguments, t = n.length - 1;
        return function () {
            for (var r = t, i = n[t].apply(this, arguments); r--;) i = n[r].call(this, i);
            return i
        }
    };
    n.after = function (n, t) {
        return function () {
            if (--n < 1) return t.apply(this, arguments)
        }
    };
    n.before = function (n, t) {
        var i;
        return function () {
            return --n > 0 && (i = t.apply(this, arguments)), 1 >= n && (t = null), i
        }
    };
    n.once = n.partial(n.before, 2);
    k = !{toString: null}.propertyIsEnumerable("toString");
    d = ["valueOf", "isPrototypeOf", "toString", "propertyIsEnumerable", "hasOwnProperty", "toLocaleString"];
    n.keys = function (t) {
        var i, r;
        if (!n.isObject(t)) return [];
        if (ut) return ut(t);
        i = [];
        for (r in t) n.has(t, r) && i.push(r);
        return k && rt(t, i), i
    };
    n.allKeys = function (t) {
        var i, r;
        if (!n.isObject(t)) return [];
        i = [];
        for (r in t) i.push(r);
        return k && rt(t, i), i
    };
    n.values = function (t) {
        for (var r = n.keys(t), u = r.length, f = Array(u), i = 0; u > i; i++) f[i] = t[r[i]];
        return f
    };
    n.mapObject = function (i, r, u) {
        r = t(r, u);
        for (var f, o = n.keys(i), h = o.length, s = {}, e = 0; h > e; e++) f = o[e], s[f] = r(i[f], f, i);
        return s
    };
    n.pairs = function (t) {
        for (var r = n.keys(t), u = r.length, f = Array(u), i = 0; u > i; i++) f[i] = [r[i], t[r[i]]];
        return f
    };
    n.invert = function (t) {
        for (var u = {}, r = n.keys(t), i = 0, f = r.length; f > i; i++) u[t[r[i]]] = r[i];
        return u
    };
    n.functions = n.methods = function (t) {
        var i = [];
        for (var r in t) n.isFunction(t[r]) && i.push(r);
        return i.sort()
    };
    n.extend = w(n.allKeys);
    n.extendOwn = n.assign = w(n.keys);
    n.findKey = function (i, r, u) {
        r = t(r, u);
        for (var f, o = n.keys(i), e = 0, s = o.length; s > e; e++) if (f = o[e], r(i[f], f, i)) return f
    };
    n.pick = function (t, i, r) {
        var c, o, l = {}, u = t, s, v, h, a;
        if (null == u) return l;
        for (n.isFunction(i) ? (o = n.allKeys(u), c = e(i, r)) : (o = f(arguments, !1, !1, 1), c = function (n, t, i) {
            return t in i
        }, u = Object(u)), s = 0, v = o.length; v > s; s++) h = o[s], a = u[h], c(a, h, u) && (l[h] = a);
        return l
    };
    n.omit = function (t, i, r) {
        if (n.isFunction(i)) i = n.negate(i); else {
            var u = n.map(f(arguments, !1, !1, 1), String);
            i = function (t, i) {
                return !n.contains(u, i)
            }
        }
        return n.pick(t, i, r)
    };
    n.defaults = w(n.allKeys, !0);
    n.create = function (t, i) {
        var r = et(t);
        return i && n.extendOwn(r, i), r
    };
    n.clone = function (t) {
        return n.isObject(t) ? n.isArray(t) ? t.slice() : n.extend({}, t) : t
    };
    n.tap = function (n, t) {
        return t(n), n
    };
    n.isMatch = function (t, i) {
        var e = n.keys(i), o = e.length, f, r, u;
        if (null == t) return !o;
        for (f = Object(t), r = 0; o > r; r++) if (u = e[r], i[u] !== f[u] || !(u in f)) return !1;
        return !0
    };
    c = function (t, i, r, u) {
        var h, a, e, s, f, l, v;
        if (t === i) return 0 !== t || 1 / t == 1 / i;
        if (null == t || null == i) return t === i;
        if (t instanceof n && (t = t._wrapped), i instanceof n && (i = i._wrapped), h = o.call(t), h !== o.call(i)) return !1;
        switch (h) {
            case"[object RegExp]":
            case"[object String]":
                return "" + t == "" + i;
            case"[object Number]":
                return +t != +t ? +i != +i : 0 == +t ? 1 / +t == 1 / i : +t == +i;
            case"[object Date]":
            case"[object Boolean]":
                return +t == +i
        }
        if (a = "[object Array]" === h, !a && ("object" != typeof t || "object" != typeof i || (e = t.constructor, s = i.constructor, e !== s && !(n.isFunction(e) && e instanceof e && n.isFunction(s) && s instanceof s) && "constructor" in t && "constructor" in i))) return !1;
        for (r = r || [], u = u || [], f = r.length; f--;) if (r[f] === t) return u[f] === i;
        if (r.push(t), u.push(i), a) {
            if (f = t.length, f !== i.length) return !1;
            for (; f--;) if (!c(t[f], i[f], r, u)) return !1
        } else {
            if (v = n.keys(t), f = v.length, n.keys(i).length !== f) return !1;
            for (; f--;) if (l = v[f], !n.has(i, l) || !c(t[l], i[l], r, u)) return !1
        }
        return r.pop(), u.pop(), !0
    };
    n.isEqual = function (n, t) {
        return c(n, t)
    };
    n.isEmpty = function (t) {
        return null == t ? !0 : i(t) && (n.isArray(t) || n.isString(t) || n.isArguments(t)) ? 0 === t.length : 0 === n.keys(t).length
    };
    n.isElement = function (n) {
        return !(!n || 1 !== n.nodeType)
    };
    n.isArray = pt || function (n) {
        return "[object Array]" === o.call(n)
    };
    n.isObject = function (n) {
        var t = typeof n;
        return "function" === t || "object" === t && !!n
    };
    n.each(["Arguments", "Function", "String", "Number", "Date", "RegExp", "Error"], function (t) {
        n["is" + t] = function (n) {
            return o.call(n) === "[object " + t + "]"
        }
    });
    n.isArguments(arguments) || (n.isArguments = function (t) {
        return n.has(t, "callee")
    });
    "function" != typeof /./ && "object" != typeof Int8Array && (n.isFunction = function (n) {
        return "function" == typeof n || !1
    });
    n.isFinite = function (n) {
        return isFinite(n) && !isNaN(parseFloat(n))
    };
    n.isNaN = function (t) {
        return n.isNumber(t) && t !== +t
    };
    n.isBoolean = function (n) {
        return n === !0 || n === !1 || "[object Boolean]" === o.call(n)
    };
    n.isNull = function (n) {
        return null === n
    };
    n.isUndefined = function (n) {
        return n === void 0
    };
    n.has = function (n, t) {
        return null != n && yt.call(n, t)
    };
    n.noConflict = function () {
        return a._ = lt, this
    };
    n.identity = function (n) {
        return n
    };
    n.constant = function (n) {
        return function () {
            return n
        }
    };
    n.noop = function () {
    };
    n.property = ot;
    n.propertyOf = function (n) {
        return null == n ? function () {
        } : function (t) {
            return n[t]
        }
    };
    n.matcher = n.matches = function (t) {
        return t = n.extendOwn({}, t), function (i) {
            return n.isMatch(i, t)
        }
    };
    n.times = function (n, t, i) {
        var u = Array(Math.max(0, n)), r;
        for (t = e(t, i, 1), r = 0; n > r; r++) u[r] = t(r);
        return u
    };
    n.random = function (n, t) {
        return null == t && (t = n, n = 0), n + Math.floor(Math.random() * (t - n + 1))
    };
    n.now = Date.now || function () {
        return (new Date).getTime()
    };
    var st = {"&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#x27;", "`": "&#x60;"}, bt = n.invert(st),
        ht = function (t) {
            var r = function (n) {
                return t[n]
            }, i = "(?:" + n.keys(t).join("|") + ")", u = RegExp(i), f = RegExp(i, "g");
            return function (n) {
                return n = null == n ? "" : "" + n, u.test(n) ? n.replace(f, r) : n
            }
        };
    n.escape = ht(st);
    n.unescape = ht(bt);
    n.result = function (t, i, r) {
        var u = null == t ? void 0 : t[i];
        return u === void 0 && (u = r), n.isFunction(u) ? u.call(t) : u
    };
    ct = 0;
    n.uniqueId = function (n) {
        var t = ++ct + "";
        return n ? n + t : t
    };
    n.templateSettings = {evaluate: /<%([\s\S]+?)%>/g, interpolate: /<%=([\s\S]+?)%>/g, escape: /<%-([\s\S]+?)%>/g};
    var g = /(.)^/, kt = {"'": "'", "\\": "\\", "\r": "r", "\n": "n", "\u2028": "u2028", "\u2029": "u2029"},
        dt = /\\|'|\r|\n|\u2028|\u2029/g, gt = function (n) {
            return "\\" + kt[n]
        };
    n.template = function (t, i, r) {
        var o, f, h;
        !i && r && (i = r);
        i = n.defaults({}, i, n.templateSettings);
        var c = RegExp([(i.escape || g).source, (i.interpolate || g).source, (i.evaluate || g).source].join("|") + "|$", "g"),
            e = 0, u = "__p+='";
        t.replace(c, function (n, i, r, f, o) {
            return u += t.slice(e, o).replace(dt, gt), e = o + n.length, i ? u += "'+\n((__t=(" + i + "))==null?'':_.escape(__t))+\n'" : r ? u += "'+\n((__t=(" + r + "))==null?'':__t)+\n'" : f && (u += "';\n" + f + "\n__p+='"), n
        });
        u += "';\n";
        i.variable || (u = "with(obj||{}){\n" + u + "}\n");
        u = "var __t,__p='',__j=Array.prototype.join,print=function(){__p+=__j.call(arguments,'');};\n" + u + "return __p;\n";
        try {
            o = new Function(i.variable || "obj", "_", u)
        } catch (s) {
            throw s.source = u, s;
        }
        return f = function (t) {
            return o.call(this, t, n)
        }, h = i.variable || "obj", f.source = "function(" + h + "){\n" + u + "}", f
    };
    n.chain = function (t) {
        var i = n(t);
        return i._chain = !0, i
    };
    l = function (t, i) {
        return t._chain ? n(i).chain() : i
    };
    n.mixin = function (t) {
        n.each(n.functions(t), function (i) {
            var r = n[i] = t[i];
            n.prototype[i] = function () {
                var t = [this._wrapped];
                return vt.apply(t, arguments), l(this, r.apply(n, t))
            }
        })
    };
    n.mixin(n);
    n.each(["pop", "push", "reverse", "shift", "sort", "splice", "unshift"], function (t) {
        var i = s[t];
        n.prototype[t] = function () {
            var n = this._wrapped;
            return i.apply(n, arguments), "shift" !== t && "splice" !== t || 0 !== n.length || delete n[0], l(this, n)
        }
    });
    n.each(["concat", "join", "slice"], function (t) {
        var i = s[t];
        n.prototype[t] = function () {
            return l(this, i.apply(this._wrapped, arguments))
        }
    });
    n.prototype.value = function () {
        return this._wrapped
    };
    n.prototype.valueOf = n.prototype.toJSON = n.prototype.value;
    n.prototype.toString = function () {
        return "" + this._wrapped
    };
    "function" == typeof define && define.amd && define("underscore", [], function () {
        return n
    })
}).call(this);
!function (n, t) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define(t) : n.moment = t()
}(this, function () {
    "use strict";

    function i() {
        return kf.apply(null, arguments)
    }

    function pe(n) {
        kf = n
    }

    function ui(n) {
        return "[object Array]" === Object.prototype.toString.call(n)
    }

    function fi(n) {
        return n instanceof Date || "[object Date]" === Object.prototype.toString.call(n)
    }

    function we(n, t) {
        for (var r = [], i = 0; i < n.length; ++i) r.push(t(n[i], i));
        return r
    }

    function ft(n, t) {
        return Object.prototype.hasOwnProperty.call(n, t)
    }

    function ei(n, t) {
        for (var i in t) ft(t, i) && (n[i] = t[i]);
        return ft(t, "toString") && (n.toString = t.toString), ft(t, "valueOf") && (n.valueOf = t.valueOf), n
    }

    function kt(n, t, i, r) {
        return gu(n, t, i, r, !0).utc()
    }

    function be() {
        return {
            empty: !1,
            unusedTokens: [],
            unusedInput: [],
            overflow: -2,
            charsLeftOver: 0,
            nullInput: !1,
            invalidMonth: null,
            invalidFormat: !1,
            userInvalidated: !1,
            iso: !1
        }
    }

    function e(n) {
        return null == n._pf && (n._pf = be()), n._pf
    }

    function iu(n) {
        if (null == n._isValid) {
            var t = e(n);
            n._isValid = !(isNaN(n._d.getTime()) || !(t.overflow < 0) || t.empty || t.invalidMonth || t.invalidWeekday || t.nullInput || t.invalidFormat || t.userInvalidated);
            n._strict && (n._isValid = n._isValid && 0 === t.charsLeftOver && 0 === t.unusedTokens.length && void 0 === t.bigHour)
        }
        return n._isValid
    }

    function ru(n) {
        var t = kt(NaN);
        return null != n ? ei(e(t), n) : e(t).userInvalidated = !0, t
    }

    function ki(n, t) {
        var u, i, r;
        if ("undefined" != typeof t._isAMomentObject && (n._isAMomentObject = t._isAMomentObject), "undefined" != typeof t._i && (n._i = t._i), "undefined" != typeof t._f && (n._f = t._f), "undefined" != typeof t._l && (n._l = t._l), "undefined" != typeof t._strict && (n._strict = t._strict), "undefined" != typeof t._tzm && (n._tzm = t._tzm), "undefined" != typeof t._isUTC && (n._isUTC = t._isUTC), "undefined" != typeof t._offset && (n._offset = t._offset), "undefined" != typeof t._pf && (n._pf = e(t)), "undefined" != typeof t._locale && (n._locale = t._locale), cr.length > 0) for (u in cr) i = cr[u], r = t[i], "undefined" != typeof r && (n[i] = r);
        return n
    }

    function dt(n) {
        ki(this, n);
        this._d = new Date(null != n._d ? n._d.getTime() : NaN);
        lr === !1 && (lr = !0, i.updateOffset(this), lr = !1)
    }

    function nt(n) {
        return n instanceof dt || null != n && null != n._isAMomentObject
    }

    function v(n) {
        return 0 > n ? Math.ceil(n) : Math.floor(n)
    }

    function s(n) {
        var t = +n, i = 0;
        return 0 !== t && isFinite(t) && (i = v(t)), i
    }

    function uu(n, t, i) {
        for (var f = Math.min(n.length, t.length), e = Math.abs(n.length - t.length), u = 0, r = 0; f > r; r++) (i && n[r] !== t[r] || !i && s(n[r]) !== s(t[r])) && u++;
        return u + e
    }

    function fu() {
    }

    function eu(n) {
        return n ? n.toLowerCase().replace("_", "-") : n
    }

    function ke(n) {
        for (var i, t, f, r, u = 0; u < n.length;) {
            for (r = eu(n[u]).split("-"), i = r.length, t = eu(n[u + 1]), t = t ? t.split("-") : null; i > 0;) {
                if (f = ou(r.slice(0, i).join("-"))) return f;
                if (t && t.length >= i && uu(r, t, !0) >= i - 1) break;
                i--
            }
            u++
        }
        return null
    }

    function ou(n) {
        var t = null;
        if (!ct[n] && "undefined" != typeof module && module && module.exports) try {
            t = li._abbr;
            require("./locale/" + n);
            gt(t)
        } catch (i) {
        }
        return ct[n]
    }

    function gt(n, t) {
        var i;
        return n && (i = "undefined" == typeof t ? et(n) : su(n, t), i && (li = i)), li._abbr
    }

    function su(n, t) {
        return null !== t ? (t.abbr = n, ct[n] = ct[n] || new fu, ct[n].set(t), gt(n), ct[n]) : (delete ct[n], null)
    }

    function et(n) {
        var t;
        if (n && n._locale && n._locale._abbr && (n = n._locale._abbr), !n) return li;
        if (!ui(n)) {
            if (t = ou(n)) return t;
            n = [n]
        }
        return ke(n)
    }

    function l(n, t) {
        var i = n.toLowerCase();
        ii[i] = ii[i + "s"] = ii[t] = n
    }

    function p(n) {
        if ("string" == typeof n) return ii[n] || ii[n.toLowerCase()]
    }

    function hu(n) {
        var i, t, r = {};
        for (t in n) ft(n, t) && (i = p(t), i && (r[i] = n[t]));
        return r
    }

    function yt(n, t) {
        return function (r) {
            return null != r ? (cu(this, n, r), i.updateOffset(this, t), this) : oi(this, n)
        }
    }

    function oi(n, t) {
        return n._d["get" + (n._isUTC ? "UTC" : "") + t]()
    }

    function cu(n, t, i) {
        return n._d["set" + (n._isUTC ? "UTC" : "") + t](i)
    }

    function lu(n, t) {
        var i;
        if ("object" == typeof n) for (i in n) this.set(i, n[i]); else if (n = p(n), "function" == typeof this[n]) return this[n](t);
        return this
    }

    function di(n, t, i) {
        var r = "" + Math.abs(n), u = t - r.length, f = n >= 0;
        return (f ? i ? "+" : "" : "-") + Math.pow(10, Math.max(0, u)).toString().substr(1) + r
    }

    function r(n, t, i, r) {
        var u = r;
        "string" == typeof r && (u = function () {
            return this[r]()
        });
        n && (wt[n] = u);
        t && (wt[t[0]] = function () {
            return di(u.apply(this, arguments), t[1], t[2])
        });
        i && (wt[i] = function () {
            return this.localeData().ordinal(u.apply(this, arguments), n)
        })
    }

    function de(n) {
        return n.match(/\[[\s\S]/) ? n.replace(/^\[|\]$/g, "") : n.replace(/\\/g, "")
    }

    function ge(n) {
        for (var i = n.match(df), t = 0, r = i.length; r > t; t++) i[t] = wt[i[t]] ? wt[i[t]] : de(i[t]);
        return function (u) {
            var f = "";
            for (t = 0; r > t; t++) f += i[t] instanceof Function ? i[t].call(u, n) : i[t];
            return f
        }
    }

    function gi(n, t) {
        return n.isValid() ? (t = au(t, n.localeData()), ar[t] = ar[t] || ge(t), ar[t](n)) : n.localeData().invalidDate()
    }

    function au(n, t) {
        function r(n) {
            return t.longDateFormat(n) || n
        }

        var i = 5;
        for (ai.lastIndex = 0; i >= 0 && ai.test(n);) n = n.replace(ai, r), ai.lastIndex = 0, i -= 1;
        return n
    }

    function no(n) {
        return "function" == typeof n && "[object Function]" === Object.prototype.toString.call(n)
    }

    function t(n, t, i) {
        pr[n] = no(t) ? t : function (n) {
            return n && i ? i : t
        }
    }

    function to(n, t) {
        return ft(pr, n) ? pr[n](t._strict, t._locale) : new RegExp(io(n))
    }

    function io(n) {
        return n.replace("\\", "").replace(/\\(\[)|\\(\])|\[([^\]\[]*)\]|\\(.)/g, function (n, t, i, r, u) {
            return t || i || r || u
        }).replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&")
    }

    function c(n, t) {
        var i, r = t;
        for ("string" == typeof n && (n = [n]), "number" == typeof t && (r = function (n, i) {
            i[t] = s(n)
        }), i = 0; i < n.length; i++) wr[n[i]] = r
    }

    function ni(n, t) {
        c(n, function (n, i, r, u) {
            r._w = r._w || {};
            t(n, r._w, r, u)
        })
    }

    function ro(n, t, i) {
        null != t && ft(wr, n) && wr[n](t, i._a, i, n)
    }

    function nr(n, t) {
        return new Date(Date.UTC(n, t + 1, 0)).getUTCDate()
    }

    function uo(n) {
        return this._months[n.month()]
    }

    function fo(n) {
        return this._monthsShort[n.month()]
    }

    function eo(n, t, i) {
        var r, u, f;
        for (this._monthsParse || (this._monthsParse = [], this._longMonthsParse = [], this._shortMonthsParse = []), r = 0; 12 > r; r++) if ((u = kt([2e3, r]), i && !this._longMonthsParse[r] && (this._longMonthsParse[r] = new RegExp("^" + this.months(u, "").replace(".", "") + "$", "i"), this._shortMonthsParse[r] = new RegExp("^" + this.monthsShort(u, "").replace(".", "") + "$", "i")), i || this._monthsParse[r] || (f = "^" + this.months(u, "") + "|^" + this.monthsShort(u, ""), this._monthsParse[r] = new RegExp(f.replace(".", ""), "i")), i && "MMMM" === t && this._longMonthsParse[r].test(n)) || i && "MMM" === t && this._shortMonthsParse[r].test(n) || !i && this._monthsParse[r].test(n)) return r
    }

    function vu(n, t) {
        var i;
        return "string" == typeof t && (t = n.localeData().monthsParse(t), "number" != typeof t) ? n : (i = Math.min(n.date(), nr(n.year(), t)), n._d["set" + (n._isUTC ? "UTC" : "") + "Month"](t, i), n)
    }

    function yu(n) {
        return null != n ? (vu(this, n), i.updateOffset(this, !0), this) : oi(this, "Month")
    }

    function oo() {
        return nr(this.year(), this.month())
    }

    function tr(n) {
        var i, t = n._a;
        return t && -2 === e(n).overflow && (i = t[d] < 0 || t[d] > 11 ? d : t[k] < 1 || t[k] > nr(t[b], t[d]) ? k : t[a] < 0 || t[a] > 24 || 24 === t[a] && (0 !== t[lt] || 0 !== t[at] || 0 !== t[vt]) ? a : t[lt] < 0 || t[lt] > 59 ? lt : t[at] < 0 || t[at] > 59 ? at : t[vt] < 0 || t[vt] > 999 ? vt : -1, e(n)._overflowDayOfYear && (b > i || i > k) && (i = k), e(n).overflow = i), n
    }

    function pu(n) {
        i.suppressDeprecationWarnings === !1 && "undefined" != typeof console && console.warn && console.warn("Deprecation warning: " + n)
    }

    function w(n, t) {
        var i = !0;
        return ei(function () {
            return i && (pu(n + "\n" + (new Error).stack), i = !1), t.apply(this, arguments)
        }, t)
    }

    function so(n, t) {
        te[n] || (pu(t), te[n] = !0)
    }

    function wu(n) {
        var t, i, r = n._i, u = fa.exec(r);
        if (u) {
            for (e(n).iso = !0, t = 0, i = br.length; i > t; t++) if (br[t][1].exec(r)) {
                n._f = br[t][0];
                break
            }
            for (t = 0, i = kr.length; i > t; t++) if (kr[t][1].exec(r)) {
                n._f += (u[6] || " ") + kr[t][0];
                break
            }
            r.match(bi) && (n._f += "Z");
            ur(n)
        } else n._isValid = !1
    }

    function ho(n) {
        var t = ea.exec(n._i);
        return null !== t ? void (n._d = new Date(+t[1])) : (wu(n), void (n._isValid === !1 && (delete n._isValid, i.createFromInputFallback(n))))
    }

    function co(n, t, i, r, u, f, e) {
        var o = new Date(n, t, i, r, u, f, e);
        return 1970 > n && o.setFullYear(n), o
    }

    function ir(n) {
        var t = new Date(Date.UTC.apply(null, arguments));
        return 1970 > n && t.setUTCFullYear(n), t
    }

    function bu(n) {
        return ku(n) ? 366 : 365
    }

    function ku(n) {
        return n % 4 == 0 && n % 100 != 0 || n % 400 == 0
    }

    function lo() {
        return ku(this.year())
    }

    function ot(n, t, i) {
        var u, f = i - t, r = i - n.day();
        return r > f && (r -= 7), f - 7 > r && (r += 7), u = o(n).add(r, "d"), {
            week: Math.ceil(u.dayOfYear() / 7),
            year: u.year()
        }
    }

    function ao(n) {
        return ot(n, this._week.dow, this._week.doy).week
    }

    function vo() {
        return this._week.dow
    }

    function yo() {
        return this._week.doy
    }

    function po(n) {
        var t = this.localeData().week(this);
        return null == n ? t : this.add(7 * (n - t), "d")
    }

    function wo(n) {
        var t = ot(this, 1, 4).week;
        return null == n ? t : this.add(7 * (n - t), "d")
    }

    function bo(n, t, i, r, u) {
        var f, o = 6 + u - r, s = ir(n, 0, 1 + o), e = s.getUTCDay();
        return u > e && (e += 7), i = null != i ? 1 * i : u, f = 1 + o + 7 * (t - 1) - e + i, {
            year: f > 0 ? n : n - 1,
            dayOfYear: f > 0 ? f : bu(n - 1) + f
        }
    }

    function ko(n) {
        var t = Math.round((this.clone().startOf("day") - this.clone().startOf("year")) / 864e5) + 1;
        return null == n ? t : this.add(n - t, "d")
    }

    function pt(n, t, i) {
        return null != n ? n : null != t ? t : i
    }

    function go(n) {
        var t = new Date;
        return n._useUTC ? [t.getUTCFullYear(), t.getUTCMonth(), t.getUTCDate()] : [t.getFullYear(), t.getMonth(), t.getDate()]
    }

    function rr(n) {
        var t, i, r, u, f = [];
        if (!n._d) {
            for (r = go(n), n._w && null == n._a[k] && null == n._a[d] && ns(n), n._dayOfYear && (u = pt(n._a[b], r[b]), n._dayOfYear > bu(u) && (e(n)._overflowDayOfYear = !0), i = ir(u, 0, n._dayOfYear), n._a[d] = i.getUTCMonth(), n._a[k] = i.getUTCDate()), t = 0; 3 > t && null == n._a[t]; ++t) n._a[t] = f[t] = r[t];
            for (; 7 > t; t++) n._a[t] = f[t] = null == n._a[t] ? 2 === t ? 1 : 0 : n._a[t];
            24 === n._a[a] && 0 === n._a[lt] && 0 === n._a[at] && 0 === n._a[vt] && (n._nextDay = !0, n._a[a] = 0);
            n._d = (n._useUTC ? ir : co).apply(null, f);
            null != n._tzm && n._d.setUTCMinutes(n._d.getUTCMinutes() - n._tzm);
            n._nextDay && (n._a[a] = 24)
        }
    }

    function ns(n) {
        var t, e, u, r, i, f, s;
        t = n._w;
        null != t.GG || null != t.W || null != t.E ? (i = 1, f = 4, e = pt(t.GG, n._a[b], ot(o(), 1, 4).year), u = pt(t.W, 1), r = pt(t.E, 1)) : (i = n._locale._week.dow, f = n._locale._week.doy, e = pt(t.gg, n._a[b], ot(o(), i, f).year), u = pt(t.w, 1), null != t.d ? (r = t.d, i > r && ++u) : r = null != t.e ? t.e + i : i);
        s = bo(e, u, r, f, i);
        n._a[b] = s.year;
        n._dayOfYear = s.dayOfYear
    }

    function ur(n) {
        if (n._f === i.ISO_8601) return void wu(n);
        n._a = [];
        e(n).empty = !0;
        for (var t, u, s, r = "" + n._i, c = r.length, h = 0, o = au(n._f, n._locale).match(df) || [], f = 0; f < o.length; f++) u = o[f], t = (r.match(to(u, n)) || [])[0], t && (s = r.substr(0, r.indexOf(t)), s.length > 0 && e(n).unusedInput.push(s), r = r.slice(r.indexOf(t) + t.length), h += t.length), wt[u] ? (t ? e(n).empty = !1 : e(n).unusedTokens.push(u), ro(u, t, n)) : n._strict && !t && e(n).unusedTokens.push(u);
        e(n).charsLeftOver = c - h;
        r.length > 0 && e(n).unusedInput.push(r);
        e(n).bigHour === !0 && n._a[a] <= 12 && n._a[a] > 0 && (e(n).bigHour = void 0);
        n._a[a] = ts(n._locale, n._a[a], n._meridiem);
        rr(n);
        tr(n)
    }

    function ts(n, t, i) {
        var r;
        return null == i ? t : null != n.meridiemHour ? n.meridiemHour(t, i) : null != n.isPM ? (r = n.isPM(i), r && 12 > t && (t += 12), r || 12 !== t || (t = 0), t) : t
    }

    function is(n) {
        var t, f, u, r, i;
        if (0 === n._f.length) return e(n).invalidFormat = !0, void (n._d = new Date(NaN));
        for (r = 0; r < n._f.length; r++) i = 0, t = ki({}, n), null != n._useUTC && (t._useUTC = n._useUTC), t._f = n._f[r], ur(t), iu(t) && (i += e(t).charsLeftOver, i += 10 * e(t).unusedTokens.length, e(t).score = i, (null == u || u > i) && (u = i, f = t));
        ei(n, f || t)
    }

    function rs(n) {
        if (!n._d) {
            var t = hu(n._i);
            n._a = [t.year, t.month, t.day || t.date, t.hour, t.minute, t.second, t.millisecond];
            rr(n)
        }
    }

    function us(n) {
        var t = new dt(tr(du(n)));
        return t._nextDay && (t.add(1, "d"), t._nextDay = void 0), t
    }

    function du(n) {
        var t = n._i, i = n._f;
        return n._locale = n._locale || et(n._l), null === t || void 0 === i && "" === t ? ru({nullInput: !0}) : ("string" == typeof t && (n._i = t = n._locale.preparse(t)), nt(t) ? new dt(tr(t)) : (ui(i) ? is(n) : i ? ur(n) : fi(t) ? n._d = t : fs(n), n))
    }

    function fs(n) {
        var t = n._i;
        void 0 === t ? n._d = new Date : fi(t) ? n._d = new Date(+t) : "string" == typeof t ? ho(n) : ui(t) ? (n._a = we(t.slice(0), function (n) {
            return parseInt(n, 10)
        }), rr(n)) : "object" == typeof t ? rs(n) : "number" == typeof t ? n._d = new Date(t) : i.createFromInputFallback(n)
    }

    function gu(n, t, i, r, u) {
        var f = {};
        return "boolean" == typeof i && (r = i, i = void 0), f._isAMomentObject = !0, f._useUTC = f._isUTC = u, f._l = i, f._i = n, f._f = t, f._strict = r, us(f)
    }

    function o(n, t, i, r) {
        return gu(n, t, i, r, !1)
    }

    function nf(n, t) {
        var r, i;
        if (1 === t.length && ui(t[0]) && (t = t[0]), !t.length) return o();
        for (r = t[0], i = 1; i < t.length; ++i) (!t[i].isValid() || t[i][n](r)) && (r = t[i]);
        return r
    }

    function es() {
        var n = [].slice.call(arguments, 0);
        return nf("isBefore", n)
    }

    function os() {
        var n = [].slice.call(arguments, 0);
        return nf("isAfter", n)
    }

    function si(n) {
        var t = hu(n), i = t.year || 0, r = t.quarter || 0, u = t.month || 0, f = t.week || 0, e = t.day || 0,
            o = t.hour || 0, s = t.minute || 0, h = t.second || 0, c = t.millisecond || 0;
        this._milliseconds = +c + 1e3 * h + 6e4 * s + 36e5 * o;
        this._days = +e + 7 * f;
        this._months = +u + 3 * r + 12 * i;
        this._data = {};
        this._locale = et();
        this._bubble()
    }

    function fr(n) {
        return n instanceof si
    }

    function tf(n, t) {
        r(n, 0, 0, function () {
            var n = this.utcOffset(), i = "+";
            return 0 > n && (n = -n, i = "-"), i + di(~~(n / 60), 2) + t + di(~~n % 60, 2)
        })
    }

    function er(n) {
        var i = (n || "").match(bi) || [], u = i[i.length - 1] || [], t = (u + "").match(fe) || ["-", 0, 0],
            r = +(60 * t[1]) + s(t[2]);
        return "+" === t[0] ? r : -r
    }

    function or(n, t) {
        var r, u;
        return t._isUTC ? (r = t.clone(), u = (nt(n) || fi(n) ? +n : +o(n)) - +r, r._d.setTime(+r._d + u), i.updateOffset(r, !1), r) : o(n).local()
    }

    function sr(n) {
        return 15 * -Math.round(n._d.getTimezoneOffset() / 15)
    }

    function ss(n, t) {
        var r, u = this._offset || 0;
        return null != n ? ("string" == typeof n && (n = er(n)), Math.abs(n) < 16 && (n = 60 * n), !this._isUTC && t && (r = sr(this)), this._offset = n, this._isUTC = !0, null != r && this.add(r, "m"), u !== n && (!t || this._changeInProgress ? ef(this, tt(n - u, "m"), 1, !1) : this._changeInProgress || (this._changeInProgress = !0, i.updateOffset(this, !0), this._changeInProgress = null)), this) : this._isUTC ? u : sr(this)
    }

    function hs(n, t) {
        return null != n ? ("string" != typeof n && (n = -n), this.utcOffset(n, t), this) : -this.utcOffset()
    }

    function cs(n) {
        return this.utcOffset(0, n)
    }

    function ls(n) {
        return this._isUTC && (this.utcOffset(0, n), this._isUTC = !1, n && this.subtract(sr(this), "m")), this
    }

    function as() {
        return this._tzm ? this.utcOffset(this._tzm) : "string" == typeof this._i && this.utcOffset(er(this._i)), this
    }

    function vs(n) {
        return n = n ? o(n).utcOffset() : 0, (this.utcOffset() - n) % 60 == 0
    }

    function ys() {
        return this.utcOffset() > this.clone().month(0).utcOffset() || this.utcOffset() > this.clone().month(5).utcOffset()
    }

    function ps() {
        var n, t;
        return "undefined" != typeof this._isDSTShifted ? this._isDSTShifted : (n = {}, (ki(n, this), n = du(n), n._a) ? (t = n._isUTC ? kt(n._a) : o(n._a), this._isDSTShifted = this.isValid() && uu(n._a, t.toArray()) > 0) : this._isDSTShifted = !1, this._isDSTShifted)
    }

    function ws() {
        return !this._isUTC
    }

    function bs() {
        return this._isUTC
    }

    function rf() {
        return this._isUTC && 0 === this._offset
    }

    function tt(n, t) {
        var u, f, e, i = n, r = null;
        return fr(n) ? i = {
            ms: n._milliseconds,
            d: n._days,
            M: n._months
        } : "number" == typeof n ? (i = {}, t ? i[t] = n : i.milliseconds = n) : (r = ee.exec(n)) ? (u = "-" === r[1] ? -1 : 1, i = {
            y: 0,
            d: s(r[k]) * u,
            h: s(r[a]) * u,
            m: s(r[lt]) * u,
            s: s(r[at]) * u,
            ms: s(r[vt]) * u
        }) : (r = oe.exec(n)) ? (u = "-" === r[1] ? -1 : 1, i = {
            y: st(r[2], u),
            M: st(r[3], u),
            d: st(r[4], u),
            h: st(r[5], u),
            m: st(r[6], u),
            s: st(r[7], u),
            w: st(r[8], u)
        }) : null == i ? i = {} : "object" == typeof i && ("from" in i || "to" in i) && (e = ks(o(i.from), o(i.to)), i = {}, i.ms = e.milliseconds, i.M = e.months), f = new si(i), fr(n) && ft(n, "_locale") && (f._locale = n._locale), f
    }

    function st(n, t) {
        var i = n && parseFloat(n.replace(",", "."));
        return (isNaN(i) ? 0 : i) * t
    }

    function uf(n, t) {
        var i = {milliseconds: 0, months: 0};
        return i.months = t.month() - n.month() + 12 * (t.year() - n.year()), n.clone().add(i.months, "M").isAfter(t) && --i.months, i.milliseconds = +t - +n.clone().add(i.months, "M"), i
    }

    function ks(n, t) {
        var i;
        return t = or(t, n), n.isBefore(t) ? i = uf(n, t) : (i = uf(t, n), i.milliseconds = -i.milliseconds, i.months = -i.months), i
    }

    function ff(n, t) {
        return function (i, r) {
            var u, f;
            return null === r || isNaN(+r) || (so(t, "moment()." + t + "(period, number) is deprecated. Please use moment()." + t + "(number, period)."), f = i, i = r, r = f), i = "string" == typeof i ? +i : i, u = tt(i, r), ef(this, u, n), this
        }
    }

    function ef(n, t, r, u) {
        var o = t._milliseconds, f = t._days, e = t._months;
        u = null == u ? !0 : u;
        o && n._d.setTime(+n._d + o * r);
        f && cu(n, "Date", oi(n, "Date") + f * r);
        e && vu(n, oi(n, "Month") + e * r);
        u && i.updateOffset(n, f || e)
    }

    function ds(n, t) {
        var r = n || o(), f = or(r, this).startOf("day"), i = this.diff(f, "days", !0),
            u = -6 > i ? "sameElse" : -1 > i ? "lastWeek" : 0 > i ? "lastDay" : 1 > i ? "sameDay" : 2 > i ? "nextDay" : 7 > i ? "nextWeek" : "sameElse";
        return this.format(t && t[u] || this.localeData().calendar(u, this, o(r)))
    }

    function gs() {
        return new dt(this)
    }

    function nh(n, t) {
        var i;
        return t = p("undefined" != typeof t ? t : "millisecond"), "millisecond" === t ? (n = nt(n) ? n : o(n), +this > +n) : (i = nt(n) ? +n : +o(n), i < +this.clone().startOf(t))
    }

    function th(n, t) {
        var i;
        return t = p("undefined" != typeof t ? t : "millisecond"), "millisecond" === t ? (n = nt(n) ? n : o(n), +n > +this) : (i = nt(n) ? +n : +o(n), +this.clone().endOf(t) < i)
    }

    function ih(n, t, i) {
        return this.isAfter(n, i) && this.isBefore(t, i)
    }

    function rh(n, t) {
        var i;
        return t = p(t || "millisecond"), "millisecond" === t ? (n = nt(n) ? n : o(n), +this == +n) : (i = +o(n), +this.clone().startOf(t) <= i && i <= +this.clone().endOf(t))
    }

    function uh(n, t, i) {
        var r, u, f = or(n, this), e = 6e4 * (f.utcOffset() - this.utcOffset());
        return t = p(t), "year" === t || "month" === t || "quarter" === t ? (u = fh(this, f), "quarter" === t ? u /= 3 : "year" === t && (u /= 12)) : (r = this - f, u = "second" === t ? r / 1e3 : "minute" === t ? r / 6e4 : "hour" === t ? r / 36e5 : "day" === t ? (r - e) / 864e5 : "week" === t ? (r - e) / 6048e5 : r), i ? u : v(u)
    }

    function fh(n, t) {
        var r, f, u = 12 * (t.year() - n.year()) + (t.month() - n.month()), i = n.clone().add(u, "months");
        return 0 > t - i ? (r = n.clone().add(u - 1, "months"), f = (t - i) / (i - r)) : (r = n.clone().add(u + 1, "months"), f = (t - i) / (r - i)), -(u + f)
    }

    function eh() {
        return this.clone().locale("en").format("ddd MMM DD YYYY HH:mm:ss [GMT]ZZ")
    }

    function of() {
        var n = this.clone().utc();
        return 0 < n.year() && n.year() <= 9999 ? "function" == typeof Date.prototype.toISOString ? this.toDate().toISOString() : gi(n, "YYYY-MM-DD[T]HH:mm:ss.SSS[Z]") : gi(n, "YYYYYY-MM-DD[T]HH:mm:ss.SSS[Z]")
    }

    function oh(n) {
        var t = gi(this, n || i.defaultFormat);
        return this.localeData().postformat(t)
    }

    function sh(n, t) {
        return this.isValid() ? tt({
            to: this,
            from: n
        }).locale(this.locale()).humanize(!t) : this.localeData().invalidDate()
    }

    function hh(n) {
        return this.from(o(), n)
    }

    function ch(n, t) {
        return this.isValid() ? tt({
            from: this,
            to: n
        }).locale(this.locale()).humanize(!t) : this.localeData().invalidDate()
    }

    function lh(n) {
        return this.to(o(), n)
    }

    function sf(n) {
        var t;
        return void 0 === n ? this._locale._abbr : (t = et(n), null != t && (this._locale = t), this)
    }

    function hf() {
        return this._locale
    }

    function ah(n) {
        switch (n = p(n)) {
            case"year":
                this.month(0);
            case"quarter":
            case"month":
                this.date(1);
            case"week":
            case"isoWeek":
            case"day":
                this.hours(0);
            case"hour":
                this.minutes(0);
            case"minute":
                this.seconds(0);
            case"second":
                this.milliseconds(0)
        }
        return "week" === n && this.weekday(0), "isoWeek" === n && this.isoWeekday(1), "quarter" === n && this.month(3 * Math.floor(this.month() / 3)), this
    }

    function vh(n) {
        return n = p(n), void 0 === n || "millisecond" === n ? this : this.startOf(n).add(1, "isoWeek" === n ? "week" : n).subtract(1, "ms")
    }

    function yh() {
        return +this._d - 6e4 * (this._offset || 0)
    }

    function ph() {
        return Math.floor(+this / 1e3)
    }

    function wh() {
        return this._offset ? new Date(+this) : this._d
    }

    function bh() {
        var n = this;
        return [n.year(), n.month(), n.date(), n.hour(), n.minute(), n.second(), n.millisecond()]
    }

    function kh() {
        var n = this;
        return {
            years: n.year(),
            months: n.month(),
            date: n.date(),
            hours: n.hours(),
            minutes: n.minutes(),
            seconds: n.seconds(),
            milliseconds: n.milliseconds()
        }
    }

    function dh() {
        return iu(this)
    }

    function gh() {
        return ei({}, e(this))
    }

    function nc() {
        return e(this).overflow
    }

    function hi(n, t) {
        r(0, [n, n.length], 0, t)
    }

    function cf(n, t, i) {
        return ot(o([n, 11, 31 + t - i]), t, i).week
    }

    function tc(n) {
        var t = ot(this, this.localeData()._week.dow, this.localeData()._week.doy).year;
        return null == n ? t : this.add(n - t, "y")
    }

    function ic(n) {
        var t = ot(this, 1, 4).year;
        return null == n ? t : this.add(n - t, "y")
    }

    function rc() {
        return cf(this.year(), 1, 4)
    }

    function uc() {
        var n = this.localeData()._week;
        return cf(this.year(), n.dow, n.doy)
    }

    function fc(n) {
        return null == n ? Math.ceil((this.month() + 1) / 3) : this.month(3 * (n - 1) + this.month() % 3)
    }

    function ec(n, t) {
        return "string" != typeof n ? n : isNaN(n) ? (n = t.weekdaysParse(n), "number" == typeof n ? n : null) : parseInt(n, 10)
    }

    function oc(n) {
        return this._weekdays[n.day()]
    }

    function sc(n) {
        return this._weekdaysShort[n.day()]
    }

    function hc(n) {
        return this._weekdaysMin[n.day()]
    }

    function cc(n) {
        var t, i, r;
        for (this._weekdaysParse = this._weekdaysParse || [], t = 0; 7 > t; t++) if (this._weekdaysParse[t] || (i = o([2e3, 1]).day(t), r = "^" + this.weekdays(i, "") + "|^" + this.weekdaysShort(i, "") + "|^" + this.weekdaysMin(i, ""), this._weekdaysParse[t] = new RegExp(r.replace(".", ""), "i")), this._weekdaysParse[t].test(n)) return t
    }

    function lc(n) {
        var t = this._isUTC ? this._d.getUTCDay() : this._d.getDay();
        return null != n ? (n = ec(n, this.localeData()), this.add(n - t, "d")) : t
    }

    function ac(n) {
        var t = (this.day() + 7 - this.localeData()._week.dow) % 7;
        return null == n ? t : this.add(n - t, "d")
    }

    function vc(n) {
        return null == n ? this.day() || 7 : this.day(this.day() % 7 ? n : n - 7)
    }

    function lf(n, t) {
        r(n, 0, 0, function () {
            return this.localeData().meridiem(this.hours(), this.minutes(), t)
        })
    }

    function af(n, t) {
        return t._meridiemParse
    }

    function yc(n) {
        return "p" === (n + "").toLowerCase().charAt(0)
    }

    function pc(n, t, i) {
        return n > 11 ? i ? "pm" : "PM" : i ? "am" : "AM"
    }

    function wc(n, t) {
        t[vt] = s(1e3 * ("0." + n))
    }

    function bc() {
        return this._isUTC ? "UTC" : ""
    }

    function kc() {
        return this._isUTC ? "Coordinated Universal Time" : ""
    }

    function dc(n) {
        return o(1e3 * n)
    }

    function gc() {
        return o.apply(null, arguments).parseZone()
    }

    function nl(n, t, i) {
        var r = this._calendar[n];
        return "function" == typeof r ? r.call(t, i) : r
    }

    function tl(n) {
        var t = this._longDateFormat[n], i = this._longDateFormat[n.toUpperCase()];
        return t || !i ? t : (this._longDateFormat[n] = i.replace(/MMMM|MM|DD|dddd/g, function (n) {
            return n.slice(1)
        }), this._longDateFormat[n])
    }

    function il() {
        return this._invalidDate
    }

    function rl(n) {
        return this._ordinal.replace("%d", n)
    }

    function vf(n) {
        return n
    }

    function ul(n, t, i, r) {
        var u = this._relativeTime[i];
        return "function" == typeof u ? u(n, t, i, r) : u.replace(/%d/i, n)
    }

    function fl(n, t) {
        var i = this._relativeTime[n > 0 ? "future" : "past"];
        return "function" == typeof i ? i(t) : i.replace(/%s/i, t)
    }

    function el(n) {
        var t;
        for (var i in n) t = n[i], "function" == typeof t ? this[i] = t : this["_" + i] = t;
        this._ordinalParseLenient = new RegExp(this._ordinalParse.source + "|" + /\d{1,2}/.source)
    }

    function yf(n, t, i, r) {
        var u = et(), f = kt().set(r, t);
        return u[i](f, n)
    }

    function ti(n, t, i, r, u) {
        if ("number" == typeof n && (t = n, n = void 0), n = n || "", null != t) return yf(n, t, i, u);
        for (var e = [], f = 0; r > f; f++) e[f] = yf(n, f, i, u);
        return e
    }

    function ol(n, t) {
        return ti(n, t, "months", 12, "month")
    }

    function sl(n, t) {
        return ti(n, t, "monthsShort", 12, "month")
    }

    function hl(n, t) {
        return ti(n, t, "weekdays", 7, "day")
    }

    function cl(n, t) {
        return ti(n, t, "weekdaysShort", 7, "day")
    }

    function ll(n, t) {
        return ti(n, t, "weekdaysMin", 7, "day")
    }

    function al() {
        var n = this._data;
        return this._milliseconds = g(this._milliseconds), this._days = g(this._days), this._months = g(this._months), n.milliseconds = g(n.milliseconds), n.seconds = g(n.seconds), n.minutes = g(n.minutes), n.hours = g(n.hours), n.months = g(n.months), n.years = g(n.years), this
    }

    function pf(n, t, i, r) {
        var u = tt(t, i);
        return n._milliseconds += r * u._milliseconds, n._days += r * u._days, n._months += r * u._months, n._bubble()
    }

    function vl(n, t) {
        return pf(this, n, t, 1)
    }

    function yl(n, t) {
        return pf(this, n, t, -1)
    }

    function wf(n) {
        return 0 > n ? Math.floor(n) : Math.ceil(n)
    }

    function pl() {
        var u, f, e, s, o, r = this._milliseconds, n = this._days, t = this._months, i = this._data;
        return r >= 0 && n >= 0 && t >= 0 || 0 >= r && 0 >= n && 0 >= t || (r += 864e5 * wf(hr(t) + n), n = 0, t = 0), i.milliseconds = r % 1e3, u = v(r / 1e3), i.seconds = u % 60, f = v(u / 60), i.minutes = f % 60, e = v(f / 60), i.hours = e % 24, n += v(e / 24), o = v(bf(n)), t += o, n -= wf(hr(o)), s = v(t / 12), t %= 12, i.days = n, i.months = t, i.years = s, this
    }

    function bf(n) {
        return 4800 * n / 146097
    }

    function hr(n) {
        return 146097 * n / 4800
    }

    function wl(n) {
        var t, r, i = this._milliseconds;
        if (n = p(n), "month" === n || "year" === n) return t = this._days + i / 864e5, r = this._months + bf(t), "month" === n ? r : r / 12;
        switch (t = this._days + Math.round(hr(this._months)), n) {
            case"week":
                return t / 7 + i / 6048e5;
            case"day":
                return t + i / 864e5;
            case"hour":
                return 24 * t + i / 36e5;
            case"minute":
                return 1440 * t + i / 6e4;
            case"second":
                return 86400 * t + i / 1e3;
            case"millisecond":
                return Math.floor(864e5 * t) + i;
            default:
                throw new Error("Unknown unit " + n);
        }
    }

    function bl() {
        return this._milliseconds + 864e5 * this._days + this._months % 12 * 2592e6 + 31536e6 * s(this._months / 12)
    }

    function it(n) {
        return function () {
            return this.as(n)
        }
    }

    function kl(n) {
        return n = p(n), this[n + "s"]()
    }

    function ht(n) {
        return function () {
            return this._data[n]
        }
    }

    function dl() {
        return v(this.days() / 7)
    }

    function gl(n, t, i, r, u) {
        return u.relativeTime(t || 1, !!i, n, r)
    }

    function na(n, t, i) {
        var r = tt(n).abs(), h = bt(r.as("s")), f = bt(r.as("m")), e = bt(r.as("h")), o = bt(r.as("d")),
            s = bt(r.as("M")), c = bt(r.as("y")),
            u = h < ut.s && ["s", h] || 1 === f && ["m"] || f < ut.m && ["mm", f] || 1 === e && ["h"] || e < ut.h && ["hh", e] || 1 === o && ["d"] || o < ut.d && ["dd", o] || 1 === s && ["M"] || s < ut.M && ["MM", s] || 1 === c && ["y"] || ["yy", c];
        return u[2] = t, u[3] = +n > 0, u[4] = i, gl.apply(null, u)
    }

    function ta(n, t) {
        return void 0 === ut[n] ? !1 : void 0 === t ? ut[n] : (ut[n] = t, !0)
    }

    function ia(n) {
        var t = this.localeData(), i = na(this, !n, t);
        return n && (i = t.pastFuture(+this, i)), t.postformat(i)
    }

    function ci() {
        var n, e, o, t = tu(this._milliseconds) / 1e3, a = tu(this._days), i = tu(this._months);
        n = v(t / 60);
        e = v(n / 60);
        t %= 60;
        n %= 60;
        o = v(i / 12);
        i %= 12;
        var s = o, h = i, c = a, r = e, u = n, f = t, l = this.asSeconds();
        return l ? (0 > l ? "-" : "") + "P" + (s ? s + "Y" : "") + (h ? h + "M" : "") + (c ? c + "D" : "") + (r || u || f ? "T" : "") + (r ? r + "H" : "") + (u ? u + "M" : "") + (f ? f + "S" : "") : "P0D"
    }

    var kf, li, cr = i.momentProperties = [], lr = !1, ct = {}, ii = {},
        df = /(\[[^\[]*\])|(\\)?(Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|Q|YYYYYY|YYYYY|YYYY|YY|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|mm?|ss?|S{1,9}|x|X|zz?|ZZ?|.)/g,
        ai = /(\[[^\[]*\])|(\\)?(LTS|LT|LL?L?L?|l{1,4})/g, ar = {}, wt = {}, gf = /\d/, y = /\d\d/, ne = /\d{3}/,
        vr = /\d{4}/, vi = /[+-]?\d{6}/, h = /\d\d?/, yi = /\d{1,3}/, yr = /\d{1,4}/, pi = /[+-]?\d{1,6}/,
        wi = /[+-]?\d+/, bi = /Z|[+-]\d\d:?\d\d/gi,
        ri = /[0-9]*['a-z\u00A0-\u05FF\u0700-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+|[\u0600-\u06FF\/]+(\s*?[\u0600-\u06FF]+){1,2}/i,
        pr = {}, wr = {}, b = 0, d = 1, k = 2, a = 3, lt = 4, at = 5, vt = 6, dr, ie, re, ue, fe, ee, oe, se, he, gr,
        nu, ce, le, ae, ve, rt, ye, n;
    r("M", ["MM", 2], "Mo", function () {
        return this.month() + 1
    });
    r("MMM", 0, 0, function (n) {
        return this.localeData().monthsShort(this, n)
    });
    r("MMMM", 0, 0, function (n) {
        return this.localeData().months(this, n)
    });
    l("month", "M");
    t("M", h);
    t("MM", h, y);
    t("MMM", ri);
    t("MMMM", ri);
    c(["M", "MM"], function (n, t) {
        t[d] = s(n) - 1
    });
    c(["MMM", "MMMM"], function (n, t, i, r) {
        var u = i._locale.monthsParse(n, r, i._strict);
        null != u ? t[d] = u : e(i).invalidMonth = n
    });
    var ra = "January_February_March_April_May_June_July_August_September_October_November_December".split("_"),
        ua = "Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec".split("_"), te = {};
    i.suppressDeprecationWarnings = !1;
    var fa = /^\s*(?:[+-]\d{6}|\d{4})-(?:(\d\d-\d\d)|(W\d\d$)|(W\d\d-\d)|(\d\d\d))((T| )(\d\d(:\d\d(:\d\d(\.\d+)?)?)?)?([\+\-]\d\d(?::?\d\d)?|\s*Z)?)?$/,
        br = [["YYYYYY-MM-DD", /[+-]\d{6}-\d{2}-\d{2}/], ["YYYY-MM-DD", /\d{4}-\d{2}-\d{2}/], ["GGGG-[W]WW-E", /\d{4}-W\d{2}-\d/], ["GGGG-[W]WW", /\d{4}-W\d{2}/], ["YYYY-DDD", /\d{4}-\d{3}/]],
        kr = [["HH:mm:ss.SSSS", /(T| )\d\d:\d\d:\d\d\.\d+/], ["HH:mm:ss", /(T| )\d\d:\d\d:\d\d/], ["HH:mm", /(T| )\d\d:\d\d/], ["HH", /(T| )\d\d/]],
        ea = /^\/?Date\((\-?\d+)/i;
    i.createFromInputFallback = w("moment construction falls back to js Date. This is discouraged and will be removed in upcoming major release. Please refer to https://github.com/moment/moment/issues/1407 for more info.", function (n) {
        n._d = new Date(n._i + (n._useUTC ? " UTC" : ""))
    });
    r(0, ["YY", 2], 0, function () {
        return this.year() % 100
    });
    r(0, ["YYYY", 4], 0, "year");
    r(0, ["YYYYY", 5], 0, "year");
    r(0, ["YYYYYY", 6, !0], 0, "year");
    l("year", "y");
    t("Y", wi);
    t("YY", h, y);
    t("YYYY", yr, vr);
    t("YYYYY", pi, vi);
    t("YYYYYY", pi, vi);
    c(["YYYYY", "YYYYYY"], b);
    c("YYYY", function (n, t) {
        t[b] = 2 === n.length ? i.parseTwoDigitYear(n) : s(n)
    });
    c("YY", function (n, t) {
        t[b] = i.parseTwoDigitYear(n)
    });
    i.parseTwoDigitYear = function (n) {
        return s(n) + (s(n) > 68 ? 1900 : 2e3)
    };
    dr = yt("FullYear", !1);
    r("w", ["ww", 2], "wo", "week");
    r("W", ["WW", 2], "Wo", "isoWeek");
    l("week", "w");
    l("isoWeek", "W");
    t("w", h);
    t("ww", h, y);
    t("W", h);
    t("WW", h, y);
    ni(["w", "ww", "W", "WW"], function (n, t, i, r) {
        t[r.substr(0, 1)] = s(n)
    });
    ie = {dow: 0, doy: 6};
    r("DDD", ["DDDD", 3], "DDDo", "dayOfYear");
    l("dayOfYear", "DDD");
    t("DDD", yi);
    t("DDDD", ne);
    c(["DDD", "DDDD"], function (n, t, i) {
        i._dayOfYear = s(n)
    });
    i.ISO_8601 = function () {
    };
    re = w("moment().min is deprecated, use moment.min instead. https://github.com/moment/moment/issues/1548", function () {
        var n = o.apply(null, arguments);
        return this > n ? this : n
    });
    ue = w("moment().max is deprecated, use moment.max instead. https://github.com/moment/moment/issues/1548", function () {
        var n = o.apply(null, arguments);
        return n > this ? this : n
    });
    tf("Z", ":");
    tf("ZZ", "");
    t("Z", bi);
    t("ZZ", bi);
    c(["Z", "ZZ"], function (n, t, i) {
        i._useUTC = !0;
        i._tzm = er(n)
    });
    fe = /([\+\-]|\d\d)/gi;
    i.updateOffset = function () {
    };
    ee = /(\-)?(?:(\d*)\.)?(\d+)\:(\d+)(?:\:(\d+)\.?(\d{3})?)?/;
    oe = /^(-)?P(?:(?:([0-9,.]*)Y)?(?:([0-9,.]*)M)?(?:([0-9,.]*)D)?(?:T(?:([0-9,.]*)H)?(?:([0-9,.]*)M)?(?:([0-9,.]*)S)?)?|([0-9,.]*)W)$/;
    tt.fn = si.prototype;
    se = ff(1, "add");
    he = ff(-1, "subtract");
    i.defaultFormat = "YYYY-MM-DDTHH:mm:ssZ";
    gr = w("moment().lang() is deprecated. Instead, use moment().localeData() to get the language configuration. Use moment().locale() to change languages.", function (n) {
        return void 0 === n ? this.localeData() : this.locale(n)
    });
    r(0, ["gg", 2], 0, function () {
        return this.weekYear() % 100
    });
    r(0, ["GG", 2], 0, function () {
        return this.isoWeekYear() % 100
    });
    hi("gggg", "weekYear");
    hi("ggggg", "weekYear");
    hi("GGGG", "isoWeekYear");
    hi("GGGGG", "isoWeekYear");
    l("weekYear", "gg");
    l("isoWeekYear", "GG");
    t("G", wi);
    t("g", wi);
    t("GG", h, y);
    t("gg", h, y);
    t("GGGG", yr, vr);
    t("gggg", yr, vr);
    t("GGGGG", pi, vi);
    t("ggggg", pi, vi);
    ni(["gggg", "ggggg", "GGGG", "GGGGG"], function (n, t, i, r) {
        t[r.substr(0, 2)] = s(n)
    });
    ni(["gg", "GG"], function (n, t, r, u) {
        t[u] = i.parseTwoDigitYear(n)
    });
    r("Q", 0, 0, "quarter");
    l("quarter", "Q");
    t("Q", gf);
    c("Q", function (n, t) {
        t[d] = 3 * (s(n) - 1)
    });
    r("D", ["DD", 2], "Do", "date");
    l("date", "D");
    t("D", h);
    t("DD", h, y);
    t("Do", function (n, t) {
        return n ? t._ordinalParse : t._ordinalParseLenient
    });
    c(["D", "DD"], k);
    c("Do", function (n, t) {
        t[k] = s(n.match(h)[0], 10)
    });
    nu = yt("Date", !0);
    r("d", 0, "do", "day");
    r("dd", 0, 0, function (n) {
        return this.localeData().weekdaysMin(this, n)
    });
    r("ddd", 0, 0, function (n) {
        return this.localeData().weekdaysShort(this, n)
    });
    r("dddd", 0, 0, function (n) {
        return this.localeData().weekdays(this, n)
    });
    r("e", 0, 0, "weekday");
    r("E", 0, 0, "isoWeekday");
    l("day", "d");
    l("weekday", "e");
    l("isoWeekday", "E");
    t("d", h);
    t("e", h);
    t("E", h);
    t("dd", ri);
    t("ddd", ri);
    t("dddd", ri);
    ni(["dd", "ddd", "dddd"], function (n, t, i) {
        var r = i._locale.weekdaysParse(n);
        null != r ? t.d = r : e(i).invalidWeekday = n
    });
    ni(["d", "e", "E"], function (n, t, i, r) {
        t[r] = s(n)
    });
    var oa = "Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"),
        sa = "Sun_Mon_Tue_Wed_Thu_Fri_Sat".split("_"), ha = "Su_Mo_Tu_We_Th_Fr_Sa".split("_");
    for (r("H", ["HH", 2], 0, "hour"), r("h", ["hh", 2], 0, function () {
        return this.hours() % 12 || 12
    }), lf("a", !0), lf("A", !1), l("hour", "h"), t("a", af), t("A", af), t("H", h), t("h", h), t("HH", h, y), t("hh", h, y), c(["H", "HH"], a), c(["a", "A"], function (n, t, i) {
        i._isPm = i._locale.isPM(n);
        i._meridiem = n
    }), c(["h", "hh"], function (n, t, i) {
        t[a] = s(n);
        e(i).bigHour = !0
    }), ce = /[ap]\.?m?\.?/i, le = yt("Hours", !0), r("m", ["mm", 2], 0, "minute"), l("minute", "m"), t("m", h), t("mm", h, y), c(["m", "mm"], lt), ae = yt("Minutes", !1), r("s", ["ss", 2], 0, "second"), l("second", "s"), t("s", h), t("ss", h, y), c(["s", "ss"], at), ve = yt("Seconds", !1), r("S", 0, 0, function () {
        return ~~(this.millisecond() / 100)
    }), r(0, ["SS", 2], 0, function () {
        return ~~(this.millisecond() / 10)
    }), r(0, ["SSS", 3], 0, "millisecond"), r(0, ["SSSS", 4], 0, function () {
        return 10 * this.millisecond()
    }), r(0, ["SSSSS", 5], 0, function () {
        return 100 * this.millisecond()
    }), r(0, ["SSSSSS", 6], 0, function () {
        return 1e3 * this.millisecond()
    }), r(0, ["SSSSSSS", 7], 0, function () {
        return 1e4 * this.millisecond()
    }), r(0, ["SSSSSSSS", 8], 0, function () {
        return 1e5 * this.millisecond()
    }), r(0, ["SSSSSSSSS", 9], 0, function () {
        return 1e6 * this.millisecond()
    }), l("millisecond", "ms"), t("S", yi, gf), t("SS", yi, y), t("SSS", yi, ne), rt = "SSSS"; rt.length <= 9; rt += "S") t(rt, /\d+/);
    for (rt = "S"; rt.length <= 9; rt += "S") c(rt, wc);
    ye = yt("Milliseconds", !1);
    r("z", 0, 0, "zoneAbbr");
    r("zz", 0, 0, "zoneName");
    n = dt.prototype;
    n.add = se;
    n.calendar = ds;
    n.clone = gs;
    n.diff = uh;
    n.endOf = vh;
    n.format = oh;
    n.from = sh;
    n.fromNow = hh;
    n.to = ch;
    n.toNow = lh;
    n.get = lu;
    n.invalidAt = nc;
    n.isAfter = nh;
    n.isBefore = th;
    n.isBetween = ih;
    n.isSame = rh;
    n.isValid = dh;
    n.lang = gr;
    n.locale = sf;
    n.localeData = hf;
    n.max = ue;
    n.min = re;
    n.parsingFlags = gh;
    n.set = lu;
    n.startOf = ah;
    n.subtract = he;
    n.toArray = bh;
    n.toObject = kh;
    n.toDate = wh;
    n.toISOString = of;
    n.toJSON = of;
    n.toString = eh;
    n.unix = ph;
    n.valueOf = yh;
    n.year = dr;
    n.isLeapYear = lo;
    n.weekYear = tc;
    n.isoWeekYear = ic;
    n.quarter = n.quarters = fc;
    n.month = yu;
    n.daysInMonth = oo;
    n.week = n.weeks = po;
    n.isoWeek = n.isoWeeks = wo;
    n.weeksInYear = uc;
    n.isoWeeksInYear = rc;
    n.date = nu;
    n.day = n.days = lc;
    n.weekday = ac;
    n.isoWeekday = vc;
    n.dayOfYear = ko;
    n.hour = n.hours = le;
    n.minute = n.minutes = ae;
    n.second = n.seconds = ve;
    n.millisecond = n.milliseconds = ye;
    n.utcOffset = ss;
    n.utc = cs;
    n.local = ls;
    n.parseZone = as;
    n.hasAlignedHourOffset = vs;
    n.isDST = ys;
    n.isDSTShifted = ps;
    n.isLocal = ws;
    n.isUtcOffset = bs;
    n.isUtc = rf;
    n.isUTC = rf;
    n.zoneAbbr = bc;
    n.zoneName = kc;
    n.dates = w("dates accessor is deprecated. Use date instead.", nu);
    n.months = w("months accessor is deprecated. Use month instead", yu);
    n.years = w("years accessor is deprecated. Use year instead", dr);
    n.zone = w("moment().zone is deprecated, use moment().utcOffset instead. https://github.com/moment/moment/issues/1779", hs);
    var ca = n, u = fu.prototype;
    u._calendar = {
        sameDay: "[Today at] LT",
        nextDay: "[Tomorrow at] LT",
        nextWeek: "dddd [at] LT",
        lastDay: "[Yesterday at] LT",
        lastWeek: "[Last] dddd [at] LT",
        sameElse: "L"
    };
    u.calendar = nl;
    u._longDateFormat = {
        LTS: "h:mm:ss A",
        LT: "h:mm A",
        L: "MM/DD/YYYY",
        LL: "MMMM D, YYYY",
        LLL: "MMMM D, YYYY h:mm A",
        LLLL: "dddd, MMMM D, YYYY h:mm A"
    };
    u.longDateFormat = tl;
    u._invalidDate = "Invalid date";
    u.invalidDate = il;
    u._ordinal = "%d";
    u.ordinal = rl;
    u._ordinalParse = /\d{1,2}/;
    u.preparse = vf;
    u.postformat = vf;
    u._relativeTime = {
        future: "in %s",
        past: "%s ago",
        s: "a few seconds",
        m: "a minute",
        mm: "%d minutes",
        h: "an hour",
        hh: "%d hours",
        d: "a day",
        dd: "%d days",
        M: "a month",
        MM: "%d months",
        y: "a year",
        yy: "%d years"
    };
    u.relativeTime = ul;
    u.pastFuture = fl;
    u.set = el;
    u.months = uo;
    u._months = ra;
    u.monthsShort = fo;
    u._monthsShort = ua;
    u.monthsParse = eo;
    u.week = ao;
    u._week = ie;
    u.firstDayOfYear = yo;
    u.firstDayOfWeek = vo;
    u.weekdays = oc;
    u._weekdays = oa;
    u.weekdaysMin = hc;
    u._weekdaysMin = ha;
    u.weekdaysShort = sc;
    u._weekdaysShort = sa;
    u.weekdaysParse = cc;
    u.isPM = yc;
    u._meridiemParse = ce;
    u.meridiem = pc;
    gt("en", {
        ordinalParse: /\d{1,2}(th|st|nd|rd)/, ordinal: function (n) {
            var t = n % 10, i = 1 === s(n % 100 / 10) ? "th" : 1 === t ? "st" : 2 === t ? "nd" : 3 === t ? "rd" : "th";
            return n + i
        }
    });
    i.lang = w("moment.lang is deprecated. Use moment.locale instead.", gt);
    i.langData = w("moment.langData is deprecated. Use moment.localeData instead.", et);
    var g = Math.abs, la = it("ms"), aa = it("s"), va = it("m"), ya = it("h"), pa = it("d"), wa = it("w"), ba = it("M"),
        ka = it("y"), da = ht("milliseconds"), ga = ht("seconds"), nv = ht("minutes"), tv = ht("hours"),
        iv = ht("days"), rv = ht("months"), uv = ht("years"), bt = Math.round, ut = {s: 45, m: 45, h: 22, d: 26, M: 11},
        tu = Math.abs, f = si.prototype;
    return f.abs = al, f.add = vl, f.subtract = yl, f.as = wl, f.asMilliseconds = la, f.asSeconds = aa, f.asMinutes = va, f.asHours = ya, f.asDays = pa, f.asWeeks = wa, f.asMonths = ba, f.asYears = ka, f.valueOf = bl, f._bubble = pl, f.get = kl, f.milliseconds = da, f.seconds = ga, f.minutes = nv, f.hours = tv, f.days = iv, f.weeks = dl, f.months = rv, f.years = uv, f.humanize = ia, f.toISOString = ci, f.toString = ci, f.toJSON = ci, f.locale = sf, f.localeData = hf, f.toIsoString = w("toIsoString() is deprecated. Please use toISOString() instead (notice the capitals)", ci), f.lang = gr, r("X", 0, 0, "unix"), r("x", 0, 0, "valueOf"), t("x", wi), t("X", /[+-]?\d+(\.\d{1,3})?/), c("X", function (n, t, i) {
        i._d = new Date(1e3 * parseFloat(n, 10))
    }), c("x", function (n, t, i) {
        i._d = new Date(s(n))
    }), i.version = "2.10.6", pe(o), i.fn = ca, i.min = es, i.max = os, i.utc = kt, i.unix = dc, i.months = ol, i.isDate = fi, i.locale = gt, i.invalid = ru, i.duration = tt, i.isMoment = nt, i.weekdays = hl, i.parseZone = gc, i.localeData = et, i.isDuration = fr, i.monthsShort = sl, i.weekdaysMin = ll, i.defineLocale = su, i.weekdaysShort = cl, i.normalizeUnits = p, i.relativeTimeThreshold = ta, i
}), function (n, t, i) {
    "use strict";
    var u = function (n, t, i) {
        i = r.extend({}, r.options, i);
        var f = r.runValidations(n, t, i);
        if (f.some(function (n) {
            return r.isPromise(n.error)
        })) throw new Error("Use validate.async if you want support for promises");
        return u.processValidationResults(f, i)
    }, r = u;
    r.extend = function (n) {
        return [].slice.call(arguments, 1).forEach(function (t) {
            for (var i in t) n[i] = t[i]
        }), n
    };
    r.extend(u, {
        version: {
            major: 0, minor: 12, patch: 0, metadata: null, toString: function () {
                var n = r.format("%{major}.%{minor}.%{patch}", r.version);
                return r.isEmpty(r.version.metadata) || (n += "+" + r.version.metadata), n
            }
        },
        Promise: typeof Promise != "undefined" ? Promise : null,
        EMPTY_STRING_REGEXP: /^\s*$/,
        runValidations: function (n, t, i) {
            var c = [], u, e, o, h, s, f, l;
            (r.isDomElement(n) || r.isJqueryElement(n)) && (n = r.collectFormValues(n));
            for (u in t) {
                o = r.getDeepObjectValue(n, u);
                h = r.result(t[u], o, n, u, i, t);
                for (e in h) {
                    if (s = r.validators[e], !s) {
                        l = r.format("Unknown validator %{name}", {name: e});
                        throw new Error(l);
                    }
                    (f = h[e], f = r.result(f, o, n, u, i, t), f) && c.push({
                        attribute: u,
                        value: o,
                        validator: e,
                        globalOptions: i,
                        attributes: n,
                        options: f,
                        error: s.call(s, o, f, u, n, i)
                    })
                }
            }
            return c
        },
        processValidationResults: function (n, t) {
            n = r.pruneEmptyErrors(n, t);
            n = r.expandMultipleErrors(n, t);
            n = r.convertErrorMessages(n, t);
            var i = t.format || "grouped";
            if (typeof r.formatters[i] == "function") n = r.formatters[i](n); else throw new Error(r.format("Unknown format %{format}", t));
            return r.isEmpty(n) ? undefined : n
        },
        async: function (n, t, i) {
            var f, u;
            return i = r.extend({}, r.async.options, i), f = i.wrapErrors || function (n) {
                return n
            }, i.cleanAttributes !== !1 && (n = r.cleanAttributes(n, t)), u = r.runValidations(n, t, i), new r.Promise(function (e, o) {
                r.waitForResults(u).then(function () {
                    var s = r.processValidationResults(u, i);
                    s ? o(new f(s, i, n, t)) : e(n)
                }, function (n) {
                    o(n)
                })
            })
        },
        single: function (n, t, i) {
            return i = r.extend({}, r.single.options, i, {
                format: "flat",
                fullMessages: !1
            }), r({single: n}, {single: t}, i)
        },
        waitForResults: function (n) {
            return n.reduce(function (n, t) {
                return r.isPromise(t.error) ? n.then(function () {
                    return t.error.then(function (n) {
                        t.error = n || null
                    })
                }) : n
            }, new r.Promise(function (n) {
                n()
            }))
        },
        result: function (n) {
            var t = [].slice.call(arguments, 1);
            return typeof n == "function" && (n = n.apply(null, t)), n
        },
        isNumber: function (n) {
            return typeof n == "number" && !isNaN(n)
        },
        isFunction: function (n) {
            return typeof n == "function"
        },
        isInteger: function (n) {
            return r.isNumber(n) && n % 1 == 0
        },
        isBoolean: function (n) {
            return typeof n == "boolean"
        },
        isObject: function (n) {
            return n === Object(n)
        },
        isDate: function (n) {
            return n instanceof Date
        },
        isDefined: function (n) {
            return n !== null && n !== undefined
        },
        isPromise: function (n) {
            return !!n && r.isFunction(n.then)
        },
        isJqueryElement: function (n) {
            return n && r.isString(n.jquery)
        },
        isDomElement: function (n) {
            return n ? !n.querySelectorAll || !n.querySelector ? !1 : r.isObject(document) && n === document ? !0 : typeof HTMLElement == "object" ? n instanceof HTMLElement : n && typeof n == "object" && n !== null && n.nodeType === 1 && typeof n.nodeName == "string" : !1
        },
        isEmpty: function (n) {
            var t;
            if (!r.isDefined(n)) return !0;
            if (r.isFunction(n)) return !1;
            if (r.isString(n)) return r.EMPTY_STRING_REGEXP.test(n);
            if (r.isArray(n)) return n.length === 0;
            if (r.isDate(n)) return !1;
            if (r.isObject(n)) {
                for (t in n) return !1;
                return !0
            }
            return !1
        },
        format: r.extend(function (n, t) {
            return r.isString(n) ? n.replace(r.format.FORMAT_REGEXP, function (n, i, r) {
                return i === "%" ? "%{" + r + "}" : String(t[r])
            }) : n
        }, {FORMAT_REGEXP: /(%?)%\{([^\}]+)\}/g}),
        prettify: function (n) {
            return r.isNumber(n) ? n * 100 % 1 == 0 ? "" + n : parseFloat(Math.round(n * 100) / 100).toFixed(2) : r.isArray(n) ? n.map(function (n) {
                return r.prettify(n)
            }).join(", ") : r.isObject(n) ? n.toString() : (n = "" + n, n.replace(/([^\s])\.([^\s])/g, "$1 $2").replace(/\\+/g, "").replace(/[_-]/g, " ").replace(/([a-z])([A-Z])/g, function (n, t, i) {
                return "" + t + " " + i.toLowerCase()
            }).toLowerCase())
        },
        stringifyValue: function (n, t) {
            var i = t && t.prettify || r.prettify;
            return i(n)
        },
        isString: function (n) {
            return typeof n == "string"
        },
        isArray: function (n) {
            return {}.toString.call(n) === "[object Array]"
        },
        isHash: function (n) {
            return r.isObject(n) && !r.isArray(n) && !r.isFunction(n)
        },
        contains: function (n, t) {
            return r.isDefined(n) ? r.isArray(n) ? n.indexOf(t) !== -1 : t in n : !1
        },
        unique: function (n) {
            return r.isArray(n) ? n.filter(function (n, t, i) {
                return i.indexOf(n) == t
            }) : n
        },
        forEachKeyInKeypath: function (n, t, i) {
            if (!r.isString(t)) return undefined;
            for (var u = "", f = !1, e = 0; e < t.length; ++e) switch (t[e]) {
                case".":
                    f ? (f = !1, u += ".") : (n = i(n, u, !1), u = "");
                    break;
                case"\\":
                    f ? (f = !1, u += "\\") : f = !0;
                    break;
                default:
                    f = !1;
                    u += t[e]
            }
            return i(n, u, !0)
        },
        getDeepObjectValue: function (n, t) {
            return r.isObject(n) ? r.forEachKeyInKeypath(n, t, function (n, t) {
                if (r.isObject(n)) return n[t]
            }) : undefined
        },
        collectFormValues: function (n, t) {
            var e = {}, f, h, i, o, s, u, c;
            if (r.isJqueryElement(n) && (n = n[0]), !n) return e;
            for (t = t || {}, o = n.querySelectorAll("input[name], textarea[name]"), f = 0; f < o.length; ++f) (i = o.item(f), r.isDefined(i.getAttribute("data-ignored"))) || (name = i.name.replace(/\./g, "\\\\."), u = r.sanitizeFormValue(i.value, t), i.type === "number" ? u = u ? +u : null : i.type === "checkbox" ? i.attributes.value ? i.checked || (u = e[name] || null) : u = i.checked : i.type === "radio" && (i.checked || (u = e[name] || null)), e[name] = u);
            for (o = n.querySelectorAll("select[name]"), f = 0; f < o.length; ++f) if (i = o.item(f), !r.isDefined(i.getAttribute("data-ignored"))) {
                if (i.multiple) {
                    u = [];
                    for (h in i.options) s = i.options[h], s && s.selected && u.push(r.sanitizeFormValue(s.value, t))
                } else c = typeof i.options[i.selectedIndex] != "undefined" ? i.options[i.selectedIndex].value : "", u = r.sanitizeFormValue(c, t);
                e[i.name] = u
            }
            return e
        },
        sanitizeFormValue: function (n, t) {
            return (t.trim && r.isString(n) && (n = n.trim()), t.nullify !== !1 && n === "") ? null : n
        },
        capitalize: function (n) {
            return r.isString(n) ? n[0].toUpperCase() + n.slice(1) : n
        },
        pruneEmptyErrors: function (n) {
            return n.filter(function (n) {
                return !r.isEmpty(n.error)
            })
        },
        expandMultipleErrors: function (n) {
            var t = [];
            return n.forEach(function (n) {
                r.isArray(n.error) ? n.error.forEach(function (i) {
                    t.push(r.extend({}, n, {error: i}))
                }) : t.push(n)
            }), t
        },
        convertErrorMessages: function (n, t) {
            t = t || {};
            var i = [], u = t.prettify || r.prettify;
            return n.forEach(function (n) {
                var f = r.result(n.error, n.value, n.attribute, n.options, n.attributes, n.globalOptions);
                if (!r.isString(f)) {
                    i.push(n);
                    return
                }
                f[0] === "^" ? f = f.slice(1) : t.fullMessages !== !1 && (f = r.capitalize(u(n.attribute)) + " " + f);
                f = f.replace(/\\\^/g, "^");
                f = r.format(f, {value: r.stringifyValue(n.value, t)});
                i.push(r.extend({}, n, {error: f}))
            }), i
        },
        groupErrorsByAttribute: function (n) {
            var t = {};
            return n.forEach(function (n) {
                var i = t[n.attribute];
                i ? i.push(n) : t[n.attribute] = [n]
            }), t
        },
        flattenErrorsToArray: function (n) {
            return n.map(function (n) {
                return n.error
            }).filter(function (n, t, i) {
                return i.indexOf(n) === t
            })
        },
        cleanAttributes: function (n, t) {
            function u(n, t, i) {
                return r.isObject(n[t]) ? n[t] : n[t] = i ? !0 : {}
            }

            function f(n) {
                var t = {};
                for (var i in n) n[i] && r.forEachKeyInKeypath(t, i, u);
                return t
            }

            function i(n, t) {
                if (!r.isObject(n)) return n;
                var u = r.extend({}, n), f;
                for (var e in n) f = t[e], r.isObject(f) ? u[e] = i(u[e], f) : f || delete u[e];
                return u
            }

            return !r.isObject(t) || !r.isObject(n) ? {} : (t = f(t), i(n, t))
        },
        exposeModule: function (n, t, i, r, u) {
            i ? (r && r.exports && (i = r.exports = n), i.validate = n) : (t.validate = n, n.isFunction(u) && u.amd && u([], function () {
                return n
            }))
        },
        warn: function (n) {
            typeof console != "undefined" && console.warn && console.warn("[validate.js] " + n)
        },
        error: function (n) {
            typeof console != "undefined" && console.error && console.error("[validate.js] " + n)
        }
    });
    u.validators = {
        presence: function (n, t) {
            return t = r.extend({}, this.options, t), (t.allowEmpty !== !1 ? !r.isDefined(n) : r.isEmpty(n)) ? t.message || this.message || "can't be blank" : void 0
        },
        length: function (n, t, i) {
            var e;
            if (r.isDefined(n)) {
                t = r.extend({}, this.options, t);
                var o = t.is, s = t.maximum, h = t.minimum, c = t.tokenizer || function (n) {
                    return n
                }, u, f = [];
                return (n = c(n), e = n.length, !r.isNumber(e)) ? (r.error(r.format("Attribute %{attr} has a non numeric value for `length`", {attr: i})), t.message || this.notValid || "has an incorrect length") : (r.isNumber(o) && e !== o && (u = t.wrongLength || this.wrongLength || "is the wrong length (should be %{count} characters)", f.push(r.format(u, {count: o}))), r.isNumber(h) && e < h && (u = t.tooShort || this.tooShort || "is too short (minimum is %{count} characters)", f.push(r.format(u, {count: h}))), r.isNumber(s) && e > s && (u = t.tooLong || this.tooLong || "is too long (maximum is %{count} characters)", f.push(r.format(u, {count: s}))), f.length > 0 ? t.message || f : void 0)
            }
        },
        numericality: function (n, t, i, u, f) {
            var h, c, a;
            if (r.isDefined(n)) {
                t = r.extend({}, this.options, t);
                var e = [], o, s, l = {
                    greaterThan: function (n, t) {
                        return n > t
                    }, greaterThanOrEqualTo: function (n, t) {
                        return n >= t
                    }, equalTo: function (n, t) {
                        return n === t
                    }, lessThan: function (n, t) {
                        return n < t
                    }, lessThanOrEqualTo: function (n, t) {
                        return n <= t
                    }, divisibleBy: function (n, t) {
                        return n % t == 0
                    }
                }, v = t.prettify || f && f.prettify || r.prettify;
                if (r.isString(n) && t.strict && (h = "^-?(0|[1-9]\\d*)", t.onlyInteger || (h += "(\\.\\d+)?"), h += "$", !new RegExp(h).test(n))) return t.message || t.notValid || this.notValid || this.message || "must be a valid number";
                if (t.noStrings !== !0 && r.isString(n) && !r.isEmpty(n) && (n = +n), !r.isNumber(n)) return t.message || t.notValid || this.notValid || this.message || "is not a number";
                if (t.onlyInteger && !r.isInteger(n)) return t.message || t.notInteger || this.notInteger || this.message || "must be an integer";
                for (o in l) s = t[o], r.isNumber(s) && !l[o](n, s) && (c = "not" + r.capitalize(o), a = t[c] || this[c] || this.message || "must be %{type} %{count}", e.push(r.format(a, {
                    count: s,
                    type: v(o)
                })));
                return t.odd && n % 2 != 1 && e.push(t.notOdd || this.notOdd || this.message || "must be odd"), t.even && n % 2 != 0 && e.push(t.notEven || this.notEven || this.message || "must be even"), e.length ? t.message || e : void 0
            }
        },
        datetime: r.extend(function (n, t) {
            if (!r.isFunction(this.parse) || !r.isFunction(this.format)) throw new Error("Both the parse and format functions needs to be set to use the datetime/date validator");
            if (r.isDefined(n)) {
                t = r.extend({}, this.options, t);
                var i, u = [], f = t.earliest ? this.parse(t.earliest, t) : NaN,
                    e = t.latest ? this.parse(t.latest, t) : NaN;
                return (n = this.parse(n, t), isNaN(n) || t.dateOnly && n % 864e5 != 0) ? (i = t.notValid || t.message || this.notValid || "must be a valid date", r.format(i, {value: arguments[0]})) : (!isNaN(f) && n < f && (i = t.tooEarly || t.message || this.tooEarly || "must be no earlier than %{date}", i = r.format(i, {
                    value: this.format(n, t),
                    date: this.format(f, t)
                }), u.push(i)), !isNaN(e) && n > e && (i = t.tooLate || t.message || this.tooLate || "must be no later than %{date}", i = r.format(i, {
                    date: this.format(e, t),
                    value: this.format(n, t)
                }), u.push(i)), u.length ? r.unique(u) : void 0)
            }
        }, {parse: null, format: null}),
        date: function (n, t) {
            return t = r.extend({}, t, {dateOnly: !0}), r.validators.datetime.call(r.validators.datetime, n, t)
        },
        format: function (n, t) {
            (r.isString(t) || t instanceof RegExp) && (t = {pattern: t});
            t = r.extend({}, this.options, t);
            var f = t.message || this.message || "is invalid", i = t.pattern, u;
            if (r.isDefined(n)) return r.isString(n) ? (r.isString(i) && (i = new RegExp(t.pattern, t.flags)), u = i.exec(n), !u || u[0].length != n.length ? f : void 0) : f
        },
        inclusion: function (n, t) {
            if (r.isDefined(n) && (r.isArray(t) && (t = {within: t}), t = r.extend({}, this.options, t), !r.contains(t.within, n))) {
                var i = t.message || this.message || "^%{value} is not included in the list";
                return r.format(i, {value: n})
            }
        },
        exclusion: function (n, t) {
            if (r.isDefined(n) && (r.isArray(t) && (t = {within: t}), t = r.extend({}, this.options, t), r.contains(t.within, n))) {
                var i = t.message || this.message || "^%{value} is restricted";
                return r.format(i, {value: n})
            }
        },
        email: r.extend(function (n, t) {
            t = r.extend({}, this.options, t);
            var i = t.message || this.message || "is not a valid email";
            if (r.isDefined(n)) return r.isString(n) ? this.PATTERN.exec(n) ? void 0 : i : i
        }, {PATTERN: /^[a-z0-9\u007F-\uffff!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9\u007F-\uffff!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z]{2,}$/i}),
        equality: function (n, t, i, u, f) {
            var e;
            if (r.isDefined(n)) {
                if (r.isString(t) && (t = {attribute: t}), t = r.extend({}, this.options, t), e = t.message || this.message || "is not equal to %{attribute}", r.isEmpty(t.attribute) || !r.isString(t.attribute)) throw new Error("The attribute must be a non empty string");
                var o = r.getDeepObjectValue(u, t.attribute), s = t.comparator || function (n, t) {
                    return n === t
                }, h = t.prettify || f && f.prettify || r.prettify;
                if (!s(n, o, t, i, u)) return r.format(e, {attribute: h(t.attribute)})
            }
        },
        url: function (n, t) {
            var i, u, e;
            if (r.isDefined(n)) {
                t = r.extend({}, this.options, t);
                var f = t.message || this.message || "is not a valid url",
                    o = t.schemes || this.schemes || ["http", "https"], s = t.allowLocal || this.allowLocal || !1;
                return r.isString(n) ? (i = "^(?:(?:" + o.join("|") + ")://)(?:\\S+(?::\\S*)?@)?(?:", u = "(?:\\.(?:[a-z\\u00a1-\\uffff]{2,}))", s ? u += "?" : i += "(?!(?:10|127)(?:\\.\\d{1,3}){3})(?!(?:169\\.254|192\\.168)(?:\\.\\d{1,3}){2})(?!172\\.(?:1[6-9]|2\\d|3[0-1])(?:\\.\\d{1,3}){2})", i += "(?:[1-9]\\d?|1\\d\\d|2[01]\\d|22[0-3])(?:\\.(?:1?\\d{1,2}|2[0-4]\\d|25[0-5])){2}(?:\\.(?:[1-9]\\d?|1\\d\\d|2[0-4]\\d|25[0-4]))|(?:(?:[a-z\\u00a1-\\uffff0-9]-*)*[a-z\\u00a1-\\uffff0-9]+)(?:\\.(?:[a-z\\u00a1-\\uffff0-9]-*)*[a-z\\u00a1-\\uffff0-9]+)*" + u + ")(?::\\d{2,5})?(?:[/?#]\\S*)?$", e = new RegExp(i, "i"), e.exec(n) ? void 0 : f) : f
            }
        }
    };
    u.formatters = {
        detailed: function (n) {
            return n
        }, flat: r.flattenErrorsToArray, grouped: function (n) {
            var t;
            n = r.groupErrorsByAttribute(n);
            for (t in n) n[t] = r.flattenErrorsToArray(n[t]);
            return n
        }, constraint: function (n) {
            var t;
            n = r.groupErrorsByAttribute(n);
            for (t in n) n[t] = n[t].map(function (n) {
                return n.validator
            }).sort();
            return n
        }
    };
    u.exposeModule(u, this, n, t, i)
}.call(this, typeof exports != "undefined" ? exports : null, typeof module != "undefined" ? module : null, typeof define != "undefined" ? define : null);
validate.extend(validate.validators.datetime, {
    parse: function (n) {
        return +moment.utc(n)
    }, format: function (n, t) {
        var i = t.dateOnly ? "YYYY-MM-DD" : "YYYY-MM-DD hh:mm:ss";
        return moment.utc(n).format(i)
    }
});
window.NodeList && !NodeList.prototype.forEach && (NodeList.prototype.forEach = Array.prototype.forEach);
loadingSpinner = '<svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="35px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve"> <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946 s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634 c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/> <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0 C22.32,8.481,24.301,9.057,26.013,10.047z"> <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatCount="indefinite"/> <\/path> <\/svg><\/div>';
window.addEventListener("DOMContentLoaded", () => {
    setQueryParams(), createImpression()
});
var triggerInputEvent = new Event("input", {bubbles: !0, cancelable: !0}), constraints = {
    Email: {presence: !0, email: !0},
    First_name: {
        presence: !0,
        length: {minimum: 2, maximum: 20},
        format: {pattern: "^([^0-9]*)$", flags: "i", message: "can only contain letters"}
    },
    Last_name: {
        presence: !0,
        length: {minimum: 2, maximum: 20},
        format: {pattern: "^([^0-9]*)$", flags: "i", message: ": can only contain letters"}
    },
    Name_on_card: {
        presence: !0,
        length: {minimum: 3, maximum: 20},
        format: {pattern: "^([^0-9]*)$", flags: "i", message: "can only contain letters"}
    },
    Card_CVV: {presence: !0, format: {pattern: "^[0-9]{3}$", message: "does not appear valid"}},
    Card_number: {presence: !0},
    Mobile_phone: {presence: !0},
    Work_phone: {presence: !0},
    Age: {presence: !0},
    Employer_name: {presence: !0, length: {minimum: 2}},
    Job_title: {presence: !0, length: {minimum: 3}},
    Net_monthly_amount: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Retirement_pension_benefits: {
        presence: !0,
        format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}
    },
    Government_benfits: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Other_income: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Total_monthly_income: {
        presence: !0,
        numericality: {onlyInteger: !0, greaterThan: 499, lessThan: 1e4, message: " must be between 500 and 9999"}
    },
    Mortgage_or_Rent: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Monthly_credit_commitments: {
        presence: !0,
        format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}
    },
    Utilities: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Transport: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Alcoholic_drinks_and_tobacco: {
        presence: !0,
        format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}
    },
    Health_beauty: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Recreation: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Restaurants: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Education: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Clothing_and_footwear: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Household_goods_and_services: {
        presence: !0,
        format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}
    },
    Communication_and_entertainment: {
        presence: !0,
        format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}
    },
    Council_tax: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Food: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    Other_expenses: {presence: !0, format: {pattern: "[0-9]+", flags: "i", message: "field must be a number"}},
    address: {presence: !0, length: {minimum: 3}},
    House_name_or_number: {presence: !0},
    Postal_code: {presence: !0},
    Street: {presence: !0, length: {minimum: 3}},
    City_or_town: {presence: !0, length: {minimum: 3, maximum: 20}},
    County: {presence: !0, length: {minimum: 3, maximum: 20}},
    Bank_account_number: {
        presence: !0,
        length: {minimum: 1, maximum: 40},
        format: {pattern: "[0-9]+", flags: "i", message: "must be a number"}
    }
}, form = document.querySelector("form#uPingForm"), inputs = document.querySelectorAll("input, textarea, select");
for (i = 0; i < inputs.length; ++i) inputs.item(i).addEventListener("input", function () {
    var n = validate(form, constraints) || {};
    showErrorsForInput(this, n[this.name])
});
String.prototype.startsWith || (String.prototype.startsWith = function (n, t) {
    return t = t || 0, this.substr(t, n.length) === n
});
// validate.validators.mobilePhoneValidator = function (n, t) {
//     var i = t.trim().replace(/[^0-9]/g, ""), r = /^(\d){10,11}$/.test(i);
//     return r && (i.length == 10 ? i.startsWith("7") || (r = !1) : i.startsWith("07") || (r = !1)), r ? null : "does not appear to be valid"
// };
// validate.validators.homePhoneValidator = function (n, t) {
//     var i = t.trim().replace(/[^0-9]/g, ""), r = /^(\d){10,11}$/.test(i);
//     return r && i.length > 0 && (i.length == 10 ? i.startsWith("1") || i.startsWith("2") || i.startsWith("7") || (r = !1) : i.length == 11 ? i.startsWith("01") || i.startsWith("02") || i.startsWith("07") || (r = !1) : r = !1), r ? null : "does not appear to be valid"
// };
// validate.validators.workPhoneValidator = function () {
//     return !0
// };
// validate.validators.postCodeValidator = function (n, t) {
//     var i = t.trim(),
//         r = /^([Gg][Ii][Rr] 0[Aa]{2})|((([A-Za-z][0-9]{1,2})|(([A-Za-z][A-Ha-hJ-Yj-y][0-9]{1,2})|(([A-Za-z][0-9][A-Za-z])|([A-Za-z][A-Ha-hJ-Yj-y][0-9]?[A-Za-z])))) [0-9][A-Za-z]{2})$/i.test(i);
//     return r ? null : "does not appear to be valid"
// };
// validate.validators.dobValidator = function (n, t) {
//     var r = t.trim().replace(/^\/|\/$/g, ""), i = parseInt(moment(t, "D/M/YYYY", !0).fromNow()),
//         u = /^([1-9]|0?[1-9]|[1-3]{1}[0-9]{1})\/([1-9]|0?[1-9]|[1]{1}[0-2])\/(19|20)[0-9]{2}$/.test(r) && i >= 18 && i <= 110;
//     return u ? null : "must be over 18 years (Format: DD/MM/YYYY)"
// };
validate.validators.dobValidator = function (n, t) {
    var r = t.trim().replace(/^\/|\/$/g, ""), i = parseInt(moment(t, "M/D/YYYY", !0).fromNow()),
        u = /^([1-9]|0?[1-9]|[1-3]{1}[0-9]{1})\/([1-9]|0?[1-9]|[1]{1}[0-2])\/(19|20)[0-9]{2}$/.test(r) && i >= 18 && i <= 110;
    return u ? null : "must be over 18 years (Format: DD/MM/YYYY)"
};
// validate.validators.sortCodeValidator = function (n, t) {
//     var i = t.trim().replace(/-/g, ""), r = /^(\d){6}$/.test(i);
//     return r ? null : "does not appear to be valid"
// };
validate.validators.firstNameValidator = function (n, t) {
    var i = t.trim(), r = document.getElementById("lastname").value.trim(), u = i.toUpperCase() !== r.toUpperCase();
    return u ? null : "and last name cannot match"
};
validate.validators.lastNameValidator = function (n, t) {
    var i = t.trim(), r = document.getElementById("firstname").value.trim(), u = i.toUpperCase() !== r.toUpperCase();
    return u ? null : "and first name cannot match"
};
validate.validators.streetValidator = function (n, t) {
    var i = t.trim(), r = document.getElementById("housenamenumber").value.trim(),
        u = i.toUpperCase() !== r.toUpperCase();
    return u ? null : "and house name/number cannot match"
};
validate.validators.houseNameNumberValidator = function (n, t) {
    var i = t.trim(), r = document.getElementById("housestreet").value.trim(), u = i.toUpperCase() !== r.toUpperCase();
    return u ? null : "and street cannot match"
};
validate.validators.bankCardValidator = function (n, t) {
    var i = t.replace(/\s/g, "").trim(), r;
    return r = /^(\d){16}$/.test(i) ? /^(?:4[0-9]{12}(?:[0-9]{3})?)$/.test(i) || /^(?:5[1-5][0-9]{14})$/.test(i) : !1, r ? null : "does not appear to be valid. Only enter numbers."
};
var mobilePhoneInput = document.getElementById("mobilephone"), homePhoneInput = document.getElementById("homephone"),
    workphoneInput = document.getElementById("mobilephone"),
    // postalCodeInput = document.getElementById("postcode"),
    dobInput = document.getElementById("dob"),
    nextPayDateInput = document.getElementById("nextPayDate"),
    followingPayDateInput = document.getElementById("followingPayDate"),
    sortCodeInput = document.getElementById("sortcode"),
    firstNameInput = document.getElementById("firstname"), lastNameInput = document.getElementById("lastname"),
    streetInput = document.getElementById("housestreet"),
    houseNameNumberInput = document.getElementById("housenamenumber"),
    cardNumberInput = document.getElementById("offer_cardnumber");
firstNameInput.addEventListener("input", function (n) {
    var t = validate(form, {First_name: {firstNameValidator: n.target.value}});
    return t ? showErrorsForInput(this, t[this.name]) : null
});
lastNameInput.addEventListener("input", function (n) {
    var t = validate(form, {Last_name: {lastNameValidator: n.target.value}});
    return t ? showErrorsForInput(this, t[this.name]) : null
});
mobilePhoneInput.addEventListener("input", function (n) {
    var t = validate(form, {Mobile_phone: {mobilePhoneValidator: n.target.value}});
    return t ? showErrorsForInput(this, t[this.name]) : null
});
// homePhoneInput.addEventListener("input", function (n) {
//     var t = validate(form, {Home_phone: {homePhoneValidator: n.target.value}});
//     return t ? showErrorsForInput(this, t[this.name]) : null
// });
// postalCodeInput.addEventListener("input", function (n) {
//     var t = n.target.value, r = [t.replace(/-/g, "")], i, u;
//     if (t.length > 4) for (i = 0; i < r.length; i++) r[i].match(/^([A-Z]{1,2}\d{1,2}[A-Z]?)\s*(\d[A-Z]{2})$/i) && (t = r[i].match(/^([A-Z]{1,2}\d{1,2}[A-Z]?)\s*(\d[A-Z]{2})$/i), t.shift(), t = t.join(" ").toUpperCase());
//     return n.target.value = t.trim(), u = validate(form, {Postal_code: {postCodeValidator: n.target.value}}), u ? showErrorsForInput(this, u[this.name]) : null
// });
dobInput.addEventListener("input", function (n) {
    var t = validate(form, {Age: {dobValidator: n.target.value}});
    return t ? showErrorsForInput(this, t[this.name]) : null
});
streetInput.addEventListener("input", function (n) {
    var t = validate(form, {Street: {streetValidator: n.target.value}});
    return t ? showErrorsForInput(this, t[this.name]) : null
});
houseNameNumberInput.addEventListener("input", function (n) {
    var t = validate(form, {House_name_or_number: {houseNameNumberValidator: n.target.value}});
    return t ? showErrorsForInput(this, t[this.name]) : null
});
cardNumberInput.addEventListener("input", function (n) {
    var t = validate(form, {Card_number: {bankCardValidator: n.target.value}});
    return t ? showErrorsForInput(this, t[this.name]) : null
});
dobInput.addEventListener("keyup", function (n) {
    backSpace = n.key == "Backspace";
    var t = n.target.value, i = t;
    backSpace ? t = n.target.value : (i.match(/^\d{2}$/) != null ? t = i + "/" : i.match(/^\d{2}\/\d{2}$/) != null && (t = i + "/"), n.target.value = t.replace(/\/\//g, "/"))
});
nextPayDateInput.addEventListener("keyup", function (n) {
    backSpace = n.key == "Backspace";
    var t = n.target.value, i = t;
    backSpace ? t = n.target.value : (i.match(/^\d{2}$/) != null ? t = i + "/" : i.match(/^\d{2}\/\d{2}$/) != null && (t = i + "/"), n.target.value = t.replace(/\/\//g, "/"))
});
followingPayDateInput.addEventListener("keyup", function (n) {
    backSpace = n.key == "Backspace";
    var t = n.target.value, i = t;
    backSpace ? t = n.target.value : (i.match(/^\d{2}$/) != null ? t = i + "/" : i.match(/^\d{2}\/\d{2}$/) != null && (t = i + "/"), n.target.value = t.replace(/\/\//g, "/"))
});
dobInput.addEventListener("keyup", function (n) {
    dobToEpoch(n);
    console.log(dobToEpoch(n))
});
// sortCodeInput.addEventListener("keyup", function (n) {
//     var t, i;
//     (backSpace = n.key == "Backspace", t = n.target.value, t) && (i = t, backSpace || isNaN(event.target.value.replace(/-/g, "")) ? t = n.target.value : n.target.value = t.match(/\d{2}(?=\d{1,2})|\d+/g).join("-"))
// });
var emailInput = document.getElementById("email"), errorBlock = document.querySelector("#email-div p.help-block.error"),
    emailContainer = document.getElementById("email-div");
loanPurposeElement = document.getElementById("loanPurposeDescription");
var progressDiv = document.getElementById("progress_div"), statusText = document.getElementById("status-text"),
    countdownDiv = document.getElementById("countdown-div");
var creditModal = document.getElementById("credit-modal"), opaque = document.getElementById("opaque"),
    offerCheckbox = document.getElementById("RequestSpecialOffer");
window.onclick = function (n) {
    n.target == opaque && (opaque.style.display = "none", creditModal.classList.add("hide_element"), offerCheckbox.checked = !1)
};
currentSection = 0;
showSection(currentSection);
jobFields = document.getElementById("job_fields");
incomeMessageDiv = document.getElementById("income-message");
$(function () {
    $(".partner-list-link").length && $(".partner-list-link").click(function (n) {
        return alert("Active Securities Limited: 20-22 Wenlock Road, London, N1 7GU. Email: office@activesecurities.com\n\nIMT Technologies Limited: 3rd Floor, 207 Regent Street, London, W1B 3HH. Email: contact@imttech.co.uk\n\nProvident Personal Credit Limited trading as Provident and Satsuma Loans, Registered Office: 1 Godwin Street, Bradford BD1 2SU. Email: customerrelations@provident.co.uk\n\nYour Social Insights Limited: Kemp House, 152-160 City Road, London, England, EC1V 2NX. Email: contact@yoursocialinsights.co.uk\n\nIPNET LTD Great Western House, Boundary Lane, Chester, CH4 8RD. Email: contact@indigopapa.co"), n.preventDefault(), !0
    })
})


function validateBankAccountNumber(accountNumber) {
    // Remove any whitespace from the account number
    accountNumber = accountNumber.trim();

    // Define a regular expression for a valid USA bank account number
    var accountNumberRegex = /^[0-9]{9,17}$/;

    // Check if the account number matches the regular expression
    if (!accountNumberRegex.test(accountNumber)) {
        // If the account number is invalid, display an error message
        document.getElementById("accountnumber").classList.add("is-invalid");
        document.querySelector(".messages").innerHTML = "Please enter a valid USA bank account number (9-17 digits)";
    } else {
        // If the account number is valid, remove any error messages
        document.getElementById("accountnumber").classList.remove("is-invalid");
        document.querySelector(".messages").innerHTML = "";
    }
}


function checkMobileNumber(event) {
    var input = event.target;
    var inputValue = input.value.trim().replace(/[-\/\\^$*+?.()|[\]{}]/g, ''); // remove any slashes and hyphens
    var mobileNumberRegex = /^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;

    if (mobileNumberRegex.test(inputValue)) {
        input.setCustomValidity('');
    } else {
        input.setCustomValidity('Please enter a valid US mobile phone number.');
    }
}

