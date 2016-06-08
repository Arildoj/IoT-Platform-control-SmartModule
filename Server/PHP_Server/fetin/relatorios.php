<?php require_once("verifica.php"); ?>
<html>
<head>
	<title></title>
	
	
</head>
<body>


    <div class="col-lg-3">
        <div class="tile tile-img tile-time evening" style="height: 200px">
            <p class="time-widget">
                <span class="time-widget-heading">It Is Currently</span>
                <br>
                <strong>
                    <span id="datetime">Saturday<br>October 25th, 2014<br>11:56:51 PM</span>
                </strong>
            </p>
        </div>
        <div class="tile dark-blue checklist-tile" style="height: 370px">
            <h4><i class="fa fa-check-square-o"></i> To-Do List</h4>
            <div class="checklist">
                <label class="selected">
                    <input checked="" type="checkbox"> <i class="fa fa-wrench fa-fw text-faded"></i> Software Update 2.1
                    <span class="task-time text-faded pull-right">Yesterday</span>
                </label>
                <label class="selected">
                    <input checked="" type="checkbox"> <i class="fa fa-wrench fa-fw text-faded"></i> Server #2 Hardward Upgrade
                    <span class="task-time text-faded pull-right">9:39 AM</span>
                </label>
                <label class="selected">
                    <input checked="" type="checkbox"> <i class="fa fa-warning fa-fw text-orange"></i> Call Ticket #2032
                    <span class="task-time text-faded pull-right">9:53 AM</span>
                </label>
                <label>
                    <input type="checkbox"> <i class="fa fa-warning fa-fw text-orange"></i> Emergency Maintenance
                    <span class="task-time text-faded pull-right">10:14 AM</span>
                </label>
                <label>
                    <input type="checkbox"> <i class="fa fa-file fa-fw text-faded"></i> Purchase Order #439
                    <span class="task-time text-faded pull-right">10:20 AM</span>
                </label>
                <label>
                    <input type="checkbox"> <i class="fa fa-pencil fa-fw text-faded"></i> March Content Update
                    <span class="task-time text-faded pull-right">10:48 AM</span>
                </label>
                <label>
                    <input type="checkbox"> <i class="fa fa-magic fa-fw text-faded"></i> Client #42 Data Scrubbing
                    <span class="task-time text-faded pull-right">11:09 AM</span>
                </label>
                <label>
                    <input type="checkbox"> <i class="fa fa-wrench fa-fw text-faded"></i> PHP Upgrade Server #6
                    <span class="task-time text-faded pull-right">11:17 AM</span>
                </label>
            </div>
        </div>
    </div>

    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-9">
                <div class="tile green" style="height: 320px">
                    <h4><i class="fa fa-usd"></i> Revenue Breakdown <a href="javascript:;"><i class="fa fa-refresh pull-right"></i></a>
                    </h4>
                    <p class="small text-faded">
                        Today:
                        <strong>$324.20 -</strong>
                        Week:
                        <strong>$1,230.43</strong>
                    </p>
                    <div style="position: relative;" id="morris-chart-dashboard"><svg style="overflow: hidden; position: relative; top: -0.5px;" xmlns="http://www.w3.org/2000/svg" width="634" version="1.1" height="240"><desc>Created with Raphaël 2.1.0</desc><defs></defs><text fill-opacity="0.7" font-weight="normal" font-family="Open Sans" font-size="12px" fill="#ffffff" stroke="none" font="10px &quot;Arial&quot;" text-anchor="end" y="198" x="44.5" style="text-anchor: end; font: 12px Open Sans;"><tspan dy="4.5">$0</tspan></text><path stroke-width="0.5" d="M57,198H609" stroke="#aaaaaa" fill="none" style=""></path><text fill-opacity="0.7" font-weight="normal" font-family="Open Sans" font-size="12px" fill="#ffffff" stroke="none" font="10px &quot;Arial&quot;" text-anchor="end" y="154.75" x="44.5" style="text-anchor: end; font: 12px Open Sans;"><tspan dy="4.5">$200</tspan></text><path stroke-width="0.5" d="M57,154.75H609" stroke="#aaaaaa" fill="none" style=""></path><text fill-opacity="0.7" font-weight="normal" font-family="Open Sans" font-size="12px" fill="#ffffff" stroke="none" font="10px &quot;Arial&quot;" text-anchor="end" y="111.5" x="44.5" style="text-anchor: end; font: 12px Open Sans;"><tspan dy="4.5">$400</tspan></text><path stroke-width="0.5" d="M57,111.5H609" stroke="#aaaaaa" fill="none" style=""></path><text fill-opacity="0.7" font-weight="normal" font-family="Open Sans" font-size="12px" fill="#ffffff" stroke="none" font="10px &quot;Arial&quot;" text-anchor="end" y="68.25" x="44.5" style="text-anchor: end; font: 12px Open Sans;"><tspan dy="4.5">$600</tspan></text><path stroke-width="0.5" d="M57,68.25H609" stroke="#aaaaaa" fill="none" style=""></path><text fill-opacity="0.7" font-weight="normal" font-family="Open Sans" font-size="12px" fill="#ffffff" stroke="none" font="10px &quot;Arial&quot;" text-anchor="end" y="25" x="44.5" style="text-anchor: end; font: 12px Open Sans;"><tspan dy="4.5">$800</tspan></text><path stroke-width="0.5" d="M57,25H609" stroke="#aaaaaa" fill="none" style=""></path><text transform="matrix(1,0,0,1,0,8.5)" fill-opacity="0.7" font-weight="normal" font-family="Open Sans" font-size="12px" fill="#ffffff" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="210.5" x="517" style="text-anchor: middle; font: 12px Open Sans;"><tspan dy="4.5">1/30/2014</tspan></text><text transform="matrix(1,0,0,1,0,8.5)" fill-opacity="0.7" font-weight="normal" font-family="Open Sans" font-size="12px" fill="#ffffff" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="210.5" x="425" style="text-anchor: middle; font: 12px Open Sans;"><tspan dy="4.5">1/29/2014</tspan></text><text transform="matrix(1,0,0,1,0,8.5)" fill-opacity="0.7" font-weight="normal" font-family="Open Sans" font-size="12px" fill="#ffffff" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="210.5" x="333" style="text-anchor: middle; font: 12px Open Sans;"><tspan dy="4.5">1/28/2014</tspan></text><text transform="matrix(1,0,0,1,0,8.5)" fill-opacity="0.7" font-weight="normal" font-family="Open Sans" font-size="12px" fill="#ffffff" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="210.5" x="241" style="text-anchor: middle; font: 12px Open Sans;"><tspan dy="4.5">1/27/2014</tspan></text><text transform="matrix(1,0,0,1,0,8.5)" fill-opacity="0.7" font-weight="normal" font-family="Open Sans" font-size="12px" fill="#ffffff" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="210.5" x="149" style="text-anchor: middle; font: 12px Open Sans;"><tspan dy="4.5">1/26/2014</tspan></text><text transform="matrix(1,0,0,1,0,8.5)" fill-opacity="0.7" font-weight="normal" font-family="Open Sans" font-size="12px" fill="#ffffff" stroke="none" font="10px &quot;Arial&quot;" text-anchor="middle" y="210.5" x="57" style="text-anchor: middle; font: 12px Open Sans;"><tspan dy="4.5">1/25/2014</tspan></text><path fill-opacity="0.1" d="M57,125.759525C80,112.049815625,126,74.25093749999999,149,70.92068749999999C172,67.59043749999998,218,104.37645468749999,241,99.11752499999999C264,93.85859531249999,310,32.89690937499998,333,28.849249999999984C356,24.80159062499999,402,53.72935312500001,425,66.73625000000001C448,79.74314687500001,494,129.1176171875,517,132.904425C540,136.6912328125,586,105.999140625,609,97.03071249999999L609,198L57,198Z" stroke="none" fill="#f9f9f9" style="fill-opacity: 0.1;"></path><path stroke-width="2" d="M57,125.759525C80,112.049815625,126,74.25093749999999,149,70.92068749999999C172,67.59043749999998,218,104.37645468749999,241,99.11752499999999C264,93.85859531249999,310,32.89690937499998,333,28.849249999999984C356,24.80159062499999,402,53.72935312500001,425,66.73625000000001C448,79.74314687500001,494,129.1176171875,517,132.904425C540,136.6912328125,586,105.999140625,609,97.03071249999999" stroke="#ffffff" fill="none" style=""></path><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="125.759525" cx="57"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="70.92068749999999" cx="149"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="99.11752499999999" cx="241"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="28.849249999999984" cx="333"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="66.73625000000001" cx="425"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="132.904425" cx="517"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="97.03071249999999" cx="609"></circle><path fill-opacity="0.1" d="M57,143.4120125C80,130.281853125,126,92.30294687499998,149,90.89137499999998C172,89.47980312499999,218,130.353215625,241,132.1194375C264,133.88565937500002,310,109.3439875,333,105.02114999999999C356,100.69831249999999,402,91.98830312499999,425,97.53673749999999C448,103.08517187499999,494,145.0641625,517,149.408625C540,153.7530875,586,136.571484375,609,132.2924375L609,198L57,198Z" stroke="none" fill="#f9f9f9" style="fill-opacity: 0.1;"></path><path stroke-width="2" d="M57,143.4120125C80,130.281853125,126,92.30294687499998,149,90.89137499999998C172,89.47980312499999,218,130.353215625,241,132.1194375C264,133.88565937500002,310,109.3439875,333,105.02114999999999C356,100.69831249999999,402,91.98830312499999,425,97.53673749999999C448,103.08517187499999,494,145.0641625,517,149.408625C540,153.7530875,586,136.571484375,609,132.2924375" stroke="#ffffff" fill="none" style=""></path><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="143.4120125" cx="57"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="90.89137499999998" cx="149"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="132.1194375" cx="241"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="105.02114999999999" cx="333"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="97.53673749999999" cx="425"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="149.408625" cx="517"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="132.2924375" cx="609"></circle><path fill-opacity="0.1" d="M57,160.69254999999998C80,150.1806375,126,118.85168906249999,149,118.64489999999999C172,118.4381109375,218,153.96203906249997,241,159.03823749999998C264,164.1144359375,310,162.5001296875,333,159.25448749999998C356,156.00884531249997,402,132.170796875,425,133.0731C448,133.975403125,494,162.3341578125,517,166.4729125C540,170.61166718750002,586,166.25558124999998,609,166.1831375L609,198L57,198Z" stroke="none" fill="#f9f9f9" style="fill-opacity: 0.1;"></path><path stroke-width="2" d="M57,160.69254999999998C80,150.1806375,126,118.85168906249999,149,118.64489999999999C172,118.4381109375,218,153.96203906249997,241,159.03823749999998C264,164.1144359375,310,162.5001296875,333,159.25448749999998C356,156.00884531249997,402,132.170796875,425,133.0731C448,133.975403125,494,162.3341578125,517,166.4729125C540,170.61166718750002,586,166.25558124999998,609,166.1831375" stroke="#ffffff" fill="none" style=""></path><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="160.69254999999998" cx="57"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="118.64489999999999" cx="149"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="159.03823749999998" cx="241"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="159.25448749999998" cx="333"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="133.0731" cx="425"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="166.4729125" cx="517"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="166.1831375" cx="609"></circle><path fill-opacity="0.1" d="M57,180.643775C80,171.3947625,126,143.9356078125,149,143.647725C172,143.35984218750002,218,174.0127390625,241,178.3407125C264,182.6686859375,310,179.8217546875,333,178.2715125C356,176.7212703125,402,165.487353125,425,165.938775C448,166.390196875,494,180.15288750000002,517,181.8828875C540,183.6128875,586,180.304803125,609,179.778775L609,198L57,198Z" stroke="none" fill="#f9f9f9" style="fill-opacity: 0.1;"></path><path stroke-width="2" d="M57,180.643775C80,171.3947625,126,143.9356078125,149,143.647725C172,143.35984218750002,218,174.0127390625,241,178.3407125C264,182.6686859375,310,179.8217546875,333,178.2715125C356,176.7212703125,402,165.487353125,425,165.938775C448,166.390196875,494,180.15288750000002,517,181.8828875C540,183.6128875,586,180.304803125,609,179.778775" stroke="#ffffff" fill="none" style=""></path><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="180.643775" cx="57"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="143.647725" cx="149"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="178.3407125" cx="241"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="178.2715125" cx="333"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="165.938775" cx="425"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="181.8828875" cx="517"></circle><circle stroke-width="1" style="" stroke="#ffffff" fill="#ffffff" r="0" cy="179.778775" cx="609"></circle></svg><div style="left: 360px; top: 22px; display: none;" class="morris-hover morris-default-style"><div class="morris-hover-row-label">1/29/2014</div><div class="morris-hover-point" style="color: #fff">
