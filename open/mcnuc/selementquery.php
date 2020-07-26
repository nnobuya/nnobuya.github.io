<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>KADoNiS - Karlsruhe Astrophysical Database of Nucleosynthesis in Stars</title>
<link rel="SHORTCUT ICON" href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/favicon.ico">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="author" content="Ralf Plag">
<meta name="keywords" content="Kadonis, s-process, bao, database, nucleosynthesis, stars, capture cross section">
<link rel="stylesheet" href="style1.css" type="text/css">
<script src="pquery.js"></script>
<script src="jquery.js"></script>

<SCRIPT type="text/javascript">


<!-- Begin
function popUp(URL) {
refwindow = window.open(URL, 'Reference', 
'toolbar=0,location=0,statusbar=0,menubar=0,width=500,height=100');
refwindow.focus();
};


// End -->

function add_hover()
{
 $("td.arrow").hover(function () {
        $(this).css({'border' : '1px solid #aaa','background' : '#ddd'});
      }, 
      function () {
        $(this).css({'border' : '1px solid #fff','background' : '#fff'});
      }
     );

 $("div.header").hover(function () {
        $(this).css({'background-color' : '#eef'});
      }, 
      function () {
        $(this).css({'background-color' : '#dde'});
      }
     );

}

function move_chart(param)
{
 $("div#chart").load("con.php?"+param, function() {add_hover();});
}

$(function(){
  // Document is ready
  add_hover();
});

</script>


</head>
<body text="#000000" bgcolor="#FFFFFF" link="#FF0000" alink="#FF0000" vlink="#FF0000" onload="doOnLoad()">

<table align=center width=610 border=0 cellpadding=0 cellspacing=0>
<tr><td height=40>
<center>
<font size="+1"><b class="red">K</b>arlsruhe <b class="red">A</b>strophysical <b class="red">D</b>atabase <b class="red">o</b>f <b class="red">N</b>ucleosynthesis <b class="red">i</b>n <b class="red">S</b>tars</font>
</center>
</td></tr>
<tr><td class="bord" height=1></td></tr>
<tr><td>
<table width="100%" border=0 cellpadding=0 cellspacing=0><tr>
<td class="smenu"><a class="menu" href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/index.php" title="The s process start page"><b>s-process</b></a></td>

