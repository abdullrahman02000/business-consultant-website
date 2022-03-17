<?php include 'body-functions.php' ?>

<body>
      <?php
      //Navigation bar items
$nav_items = [["title" => 'Home', "target" => '#home', "active" => false], ["title" => 'Services', "target" => '#services', "active" => false], ["title" => 'About', "target" => '#about', "active" => false], ["title" => 'Contact', "target" => '#contact', "active" => false]];

// Content of Features Block
$features = [["title" => 'Our Mission', "icon-alt" => "Target Icon", "content" => ["Is to develop a business plan and grow our client's business in the ways they want and push it even further, beyond their imagination."], "icon" => 'assets/icon-min/target.png'], ["title" => 'Our Vision', "icon-alt" => "Eye Icon", "content" => ['Is to leave an imprint be it big or small, but most importantly effective, in every field of business.'], "icon" => 'assets/icon-min/eye.png'], ["title" => 'Our Methodology', "icon-alt" => "Process Icon", "content" => ["First off, we listen to our clients, get every data that's important for us, get our client's needs and goals, and then these data will undergo an analysis process through a set of methodologies, tactics, and strategies.", "To build the best business solutions from the ground up with the optimal results, we then, refine and keep improving upon it and update it. And <a href='#services'> SO MUCH MORE THAN THIS!</a>"], "icon" => 'assets/icon-min/process.png'], ["title" => 'Our National Duty', "icon-alt" => "Trusted Icon", "id" => 'national-duty', "content" => ["Developing a viable and thriving national private sector, which is regionally competitive and globally integrated, led by the business community, contributes to economic diversification, sustainable development and job creation.", "Great promise resides in the nation's national assets, i.e. its human capital, natural resources, fertile land, a great wealth of historical sites and religious pilgrimage destinations, and vast <a href='#services'>market opportunities</a>, given the huge demand for products and services and plentiful financial revenues.", "Taken together, a national endowment exists with immense potential for new ventures in all sectors of the economy, led by a resurgent private sector that drives economic growth and diversification."], "icon" => 'assets/icon-min/trusted.png']];

// Content of Services Block

