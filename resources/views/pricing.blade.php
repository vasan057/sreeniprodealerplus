@include('index_header')
<section class="col-xs-12 pricingbanner ">
    <div class="row">
        <div class="col-xs-12  pricebanner ">
            <div class="row guestbannerlayer">

            </div>
        </div>
    </div>
</section>
<section class="col-xs-12 section3">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12 basictable">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <span class="heading">
                            <h3>Basic</h3>
                            <!--<span class="glyphicon glyphicon-tag"></span>-->
                        </span>
                       <span class="price-value">
                                            <span>Free</span><span class="month">per user / month</span></span>
                        <div class="pricingTable-sign-up">

                            <a href="{{url('dealerregistration?planid='.$d_planlist[0]->encPlanKey.'&freqid='.$trailFreq[0]->encSubKey)}}" class="btn btn-block btn-default">Select Free Plan</a>
                        </div>
                    </div>

                    <div class="pricingContent">
                        <ul>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Website & Mobile Apps</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Pricing per User is <i>Free</i></li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Posting to Portals</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Vehicle Management is <i>upto 20</i></li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Add Images & Videos</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Document Management</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Contacts Management is <i>upto 200</i></li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Loan Offers to Customers</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  e-Auction <i>selling</i></li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> Monthly Lead SMS Alerts</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> Buying from Online Portals</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> Inventory Assessment & Analytics</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> Marketing & Communications</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> Reports</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> Insert Watermark for Images</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> Business Profile Updation</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> Market Trend Analysis</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> Inventory Funding Finance</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> IBB, OBV & Auto Inspekt Integration</li>
                        </ul>
                    </div><!-- /  CONTENT BOX-->

                    <div class="pricingTable-sign-up">
                        <a href="{{url('dealerregistration?planid='.$d_planlist[0]->encPlanKey.'&freqid='.$trailFreq[0]->encSubKey)}}" class="btn btn-block btn-default">Select Free Plan</a>
                    </div><!-- BUTTON BOX-->
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 goldtable">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <span class="heading">
                            <h3>Gold</h3>
                            <!--<span class="glyphicon glyphicon-heart-empty"></span>-->
                        </span>
                        <span class="price-value"><i class="fa fa-inr" aria-hidden="true"></i>  <span>1999</span><span class="month">per user / month</span></span>
                        <div class="pricingTable-sign-up">
                            <a href="{{url('dealerregistration?planid='.$d_planlist[1]->encPlanKey.'&freqid='.$trailFreq[2]->encSubKey)}}" class="btn btn-block btn-default">Try Now For Free</a>
                        </div>
                    </div>

                    <div class="pricingContent">
                        <ul>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Website & Mobile Apps</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Pricing per User is <i><i class="fa fa-inr" aria-hidden="true"></i> 1999</i></li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Posting to Portals</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Vehicle Management is <i>upto 100</i></li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Add Images & Videos</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Document Management</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Contacts Management is <i>upto 1000</i></li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Loan Offers to Customers</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  e-Auction <i>selling</i></li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Monthly Lead SMS Alerts is <i>upto 100</i></li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i> Buying from Online Portals</li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Inventory Assessment & Analytics</li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Marketing & Communications</li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Reports</li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Insert Watermark for Images</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> Business Profile Updation</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> Market Trend Analysis</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> Inventory Funding Finance</li>
                            <li><i class="fa fa-times false" aria-hidden="true"></i> IBB, OBV & Auto Inspekt Integration</li>

                        </ul>
                    </div><!-- /  CONTENT BOX-->

                    <div class="pricingTable-sign-up">
                        <a href="{{url('dealerregistration?planid='.$d_planlist[0]->encPlanKey.'&freqid='.$trailFreq[2]->encSubKey)}}" class="btn btn-block btn-default">Try Now For Free</a>
                    </div><!-- BUTTON BOX-->
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 premiumtable">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <span class="heading">
                            <h3>Premium</h3>
                            <!--<span class="glyphicon glyphicon-star-empty"></span>-->
                        </span>
                       <span class="price-value"><i class="fa fa-inr" aria-hidden="true"></i> <span>3999</span><span class="month">per user / month</span></span>
                        <div class="pricingTable-sign-up">
                            <a href="{{url('dealerregistration?planid='.$d_planlist[2]->encPlanKey.'&freqid='.$trailFreq[1]->encSubKey)}}" class="btn btn-block btn-default">Try Now For Free</a>
                        </div>
                    </div>

                    <div class="pricingContent">
                        <ul>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Website & Mobile Apps</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Pricing per User is <i><i class="fa fa-inr" aria-hidden="true"></i> 3999</i></li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Posting to Portals</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Vehicle Management is <i>Unlimited</i></li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Add Images & Videos</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Document Management</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Contacts Management is <i>Unlimited</i></li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  Loan Offers to Customers</li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i>  e-Auction <i>Buying & Selling</i></li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Monthly Lead SMS Alerts is <i>Unlimited</i></li>
                            <li><i class="fa fa-check true" aria-hidden="true"></i> Buying from Online Portals</li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Inventory Assessment & Analytics</li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Marketing & Communications</li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Reports</li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Insert Watermark for Images</li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Business Profile Updation</li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Market Trend Analysis</li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> Inventory Funding Finance</li>
                            <li><i class="fa fa-check true"  aria-hidden="true"></i> IBB, OBV & Auto Inspekt Integration</li>
                        </ul>
                    </div><!-- /  CONTENT BOX-->
                    <div class="pricingTable-sign-up">
                        <a href="{{url('dealerregistration?planid='.$d_planlist[2]->encPlanKey.'&freqid='.$trailFreq[1]->encSubKey)}}" class="btn btn-block btn-default">Try Now For Free</a>
                    </div><!-- BUTTON BOX-->
                </div>
            </div>
        </div>
    </div>
