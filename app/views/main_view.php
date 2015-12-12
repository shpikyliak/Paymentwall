<script src="/js/main.js" type="text/javascript"></script>
<button class="btn btn-danger" id="test">TEST</button>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-3 col-sm-2 col-xs-2" ></div>
        <form class="form-horizontal col-lg-4 col-md-6 col-sm-8 col-xs-8">
            <div class="form-group row email">
                <label for="email" class="col-xs-4 control-label" style="text-align:left" >Email</label>

                <div class="col-xs-8">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row phone">
                <label for="phone" class="col-xs-4 control-label" style="text-align:left">Phone</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
            </div>
            <div class="form-group row card_number">
                <label for="month" class="col-xs-4  control-label" style="text-align:left" >Card number</label>
                <div class="col-md-8 col-xs-8">
                    <input type="text" class="form-control" id="card_number" name="card_number">
                </div>
            </div>
            <div class="form-group row expiry_date">
                <label for="month" class="col-xs-4 control-label" style="text-align:left ">Expiry date</label>

                <div class="col-xs-4 ">
                    <select id="month" class="form-control" name="expiry_month">
                        <option default="default" selected="selected">Month</option>
                        <option value="1">1/January</option>
                        <option value="2">2/February</option>
                        <option value="3">3/March</option>
                        <option value="4">4/April</option>
                        <option value="5">5/May</option>
                        <option value="6">6/June</option>
                        <option value="7">7/July</option>
                        <option value="8">8/August</option>
                        <option value="9">9/Septmber</option>
                        <option value="10">10/October</option>
                        <option value="11">11/November</option>
                        <option value="12">12/December</option>
                    </select>
                </div>
                <div class="col-xs-4">
                    <select id="year" class="form-control" name="expiry_year">
                        <option default="default" selected="selected">Year</option>
                        <option value='2015'>2015</option>
                        <option value='2016'>2016</option>
                        <option value='2017'>2017</option>
                        <option value='2018'>2018</option>
                        <option value='2019'>2019</option>
                        <option value='2020'>2020</option>
                        <option value='2021'>2021</option>
                        <option value='2022'>2022</option>
                        <option value='2023'>2023</option>
                        <option value='2024'>2024</option>
                        <option value='2025'>2025</option>
                        <option value='2026'>2026</option>
                        <option value='2027'>2027</option>
                        <option value='2028'>2028</option>
                        <option value='2029'>2029</option>
                        <option value='2030'>2030</option>
                        <option value='2031'>2031</option>
                        <option value='2032'>2032</option>
                        <option value='2033'>2033</option>
                        <option value='2034'>2034</option>
                        <option value='2035'>2035</option>
                        <option value='2036'>2036</option>
                        <option value='2037'>2037</option>
                        <option value='2038'>2038</option>
                        <option value='2039'>2039</option>
                        <option value='2040'>2040</option>
                        <option value='2041'>2041</option>
                        <option value='2042'>2042</option>
                        <option value='2043'>2043</option>
                        <option value='2044'>2044</option>
                        <option value='2045'>2045</option>
                    </select>
                </div>
            </div>
            <div class="form-group row cvv2">
                <label for="cvv2" class="col-xs-4  control-label" style="text-align:left">CVV2</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" id="cvv2" name="cvv2">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-5"></div>
                <div class="col-xs-offset-5 col-xs-10">
                    <button type="submit" class="btn btn-primary">SEND</button>
                </div>

            </div>
        </form>
        <div class="col-lg-4 col-md-3 col-sm-2"></div>
        <div class="clearfix"></div>
    </div>
</div>