$services = [
  ["title" => 'Business Development', "icon-alt" => "Planning Icon", "content" => "Is the process that is used to identify, nurture and acquire new clients and business opportunities to drive growth and profitability. A business development strategy is a document that describes the strategy you will use to accomplish that goal. Our experience in the Iraqi market offers the best Business Development as Service for you in Iraq.", "icon" => 'assets/icon-min/planning.png'],
  ["title" => 'Stakeholder Mapping & Engagement', "icon-alt" => "Stakeholder and Team Icon", "content" => "Morshed helps private & public sector companies, trusts, foundations & implementation agencies in the areas of Stakeholder Management, Stakeholder Mapping and Stakeholder Engagement based on a systematic process & Materiality Assessment. Stakeholder Mapping and Engagement is a systematic process to engage all the people who have an interest in the company & are affected by the activities of the organisation. Strategic engagement not only reduces the risks associated with the stakeholders but emerges as a confidence-building measure amongst the various interest groups.", "icon" => 'assets/icon-min/team.png'],
  ["title" => 'Public Relations and Communication', "icon-alt" => "Public Relations Icon", "content" => "Are essential to support successful businesses and districts. Many companies and projects in Iraq may not have, or cannot afford communications staff. Morshed can implement the R.A.C.E. (Research, Action Plan, Communication and Evaluation) process to help define needs, implement strategy and provide specialized communication services that are fitted with the Iraqi market culture and needs.", "icon" => 'assets/icon-min/public-relations.png'],
  ["title" => 'Social and Behavior Change Communication (SBCC)', "icon-alt" => "Social Network Icon", "content" => "Morshed develop a communication strategy for social and behaviour change communication (SBCC). We provide you with steps and tools are designed to help businesses, communication specialists and relevant stakeholders prepare and plan for effective SBCC initiatives through a comprehensive approach that responds to audience needs and the context of the challenge(s) to be addressed, outlines plans for implementation, monitoring and evaluation.", "icon" => 'assets/icon-min/network.png'],
  ["title" => 'Public Policy & Government Relations, Public Affairs Consultant', "icon-alt" => "Public Policy Icon", "content" => "Morshed uses the understanding of the Iraqi political system to offer political and public policy advice to clients. Clients may include private sector companies, NGOs. Keeping up-to-date on political developments, to advise clients on a possible response is vital to the role. Morshed Public affairs consultants also identify key stakeholders in the decision-making process in Iraq, national, regional and local government bodies. Morshed work to maintain relationships with these individuals and to assist clients to promote and maintain their interests effectively.", "icon" => 'assets/icon-min/policy.png'],
  ["title" => 'Social Media and Digital PR', "icon-alt" => "Digital PR Icon", "content" => "In this modern world, Morshed see digital PR as the intersection of classical public relations, content marketing, SEO, and social media. In short, digital PR is a strategy used by brands to evolve their business and build an online appearance. Gone are the days of merely using print media to achieve brand awareness. Our digital marketing will help you enhance your share of the digital landscape.", "icon" => 'assets/icon-min/social-pr.png'],
  ["title" => 'Crisis Management', "icon-alt" => "Risk Management Icon", "content" => "Morshed provide straightforward, practical counsel to councils, executives, and decision-makers on a spacious variety of crises and special situations, from the product, recalls and industrial catastrophes, to unexpected leadership changes and major regulatory functions. Morshed understands the critical effect of precipitation, combined with advanced strategic thinking and sturdy, agile performance. Our role covers strategy development and open-ended instruction, research and key message examination, the building of multi-audience communications, development and achievement of social media and digital strategies, media relations, on-site support, and a post-event reputation tracking system.", "icon" => 'assets/icon-min/risk-management.png'],
  ["title" => 'Reputation Management', "icon-alt" => "Reputation Icon", "content" => "With Morshed Whatever position your business is in, Morshed will work to manage your online and offline reputation to enable us to put your brand as experts indoors in your territory and grow the competition. Through conduct analysis and inspections to consider the current station and reputation of your brand in comparison to competitors and to identify opportunities based on your industry, products and services. Morshed will follow the R.R.N Model: Repair, Rebuild and Nurture.", "icon" => 'assets/icon-min/fame.png'],
  ["title" => ' Media Monitoring', "icon-alt" => "Media Monitor Icon", "content" => "Morshed will help you to listen to who's saying what about your brand, your competitors, your industry, and any other topic that's important to you and your services. In today's world, media monitoring must cover more than just print, reaching to online, broadcast and social media.", "icon" => 'assets/icon-min/media-monitor.png']
];
// Create Navigation bar

