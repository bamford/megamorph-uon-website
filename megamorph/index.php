<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>MegaMorph</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="../css/bootstrap.css" type=
  "text/css">
  <style type="text/css">
          body {
                padding-top: 80px;
                padding-bottom: 40px;
            }
          h2 {
              padding-top:40px;
            }
  </style>
  <link rel="stylesheet" href="../css/bootstrap-responsive.min.css"
  type="text/css">
  <link rel="stylesheet" href="../css/main.css" type="text/css">
  <script type="text/javascript">
              
                  var _gaq = _gaq || [];
                  _gaq.push(['_setAccount', 'UA-35499195-1']);
                  _gaq.push(['_trackPageview']);
                
                  (function() {
                        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                  })();
                
  </script>
<!--
<a href="https://plus.google.com/103670520789030779243" rel="publisher"/>
-->
</head>

<body>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar pull-left" data-toggle="collapse"
        data-target=".nav-collapse"></a>

        <div class="logo">
          <a class="pull-right" href=
          "http://www.nottingham.ac.uk"><img src=
          "../img/uon_logo_149x60.png" style="margin:10px 5px"></a>
        </div><a class="brand" href="../index.php">Nottingham
        Astronomy</a>
      </div>
    </div>
  </div><!--Navbar-->

  <div class="container">
    <div class="row">
      <div class="span8">
        <div class="page-header">
          <h1>MegaMorph</h1>
        </div>

        <div class="span7">
          <h2>About</h2>

	  <p>The MegaMorph project has produced new versions of
          <a href=
          "http://users.obs.carnegiescience.edu/peng/work/galfit/galfit.html">
          GALFIT</a> and <a href=
          "http://astro-staff.uibk.ac.at/~m.barden/galapagos/">GALAPAGOS</a>
          with several novel developments. The most significant,
          and well-tested, of these is the implementation of
          <b>multi-band</b> fitting. This enables a single, consistent,
          wavelength-dependent model to be fit to any collection of
          pixel registered images. We have also included an experimental method
          for including a <b>non-parametric</b> component in the fit,
          which can help improve the robustness of fits against the
          effects of features such as spiral arms, bars, nuclear
          sources, and un-masked neighbours. Finally, we have added
          the ability to use <b>MultiNest sampling</b> as an alternative
          to Levenburg-Marquardt minimisation, but this is not yet
          recommended for general use.</p>

	  <p>This work was made possible by generous funding from the
	  Qatar National Research Fund (NPRP grant 08-643-1-112).  The
	  main personnel who have worked to create, test and apply the
	  code are: Steven Bamford (Nottingham), Boris Haeussler
	  (Nottingham/Oxford), Marina Vika (CMU-Qatar) and Alex Rojas
	  (CMU-Qatar).  Others who have directly contributed to the
	  development and early science verification include Benedetta
	  Vulcani (CMU-Q/IPMU), Lee Kelvin (St.Andrews/UWA/Innsbruck),
	  Marco Barden (Innsbruck), Chien Peng (Carnegie Obs./GMTO),
	  Arianna Cortesi (Nottingham/IAG-USP), Rebecca Kennedy
	  (Nottingham), Jim Cresswell (CMU-Q), Andrea Borch
	  (CMU-Q).  The core-S&eacute;rsic model was implemented by Paolo
	  Bonfini (Swinburne).</p>

          <p>Our developments build upon the existing code and efforts
          of Chien Peng (GALFIT) and Marco Barden (GALAPAGOS), and we
          are indebted to them for allowing us to include our
          developments in their software. Much of the advice given on
          their respective websites is equally applicable to our
          versions, and any publications based on our software should
          also cite the appropriate original <a
           href="http://adsabs.harvard.edu/abs/2002AJ....124..266P">GALFIT</a>
          and <a
           href="http://adsabs.harvard.edu/abs/2012MNRAS.422..449B">GALAPAGOS</a>
          papers.</p>

          <p>Some documentation is provided below, but it is still
	  rather incomplete. For now, we also recommend emailing the
	  relevant maintainer(s) for further advice on using the
	  code.</p>

          <p>If you have any questions or problems, you can ask for
          help on our Facebook <a
          href="https://www.facebook.com/groups/295177727820811/">group</a>.
          As new versions are produced they will be announced there,
          so please join to keep up-to-date with developments.</p>

          <h2>Downloads</h2>

          <p>Our software is available below. Please bear in mind
          that this is work in progress, and while some features
          are complete and well-tested, others are less so.</p>

          <p>For important information about recent changes, please
          consult the release notes.</p>

          <ul>
	    <li><a href="exec/RELEASE_NOTES">RELEASE_NOTES</a></li>
	  </ul>
  
          <h3>GALFITM</h3>

	  <p><em>Primarily maintained by <a href=
          "mailto:steven.bamford@nottingham.ac.uk">Steven Bamford</a>.</em></p>

          <p>The latest version is 1.4.3. Executables for various
          platforms can be downloaded from the links below.</p>

          <ul>
            <li><a href="exec/galfitm-1.4.3-linux-x86_64">v.1.4.3 Linux
            x86_64 (64-bit)</a></li>
