<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request Demo</title>
    @vite('resources/css/app.css')
    <style>
       
        .card {
  border-radius: 30px;
  background: rgba(255, 255, 255, 0.5);
}

.srs-input {
  padding-left: 16px !important;
  outline: none !important;
  border: 1px solid transparent !important;
  width: 100% !important;
  height: 40px !important;
  border-radius: 8px !important;
  background-color: #fafafa !important;
  color: #434649 !important;
  font-family: Inter-Regular, sans-serif !important;
}
    </style>
    <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
    <style type="text/css">
          #mc_embed_signup{background:#fff;}
          /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
             We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
</head>
<body>
    <div class=" w-full bg-[#EEFBFF]">
        <div class=" w-full max-w-[1265px] mx-auto flex items-center justify-between py-4 px-4 space-x-4">
            <a href="/">
                <img src="/images/logo.png" alt="">
            </a>
            <div class=" flex items-center space-x-4 sm:space-x-8">
                <a href="/home" class=" text-[#392507] font-Poppins text-sm  sm:text-xl  whitespace-nowrap  border-[#647BFF]" >Home</a>
                <a href="/about-us" class=" text-[#392507] font-Poppins  text-sm  sm:text-xl whitespace-nowrap  border-[#647BFF]" >About us</a>
                <a href="/request-demo" class=" text-[#392507] font-Poppins  text-sm  sm:text-xl whitespace-nowrap  border-[#647BFF] border-b-2 font-semibold">Request Demo</a>
            </div>
        </div>
        <div class="w-full pt-[16rem] relative">
            <img src="/images/servers1.png" class="object-cover" alt="" />
            <div class="w-full h-full absolute top-0 left-0">
              <div
                class="pt-[5rem] px-4 max-w-[1265px] mx-auto flex flex-col items-end space-y-7"
              >
                <div class="w-full max-w-[600px]">
                     <div id="alertmessage" class="flex items-center p-4 mb-4 text-sm  w-full border hidden rounded-lg bg-green-50  text-green-400 border-green-800" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                            <span class="font-medium">Success alert!</span> 
                            <span id="message-s"></span>
                            </div>
                      </div>
                  <div id="mc_embed_signup" class="rounded-lg p-4 w-full bg-red-500">
                    <form
                      action="https://co2clarity.us10.list-manage.com/subscribe/post?u=cfb4b0f5b0051f424d7b11a0a&amp;id=bdff3f4b23&amp;f_id=00d7d1e5f0"
                      method="post"
                      id="mc-embedded-subscribe-form"
                      name="mc-embedded-subscribe-form"
                      class="validate w-full"
                      target="_blank"
                    >
                      <div id="mc_embed_signup_scroll">
                        <h2>Schedule a demo</h2>
                        <div class="indicates-required">
                          <!-- <span class="asterisk">*</span> indicates required -->
                        </div>
      
                        <div class="grid sm:grid-cols-2">
                          <div class="mc-field-group">
                            <label for="mce-FNAME">First Name </label
                            ><input
                              type="text"
                              name="FNAME"
                              class="text srs-input"
                              id="mce-FNAME"
                              value=""
                              placeholder="Your First Name" oninput="checkInputs()"
                            />
                          </div>
                          <div class="mc-field-group">
                            <label for="mce-LNAME">Last Name </label
                            ><input
                              type="text"
                              name="LNAME"
                              class="text srs-input"
                              id="mce-LNAME"
                              value=""
                              placeholder="Your Last Name" oninput="checkInputs()"
                            />
                          </div>
                        </div>
                        <div class="grid sm:grid-cols-2">
                          <div class="mc-field-group">
                            <label for="mce-PHONE">Phone Number </label
                            ><input
                              type="text"
                              name="PHONE"
                              class="REQ_CSS srs-input" style="padding-left: 3rem !important;"
                              id="mce-PHONE"
                              value=""
                              placeholder="Your Phone Number" oninput="checkInputs()"
                            />
                          </div>
                          <div class="mc-field-group">
                            <label for="mce-EMAIL"
                              >Email Address</label
                            ><input
                              type="email"
                              name="EMAIL"
                              class="required srs-input"
                              id="mce-EMAIL"
                              placeholder="Your Email"
                              required=""
                              value="" oninput="checkInputs()"
                            />
                          </div>
                        </div>
                        <div class="grid sm:grid-cols-2">
                          <div class="mc-field-group">
                            <label for="mce-MMERGE5">Company </label
                            ><input
                              type="text"
                              name="MMERGE5"
                              class="text srs-input"
                              id="mce-MMERGE5"
                              value=""
                              placeholder="Name of your company" oninput="checkInputs()"
                            />
                          </div>
                          <div class="mc-field-group">
                            <label for="mce-MMERGE7">Job Position </label
                            ><input
                              type="text"
                              name="MMERGE7"
                              class="text srs-input"
                              id="mce-MMERGE7"
                              value=""
                              placeholder="Your position within the company" oninput="checkInputs()"
                            />
                          </div>
                        </div>
                        <div class="grid sm:grid-cols-2">
                          <div class="mc-field-group">
                            <label for="mce-MMERGE6">Job Title </label
                            ><input
                              type="text"
                              name="MMERGE6"
                              class="text srs-input"
                              id="mce-MMERGE6"
                              value=""
                              placeholder="Your Job Title" oninput="checkInputs()"
                            />
                          </div>
                          <div class="mc-field-group">
                            <label for="mce-MMERGE9">Number of employees </label
                            ><select
                              name="MMERGE9"
                              class="srs-input"
                              id="mce-MMERGE9" onchange="checkInputs()"
                            >
                              <option value="" selected>-</option>
                              <option value="0 - 10 employees">
                                0 - 10 employees
                              </option>
                              <option value="11 - 50 employees">
                                11 - 50 employees
                              </option>
                              <option value="51 - 200 employees">
                                51 - 200 employees
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="grid sm:grid-cols-2">
                          <div class="mc-field-group">
                            <label for="mce-MMERGE8">Reason for my request </label
                            ><select
                              name="MMERGE8"
                              class="srs-input"
                              id="mce-MMERGE8" onchange="checkInputs()"
                            >
                              <option value="" selected>-</option>
                              <option value="Consulting carbon impact">
                                Consulting carbon impact
                              </option>
                              <option value="Consulting carbon impact Choice">
                                Consulting carbon impact Choice
                              </option>
                              <option value="Third Consulting carbon impact">
                                Third Consulting carbon impact
                              </option>
                              <option value="Third Consulting carbon impact">
                                Third Consulting carbon impact
                              </option>
                              <option value="Third Consulting carbon impact">
                                Third Consulting carbon impact
                              </option>
                              <option value="Third Consulting carbon impact">
                                Third Consulting carbon impact
                              </option>
                              <option value="Third Consulting carbon impact">
                                Third Consulting carbon impact
                              </option>
                              <option value="Third Consulting carbon impact">
                                Third Consulting carbon impact
                              </option>
                              <option value="Third Consulting carbon impact">
                                Third Consulting carbon impact
                              </option>
                            </select>
                          </div>
                          <div class="mc-field-group">
                            <label for="mce-MMERGE10">Sector </label
                            ><select
                              name="MMERGE10"
                              class="srs-input"
                              id="mce-MMERGE10" onchange="checkInputs()"
                            >
                              <option value="" selected>-</option>
                              <option value="IT">IT</option>
                              <option value="Consulting">Consulting</option>
                              <option value="Oil &amp; Gas">Oil &amp; Gas</option>
                              <option value="Entertainment">Entertainment</option>
                              <option value="Shipping">Shipping</option>
                              <option value="Shipping">Shipping</option>
                              <option value="Shipping">Shipping</option>
                              <option value="Shipping">Shipping</option>
                              <option value="Shipping">Shipping</option>
                            </select>
                          </div>
                        </div>
                        <div class="mc-field-group input-group">
                          <strong>Hide this text </strong>
                          <ul>
                            <li class=" space-x-3">
                              <input 
                                type="checkbox"
                                name="group[496680][1]"
                                id="mce-group[496680]-496680-0" onchange="checkInputs()"
                                value=""
                              /><label for="mce-group[496680]-496680-0"
                                >By clicking below, you agree that we may process your
                                information in accordance with these terms. Fo</label
                              >
                            </li>
                          </ul>
                        </div>
                        <div id="mce-responses" class="clear foot">
                          <div
                            class="response"
                            id="mce-error-response"
                            style="display: none"
                          ></div>
                          <div
                            class="response"
                            id="mce-success-response"
                            style="display: none"
                          ></div>
                        </div>
                        <div
                          aria-hidden="true"
                          style="position: absolute; left: -5000px"
                        >
                         
                          <input
                            type="text"
                            name="b_cfb4b0f5b0051f424d7b11a0a_bdff3f4b23"
                            tabindex="-1"
                            value=""
                          />
                        </div>
                        <div class="optionalParent">
                          <div class="clear foot">
                            <!-- <input
                              type="submit"
                              name="subscribe"
                              id="mc-embedded-subscribe"
                              class="button"
                              value="Subscribe"
                            /> -->
      
                        
                          </div>
                        </div>
                     
                      </div>
                        <div class=" w-full pr-10">
                            <button    type="submit"
                              name="subscribe"
                              id="subscribebtn"
                              class="   duration-200 w-full h-11 rounded-md text-white text-lg">
                              request demo
                            </button>
                       </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=" w-full pt-10 px-4 o">
            <div class="max-w-[1265px] mx-auto ">
                <div class=" w-full flex items-center sm:flex-row flex-col space-y-4 sm:space-y-0 sm:justify-between border-b border-[#647BFF] border-opacity-20 pb-20">
                    <div class=" flex items-center space-x-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                              <path d="M14 9.99994C12.9391 9.99994 11.9217 10.4214 11.1716 11.1715C10.4214 11.9217 10 12.9391 10 13.9999V29.9999H14V13.9999H18V27.9999H22V13.9999H26V29.9999H30V13.9999C30 12.9391 29.5786 11.9217 28.8284 11.1715C28.0783 10.4214 27.0609 9.99994 26 9.99994H14ZM20 -6.10352e-05C22.6264 -6.10352e-05 25.2272 0.517254 27.6537 1.52235C30.0802 2.52744 32.285 4.00063 34.1421 5.8578C35.9993 7.71497 37.4725 9.91976 38.4776 12.3463C39.4827 14.7728 40 17.3735 40 19.9999C40 25.3043 37.8929 30.3913 34.1421 34.1421C30.3914 37.8928 25.3043 39.9999 20 39.9999C17.3736 39.9999 14.7728 39.4826 12.3463 38.4775C9.91982 37.4724 7.71504 35.9992 5.85786 34.1421C2.10714 30.3913 0 25.3043 0 19.9999C0 14.6956 2.10714 9.60853 5.85786 5.8578C9.60859 2.10708 14.6957 -6.10352e-05 20 -6.10352e-05Z" fill="#647BFF"/>
                            </svg>
                        </div>
                        <span class=" text-[#241704] font-Poppins text-base font-semibold">Logo</span>
                    </div>

                    <div class=" flex items-center space-x-5">
                        <a href="/home" class=" text-primary text-xs font-Poppins font-medium">Home</a>
                          <a href="/about-us" class=" text-primary text-xs font-Poppins font-medium">About us</a>
                            <a href="/request-demo" class=" text-primary text-xs font-Poppins font-medium">Request Demo</a>
                              <a href="mailto:peterd@co2clarity.com" class=" text-primary text-xs font-Poppins font-medium">Contact Us</a>
                    </div>
                </div>
                <div class=" w-full flex items-center justify-between py-4 pb-20">
                    <span class=" text-[#241704] font-Poppins text-sm font-normal">Terms & Conditions</span>
                    <span>© Carbon Clarity, Inc. 2024</span>
                </div>
            </div>
    </div>
    </div>

    <script>
     
        // Select the node that will be observed for mutations
        const targetNode = document.getElementById('mce-responses');

        // Options for the observer (which mutations to observe)
        const config = { attributes: true, childList: true, subtree: true };

        // Callback function to execute when mutations are observed
        const callback = function(mutationsList, observer) {
            // Check if the element with id 'mce-success-response' exists
            const successResponse = document.getElementById('mce-success-response');
            if (successResponse) {
                // Check if the element is not empty
                if (successResponse.innerText.trim() !== '') {
                    // Alert the user
                    const alert = document.getElementById('message-s');
                    
                    const message = successResponse.innerText.trim();
                    alert.innerText = message
                    const alertElement = document.getElementById('alertmessage');
                    alertElement.classList.remove('hidden')
                }
            }
        };

        // Create an observer instance linked to the callback function
        const observer = new MutationObserver(callback);

        // Start observing the target node for configured mutations
        observer.observe(targetNode, config);
        //make subscribebtn disable if all inputs are empty 
  
        const subscribebtn = document.querySelector('#subscribebtn');
        subscribebtn.disabled = true;
        //add active class bg-[#647BFF] hover:scale-110 | bg-gray-600 cursor-not-allowed
        subscribebtn.classList.add('unActiveBtn');
        
        function checkInputs() {
       
        var firstName = document.getElementById("mce-FNAME").value;
        var lastName = document.getElementById("mce-LNAME").value;
        var email = document.getElementById("mce-EMAIL").value;
        var phone = document.getElementById("mce-PHONE").value;
        var company = document.getElementById("mce-MMERGE5").value;
        var jobPosition = document.getElementById("mce-MMERGE7").value;
        var jobTitle = document.getElementById("mce-MMERGE6").value;
        var numberOfEmployees = document.getElementById("mce-MMERGE9").value;
        var reasonForRequest = document.getElementById("mce-MMERGE8").value;
        var sector = document.getElementById("mce-MMERGE10").value;
        var checkboxChecked = document.getElementById("mce-group[496680]-496680-0").checked;



        // Get the Submit button element
        var submitBtn = document.getElementById("submitBtn");

        // Enable the Submit button if both First Name and Last Name are not empty, otherwise, disable it
        if (firstName.trim() !== "" && lastName.trim() !== "" && email.trim() !== "" && phone.trim() !== "" && company.trim() !== "" && jobPosition.trim() !== "" && jobTitle.trim() !== "" && numberOfEmployees.trim() !== "" && reasonForRequest.trim() !== "" && sector.trim() !== "" && checkboxChecked) {
            subscribebtn.disabled = false;
            subscribebtn.classList.add('activeBtn');
            subscribebtn.classList.remove('unActiveBtn')
        } else {
            subscribebtn.disabled = true;
            subscribebtn.classList.add('unActiveBtn');
            subscribebtn.classList.remove('activeBtn')
        }
    }

    </script>

<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[4]='PHONE';ftypes[4]='phone';fnames[3]='ADDRESS';ftypes[3]='address';fnames[6]='MMERGE6';ftypes[6]='text';fnames[5]='MMERGE5';ftypes[5]='text';fnames[7]='MMERGE7';ftypes[7]='text';fnames[9]='MMERGE9';ftypes[9]='dropdown';fnames[8]='MMERGE8';ftypes[8]='dropdown';fnames[10]='MMERGE10';ftypes[10]='dropdown';}(jQuery));var $mcj = jQuery.noConflict(true);</script></div>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script>
  const input = document.querySelector("#mce-PHONE");
  window.intlTelInput(input, {
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
  });
</script>
</body>
</html>
