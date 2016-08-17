<head>
    <title>Bootstrap Coupons</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<style>

.coupon {
    border: 3px dashed #bcbcbc;
    border-radius: 10px;
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", 
    "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
    font-weight: 300;
}

.coupon #head {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    min-height: 56px;
    background-color: gray;
}

.coupon #footer {
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

#title .visible-xs {
    font-size: 12px;
  
}

.coupon #title img {
    font-size: 30px;
    height: 30px;
    margin-top: 5px;
     
}

@media screen and (max-width: 300px) {
    .coupon #title img {
        height: 15px;
    }
}

.coupon #title span {
    float: right;
    margin-top: 5px;
    font-weight: 700;
    text-transform: uppercase;
}

.coupon-img {
    width: 100%;
    margin-bottom: 15px;
    margin-top: 10px;
    padding: 0;
}

.items {
    margin: 15px 0;
}

.usd, .cents {
    font-size: 20px;
}

.number {
    font-size: 40px;
    font-weight: 700;
}

sup {
    top: -15px;
}

#business-info ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
    text-align: center;
}

#business-info ul li { 
    display: inline;
    text-align: center;
}

#business-info ul li span {
    text-decoration: none;
    padding: .2em 1em;
}

#business-info ul li span i {
    padding-right: 5px;
}

.disclosure {
    padding-top: 15px;
    font-size: 11px;
    color: #bcbcbc;
    text-align: center;
}

.coupon-code {
    color: #333333;
    font-size: 11px;
}

.exp {
    color: #f34235;
}

.print {
    font-size: 14px;
    float: right;
}

</style>




<div class="container">

    <div class="row"><h1 class="text-center"></h1>
        <p class="text-center"></p>
    </div>



	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default coupon">
              <div class="panel-heading" id="head">
                <div class="panel-title" id="title">
                    <img src="Perkplain.png">
                  
                </div>
              </div>
              <div class="panel-body">
                <img src="http://pch.district70.org/wp-content/uploads/2014/05/Coldstone-logo.jpg" class="coupon-img img-rounded">
                <div class="col-md-9">
                    <ul class="items">
                        <li>Offer good for any size dessert</li>
                        <li>Offer includes cakes and ice cream sandwiches</li>
                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="offer">
                        <span class="number">15% off</span>
                        <span class="cents"><sup>Preferred Employee Pricing</sup></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <p class="disclosure">This recurring discount through Perk City is only good for users who have been given a login through 
                    their respective employers. Discount valid if user is with friends
                     and family, but cannot be redeemed without user present.
                     No cash value.</p>
                </div>
              </div>
              <div class="panel-footer">
                <div class="coupon-code">
                    Code: PC152
                
                </div>
                <div class="exp">Expires: Sep 30, 2016</div>
              </div>
            </div>
    	</div>
    </div>
    </div>
    
    <p class="text-center"><a href="#" class="btn btn-default">Back to top <i class="fa fa-chevron-up"></i></a></p>

</div>