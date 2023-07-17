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
        .then(response => response.json())
        .then(responseData => {
            console.log('POST::', responseData);
            debugger;

            var checkStatusID = responseData[0].CheckStatusID;
            console.log('checkStatus ID::', checkStatusID);
            console.log('POST::', responseData);
            debugger;

            var i = "https://portal.loanieloans.com/api/check-lead-status/" + checkStatusID;
            var t = setInterval(() => {
                var r;
                fetch(i, { method: "GET", headers: { "Content-Type": "application/json" } })
                    .then(response => response.json())
                    .then(data => {
                        r = data;
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
                            // trackFacebookConversion(r);
                            // trackGoogleConversion(r);
                            // trackBingConversion(u, r);
                            clearInterval(t);
                            return false;
                        }

                        if (e == "NoLenderFound" || f == 100 && !i) {
                            countdownDiv.classList.add("hide_element");
                            console.warn("no lender");
                            statusText.innerHTML = "Could not match you with a lender at this time. Please try again.";
                            clearInterval(t);
                            return;
                        }
                    });
            }, 2500);
        });
}


