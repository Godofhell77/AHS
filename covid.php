<!DOCTYPE html>
<html lang="en">
<title>Covid-19</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- aos css file cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif }
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
.img {
  max-width: 100%;
  height: 100%;
  }

div + div {
    clear: both;
}

p {
    line-height: 25px;
    color: black;
    text-align: justify;
}

.faq-title {
    font-size: 32px;
    margin: 6.4px 0;
}

div.seperator {
    width: 220px;
    background-color: blue;
    height: 1.12px;
    margin-left: -28.8px;
}

.faq-list > div {
    border-bottom: 1.12px solid #ededed;
    padding: 16px 0;
} 

.faq-list > div:last-child {
    border: initial;
}

summary {
    font-size: 22.4px;
    font-weight: bold;
    cursor: pointer;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none; 
    user-select: none;
}

summary:hover {
    color: green;
    transition: all 0.3s ease;
}

details[open] summary ~ * {
  animation: sweep .5s ease-in-out;
}

@keyframes sweep {
  0%    {opacity: 0; margin-left: -10px}
  100%  {opacity: 1; margin-left: 55px}
}

details[open] summary {
  color: green;
}

details[open] p {
    border-left: 2px solid black;
    margin-left: 55px;
    padding-left: 25px;
    opacity: 100;
    transition: all 3s ease;
}




.faq-list {
    width: 880px;
    margin: 16px auto;
    padding: 32px 0;
}

summary::-webkit-details-marker {
    display: none;
}

.container{
  width:relative;
  min-height:515px;
  margin:0 auto;
  position:relative;
  padding-bottom:30px;
  overflow:hidden;
}
h1{
  margin-top: 20px;
  text-align:center;
  text-shadow:0 1px white;
  color:#02303F;
}
h2{
  color:black; 
  margin:15px 0 5px;
  text-shadow:0 1px rgba(255,255,255,0.5);
}
h6{
  color:black; 
  margin:0;
}
input[type="radio"] {
position: absolute;
width: 1px; /* Setting this to 0 make it invisible for VoiceOver */
height: 1px; /* Setting this to 0 make it invisible for VoiceOver */
padding: 0;
margin: -1px;
border: 0;
clip: rect(0 0 0 0);
overflow: hidden;
}
label{
  display:block;
  width:10%;
  border: 4px solid  #999999;
  position:absolute;
  bottom:5px;
  cursor: pointer;
  transition: border-color 0.3s linear;
}

label.second{
  left:15%;
}
label.third{
  left:30%;
} 
label.fourth{
  left:45%;
}
label.fifth{
  left:60%;
}
label.sixth{
  left:75%;
}
label.seventh{
  left:90%;
}

blockquote{
  margin:0;
  padding:30px;
  width:relative;
  background-color: #DB532B;
  color:white;
  box-shadow: 0 5px 2px rgba(0,0,0,0.1);
  position:relative;
  transition: background-color 0.6s linear;
}

blockquote:after { 
  content: " "; 
  height: 0; 
  width: 0; 
  position: absolute; 
  top: 100%; 
  border: solid transparent; 
  border-top-color: #DA532B;
  border-left-color:#DA532B;
  border-width: 10px; 
  left: 10%; 
} 
#second:checked ~ .two blockquote {
  background-color:purple;
}
.two blockquote:after{
  border: solid transparent; 
  border-top-color: purple;
  border-left-color:purple;
  border-width: 10px;
}
#third:checked ~ .three blockquote{
  background-color:#54885F;
}
.three blockquote:after{
  border: solid transparent; 
  border-top-color: #54885F;
  border-left-color: #54885F;
  border-width: 10px;
}
#fourth:checked ~ .four blockquote{
  background-color:#54885F;
}
.fourth blockquote:after{
  border: solid transparent; 
  border-top-color: #54885F;
  border-left-color: #54885F;
  border-width: 10px;
}
#fifth:checked ~ .five blockquote{
  background-color:#54885F;
}
.five blockquote:after{
  border: solid transparent; 
  border-top-color: #54885F;
  border-left-color: #54885F;
  border-width: 10px;
}
#sixth:checked ~ .six blockquote{
  background-color:#54885F;
}
.six blockquote:after{
  border: solid transparent; 
  border-top-color: #54885F;
  border-left-color: #54885F;
  border-width: 10px;
}
#seventh:checked ~ .seven blockquote{
  background-color:#54885F;
}
.seven blockquote:after{
  border: solid transparent; 
  border-top-color: #54885F;
  border-left-color: #54885F;
  border-width: 10px;
}
.quotes{
  position:absolute;
  color:rgba(255,255,255,0.5);
  font-size:5em;
}
.leftq{
  top:-25px;
  left:5px;
}
.rightq{
  bottom:-10px;
  right:5px;
}
img{
  float:left;
  margin-right: 20px;
}
.slide{
  position:absolute;
  left:-100%;
  opacity:0;
  transition: all 0.6s ease-in;
}