Product A:
$148.26
</div><div class="morris-hover-point" style="color: #fff">
Product B:
$151.98
</div><div class="morris-hover-point" style="color: #fff">
Product C:
$164.33
</div><div class="morris-hover-point" style="color: #fff">
Product D:
$142.43
</div></div></div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="tile light-gray" style="height: 320px">
                    <h4><i class="fa fa-bolt"></i> Server Load <a href="javascript:;"><i class="fa fa-refresh pull-right"></i></a>
                    </h4>
                    <p class="small text-faded">
                        <strong>130 GB </strong>of
                        <strong>1024 GB </strong>used
                    </p>
                    <div class="flot-chart flot-chart-dashboard">
                        <div style="padding: 0px; position: relative;" class="flot-chart-content" id="flot-chart-moving-line"><canvas height="240" width="171" class="base"></canvas><canvas style="position: absolute; left: 0px; top: 0px;" height="240" width="171" class="overlay"></canvas><div class="tickLabels" style="font-size:smaller"><div class="xAxis x1Axis" style="color:#545454"></div></div></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="tile orange dash-demo-tile">
                    <h4><i class="fa fa-cloud fa-fw"></i> Data Usage</h4>
                    <div id="easy-pie-1" class="easy-pie-chart" data-percent="86">
                        <span class="percent">86</span>
                    <canvas width="175" height="175"></canvas></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="tile blue dash-demo-tile">
                    <h4><i class="fa fa-check fa-fw"></i> Satisfaction Score</h4>
                    <div id="easy-pie-2" class="easy-pie-chart" data-percent="92">
                        <span class="percent">92</span>
                    <canvas width="175" height="175"></canvas></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="tile red dash-demo-tile">
                    <h4><i class="fa fa-arrow-circle-down fa-fw"></i> Bounce Rate</h4>
                    <div id="easy-pie-3" class="easy-pie-chart" data-percent="27">
                        <span class="percent">27</span>
                    <canvas width="175" height="175"></canvas></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="tile purple dash-demo-tile">
                    <h4><i class="fa fa-shopping-cart fa-fw"></i> Abandoned Carts</h4>
                    <div id="easy-pie-4" class="easy-pie-chart" data-percent="35">
                        <span class="percent">35</span>
                    <canvas width="175" height="175"></canvas></div>
                </div>
            </div>
        </div>
    </div>

                
</body>
</html>