navbar('Morshed Business Development', $nav_items);
?>
      <main>
        <!-- Weclome Block -->
        
        <?php text_block_link("Morshed", "The First Business Development as Service Firm in Iraq!", "Read More", "#morshed", "home") ?>
        
        <!-- Introduction Block -->
        
        <div class="bg-white">
          <div class="container">
          <h2 class="text-success m-0">This Website Template is free to modify and use for any purpose</h1>
        <p>Look at <a href="https://github.com/abdullrahman02000/business-consultant-website">Github repository</a> To read content licence</p>
            <div class="row">
              <div class="col-lg-6 col-12 px-2 px-md-4 py-5">
                <span class="h1">Morshed Business Development</span>
                <p>Started as a freelance and outsourcing staff to help international, regional, and local agencies and companies in their tasks, projects, and missions in Iraq.</p>
                <p>Our leap, unlike most companies who suffered from <a href="https://www.worldometers.info/coronavirus/country/iraq/" >COVID-19</a> , actually happened during COVID-19 and our growth was so rapid.</p>
              </div>
              <div class="col-lg-6 scol-12 px-2 px-md-4 py-5">
                <span class="h1">How did we start?</span>
                <p>We started moving towards completing registering our company with unique specifications in Iraqi law that help us serve more clients in the best possible ways.</p>
                <p> Our company legal name following the <a href="#about">Iraqi company</a> laws is: <a href="#about">“Morshed General Services Limited”</a>, but we refer to ourselves as Morshed Business Development (MBD).
                </p>
              </div>
            </div>
          </div>

          <!-- Features Block -->

          <div class="container text-center">
            <div class="row card-block">
                <?php
                  for ($a = 0;$a < count($features);$a++)
                  {
                      $item = $features[$a];
                      block_card1($item);
                  }
                  ?>
            </div>
          </div>

          <!-- Simple Quotation Block -->

          <div class="container d-flex justify-content-center flex-column text-center py-5">
            <q class="quote h4">
              Hold my hand in yours, and we will not fear what hands like ours can do.
            </q>
            <span class="h4 text-primary">Anonymous - <a href="https://en.wikipedia.org/wiki/Epic_of_Gilgamesh">The Epic of Gilgamesh</a></span>
          </div>

          <!-- Trusted Icons Block -->

          <div class="container my-4">
            <div class="row m-0">
              <div class="col-md-4 py-lg-0 py-2 col-12 d-flex justify-content-center">
                <a class="d-block" href="#"><img src="https://images.dmca.com/Badges/dmca-badge-w200-5x1-09.png?ID=ba9b3588-7a90-443b-ae25-f8435493430e" alt="DMCA Protected"><span class="d-none">DMCA Protected</span></a>
              </div>
              <div class="col-md-4 py-lg-0 py-2 col-12 d-flex justify-content-center">
                <a class="d-block" href="#"><img src="https://www.instantssl.com/images/seals/instantssl_trust_seal_md_159x42.png" alt="Secured by Instant SSL"><span class="d-none">Secured by instant SSL</span></a>
              </div>
              <div class="col-md-4 py-lg-0 py-2 col-12 d-flex justify-content-center">
                <a class="text-success d-block" href="#"><img src="assets/img/trustpilot.png" alt="Trustpilot"> Truspilot</a>
              </div>
            </div>
          </div>

          <!-- Services Section -->

          <?php text_block("Business Development as a Service (BDaaS)", "How Does MBD Help Your Business To Grow A New Service Or Product In Iraq?", "services") ?>
          <div class="container text-center d-flex align-items-center justify-content-center text-center flex-column my-3">
            <span class="h1 mb-5">Morshed Business Development List of Top and Best Services in Iraq</span>
            <div class="row m-0 card-block">

            <!-- Services Block -->

              <?php
                $len = count($services);
                for ($a = 0;$a < $len;$a++)
                {
                    $item = $services[$a];
                    block_card1($item);
                }
                ?>
            </div>
          </div>
          <div class="container py-5">
            <div class="row m-0">
              <div class="col-12 col-lg-6 p-4 mx-auto">
                <span class="h1">Business Activities at All Levels</span>
                <p>We assist clients in Iraq with their business activities at all levels, by providing support in locating, selecting and developing new opportunities and business relationships.</p>
                <p>Whether your business is starting up a venture, SMEs, MSMEs or just striving to increase the effectiveness of your existing programs, we can help you reap the benefits.</p>
              </div>
              <div class="col-12 col-lg-6 p-4 mx-auto">
                <span class="h1">Continued Digitization</span>
                <p>Using our wide network of industry specialists and contacts, Morshed is already well-connected with your prospective customers and partners. Our omnichannel approach builds revenues, partnerships and communities nearby you.</p>
                <p>Digital technologies have the potential to boost more inclusive and sustainable growth by spurring innovation, generating efficiencies and improving services. They are also an important tool in helping companies to confront and recover from the COVID-19 pandemic that has disrupted economies and societies globally.</p>
                <p>Morshed focusing on finding digital solutions to help clients harness the benefits of the digital transformation, including Increase capacity and business continuity.</p>
              </div>
            </div>
            <div class="row m-0">
              <div class="col-12 p-4">
                <span class="h1">Morshed Facebook Business Partnership Journey!</span>
                <span class="h2">What is Morshed - Facebook Partnership?</span>
                <ul class="iconified-list">
                  <li>Agency Partners are Facebook Business Partners who manage advertising campaigns on behalf of brands or other businesses.
                  <li>Our partnership help businesses grow today and build for tomorrow.
                  <li>Increasingly, this requires new solutions that extend beyond marketing.
                  <li>Reach the goals that are most important to your business.
                  <li>Fuel your marketing with actionable insights.
                  <li>Discover powerful consumer and advertising insights based on more than 2 billion people.
                  <li>Take your business online! Find new ways to get discovered, connect with customers and start selling online.
                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <a class="d-block border-bottom border-primary border-2" href="https://www.facebook.com/business/partner-directory/search?solution_type=campaign_management&id=3510569695736232&section=overview">Check Morshed's Profile at Facebook Partner Center</a>  
            </div>
          </div>
          <?php text_block_link("About Morshed's Focus Area and Industries", "Solutions in the field of (Public Relations \"PR\", Government Relations \"GR\", Mass Media and Public Policies).", "Read More", "#about-more", "about") ?>
          <div class="container py-5">
            <div class="row m-0">
              <div class="col-12 col-lg-6 p-4 mx-auto">
                <span class="h1">Focus Areas</span>
                <ul class="iconified-list">
                  <li>Business Development, Stakeholder Mapping & Engagement Consultant.
                  <li>PR & Communications, Social and Behavior Change Communication (SBCC) Consultant.
                  <li>Public Policy & Government Relations, Public Affairs Consultant.
                </ul>
              </div>
              <div class="col-12 col-lg-6 p-4 mx-auto">
                <span class="h1">Industries</span>
                <p>Organizations & Associations and Professional Services, Government & Politics, Energy & Utilities, Financial Services, Entertainment, Healthcare, Consumer Packaged Goods.</p>
              </div>
            </div>
          </div>
          <div class="container-fluid py-5 d-flex justify-content-center align-items-center flex-column text-center" id="morshed-meaning">
            <span class="h2 text-white">Meaning of Morshed</span>
            <span class="h3 text-white">Meaning of Morshed is an Arabic name for boys that means</span>
            <q class="quote-sm h5">one who guides others to the right path<p>
          </div>
          <div class="container my-5">
            <div class="card py-5 mb-3">
              <div class="row m-0 g-0">
                <div class="col-md-4 col-12">
                  <img src="assets/img/user-avator.png" class="rounded-circle mx-auto d-block" width="256" height="256" alt="Anas Morshed">
                </div>
                <div class="col-md-8 col-12">
                  <div class="card-body lightbox" id="anas-morshed">
                    <div>
                      <div class="box-target-flex container-fluid justify-content-end">
                          <?php close_lightbox(); ?>
                      </div>
                      <div class="lightbox-content">
                        <p class="h6 text-uppercase box-target-none">CEO</p>
                        <span class="h5 h1-target card-title">Anas Morshed</span>
                        <p class="card-text my-2-target" >Leading founder and CEO of Morshed for Business Development It is an alliance that includes a group of independent experts and innovative companies that provide creative solutions in the field of (Public Relations "PR", Government Relations "GR", Mass Media, and Public Policies). With more than seven productive years of experience in the Iraqi market, Privately-held businesses (Family Businesses) International and multinational companies, Key Governmental Agencies, SMEs, and NGOs.</p>
                        <p class="card-text box-target my-2-target">Hold, an Executive Diploma in the U.S Public Policy, from The <a href='https://www.iie.org/'>Institute of International Education</a>, New York - USA. Which focuses on developing social, economic, and foreign policies. Besides, Diploma in Public Policy and Leadership from the "<a href='https://www.aus.edu/'>American University of Sharjah</a>" class of 2018.</p>
                        <p class="card-text box-target my-2-target">Possessed a Bachelor's degree in Business Administration and Operations Management from the "<a href='http://tcm.mtu.edu.iq/lz/?lang=en'>Technical College of Management</a>" at the "<a href='https://www.mtu.edu.iq/'>Middle Technical University</a>" in Iraq, class of 2013.</p>
                        <button class="btn btn-primary box-target-none" onclick="open_lightbox('#anas-morshed')">Read More</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container my-5">
            <h1>Morshed is a Private Sector Expert</h1>
            <p>Morshed is a Private Sector Expert who plays a crucial role in implementing programs and projects in partnership with private-sector public sector and international originations to enable Iraqi youth to respond to the economic growth opportunities by the provision of skills required by the labour market and enhance employability and entrepreneurship communities.</p>
            <span class="h2 text-center my-5">Private Sector Development in Iraq</span>
            <div class="row m-0">
              <div class="col-12 col-lg-6 p-4 mx-auto">
                <span class="h3">Origins of the PSDS in the Constitution</span>
                <p>Article 25 of Iraq's Constitution stipulates that “the State shall guarantee the reform of the Iraqi economy by modern economic principles to ensure the full investment of its resources, diversification of its sources, and the encouragement and development of the private sector”.</p>
              </div>
              <div class="col-12 col-lg-6 p-4 mx-auto">
                <span class="h3">Basic Definition of the Private Sector</span>
                <p>Article 8 of the Law of Companies No 21 (1997) states: “A private sector company is established on the agreement between two or more persons outside the state sector, using private capital.” Article 8 also has a provision that includes private-joint stock or limited liability companies whenever the state holds a share of less than 25% of the capital. Internationally, it is widely accepted that the private sector is the part of the national economy that is not under direct state control and that is run for profit.</p>
              </div>
            </div>
          </div>
          <?php text_block("Contact With MBD", "MBD provide a wide range of services in Iraq", "contact") ?>
          <div class="container-fluid">
            <div class="row m-0">
              <div class="col-12 col-lg-6 p-4 mx-auto">
                <form class="was-validated" method="post">
                  <fieldset>
                    <legend>Personal Info</legend>
                    <div class="row m-0">
                      <div class="form-floating mb-3 col-12 col-lg-6">
                      <input class="form-control" name="firstname" type="text" placeholder="First Name" aria-label="First Name" pattern="[a-zA-Z- ]+" required>
                        <label class="ms-3" for="firstname">First Name</label>
                        <div class="invalid-feedback">
                          Enter a valid name without symbols (except: -)
                        </div>
                      </div>
                      <div class="form-floating mb-3 col-12 col-lg-6">
                        <input class="form-control" name="lastname" type="text" placeholder="Last Name" aria-label="Last Name" pattern="[a-zA-Z- ]+" required>
                        <label class="ms-3" for="lastname">Last Name</label>
                        <div class="invalid-feedback">
                          Enter a valid name without symbols (except: -)
                        </div>
                      </div>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" name="gender" aria-label="Gender">
                        <option value="none" selected>Prefer not to answer</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                      </select>
                      <label for="gender">Gender</label>
                    </div>
                  </fieldset>
                  <fieldset>
                    <legend>Contact Info</legend>
                    <div class="form-floating mb-3">
                      <input class="form-control" name="email" type="email" placeholder="Email Address" aria-label="Email Address" required>
                      <label for="email">Email Address</label>
                      <div class="invalid-feedback">
                        Email address should look like username@domain
                      </div>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control" name="phone" type="tel" placeholder="Phone Number" aria-label="Phone Number" pattern="[0-9+ ]*">
                      <label for="phone">Phone Number</label>
                      <div class="invalid-feedback">
                        Phone number can also contains plus and space only
                      </div>
                    </div>
                    <div class="form-item">
                      <input id="country_selector" class="form-control" type="text">
				              <label for="country_selector" class="form-control" style="display:none;">Select a country here...</label>
                    </div>
                    <div class="form-item" style="display:none;">
                      <input type="text" id="country_selector_code" name="country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
                      <label for="country_selector_code">...and the selected country code will be updated here</label>
                    </div>
                  </fieldset>
                  <fieldset>
                    <legend>Messge Info</legend>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="service-type" name="service-type" aria-label="Service Type">
                        <option value="business-dev" selected>Business Development</option>
                        <option value="stakehold-map-eng">Stakeholder Mapping & Engagement</option>
                        <option value="pub-rel-com">Public Relations and Communication</option>
                        <option value="soc-beh-ch-com">Social and Behavior Change Communication (SBCC)</option>
                        <option value="pub-police-rel">Public Policy & Government Relations, Public Affairs Consultant</option>
                        <option value="soc-med-pr">Social Media and Digital PR</option>
                        <option value="cr-mng">Crisis Management</option>
                        <option value="rp-mng">Reputation Management</option>
                        <option value="med-mng">Media Monitoring</option>
                        <option value="none">Other...</option>
                      </select>
                      <label for="service-type">Service Type</label>
                    </div>
                    <div class="d-none form-floating mb-3" id="custom-servicetype">
                      <input class="form-control" name="customservice" type="text" aria-label="Other Service Type" placeholder="Other Service Type" pattern="[a-zA-Z0-9-& ]*">
                      <label for="customservice">Other Service Type</label>
                      <div class="invalid-feedback">
                          Enter a valid name without symbols (except: -, &)
                      </div>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control" name="subject" type="text" aria-label="Subject" placeholder="Subject">
                      <label for="subject">Subject</label>
                    </div>
                    <div class="mb-3">
                      <label for="content">Content</label>
                      <textarea class="form-control" name="content" aria-label="content" rows="5" required></textarea>
                      <div class="invalid-feedback">
                        Message content is required
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="content">Notes</label>
                      <textarea class="form-control" name="notes" aria-label="notes" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="attachment">Attachments</label>
                      <input class="form-control" type="file" id="attachment" multiple>
                    </div>
                  </fieldset>
                  <input class="btn btn-primary" id="contact-submit" type="submit">
                </form>
              </div>
              <div class="col-12 col-lg-6 p-4 mx-auto">
                <div class="tab-container" id="contact-notes" data-target="contact-notes">
                  <input type="radio" id="r1" name="tab-group" data-target="remember" checked><label for="r1">Remember</label>
                  <input type="radio" id="r2" name="tab-group" data-target="notice"><label for="r2">Notice</label>
                  <input type="radio" id="r3" name="tab-group" data-target="content-liability"><label for="r3">Liability for content</label>
                  <input type="radio" id="r4" name="tab-group" data-target="link-liability"><label for="r4">Liability for links</label>
                </div>
                <div class="container py-3" style="min-height: 400px;">
                  <div class="d-none" id="remember">
                    <p>Our company is constantly evolving and growing. We provide a wide range of services. Our mission is to provide the best solution that helps everyone. If you want to contact us, please fill the contact form.</p>
                    <span class="h5">Remember our Services is the First, Top and the Best in Iraq</span>
                    <p>Public relations, Government Relations, Marketing, Digital Transmissions, end-to-end sales and go-to-market strategy and implementation, Flexible engagement from fully autonomous to service on demand,  Scalable up/down, on/off, Strategic lead acquisition, Sales conversion, Channel development, Technology partnerships and alliances, Dedicated, Exclusive tech focus in Iraq.</p>
                  </div>
                  <div class="d-none" id="notice">
                    <p>MBD is committed to protect your information. Your information will be used by the applicable data privacy law, our internal policies and our privacy policy. Your information may be stored and processed by MBD and its affiliates in countries outside your country of residence, but wherever your information is processed, we will handle it with the same care and respect for your privacy. Replace this text with information about you and your business or add information that will be useful for your customers.</p>
                    <p>By submitting your email address, you acknowledge that you have read the Privacy Statement and that you consent to our processing data by the Privacy Statement. If you change your mind at any time about wishing to receive the information from us, you can send us an email message using the Contact Us page.</p>
                  </div>
                  <div class="d-none" id="content-liability">
                    <p>The content of our pages has been created with utmost care. However, we cannot be held liable for ensuring that the content is correct, complete and up to date. As <a href="#services">service</a> providers, we are liable for our content on these pages by general legislation In this context, however, we can only assume any liability as of the date of learning of a specific violation of the law. If any violations of the law come to our attention, we will, of course, remove the content in question immediately.</p>
                  </div>
                  <div class="d-none" id="link-liability">
                    <p>Our content contains links to external websites by third-party providers, whose content we cannot influence. For this reason, we cannot assume any liability for this external content. The respective owner or operator of the website is solely responsible for its content. At the time we linked third-party content, we checked for any potential legal violations. Illegal content was not recognizable at the time of linking. However, continuous control of the linked websites' content is not reasonable unless in case of specific evidence of a legal violation. Should we be informed of any violations, we will remove the content without delay.</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer>
        <div class="container">
          <div class=" m-0">
            <address class="col-12 col-lg-6 p-3">
              <i class="fas fa-map-marker-alt"></i>14 Ramadan Street, Al Mansour District, Baghdad - Iraq<br>
              <i class="fas fa-paper-plane"></i>Al Mansour Post Office - 10013<br>
              <i class="fas fa-envelope"></i><a href="mailto:info@morshed-bdc.com">info@morshed-bdc.com</a><br>
              <i class="fas fa-phone"></i><a href="tel:+9647817774455">+964 781 777 4455</a><br>
              <i class="fas fa-phone"></i><a href="tel: +9647711266088">+964 771 126 6088</a><br>
            </address>
            <div class="col-12 col-lg-6 p-3">
              <ul class="arrow-list">
                  <li><a href="https://bit.ly/3zsKnpJ">Disclaimer</a>
                  <li><a href="https://bit.ly/3EAXybQ">Privacy Policy</a>
                  <li><a href="https://bit.ly/3AugPt5">Terms & Conditions</a>
                  <li><a href="#icon-contributors">Icon Contributors</a>
              </ul>
              <section class="d-flex justify-content-center justify-content-lg-start">
                <a href="https://www.facebook.com/MBD.Iraq" class="fab social facebook">&#xf39e;</a>
                <a href="https://www.youtube.com/channel/UC9il0FTuf9NvN3NuVzD_Cgg" class="fab social youtube">&#xf167;</a>
                <a href="https://www.linkedin.com/company/morshed/" class="fab social linkedin">&#xf0e1;</a>
                <a href="https://twitter.com/MbdMorshed" class="fab social twitter">&#xf099;</a>
              </section>
            </div>
          </div>
          <p class="text-center">Copyright © <?=date("Y") ?> morshed-bdc.com Public relations and communication company in Iraq</p>
          <br>
        </div>
        
      </footer>
      <section>
        <?php
        light_box("Morshed", [], "morshed");
        light_box("About Morshed's Focus Area and Industries", ["Morshed for Business Development Company It's an alliance that includes a group of independent experts and innovative companies that provide creative solutions in the field of (Public Relations \"PR\", Government Relations \"GR\", Mass Media and Public Policies). With more than seven productive years of experience in the Iraqi market, Privately-held businesses (Family Businesses) International and multinational companies, Key Governmental Agencies, SMEs, and NGOs."], "about-more");
        light_box("Icon Contributors", '<span onclick="window.open(\'https://www.flaticon.com/free-icons/target\')" title="target icons">Target icons created by Uniconlabs - Flaticon</a><br>
          <span onclick="window.open(\'https://www.flaticon.com/free-icons/eye\')" title="eye icons">Eye icons created by Gregor Cresnar - Flaticon</a><br>
          <span onclick="window.open(\'https://www.flaticon.com/free-icons/process\')" title="process icons">Process icons created by Eucalyp - Flaticon</a><br>
          <span onclick="window.open(\'https://www.flaticon.com/free-icons/trusted\')" title="trusted icons">Trusted icons created by Freepik - Flaticon</a><br>
          <span onclick="window.open(\'https://www.flaticon.com/free-icons/work\')" title="work icons">Work icons created by Eucalyp - Flaticon</a><br>
          <span onclick="window.open(\'https://www.flaticon.com/free-icons/awareness\')" title="awareness icons">Awareness icons created by fjstudio - Flaticon</a><br>
          <span onclick="window.open(\'https://www.flaticon.com/free-icons/network\')" title="network icons">Network icons created by prettycons - Flaticon</a><br>
          <span onclick="window.open(\'https://www.flaticon.com/free-icons/contract\')" title="contract icons">Contract icons created by Kiranshastry - Flaticon</a><br>
          <span onclick="window.open(\'https://www.flaticon.com/free-icons/public-relations\')" title="public relations icons">Public relations icons created by Freepik - Flaticon</a><br>
          <span onclick="window.open(\'https://www.flaticon.com/free-icons/risk-management\')" title="risk management icons">Risk management icons created by Freepik - Flaticon</a><br>
          <span onclick="window.open(\'https://www.flaticon.com/free-icons/risk-management\')" title="risk management icons">Risk management icons created by Freepik - Flaticon</a><br>
          <span onclick="window.open(\'https://www.flaticon.com/free-icons/reputation\')" title="reputation icons">Reputation icons created by Freepik - Flaticon</a><br>
          <span onclick="window.open(\'https://www.flaticon.com/free-icons/monitor\')" title="monitor icons">Monitor icons created by Freepik - Flaticon</a><br>
          <span onclick="window.open(\'https://pngtree.com/so/User\')">User png from pngtree.com</a>', "icon-contributors");

?>
      </section>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/script.min.js"></script>
      <!--<script src="script.js"></script>-->
    </body>