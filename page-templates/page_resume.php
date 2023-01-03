<?php
/*

Template Name: Resume

*/
?>
<?php get_header();?>

<div id="developer" class="resume paper-bg">
	<div class="container">
		<div class="page-container">
			<div class="paper top">
			<div class="paper spacing-y">
				<div class="row gx-0 resume-header">
					<div class="profile-photo left-col col-md-5 col-lg-4 col-print-4 spacing-l">
						<?php echo  get_the_post_thumbnail( get_the_ID(), 'large', array('class' => 'img-fluid') ); ?>
					</div>
					<div class="profile-text right-col col-md-7 col-lg-8 col-print-8 spacing-l my-auto">
						<h1><span>Christine</span> <span class="title-2">Wilson</span></h1>
						<h2>Full Stack <span class="nowrap">Web Developer</span></h2>
					</div>
				</div> 
				<div class="row gx-0">
					<div class="resume-summary bg-pink left-col col-md-5 col-lg-4 col-print-4 spacing-l spacing-y">
						<h4><span class="d-print-none">Interactive </span>CV Resume <span class="d-none d-print-inline-block">Summary</span></h4>
					</div>
					<div class="contact-info right-col col-md-7 col-lg-8 col-print-8 spacing-x my-auto">
						<div class="row">
							<div class="col-md-6 col-print-6">
								<span class="material-icons">phone</span><a href="tel:44-734-083-1197">+44 (0)734 083 1197</a>
							</div>
							<div class="col-md-6 col-print-6">
								<span class="material-icons">email</span><a href="mailto:info@christinewilson.ca">info@christinewilson.ca</a>
							</div>
							
						</div>
					</div>
				</div>
				<div class="main row gx-0 spacing-t">
					<div class="left-col col-md-5 col-lg-4 col-print-4 spacing-l">
						<section class="about">
							<h2>About Me</h2>
							<p>I am a full stack (React &amp; PHP) web developer from Toronto, Canada currently living in the UK. As a self starter, I naturally love deep-dive challenges, however you'll also find that I work well in teams of all sizes. In my spare time, I'm keen to get more involved with Python programming and ML applications in particular.
							<!--I am a Canadian woman currently living in the UK with a young daughter; a healthy work-life balance is important to me. I have become a better team player with maturity, though my experience allows me to thrive in deep-dive challenges, pushing boundaries with innovation and personal productivity. I believe that style and design are important, however, I cannot help but feel better inspired with clear functional goals. Honesty and kindness are core values that I hold in high regard, though it is skepticism that keeps me sharp.--></p>
						</section>
						<section class="top-5">
							<h2>Top 6 Skills</h2>
							<div id="php" class="gauge-container one"><div class="language">React</div></div>
							<div id="react" class="gauge-container one"><div class="language">TypeScript</div></div>
							<div id="restapis" class="gauge-container one"><div class="language">Redux Saga</div></div>
							<div id="gcp" class="gauge-container one"><div class="language">RESTful APIs</div></div>
							<div id="mysql" class="gauge-container one"><div class="language">Netlify, Vercel</div></div>
							<div id="bootstrapg" class="gauge-container one"><div class="language">CSS3</div></div>
						</section>
						<section class="skills d-print-none">
							<h2>Skills</h2>
							<div class="subheading">Web Development</div>
							<p>React, Redux, GraphQL, Jest, CSS3, Git, TypeScript, Next.js, Netlify, Vercel, PHP, MySQL, SQL, Laravel, Docker, GCP, SSH UNIX shell scripting, React Native, MongoDB, Apache2, Gulp.js, Sass, Linux, RESTful APIs, JavaScript, Bootstrap, htaccess, JIRA, Bitbucket, Docker, SourceTree, Slack, Asana, Google Cloud Platform and AWS</p>
							<div class="subheading">Marketing Systems</div>
							<p>Pardot, Hubspot, Eloqua, Google Analytics, SEO, WordPress, Broadvision, Alfresco, Omniture</p>
						</section>
					</div>
					<div class="right-col col-md-7 col-lg-8 col-print-8">
						<section class="experience spacing-x">
							<h2>
								<span class="d-none d-print-inline-block">Recent</span> Work History
								<span class="toggle-instructions d-print-none">Toggle chevrons to expand/collapse role details</span>
							</h2>
							
							
							<div class="accordion block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">Full Stack Developer</h4>
										</div>		
										<div class="date col-md-4 col-print-4 text-right">Jan <span class="d-print-none">20</span>20 to <span class="nowrap">Oct <span class="d-print-none">20</span>21</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://110shades.com/" target="_blank">110 Shades</a> / <a href="https://mongooseandmink.com/" target="_blank">Mongoose &amp; Mink</a> <span class="nowrap">Beauty Retailer</span></div>
										</div>
									</div>
								</div>
								
								<ul class="accordion-content d-print-none">
									<li>Created 110 Shades and Mongoose &amp; Mink's website with WordPress using custom themes. The first website is to sell liquid foundation and the second sells makeup and skincare.</li>
									<li>Set up websites on a virtual server (Google Cloud Platform) with SSL certificates (Let's Encrypt)</li>
									<li>Integrations were made with Delivery Net their distribution center, and ChitChat for smaller individual shipping where we set up the checkout process to purchase the shipping method through ChitChat API and emailed the owner the shipping label.</li>
									<li>As I worked directly with the owners of the business, we discussed the best business plans going forward with technology and marketing. Ideas of how to spend money for marketing, the growing of their Instagram channel and making a presence on other websites.</li>
									<li>Set up an automated email funnel - timed emails that go out when a user abandons their cart, when they sign up, and emails that go out when they purchase an item containing dynamic content based on customer's profile.</li>
									<li>Created a quiz to find shade depth/undertone using branching logic and Tinder-like photo swiping</li>
									<li>Google Analytics tracking and custom events were added throughout the website to see where most activity happens. Hotjar heatmap tracking was also added.</li>
									<li>Custom promotions were developed for the website, including allowing influencers to sign up and get their personalized discount code they could give out to customers - where both customer and influencer will get a percentage discount/commission.</li>
									<li>Created an interactive grid of the shade depths from warm to cool and light to dark which we mapped our foundation competitors to use as a lookup tool.</li>
									<li>Coded a custom chat plugin for the Mongoose &amp; Mink website using ReactJS</li>
									<li>Created an analyzer that computes the average color of a person's skin from their photo to find their closest matching shade.</li>
								</ul>
								
								<p><span class="d-none d-print-inline-block">Tech:</span> <span class="d-print-none">Technical Environment:</span> WordPress, PHP 7, MySQL, GCP, Gulp.js, Sass, ReactJS, jQuery, Bitbucket, Docker, Slack, Git, REST APIs, AJAX, HotJar, SendGrid</p>
							</div>
							
							<div class="accordion block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">WordPress Developer</h4> 
										</div>		
										<div class="date col-md-4 col-print-4 text-right">Sep <span class="d-print-none">20</span>18 to <span class="nowrap">Jan <span class="d-print-none">20</span>20</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://rcdesign.com/" target="_blank">RC Design</a> <span class="nowrap">Creative Marketing Agency</span></div>
										</div>
									</div>
								</div>
								
								<ul class="accordion-content d-print-none">
									<li>Worked individually and on a web development team to build complete websites for clients using a child theme built on top of the company's custom parent theme.</li>
									<li>Connected to SalesForce APIs to manage send over new application information to the SalesForce system, WordPress hooks, front end development using Gulp.js, searching and filtering by words, categories and date range using JavaScript, creating custom post types, using ACF for custom fields</li>
								</ul>
								<p><span class="d-none d-print-inline-block">Tech:</span> <span class="d-print-none">Technical Environment:</span> WordPress, PHP 7, MySQL, Flywheel, Gulp.js, Sass, jQuery, JavaScript, HTML5, Bitbucket, Slack, Git, JSON, Bootstrap, REST APIs, AJAX</p>
							</div>
							
							<div class="accordion block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">Web Developer (LAMP)</h4> 
										</div>
										<div class="date col-md-4 col-print-4 text-right">Aug <span class="d-print-none">20</span>13 to <span class="nowrap">Jan <span class="d-print-none">20</span>18</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://greatgulf.com/" target="_blank">Great Gulf</a> / <a href="https://ashtonwoods.com/" target="_blank">Ashton Woods</a> <span class="nowrap">New Home Developer (B2B)</span> </div>
										</div>
									</div>
								</div>
								
								<ul class="accordion-content d-print-none">
									<li>Moved Great Gulf from Pardot to HubSpot, planning data integration with forms on website using HubSpot API to manage creation of new email lists and custom fields.</li>
									<li>Implemented Pardot as Ashton Woods new marketing automation tool. Moved data from internal system to Pardot. Set up email templates, custom roles, folder permissions. Worked with data integration team to coordinate implementation of Pardot and Salesforce.</li>
									<li>Part of team for website redesign. Imported old website data to new Drupal system - keeping current community and home plans intact. </li>
									<li>Create new modules and pages in Drupal. Coordinating changes with team, adding new stories to Jira project management software and checking changes into Git. Reviewing and testing other developers' changes.</li>
									<li>Moved websites from internal servers to Google Cloud Platform. Manage and maintain them.</li>
									<li>Created web socket to communicate from tablet to TV in our design center.</li>
									<li>Weekly meetings with SEO team implementing website changes to enhance SEO. Provide any technical insights or solutions where needed.</li>
								</ul>
								<p><span class="d-none d-print-inline-block">Tech:</span> <span class="d-print-none">Technical Environment:</span> PHP, MySQL, MS SQL, GCP, AWS, Linux, Debian, Bitbucket, Asana, Git, CSS3, Bootstrap, Apache2, REST APIs, AngularJS, jQuery, AJAX, htaccess, Pardot, Hubspot, Sass, Wordpress</p>
							</div>
							
							<div class="accordion d-print-none block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">Front-End Developer</h4> 
											
										</div>
										<div class="date col-md-4 col-print-4 text-right">May <span class="d-print-none">20</span>12 to <span class="nowrap">Aug <span class="d-print-none">20</span>13</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://epson.ca/" target="_blank">Epson Canada</a> / <a href="https://epson.com/" target="_blank">Epson America</a></div>
										</div>
									</div>
								</div>
								
								<ul class="accordion-content d-print-none">
									<li>Develops new CMS templates, jquery widgets and custom web pages using HTML, jQuery, JavaScript, CSS, JSP, Java, FTL and XSL as identified by Marketing for both Epson Canada and Epson America websites.</li>
									<li>Collaborates with back-end developers to update and create new Alfresco and Broadvision enterprise CMS pages.</li>
									<li>Updates Java classes, jsp and xml files, prepares files to move to QA and Production websites using shell scripting, and investigates previous QA moves when QA website has script errors.</li>
									<li>Works closely with Project Managers and other members of the Operations and Operations Development Team to both develop detailed specification documents with clear project deliverables and timelines, and to ensure timely completion of deliverables.</li>
									<li>Produces project estimates, including expertise required, total number of development hours required, etc.</li>
									<li>Participates in dynamic priority setting sessions.</li>
									<li>Writes functional and design specifications for third party agencies.</li>
								</ul>
								<p class="d-print-none">Technical Environment: HTML, jQuery, JavaScript, CSS, JSP, Java, FTL and XSL, Alfresco, Sass</p>
							</div>
							
							
							<div class="accordion d-print-none block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">Web Marketer</h4> 
										</div>
										<div class="date col-md-4 col-print-4 text-right">Nov <span class="d-print-none">20</span>10 to <span class="nowrap">May <span class="d-print-none">20</span>12</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://epson.ca/" target="_blank">Epson Canada</a> <span class="nowrap">Multinational Electronics Company</span></div>
										</div>
									</div>
								</div>

								<ul class="accordion-content d-print-none">
									<li>Analyzes quarterly website visits, top referring domains, natural/paid search and geo-segmentation using Omniture SiteCatalyst.</li>
									<li>Implements Business-to-Consumer website initiatives, marketing and operations to provide Epson brand and product information resulting in sales and brand loyalty.</li>
									<li>Collaborates with marketing, sales, IT departments and outside agencies to create landing pages, tracking codes for campaigns, vanity URLs, and banners on time and budget.</li>
									<li>Ensures consistency of overall look and feel, branding, navigation, and usability to ensure optimal website experience for the customer.</li>
									<li>Manage POs, accruals, execute product road map and update site using Alfresco CMS templates.</li>
								</ul>
							</div>
							
							<div class="accordion d-print-none block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">Sr. Web Designer</h4> 
										</div>
										<div class="date col-md-4 col-print-4 text-right">Feb <span class="d-print-none">20</span>06 to <span class="nowrap">July <span class="d-print-none">20</span>09</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://xe.com/" target="_blank">XE.com</a> <span class="nowrap">Online Currency Exchange</span></div>
										</div>
									</div>
								</div>

								<ul class="accordion-content d-print-none">
									<li>Many people will remember XE.com in its infancy with it's <a href="https://web.archive.org/web/20060202004005/http://www.xe.com/" target="_blank">black and white theme</a>. I designed and implemented an update to their style which was <a href="https://web.archive.org/web/20071020212415/http://www.xe.com/" target="_blank">navy blue with yellow hightlights</a> including a redesign of their logo which is used still used today. Currently the yellow hightlights have been replaced with white.</li>
									<li>Employed as XE's sole in-house and then senior web designer, redesigning and coding websites and online applications for the online currency exchange company.</li>
									<li>Designed and created marketing templates, call-to-action graphics, and interactive flash pages, tagging links, creating and setting up ads in Ad Manager, geo-targeting and testing effective ads and links with A/B testing.</li>
									<li>In collaboration with the junior web designer, marketing manager and developers, enhanced and updated the website, optimizing graphics and code for high traffic pages, cross browser compatibility, accessibility legislation and privacy laws.</li>
								</ul>
								<p class="d-print-none">Technical Environment: HTML, jQuery, JavaScript, CSS, WCAG compliant</p>
							</div>
							
							<div class="accordion d-print-none block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">Web Designer</h4> 
										</div>
										<div class="date col-md-4 col-print-4 text-right">Apr <span class="d-print-none">20</span>04 to <span class="nowrap">Feb <span class="d-print-none">20</span>06</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://eloqua.com/" target="_blank">Eloqua</a> <span class="nowrap">B2B Marketing Automation SaaS</span></div>
										</div>
									</div>
								</div>
								
								<ul class="accordion-content d-print-none">
									<li>Managed Eloqua's email marketing automation software to produce emails templates, developed emails in HTML, application icons, marketing diagrams, PDFs, direct marketing postcards, Flash and PowerPoint presentations for clients.</li>
									<li>Communicated project requirements, design direction and training of email software with internal team and over the phone with clients.</li>
									<li>Documented new scripting and testing procedures for templates, best email technical and business practices, and reference manuals for first time users.</li>
								</ul>
								<p class="d-print-none">Technical Environment: HTML, JavaScript, CSS, Eloqua Email Template setup</p>
							</div>
						</section>
						<section class="prior-history d-none d-print-block spacing-x">View expanded role details and prior work history since 2013 online</section> 
						<section class="education spacing-x">
							<h2>Education</h2>
							<div class="d-print-none summary row">
								<div class="col-md-8 col-print-8">
									<div class="subject subheading">Foundations of Project Management</div> 
									<div class="school">University of Toronto</div>
								</div>
								<div class="date col-md-4 col-print-4 text-right">2010</div>
							</div>
							<div class="summary row">
								<div class="col-md-8 col-print-8">
									<div class="subject subheading">Interactive Multimedia <span class="d-print-none">Postgraduate</span> Certificate</div> 
									<div class="school">Humber College (with Honors)</div>
								</div>
								<div class="date col-md-4 col-print-4 text-right">2003</div>
							</div>
							<div class="summary row">
								<div class="col-md-8 col-print-8">
									<div class="subject subheading">Advertising Diploma</div> 
									<div class="school">Sheridan College</div>
								</div>
								<div class="date col-md-4 col-print-4 text-right">2002</div>
							</div>
						</section>
					</div>
				</div>
				<div class="d-none d-print-block">
					<div class="qr-code-bottom row gx-0">
						<div class="col-md-6 col-lg-7 col-print-7 my-auto spacing-l"></div>
						<div class="col-md-6 col-lg-5 col-print-5 mt-auto">
							<div class="row gx-0">
								<div class="qr-code-text col-8 col-md-7 col-print-7 my-auto spacing-r">
									<div class="float-end">Scan the QR code to view <br>my full interactive resume online</div>
								</div>
								<div class="col-4 col-md-5 col-print-5">
									<div class="qr-code bg-pink spacing-r"><?php echo wp_get_attachment_image( 5178, 'thumbnail', false, array( "class" => "img-fluid spacing-r" ) ); ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<div id="sales" class="resume paper-bg">
	<div class="container">
		<div class="page-container">
			<div class="paper top">
			<div class="paper spacing-y">
				<div class="row gx-0 resume-header">
					<div class="profile-photo left-col col-md-5 col-lg-4 col-print-4 spacing-l">
						<?php echo  get_the_post_thumbnail( get_the_ID(), 'large', array('class' => 'img-fluid') ); ?>
					</div>
					<div class="profile-text right-col col-md-7 col-lg-8 col-print-8 spacing-l my-auto">
						<h1><span>Christine</span> <span class="title-2">Wilson</span></h1>
						<h2>Sales Executive</h2>
					</div>
				</div> 
				<div class="row gx-0">
					<div class="resume-summary bg-pink left-col col-md-5 col-lg-4 col-print-4 spacing-l spacing-y">
						<h4><span class="d-print-none">Interactive </span>CV Resume <span class="d-none d-print-inline-block">Summary</span></h4>
					</div>
					<div class="contact-info right-col col-md-7 col-lg-8 col-print-8 spacing-x my-auto">
						<div class="row">
							<div class="col-md-6 col-print-6">
								<span class="material-icons">phone</span><a href="tel:44-734-083-1197">+44 (0)734 083 1197</a>
							</div>
							<div class="col-md-6 col-print-6">
								<span class="material-icons">email</span><a href="mailto:info@christinewilson.ca">info@christinewilson.ca</a>
							</div>
							
						</div>
					</div>
				</div>
				<div class="main row gx-0 spacing-t">
					<div class="left-col col-md-5 col-lg-4 col-print-4 spacing-l">
						<section class="about">
							<h2>About Me</h2>
							<p>I am a Canadian woman currently living in the UK with a young daughter looking to transition into Corporate B2B Sales from Web Development. Familiar with long B2B sales cycles from working with both Ashton Woods and Eloqua, I am familiar with both marketing automation to generate leads, score and qualify, and the general sales cycle. The sales cycle includes determining customer's needs and interests through prelimiary talks and research, delving deep to learn how our product or service is leveraged successfully for businesses with similar scale or nature, and working collaboratively with the prospect to construct a definitive plan that specifically suits their needs, and finally gauging how to measure the solution's success through relevant metrics.</p>
							
							<p>With my personal determination and previous experience following highly process driven work in the web development space, I believe I would use attention to detail and timely communcation to successfully satisfy prospects and close sales. </p>
						</section>
						<section class="skills d-print-none">
							<h2>Skills</h2>
							
							<div class="subheading">Marketing Systems</div>
							<p>Hubspot, Pardot, SalesForce, WordPress, Eloqua, Broadvision, Alfresco, Omniture, Google Analytics, SEO</p>
							
							<div class="subheading">Web Development</div>
							<p>PHP, Apache2, Gulp.js, Sass, Linux, MySQL, MS SQL, REST APIs, ReactJS, AngularJS, JavaScript, jQuery, AJAX, Bootstrap, JSON, CSS3, HTML5, htaccess, XML, Git, JIRA, Bitbucket, Docker, SourceTree, Slack, Asana, TortoiseSVN, Apache Cordova, Google Cloud Platform and AWS</p>
							
						</section>
					</div>
					<div class="right-col col-md-7 col-lg-8 col-print-8">
						<section class="experience spacing-x">
							<h2>
								<span class="d-none d-print-inline-block">Recent</span> Work History
								<span class="toggle-instructions d-print-none">Toggle chevrons to expand/collapse role details</span>
							</h2>
							
							
							<div class="accordion block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">Full Stack Developer</h4>
										</div>		
										<div class="date col-md-4 col-print-4 text-right">Jan <span class="d-print-none">20</span>20 to <span class="nowrap">Oct <span class="d-print-none">20</span>21</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://110shades.com/" target="_blank">110 Shades</a> / <a href="https://mongooseandmink.com/" target="_blank">Mongoose &amp; Mink</a> <span class="nowrap">Beauty Retailer</span></div>
										</div>
									</div>
								</div>
								
								<ul class="accordion-content d-print-none">
									<li>Created 110 Shades and Mongoose &amp; Mink's website with WordPress using custom themes. The first website is to sell liquid foundation and the second sells makeup and skincare.</li>
									<li>Set up websites on a virtual server (Google Cloud Platform) with SSL certificates (Let's Encrypt)</li>
									<li>Integrations were made with Delivery Net their distribution center, and ChitChat for smaller individual shipping where we set up the checkout process to purchase the shipping method through ChitChat API and emailed the owner the shipping label.</li>
									<li>As I worked directly with the owners of the business, we discussed the best business plans going forward with technology and marketing. Ideas of how to spend money for marketing, the growing of their Instagram channel and making a presence on other websites.</li>
									<li>Set up an automated email funnel - timed emails that go out when a user abandons their cart, when they sign up, and emails that go out when they purchase an item containing dynamic content based on customer's profile.</li>
									<li>Created a quiz to find shade depth/undertone using branching logic and Tinder-like photo swiping</li>
									<li>Google Analytics tracking and custom events were added throughout the website to see where most activity happens. Hotjar heatmap tracking was also added.</li>
									<li>Custom promotions were developed for the website, including allowing influencers to sign up and get their personalized discount code they could give out to customers - where both customer and influencer will get a percentage discount/commission.</li>
									<li>Created an interactive grid of the shade depths from warm to cool and light to dark which we mapped our foundation competitors to use as a lookup tool.</li>
									<li>Coded a custom chat plugin for the Mongoose &amp; Mink website using ReactJS</li>
									<li>Created an analyzer that computes the average color of a person's skin from their photo to find their closest matching shade.</li>
								</ul>
								
								<p><span class="d-none d-print-inline-block">Tech:</span> <span class="d-print-none">Technical Environment:</span> WordPress, PHP 7, MySQL, GCP, Gulp.js, Sass, ReactJS, jQuery, Bitbucket, Docker, Slack, Git, REST APIs, AJAX, HotJar, SendGrid</p>
							</div>
							
							<div class="accordion block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">WordPress Developer</h4> 
										</div>		
										<div class="date col-md-4 col-print-4 text-right">Sep <span class="d-print-none">20</span>18 to <span class="nowrap">Jan <span class="d-print-none">20</span>20</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://rcdesign.com/" target="_blank">RC Design</a> <span class="nowrap">Creative Marketing Agency</span></div>
										</div>
									</div>
								</div>
								
								<ul class="accordion-content d-print-none">
									<li>Worked individually and on a web development team to build complete websites for clients using a child theme built on top of the company's custom parent theme.</li>
									<li>Connected to SalesForce APIs to manage send over new application information to the SalesForce system, WordPress hooks, front end development using Gulp.js, searching and filtering by words, categories and date range using JavaScript, creating custom post types, using ACF for custom fields</li>
								</ul>
								<p><span class="d-none d-print-inline-block">Tech:</span> <span class="d-print-none">Technical Environment:</span> WordPress, PHP 7, MySQL, Flywheel, Gulp.js, Sass, jQuery, JavaScript, HTML5, Bitbucket, Slack, Git, JSON, Bootstrap, REST APIs, AJAX</p>
							</div>
							
							<div class="accordion block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">Web Developer (LAMP)</h4> 
										</div>
										<div class="date col-md-4 col-print-4 text-right">Aug <span class="d-print-none">20</span>13 to <span class="nowrap">Jan <span class="d-print-none">20</span>18</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://greatgulf.com/" target="_blank">Great Gulf</a> / <a href="https://ashtonwoods.com/" target="_blank">Ashton Woods</a> <span class="nowrap">New Home Developer (B2B)</span> </div>
										</div>
									</div>
								</div>
								
								<ul class="accordion-content d-print-none">
									<li>Moved Great Gulf from Pardot to HubSpot, planning data integration with forms on website using HubSpot API to manage creation of new email lists and custom fields. </li>
									<li>Implemented Pardot as Ashton Woods new marketing automation tool, setting up new marketing/sales funnels that followed typical B2B sales cycle. Moved data from internal system to Pardot. Set up email templates, custom roles, folder permissions. Worked with data integration team to coordinate implementation of Pardot and Salesforce.</li>
									<li>Part of team for website redesign. Imported old website data to new Drupal system - keeping current community and home plans intact. </li>
									<li>Create new modules and pages in Drupal. Coordinating changes with team, adding new stories to Jira project management software and checking changes into Git. Reviewing and testing other developers' changes.</li>
									<li>Moved websites from internal servers to Google Cloud Platform. Manage and maintain them.</li>
									<li>Created web socket to communicate from tablet to TV in our design center.</li>
									<li>Weekly meetings with SEO team implementing website changes to enhance SEO. Provide any technical insights or solutions where needed.</li>
								</ul>
								<p><span class="d-none d-print-inline-block">Tech:</span> <span class="d-print-none">Technical Environment:</span> PHP, MySQL, MS SQL, GCP, AWS, Linux, Debian, Bitbucket, Asana, Git, CSS3, Bootstrap, Apache2, REST APIs, AngularJS, jQuery, AJAX, htaccess, Pardot, Hubspot, Sass, Wordpress</p>
							</div>
							
							<div class="accordion d-print-none block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">Front-End Developer</h4> 
											
										</div>
										<div class="date col-md-4 col-print-4 text-right">May <span class="d-print-none">20</span>12 to <span class="nowrap">Aug <span class="d-print-none">20</span>13</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://epson.ca/" target="_blank">Epson Canada</a> / <a href="https://epson.com/" target="_blank">Epson America</a></div>
										</div>
									</div>
								</div>
								
								<ul class="accordion-content d-print-none">
									<li>Develops new CMS templates, jquery widgets and custom web pages using HTML, jQuery, JavaScript, CSS, JSP, Java, FTL and XSL as identified by Marketing for both Epson Canada and Epson America websites.</li>
									<li>Collaborates with back-end developers to update and create new Alfresco and Broadvision enterprise CMS pages.</li>
									<li>Updates Java classes, jsp and xml files, prepares files to move to QA and Production websites using shell scripting, and investigates previous QA moves when QA website has script errors.</li>
									<li>Works closely with Project Managers and other members of the Operations and Operations Development Team to both develop detailed specification documents with clear project deliverables and timelines, and to ensure timely completion of deliverables.</li>
									<li>Produces project estimates, including expertise required, total number of development hours required, etc.</li>
									<li>Participates in dynamic priority setting sessions.</li>
									<li>Writes functional and design specifications for third party agencies.</li>
								</ul>
								<p class="d-print-none">Technical Environment: HTML, jQuery, JavaScript, CSS, JSP, Java, FTL and XSL, Alfresco, Sass</p>
							</div>
							
							
							<div class="accordion d-print-none block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">Web Marketer</h4> 
										</div>
										<div class="date col-md-4 col-print-4 text-right">Nov <span class="d-print-none">20</span>10 to <span class="nowrap">May <span class="d-print-none">20</span>12</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://epson.ca/" target="_blank">Epson Canada</a> <span class="nowrap">Multinational Electronics Company</span></div>
										</div>
									</div>
								</div>

								<ul class="accordion-content d-print-none">
									<li>Analyzes quarterly website visits, top referring domains, natural/paid search and geo-segmentation using Omniture SiteCatalyst.</li>
									<li>Implements Business-to-Consumer website initiatives, marketing and operations to provide Epson brand and product information resulting in sales and brand loyalty.</li>
									<li>Collaborates with marketing, sales, IT departments and outside agencies to create landing pages, tracking codes for campaigns, vanity URLs, and banners on time and budget.</li>
									<li>Ensures consistency of overall look and feel, branding, navigation, and usability to ensure optimal website experience for the customer.</li>
									<li>Manage POs, accruals, execute product road map and update site using Alfresco CMS templates.</li>
								</ul>
							</div>
							
							<div class="accordion d-print-none block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">Sr. Web Designer</h4> 
										</div>
										<div class="date col-md-4 col-print-4 text-right">Feb <span class="d-print-none">20</span>06 to <span class="nowrap">July <span class="d-print-none">20</span>09</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://xe.com/" target="_blank">XE.com</a> <span class="nowrap">Online Currency Exchange</span></div>
										</div>
									</div>
								</div>

								<ul class="accordion-content d-print-none">
									<li>Many people will remember XE.com in its infancy with it's <a href="https://web.archive.org/web/20060202004005/http://www.xe.com/" target="_blank">black and white theme</a>. I designed and implemented an update to their style which was <a href="https://web.archive.org/web/20071020212415/http://www.xe.com/" target="_blank">navy blue with yellow hightlights</a> including a redesign of their logo which is used still used today. Currently the yellow hightlights have been replaced with white.</li>
									<li>Employed as XE's sole in-house and then senior web designer, redesigning and coding websites and online applications for the online currency exchange company.</li>
									<li>Designed and created marketing templates, call-to-action graphics, and interactive flash pages, tagging links, creating and setting up ads in Ad Manager, geo-targeting and testing effective ads and links with A/B testing.</li>
									<li>In collaboration with the junior web designer, marketing manager and developers, enhanced and updated the website, optimizing graphics and code for high traffic pages, cross browser compatibility, accessibility legislation and privacy laws.</li>
								</ul>
								<p class="d-print-none">Technical Environment: HTML, jQuery, JavaScript, CSS, WCAG compliant</p>
							</div>
							
							<div class="accordion d-print-none block">
								<div class="summary">
									<div class="row">
										<div class="col-md-8 col-print-8">
											<h4 class="job-title">Web Designer</h4> 
										</div>
										<div class="date col-md-4 col-print-4 text-right">Apr <span class="d-print-none">20</span>04 to <span class="nowrap">Feb <span class="d-print-none">20</span>06</span></div>
									</div>
									<div class="row">
										<div class="col-md-12 col-print-12">
											<div class="organization"><a href="https://eloqua.com/" target="_blank">Eloqua</a> <span class="nowrap">B2B Marketing Automation SaaS</span></div>
										</div>
									</div>
								</div>
								
								<ul class="accordion-content d-print-none">
									<li>Managed Eloqua's email marketing automation software to produce emails templates, developed emails in HTML, application icons, marketing diagrams, PDFs, direct marketing postcards, Flash and PowerPoint presentations for clients.</li>
									<li>Communicated project requirements, design direction and training of email software with internal team and over the phone with clients.</li>
									<li>Documented new scripting and testing procedures for templates, best email technical and business practices, and reference manuals for first time users.</li>
								</ul>
								<p class="d-print-none">Technical Environment: HTML, JavaScript, CSS, Eloqua Email Template setup</p>
							</div>
						</section>
						<section class="d-none d-print-block spacing-l"><div class="prior-history spacing-x">View expanded role details and prior work history since 2013 online</div></section> 
						<section class="education spacing-x">
							<h2>Education</h2>
							<div class="d-print-none summary row">
								<div class="col-md-8 col-print-8">
									<div class="subject subheading">Foundations of Project Management</div> 
									<div class="school">University of Toronto</div>
								</div>
								<div class="date col-md-4 col-print-4 text-right">2010</div>
							</div>
							<div class="summary row">
								<div class="col-md-8 col-print-8">
									<div class="subject subheading">Interactive Multimedia <span class="d-print-none">Postgraduate</span> Certificate</div> 
									<div class="school">Humber College (with Honors)</div>
								</div>
								<div class="date col-md-4 col-print-4 text-right">2003</div>
							</div>
							<div class="summary row">
								<div class="col-md-8 col-print-8">
									<div class="subject subheading">Advertising Diploma</div> 
									<div class="school">Sheridan College</div>
								</div>
								<div class="date col-md-4 col-print-4 text-right">2002</div>
							</div>
						</section>
					</div>
				</div>
				<div class="d-none d-print-block">
					<div class="qr-code-bottom row gx-0">
						<div class="col-md-6 col-lg-7 col-print-7 my-auto spacing-l"></div>
						<div class="col-md-6 col-lg-5 col-print-5 mt-auto">
							<div class="row gx-0">
								<div class="qr-code-text col-8 col-md-7 col-print-7 my-auto spacing-r">
									<div class="float-end">Scan the QR code to view <br>my full interactive resume online</div>
								</div>
								<div class="col-4 col-md-5 col-print-5">
									<div class="qr-code bg-pink spacing-r"><?php echo wp_get_attachment_image( 5195, 'thumbnail', false, array( "class" => "img-fluid spacing-r" ) ); ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<script>
if (window.location.hash == "#sales") {
	document.getElementById("sales").style.display = "block";
	document.getElementById("developer").style.display = "none";
} else {
    document.getElementById("sales").style.display = "none"
	document.getElementById("developer").style.display = "block";
}
	const gaugeOptions = {
          max: 10,
          dialStartAngle: -1,
          dialEndAngle: -2,
          value: 0,
          label: function(value) {
            return (Math.round(value * 10) / 10) + "/" + this.max;
          }
        };
      var php = Gauge(
        document.getElementById("php"),
		gaugeOptions 
      );
	  
	  var react = Gauge(
        document.getElementById("react"),
		gaugeOptions
      );
	  var bootstrapg = Gauge(
        document.getElementById("bootstrapg"),
		gaugeOptions
      );
	  var restapis = Gauge(
        document.getElementById("restapis"),
		gaugeOptions
      );
	  var gcp = Gauge(
        document.getElementById("gcp"),
		gaugeOptions
      );
	  var mysql = Gauge(
        document.getElementById("mysql"),
		gaugeOptions
      );
	  
	const inViewport = (entries, observer) => {
		entries.forEach(entry => {
			if(entry.isIntersecting){
				if(entry.target.id=="php" ){
					php.setValueAnimated(10, 3.5);
				}
				if(entry.target.id=="react" ){
					react.setValueAnimated(9, 3);
				}
				if(entry.target.id=="bootstrapg" ){
					bootstrapg.setValueAnimated(9, 2.5);
				}
				if(entry.target.id=="restapis" ){
					restapis.setValueAnimated(9, 2);
				}
				if(entry.target.id=="gcp" ){
					gcp.setValueAnimated(8, 1.5);
				}
				if(entry.target.id=="mysql" ){
					mysql.setValueAnimated(8, 1);
				}
			}
		});
	};

	const Obs = new IntersectionObserver(inViewport);
	const obsOptions = {}; //See: https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API#Intersection_observer_options

	// Attach observer to every [data-inviewport] element:
	const ELs_inViewport = document.querySelectorAll('.gauge-container');
	ELs_inViewport.forEach(EL => {
		Obs.observe(EL, obsOptions);
	});
    </script>
<?php get_footer(); ?>