</section>
@include('index_footer')
</div>
</div>
</body>
<script src="{{URL::asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script type='text/javascript'>var fc_CSS=document.createElement('link');fc_CSS.setAttribute('rel','stylesheet');var fc_isSecured = (window.location && window.location.protocol == 'https:');var fc_lang = document.getElementsByTagName('html')[0].getAttribute('lang'); var fc_rtlLanguages = ['ar','he']; var fc_rtlSuffix = (fc_rtlLanguages.indexOf(fc_lang) >= 0) ? '-rtl' : '';fc_CSS.setAttribute('type','text/css');fc_CSS.setAttribute('href',((fc_isSecured)? 'https://d36mpcpuzc4ztk.cloudfront.net':'http://assets1.chat.freshdesk.com')+'/css/visitor'+fc_rtlSuffix+'.css');document.getElementsByTagName('head')[0].appendChild(fc_CSS);var fc_JS=document.createElement('script'); fc_JS.type='text/javascript'; fc_JS.defer=true;fc_JS.src=((fc_isSecured)?'https://d36mpcpuzc4ztk.cloudfront.net':'http://assets.chat.freshdesk.com')+'/js/visitor.js';(document.body?document.body:document.getElementsByTagName('head')[0]).appendChild(fc_JS);window.livechat_setting= 'eyJ3aWRnZXRfc2l0ZV91cmwiOiJkZWFsZXJwbHVzLmZyZXNoZGVzay5jb20iLCJwcm9kdWN0X2lkIjpudWxsLCJuYW1lIjoiRGVhbGVyIFBsdXMiLCJ3aWRnZXRfZXh0ZXJuYWxfaWQiOm51bGwsIndpZGdldF9pZCI6IjgzODdlYzVlLWJkYzgtNDA5OS05MDk2LTBjZDJjZGJkZmQwZCIsInNob3dfb25fcG9ydGFsIjpmYWxzZSwicG9ydGFsX2xvZ2luX3JlcXVpcmVkIjpmYWxzZSwibGFuZ3VhZ2UiOiJlbiIsInRpbWV6b25lIjoiRWFzdGVybiBUaW1lIChVUyAmIENhbmFkYSkiLCJpZCI6MjMwMDAwMDY1ODMsIm1haW5fd2lkZ2V0IjoxLCJmY19pZCI6IjMzYmQwN2U1OGFhZjYzMzgzNWI2NGU4ZDg1MmMxYmJhIiwic2hvdyI6MSwicmVxdWlyZWQiOjIsImhlbHBkZXNrbmFtZSI6IkRlYWxlciBQbHVzIiwibmFtZV9sYWJlbCI6Ik5hbWUiLCJtZXNzYWdlX2xhYmVsIjoiTWVzc2FnZSIsInBob25lX2xhYmVsIjoiUGhvbmUiLCJ0ZXh0ZmllbGRfbGFiZWwiOiJUZXh0ZmllbGQiLCJkcm9wZG93bl9sYWJlbCI6IkRyb3Bkb3duIiwid2VidXJsIjoiZGVhbGVycGx1cy5mcmVzaGRlc2suY29tIiwibm9kZXVybCI6ImNoYXQuZnJlc2hkZXNrLmNvbSIsImRlYnVnIjoxLCJtZSI6Ik1lIiwiZXhwaXJ5IjoxNDg4Mjc4MDY5MDAwLCJlbnZpcm9ubWVudCI6InByb2R1Y3Rpb24iLCJlbmRfY2hhdF90aGFua19tc2ciOiJUaGFuayB5b3UhISEiLCJlbmRfY2hhdF9lbmRfdGl0bGUiOiJFbmQiLCJlbmRfY2hhdF9jYW5jZWxfdGl0bGUiOiJDYW5jZWwiLCJzaXRlX2lkIjoiMzNiZDA3ZTU4YWFmNjMzODM1YjY0ZThkODUyYzFiYmEiLCJhY3RpdmUiOjEsInJvdXRpbmciOm51bGwsInByZWNoYXRfZm9ybSI6MSwiYnVzaW5lc3NfY2FsZW5kYXIiOm51bGwsInByb2FjdGl2ZV9jaGF0IjowLCJwcm9hY3RpdmVfdGltZSI6bnVsbCwic2l0ZV91cmwiOiJkZWFsZXJwbHVzLmZyZXNoZGVzay5jb20iLCJleHRlcm5hbF9pZCI6bnVsbCwiZGVsZXRlZCI6MCwibW9iaWxlIjoxLCJhY2NvdW50X2lkIjpudWxsLCJjcmVhdGVkX2F0IjoiMjAxNy0wMi0wM1QxMzoxNDowMi4wMDBaIiwidXBkYXRlZF9hdCI6IjIwMTctMDItMDNUMTM6MTQ6MDkuMDAwWiIsImNiRGVmYXVsdE1lc3NhZ2VzIjp7ImNvYnJvd3Npbmdfc3RhcnRfbXNnIjoiWW91ciBzY3JlZW5zaGFyZSBzZXNzaW9uIGhhcyBzdGFydGVkIiwiY29icm93c2luZ19zdG9wX21zZyI6IllvdXIgc2NyZWVuc2hhcmluZyBzZXNzaW9uIGhhcyBlbmRlZCIsImNvYnJvd3NpbmdfZGVueV9tc2ciOiJZb3VyIHJlcXVlc3Qgd2FzIGRlY2xpbmVkIiwiY29icm93c2luZ19hZ2VudF9idXN5IjoiQWdlbnQgaXMgaW4gc2NyZWVuIHNoYXJlIHNlc3Npb24gd2l0aCBjdXN0b21lciIsImNvYnJvd3Npbmdfdmlld2luZ19zY3JlZW4iOiJZb3UgYXJlIHZpZXdpbmcgdGhlIHZpc2l0b3LigJlzIHNjcmVlbiIsImNvYnJvd3NpbmdfY29udHJvbGxpbmdfc2NyZWVuIjoiWW91IGhhdmUgYWNjZXNzIHRvIHZpc2l0b3LigJlzIHNjcmVlbi4iLCJjb2Jyb3dzaW5nX3JlcXVlc3RfY29udHJvbCI6IlJlcXVlc3QgdmlzaXRvciBmb3Igc2NyZWVuIGFjY2VzcyAiLCJjb2Jyb3dzaW5nX2dpdmVfdmlzaXRvcl9jb250cm9sIjoiR2l2ZSBhY2Nlc3MgYmFjayB0byB2aXNpdG9yICIsImNvYnJvd3Npbmdfc3RvcF9yZXF1ZXN0IjoiRW5kIHlvdXIgc2NyZWVuc2hhcmluZyBzZXNzaW9uICIsImNvYnJvd3NpbmdfcmVxdWVzdF9jb250cm9sX3JlamVjdGVkIjoiWW91ciByZXF1ZXN0IHdhcyBkZWNsaW5lZCAiLCJjb2Jyb3dzaW5nX2NhbmNlbF92aXNpdG9yX21zZyI6IlNjcmVlbnNoYXJpbmcgaXMgY3VycmVudGx5IHVuYXZhaWxhYmxlICIsImNvYnJvd3NpbmdfYWdlbnRfcmVxdWVzdF9jb250cm9sIjoiQWdlbnQgaXMgcmVxdWVzdGluZyBhY2Nlc3MgdG8geW91ciBzY3JlZW4gIiwiY2Jfdmlld2luZ19zY3JlZW5fdmkiOiJBZ2VudCBjYW4gdmlldyB5b3VyIHNjcmVlbiAiLCJjYl9jb250cm9sbGluZ19zY3JlZW5fdmkiOiJBZ2VudCBoYXMgYWNjZXNzIHRvIHlvdXIgc2NyZWVuICIsImNiX3ZpZXdfbW9kZV9zdWJ0ZXh0IjoiWW91ciBhY2Nlc3MgdG8gdGhlIHNjcmVlbiBoYXMgYmVlbiB3aXRoZHJhd24gIiwiY2JfZ2l2ZV9jb250cm9sX3ZpIjoiQWxsb3cgYWdlbnQgdG8gYWNjZXNzIHlvdXIgc2NyZWVuICIsImNiX3Zpc2l0b3Jfc2Vzc2lvbl9yZXF1ZXN0IjoiQWdlbnQgc2Vla3MgYWNjZXNzIHRvIHlvdXIgc2NyZWVuICJ9fQ==';
    </script>
</html>