<!--
	    <li><a href="exec/galfitm-1.2.1-linux-i686">v.1.2.1 Linux
            i686 (32-bit)</a></li>
-->
            <li><a href="exec/galfitm-1.4.3-osx">v.1.4.3 OSX/MacOS (Yosemite onwards)</a></li>
          </ul>

	  <p>Versions 1.4.x enable the use of higher-order functions
          (bending, fourier modes, rotation) from GALFIT3. For models
          that do not make use of these features, 1.4.x should behave
          as before. While we fully ascertain that this is the case,
          we continue to maintain the 1.2.x branch. The latest
          versions are available below.</p>

          <ul>
            <li><a href="exec/galfitm-1.2.6-linux-x86_64">v.1.2.6 Linux
            x86_64 (64-bit)</a></li>
<!--
	    <li><a href="exec/galfitm-1.2.1-linux-i686">v.1.2.1 Linux
            i686 (32-bit)</a></li>
-->
            <li><a href="exec/galfitm-1.2.6-osx">v.1.2.6 OSX/MacOS (Yosemite onwards)</a></li>
          </ul>

	  <p>Note that, for comparisons and compatibility purposes,
	  any previous version can be obtained by substituting the
	  version number in the above links.</p>
	  
          <p>Documented example input files:</p>

          <ul>
            <li><a href=
            "exec/EXAMPLE.GALFITM.INPUT">EXAMPLE.GALFITM.INPUT</a></li>
	    <li><a href=
	    "exec/EXAMPLE.GALFITM.CONSTRAINTS">EXAMPLE.GALFITM.CONSTRAINTS</a></li>
          </ul>

          <p>The source code is not distributed publicly due to
          licensing issues. Please <a href=
          "mailto:megamorph@stevenbamford.com">contact us</a> if
          you wish to contribute to the code development or need
          executables for another platform.</p>

          <h3>GALAPAGOS-2</h3>

	  <p><em>Primarily maintained by <a href=
          "mailto:borishaeussler.astro@gmail.com">Boris Haeussler</a>.</em></p>

	  <p>Development and releases of the GALAPAGOS-2 IDL code are
	  now hosted <a
	   href="https://github.com/MegaMorph/galapagos/">on
	  GitHub</a>. A detailed <a
	  href="https://github.com/MegaMorph/galapagos/blob/master/EXAMPLE_AND_README/USAGE.md">usage guide</a> and set of examples are
	  included.</p>
	  
	  <ul>
	    <li>The latest release is <a href="https://github.com/MegaMorph/galapagos/releases/latest">available here</a>.</li>
	  </ul>
	  
          <h2>Issues and caveats</h2>

          <ul>
            <li>GALFITM should be backward compatible with GALFIT3.
            On single-band data most of the code executed is
            identical, however constraints are handled in a slightly
            different way, which means that you will occasionally see
            significant differences in the final parameters returned
            by GALFITM and GALFIT3. Please let us know if you have a
            FEEDME file that works correctly with GALFIT3 but not
            GALFITM.  Note however, that there are many additional
            options in GALFITM, and so even single-band GALFITM FEEDME
            files will often not work with GALFIT3.</li>

            <li>Use of bending modes, fourier modes and rotations
            (e.g. to model distortions and spiral arms) is <b>now
            implemented</b> in version 1.4.x of GALFITM, with full
            multi-band support. These features have received a
            reasonable amount of internal testing, but users are
            recommended to carefully check their results. Please get
            in touch with any issues or success stories. Truncations
            are partially implemented but probably do not work
            correctly - use them at your own risk!</li>

            <li>Almost all our internal testing has used only the
            S&eacute;rsic, PSF, exponential disc and sky
            functions. The way that we have implemented the multi-band
            method means that it should work with any of the standard
            GALFIT functions. However, if you discover anything odd,
            please let us know.</li>

            <li>GALFITM prior to version 1.2.0 was based upon
            GALFIT-3.0.2. It therefore did not include some of Chien
            Peng's latest additions to GALFIT. These updates in
            GALFIT-3.0.5 were merged into GALFITM version
            1.2.0. The changes are mostly minor, primarily the
            addition of flags providing information about potential
            issues with a fit. However, internally-generated sigma
            images are now smoothed, which generally results in
            small (but occasionally significant) changes to fitting
            results.  Feedback on this is welcomed.</li>

	    <li>Although implemented, the use of MultiNest sampling
	    has not been tested much, and is very slow, prohibitively
	    so for models with multiple components and wavelength
	    freedom. It is definitely not ready for serious use.</li>

            <li>GALFITM is still in active (though sporadic) development, and there
            are some rough areas that could do with some work to
            make them more suitable for public use. While the
            central functionality is unikely to change
            substantially, the software will continue to be refined
            and polished. New versions, and the changes involved,
            will be announced here and via our Facebook <a
            href="https://www.facebook.com/groups/295177727820811/">group</a>.</li>
          </ul>

	  
          <h2>Test suite</h2>

          <p>We maintain a <a
	  href="https://github.com/MegaMorph/galfitm-tests">suite of
	  tests</a>
	  for GALFIM. These are primarily for our own internal use in
	  regression testing new versions. However, users may find
	  them a useful source of examples, illustrating the range of
	  functionality in GALFITM. Feel free to open a pull request
	  with your own tests!</p>

	  
          <h2>Papers</h2>

          <ul>
            <li><a href=
            "http://adsabs.harvard.edu/abs/2011ASPC..442..479B">Bamford
            et al., 2010, "Measuring the Physical Properties of
            Galaxy Components Using Modern Surveys", ADASS XX conf.
            proc.</a></li>

            <li>Bamford et al., "MegaMorph - multi-wavelength
            measurement of galaxy structure: motivation, design and
            demonstration of principles", in prep.</li>

            <li><a href=
            "http://adsabs.harvard.edu/abs/2013MNRAS.435..623V">Vika
            et al., 2013, "MegaMorph - multiwavelength measurement of
            galaxy structure: S&eacute;rsic profile fits to
            galaxies near and far", 2013, MNRAS, 435, 623</a></li>

            <li><a href=
            "http://adsabs.harvard.edu/abs/2013MNRAS.430..330H">Haeussler
            et al., 2013, "MegaMorph - multiwavelength measurement of
            galaxy structure: complete S&eacute;rsic profile
            information from modern surveys", MNRAS, 430,
            330</a></li>

            <li><a href=
            "http://adsabs.harvard.edu/abs/2014MNRAS.441.1340V">Vulcani
	    et al., 2014, "Galaxy And Mass Assembly (GAMA):
            the wavelength-dependent sizes and profiles of galaxies
            revealed by MegaMorph", MNRAS, 441, 1340</a></li>

            <li>Bamford et al., "MegaMorph -
            multi-wavelength measurement of galaxy structure:
            non-parametric galaxy components", in prep.</li>

            <li><a href=
            "http://adsabs.harvard.edu/abs/2014MNRAS.444.3603V">Vika
            et al., 2014, "MegaMorph - multi-wavelength measurement of
            galaxy structure: physically meaningful bulge-disk
            decomposition of galaxies near and far", MNRAS, 444, 3603</a></li>

            <li>Haeussler et al., "MegaMorph -
            multi-wavelength measurement of galaxy structure:
            separating the properties of spheroid and disk
            components in modern surveys", in prep.</li>

	    <li><a href=
            "http://adsabs.harvard.edu/abs/2014PASP..126..935B">Bonfini,
            2014, "GALFIT-CORSAIR: Implementing the Core-S&eacute;rsic Model
	    Into GALFIT", PASP, 126, 935</a></li>

	    <li><a href=
            "http://adsabs.harvard.edu/abs/2015A%26A...577A..97V">Vika
            et al., 2015, "MegaMorph: classifying galaxy morphology
	    using multi-wavelength S&eacute;rsic profile fits",
	    A&A, 577, 97</a></li>
	    
	    <li><a href=
            "http://adsabs.harvard.edu/abs/2015MNRAS.454..806K">Kennedy
            et al., 2015, "Galaxy And Mass Assembly (GAMA): the
	    wavelength dependence of galaxy structure versus redshift
	    and luminosity", MNRAS, 454, 806</a></li>

	    <li>Kennedy et al., "Galaxy And Mass Assembly (GAMA):
	    understanding the wavelength dependence of galaxy structure with
	    bulge-disc decompositions", MNRAS, submitted</li>

          </ul>
        </div><!-- /.span7 -->
      </div>

      <div class="span4 hidden-phone">
        <div class="row">
          <div class="span4" style="margin-top:80px">
            <div style=
            "margin-left:auto; margin-right:auto; width:240px">
              <p>Join our Facebook <a
              href="https://www.facebook.com/groups/295177727820811/">group</a>
              for discussions and announcements.</p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /container -->

  <footer class="footer">
    <div class="container">
      <p>&#169; University of Nottingham 2013 &nbsp; - &nbsp;
      <a href="mailto:steven.bamford@nottingham.ac.uk">Report
      Issues</a> &nbsp; <a href="../contact.php">Contact</a></p>
    </div>
  </footer>
