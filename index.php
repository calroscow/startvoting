<html>
<?php include'header.php' ?>


<body>

  <section class="panel home" data-section-name="home">
    <div class="registertovote">
      <img src="img/logo.png" height="150px" alt="StartVoting">
      <h2>Are you registered to vote on the 12th December?</h2><br><br>

      <a id="link-1" href="#second"><button class="btn btn-lg btn-info">Yes</button></a>
      <a id="link-2" href="#first"><button class="btn btn-lg btn-info">No</button></a>
      <a id="link-3" href="#first"><button class="btn btn-lg btn-info">I don't know</button></a><br><br> StartVoting guides you through the process of regsitering to vote, and asking to vote by post.<br><br>

      <p><b>Why vote by post?</b><br> You might not be home on December 12th, <b>especially if you're registered at your university address</b>.
      </p>
      <br>
      <a href="https://www.bestforbritain.org/" </a><img src="img/bfb-new-white.png" height="60px" alt="Best For Britain"></a>
      <p> This tool is powered by Best for Britain.<br>Council data is supplied by Democracy Club. </p>
      <h5>
        <a href="https://www.bestforbritain.org/privacy_policy">Privacy Policy</a> | <a href="https://www.bestforbritain.org/terms_of_use">Terms of Use</a> | <a href="https://www.bestforbritain.org/cookies">Cookies Policy</a>
      </h5>


    </div>
  </section>

  <section class="panel panel1" data-section-name="second">
    <div id="no" class="voteno">
      <h4>REGISTER TO VOTE</h4>
      <h1>Let's get you registered</h1>
      <p><b><i class="fas fa-clock"></i> Approx. 4 minutes.</b></p>
      <p>After we've done this, we will guide you through the applying for a postal vote</p>

      <!-- Step 1 -->
      <br><img src="img/document.svg" alt="National Insurance number" height="50vh" />
      <h2><span class="badge badge-secondary">Step 1</span> Have your National Insurance number ready</h2>
      <a
        
        tabindex="0" class="btn btn-sm btn-secondary" data-toggle="popover" data-trigger="focus" title="How to find your NI number:" 
                  data-content="You can usually find it on your payslip, tax letters from your employer or HMRC, and any letter about benefits, tax or pensions.">Where can I find this?</a>
      <br>
      

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
      
      <!-- Step 2 -->
      <br><br><img src="img/form.svg" alt="Fill in the form" height="50vh" />
      <h2><span class="badge badge-secondary">Step 2</span> Fill in the form</h2>
      <a href="govukredirect.php" target="_blank"><button type="button" class="btn btn-success">Go to the form</button></a><br><br>
      <p>Once you've finished the registration process on Gov.UK, be sure to return here to finish getting your postal vote application filled in.</p>
      <p>
        Swipe down</p>
      <div class="arrow bounce">


        <a id="link-4" class="fa fa-arrow-down fa-2x" href="#second"></a>
      </div>

    </div>
  </section>
  <section class="panel panel2" data-section-name="third">
    <div id="yes" class="voteyes">
      <p>Are you sure you are registered to vote? If you're not sure, we recommend you <a href="#no">register anyway</a></p>
      <br>
      <h4>APPLY FOR A POSTAL VOTE</h4>
      <h1>Great! Now you can apply for a postal vote</h1>
      <p><b><i class="fas fa-clock"></i> Approx. 7 minutes.</b></p><br>



      <!-- Step 1 -->
      <img src="img/file.svg" alt="Download and fill in form" height="50vh" /><br><br>
      <h2><span class="badge badge-secondary">Step 1</span> Download the form</h2>
      <a href="https://www.electoralcommission.org.uk/sites/default/files/2019-09/Postal-vote-application-form.pdf" target="_blank"><button type="button" class="btn btn-success">Download form (PDF)</button></a>
      <br><br><br> <img src="img/printer.svg" alt="Print and fill in form" height="50vh" /><br><br>
      <h2><span class="badge badge-secondary">Step 2</span> Print and fill in the form</h2><br>
      <p>
        Swipe down</p>
      <div class="arrow bounce">


        <a id="link-5" class="fa fa-arrow-down fa-2x" href="#fourth"></a>
      </div>
    </div>
  </section>
  <section class="panel panel2" data-section-name="fourth">
    <div id="yes" class="voteyes2">
      <h4>APPLY FOR A POSTAL VOTE</h4>
      <h1>You're nearly finished!</h1>

      <!-- Step 2 -->
      <br><img src="img/house.svg" alt="Find where to send it" height="50vh" />
      <h2><span class="badge badge-secondary">Step 3</span> Enter postcode to find where to send it</h2>

      <div>
        <div style="font-family: sans-serif; background: #1b1464; font-size: 1em; padding: 1.2em;">

          <form id="getvoting-form">

            <input type="text" name="getvoting-postcode" id="getvoting-postcode" placeholder="SW1H 0RG" style="border: 1px solid #fff; color: #fff; background: transparent; font-size: 1.2rem; padding: 0.4em 0.7em;" />
            <input type="button" id="getvoting-submit" value="Search" class="btn btn-lg btn-info"></input>

          </form>

          <div id="getvoting-results">

            <script type="text/javascript">
              document.addEventListener("DOMContentLoaded", function() {

                var form = document.getElementById("getvoting-form")

                var btn = document.getElementById("getvoting-submit")

                var postcode_field = document.getElementById("getvoting-postcode")

                var results = document.getElementById("getvoting-results")



                var postcodeLookup = function(e) {

                  e.preventDefault()



                  var pcode = postcode_field.value.replace(/[^A-Za-z0-9]/g, "")

                  if (pcode) {

                    results.textContent = "Searching for your council..."



                    var url = "https://developers.democracyclub.org.uk/api/v1/postcode/" + pcode + "/?auth_token=9010b131bf098092bae6317534c728cefc43d188"

                    window.fetch(url).then(function(response) {

                      response.json().then(function(data) {

                        console.log(data)

                        var address_info = data.electoral_services

                        if (address_info) {

                          results.innerHTML = (address_info.name ? "<p>Your council is: <strong>" + address_info.name + "</strong></p>" : "") +

                            "<p>Pop your completed form in the post to:</p>" +

                            "<p style=\"border: 2px solid #fff; padding: 1em; margin: 1em; display: inline-block;\">" +

                            address_info.address.replace(/\n/g, "<br>") + "<br>" +

                            address_info.postcode +

                            "</p>"

                        } else {

                          results.textContent = "Sorry, we couldn't find information for that postcode."

                        }

                      }).catch(function(err) {

                        console.error(err)

                        results.textContent("Sorry, there was an error looking up your postcode. Are you sure it's correct?")

                      })

                    }).catch(function(err) {

                      console.error(err)

                      results.textContent("Sorry, there was an error looking up your postcode. Are you sure it's correct?")

                    })



                  } else {

                    results.textContent = "Please enter a postcode."

                  }

                }



                btn.addEventListener("click", postcodeLookup)

                form.addEventListener("submit", postcodeLookup)

              })
            </script>
          </div>
        </div>

      </div>

      <!-- Step 3 -->
      <img src="img/postbox.svg" alt="Pop it in the post" height="50vh" />
      <h2><span class="badge badge-secondary">Step 4</span> Pop it in the post and you're done!</h2>
      <br><br>
      <p>
        Swipe down</p>
      <div class="arrow bounce">


        <a id="link-6" class="fa fa-arrow-down fa-2x" href="#fifth"></a>
      </div>
    </div>
  </section>
  <section class="panel panel3" data-section-name="fifth">
    <div class="campaign">
      <h2>Who is this tool made by?</h2>
      <a href="https://www.bestforbritain.org/" </a><img src="img/bfb-new-white.png" height="80px" alt="Best For Britain"></a>
      <p>
        StartVoting is a politically neutral tool made by Best for Britain. <br><br> We want everyone who is eligible to vote to take part in this election, whichever party they want to vote for.
        <br><br> Want to know more about us?</p>
      <a href="https://www.bestforbritain.org"><button class="btn btn-lg btn-light">Visit our website</button></a>
      <br><br>
      <h5>Published and promoted by Rudi Shenk on behalf of Best for Britain, the campaign name of UK-EU OPEN POLICY LIMITED registered at International House, 24 Holborn Viaduct, London, EC1A 2BN. Best for Britain is registered with The Electoral Commission.</h5>
      <br><br>
      <p> <img src="https://developers.democracyclub.org.uk/static/images/dc-badge/white/badge-white.png" alt="Democracy Club" />
      </p>
      <br>
      <p>
        Have more questions? Just swipe down:
      </p>
      <div class="arrow bounce">


        <a id="link-7" class="fa fa-arrow-down fa-2x" href="#sixth"></a>
      </div>
    </div>

    </div>
  </section>
  <section class="panel panel4" data-section-name="sixth">


    <div id="faq" class="faq">
      <h1>What else should I know?</h1>
      <p>

      </p>
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         What do I need to register to vote?
        </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Just five minutes, your name and address and your National Insurance Number. Follow the instructions above.

            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          How do I find my National Insurance Number?
        </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              The Government generally sends you your National Insurance number when you’re 16 because you need it to pay tax when you get a job. Your National Insurance number should be on your payslips, P60, or letters about tax, pensions and benefits.

            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Why should I register?
        </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              You can only vote if you’re registered in advance. Want to give your opinion on climate change, poverty, affordable housing, mental health, or anything else? You have to be registered to be heard.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFour">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        What’s the deadline?
        </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
              You have to get your registration done by Tuesday 26th November 2019. If you leave it too late you won’t get your vote in this election.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingFive">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Should I vote by post?

        </button>
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
              There are benefits to voting by post - you don’t have to go out in the rain, you can get your vote done early, you can still vote even if you’re away from home on election day. It’s easy to vote by post once you’re registered to vote, you just need to
              request it using the form above.

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingSix">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Am I allowed to register?

        </button>
            </h2>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body">
              All UK citizens who will be 18 years old or above on election day, 12th December 2019, are allowed to vote. You can also vote if you are an Irish or Commonwealth citizen living in the UK, or if you’re a UK citizen living abroad but you lived in the UK
              at some time in the last 15 years. But only if you’re registered first.


            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingSeven">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        How does this election work?

        </button>
            </h2>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <div class="card-body">
              When you register, you get one vote you can use to pick your preferred candidate in your area. Candidates usually belong to a party, but can be independent instead. You can only vote in the area where you live, and you will be told which polling station
              you need to go to to vote on election day. When the votes for your area are counted, the candidate who gets the most votes will be your MP and the party with the most MPs gets to pick the prime minister.


            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingEight">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        What are the important dates?

        </button>
            </h2>
          </div>
          <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
            <div id="card-body" class="card-body">
              Make sure you’re registered to vote by midnight on 26th November 2019. If you want to vote by post make sure you apply for it by 5pm on 26th November 2019. Election day is Thursday 12th December 2019 between 7am and 10pm.


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/jquery-scrollify@1.0.17/jquery.scrollify.min.js"></script>
</body>

</html>