#first:checked ~ label.first {
  border-width:6px;
  border-color:#DB532B;
}
#second:checked ~ label.second {
  border-width:6px; border-color:purple;
}
#third:checked ~ label.third {
  border:6px solid #54885F;
}
#fourth:checked ~ label.fourth {
  border:6px solid #54885F;
}
#fifth:checked ~ label.fifth {
  border:6px solid #54885F;
}
#sixth:checked ~ label.sixth {
  border:6px solid #54885F;
}
#seventh:checked ~ label.seventh {
  border:6px solid #54885F;
}

#first:checked ~ div.one {
  left:0;
  opacity:1;
}
#second:checked ~ div.two {
  left:0;
  opacity:1;
}
#third:checked ~ div.three {
  left:0;
  opacity:1;
}
#fourth:checked ~ div.four {
  left:0;
  opacity:1;
}
#fifth:checked ~ div.five {
  left:0;
  opacity:1;
}
#sixth:checked ~ div.six {
  left:0;
  opacity:1;
}
#seventh:checked ~ div.seven {
  left:0;
  opacity:1;
}



.sec-container{
  background-color:#00cc99;
  background-size: relative;
  min-height:500px;
  margin:0 auto;
  position:relative;
  padding-bottom:30px;
  overflow:hidden;
}

.sec-container h2{
  text-align: center;
  font color: white;
  font-size: 40px;
  font-weight: bolder;
  margin-top: 50px;
}
a:link, a:visited {
  width: 350px;
  margin-top: 50px;
  background-color: white;
  color: black;
  padding: 14px 25px;
  text-align: center;
  margin-left:90px;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #80bfff;
}


.section-container
{
--bs-gutter-x: 1.5rem;
--bs-gutter-y: 0;
display: flex;
flex-wrap: wrap;
}
.section-container .columns
{
flex:0 0 auto;
width:45%;
}
.section-container .columns.image
{
margin-left: 40px;
background-position:50px 50px;
background-repeat:no-repeat;
background-size:center;
}
.section-container .columns.content .content-container
{
padding:40px 50px;
}
.section-container .columns.content .content-container h5
{
font-weight:700;
font-size:30px;
margin-bottom:20px;
}
.section-container .columns.content .content-container p
{
font-weight:400;
font-size:20px;
margin-bottom:20px;
margin-bottom:15px;
text-align:justify;
}
.section-container .columns.content .content-container li
{
font-weight:400;
font-size:20px;
margin-left: 40px;
}

.col{
    flex-basis: 22%;
    text-align: center;
    color: #555;
}
h2.span{
    display: inline-block;
    margin: 15px 0;
    font-size: 50px;
    color: #000;
}
.counter-box .fa{
    font-size: 40px;
    color: #009688;
    display: block;
}

.project-counter-wrp {
    background: #fff
}

.project-counter-wrp ul {
    list-style-type: none;
    display: flex;
}

.project-counter-wrp li {
    width: 33.33%;
    height: 100%;
    padding: 30px 0px;
    text-align: center;
    transition: 0.2s linear;
}

.project-counter-wrp li:hover {
    transform: scale(1.1);
}

.project-counter-wrp li:nth-child(1) {
    background: rgb(16, 31, 46);
}

.project-counter-wrp li:nth-child(2) {
    background: rgb(18, 34, 51);
}

.project-counter-wrp li:nth-child(3) {
    background: rgb(21, 38, 56);
}

.project-counter-wrp li p.number {
    font-size: 40px;
    padding: 0;
    font-weight: bold;
}