<script src="http://code.jquery.com/jquery.js" type=
"text/javascript">
</script><script src="../js/bootstrap-transition.js" type=
"text/javascript">
</script><script src="../js/bootstrap-alert.js" type=
"text/javascript">
</script><script src="../js/bootstrap-modal.js" type=
"text/javascript">
</script><script src="../js/bootstrap-dropdown.js" type=
"text/javascript">
</script><script src="../js/bootstrap-scrollspy.js" type=
"text/javascript">
</script><script src="../js/bootstrap-tab.js" type=
"text/javascript">
</script><script src="../js/bootstrap-tooltip.js" type=
"text/javascript">
</script><script src="../js/bootstrap-popover.js" type=
"text/javascript">
</script><script src="../js/bootstrap-button.js" type=
"text/javascript">
</script><script src="../js/bootstrap-collapse.js" type=
"text/javascript">
</script><script src="../js/bootstrap-carousel.js" type=
"text/javascript">
</script><script src="../js/bootstrap-typeahead.js" type=
"text/javascript">
</script><script src="../js/hashchange.js" type="text/javascript">
</script><script type="text/javascript">
var shiftWindow = function(tohash) {
    var hash = "#" + tohash.replace(/[^A-Za-z0-9_\-]/g, "");
    if (hash && $(hash).offset()) {
        var pos = $(hash).offset().top - 90;
        $('html,body').animate({scrollTop:pos}, 500);
    }
  }

  $(document).ready(function(){
    // Fixing Anchor links nav leaving the destination text hidden under Header
    if (location.hash) shiftWindow(location.hash);
  });

  $('.nav a[href^="#"]').click(function(event) {
    event.preventDefault();
    var href = $(this).attr('href');
    if (href != location.hash) {
        shiftWindow(href);
        location.hash = href;
    }
  });
        
  $(document).ready(function () {
    location.hash && $(location.hash + '.collapse').collapse('show');
  });
  </script><script type="text/javascript">
window.___gcfg = {lang: 'en-GB'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
  </script>
</body>
</html>
