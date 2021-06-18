
function autocomplete(inp, arr) {

    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input  type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    var page_name;
                    switch(inp.value) {
                        case 'ESI Claim':
                            page_name = 'esi_claim';
                            break;
                        case 'PF Claim':
                            page_name = 'esi_claim';
                            break;
                        case 'Salary Dues':
                            page_name='salary_dues';
                            break;
                        case 'Sexual Harrasment':
                            page_name = 'harrashment';
                            break;
                        case 'Violation Of Agreement Of Employment':
                            page_name='voilation_aggrement';
                            break;
                        case 'Gratuity Claim':
                            page_name='gratuity_claim';
                            break;
                        case 'Wrongful Termination':
                            page_name='wrongful_termination';
                            break;
                        case 'Abuse Of Power':
                            page_name='abuse_power';
                            break;
                        case 'Non Payment Of Salary':
                            page_name='non_payment_salary';
                            break;
                        case 'Misconduct Notices':
                            page_name='misconduct_notice';
                            break;
                        case 'Suspension Notices':
                            page_name='suspension_notice';
                            break;
                        case 'Termination Notices':
                            page_name='termination_notice';
                            break;
                        case 'Retrenchment Notices':
                            page_name='retrenchment_notice';
                            break;
                        case 'Reply To Notices':
                            page_name='reply_notice';
                            break;
                        case 'Reply To SARFAESI':
                            page_name='sarfaesi_notice';
                            break;
                        case 'Title Deed Notices':
                            page_name='title_deed';
                            break;
                        case 'Encroachment Notice':
                            page_name='encroachment';
                            break;
                        case 'Trespassing Notice':
                            page_name='trespassing';
                            break;
                        case 'Notice To Administration':
                            page_name='administration';
                            break;
                        case 'Lessor and Lessee Disputes':
                            page_name='lessor_dispute';
                            break;
                        case 'Termination Rental':
                            page_name='termination_rental';
                            break;
                        case 'Arbitration Notice':
                            page_name='arbitration_rental';
                            break;
                        case 'Delay In Construction':
                            page_name='delay_in_construction';
                            break;
                        case 'Divorce Application':
                            page_name='divorce_application';
                            break;
                        case 'Violation of Prenuptial Agreement':
                            page_name='voilation_aggrement';
                            break;
                        case 'Agreement Draft':
                            page_name='agreement_draft';
                            break;
                        case 'Consumer Case':
                            page_name='consumernotice';
                            break;
                        case 'Motor Vehicle Claim':
                            page_name='motor_vehicle_claim';
                            break;
                        case 'Life Insurance Claim':
                            page_name='life_insurance_claim';
                            break;
                        case 'Health Insurance Claim':
                            page_name='health_insurance';
                            break;
                        case 'Accidental Claim':
                            page_name='accidental_claim';
                            break;
                        case 'Medical Negligence':
                            page_name='medical_negligence';
                            break;

                        default:
                        // code block
                    }
                    const base_url =  window.location.origin;
                    window.location.href = base_url+"/Home/basic_details?autosuggest=1&page_name="+page_name
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
            }
        }
    });
    function addActive(x) {
        alert("inside add active");
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }
    function closeAllLists(elmnt) {

        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
}

/*An array containing all the country names in the world:*/
var countries = ["PF Claim","ESI Claim","Salary Dues","Sexual Harrasment",
    "Violation Of Agreement Of Employment",
    "Gratuity Claim","Wrongful Termination","Abuse Of Power",
    "Non Payment Of Salary","Misconduct Notices","Suspension Notices",
    "Termination Notices","Retrenchment Notices",
    "Reply To Notices","Reply To SARFAESI","Title Deed Notices","Encroachment Notice",
    "Trespassing Notice","Notice To Administration","Lessor and Lessee Disputes","Termination Notice",
    "Arbitration Notice","Delay In Construction","Divorce Application","Violation of Prenuptial Agreement",
    "Agreement Draft","Consumer Case","Product / Service","Motor Vehicle Claim",
    "Life Insurance Claim","Health Insurance Claim","Accidental Claim",
    "Medical Negligence"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
