<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Claim Form</title>
    <meta name="description" content="My Application Description">
    <meta name="author" content="ClaimForm">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
<div class="w-3/4 lg:w-2/3 mx-auto rounded-md shadow-lg bg-white m-20 p-10">
  <div class="">
    <h2 class="text-5xl bg-blue-600 p-6 text-white">BUPA GLOBAL</h2>
    <img src="" alt="">
  </div>
      <form class="" action="index.html" method="post">
        <div class="border-2 border-blue-500 p-6 mt-8">
          <h4 class="text-center text-2xl text-blue-500">IMPORTANT INFORMATION</h4>
            <p class="mb-2">Return this form with original, or copy invoices via email, fax or post to; info@bupa-intl.com, Fax: +44 (0) 1273 820 517, or post:  Bupa Global, Victory House, Trafalgar Place, Brighton, BN1 4FY, UK. Claims can also be submitted as eClaims via Membersworld.  </p>
            <p class="mb-2">Please ensure that all sections of the claim form are fully completed. Note that claims payment may be delayed if all sections of the claim form are not  completed in full. The form should be returned to us within six months of the initial treatment date. <b>Please write clearly in black ink and BLOCK CAPITALS.</b></p>
          <p class="">Please complete a new/ separate claim form for:</p>
          <div class="flex md:flex-row text-center my-6">
            <div class="flex-1">
              <input class="w-2.5 mr-2" type="radio" name="case-type" value="each patient">
              <label class="text-sm" for="each patient">each patient</label>
            </div>
            <div class="flex-1">
              <input class="w-2.5 mr-2" type="radio" name="case-type" value="each in-patient">
              <label class="text-sm" for="each in-patient">each in-patient/ day-case stay</label>
            </div>
            <div class="flex-1">
              <input class="w-2.5 mr-2" type="radio" name="case-type" value="each medical condition">
              <label class="text-sm" for="each medical condition">each medical condition</label>
            </div>
            <div class="flex-1">
              <input class="w-2.5 text-blue-400 mr-2" type="radio" name="case-type" value="each currency">
              <label class="text-sm" for="each currency">each currency</label>
            </div>
          </div>
          <p class="mb-2">If you have more invoices, you do not need to send a further claim form. Just send the invoices with a covering letter stating the condition and payment  instructions. If the condition continues for more than six months, we may request a new claim form to be completed.</p>
          <p>We are unable to return original documents, but we will be happy to provide certified copies on request. </p>
        </div>
        <div class="my-8">
          <h3 class="bg-blue-500 text-white p-2">PATIENT DETAILS</h3>
          <div class="flex  my-4">
            <div class="w-3/6">
              <b class="">Patient membership number:</b><br>
              <p><span class="input-group-addon absolute mt-6">BI - </span>
              <input class="mt-4 shadow ml-8 w-6 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="" value=""></p>
            </div>
            <div class="w-4/5 ml-32">
              <b class="mb-8">Group name (if applicable):</b><br>
              <input class="mt-4 shadow appearance-none border rounded w-5/6 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="" value="">
            </div>
          </div>
          <div class="">
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Title">
              <input class="ml-32 shadow appearance-none border-l-0 border-r border-t border-b rounded w-2/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="First Name">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="first-name" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Family name">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="family-name" value="">
            </div>
            <div class="mb-4">
              <input class="absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Other names">
              <input class="ml-32 shadow appearance-none border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="other-names" value="">
            </div>
            <div class="flex my-4">
              <div class="flex-none">
                <input class="absolute w-40 bg-gray-300 rounded-l py-2.5 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Date of birth">
                <input class="ml-40 shadow appearance-none border-l-0 border-r border-t border-b rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="date-of-birth" value="">
              </div>
              <div class="flex-1 ml-16">
                <input class="absolute w-40 bg-gray-300 rounded-l py-2.5 px-3 leading-tight m-px ml-8" type="text" disabled="disabled" name="" value="Age last birthday">
                <input class="ml-48 shadow appearance-none border-l-0 border-r border-t border-b rounded w-3/5 py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="age-last-birthday" value="">
              </div>
            </div>
            <b class="my-4">Correspondence address:</b><br>
            <div class="my-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Building">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="building" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Street">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="street" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Town / city">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="town-city" value="">
            </div>
            <div class="flex my-4">
              <div class="flex-none">
                <input class="absolute w-40 bg-gray-300 rounded-l py-2.5 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Area code">
                <input class="ml-40 shadow appearance-none border-l-0 border-r border-t border-b rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="area-code" value="">
              </div>
              <div class="flex-1 ml-16">
                <input class="absolute w-40 bg-gray-300 rounded-l py-2.5 px-3 leading-tight m-px ml-8" type="text" disabled="disabled" name="" value="P.O.Box">
                <input class="ml-48 shadow appearance-none border-l-0 border-r border-t border-b rounded w-3/5 py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="p.o.box" value="">
              </div>
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Region">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="region" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Country">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="country" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Email">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="email" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Telephone">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="telephone" value="">
            </div>
            <div class="flex mb-4">
              <p class="flex-auto">Is this your permanent residency address?</p>
              <div class="flex-1">
                <label class="mr-2" for="yes">Yes</label>
                <input type="radio" name="residence" value="no">
              </div>
              <div class="flex-1">
                <label class="mr-2" for="no">No</label>
                <input type="radio" name="residence" value="yes">
              </div>
            </div>
            <div class="flex mb-4">
              <p class="w-7/12">Do you want all future correspondence sent to this address?</p>
              <div class="flex-1 -ml-20">
                <label class="mr-2" for="yes">Yes</label>
                <input type="radio" name="future-address" value="no">
              </div>
              <div class="flex-1">
                <label class="mr-2" for="no">No</label>
                <input type="radio" name="future-address" value="yes">
              </div>
            </div>
            <div class="flex mb-4">
              <p class="w-6/12">Do you have a residence in the USA?</p>
              <div class="flex-1 ml-4">
                <label class="mr-2" for="yes">Yes</label>
                <input type="radio" name="usa-residence" value="no">
              </div>
              <div class="flex-1">
                <label class="mr-2" for="no">No</label>
                <input type="radio" name="usa-residence" value="yes">
              </div>
            </div>
            <div class="flex mb-4">
              <label class="flex-initial py-2 w-3/5" for="treatment-country">In which country did the treatment take place?</label>
              <input class="-mx-56 shadow appearance-none border-l-0 border-r border-t border-b rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="treatment-country" value="">
            </div>
            <div class="flex mb-4">
              <label class="flex-initial py-2 w-3/5" for="currency">What is the currency of the invoice?</label>
              <input class="-mx-56 shadow appearance-none border-l-0 border-r border-t border-b rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="currency" value="">
            </div>
            <div class="flex mb-4">
              <label class="flex-initial py-2 w-3/5" for="total">What is the total amount of the claim?</label>
              <input class="-mx-56 shadow appearance-none border-l-0 border-r border-t border-b rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="total" value="">
            </div>
          </div>
        </div>
        <div class="my-8">
          <h3 class="bg-blue-500 text-white p-2 mb-4">MEDICAL DETAILS</h3>
          <b>Medical practioner's details:</b><br>
          <div class="mt-4">
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Name">
              <input class="ml-32 shadow appearance-none border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="practioner-name" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Address">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="address" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Qualifications">
              <input class="ml-32 shadow appearance-none border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="qualifications" value="">
            </div>
            <div class="mb-4">
              <input class="absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Diagnosis">
              <input class="mb-4 ml-32 shadow appearance-none border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="diagnosis" value="">
              <input class="w-11/12 h-24 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="diagnosis" value="">
            </div>
            <div class="flex mb-4">
              <label class="flex-initial py-2 w-3/5" for="symptom-date">Onset date when symptoms first noticed by patient</label>
              <input class="mx-48 shadow appearance-none border-l-0 border-r border-t border-b rounded w-2/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="symptom-date" value="">
            </div>
            <div class="flex mb-4">
              <label class="flex-initial py-2 w-3/5" for="symptom-date">When did the patient first see a doctor?</label>
              <input class="mx-48 shadow appearance-none border-l-0 border-r border-t border-b rounded w-2/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="first-doc-visit" value="">
            </div>
            <div class="mb-4">
              <input class="w-38 mb-2 bg-gray-300 border-l-0 border-r border-t border-b rounded py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Details of treatment?">
              <input class="w-11/12 h-24 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="treatment-details" value="">
            </div>
            <div class="mb-4">
              <input class="w-38 mb-2 bg-gray-300 border-l-0 border-r border-t border-b rounded py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Details of operation?">
              <input class="w-11/12 h-24 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="operation-details" value="">
            </div>
            <div class="mb-4">
              <input class="w-38 mb-2 bg-gray-300 border-l-0 border-r border-t border-b rounded py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Details of medication?">
              <input class="w-11/12 h-24 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="medication-details" value="">
            </div>
          </div>

        <div class="">
          <b>Dental treatment</b><br>
          <div class="flex my-4">
            <div class="w-full">
              <label class="mr-1" for="yes">Annual Check</label>
              <input class="mr-12" type="radio" name="annual-check" value="no">
              <label class="mr-1 flex-1" for="yes">Preventative</label>
              <input class="mr-12" type="radio" name="preventative" value="no">
            </div>
            <div class="w-full">
              <label class="mr-1" for="yes">Major Restorative</label>
              <input class="mr-12" type="radio" name="major-restorative" value="no">
              <label class="mr-1" for="yes">Orthodontics</label>
              <input class="mr-12" type="radio" name="orthodontics" value="no">
            </div>
            <div class="w-full">
              <label class="mr-1" for="yes">Accident/ emergency treatment</label>
              <input class="mr-12" type="radio" name="accident" value="no">
            </div>
          </div>
          <div class="mb-6">
            <input class="w-38 mb-2 bg-gray-300 border-l-0 border-r border-t border-b rounded py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Details of treatment?">
            <input class="w-11/12 h-24 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="treatment-details" value="">
          </div>
          <div class="flex mb-6">
            <b class="py-2 w-40">Hospital dates:</b>
            <label class="py-2 w-36" for="admission-date">Admission date: </label>
            <input class="mr-8 shadow appearance-none border-l-0 border-r border-t border-b rounded w-1/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="admission-date" value="">
            <label class="py-2 w-36" for="discharge-date">Discharge date: </label>
            <input class="shadow appearance-none border-l-0 border-r border-t border-b rounded w-1/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="discharge-date" value="">
          </div>
          <div class="flex w-11/12 mb-4">
            <b class="flex-1 py-2">Name and address of admitting hospital:</b>
            <label class="py-2 px-3" for="reference">Reference Number:</label>
            <input class="flex-1 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="reference" value="">
          </div>
          <div class="">
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Name">
              <input class="ml-32 shadow appearance-none border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="hospital-name" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Address">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="hospital-address" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Telephone">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="tel" name="telephone" placeholder="256700100100" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Fax">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="tel" name="fax" placeholder="256700100100" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Email">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="hospital-email" value="">
            </div>
            <div class="flex w-11/12">
              <div class="w-8/12">
                <label class="flex-1" for="practioner-signature">Medical practioner's/ dental surgeon's signature:</label>
                <input class="mt-4 h-32 w-11/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow appearance-none border rounded" type="text" name="practioner-signature" value="">
              </div>
              <div class="">
                <label class="" for="date-signed">Date:</label>
                <input class="mt-4 shadow appearance-none border-l-0 border-r border-t border-b rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="date-signed" value="">
              </div>
            </div>
          </div>
        </div>

        <div class="my-8">
          <h3 class="bg-blue-500 text-white p-2 mb-4">CASH BENEFIT</h3>
          <div class="border border-black p-2">
            <b>The hospital should complete this section if you have stayed in hospital overnight without charge, and your plan includes a Cash Benefit. </b>
            <div class="flex mt-4">
              <div class="w-full">
                <p><span class="mr-4">I confirm that </span><input class="w-1/2 mr-4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow appearance-none border rounded" type="text" name="" value=""><span class="mr-4">was in hospital from</span>
                  <input class="mt-4 mr-4 shadow appearance-none border-l-0 border-r border-t border-b rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="checkin-date" value="">
                  <span>to</span><input class="mt-4 mx-4 shadow appearance-none border-l-0 border-r border-t border-b rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="checkout-date" value="">
                  <span>and this hospital did not charge for accomodation</span></p>
                  <b>The hospital needs to stamp this claim from here: </b><br>
              </div>
              <div class="w-3/4">
                <input class="mt-4 h-32 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow appearance-none border rounded" type="text" name="" value="">
              </div>
            </div>
          </div>
        </div>
        <div class="my-8">
          <h3 class="bg-blue-500 text-white p-2 mb-2">PAYMENT DETAILS</h3>
          <div class="border-2 border-blue-500 pb-6">
            <h4 class="bg-blue-500 text-center text-white">IMPORTANT INFORMATION</h4>
            <p class="text-center pt-2">We can settle claims in over 80 currencies. In a few cases where we cannot settle in the currency requested,
              we will reimburse you in the currency of your subscriptions.</p>
          </div>
          <div class="my-2 border border-black p-2">
            <b>Who would you like us to pay?</b><br>
            <div class="flex">
              <div class="w-full my-3">
                <label class="" for="doc-or-hospital">Doctor / hospital </label>
                <input class="float-right w-1/4 mt-2" type="radio" name="doc-or-hospital" value="">
              </div>
              <div class="w-full my-3">
                <label class="" for="principal-member">Principal member </label>
                <input class="float-right w-1/4 mt-2" type="radio" name="principal-member" value="no">
              </div>
            </div>
            <div class="flex">
              <div class="w-full">
                <label class="" for="patient">Patient</label>
                <input class="float-right w-1/4 mt-2" type="radio" name="patient" value="no">
              </div>
              <div class="w-full">
                <label class="" for="group">Group (if on a company plan)</label>
                <input class="float-right w-1/4 mt-2" type="radio" name="group" value="no">
              </div>
            </div>
          </div>
          <div class="mb-4">
            <b>Please complete either Section A or Section B </b><br>
          </div>
          <b>Section A - Payment by cheque</b>
          <div class="my-4 border border-black p-2">
            <b>In which currency would you like us to pay the cheque? (please tick one only)</b>
            <div class="flex">
              <div class="w-full my-3">
                <label class="" for="invoice-currency">Currency of your invoices</label>
                <input class="float-right w-1/4 mt-2" type="radio" name="invoice-currency" value="">
              </div>
              <div class="w-full my-3">
                <label class="" for="subscription-currency">Currency of your subscriptions</label>
                <input class="float-right w-1/4 mt-2" type="radio" name="principal-member" value="no">
              </div>
            </div>
            <div class="flex">
              <div class="w-full">
                <label class="" for="bank-acc-currency">Currency of your bank account</label>
                <input class="float-right w-1/4 mt-2" type="radio" name="patient" value="no">
              </div>
              <div class="w-full">
              </div>
            </div>
            <div class="flex my-4">
              <div class="w-1/12">
                <img src="" alt="">
              </div>
              <div class="w-2/12 float-right py-2">
                <label for="specify-acc">Please specify this: </label>
              </div>
              <div class="w-4/6 float-left">
                <input class="shadow appearance-none  border-l-0 border-r border-t border-b rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="specify-acc" value="">
              </div>
            </div>
            <small class="italic">Cheques payable to members will be sent by post to the correspondence address provided on the front page.</small>
          </div>
          <b>Section B - Payment by Electronic Funds Transfer to a bank account </b>
          <div class="my-4">
            <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Bank name:">
            <input class="ml-32 shadow appearance-none border-l-0 border-r border-t border-b rounded w-10/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="bank-name" value="">
          </div>
          <div class="mb-4 w-full">
            <input class="shadow absolute w-40 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="SWIFT / BIC code *:">
            <input class="ml-40 shadow appearance-none border-l-0 border-r border-t border-b rounded w-9/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="swift" value="">
          </div>
          <div class="mb-4 w-full">
            <input class="shadow absolute w-44 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Sort code (UK only): ">
            <input class="ml-44 shadow appearance-none border-l-0 border-r border-t border-b rounded w-9/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="sort-code" value="">
          </div>
          <div class="mb-4 w-full">
            <input class="shadow absolute w-44 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Account number:">
            <input class="ml-44 shadow appearance-none border-l-0 border-r border-t border-b rounded w-9/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="acc-number" value="">
          </div>
          <div class="my-4 w-full">
            <input class="shadow absolute w-28 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="IBAN:">
            <input class="ml-28 shadow appearance-none border-l-0 border-r border-t border-b rounded w-10/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="iban" value="">
          </div>
          <div class="mb-4">
            <input class="shadow absolute w-48 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Account name/ payee:">
            <input class="ml-48 shadow appearance-none border-l-0 border-r border-t border-b rounded w-9/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="acc-name" value="">
          </div>
          <div class="mb-4">
            <input class="shadow absolute w-52 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Currency for the transfer:">
            <input class="ml-52 shadow appearance-none border-l-0 border-r border-t border-b rounded w-9/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="transfer-currency" value="">
          </div>
          <div class="mb-4">
            <input class="shadow absolute w-52 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Bank address:">
            <input class="ml-52 shadow appearance-none border-l-0 border-r border-t border-b rounded w-9/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="bank-address" value="">
            <input class="my-2 shadow appearance-none border-l-0 border-r border-t border-b rounded w-11/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="bank-address" value="">
            <input class="shadow appearance-none border-l-0 border-r border-t border-b rounded w-11/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="bank-address" value="">
          </div>
          <div class="mb-4 w-full">
            <input class="shadow absolute w-40 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Post / Zip code:">
            <input class="ml-40 shadow appearance-none border-l-0 border-r border-t border-b rounded w-9/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="post-zip" value="">
          </div>
          <div class="mb-4 w-full">
            <input class="shadow absolute w-40 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Country:">
            <input class="ml-40 shadow appearance-none border-l-0 border-r border-t border-b rounded w-9/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="country" value="">
          </div>

          <b>*In order to process your payment as quickly and securely as possible, we strongly recommend that you provide both your IBAN and the  SWIFT code of your bank branch. Your bank will be able to provide you with this information if necessary. </b>
          <p>We recommend that bank transfers are made in the currency of your bank account. If you have asked us to pay the provider, and an annual deductible applies  to your cover, the deductible will be collected using your direct debit or credit card. We will instruct our bank to recharge the administration fee relating to the  cost of making the electronic transfer to us, but we cannot guarantee that these charges will always be passed back for us to pay. In the event that your local  bank makes a charge for an electronic transfer, we will aim to refund this charge. If we are unable to pay direct to a bank account, or no account details are  provided, we will pay by cheque. We reserve the right to send any benefit due to an appropriate person – for example, the executors of the will of someone who  has died or the dependant on your membership who has paid the bill. </p>
        </div>
        <div class="">
          <h3 class="bg-blue-500 text-white p-2 mb-2">YOUR CONSENT TO OBTAIN A MEDICAL REPORT </h3>
          <div class="border-2 border-blue-500 pb-6 mb-2">
            <h4 class="bg-blue-500 text-center text-white">IMPORTANT INFORMATION</h4>
            <p class="text-center pt-2">Please read this section carefully, as it sets out your rights under the Access to Medical Reports Act 1988 and the  Access to Personal Files and Medical Reports (NI) Order 1991. </p>
          </div>
          <div class="flex">
            <div class="w-1/2">
              <b>In order to process your claim, we may need to apply for a medical report from any doctor who  has attended you. To apply, we need you to give your consent by signing the declaration below. </b>
              <p>You can choose from three courses of action: </p>
              <ol>
                <li>You can give your consent without asking to see the doctor’s report before it is sent to us. The report  will then be sent directly to us by the doctor. </li>
                <li>
                  You can give your consent, but ask to see any report before it is sent to us, in which case you will  have 21 days, after we notify you that we have requested a report from the doctor, to contact your  doctor to make arrangements to see the report. If you fail to contact the doctor within 21 days, he will  be entitled to send the report direct to us. If however you contact your doctor with a view to seeing  the report, you must give the doctor written consent before he can release it to us. You may ask your  doctor to change the report if you think it is misleading. If your doctor refuses, you can insist on adding  your own comment to the report before it is sent to us.
  Should you give your consent to us obtaining a report without indicating that you wish to see it, you  can change your mind by contacting your doctor before the report is sent to us, in which case you will  have the opportunity to see the report and ask the doctor to change the report or add your comments  before it is sent to us, or withhold your consent for its release.
  </li>
                <li>
                   You can withhold your consent but, if you do, please bear in mind that we may be unable to accept  your claim.
                </li>
              </ol>
              <p>Whether or not you indicate that you wish to see the report before it is sent, you have the right to ask  your doctor to let you see a copy, provided that you ask him within six months of the report having  been supplied to us.</p>
              <p>Your doctor is entitled to withhold some or all of the information contained in the report if (a) he feels  that it may be harmful to you or (b) it would indicate his intentions in respect of you or (c) would  reveal the identity of another person without their consent (other than that provided by a health  professional in their professional capacity in relation to your care). Your doctor may also make a  reasonable charge for his services. </p>
              <p>The undersigned authorises and requests any hospital, specialist, physician or other health provider  to furnish Bupa or its duly authorised agent acting on Bupa’s behalf with such information as Bupa or  that agent may seek from them in connection with any treatment or other services provided to me or  my dependant for the purpose of Bupa considering this claim. </p>
              <p>I have been advised of my rights under the Access to Medical Reports Act 1988 and the Access to  Personal Files and Medical Reports (NI) Order 1991.</p>
            </div>
            <div class="w-1/2">
              <b>Bupa Global Data Protection Notice </b>
              <p><b>Purpose:</b> Personal data collected on you, and where appropriate, your family, will be used by Bupa  Global to process your claims, administer your policy and may be used to detect and prevent fraud or  improper claims. </p>
              <p><b>Confidentiality: </b>The confidentiality of patient and member information is of paramount concern to the  companies in the Bupa Group. To this end, Bupa fully complies with Data Protection Legislation and  Medical Confidentiality Guidelines. Bupa sometimes uses third parties to process data on its behalf.  Such processing, which may be undertaken outside the EEA, is subject to contractual restrictions with  regard to confidentiality and security in addition to the obligations imposed by the Data Protection  Act. </p>
              <p><b>Medical information: </b>Medical information will be kept confidential. It will only be disclosed to those  involved with your treatment or care, including your General Practitioner/Primary Health Physician, or  to their agents, and, if applicable, to any person or organisation who may be responsible for meeting  your treatment expenses, or their agents. Claims information may be discussed with the Bupa Global  Agent/Adviser where you have requested the Adviser to assist you.</p>
              <p><b>Member details: </b>ll membership documents and confirmation of how we have dealt with any claim  you may make will be sent to the principal member. </p>
              <p><b>Telephone calls: </b>In the interest of continuously improving our service to members, your call will be  recorded and may be monitored.</p>
              <p><b>Research: </b> Anonymised or aggregated data may be used by Bupa Global, or disclosed to others, for  research or statistical purposes. </p>
              <p><b>Fraud: </b>Information may be disclosed to others with a view to preventing fraudulent or improper  claims. </p>
              <p><b>ames and addresses:</b>Bupa Global does not make the names and addresses of members or patients  available to other organisations. </p>
              <p><b>Keeping you informed: </b>Bupa Global would, on occasion, like to keep you informed of Bupa products  and services which it considers may be of interest to you.  </p>
              <p><b>Contact address:</b>If you do not wish to receive information about Bupa’s products and services, or  have any other Data Protection queries please write to the Head of Information Governance, at Bupa  House, 15-19 Bloomsbury Way, London WC1A 2BA or at DataProtection@Bupa.com. </p>
            </div>
          </div>

          </div>
          <p>Please indicate below if you wish to see a copy of the medical report before it is sent to Bupa: I do wish to see a copy of any medical report before it is sent to Bupa. </p>
          <p>Please indicate below if you wish to see a copy of the medical report before it is sent to Bupa</p>
          <label for="yes"> I do wish to see a copy of any medical report before it is sent to Bupa. </label>
          <input type="radio" name="send-me-report" value="yes">
          <label for="no">I do NOT wish to see a copy of any medical report before it is sent to Bupa. </label>
          <input type="radio" name="don't-send-me-report" value="no">
          <div class="">

          </div>
          <div class="">
            <h3 class="bg-blue-500 text-white p-2 my-2">THIRD PARTY INSURERS</h3>
            <p class="my-4">Are some of the costs recoverable from someone else (for example, state insurer or a person / organisation involved in an accident?):</p>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Name">
              <input class="ml-32 shadow appearance-none border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="insurer-name" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Address">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="insurer-address" value="">
              <input class="my-2 shadow appearance-none border-l-0 border-r border-t border-b rounded w-11/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="insurer-address" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Email">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="insurer-email" value="">
            </div>
            <div class="mb-4">
              <input class="shadow absolute w-32 bg-gray-300 rounded-l py-2 px-3 leading-tight m-px" type="text" disabled="disabled" name="" value="Telephone">
              <input class="ml-32 shadow appearance-none  border-l-0 border-r border-t border-b rounded w-4/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="tel" name="insurer-tel" placeholder="256700100100" value="">
            </div>
            <label for="yes">Yes</label>
            <input type="radio" name="cost-recoverable" value="yes">
            <label for="no">No</label>
            <input type="radio" name="cost-unrecoverable" value="no">
          </div>
          <div class="">
            <h3 class="bg-blue-500 text-white p-2 my-2">DECLARATION </h3>
            <div class="p-4 bg-blue-500 text-white">
              <h4 class="text-center">IMPORTANT INFORMATION - TO BE COMPLETED BY THE PATIENT</h4>
              <div class="flex mb-4">
                <div class="w-1/2">
                  <p>I confirm that the information I have given on this form is  accurate and correct, to the best of my knowledge. </p>
                </div>
                <div class="w-1/2">
                  <p>I confirm that I give explicit consent, within the provisions of the Data Protection Act 1998, to process my personal  information with respect to this claim. </p>
                </div>
              </div>
              <div class="flex">
                <div class="w-3/4">
                  <textarea class="p-2" name="name" rows="8" cols="80" placeholder="Patient’s signature (Parent or guardian if patient is under 16)"></textarea>
                </div>
                <div class="w-1/4">
                  <label class="text-black w-56 h-48 bg-white" for="confirmation-date">Date</label>
                  <input type="date" name="confirmation-date" value="">
                </div>
              </div>
            </div>

          </div>
        </div>
      </form>
</div>
</body>
</html>