<td class="smenu"><center>
[<a class="menu" href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/stdxs.php" title="Standard cross sections">Standards</a>]&nbsp;&nbsp;
[<a class="menu" href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/logbook.php" title="Logbook">Logbook</a>]&nbsp;&nbsp;
[<a class="menu" href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/faq.php" title="Frequently Asked Questions">FAQ</a>]&nbsp;&nbsp;
[<a class="menu" href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/links.php" title="Links">Links</a>]&nbsp;&nbsp;
[<a class="menu" href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/disclaimer.php" title="Disclaimer">Disclaimer</a>]&nbsp;&nbsp;
[<a class="menu" href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/contact.php" title="Contact the authors of this web page">Contact</a>]
</center></td>
<td class="pmenu" align=right><a class="menu" href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/pprocess/index.php" title="The p process start page page"><b>p-process</b></a></td>
</tr></table>

</td></tr>
<tr><td class="bord" height=1></td></tr>

<tr><td>
<SCRIPT type="text/javascript">

function toggledata(obj)
{
var dataDiv=$(obj).next();
if (dataDiv.is(":hidden"))
  $(obj).css("background-image","url('tridown.png')");
else
  $(obj).css("background-image","url('triright.png')");
dataDiv.slideToggle("normal");

//while ((obj) && (obj.className!="data")) obj=obj.nextSibling;
//if (!obj) return;

//alert(obj.name);
}
</SCRIPT>

<div class="header" onclick="toggledata(this);">Available isotopes for Boron (Z=5)</div>
<div class="data" style='text-align:center;border-bottom: none;'> &nbsp; <span style='color: #007;font-size:24px;'><sup>10</sup>B</span> &nbsp; <a href='selementquery.php?isotope=11B'><sup>11</sup>B</a>
</div>
<div class="data" style='text-align:center;padding: 10px 0px 10px 0px;'>
<form method="get" action="selementquery.php">
Go to isotope
<input class="macs" type="text" size="8" name="isotope"/>
<input class="macs" type="submit" value="Go!"/>
</form>
</div>

<div class="header" onclick="toggledata(this);">Recommended MACS30 <span style='font-weight: normal;'>(Maxwellian Averaged Cross Section @ 30keV)</span></div>
<div class="data">
 <div class="reaction">
 <sup>10</sup>B <img style='position: relative;top: 13px;' width=76 height=43 src="ng.png"><sup>11</sup>B
 </div>
<br><br>
 <center>
<table class="recommended">
<tr style='font-weight: bold;'><td class="quantname">Total MACS at 30keV:</td><td class="quantvalue" >0.340 </td><td >&plusmn;</td><td  > 0.020</td><td class="quantunit">mb</td></tr>
</table>
<br><br>
<small>Cross sections do not include stellar enhancement factors!<br>

</small>
</center>
</div>

<div class="header" onclick="toggledata(this);">History</div>
<div class="data">
<table class='history'><tr><th>Version</th><th  style='width:13em;'>Total MACS [mb]</th><th style='width:13em;'>Partial to gs [mb]</th><th style='width:13em;'>Partial to isomer [mb]</th></tr><tr><td>1.0</td><td>0.340 &plusmn; 0.020</td><td>-</td><td>-</td></tr></table><br>(Version 0.0 corresponds to Bao et al.)
</div>

<div class="header" onclick="toggledata(this);">Comment</div>
<div class="data">
New dataset in v1.0. Normalized <a href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=endfb71&amp;style=small" onClick="popUp('http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=endfb71&amp;style=small');return false">endfb71</a> by f=0.784 to exp. values of <a href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=exfor-10b&amp;style=small" onClick="popUp('http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=exfor-10b&amp;style=small');return false">exfor-10b</a>.<br>
Last review: June 8th, 2012<br>
</div>

<div class="header" onclick="toggledata(this);">List of all available values</div>
<div class="data">
<center>
<table width="100%">
<tr bgcolor='#aaaaaa'><td>original</td><td>renorm.</td><td>year</td><td>type</td><td align=left>Comment</td><td>Ref</td></tr>
<tr bgcolor='#eeeeee'>
<td><pre>0.424 - 0.258</pre>E(n)= 23 - 61 keV </td><td>0.340 &plusmn; 0.020</td><td>1995</td><td>r</td><td align=left>Pelletron, TOF, Au:ENDF/B-VI and <a href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=MaG67b&amp;style=small" onClick="popUp('http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=MaG67b&amp;style=small');return false">MaG67b</a>; en. dep. from <a href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=endfb71&amp;style=small" onClick="popUp('http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=endfb71&amp;style=small');return false">endfb71</a></td><td><a href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=exfor-10b&amp;style=small" onClick="popUp('http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=exfor-10b&amp;style=small');return false">exfor-10b</a></td>
</tr>
<tr>
<td><pre>0.432</pre></td><td></td><td>2011</td><td>e</td><td align=left>ENDF/B-VII.1</td><td><a href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=endfb71&amp;style=small" onClick="popUp('http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=endfb71&amp;style=small');return false">endfb71</a></td>
</tr>
<tr bgcolor='#eeeeee'>
<td><pre>0.404</pre></td><td></td><td>2011</td><td>e</td><td align=left>JENDL 4.0</td><td><a href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=jendl40&amp;style=small" onClick="popUp('http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=jendl40&amp;style=small');return false">jendl40</a></td>
</tr>
<tr>
<td><pre>0.432</pre></td><td></td><td>2004</td><td>e</td><td align=left>JEFF 3.1</td><td><a href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=jeff31&amp;style=small" onClick="popUp('http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=jeff31&amp;style=small');return false">jeff31</a></td>
</tr>

</table>
</center>

<br><br>
<b>Original:</b>MACS [&lt;&sigma; v&gt;/v<sub>T</sub>] (mb) for kT=30 keV, based on the published cross sections except where indicated otherwise.<br>
<b>Renorm:</b>MACS [&lt;&sigma; v&gt;/v<sub>T</sub>] (mb) for kT=30 keV for which the reference or <a href="stdxs.php">standard cross section</a> was meanwhile improved.<br>
<b>Type:</b> The letters and numbers in the column labelled 'type' give information on how the cross section has been obtained:<br>
<table width="100%">
<tr><td valign=top bgcolor='#f8f8f8'>r</td><td align=left valign=top  bgcolor='#f8f8f8'>Recalculated for kT = 30keV with the code described in Ref. 2 after renormalizing the original data to updated <a href='stdxs.php'>standard cross sections</a></td></tr><tr><td valign=top bgcolor='#f8f8f8'>e</td><td align=left valign=top  bgcolor='#f8f8f8'>Evaluated value taken directly from the reference</td></tr>
</table>
</div>

<div class="header"  onclick="toggledata(this);">MACS, SEF and Reaction Rates for different energies</div>
<div class="data">
<center>
<table width="100%" border=0 cellpadding=1 cellspacing=2><tr bgcolor='#bbbbbb'>
<td>Energy</td><td>5keV</td><td>8keV</td><td>10keV</td><td>15keV</td><td>20keV</td><td>25keV</td><td>30keV</td><td>40keV</td><td>50keV</td><td>60keV</td><td>80keV</td><td>100keV</td></tr><tr><td  bgcolor='#dddddd'>MACS</td><td><pre>0.834</pre></td><td><pre>-</pre></td><td><pre>0.590</pre></td><td><pre>0.481</pre></td><td><pre>0.417</pre></td><td><pre>0.373</pre></td><td><pre>0.340 &plusmn; 0.020</pre></td><td><pre>0.295</pre></td><td><pre>0.263</pre></td><td><pre>0.240</pre></td><td><pre>0.208</pre></td><td><pre>0.186</pre></td></tr><tr><td  bgcolor='#dddddd'>SEF</td><td>1.00</td><td>1.00</td><td>1.00</td><td>1.00</td><td>1.00</td><td>1.00</td><td>1.00</td><td>1.00</td><td>1.00</td><td>1.00</td><td>1.00</td><td>1.00</td></tr><tr><td  bgcolor='#dddddd'>Rate</td><td><pre>5.17</pre></td><td>-</td><td><pre>5.17</pre></td><td><pre>5.17</pre></td><td><pre>5.17</pre></td><td><pre>5.17</pre></td><td><pre>5.17</pre></td><td><pre>5.17</pre></td><td><pre>5.16</pre></td><td><pre>5.16</pre></td><td><pre>5.16</pre></td><td><pre>5.16</pre></td>
</tr></table>
</center>
<br><b>MACS:</b><br>
Reference: <a href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=endfb71&amp;style=small" onClick="popUp('http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=endfb71&amp;style=small');return false">endfb71</a>,<a href="http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=exfor-10b&amp;style=small" onClick="popUp('http://exp-astro.physik.uni-frankfurt.de/kadonis1.0/refquery.php?reference=exfor-10b&amp;style=small');return false">exfor-10b</a><br>Procedure: 'e+t' (The MACS from kT=5 keV to 100 keV are derived from <b>calculated</b> cross sections, which are then <b>normalized</b>            to experimental data, e.g. to the values at kT=25 keV obtained in activation measurements. In these cases the uncertainties should be linearly increased below 25 and above 30 keV to reach about 30% at the extreme kT values.)<br>Year:  2012<br>
<br><b>X-factor:</b><br>
<b>Please note:</b> X-factors for this element have not been calculated but are expected to be close to 1.<br>
<br><b>SEF (Stellar enhancement factor):</b><br>
Reference: <br>Year:  <br>Comment: <br><b>Please note:</b> SEF for this element have not been calculated but are expected to be close to 1.<br>
<br><b>Rate:</b><br>
Reaction rate N<sub>A</sub>&lt;&sigma;v&gt; given in 10<sup>4</sup> cm<sup>3</sup>/mole/s, including SEF
</div>

<!-- Pics are not uptodate anymore :-/   June 2017 by Ralf
<div class="header" onclick="toggledata(this);">Isotopic mass chain</div>
<div class="data">
<img src="se.gif">
<center><img src="clear.gif" alt="Isotopic Mass Chain" name="masschainimg"></center>
</div>
-->

<div class="header" onclick="toggledata(this);">Chart of nuclei</div>
<div class="data">



<center><div id='chart'><table border=0 cellpadding=0 cellspacing=0>
<tr><td></td><td align=center class='arrow' onclick="move_chart('N=5&Z=6');return false;"><img src='arup.png' width=38 height=13 alt='up'></td><td></td></tr>
<tr><td class='arrow' onclick="move_chart('N=4&Z=5');return false;"><img src='arleft.png' width=13 height=38 alt='left'></td><td><table border=0 cellpadding=1 cellspacing=1><tr height=70><td style='opacity: 0.5' class='' width=70><sup>10</sup>N<br><small>0.00 ms<br>P</small></td>
<td style='opacity: 0.5' class='' width=70><sup>11</sup>N<br><small>0.00 ms<br>P</small></td>
<td style='opacity: 0.5' class='betaplus' width=70><sup>12</sup>N<br><small>11.00 ms<br>&beta;<sup>+</sup></small></td>
<td style='opacity: 0.5' class='betaplus' width=70><sup>13</sup>N<br><small>9.96 m<br>&beta;<sup>+</sup></small></td>
<td  class='stable' width=70><a href='selementquery.php?isotope=N14'><sup>14</sup>N<br><small>99.634<br>0.041 mb</small></a></td>
</tr><tr height=70><td style='opacity: 0.5' class='betaplus' width=70><sup>9</sup>C<br><small>126.00 ms<br>&beta;<sup>+</sup></small></td>
<td style='opacity: 0.5' class='betaplus' width=70><sup>10</sup>C<br><small>19.26 s<br>&beta;<sup>+</sup></small></td>
<td style='opacity: 0.5' class='betaplus' width=70><sup>11</sup>C<br><small>20.33 m<br>&beta;<sup>+</sup></small></td>
<td  class='stable' width=70><a href='selementquery.php?isotope=C12'><sup>12</sup>C<br><small>98.89<br>0.0154 mb</small></a></td>
<td  class='stable' width=70><a href='selementquery.php?isotope=C13'><sup>13</sup>C<br><small>1.11<br>0.021 mb</small></a></td>
</tr><tr height=70><td style='opacity: 0.5' class='betaplus' width=70><sup>8</sup>B<br><small>770.00 ms<br>&beta;<sup>+</sup></small></td>
<td style='opacity: 0.5' class='betaplus' width=70><sup>9</sup>B<br><small>0.00 ms<br>P</small></td>
<td style='opacity: 0.5' class='stable' width=70><sup>10</sup>B<br><small>19.8<br></small></td>
<td style='opacity: 0.5' class='stable' width=70><sup>11</sup>B<br><small>80.2<br></small></td>
<td style='opacity: 0.5' class='betaminus' width=70><sup>12</sup>B<br><small>20.20 ms<br>&beta;<sup>-</sup></small></td>
</tr><tr height=70><td style='opacity: 0.5' class='betaplus' width=70><sup>7</sup>Be<br><small>53.22 d<br>&beta;<sup>+</sup></small></td>
<td style='opacity: 0.5' class='alpha' width=70><sup>8</sup>Be<br><small>0.00 ms<br>&alpha;</small></td>
<td  class='stable' width=70><a href='selementquery.php?isotope=Be9'><sup>9</sup>Be<br><small>100<br>0.0104 mb</small></a></td>
<td style='opacity: 0.5' class='betaminus' width=70><sup>10</sup>Be<br><small>1.51 Ma<br>&beta;<sup>-</sup></small></td>
<td style='opacity: 0.5' class='betaminus' width=70><sup>11</sup>Be<br><small>13.81 s<br>&beta;<sup>-</sup></small></td>
</tr><tr height=70><td style='opacity: 0.5' class='stable' width=70><sup>6</sup>Li<br><small>7.59<br></small></td>
<td  class='stable' width=70><a href='selementquery.php?isotope=Li7'><sup>7</sup>Li<br><small>92.41<br>0.042 mb</small></a></td>
<td style='opacity: 0.5' class='betaminus' width=70><sup>8</sup>Li<br><small>838.00 ms<br>&beta;<sup>-</sup></small></td>
<td style='opacity: 0.5' class='betaminus' width=70><sup>9</sup>Li<br><small>178.00 ms<br>&beta;<sup>-</sup></small></td>
<td style='opacity: 0.5' class='betaminus' width=70><sup>10</sup>Li<br><small>0.00 ms<br>N</small></td>
</tr></table>
</td><td class='arrow' onclick="move_chart('N=6&Z=5');return false;"><img src='arright.png' width=13 height=38 alt='right'></td></tr>
<tr><td></td><td class='arrow' onclick="move_chart('N=5&Z=4');return false;" align=center><img src='ardown.png' width=38 height=13 alt='down'></td><td></td></tr></table></div><form action='selementquery.php' method='get'>
Style: (S, M, L, XL or Alberto) <input class='macs' type=text name=style 
size=8><input type=hidden value=10B name=isotope><input class='macs' type='submit' value='Refresh'/></form></center></div><br><br><div align=right><small>Isotope: Boron</small></div>


<!--
<br><br>
<center>
<font color='#aa0000' size='+2'>! Warning !</font><br>
<b>This service is still in an experimental phase. Use it on your own risk. </b><br>
</center>
<br>
-->
</td></tr>
<tr><td class="bord" height=1></td></tr>
<tr><td class="menu" height=20><div align=right>Last modified 
August, 2013 &nbsp;</div></td></tr> <tr><td class="bord" height=1></td></tr>
</table>
</body>
</html>

