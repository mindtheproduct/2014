<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 * Template Name: Schedule
 */
?>

<?php 
  $page = "schedule";
  $title = "schedule";
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<h1>Schedule</h1>
    <div class="schedule-summary">
        
        <ul>
            <li><time>09.00</time>Registration</li>
            <li><time>10.00</time>Intro</a></li>
            <li><a href="#adams"><time>10.15</time>Paul Adams</a></li>
            <li><a href="#berkowski"><time>11.00</time>George Berkowski</a></li>
            <li><time>11.30</time>Break</li>
            <li><a href="#harford"><time>12.00</time>Tim Harford</a></li>
            <li><a href="#goto"><time>12.30</time>Kelly Goto</a></li>
            <li><a href="#lunch"><time>13.00</time>Lunch by Rackspace<!--span> Workshop 1 name</span><span>Workshop 2 name</span--></a></li>
            <li><a href="#vlaskovitscooper"><time>14.30</time>Patrick &amp; Brant</a></li>
            <li><a href="#bowles"><time>15.00</time>Cennydd Bowles</a></li>
            <li><a href="#musa"><time>15.30</time>Aziz Musa</a></li>
            <li><time>16.00</time>Break</li>
            <li><a href="#budd"><time>16.30</time>Andy Budd</a></li>
            <li><a href="#hunt"><time>17.00</time>Tara Hunt</a></li>
            <li><time>17.45</time>Closing remarks</li>
            <li><a href="#party"><time>18.00</time>Afterparty by eBay</a></li>
        </ul>
        <div class="schedule-sponsors">
            <h6>Signature sponsor</h6>
            <a href="http://ebay.com"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/logos/ebay.png" alt="Ebay" /></a>
            <h6>Sponsors</h6>
            <a href="http://www.rackspace.com"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/logos/rackspace.png" alt="Rackspace" /></a>
            <br/>
            <a href="http://www.nexmo.com"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/logos/nexmo.png" alt="Nexmo" /></a>
            <br/>
            <a href="http://skype.com"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/logos/skype.png" alt="Skype" /></a>
            <br/>
            <a href="http://www.eventbrite.co.uk/l/social/?ref=mtp"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/logos/eventbrite.png" alt="Eventbrite" /></a>
            <br/>
            <a href="http://www.mindcandy.com"><img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/logos/mindcandy.png" alt="MindCandy" /></a>

        </div>
    </div>
   
    <ul class="schedule-details">
      <li class="non-speaker">
            <div class="content">
                <time>09.00</time>
                <h2>Registration</h2>
            </div>
        </li>
        <li class="non-speaker">
            <div class="content">
                <time>10.00</time>
                <h2>Intro</h2>
            </div>
        </li>
        <li>
            <a id="adams"> </a>
            <img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/paul-adams.png" alt="Paul Adams" />
            <div class="content">
                <time>10.15</time>
                <h2>Paul Adams</h2>
                <p class="position">Head of Product Design, Intercom<br />
                <a href="http://twitter.com/padday">@padday</a>
                </p>
                <p>Paul runs product design at Intercom.io and is the author of “Grouped”. He started his career as an Industrial Designer at Dyson before going digital as a UX consultant at Flow. As a Senior UX Researcher at Google he led the Social UX Research team, where his work influenced the direction of Google+, and where he also worked on Gmail, YouTube, and Mobile. Before joining Intercom.io he was the Global Head of Brand Design at Facebook.</p>
            </div>
        </li>
        <li>
            <a id="berkowski"> </a>
            <img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/george-berkowski.png" alt="George Berkowski" />
            <div class="content">
                <time>11.00</time>
                <h2>George Berkowski</h2>
                <p class="position">former Head of Product, Hailo<br />
                <a href="http://twitter.com/georgeberkowski">@georgeberkowski</a></p>
                <p>George used to run product at hit startup Hailo, one of London’s fastest growing startups, and was one of its first employees. Now he's starting something new. He is the Chairman of the MIT Enterprise Forum UK. He co-founded and ran product at WooMe, which grew to 10 million users before being acquired by Zoosk, served as the Head of Internet Strategy and eCommerce at BT, and as the VP of Marketing for MirCorp - who made Dennis Tito the first space tourist by arranging his trip to the ISS.</p>
            </div>
        </li>
        <li class="non-speaker">
            <div class="content">
                <time>11.30</time>
                <h2>Break</h2>
            </div>
        </li>
        <li>
            <a id="harford"> </a>
            <img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/tim-harford.png" alt="Tim Harford" />
            <div class="content">
                <time>12.00</time>
                <h2>Tim Harford</h2>
                <p class="position">The Undercover Economist<br />
                <a href="http://twitter.com/timharford">@timharford</a></p>
                <p>Tim Harford is a senior columnist for the Financial Times. His long-running column, “The Undercover Economist”, reveals the economic ideas behind everyday experiences. Tim’s first book, “The Undercover Economist” has sold one million copies worldwide in almost 30 languages. As a broadcaster, Tim has presented television and radio series for the BBC, most famously “More or Less” on Radio 4. He is an evangelist for the power of economics, wisely used, and has spoken at both TED and PopTech.</p>
            </div>
        </li>

        <li>
            <a id="goto"> </a>
            <img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/kelly-goto.png" alt="Kelly Goto" />
            <div class="content">
                <time>12:30</time>
                <h2>Kelly Goto</h2>
                <p class="position">Founder and Principal, <a href="http://www.gotomedia.com">gotomedia</a></p>
                <p>As an evangelist for design ethnography, Kelly is dedicated to understanding how people integrate products and services into their daily lives. gotomedia is an industry leader in research-driven, people-friendly interface design and strategy for web, mobile and product solutions for clients including Samsung, Hyundai, and Adobe. Her book, Web Redesign 2.0: Workflow That Works, is a global standard for user-centered design principles.</p>
            </div>
        </li>
        <li>
            <a id="lunch"> </a>
            <img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/rackspace-sponsors.png" alt="Sponsored by Rackspace" />
            <div class="content">
                <time>13.00</time>
                <h2 class="sponsored">Rackspace Lunch (provided)</h2>
                <p>A buffet lunch is provided throughout the venue, but if you get a chance check out the River Rooms for a great view.</p>
                <p>At 13.10 and 13.50 Rackspace will be hosting a 30 min workshop on <em>Sprint Zero</em> in <span style="color:#00aeef;">The Queenhithe Room</span> featuring Harry Max, 