.project-counter-wrp li p {
    color: rgba(255, 255, 255, 0.8);
    font-size: 18px;
    margin: 0;
    padding: 10px;
    font-family: 'Open Sans';
}

.project-counter-wrp li span {
    width: 60px;
    background: rgba(255, 255, 255, 0.8);
    height: 2px;
    display: block;
    margin: 0 auto;
}

.project-counter-wrp li i {
    vertical-align: middle;
    font-size: 50px;
    color: rgba(255, 255, 255, 0.8);
}

</style>
<body>


  <!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>



<!-- Header -->
<header class="w3-container w3-light-grey w3-center w3-animate-zoom" data-aos="zoom-in" style="padding: 128px 64px">
  <img class="w3-image" src="images/vacc.jpg" alt="Cinque Terre" width="1400" height="1700">
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container w3-pale-green" data-aos="fade-right">
  <div class="w3-content">
    <div class="w3-twothird">
      <div class="acc-container" >
  <div id="faq" class="faq-body">
      <div class="faq-header">
        <h3 class="faq-title">Vaccine Questions</h3>
        <div class="seperator"></div>
        <div class="faq-list">
          <div>
            <details open>
              <summary title="How can I pay for my appointment?">Which COIVD-19 Vaccines are licensed are India?</summary>
              <p class="faq-content">Two vaccines were granted emergency use authorization by the Central Drugs Standard Control Organization (CDSCO) in India, Covishield® (AstraZeneca's vaccine manufactured by Serum Institute of India) and Covaxin® (manufactured by Bharat Biotech Limited). Sputnik - V has been granted EUA in the month of April 2021.</p>
            </details>
            </div>
          <div>
            <details>
              <summary title="What can I expect at my first consultation?">What is Emergency Use Authorization(EUA)/Permission for Restricted use?</summary>
              <p class="faq-content">Emergency Use Authorization (EUA) is a regulatory mechanism to allow the use of vaccines and medicines to prevent and/or reduce the impact of life-threatening diseases or conditions as caused by COVID-19. However, before grant of the EUA, rigorous assessments of laboratory and clinical trial data, including data on quality, safety, production of protective antibodies and efficacy is conducted. Safety is particularly critical aspect of this scrutiny and a risk-versus- benefit evaluation is done in the context of a public health emergency. Full licensure is obtained when the manufacturer submits the complete data. EUA by Indian regulators is aligned with global guidelines.</p>
            </details>
            </div>
          <div>
            <details>
              <summary title="What are your opening hours?">Is the EUA a new process introduced for COVID-19 Vaccine?</summary>
              <p class="faq-content">Concept of EUA always existed to save the lives of people all over the world with vaccine and medicines for life threatening diseases while companies continue to obtain additional safety and effectiveness information to enable full licensure. Previously, EUAs have been granted to vaccines for outbreaks due to Anthrax, Ebola, Enterovirus, H7N9 Influenza, and Middle East Respiratory Syndrome. As of January 2021, nine COVID-19 vaccines were in emergency use in numerous countries around the globe.</p>
            </details>
            </div>
          <div>
            <details>
              <summary title="Do I need a referral?">Have the Vaccines undergone necesarry clinical trials before EUA?</summary>
              <p class="faq-content">Both the Indian COVID-19 vaccines have completed their Phase I & II trials. Covishield® has completed its Phase III trials in UK and the bridging trial in India.</p>
            </details>
            </div>
          <div>
            <details>
              <summary title="Is the cost of the appointment covered by private health insurance?">What is phase 1,2 and 3 of clinical trial for a Vaccine?</summary>
              <p class="faq-content">Vaccine trial phases includes:-<br>

Pre-clinical: Vaccine development in laboratory animals<br>
Phase 1 Clinical trial (small number of participants): Assess vaccine safety, immune response and determine right dosage (short duration)<br>
Phase 2 Clinical trial (few hundred participants): Assess safety and the ability of the vaccine to generate an immune response (short duration)<br>
Phase 3 Clinical trial (thousands of participants): Determine vaccine effectiveness against the disease and safety in a larger group of people (duration 1-2 years)</p>
            </details>
            </div>
            <div>
                <details>
                    <summary title="What are the parking and public transport options?">Why vaccines is not provided to childrens who are a usual target?</summary>
                    <p class="faq-content">COVID-19 affects all age groups; however, morbidity & mortality is several times higher in adults particularly in those above the age of 50 years. Children have either asymptomatic or mild infection. The general practice is to first evaluate any new vaccine in older population and then age reduction is done to assess the safety and effectiveness in paediatric population. The currently available vaccines have not been evaluated in children so far. There are some clinical trials now underway to test the effectiveness and safety of the COVID-19 vaccines in children.</p>
                </details>
            </div>
            <div>
                <details>
                    <summary title="What are the parking and public transport options?">What technology has been used in the development of currently available Vaccines in India?</summary>
                    <p class="faq-content">Covishield® vaccine, manufactured by the Serum Institute of India, is a Viral Vector-based Technology which is also used to manufacture Ebola vaccine.<br>

Covaxin® vaccine, manufactured by the Bharat Biotech, is a Whole-virion Inactivated Coronavirus Vaccine which is also used to manufacture vaccines like Influenza, Rabies and Hepatitis- A.</p>
                </details>
            </div>
            <div>
                <details>
                    <summary title="What are the parking and public transport options?">What is the composition of both the available Vaccines?</summary>
                    <p class="faq-content">Composition of Covishield includes inactivated adenovirus with segments of Coronavirus, Aluminium Hydroxide Gel, L-Histidine, L-Histidine Hydrochloride Monohydrate, Magnesium Chloride Hexahydrate, Polysorbate 80, Ethanol, Sucrose, Sodium Chloride, and Disodium Edetate Dihydrate (EDTA). Composition of Covaxin includes inactivated Coronavirus, Aluminum Hydroxide Gel, TLR 7/8 Agonist, 2-Phenoxyethanol and Phosphate Buffered Saline [NKA1].</p>
                </details>
            </div>
            <div>
                <details>
                    <summary title="What are the parking and public transport options?">What is the dose schedule for both vaccines?</summary>
                    <p class="faq-content">The time interval between two doses of the Covishield vaccine has been extended from four-eight weeks to 12-16 weeks. The second dose of Covaxin can be taken four to six weeks after the first.</p>
                </details>
            </div>
            <div>
                <details>
                    <summary title="What are the parking and public transport options?">Do I have the choice of Vaccine I will recieve?</summary>
                    <p class="faq-content">The vaccine will be supplied to various parts of India as per availability and distribution plan, beneficiaries load and so at present the option of choice of vaccine is not available.</p>
                </details>
            </div>
            <div>
                <details>
                    <summary title="What are the parking and public transport options?">Developing a vaccine takes years. But this time our scientists have developed vaccine for novel Coronavirus in such short time. How was this possible?</summary>
                    <p class="faq-content">Developing a vaccine generally involves years of research. First, we need a vaccine candidate that is evaluated in animals for its safety and efficacy. After a vaccine candidate passes a pre- clinical trial, it enters the clinical trial phase. While scientists have worked round the clock in the laboratory, even regulatory approvals which used to take several months have been fast tracked. It helped eliminate all the time lapses between the pre-clinical and clinical trial stages. Earlier, the vaccine development involved a series of steps, but in the case of the coronavirus vaccine, the scientists and regulators worked in tandem, accelerating the whole process without compromises on any protocols and any step.</p>
                </details>
            </div>
            <div>
                <details>
                    <summary title="What are the parking and public transport options?">Is COUVID-19 Vaccine scheduled anytime soon for me?</summary>
                    <p class="faq-content">The COVID-19 vaccine was launched on 16th January, 2021. The first group includes healthcare and frontline workers. The second group to receive COVID-19 vaccine were people over 60 years of age as of January 1st, 2021 and people between 45 and 59 years with comorbid conditions. This group started receiving vaccinations from March 1st, 2021. From April 1st, 2021, people above the age of 45 years (born before 1st Jan, 1977) were eligible to get the COVID-19 vaccine. From May 1st, 2021, all eligible citizens above the age of 18 years can get the COVID-19 vaccine.</p>
                </details>
            </div>
            <div>
                <details>
                    <summary title="What are the parking and public transport options?">Is it mandatory to take the Vaccine?</summary>
                    <p class="faq-content">Vaccination for COVID-19 is voluntary. However, it is advisable to receive the complete schedule of COVID-19 vaccine for protecting oneself against this disease and also to limit the spread of this disease to the close contacts including family members, friends, relatives and co-workers.</p>
                </details>
            </div>
            <div>
                <details>
                    <summary title="What are the parking and public transport options?">Out of many vaccines available, how is one or more vaccine chosen for administration?</summary>
                    <p class="faq-content">The safety and efficacy data from clinical trials of vaccine candidates are examined by Drug Regulator of our country before granting the license for the same. Hence, all the COVID-19 vaccines that receive license will have comparable safety and efficacy. However, it must be ensured that the entire schedule of vaccination is completed by only one type of vaccine as different COVID-19 vaccines are not interchangeable.</p>
                </details>
            </div>
            <div>
                <details>
                    <summary title="What are the parking and public transport options?">Will the Indian Vaccine as effective as vaccines available in other countries?</summary>
                    <p class="faq-content">Yes, the COVID-19 vaccine introduced in India will be as effective as any vaccine developed by other countries. Various phases of vaccine trials are undertaken to ensure its safety and efficacy.</p>
                </details>
            </div>
            <div>
                <details>
                    <summary title="What are the parking and public transport options?">Indian regulators have given authorisation to Covaxin even before it's Phase-3 results were out. How do we explain this?</summary>
                    <p class="faq-content">We are passing through COVID-19 pandemic. COVID-19 has caused social disruption, economic downturn and significant number of deaths. To control this pandemic, the society as well as the system may have to take steps which may also be termed as drastic. Both pre-clinical and clinical data (complete data for Phase I and II, and partial data for Phase III) of Covaxin have been thoroughly scrutinized by the regulators. This data shows that the vaccine is safe and induces a robust antibody response. However, to what extent the vaccine will protect the recipients from getting the disease is not fully known yet. Therefore, the regulators have allowed its use in trial mode.</p>
                </details>
            </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>
</div>

  <div class="w3-row">
  <div class="w3-col w3-left w3-container" style="width:100px"></div>
  <div class="w3-col w3-right w3-container" style="width:100px"></div>
  <div class="w3-rest w3-container w3-sand"><p><h1 data-aos="fade-right"> Views of Top Authorities On Covid-19</h1>
  <div class="container" data-aos="fade-left">
  <input type="radio" name="nav" id="first" checked/>
  <input type="radio" name="nav" id="second" />
  <input type="radio" name="nav" id="third" />
  <input type="radio" name="nav" id="fourth" />
  <input type="radio" name="nav" id="fifth" />
  <input type="radio" name="nav" id="sixth" />
  <input type="radio" name="nav" id="seventh"/>

  
<label for="first" class="first"></label>
<label for="second"  class="second"></label>
<label for="third" class="third"></label>
  <label for="fourth" class="fourth"></label>
  <label for="fifth" class="fifth"></label>
  <label for="sixth" class="sixth"></label>
  <label for="seventh" class="seventh"></label>
 
  <div class="one slide">
    <blockquote>
      <span class="leftq quotes">&ldquo;</span> Remarkable how our doctors and scientists have worked in quick time to strengthen the global fight against COVID-19. I appeal to all those who are eligible to take vaccine. Together, let us make India COVID-19 free!!!. <span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="images/modi.jpg" width="270" height="230" />
    <h2>Narendra Damodardas Modi</h2>
    <h6>Prime Minister Of India</h6>
  </div>
  
  <div class="two slide">
    <blockquote>
      <span class="leftq quotes">&ldquo;</span> Not each and every person in the world will be vaccinated. The prioritisation process is a Dynamic process. The behaviour of the virus is also Dynamic. All things are based on scientific facts, scrutiny and vision  of overall scientific and health community.<span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="images/hmoi.jpg" width="270" height="230" />
    <h2>Dr. Harsh Vardhan</h2>
    <h6>Union Minister for Health & Family Welfare</h6>
  </div>
  
  <div class="three slide">
    <blockquote>
      <span class="quotes leftq"> &ldquo;</span> The health ministry has preapared a blueprint to produce 216 crore doses of Covid-19 vaccines within December 2021. With this at least 108 crore people can be vaccinated. The vaccine drive as it seems to be moving might vaccinate every citizen by May 2022.  <span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="images/pj.jpg" width="270" height="230" />
    <h2>Prakash Javdekar</h2>
    <h6>Minister of Environment,Forest and Climate Change</h6>
  </div>
  
  <div class="four slide">
    <blockquote>
      <span class="quotes leftq"> &ldquo;</span> We are still learning about SARS-CoV-2 virus dynamics. We have seen in multiple geographies that the pandemic comes in waves beacuse a part of the population, which is unexposed, remains vulnerable and the virus can attack this population and create a new outbreak. The possibility of a third wave in future cannot be ruled out. Technically, with the best and comprehensive efforts, the third wave can be avoided. There are countries that have not experienced even the second wave. <span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="images/vk_p.jpg" width="270" height="230" />
    <h2>Dr. Vinod Kumar Paul</h2>
    <h6>Member of NITI Aayog</h6>
  </div>
  
  <div class="five slide">
    <blockquote>
      <span class="quotes leftq"> &ldquo;</span> Nasal vaccines are on the way, our Phase 1 trial is underway, May 8 is the deadline. We (Bharat Biotech) could be the first one in the market to come up with a nasal vaccine. We are waiting for data on the nasal vaccine, if regulations help, we will be the first although we have competition from US and China. <span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="images/ke.jpg" width="270" height="230" />
    <h2>Dr. Krishna Ella</h2>
    <h6>H.O.D of Bharat Biotech</h6>
  </div>
  
  <div class="six slide">
    <blockquote>
      <span class="quotes leftq"> &ldquo;</span> I urge the Modi government to return to the old vaccination policy. While its a good idea to open up vaccination it might not be assumed safe to deliever the control authority of vaccine drive to State Govt. The new system has created chaos and anxiety and implemetation of the new policy betrays a lack of understanding of ground realities. <span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="images/nt.jpg" width="270" height="230" />
    <h2>Dr. Naresh Trehan</h2>
    <h6>MD of Medanta Medicity</h6>
  </div>
  
  <div class="seven slide">
    <blockquote>
      <span class="quotes leftq"> &ldquo;</span> Whenever you get a booster dose, that is the time when the immunity is going to be at its peak. Wheter it will be 100 per cent or not it is difficult to say. It's too early. But you will get the best immunity after the second dose for sure.  <span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="images/ops.jpg" width="270" height="230">
    <h2>Dr. Om Shrivastava</h2>
    <h6>India's Best Disease Expert</h6>
  </div>
</div>
    </div>
  </div>
</div></p></div>
</div>
<br>


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>



<div class="w3-row">
 <div class="w3-col w3-right w3-container " style="width:75px"></div>
  <div class="w3-rest w3-container"><p>
<div class="sec-container">
<h2>National Covid-19 Vaccine Resources</h2>
<a href="https://www.mohfw.gov.in/covid_vaccination/vaccination/index.html" target="_blank" data-aos="fade-right">Vaccine Information (MHFW)</a>
<a href="https://www.ncdc.gov.in/index1.php?lang=1&level=1&sublinkid=703&lid=550" target="_blank" data-aos="fade-right">Covid 19 Guidelines (NCDC)</a>
<a href="https://www.ncdc.gov.in/Mortality/Home.html" target="_blank" data-aos="fade-right">Mortality Map (NCDC)</a>
<a href="https://www.bharatbiotech.com/covaxin.html#:~:text=The%20indigenous%2C%20inactivated%20vaccine%20is,Vero%20Cell%20derived%20platform%20technology." target="_blank" data-aos="fade-left">Vaccine Development (BBIL)</a>
<a href="https://cdsco.gov.in/opencms/export/sites/CDSCO_WEB/en/biotechver.pdf" target="_blank" data-aos="fade-right">Covaxin Fact Sheet (BBIL)</a>
<a href="https://www.seruminstitute.com/pdf/covishield_fact_sheet.pdf" target="_blank" data-aos="fade-right">Covishield Fact Sheet (SII)</a>
<a href="https://www.cowin.gov.in/home" target="_blank" data-aos="fade-right">CoWIN Registration (MHFW)</a>
<a href="https://www.mohfw.gov.in/covid_vaccination/vaccination/common-side-effects-aefi.html" target="_blank" data-aos="fade-left">Side Effects (AEFI)</a>
<a href="https://www.mygov.in/covid-19/" target="_blank" data-aos="fade-right">#IndiafightsCorona (GOI)</a>
<a href="https://mea.gov.in/vaccine-supply.htm" target="_blank" data-aos="fade-right">Vaccine Reciprocity (MEA)</a>
<a href="https://geographicinsights.iq.harvard.edu/IndiaVaccine" target="_blank" data-aos="fade-right">Vaccine Tracker (VTI)</a>
<a href="https://news.google.com/covid19/map?hl=en-IN&mid=%2Fm%2F03rk0&state=7&gl=IN&ceid=IN%3Aen" target="_blank" data-aos="fade-left">Vaccination Overview (Google)</a>


</div>
</p></div>



<div class="w3-row">
  <div class="w3-col w3-left w3-container" style="width:100px"></div>
  <div class="w3-col w3-right w3-container" style="width:100px"></div>
  <div class="w3-rest w3-container w3-pale-blue"><p><div class="section-container" data-aos="fade-up-right">
         <div class="columns image" style="background-image:url('images/rusk-ka-pehla.jpg')">
            &nbsp;
         </div>
         <div class="columns content">
            <div class="content-container">
               <h5>A Nationwide Effort</h5>
               <p>
                  While vaccines play a critical role in slowing the spread of COVID-19 and, eventually, helping us out of the pandemic, this will not happen overnight. A&HS is working closely with public health departments, the CDC and other governing bodies to ensure a fair and equitable distribution.
               </p>
            </div>
         </div>
      </div>
      <div class="section-container" data-aos="fade-up-left">
         <div class="columns content">
            <div class="content-container">
               <h5>Why do we use it?</h5>
              <p>
                  Slow the Spread
                  Distributing the vaccine widely will take time and patience. That’s why it is important to continuing doing your part to slow the spread of COVID-19 and protect yourself, your loved ones and community by doing the following:
                  <ul>
                    <li>Wear a mask to protect yourself and others</li>
                    <li>Practice social distancing</li>
                    <li>Wash your hands</li>
                    <li>Avoid indoors gatherings with those outside your immediate household</li>
                  </ul> 
              </p>
               
            </div>
         </div>
         <div class="columns image" style="background-image:url('images/rush-ka-disra.jpg')">
            &nbsp;
         </div>
      </div></p></div>
</div></div>
<br>



          <!-- new code -->
<h2 data-aos="fade-right" class="text-center">Projects statistics</h2>

<div  class="project-counter-wrp">

   

    <ul>
        <li>
            <i class="fa fa-briefcase"></i>
            <p style="text-align: center;">%</p>
            <p style="text-align: center;" id="number1" class="number">95</p>
            <br/>
            <span></span>
            <p style="text-align: center;">Projects Done</p>
        </li>
        <li>
            <i class="fa fa-smile-o"></i>
            <p style="text-align: center;" ><</p>
            <p style="text-align: center;" id="number2" class="number">89</p>
            <br/>
            <span></span>
            <p style="text-align: center;">Happy Clients</p>
        </li>
        <li style="width: 30.33%">
            <i class="fa fa-coffee"></i>
            <p style="text-align: center;">~</p>
            <p style="text-align: center;" id="number3" class="number">359</p>
            <br/>
            <span></span>
            <p style="text-align: center;">Cups of Coffee</p>
        </li>
    </ul>
</div>


<script>
    var project = setInterval(projectDone, 200)
    var clients = setInterval(happyClients, 200)
    var coffee = setInterval(cupsCoffee, 200)
    let count1 = 1;
    let count2 = 99970;
    let count3 = 1;

    function projectDone() {
        count1++
        document.querySelector("#number1").innerHTML = count1
        if (count1 == 95) {
            clearInterval(project)
        }
    }

    function happyClients() {
        count2++
        document.querySelector("#number2").innerHTML = count2
        if (count2 == 100000) {
            clearInterval(clients)
        }
    }

    function cupsCoffee() {
        count3++
        document.querySelector("#number3").innerHTML = count3
        if (count3 == 75) {
            clearInterval(coffee)
        }
    }
</script>
        


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p><a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a></p>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>

AOS.init({
    duration:1000,
    delay:400
});

</script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="jquery.counterup.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });

    </script>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>