<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bahar Lab</title>
    
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="menu.js"></script>
	
    <!--Stylesheets-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="menu.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>


<body>

<div id="wrapper">
<div class="container-fluid">
<!--Header-->
	<div class="row">
		<div class="col-md-12" id="header">
        	<div class="row">
				<div class="col-md-4" id="img-left">
                	<img src="images/header_left.jpg" alt="Bahar Lab title bar"/>
				</div>
				<div class="col-md-4" id="img-mid">
                	<img src="images/header_bg.jpg"/>
				</div>
				<div class="col-md-4" id="img-right">
                	<img src="images/header_right.jpg" alt="Bahar Lab title bar"/>
				</div>
			</div>
		</div>
	</div>
    
<!--Main body-->
	<div class="row">
    <!--Navigation-->
		<div class="col-md-3" id="navigation">
            <!-- Menu -->
            <div class="nav-side-menu">
                <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
              
                    <div class="menu-list">
              
                        <ul id="menu-content" class="menu-content collapse out">            
                            <li  data-toggle="collapse" data-target="#homepages">
                              <a href="#"><i class="fa fa-gift fa-lg"></i> Homepages <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="homepages">
                                <li><a href="/Faculty/bahar/">Bahar Lab</a></li>
                                <li><a href="/index.php" target="_blank">Dept. of Computational & Systems Biology</a></li>
                                <li><a href="http://www.medschool.pitt.edu/" target="_blank">Pitt School of Medicine</a></li>
                                <li><a href="http://www.pitt.edu" target="_blank">University of Pittsburgh</a></li>
                                <li><a href="http://mmbios.org" target="_blank">MMBioS National Center</a></li>
                            </ul>
            
            
                            <li data-toggle="collapse" data-target="#research" class="collapsed">
                              <a href="#"><i class="fa fa-globe fa-lg"></i> Research <span class="arrow"></span></a>
                            </li>  
                            <ul class="sub-menu collapse" id="research">
                              <li><a href="/Faculty/bahar/structural.html">Structural Biology</a></li>
                              <li><a href="/Faculty/bahar/molecular.html">Molecular Biophysics</a></li>
                              <li><a href="/Faculty/bahar/systems.html">Systems Biology</a></li>
                              <li><a href="/Faculty/bahar/bioinformatics.html">Bioinformatics</a></li>
                              <li><a href="/Faculty/bahar/drugdisco.html">Drug Discovery</a></li>
                            </ul>
            
            
                            <li data-toggle="collapse" data-target="#pubs" class="collapsed">
                              <a href="/Faculty/bahar/publications.html"><i class="fa fa-car fa-lg"></i> Publications <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="pubs">
                              <li><a href="/Faculty/bahar/publications.html#2016">2016</a></li>
                              <li><a href="/Faculty/bahar/publications.html#2015">2010-2015</a></li>
                              <li><a href="/Faculty/bahar/publications.html#2009">2005-2009</a></li>
                              <li><a href="/Faculty/bahar/publications.html#2004">2000-2004</a></li>
                              <li><a href="/Faculty/bahar/publications.html#1999">1995-1999</a></li>
                              <li><a href="/Faculty/bahar/publications.html#1994">1985-1994</a></li>
                            </ul>
                            
                            <li data-toggle="collapse" data-target="#proj" class="collapsed">
                              <a href="#"><i class="fa fa-car fa-lg"></i> Projects / Awards <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="proj">
                              <li data-toggle="collapse" data-target="#edu" class="collapsed">Educational</li>
                              	<ul class="sub-menu collapse" id="edu">
                                	<li><a href="/bbsi/" target="_blank">BBSI</a></li>
                                    <li><a href="http://www.hhmi.org/" target="_blank">HHMI</a></li>
                                </ul>
                              <li data-toggle="collapse" data-target="#res-sub" class="collapsed">Research</li>
                              	<ul class="sub-menu collapse" id="res-sub">
                                	<li><a href="http://mmbios.org" target="_blank">MMBioS</a></li>
                                    <li><a href="http://cdar.pharmacy.pitt.edu/" target="_blank">NIDA CDAR</a></li>
                                    <li><a href="http://www.ccd.pitt.edu/consortium/" target="_blank">BD2K</a></li>
                                    <li><a href="http://ignm.ccbb.pitt.edu/" target="_blank">GNM/ANM</a></li>
                                    <li><a href="http://www.csb.pitt.edu/archive/pcbc/index.html" target="_blank">PCBC</a></li>
                                    <li><a href="http://www.cs.cmu.edu/~blmt/" target="_blank">BLM</a></li>
                                </ul>
                            </ul>
                            
                            <li data-toggle="collapse" data-target="#ppl" class="collapsed">
                              <a href="#"><i class="fa fa-car fa-lg"></i> People <span class="arrow"></span></a>
                            </li>
                                <ul class="sub-menu collapse" id="ppl">
                                  <li><a href="/Faculty/bahar/lab.html">Lab Members</a></li>
                                  <li><a href="/Faculty/bahar/alumni.html">Alumni</a></li>
                                </ul>
                                
                            <li data-toggle="collapse" data-target="#edu" class="collapsed">
                              <a href="#"><i class="fa fa-car fa-lg"></i> Education <span class="arrow"></span></a>
                            </li>
                                <ul class="sub-menu collapse" id="edu">
                                  <li><a href="http://www.compbio.pitt.edu/" target="_blank">CMU/Pitt Comp Bio PhD Program</a></li>
                                  <li><a href="/bbsi/" target="_blank">BBSI</a></li>
                                </ul>
                                
                            <li data-toggle="collapse" data-target="#mtg" class="collapsed">
                              <a href="#"><i class="fa fa-car fa-lg"></i> Meetings <span class="arrow"></span></a>
                            </li>
                                <ul class="sub-menu collapse" id="mtg">
                                  <li><a href="/Faculty/bahar/lab_meet.html">Lab Meetings</a></li>
                                  <li><a href="/Faculty/bahar/conference.html">Conference Schedule</a></li>
                                </ul>
                                
                            <li data-toggle="collapse" data-target="#serve" class="collapsed">
                              <a href="#"><i class="fa fa-car fa-lg"></i> Servers/Databases <span class="arrow"></span></a>
                            </li>
                                <ul class="sub-menu collapse" id="serve">
                                  <li><a href="http://www.csb.pitt.edu/prody/" target="_blank">ProDy</a></li>
                                  <li><a href="http://www.csb.pitt.edu/nmwiz/" target="_blank">NMWiz</a></li>
                                  <li><a href="http://ignm.ccbb.pitt.edu/" target="_blank">iGNM</a></li>
                                  <li><a href="http://gnm.csb.pitt.edu" target="_blank">oGNM</a></li>
                                  <li><a href="http://ignmtest.ccbb.pitt.edu/cgi-bin/anm/anm1.cgi" target="_blank">ANM</a></li>
                                  <li><a href="https://simtk.org/home/aanm" target="_blank">aANM</a></li>
                                  <li><a href="http://ignmtest.ccbb.pitt.edu/cgi-bin/p2p/p2p0.cgi" target="_blank">P2P</a></li>
                                  <li><a href="http://ignmtest.ccbb.pitt.edu/cgi-bin/npla/npla1.cgi" target="_blank">NPLA</a></li>
                                  <li><a href="http://www.csb.pitt.edu/coMD/index.html" target="_blank">coMD</a></li>
                                  <li><a href="http://balestra.csb.pitt.edu/" target="_blank">Balestra</a></li>
                                </ul>
                                
                            <li data-toggle="collapse" data-target="#personal" class="collapsed">
                              <a href="#"><i class="fa fa-car fa-lg"></i> Personal <span class="arrow"></span></a>
                            </li>
                                <ul class="sub-menu collapse" id="personal">
                                  <li><a href="/Faculty/bahar/personal.html">CV</a></li>
                                </ul>
                             
                            <li data-toggle="collapse" data-target="#oldweb" class="collapsed">
                              <a href="#"><i class="fa fa-car fa-lg"></i> Old Web Pages <span class="arrow"></span></a>
                            </li>
                                <ul class="sub-menu collapse" id="oldweb">
                                  <li><a href="/archive/research/bahar_lab/" target="_blank">Research/Lab</a></li>
                                  <li><a href="/archive/Faculty/bahar/" target="_blank">Personal</a></li>
                                  <li><a href="/archive/Faculty/bahar/Bahar_Schedule.htm" target="_blank">Conference Schedule</a></li>
                                </ul>

                        </ul>
                 </div>
            </div>
            <!--End Navigation-->
		</div>
    <!--Main page-->
		<div class="col-md-9" id="main-content">
			<div class="row">
				<div class="col-md-4" id="main-photo">
                	<img src="images/ivet3.jpg" / width="200px" height="325px" class="ivet-img">
				</div>
				<div class="col-md-8" id="accolades">
                <div class="row">
                	<div class="col-md-5">
                    <h4 style="margin-top: 20px;"><a href="http://www.csb.pitt.edu/people/faculty/ivet-bahar/" target="_blank">Dr. Ivet Bahar</a></h4>
                        <p id="title">
                          Distinguished Professor & JK Vries Chair<br />
                          Computational &amp; Systems Biology Dept<br />
                          School of Medicine, University of Pittsburgh <br />
                          <a href="http://www.csb.pitt.edu/people/faculty/ivet-bahar/" target="_blank">Contact information</a>
                        </p>
                    </div>
                    <div class="col-md-7" id="ivet-links">
                    	<p>
						<a href=http://www.csb.pitt.edu/dr-bahar-receives-chancellors-distinguished-research-award>Chancellor's Distinguished Research Award</a>
						<br />
						<a href=http://www.csb.pitt.edu/celebrating-10-years>10 Years of Computational Biology at Pitt</a>
						</p>
                    </div>
               </div>
                    <img src="images/mmbios2.jpg" width="500px" height="auto">
                    <!--Bahar news scrollbar-->
                    <div style="height:110px; width:500px; border:1px solid #ccc; overflow:auto;">
                    <h4>News</h4>
                    <p><a href="http://www.csb.pitt.edu/bahar-jernigan-dill-publish-book/" target="_blank">Bahar, Jernigan & Dill publish a book</a> with Garland Science titled, <a href="http://www.garlandscience.com/product/isbn/9780815341772?fromSearchResults=fromAlphaSearchResults" target="_blank"><i>Protein Actions</i></a>. </p>
                    <p>Pitt, CMU, PSC, and Salk Institute win grant for establishing a National Center, <a href="http://www.mmbios.org/">MMBioS</a>, <br /> for Multiscale Modeling of Biological Systems. <a href="http://www.post-gazette.com/stories/news/science/pitt-cmu-supercomputing-center-win-grant-for-biomedical-technology-664733/">December 3, 2012 Pittsburgh Post-Gazette</a>.</p>
                    <p>See the <a href="http://www.websedge.com/videos/biophysical_society_tv_2014/#/computational_modelling_at_mmbios">Biophys Society 2014 video</a>, and the <i>International Innovation</i> <a href="http://www.ccbb.pitt.edu/Faculty/bahar/publications/p102-104_Ivet_Bahar_Intl_Innovation_131_Research_Media.pdf">article</a>.</p>
                    </div>
				</div>
            </div>
            <div class="row">
            <!--Research Interests-->
            	<div class="col" id="research-interests">
                <h4>Research Interests</h4>
                <p>Biomolecular systems dynamics at multiple scales; evolution of proteins' sequence, structure, dynamics and function; computer-aided drug discovery and polypharmacology; network models for protein-protein interactions, supramolecular machinery and allostery; modeling and simulations of membrane proteins dynamics and mechanisms of interactions.</p>
                </div>
            </div>
			<div class="row">
            	<!--Student Spotlight-->
				<div class="col-md-4" id="student-spotlight">
                	<div class="student-spotlight-header"><img src="images/student_spot.jpg"  height="65" border="0" alt="Student-Spotlight-Heading" class="spotlight"/></div>
			    	<p class="spotlight">Cihan received the Best DCSB Student Award for 2016 for his work on developing multi-scale models and simulations for <u>dopaminergic signaling</u>. He aims at understanding the effect of spatial complexity and heterogeneity in the efficiency of dopamine (DA) reuptake.  Below is a snapshot from his simulations, displaying the release of DA (<i>red</i> dots) from active zones on DA neurons (<i>green</i>).</p>
						<img src="images/cihank_high_res.png" alt="images/cihank_high_res.png" class="spotlight" width="150" height="150" /></p>
                    <p class="spotlight">John received the best poster award in the DCSB retreat in June 2016 for his work on the ENM analysis of chromosome contact maps determined by Hi-C experiment.</p>
			      		<img src="images/shezhangfig.png" alt="images/shezhangfig.png" height="150" border="0" class="spotlight" />
                    <p class="spotlight">Hongchun received the Best DCSB Postdoc Award for 2016 for developing the iGNM database and oGNM server, <a href="http://www.ncbi.nlm.nih.gov/pubmed/26582920?dopt=Abstract">published in Nucleic Acids Research</a>.  The upgraded iGNM database provides an user-friendly interfaces for retrieving information on the dynamics of 95% of PDB structures as well as their biological assemblies.  It helps assess which structural elements undergo large correlated fluctuations, and enable conformational changes that may be relevant to function.</p>
						<img src="images/hongchunimage.jpg" alt="images/cihank_high_res.png" width="150" height="150" border="0" class="spotlight" />
				</div>
                
                <!--Recent Publications-->
				<div class="col-md-4" id="recent-publications">
                	<div class="recent-publications-header"><img src="images/recent_pub.jpg"  height="65" alt="Recent Publications image" class="spotlight"/></div>
                	<p class="spotlight"><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=Insights+into+the+modulation+of+dopamine+transporter+function+by+amphetamine%2C+orphenadrine+and+cocaine+binding" target="_blank">The work of Mary Cheng and collaborators</a> shed light into the modulation of dopaminergic signaling by targeting human dopamine transporter (hDAT). The comparison of the effects of binding dopamine (DA), amphetamine (AMPH), orphenadrine (ORPH) (repurposable drug) and cocaine to (DAT) showed that DA or AMPH drive a structural transition towards a functional form predisposed to translocate the ligand. In contrast, ORPH inhibits DAT function by arresting it in the outward-facing open conformation. Further assays show that that ORPH, like cocaine, alters DAT uptake and endocytosis.</p>
                    	<a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=Insights+into+the+modulation+of+dopamine+transporter+function+by+amphetamine%2C+orphenadrine+and+cocaine+binding" target="_blank"><img src="images/Cheng4.jpeg" alt="human dopamine transporter" class="spotlight" width="270" height="123" border="0" /></a>
					<p class="spotlight">Most recent study of Dr Gur. published in Biophys J is highlighted in Ricardo Baron's News &amp; Notable, "<a href="http://www.cell.com/biophysj/fulltext/S0006-3495(13)00964-8" target="_blank">Fast sampling of A-to-B Protein Global Conformational Transitions: From Galileo Galilei to Monte Carlo Anisotropic Network Modeling</a> The new methodology, coMD, introduced by Gur et al is stated to "surely prompt new exciting routes to rapidly connect A to B, and vice versa."</p>
						<a href="http://www.cell.com/biophysj/fulltext/S0006-3495(13)00964-8" target="_blank"><img src="images/MertGur.png" alt="ProDy Logo" width="150" height="150" border="0" class="spotlight" /></a>
				</div>
               
                <!--Research Progress-->
				<div class="col-md-4" id="research-progress">
                	<div class="research-progress-header"><img src="images/research_progress.jpg"  height="65" alt="Research Progress Heading" class="spotlight" /></div>
                    <p class="spotlight">
                        Structural dynamics, including allosteric switches, are evolutionarily maintained to accomplish biological activities, consistent with the paradigm sequence -> structure -> dynamics -> function where 'dynamics' bridges structure and function.<br><br>
                    </p>
                    <img src="images/adaptabilityproteinstructs.jpg" alt="adaptabilityproteinstruct" width="189" border="0" class="spotlight">
                    <p class="spotlight"><a href="http://www.ccbb.pitt.edu/Faculty/bahar/1-s2.0-S0959440X15001050-main.pdf">&quot;Adaptability of protein structures to enable functional interactions and evolutionary implications &quot;</a>&nbsp;Turkan Haliloglu and Ivet Bahar<em>Current Opinion in Structural BIology</em> (2015) <strong>35</strong>17-23.
					</p>
					<p class="spotlight"><a href="http://mmbios.org/index.php/research/highlights#StoModAnalApop">&quot;Significance of p53 dynamics in regulating apoptosis in response to ionizing radiation, and polypharmacological strategies&quot;</a>&nbsp;Liu B, Bhatt D, Oltvai ZN, Greenberger JS, Bahar I<em>Sci Rep</em> (2014) <strong>4</strong>:6245. PMID: 25175563
                    </p>
					<p class="spotlight">Controlling ionizing radiation (IR)-induced cell death mitigates radiation damage. Examining tumor suppressor protein p53 network dynamics in response to IR damage found that the strength of p53 transcriptional activity and its coupling (or timing with respect) to mitochondrial pore opening are major determinants of cell fate.
                    </p>
                    <img src="images/stochasticModelingBing_322.png" alt="stochasticModelingBing_322" width="189" height="250" border="0" class="spotlight">
					<p class="spotlight"><a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=Mechanisms+of+CFTR+functional+variants+that+impair+regulated+bicarbonate+permeation+and+increase+risk+for+pancreatitis+but+not+for+cystic+fibrosis" target="_blank">&quot;Mechanisms of CFTR functional variants that impair regulated bicarbonate permeation and increase risk for pancreatitis but not for cystic fibrosis&quot;</a>&nbsp;LaRusch J et al.<em>PLoS Genetics</em> (2014) <strong>10</strong>:e1004376. PMID: 2503378</p>
					<p class="spotlight"><a href="http://www.csb.pitt.edu/bahar-research-featured-in-winter-20142015-issue-of-pitt-med/">Bahar research featured in winter 2014/2015 issue of Pitt Med</a>.
                    </p>
				</div>
			</div>
		</div>
	</div>
<!--Footer-->
	<div class="row">
		<div class="col-md-12" id="footer">
		</div>
	</div>
</div>
</div>
</body>
</html>