VP Experience Design (<a href="https://twitter.com/harrymax">@harrymax</a>), and Mark Interrante, VP Cloud Products (<a href="https://twitter.com/interrante">@interrante</a>).
</p>
            </div>
        </li>
        <li>
            <a id="vlaskovitscooper"> </a>
            <img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/patrick-brant.png" alt="Patrick Vlaskovits and Brant Cooper" />
            <div class="content">
                <time>14.30</time>
                <h2>Patrick Vlaskovits and Brant Cooper</h2>
                <p class="position">Authors, The Lean Entrepreneur<br />
                <a href="http://twitter.com/pv">@pv</a> and <a href="http://twitter.com/brantcooper">@brantcooper</a></p>
                <p>Brant and Patrick are co-authors of The Entrepreneur’s Guide to Customer Development and The Lean Entrepreneur. They both have a long track record of founding and building startups, as well as thought leadership in the Lean Startup movement.</p>
            </div>
        </li>
        <li>
            <a id="bowles"> </a>
            <img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/cennydd-bowles.png" alt="Cennydd Bowles" />
            <div class="content">
                <time>15.00</time>
                <h2>Cennydd Bowles</h2>
                <p class="position">Product Designer, Twitter<br />
                <a href="http://twitter.com/cennydd">@cennydd</a></p>
                <p>Digital product designer at Twitter. Over the past decade – including a stint at acclaimed consultancy Clearleft – he has advised dozens of companies on the benefits of customer-focused design. Cennydd is also the co-author of Undercover User Experience Design and writes a monthly column for A List Apart.</p>
            </div>
        </li>
        <li>
            <a id="musa"> </a>
            <img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/aziz-musa.png" alt="Aziz Musa" />
            <div class="content">
                <time>15.30</time>
                <h2>Aziz Musa</h2>
                <p class="position">Digital Director, Pegasus<br />
                <a href="http://twitter.com/azizmusa">@azizmusa</a>
                </p>
                <p>Aziz runs the Digital Consulting arm of Pegasus, an award winning specialist agency. Previously of PhotoBox, lastminute.com and RBI, Aziz has held just about every product role that exists from Product Owner to Global Product Strategy Director. Aziz presents at various conferences using psychology, philosophy and empirical study to demonstrate the importance of creating beautiful products whilst driving core KPIs.</p>
            </div>
        </li>
        <li class="non-speaker">
            <div class="content">
                <time>16.00</time>
                <h2>Break</h2>
            </div>
        </li>
        <li>
            <a id="budd"> </a>
            <img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/andy-budd.png" alt="Andy Budd" />
            <div class="content">
                <time>16.30</time>
                <h2>Andy Budd</h2>
                <p class="position">Founding Partner, Clearleft<br />
                <a href="http://twitter.com/andybudd">@andybudd</a>
                </p>
                <p>Andy Budd is the co-founder of UX consultancy Clearleft and typography start-up Fontdeck. He is also the driving force behind Silverback, a low cost usability testing tool, and a regular speaker at international conferences like The Web 2.0 Expo, An Event Apart and SXSW. He also runs the dConstruct and UX London conferences as well as the Brighton Digital Festival. He sits on the advisory board of .Net magazine and was named in Wired’s Top 100 digital influencers.</p>
            </div>
        </li>
        <li>
            <a id="hunt"> </a>
            <img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/tara-hunt.png" alt="Tara Hunt" />
            <div class="content">
                <time>17.00</time>
                <h2>Tara Hunt</h2>
                <p class="position">VP Insights and Social Strategy, Lime Foundry<br />
                <a href="https://twitter.com/missrogue">@missrogue</a></p>
                <p>Tara, also known as @missrogue, has spent her entire adult life online. She is a pioneer of online and social media marketing, one of the most influential women in technology, wrote one of the first best-seller books on social media marketing, and has spoken all over the world on the subject of social media, product strategy and content.</p>
            </div>
        </li>
        <li class="non-speaker">
            <div class="content">
                <time>17.45</time>
                <h2>Closing remarks</h2>
            </div>
        </li>
        <li>
            <a id="party"> </a>
            <img src="http://cdn.mindtheproduct.com/conference/2013/assets/images/speakers/ebay-sponsors.png" alt="Ebay" />
            <div class="content">
                <time>18.00</time>
                <h2 class="sponsored">Afterparty by eBay</h2>
                <p>Mingle and talk about what you've learned over cocktails and food. Open bar till our tab runs out!</p>
            </div>
        </li>
        
    
    </ul>    
<?php endwhile; ?>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>